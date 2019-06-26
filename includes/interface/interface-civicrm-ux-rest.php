<?php

interface iCivicrm_Ux_REST {

	/**
	 * @param \Civicrm_Ux_REST_Manager $manage
	 *
	 * @return mixed
	 */
	public function init_setup( $manage );

	/**
	 * @return string
	 */
	public function get_route();

	/**
	 * @return string
	 */
	public function get_endpoint();

	/**
	 * @return string
	 */
	public function get_method();

	/**
	 * @param \WP_REST_Request $data
	 *
	 * @return mixed
	 */
	public function rest_api_callback( $data );
}