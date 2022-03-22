<?php
	
	class WRB_View {

		public function get($view,$data=null) {
			if(is_array($data)){
				foreach ($data as $key => $value) {
					${$key} = $value;
				}
			}
			require_once WRB_ACHIEVEMENTS_PATH_VIEW . $view. '.php';
		}

		public function render($view,$data=null) {
	        extract($data);

	        ob_start();
	        include( WRB_ACHIEVEMENTS_PATH_VIEW . $view. '.php' );
	        $content = ob_get_contents();
	        ob_end_clean();

	        return $content;
	    }

	}