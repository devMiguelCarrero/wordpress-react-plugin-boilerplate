<?php

	class WRB_ShortCode {
		
		function __construct() {
		}

		public function init() {
			add_shortcode( 'WRB_shortcode_example' , [ $this , 'WRB_shortcode_example' ] );
		}

		public function WRB_shortcode_example( $atts = array(), $content = null ) {
			return WRB_View::render( 'shortcode/shortcode_example' , [ 'data' => 'custom data' ] );
		}

		public static function instance() {
			return new WRB_ShortCode();
		}

	}

	WRB_ShortCode::instance()->init();