<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<div class="body_wrapper">
    <div class="tmpl_sector sector_head_top_line">
        <div class="shadow_head_top"></div>
        <div class="glare_head_top"></div>
        <div class="centered_wrap wrap_center">
            <h1 class="logo_title">МНОГОПРОФИЛЬНАЯ КОМПАНИЯ</h1>
        </div>
    </div>

    <div class="tmpl_sector sector_head_logo">
        
		
		
  <?php /* if ($page['featured']): ?>
    <div id="featured"><div class="section clearfix">
      <?php print render($page['featured']); ?>
    </div></div> <!-- /.section, /#featured -->
  <?php endif;*/ ?>
		

		
		<div class="site_map">
            <span class="title">Карта сайта</span>
            <div class="site_map_list">
                <div class="site_map_arrow_up"></div>
                <div class="site_map_arrow_down"></div>
                <div class="scroll_wrapper">
					<?php
						function renderMenuItems($arr)
						{
							$output = '';
							foreach($arr as $value)
							{
								$output .= 
								'<div class="row"><a title="' . $value['attributes']['title']. '" href="/' . drupal_get_path_alias($value['href']) . '">' . $value['title'] . '</div>';
							}
							return $output;
						}
					?>
					
                    <!-- Don't touch this! -->
                    <br>
                    <br>
                    <div class="row section"><a title="ООО Гриновья - арболит в Иркутске, строительство и окна" href="/">Главная</div></a>
                    <div class="row"><a href="/novosti_i_otzivi">Новости</div></a>
                    <div class="row"><a href="/kontakty">Контактная информация</div></a>
                    <br>
                    <div class="row section"><a href="/">Строительство</div></a>
					<?php echo renderMenuItems(menu_navigation_links('menu-building-menu')); ?>
                    <br>
					<div class="row section"><a href="/arbolit">Абролит</div></a>
					<?php echo renderMenuItems(menu_navigation_links('menu-arbolit-menu')); ?>
					<br>
                    <div class="row section"><a href="/okna">Окна</div></a>
					<?php echo renderMenuItems(menu_navigation_links('menu-windows-menu')); ?>
                    <!-- Don't touch this! -->
                    <br>
                    <br>
                </div>
            </div>
        </div>

        <div class="centered_wrap wrap_center">
            <!--<div class="line_left"><span>1</span></div>-->
            <div class="block_chamfered_logo">
                <div class="line_left"></div>
                <div class="line_right"></div>

                <div class="logo_head"></div>

                <a class="a_contacts c_font_a_dotted_white" href="#">Контактная информация</a>
            </div>
            <!--<div class="line_right"><span>2</span></div>-->
        </div>
    </div>
	
    <div class="tmpl_sector sector_head_menu">
        <div class="centered_wrap wrap_center">
            <?php
				function checkActive($section)
				{
					if (strpos($_SERVER["REQUEST_URI"], $section) !== false) {
						return 'class="active"';
					}
				}
			?>
			<a href="/stroitelstvo" <?php echo checkActive('/stroitelstvo'); ?>>
                <div class="img_sector_build"></div>
                <span>Строительство</span><div class="delimiter_right"></div>
            </a>
            <a href="/arbolit" <?php echo checkActive('/arbolit'); ?>>
                <div class="img_sector_arbolit"></div>
                <span>Арболит</span><div class="delimiter_right"></div>
            </a>
            <a href="/okna" <?php echo checkActive('/okna'); ?>>
                <div class="img_sector_windows"></div>
                <span>Окна</span><div class="delimiter_right"></div>
            </a>
        </div>
    </div>
	
    <div class="tmpl_sector sector_head_breadcrumbs">
		<?php
			function getSection()
			{
				$url = $_SERVER["REQUEST_URI"];
				if (strpos($_SERVER["REQUEST_URI"], '/stroitelstvo') !== false) {
					return '<div class="delimiter_right"></div><a href="' . '/stroitelstvo' . '"><span>Строительство</span></a>';
				} else if (strpos($_SERVER["REQUEST_URI"], '/arbolit') !== false) {
					return '<div class="delimiter_right"></div><a href="' . '/arbolit' . '"><span>Арболит</span></a>';
				} else if (strpos($_SERVER["REQUEST_URI"], '/okna') !== false) {
					return '<div class="delimiter_right"></div><a href="' . '/okna' . '"><span>Окна</span></a>';
				} else {
					return '';
				}
			}

			function getPage($title)
			{
				if (substr_count($_SERVER["REQUEST_URI"], '/') > 1) 
				{
					return '<div class="delimiter_right"></div><span>' . $title . '</span>';
				} else {
					return '';
				}
			}
		?>
        <div class="centered_wrap middle_wrap">
            <a title="ООО Гриновья - арболит, строительство и окна в Иркутске" href="/">
				<span>Главная</span>
			</a>
            <?php
				echo getSection();
			?>
            <?php
				echo getPage($title);
			?>
        </div>
    </div>
	
	
    <div class="tmpl_sector sector_content">
        <div class="centered_wrap">
            <div class="shadow_top_left"></div>
            <div class="shadow_top_right"></div>
            <div class="title_wrapper">
                <div class="edge_chamfered_left"></div>
                <div class="content_title"><span><?php print $title; ?></span></div>
                <div class="edge_chamfered_right"></div>
            </div>

            <div class="line_dotted_top"></div>
            <div class="content_wrapper">
                <div class="pad">
                    <?php print render($page['content']); ?>
                </div>
            </div>

            <div class="line_dotted_bottom"></div>
            <div class="footer_wrapper">
                <div class="edge_chamfered_left"></div>
                <div class="wrap"></div>
                <div class="edge_chamfered_right"></div>
            </div>
        </div>
    </div>
	
	
	
	
	
	
	
</div>



  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>
