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

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
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
                    <h1>{{__('lang.Связитесь с нами')}}</h1>
                    <p>{{__('lang.Если вы хотите предложить или оставить отзыв то это место для вас.')}}</p>
                </div>
            </div>
        </div>
    </section>



    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2>{{__('lang.Сообщение')}}</h2>
                    </div>
                    <form id="contact" action="{{ url('sendemail/send') }}" method="contact">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="{{__('lang.Ваше имя...')}}" required="">
                                </fieldset>
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="{{__('lang.Ваш email...')}}" required="">
                                </fieldset>
                                <fieldset>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="{{__('lang.Ваш номер телефона...')}}" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="{{__('lang.Сообщение')}}..." required=""></textarea>
                                </fieldset>
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">{{__('lang.Отправить')}}</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="section-heading contact-info">
                        <h2>{{__('lang.Информация о нас')}}</h2>
                        <p>{{__('lang.Мы являемся один из ведущих кафе нашей страны несмотря на свой маленький капитал. В будущем кафе будеть работать на основах франчайзингга')}}<br><br><em><a style="text-decoration: none;" href="#map">280 {{__('lang.Байзакова')}} </a>, <br>{{__('lang.Алматы Казахстан')}}</em></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="map" style=" width: 100%; height: 400px; border-radius: 50px;">
                        
                    </div>
                </div>
            </div>
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
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap">

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

        function initMap() {
  const myLatlng = { lat:43.237715339396836, lng: 76.91548906605219 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 6,
    center: myLatlng,
  });
  const marker = new google.maps.Marker({
    position: myLatlng,
    map,
    title: "Это наш кафе",
    icon: "https://img.icons8.com/android/50/000000/restaurant.png",
  });

   marker.addListener("click", () => {
    map.setZoom(15);
    map.setCenter(marker.getPosition());
  });
   
  flightPath.setMap(map);
}
    </script>
</body>
</html>