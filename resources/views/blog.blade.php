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


    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{__('lang.Наш блог')}}</h1>
                    <p>{{__('lang.В нашем сайте вы можете читать более новый новости о нашем заведении. Любые лучшие рекомендации наших посетителей будуть отображатся здесь')}}</p>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-item">
                        <img src="{{ asset('img/blog_item_01.jpg') }}" alt="">
                        <div class="date">6 {{__('lang.Декабрь')}} 2021</div>
                        <div class="right-content">
                            <h4>{{__('lang.Открываем новые кафе')}}</h4>
                            <span>{{__('lang.Менеджер')}}</span>
                            <p>{{__('lang.Мы теперь открылись в Шымкенте.Вы можете насладиться нашим меню по адресу Байзакова.')}}</p>
                            <div class="text-button">
                                <a href="https://www.google.ru/maps/place/Yummy+cafe+almaty/@43.2375473,76.9133256,17.09z/data=!4m12!1m6!3m5!1s0x3883692d75168b47:0xadbc18e3478066bd!2sYummy+cafe+almaty!8m2!3d43.237528!4d76.9154461!3m4!1s0x3883692d75168b47:0xadbc18e3478066bd!8m2!3d43.237528!4d76.9154461">{{__('lang.Подробнее')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-item">
                        <img src="{{ asset('img/blog_item_02.jpg') }}" alt="">
                        <div class="date">25 {{__('lang.Октябрь')}} 2021</div>
                        <div class="right-content">
                            <h4>{{__('lang.Караоке - парт')}}</h4>
                            <span>{{__('lang.Менеджер')}}</span>
                            <p>{{__('lang.Наконец то в нашем заведении появился караоке. Вы можете приходить сюда в любое время и наслаждаться музыкой.')}}</p>
                            <div class="text-button">
                                <a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%80%D0%B0%D0%BE%D0%BA%D0%B5">{{__('lang.Подробнее')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-item">
                        <img src="{{ asset('img/blog_item_03.jpg') }}" alt="">
                        <div class="date">12 {{__('lang.Октябрь')}} 2021</div>
                        <div class="right-content">
                            <h4>{{__('lang.Новый десерт')}}</h4>
                            <span>{{__('lang.Шеф-повар')}}</span>
                            <p>{{__('lang.Рады сообщить вам что в нашем заведении вы теперь сможете попробовать новый дессерт.')}}</p>
                            <div class="text-button">
                                <a href="https://ru.wikipedia.org/wiki/%D0%94%D0%B5%D1%81%D0%B5%D1%80%D1%82">{{__('lang.Подробнее')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-item">
                        <img src="{{ asset('img/blog_item_04.jpg') }}" alt="">
                        <div class="date">03 Октябрь 2021</div>
                        <div class="right-content">
                            <h4>{{__('lang.График')}}</h4>
                            <span>{{__('lang.Менеджер')}}</span>
                            <p>{{__('lang.Друзья мы с сегодняшнего дня будемь работать не с 8 утра, а с 10 утра причиной нашего опоздание можеть быть карантинные меры.')}}</p>
                            <div class="text-button">
                                <a href="https://24.kz/ru/news/social/item/408663-kafe-i-restorany-regulyarno-proveryayut-na-soblyudenie-karantinnykh-mer">{{__('lang.Подробнее')}}</a>
                            </div>
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
                        <button type="submit" id="form-submit" class="btn">{{__('lang.Отправить')}}</button>
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