<?php

	class WRB_EnquequeVars {

		function __construct() {
			$this->variables = array (
				'siteurl' => get_site_url(),
				'ajaxurl' => get_site_url().'/wp-admin/admin-ajax.php',
			);
		}

	}

	class WRB_LocalizeScripts {

		function __construct() {
			$this->localize = new WRB_EnquequeVars();
		}

		public function localize($array) {
			$localize = array();

			foreach ($array as $var) {
				$localize[ $var ] = $this->localize->variables[ $var ];
			}

			return $localize;
		}

	}