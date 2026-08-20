@extends('front.jahanrahat.layout.layout')
@section('content')
    <main class="main-content" id="home">
        <section class="slideshow">
            <div class="slideshow-inner">
                <div class="slides">
                    <div class="slide is-active ">
                        <div class="slide-content">
                            <div class="caption">
                                <div class="title">Ремонт под ключ</div>
                                <div class="text">
                                    <p>Все сложности берем на себя, от дизайна до вывоза мусора</p>
                                </div>
                                <a href="#contactUs" class="btn btn-inner">
                                    Заказать
                                </a>
                            </div>
                        </div>
                        <div class="image-container">
                            <img src="{{ asset('front/jahanrahat/images/slider/5.jpg') }}" alt="" class="image" />
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <div class="caption">
                                <div class="title">Вы получите</div>
                                <div class="text">
                                    <p>Идеальный ремонт с минимальными затратами</p>
                                </div>
                                <a href="#contactUs" class="btn btn-inner">
                                    Заказать
                                </a>
                            </div>
                        </div>
                        <div class="image-container">
                            <img src="{{ asset('front/jahanrahat/images/slider/6.jpg') }}" alt="" class="image" />
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <div class="caption">
                                <div class="title">Даём гарантию</div>
                                <div class="text">
                                    <p>На все наши работы</p>
                                </div>
                                <a href="#contactUs" class="btn btn-inner">
                                    Заказать
                                </a>
                            </div>
                        </div>
                        <div class="image-container">
                            <img src="{{ asset('front/jahanrahat/images/slider/2.jpg') }}" alt="" class="image" />
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <div class="caption">
                                <div class="title">Результаты</div>
                                <div class="text">
                                    <p>Вас сильно удивят</p>
                                </div>
                                <a href="#contactUs" class="btn btn-inner">
                                    Заказать
                                </a>
                            </div>
                        </div>
                        <div class="image-container">
                            <img src="{{ asset('front/jahanrahat/images/slider/1.jpg') }}" alt="" class="image" />
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <div class="item is-active">
                        <span class="icon">1</span>
                    </div>
                    <div class="item">
                        <span class="icon">2</span>
                    </div>
                    <div class="item">
                        <span class="icon">3</span>
                    </div>
                    <div class="item">
                        <span class="icon">4</span>
                    </div>
                </div>
                <div class="arrows">
                    <div class="arrow prev">
          <span class="svg svg-arrow-left">
            <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
                    </div>
                    <div class="arrow next">
          <span class="svg svg-arrow-right">
            <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--<section id="introText">
        <div class="container">
            <div class="text-center">
                <h1>Simplicity is the ultimate form of sophistication</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt volutpat. Cras eget augue id dui varius pretium. Cras posuere dolor risus. Pellentesque elementum ultricies quam, sit amet rhoncus nisl viverra in. Cras imperdiet nisi a euismod molestie. Ut a metus arcu. </p>
            </div>
        </div>
    </section>-->
    <section id="service" class="home-section page-section section appear clearfix secPad bg-gray">
        <div class="text-center">
            <div class="container">
                <div class="heading text-center">
                    <!-- Heading -->
                    <h2>Что мы предлагаем</h2>
                </div>
                <div class="row animatedParent">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-tag fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h5>Дизайн ванной</h5>
                                <div class="divider-header"></div>
                                <p>
                                    От голых стен, к той ванной которая Вас будет радовать каждый день<br/>
                                </p>
                                <a href="#contactUs" class="btn btn-skin">Заказать</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-star-half-o fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h5>Дизайн спальни</h5>
                                <div class="divider-header"></div>
                                <p>
                                    Создадим уют, и Вы не захотите больше покидать Вашу спальню.<br/>
                                </p>
                                <a href="#contactUs" class="btn btn-skin">Заказать</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-heart fa-2x"></span>
                            </div>
                            <div class="service-desc">
                                <h5>Дизайн кухни</h5>
                                <div class="divider-header"></div>
                                <p>
                                    Кухня одно из тех мест, где всё должно быть как красиво так и функционально, мы с этим Вам поможем.<br/>
                                </p>
                                <a href="#contactUs" class="btn btn-skin">Заказать</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--About-->
    <section id="aboutUs" class="secPad">
        <div class="container">

            <div class="heading text-center">
                <!-- Heading -->
                <h2>О нас</h2>
                <p>И почему у нас с нами вы получите самый лучший сервис.</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('front/jahanrahat/images/1.jpg') }}" alt="" class="img-responsive img-thumbnail">
                </div>
                <div class="col-md-8">
                    <p>
                        Jahan Rahat Technical Services Co. LLC — ведущий поставщик специализированных услуг по установке и техническому обслуживанию в ОАЭ. Мы предлагаем широкий спектр решений, включая ремонтные и отделочные работы, как для частных, так и для коммерческих клиентов.
                    </p>
                    <p>
                        Мы прошли путь от небольшой команды квалифицированных специалистов до компании, пользующейся доверием в отрасли. За годы работы мы реализовали множество проектов и заслужили репутацию компании, ориентированной на качество, надежность и инновации.
                    </p>
                    <p>
                        Мы руководствуемся нашими основными ценностями: честностью, стремлением к совершенству и удовлетворением потребностей клиентов. Наше стремление предоставлять высококачественные услуги гарантирует, что каждый проект будет соответствовать самым высоким стандартам мастерства и долговечности.
                    </p>
                    <p>
                        Компания Jahan Rahat предоставляет высококачественные услуги по установке и обслуживанию, обеспечивая комфорт и долговечность вашего оборудования.
                    </p>
                    <p>
                        Мы специализируемся на ремонте и предлагаем широкий спектр решений для внутренней и внешней отделки жилых и коммерческих объектов.
                    </p>
                </div>
            </div>

        </div>
    </section>


    <!--Package-->
    <section id="packages" class="secPad">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>Последние наши проекты</h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ asset('front/jahanrahat/images/pic/pic-1.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3>Package Name</h3>
                                <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                <a class=" btn btn-default" href="#contactUs"><i class="fa fa-chevron-circle-right"> Хочу так же!</i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ asset('front/jahanrahat/images/pic/pic-2.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3>Package Name</h3>
                                <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                <a class=" btn btn-default" href="#contactUs"><i class="fa fa-chevron-circle-right"> Хочу так же!</i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ asset('front/jahanrahat/images/pic/pic-3.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3>Package Name</h3>
                                <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                <a class=" btn btn-default" href="#contactUs"><i class="fa fa-chevron-circle-right"> Хочу так же!</i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ asset('front/jahanrahat/images/pic/pic-4.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3>Package Name</h3>
                                <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                <a class=" btn btn-default" href="#contactUs"><i class="fa fa-chevron-circle-right"> Хочу так же!</i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ asset('front/jahanrahat/images/pic/pic-5.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3>Package Name</h3>
                                <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                <a class=" btn btn-default" href="#contactUs"><i class="fa fa-chevron-circle-right"> Хочу так же!</i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3  col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ asset('front/jahanrahat/images/pic/pic-6.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3>Package Name</h3>
                                <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                <a class=" btn btn-default" href="#contactUs"><i class="fa fa-chevron-circle-right"> Хочу так же!</i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3  col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ asset('front/jahanrahat/images/pic/pic-7.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3>Package Name</h3>
                                <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                <a class=" btn btn-default" href="#contactUs"><i class="fa fa-chevron-circle-right"> Хочу так же!</i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3  col-sm-6">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="{{ asset('front/jahanrahat/images/pic/pic-8.jpg') }}" class="img-responsive" alt="">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3>Package Name</h3>
                                <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                <a class=" btn btn-default" href="#"><i class="fa fa-chevron-circle-right"></i> Get It!</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--Quote-->
    <!--<section id="quote" class="bg-parlex">
        <div class="parlex-back">
            <div class="container secPad text-center">
                <h2>"The World is a book, and those who do not travel read only a page."
                </h2><h3>-Saint Augustine</h3>
            </div>
        </div>
    </section>-->

    <!--Price Table-->
    <section id="priceTable" class="secPad white">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>Наш прайс лист</h2>
                <p>Цена при договоре может отличаться.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h3>Базовый</h3>
                        </div>
                        <div class="panel-body">
                            <h3 class="panel-title price"><span class="price-month">от </span>$9<span class="price-cents">99</span></h3>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Черновая отделка</li>
                            <li class="list-group-item">Замеры помещения</li>
                            <li class="list-group-item">Подбор материалов</li>
                            <li class="list-group-item">Составление сметы</li>
                            <li class="list-group-item">Уборка после работ</li>
                            <li class="list-group-item"><a class="btn btn-default">Выбрать!</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-danger text-center">
                        <div class="panel-heading">
                            <h3>Под ключ</h3>
                        </div>
                        <div class="panel-body">
                            <h3 class="panel-title price"><span class="price-month">от </span>$29<span class="price-cents">99</span></h3>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Черновая отделка</li>
                            <li class="list-group-item">Подбор материалов</li>
                            <li class="list-group-item">Составление дизайна</li>
                            <li class="list-group-item">Подбор материалов</li>
                            <li class="list-group-item">Чистовая отделка</li>
                            <li class="list-group-item">Уборка после работ</li>
                            <li class="list-group-item"><a class="btn btn-primary">Выбрать!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonial" class="page-section section appear clearfix secPad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1" class=""></li>
                            <li data-target="#quote-carousel" data-slide-to="2" class=""></li>
                        </ol>

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="{{ asset('front/jahanrahat/images/person_1.jpg') }}" style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p>Берна, Махмуд и вся команда. Благодарим вас за внимательное и неравнодушное отношение к работе. Ценно, что вы всегда были на связи, слышали клиента и старались найти решение по всем вопросам. Видно, что вы стремились сделать результат максимально соответствующим ожиданиям и помочь удовлетворить все пожелания. Спасибо за сотрудничество и открытость в общении.</p>
                                            <small>Артем</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="{{ asset('front/jahanrahat/images/person_2.jpg') }}" style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p>
                                                Мастер просто СУПЕР!!!
                                                Причем во всех этапах, от моделирования и проектирования и до полного воплощения.
                                                Хорошая инженерная подготовка, отличные руки и соответствующий инструмент дали свой результат, который превзошел мои ожидания!!!!
                                                Я очень доволен его работой.
                                                Спасибо огромное!!!!</p>
                                            <small>Константин</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="{{ asset('front/jahanrahat/images/person_3.png') }}" style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p>Good morning many thanks for all your efforts and support!</p>
                                            <small>Mstr Mustafa</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Portfolio-->
    <section id="portfolio" class="page-section section appear clearfix secPad">
        <div class="container">

            <div class="heading text-center">
                <!-- Heading -->
                <h2>Галлерея</h2>
                <p>Наши проекты</p>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="container">
                            <div class="row text-center">
                                <a href="#" data-toggle="modal" data-target="#1">
                                    <article class="col-sm-4 isotopeItem webdesign">
                                        <div class="portfolio-item">
                                            <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                            <div class="portfolio-desc align-center">
                                                <a class="btn btn-default" data-toggle="modal" data-target="#1">Посмотреть</a>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                                <div class="modal fade" id="1" tabindex="-1" role="dialog" aria-labelledby="1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#2">
                                    <article class="col-sm-4 isotopeItem webdesign">
                                        <div class="portfolio-item">
                                            <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic2.jpg') }}" alt="" />
                                            <div class="portfolio-desc align-center">
                                                <a class="btn btn-default" data-toggle="modal" data-target="#2">Посмотреть</a>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog" aria-labelledby="2" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#3">
                                    <article class="col-sm-4 isotopeItem webdesign">
                                        <div class="portfolio-item">
                                            <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic3.jpg') }}" alt="" />
                                            <div class="portfolio-desc align-center">
                                                <a class="btn btn-default" data-toggle="modal" data-target="#3">Посмотреть</a>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                                <div class="modal fade" id="3" tabindex="-1" role="dialog" aria-labelledby="3" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#4">
                                    <article class="col-sm-4 isotopeItem webdesign">
                                        <div class="portfolio-item">
                                            <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic4.jpg') }}" alt="" />
                                            <div class="portfolio-desc align-center">
                                                <a class="btn btn-default" data-toggle="modal" data-target="#4">Посмотреть</a>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                                <div class="modal fade" id="4" tabindex="-1" role="dialog" aria-labelledby="4" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#5">
                                    <article class="col-sm-4 isotopeItem webdesign">
                                        <div class="portfolio-item">
                                            <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic5.jpg') }}" alt="" />
                                            <div class="portfolio-desc align-center">
                                                <a class="btn btn-default" data-toggle="modal" data-target="#5">Посмотреть</a>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog" aria-labelledby="5" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#6">
                                    <article class="col-sm-4 isotopeItem webdesign">
                                        <div class="portfolio-item">
                                            <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic6.jpg') }}" alt="" />
                                            <div class="portfolio-desc align-center">
                                                <a class="btn btn-default" data-toggle="modal" data-target="#6">Посмотреть</a>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                                <div class="modal fade" id="6" tabindex="-1" role="dialog" aria-labelledby="6" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="item">
                                                            <article class="col-sm-12 isotopeItem webdesign">
                                                                <div class="portfolio-item">
                                                                    <img src="{{ asset('front/jahanrahat/images/portfolio/portfolio_pic1.jpg') }}" alt="" />
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>


@endsection
