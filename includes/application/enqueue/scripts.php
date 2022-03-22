<?php

	class WRB_Enqueue_Scripts {

		function __construct() {
            $this->index_assets = include WRB_BUILD_PATH . 'index.asset.php';
        }

		public function init() {
			add_action( 'enqueue_block_editor_assets' , [ $this , 'editor_scripts' ] );
            add_action( 'admin_enqueue_scripts' , [ $this , 'admin_scripts' ] );
            add_action( 'wp_enqueue_scripts' , [ $this , 'front_scripts' ] );
		}

		public function admin_scripts() {

			global $pagenow;

			if ( in_array( $pagenow, array( 'post-new.php', 'post.php' ) ) ) {

				wp_enqueue_script( 'wp-color-picker');

					$enqueue = new WRB_EnqueueBuilder();
					$enqueue->setType('script')
						->setName(WRB_DOMAIN . '-course-edit-control')
						->setPath( WRB_PLUGIN_URL . 'build/index.js' )
						->setDependencies($this->index_assets['dependencies'])
						->setVer($this->index_assets['version'])
						->setInFooter(true)
						->enqueue();
					$enqueue->localizeScript(array( 
						'WRB_URLs' => WRB_URLs::instance()->get_array(),
						'WRB_post_info' => WRB_Post::instance()->get_posts_info()
					));

	        }

		}

		public function editor_scripts() {

		}

		public function front_scripts() {
			
		}

		public static function instance() {
			return new WRB_Enqueue_Scripts();
		}

	}

	WRB_Enqueue_Scripts::instance()->init();

