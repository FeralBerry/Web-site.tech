<!-- Slider Section -->
<div id="main_slider" >
<div id="slider-section" class="slider-section container-fluid no-padding" >
    <div class="carousel-caption">
        <div class="container">
            <div class="col-md-5 col-sm-6 col-xs-9 pull-right">
                <div class="slider-content-box">
                    <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                        <h3 class="slider-title">Оставьте свои контакты и получите скидку 10% на 1 заказ</h3>
                    </div>
                    <div class="slider-author col-md-12 col-sm-12 col-xs-6 no-padding contactus-form">
                        <div class="form-group">
                            <label for="slider_name">Ваше имя</label>
                            <input id="slider_name" class="form-control" type="text" name="slider_name" placeholder="Ваше имя">
                            <label for="slider_contact">Контакт для связи</label>
                            <input id="slider_contact" class="form-control" type="text" name="slider_contact" placeholder="Емаил или телефон">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                        <a href="#" title="Получить скидку">Получить скидку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-caption">
                    <div class="container">
                        <div style="left: 0" class="col-md-7 col-sm-6 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xs-6 no-padding slider_head">
                                <h1>Поможем с подбором материалов для отделки</h1>
                            </div>
                            <div class="slider-author col-md-12 col-sm-12 col-xs-6 no-padding slider_text">
                                <p>Наши опытные мастера помогут подобрать материалы именно под Вас.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('front/building_ceramics/images/slider1.png') }}" id="slider_img" alt="slide1" width="1920" height="770"/>
            </div>
            <div class="item">
                <div class="carousel-caption">
                    <div class="container">
                        <div style="left: 0" class="col-md-7 col-sm-6 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xs-6 no-padding slider_head">
                                <h2>Инструктируем по установке материалов</h2>
                            </div>
                            <div class="slider-author col-md-12 col-sm-12 col-xs-6 no-padding slider_text">
                                <p>Всегда на связи и готовы помочь с подбором клеющего состава</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('front/building_ceramics/images/slider2.png') }}" alt="slide2" width="1920" height="770"/>
            </div>
            <div class="item">

                <div class="carousel-caption">
                    <div class="container">
                        <div style="left: 0" class="col-md-7 col-sm-6 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xs-6 no-padding slider_head">
                                <h2>Интуитивно понятные замки</h2>
                            </div>
                            <div class="slider-author col-md-12 col-sm-12 col-xs-6 no-padding slider_text">
                                <p>Все изделия сделаны с интуитивно понятным замком для соединения друг с другом</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('front/building_ceramics/images/slider3.png') }}" alt="slide3" width="1920" height="770"/>
            </div>
        </div>
        <!-- Controls -->
        <div class="container">
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div><!-- Slider Section /- -->
</div>

