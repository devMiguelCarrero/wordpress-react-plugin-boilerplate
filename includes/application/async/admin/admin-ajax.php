<?php

	class WRB_Admin_ajax {

        public function init() {
            add_action( 'wp_ajax_WRB_custom_action' , [ $this , 'custom_action' ] );
        }

        public function custom_action() {
            echo json_encode([ esc_attr__('i\'m just a custom action that only works for admin users but can\'t do anyting by itself', WRB_DOMAIN)]);
            exit();
        }

        public static function instance() {

			$ajax = new WRB_Admin_ajax();
			$ajax->init();

		}

	}

	add_action( 'init' , [ 'WRB_Admin_ajax' , 'instance' ] );