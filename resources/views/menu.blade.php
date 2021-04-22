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
                    <h1>{{__('lang.Наш меню')}}</h1>
                    <p>{{__('lang.Наш меню один из лучших в нашем городе. Помимо этого вы заказать доставку в любое точке города')}}</p>
                </div>
            </div>
        </div>
    </section>



    <section class="breakfast-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="breakfast-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="{{ asset('img/breakfast_menu.jpg') }}" alt="Breakfast">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2>{{__('lang.Меню завтрака')}}</h2>
                                <div id="owl-breakfast" class="owl-carousel owl-theme">
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="{{ asset('img/breakfast_item.jpg') }}" alt="">
                                            <div class="price">1190 ТГ</div>
                                            <div class="text-content">
                                                <h4>{{__('lang.Чипсы с капустой')}}</h4>
                                                <p>{{__('lang.Хрустящее бодрые чипсы, идеальное блюдо для завтрака...')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="{{ asset('img/lunch_item.jpg') }}" alt="">
                                            <div class="price">1790 ТГ</div>
                                            <div class="text-content">
                                                <h4>{{__('lang.Чёрные призмы')}}</h4>
                                                <p>{{__('lang.Ещё один салат для идельного завтрака...')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="{{ asset('img/dinner_item.jpg') }}" alt="">
                                            <div class="price">2990 ТГ</div>
                                            <div class="text-content">
                                                <h4>{{__('lang.Тайяки Гастро Взъерошенный')}}</h4>
                                                <p>{{__('lang.Один из дорогих рецептов нашего кафе. Но стоить попробовать для удоволствие...')}}</p>
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

    <section class="dinner-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="dinner-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="{{ asset('img/dinner_menu.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2>{{__('lang.Меню Лакшири')}}</h2>
                                <div id="owl-dinner" class="owl-carousel owl-theme">
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="{{ asset('img/IMG_1677.png') }}" alt="">
                                            <div class="price">3370 ТГ</div>
                                            <div class="text-content">
                                                <h4>{{__('lang.Яблочный пирог')}}</h4>
                                                <p>{{__('lang.Один из самых вкусных пирогов азиатской кухни....')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="{{ asset('img/тщср.jpg') }}" alt="">
                                            <div class="price">4280 ТГ</div>
                                            <div class="text-content">
                                                <h4>{{__('lang.Пирог Тысячи ночь')}}</h4>
                                                <p>{{__('lang.Попробуйте аромат этого пирога в только режиме лакшири...')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="{{ asset('img/breakfast_item.jpg') }}" alt="">
                                            <div class="price">3490 ТГ</div>
                                            <div class="text-content">
                                                <h4>{{__('lang.Чипсы с капустой')}}</h4>
                                                <p>{{__('lang.Хрустящее бодрые чипсы, идеальное блюдо для завтрака...')}}</p>
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