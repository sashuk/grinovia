    <!DOCTYPE html PUBLIC>
    <html>
    <head>
        <title>ГРИНОВЬЯ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="//code.jquery.com/jquery.js"></script>
        <script src="/js/jquery.maskedinput.min.js"></script>

        <!-- User styles -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/common.css">

        <!-- User Javascript -->
        <script src="/js/bbs_grinovia.js"></script>
    </head>
    <body>
        <div class="body_wrapper">


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

                            <div class="row section"><a href="#">Главная</div></a>
                            <div class="row"><a href="#">Новости</div></a>
                            <div class="row"><a href="#">Особенности</div></a>
                            <div class="row"><a href="#">Отзывы</div></a>
                            <div class="row"><a href="#">Контактная информация Контактная</div></a>
                            <br>
                            <div class="row section"><a href="#">Абролит</div></a>
                            <div class="row"><a href="#">Описание</div></a>
                            <div class="row"><a href="#">Проекты</div></a>
                            <div class="row"><a href="#">Цены</div></a>
                            <div class="row"><a href="#">Доставка</div></a>
                            <br>
                            <div class="row section"><a href="#">Строительство</div></a>
                            <div class="row"><a href="#">Описание</div></a>
                            <div class="row"><a href="#">Проекты</div></a>
                            <div class="row"><a href="#">Цены</div></a>
                            <div class="row"><a href="#">Доставка</div></a>
                            <br>
                            <div class="row section"><a href="#">Окна</div></a>
                            <div class="row"><a href="#">Описание</div></a>
                            <div class="row"><a href="#">Проекты</div></a>
                            <div class="row"><a href="#">Цены</div></a>
                            <div class="row"><a href="#">Доставка</div></a>

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
                    <a href="#">
                        <div class="img_sector_windows"></div>
                        <span>Окна</span><div class="delimiter_right"></div>
                    </a>
                    <a href="#" class="active">
                        <div class="img_sector_arbolit"></div>
                        <span>Арболит</span><div class="delimiter_right"></div>
                    </a>
                    <a href="#">
                        <div class="img_sector_build"></div>
                        <span>Строительство</span><div class="delimiter_right"></div>
                    </a>
                </div>
            </div>


            <div class="tmpl_sector sector_head_breadcrumbs">
                <div class="centered_wrap middle_wrap">
                    <a href="#"><span>Главная</span></a>
                    <div class="delimiter_right"></div>
                    <a href="#"><span>Абролит</span></a>
                </div>
            </div>


            <div class="tmpl_sector sector_content">
                <div class="centered_wrap">
                    <div class="shadow_top_left"></div>
                    <div class="shadow_top_right"></div>

                    <div class="title_wrapper">
                        <div class="edge_chamfered_left"></div>
                        <div class="content_title"><span>Применение материала</span></div>
                        <div class="edge_chamfered_right"></div>
                    </div>

                    <div class="line_dotted_top"></div>
                    <div class="content_wrapper">
                        <div class="pad">
                            Распознавание речи — одна из самых интересных и сложных задач искусственного интеллекта. Здесь задействованы достижения весьма различных областей: от компьютерной лингвистики до цифровой обработки сигналов. Чтобы понять, как должна быть устроена машина, понимающая речь, давайте для начала разберемся, с чем мы имеем дело.
                            <br>
                            <br>
                            I. Основы
                            <br>
                            <br>
                            Звучащая речь для нас — это, прежде всего, цифровой сигнал. И если мы посмотрим на запись этого сигнала, то не увидим там ни слов, ни четко выраженных фонем — разные «речевые события» плавно перетекают друг в друга, не образуя четких границ. Одна и та же фраза, произнесенная разными людьми или в различной обстановке, на уровне сигнала будет выглядеть по-разному. Вместе с тем, люди как-то распознают речь друг друга: следовательно, существуют инварианты, согласно которым по сигналу можно восстановить, что же, собственно, было сказано. Поиск таких инвариантов — задача акустического моделирования.
                            <br>
                            <br>
                            Предположим, что речь человека состоит из фонем (это грубое упрощение, но в первом приближении оно верно). Определим фонему как минимальную смыслоразличительную единицу языка, то есть звук, замена которого может привести к изменению смысла слова или фразы. Возьмем небольшой участок сигнала, скажем, 25 миллисекунд. Назовем этот участок «фреймом». Какая фонема была произнесена на этом фрейме? На этот вопрос сложно ответить однозначно — многие фонемы чрезвычайно похожи друг на друга. Но если нельзя дать однозначный ответ, то можно рассуждать в терминах «вероятностей»: для данного сигнала одни фонемы более вероятны, другие менее, третьи вообще можно исключить из рассмотрения. Собственно, акустическая модель — это функция, принимающая на вход небольшой участок акустического сигнала (фрейм) и выдающая распределение вероятностей различных фонем на этом фрейме. Таким образом, акустическая модель дает нам возможность по звуку восстановить, что было произнесено — с той или иной степенью уверенности.
                            <br>
                            <br>
                            Еще один важный аспект акустики — вероятность перехода между различными фонемами. Из опыта мы знаем, что одни сочетания фонем произносятся легко и встречаются часто, другие сложнее для произношения и на практике используются реже. Мы можем обобщить эту информацию и учитывать ее при оценке «правдоподобности» той или иной последовательности фонем.
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
    </body>

    <script type="text/javascript">

    </script>
</html>