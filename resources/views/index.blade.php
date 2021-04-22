<!DOCTYPE html>
<html lang ="kz">
<html lang ="ru">
<html lang ="en">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Yummy</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontAwesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/hero-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <div class="header">
        <div class="container">
          <a href="#"><center><img style="width: 100px; height: 100px;" src="{{ asset('images/unnamed (2).png') }}"></center></a>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('index.html') }}">{{__('lang.Главная')}}</a></li>
                        <li><a href=" {{ route('menu.html') }} ">{{__('lang.Меню')}}</a></li>
                        <li><a href=" {{ route('blog.html') }} ">{{__('lang.О нас')}}</a></li>
                        <li><a href=" {{ route('contact.html') }} ">{{__('lang.Контакты')}}</a></li>
                    </ul>
                    
                </div>
                
            </nav>
            
        </div>
        
    </div>
 


    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4>{{__('lang.Здесь вы найдёте самые вкусные еды')}}</h4>
                    <h2>YUMMY CAFE ALMATY</h2>
                    <p>{{__('lang.При этом вы можете быть уверены в том, что вы и каждый из ваших гостей найдёт в меню заведения блюда по своему вкусу.')}}</p>
                    <div class="primary-button">
                        <a href="#" class="scroll-link" data-id="book-table">{{__('lang.Заказать сейчас')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img  src="{{ asset('img/cook_01.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        <h4>{{__('lang.Мы готовим вкусно')}}</h4>
                        <div class="contact-content">
                            <span>{{__('lang.Вы можете позвонить нам')}}</span>
                            <h6>+7 702 777 27 01</h6>
                        </div>
                        <span>{{__('lang.или')}}</span>
                        <div class="primary-white-button">
                            <a href="#" class="scroll-link" data-id="book-table">{{__('lang.Заказать сейчас')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img  src="{{ asset('images/еда2.jpg') }}"alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="menu.html">
                        <img src="{{ asset('img/cook_breakfast.png') }}" alt="Breakfast">
                        <h4>{{__('lang.Завтрак')}}</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="menu.html">
                        <img src="{{ asset('img/cook_lunch.png') }}" alt="Lunch">
                        <h4>{{__('lang.Обед')}}</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="menu.html">
                        <img src="{{ asset('img/cook_dinner.png') }}" alt="Dinner">
                        <h4>{{__('lang.Ужин')}}</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="menu.html">
                        <img src="{{ asset('img/cook_dessert.png') }}" alt="Desserts">
                        <h4>{{__('lang.Десерты')}}</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="book-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>{{__('lang.Бронируйте места')}}</h2>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-12">
                    <div class="left-image">
                        <img src="{{ asset('images/22.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="right-info">
                        <h4>{{__('lang.Бронировать')}}</h4>
                        <form id="form-submit" action="" method="get">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='day' onchange='this.form.()'>
                                            <option value="">{{__('lang.День')}}</option>
                                            <option value="Monday">{{__('lang.Понедельник')}}</option>
                                            <option value="Tuesday">{{__('lang.Вторник')}}</option>
                                            <option value="Wednesday">{{__('lang.Среда')}}</option>
                                            <option value="Thursday">{{__('lang.Четверг')}}</option>
                                            <option value="Friday">{{__('lang.Пятница')}}</option>
                                            <option value="Saturday">{{__('lang.Суббота')}}</option>
                                            <option value="Sunday">{{__('lang.Воскресенье')}}</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='hour' onchange='this.form.()'>
                                            <option value="">{{__('lang.Час')}}</option>
                                            <option value="10-00">10:00</option>
                                            <option value="12-00">12:00</option>
                                            <option value="14-00">14:00</option>
                                            <option value="16-00">16:00</option>
                                            <option value="18-00">18:00</option>
                                            <option value="20-00">20:00</option>
                                            <option value="22-00">22:00</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="name" type="name" class="form-control" id="name" placeholder="{{__('lang.Полное имя')}}" required="">
                                    </fieldset> 
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="phone" type="phone" class="form-control" id="phone" placeholder="{{__('lang.Номер телефона')}}" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required class="person" name='persons' onchange='this.form.()'>
                                            <option value="">{{__('lang.Сколько людей?')}}</option>
                                            <option value="1-Person">1 {{__('lang.Человек')}}</option>
                                            <option value="2-Persons">2 {{__('lang.Человек')}}</option>
                                            <option value="3-Persons">3 {{__('lang.Человек')}}</option>
                                            <option value="4-Persons">4 {{__('lang.Человек')}}</option>
                                            <option value="5-Persons">5 {{__('lang.Человек')}}</option>
                                            <option value="6-Persons">6 {{__('lang.Человек')}}</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">{{__('lang.Забронировать')}}</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    

    <section class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>{{__('lang.Наш блог')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="{{ asset('images/33.jpg') }}" alt="">
                        <div class="date">6 {{__('lang.Декабрь')}} 2021</div>
                        <div class="right-content">
                            <h4>{{__('lang.Открываем новые кафе')}}</h4>
                            <span>{{__('lang.Менеджер')}}</span>
                            <p>{{__('lang.Мы теперь открылись в Шымкенте.Вы можете насладиться нашим меню по адресу Байзакова.')}}</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="{{ asset('img/blog_post_02.jpg') }}" alt="">
                        <div class="date">25 {{__('lang.Октябрь')}} 2021</div>
                        <div class="right-content">
                            <h4>{{__('lang.Караоке - парт')}}</h4>
                            <span>{{__('lang.Менеджер')}}</span>
                            <p>{{__('lang.Наконец то в нашем заведении появился караоке. Вы можете приходить сюда в любое время и наслаждаться музыкой.')}}</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="{{ asset('img/blog_post_03.jpg') }}" alt="">
                        <div class="date">12 {{__('lang.Октябрь')}} 2021</div>
                        <div class="right-content">
                            <h4>{{__('lang.Новый десерт')}}</h4>
                            <span>{{__('lang.Шеф-повар')}}</span>
                            <p>{{__('lang.Рады сообщить вам что в нашем заведении вы теперь сможете попробовать новый дессерт.')}}</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="{{ asset('img/blog_post_04.jpg')}}" alt="">
                        <div class="date">03 Октябрь 2021</div>
                        <div class="right-content">
                            <h4>{{__('lang.График')}}</h4>
                            <span>{{__('lang.Менеджер')}}</span>
                            <p>{{__('lang.Друзья мы с сегодняшнего дня будемь работать не с 8 утра, а с 10 утра причиной нашего опоздание можеть быть карантинные меры.')}}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>{{__('lang.Впервые узнайте о новых новостях')}}</h2>
                    </div>
                </div>
            </div>
            <form id="contact" action="" method="get">
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="{{__('lang.Напишите email здесь')}}" required="">
                        </fieldset>
                    </div>
                    <div class="col-md-2">
                        <fieldset>
                            <button type="submit" id="form-submit" class="btn">  <a href="/cafe" >{{__('lang.Отправить')}}</a> </button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>{{__('lang.Все права защищены')}}&copy; 2020 Rauan Shurenbay</p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="https://www.facebook.com/yummycafe02/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/yummycafe_almaty/"><i class="fa fa-instagram"></i></a></li>
                        
                    </ul>
                </div>
                
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
   
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>