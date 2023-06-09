<?php

/**
 * Abstract LP_Async_Request class.
 *
 * @abstract
 */
abstract class LP_Async_Request {
	/**
	 * Prefix
	 * @var string
	 */
	protected $prefix = 'lp';

	/**
	 * Action
	 * @var string
	 */
	protected $action = 'async_request';

	/**
	 * Identifier
	 *
	 * @var string
	 */
	protected $identifier;

	/**
	 * Data
	 *
	 * (default value: array())
	 *
	 * @var array
	 */
	protected $data = array();

	/**
	 * Initiate new async request
	 */
	public function __construct() {
		$this->identifier = $this->prefix . '_' . $this->action;

		add_action( 'wp_ajax_' . $this->identifier, array( $this, 'maybe_handle' ) );
		add_action( 'wp_ajax_nopriv_' . $this->identifier, array( $this, 'maybe_handle' ) );
	}

	/**
	 * Set data used during the request
	 *
	 * @param array $data Data.
	 *
	 * @return $this
	 */
	public function data( $data ) {
		$this->data = $data;

		return $this;
	}

	/**
	 * Dispatch the async request
	 *
	 * @return array|WP_Error
	 */
	public function dispatch() {
		$url  = esc_url_raw( add_query_arg( $this->get_query_args(), $this->get_query_url() ) );
		$args = $this->get_post_args();

		return wp_remote_post( $url, $args );
	}

	/**
	 * Get query args
	 *
	 * @return array
	 */
	protected function get_query_args() {
		require_once( ABSPATH . 'wp-includes/pluggable.php' );
		if ( property_exists( $this, 'query_args' ) ) {
			return $this->query_args;
		}

		$args = array(
			'action' => $this->identifier,
			'nonce'  => wp_create_nonce( $this->identifier ),
		);

		/**
		 * Filters the post arguments used during an async request.
		 *
		 * @param array $url
		 */
		return apply_filters( $this->identifier . '_query_args', $args );
	}

	/**
	 * Get query URL
	 *
	 * @return string
	 */
	protected function get_query_url() {
		if ( property_exists( $this, 'query_url' ) ) {
			return $this->query_url;
		}

		$url = admin_url( 'admin-ajax.php' );

		/**
		 * Filters the post arguments used during an async request.
		 *
		 * @param string $url
		 */
		return apply_filters( $this->identifier . '_query_url', $url );
	}

	/**
	 * Get post args
	 *
	 * @return array
	 */
	protected function get_post_args() {
		if ( property_exists( $this, 'post_args' ) ) {
			return $this->post_args;
		}

		$args = array(
			'timeout'   => 0.01,
			'blocking'  => false,
			'body'      => $this->data,
			'cookies'   => $_COOKIE,
			'sslverify' => is_ssl(),
		);

		/**
		 * Filters the post arguments used during an async request.
		 *
		 * @param array $args
		 */
		return apply_filters( $this->identifier . '_post_args', $args );
	}

	/**
	 * Maybe handle
	 *
	 * Check for correct nonce and pass to handler.
	 */
	public function maybe_handle() {
		// Don't lock up other requests while processing
		session_write_close();

		/**
		 * set params $_POST['lp_no_check_referer'] = 1
		 * for case: send request when user not login, but get request when user logged
		 * @editor tungnx
		 * @modify 4.1.4
		 */
		if ( ! isset( $_POST['lp_no_check_referer'] ) ) {
			check_ajax_referer( $this->identifier, 'nonce' );
		}

		$this->handle();

		wp_die();
	}

	/**
	 * Handle
	 *
	 * Override this method to perform any actions required
	 * during the async request.
	 */
	abstract protected function handle();

}
