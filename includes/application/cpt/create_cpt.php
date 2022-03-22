<?php
	function WRB_Create_CPTs() {

		$CPT = new WRB_CPT_builder();

		//Example CPT
		$course = $CPT->setID('examplecpt')
						->setLabel( esc_attr__( 'Example Custom Post Type' , WRB_DOMAIN ) )
						->setDescription( esc_attr__( 'Example custom post type that you can edit and chage' , WRB_DOMAIN ) )
						->setTaxonomies( array('post_tag') )
						->setMenuIcon( 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="32" height="32" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" preserveAspectRatio="none" viewbox="0 0 32 32"><path d="M23,4H9C6.8,4,6,5.79,6,7v18c0,2.2,1.79,3,3,3h14c2.2,0,3-1.79,3-3V7C26,4.8,24.21,4,23,4z M13,5h6v3h-6V5z M7,7  c0,0,0-2,2-2h3v3H7V7z M12,27c-1.75,0-3,0-3,0s-2,0-2-2v-1h5V27z M12,23H7v-3h5V23z M12,19H7v-3h5V19z M19,27h-6v-3h6V27z M19,23h-6  v-3h6V23z M19,19h-6v-3h6V19z M25,25c0,0,0,2-2,2h-3v-3h5V25z M25,23h-5v-3h5V23z M25,19h-5v-3h5V19z M25,15H7V9h18V15z M25,8h-5V5  c1.75,0,3,0,3,0s2,0,2,2V8z M11,14h10c0.97,0,2-0.7,2-2s-1.03-2-2-2H11c-1.3,0-2,1.03-2,2C9,13.3,10.03,14,11,14z M11,11  c1,0,10,0,10,0s1,0,1,1s-1,1-1,1H11c0,0-1,0-1-1C10,12,10,11,11,11z"></path></svg>') )
						->setLabels()
							->setName( esc_attr__( 'Example CPTs' , WRB_DOMAIN ) )
							->setMenuName( esc_attr__( 'Example CPTs' , WRB_DOMAIN ) )
							->setPlural( esc_attr__( 'Example CPTs' , WRB_DOMAIN ) )
							->setSingular( esc_attr__( 'Example CPT' , WRB_DOMAIN ) );
		$course->cpt->create();
		
	}
	
	add_action( 'init' , 'WRB_Create_CPTs' , 2 );
