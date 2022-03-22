<?php

	class WRB_Enqueue_Styles {

		function __construct() {
            $this->index_assets = include WRB_BUILD_PATH . 'index.asset.php';
        }

		public function init() {
			add_action( 'enqueue_block_editor_assets' , [ $this , 'editor_styles' ] );
            add_action( 'admin_enqueue_scripts' , [ $this , 'admin_styles' ] );
            add_action( 'wp_enqueue_scripts' , [ $this , 'front_styles' ] );
		}

		public function editor_styles() {

		}

		public function front_styles() {

			$enqueue = new WRB_EnqueueBuilder();
			$enqueue->setType('style')
					->setName('font-awesome')
					->setPath( 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' )
					->setVer('5.15.3')
					->setMedia('all')
					->enqueue();

			$enqueue = new WRB_EnqueueBuilder();
			$enqueue->setType('style')
					->setName( WRB_DOMAIN . '-style' )
					->setPath( WRB_PLUGIN_URL . 'build/style-index.css' )
					->setVer($this->index_assets['version'])
					->setMedia('all')
					->enqueue();

		}

		public function admin_styles() {
			
			global $pagenow;

			if ( in_array( $pagenow, array( 'post-new.php', 'post.php' ) ) ) {

				$enqueue = new WRB_EnqueueBuilder();
				$enqueue->setType('style')
						->setName( WRB_DOMAIN . '-course-edit-style')
						->setPath( WRB_PLUGIN_URL . 'build/index.css' )
						->setVer($this->index_assets['version'])
						->setMedia('all')
						->enqueue();

			}
        	
		}

		public static function instance() {
			return new WRB_Enqueue_Styles();
		}

	}

	WRB_Enqueue_Styles::instance()->init();
