<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/themes/bartik/common.php');

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
<div class="wallpapper"></div>
<div class="body_wrapper">

	<!-- Overlays for callback and write_to_us popups -->
    <div class="overlay">
        <div class="window window_callback">
            <div class="wrap">
                <div class="close"></div>
                <span class="title">Заказ обратного звонка</span>
                <hr>
                <label for="form_callback_name">Представьтесь</label>
                <br>
                <input id="form_callback_name" type="text" name="form_callback_name"/>
                <br>
                <label for="form_callback_email">Ваш Email</label>
                <br>
                <input id="form_callback_email" type="text" name="form_callback_email"/>
                <br>
                <label for="form_callback_phone">Ваш телефон</label>
                <br>
                <input id="form_callback_phone" type="text" name="form_callback_phone"/>
                <div class="button"><div class="edge_chamfered_left"></div><div class="edge_chamfered_right"></div>
					<span class="click_me_to_have_some_fun" typebut="callback">ЗАКАЗАТЬ</span>
				</div>
            </div>
            <div class="overlay_window_bg"></div>
        </div>

        <div class="window window_write_to_us">
            <div class="wrap">
                <div class="close"></div>
                <span class="title">Напишите нам</span>
                <hr>
                <label for="form_callback_email">Ваш Email</label>
                <br>
                <input id="form_callback_email" type="text" name="form_callback_email"/>
                <br>
                <label for="form_write_to_us_message">Ваше сообщение</label>
                <br>
                <textarea id="form_write_to_us_message" type="text" name="form_write_to_us_message"></textarea>
                <div class="button"><div class="edge_chamfered_left"></div><div class="edge_chamfered_right"></div>
					<span class="click_me_to_have_some_fun" typebut="write_to_us">ОТПРАВИТЬ</span>
				</div>
            </div>
            <div class="overlay_window_bg"></div>
        </div>
    </div>

    <div class="tmpl_sector sector_head_top_line">
        <div class="shadow_head_top"></div>
        <div class="glare_head_top"></div>
        <div class="centered_wrap wrap_center">
            <h1 class="logo_title">МНОГОПРОФИЛЬНАЯ КОМПАНИЯ</h1>
        </div>
    </div>

    <div class="tmpl_sector sector_head_logo">
		<div class="site_map">
            <span class="title">Карта сайта</span>
            <div class="site_map_list">
                <div class="site_map_arrow_up"></div>
                <div class="site_map_arrow_down"></div>
                <div class="scroll_wrapper">				
                    <!-- Don't touch this! -->
                    <br>
					<br>
					<br>
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
					<br>
                    <br>
                </div>
            </div>
        </div>

        <div class="centered_wrap wrap_center">
				<div class="block_chamfered_logo">
					<div class="line_left"></div>
					<div class="line_right"></div>
					<a href="/" title="ООО Гриновья, Иркутск">
						<div class="logo_head"></div>
					</a>
					<a class="a_contacts c_font_a_dotted_white" title="Адрес, телефоны, время работы ООО Гриновья" href="/kontakty">Контактная информация</a>
				</div>
        </div>
    </div>
	
    <div class="tmpl_sector sector_head_menu">
        <div class="centered_wrap wrap_center">
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
	
	
    <div class="tmpl_sector sector_illustration">
	    <div class="centered_wrap middle_wrap">
	        <span class="info">выберите и нажмите по одиному из разделов сайта</span>
	        <div class="illustration_bg">
				<a href="#">
					<div class="item item_arbolit">
						<div class="information">
							<span class="title">АРБОЛИТ</span>
							<p class="description">
							Новый, прочный, надежный, недорогой материал,	который подойдет для реализации любых строительных задач.
							</p>
							<div class="illustration_information_line90d"></div>
							<div class="illustration_information_circle"></div>
						</div>
						<div class="image"></div>
						<div class="selection"></div>
					</div>
				</a>
				<a href="#">
					<div class="item item_windows">
						<div class="information">
							<span class="title">ОКНА</span>
							<p class="description">
							Мы изготавливаем, а также устанавливаем окна различных видов и типоразмеров.
							</p>
							<div class="illustration_information_line45d"></div>
							<div class="illustration_information_circle"></div>
						</div>
						<div class="image"></div>
						<div class="selection"></div>
					</div>
				</a>
				<a href="#">
					<div class="item item_build">
						<div class="information">
							<span class="title">СТРОИТЕЛЬСТВО</span>
							<p class="description">
							Строим проекты любой сложности. Различные <br>
							планировки, материалы высокой надежности.
							</p>
							<div class="illustration_information_line45d"></div>
							<div class="illustration_information_circle"></div>
						</div>
						<div class="image"></div>
						<div class="selection"></div>
					</div>
				</a>
	        </div>
	    </div>
	</div>
	
    <div class="tmpl_sector sector_news_about">
        <div class="centered_wrap wrap_center">
            <div class="block_title">
                <div class="line_left"></div>
                <div class="line_right"></div>
                <div class="wrapper">
                    <div class="chamfered_left"></div>
                    <div class="body">Новости</div>
                    <div class="chamfered_right"></div>

                    <div class="line" style="width: 200px;"></div>
                    <div class="chamfered_left"></div>
                    <div class="body">Мы</div>
                    <div class="chamfered_right"></div>
                </div>
            </div>
        </div>
        <div class="centered_wrap">
            <div class="wrap_left">
                <?php print render($page['left_news_menu']); ?>
            </div>
            <div class="wrap_right">
                <div class="sector_news_about_delimiter_line"></div>
                <div class="block_about_text">
                    <?php print render($page['content']); ?>
                </div>
            </div>
        </div>
    </div>
	
    <div class="tmpl_sector sector_company_features">
        <div class="centered_wrap wrap_center">
            <div class="block_title">
                <div class="line_left"></div>
                <div class="line_right"></div>
                <div class="wrapper">
                    <div class="chamfered_left"></div>
                    <div class="body">Преимущества компании</div>
                    <div class="chamfered_right"></div>
                </div>
            </div>
            <div class="company_features_slider">
                <ul>
                    <li>
                        <div class="title"><div class="edge_chamfered_left"></div><div class="edge_chamfered_right"></div><span>ПЕРВОКЛАССНЫЕ СПЕЦИАЛИСТЫ</span></div>
                        <div class="description">
                            Основа успеха компании «Гриновья» – квалифицированные, опытные, мотивированные сотрудники. С момента основания «Гриновия» уделяла особое внимание обучению и повышению квалификации рабочего коллектива.
                        </div>
                    </li>
                    <li>
                        <div class="title"><div class="edge_chamfered_left"></div><div class="edge_chamfered_right"></div><span>ДОБРОЖЕЛАТЕЛЬНОЕ ОТНОШЕНИЕ</span></div>
                        <div class="description">
                            Мы дорожим взаимоотношениями с каждым клиентом. Мы понимаем, что для успеха нужно не только поддерживать наилучшее качество продуктов и соответствоваь высшим стандартам, но и выстраивать долгосрочные и доверительные отношения с клиентами.
                        </div>
                    </li>
                </ul>
            </div>

            <div class="company_features_glare"></div>
        </div>
        <div class="wrap_image">
            <img src="/images/company_features_slide1.jpg" alt=""/>
        </div>
        <div class="company_features_shadow"></div>
    </div>
    <script type="text/javascript">
        var $slider_obj1 = new FeedbackSliderObject($('.company_features_slider'), 3000, 1);
    </script>
	
    <div class="tmpl_sector sector_feedback">
        <div class="centered_wrap wrap_center">
            <div class="block_title">
                <div class="line_left"></div>
                <div class="line_right"></div>
                <div class="wrapper">
                    <div class="chamfered_left"></div>
                    <div class="body">Отзывы клиентов</div>
                    <div class="chamfered_right"></div>
                </div>
            </div>

            <div class="block_feedback_slider">
                <ul>
                    <?php print render($page['feedback_mainpage']); ?>
                </ul>
            </div>
            <div class="wrap_center block_feedback_slider_controls">
                <div class="control_previous_slide"><span>предыдущий отзыв</span></div>
                <div class="control_next_slide"><div class="progress"></div><span>следующий отзыв</span></div>
            </div>

            <script type="text/javascript">
                var $slider_obj2 = new FeedbackSliderObject($('.block_feedback_slider'));
            </script>
        </div>
    </div>
	
	<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/themes/bartik/footer.php'); ?>
	
</div>