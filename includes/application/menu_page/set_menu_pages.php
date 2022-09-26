<?php

class WRB_SetMenuPages
{
	public static function init()
	{
		/*$page = new WRB_MenuPageBuilder();
		$page->setID('fix-games')
			->setPageTitle(esc_attr__('Fix Team Games', WRB_DOMAIN))
			->setMenuTitle(esc_attr__('Fix Team Games', WRB_DOMAIN))
			->setMenuSlug(WRB_DOMAIN . '-fix-team-games')
			->setCallback('single_react_view')
			->setIconURL('data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="32" height="32" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" preserveAspectRatio="none" viewbox="0 0 32 32"><path class="st0" d="M16,10c0-2.209,1.791-4,4-4s4,1.791,4,4s-1.791,4-4,4S16,12.209,16,10z M22,14l-2,2l-2-2c-4,0-4,7-4,7h12  C26,15,22,14,22,14z M12,12c2.209,0,4-1.791,4-4s-1.791-4-4-4S8,5.791,8,8S9.791,12,12,12z M16.17,13.43C15.12,12.28,14,12,14,12  l-2,2l-2-2c-4,0-4,7-4,7h7.14C13.46,16.82,14.32,14.4,16.17,13.43z M16,28l5-6H11L16,28z" style="fill-rule:evenodd;clip-rule:evenodd;;"></path></svg>'))
			->setPosition(20)
			->build()
			->add();*/
	}
}

add_action('admin_menu', ['WRB_SetMenuPages', 'init']);
