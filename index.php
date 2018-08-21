<?php include 'formularz.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">

    <link href="css/reset.css" rel="stylesheet">



</head>
<body>
<!-- TopNavbar -->
  <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand  navbar-dark bg-dark" id="mainNav">
        <div class="container">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a class="nav-link" href=""><i class="far fa-address-card fa"></i></a></li>
              <li class="nav-item"><a class="nav-link" href=""><i class="far fa-envelope fa"></i></a></li>
              <li class="nav-item"><a class="nav-link" href=""><i class="fab fa-facebook-square"></i></a></li>
              <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-phone-square"></i></a></li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="">Aplikuj</a></li>
            <li class="nav-item"><a class="nav-link" href="">Blog</a></li>

          </ul>
        </div>
      </nav>
<!-- Header -->
     <section class="container header">
        <div class="row">
        <div class="col-md-3 col-sm-3">
          <img class="img-fluid imgcenter" src="http://www.studiujnaukrainie.pl/images/logo.png" alt="">
        </div>
        <div class="col-md-8 col-sm-8">
          <h2>Państwowy Uniwersytet Medyczny im. I. Ya. Horbaczewskiego w Tarnopolu</h2>
          <br>
          <ul class="contactlist">
            <li class="floatleft"><span class="contactbar-title">E-mail</span><span class="contactbar-text">testesttest@gmail.com</span></li>
            <li class="floatleft"><span class="contactbar-title">Telefon</span><span class="contactbar-text">PL 500 500 500</span></li>
            <li class="floatleft"><span class="contactbar-title">Czesne</span><span class="contactbar-text">XXX $</span></li>

          </ul>


        </div>
        </div></section>
<!--MiddleNavbar-->
  <nav class="navbar navbar-expand navbar-dark bg-dark blue">
    <div class="container">
        <ul class="navbar-nav mr-auto borderright">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>

            <li class="dropdown">
                <a class="nav-link" data-toggle="dropdown">Dropdown <i class="fas fa-caret-down"></i></a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li class="dropdown-item" ><a href="">Action</a></li>
                    <li class="dropdown-item" >Action</li>

                    <li class="dropdown-item" >Action</li>

                </ul>

            </li>
            <li class="nav-item"><a class="nav-link" href="#">Pozycja 2</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Pozycja 3</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Pozycja 4</a></li>


        </ul>
    </div>
    </nav>
<!--Karuzela-->
<div class="container-fluid" style="margin:0px;padding:0px"><div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin:0px;padding:0px">
  <div class="carousel-inner" style="margin:0px;padding:0px">
    <div class="carousel-item active" style="margin:0px;padding:0px">
        <img src="http://www.studiujnaukrainie.pl/images/banner1.jpg" alt="" style="margin:0px;padding:0px">

    </div>
    <div class="carousel-item">
        <img src="http://www.studiujnaukrainie.pl/images/banner1.jpg" alt="">

    </div>
    <div class="carousel-item">
        <img src="http://www.studiujnaukrainie.pl/images/banner1.jpg" alt="">

    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>
<!--Wrapper-->
<section class="container wrapper">

    <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3 bar" id="bar1">
      <div class="baricon">
        <i class="far fa-address-card fa-4x" style="color:white;float:left"></i>
      </div>
      <div class="bartitle">
        <h3>Aplikuj online</h3>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3 bar" id="bar2">
      <div class="baricon">
        <i class="fas fa-book fa-4x"></i>
      </div>
      <div class="bartitle">
        <h3>tekst 2</h3>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3 bar" id="bar3">
      <div class="baricon">
        <i class="fas fa-mouse-pointer fa-4x"></i>
      </div>
      <div class="bartitle">
        <h3>tekst 3</h3>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3 bar" id="bar4">
      <div class="baricon">
        <i class="far fa-newspaper fa-4x"></i>
      </div>
      <div class="bartitle">
        <h3>tekst 4</h3>
      </div>
    </div>
    </div>

</section>

<!--Aktualnosci-->
<section class="container" id="aktualnosci">
  <div class="row" style="display:flex;justify-content:center;padding-top:30px;">
    <h3 >Aktualności</h3>
  </div>
  <div class="row obrazki">
    <div class="col-md-4"><img class="img-fluid mx-auto aktualjs" src="http://www.studiujnaukrainie.pl/images/123123.png" alt=""><p>Podpis 1</p></div>
    <div class="col-md-4"><img class="img-fluid mx-auto aktualjs" src="http://www.studiujnaukrainie.pl/images/11112222.jpeg" alt=""><p>Podpis 2</p></div>
    <div class="col-md-4"><img class="img-fluid mx-auto aktualjs" src="http://www.studiujnaukrainie.pl/images/33183024_10211902403542848_7087532534820503552_n.png" alt=""><p>Podpis 3</p></div>
  </div>
  <div class=""></div>
</section>
<!--Kierunki-->
<section class="container-fluid paralax">
      <div class="container">
        <div class="row" style="display:flex;justify-content:center">
        <h1 style="text-align:center;color:white;padding-top:30px;padding-bottom:10px">Kierunki i czesne</h1>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 centerr">
              <div class="paralaxitem">
                  <canvas class="boxtop"></canvas>
                  <h2>Medycyna</h2>
                  <div class="box">
                      <span>Roczne czesne: 4100$</span>
                  </div>
                  <figure><img class="img-fluid" src="http://www.studiujnaukrainie.pl/images/course-img1.jpg" alt=""> </figure>

                  <div class="paralaxitemdowncfb">

                  </div>
                  <div class="paralaxitemdown">
                      <div class="left">
                          <h3>5-letnie</h3>
                          <p>Jednolite magisterskie</p>
                      </div>
                      <div class="rightcfb"></div>
                    <div class="right"><i class="fas fa-chevron-circle-right fa-2x" style="color:white;opacity:0.8"></i></div>
                </div>
            </div>
            </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12 centerr">
                <div class="paralaxitem">
                    <canvas class="boxtop"></canvas>
                    <h2>Medycyna</h2>
                    <div class="box">
                        <span>Roczne czesne: 4100$</span>
                    </div>
                    <figure><img class="img-fluid" src="http://www.studiujnaukrainie.pl/images/course-img1.jpg" alt=""> </figure>

                    <div class="paralaxitemdowncfb">

                    </div>
                    <div class="paralaxitemdown">
                        <div class="left">
                            <h3>5-letnie</h3>
                            <p>Jednolite magisterskie</p>
                        </div>
                        <div class="rightcfb"></div>
                      <div class="right"><i class="fas fa-chevron-circle-right fa-2x" style="color:white;opacity:0.8"></i></div>
                  </div>
              </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12 centerr">
                <div class="paralaxitem">
                    <canvas class="boxtop"></canvas>
                    <h2>Medycyna</h2>
                    <div class="box">
                        <span>Roczne czesne: 4100$</span>
                    </div>
                    <figure><img class="img-fluid" src="http://www.studiujnaukrainie.pl/images/course-img1.jpg" alt=""> </figure>

                    <div class="paralaxitemdowncfb">

                    </div>
                    <div class="paralaxitemdown">
                        <div class="left">
                            <h3>5-letnie</h3>
                            <p>Jednolite magisterskie</p>
                        </div>
                        <div class="rightcfb"></div>
                      <div class="right"><i class="fas fa-chevron-circle-right fa-2x" style="color:white;opacity:0.8"></i></div>
                  </div>
              </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12 centerr">
                <div class="paralaxitem">
                    <canvas class="boxtop"></canvas>
                    <h2>Medycyna</h2>
                    <div class="box">
                        <span>Roczne czesne: 4100$</span>
                    </div>
                    <figure><img class="img-fluid" src="http://www.studiujnaukrainie.pl/images/course-img1.jpg" alt=""> </figure>

                    <div class="paralaxitemdowncfb">

                    </div>
                    <div class="paralaxitemdown">
                        <div class="left">
                            <h3>5-letnie</h3>
                            <p>Jednolite magisterskie</p>
                        </div>
                        <div class="rightcfb"></div>
                      <div class="right"><i class="fas fa-chevron-circle-right fa-2x" style="color:white;opacity:0.8"></i></div>
                  </div>
              </div>
        </div>
    </div>
    </div>
</section>
<!--O nas-->
<section id="who" style="margin-top:30px">

    <div class="container">
        <div class="row flex-column-reverse flex-row-reverse flex-sm-row">
            <div class="col-md-4 col-sm-4">
                <!-- <img src="http://www.studiujnaukrainie.pl/images/about-video.jpg" class="img-fluid" alt="" id="portrait"> -->
                <span style="text-align:center" class="centerr"><i class="fas fa-portrait" style="font-size:20vw;" ></i></span>
            </div>
            <div class="col-md-8 col-sm-8">
                <h1>Kim jesteśmy</h1>
                <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies semper ex nec lacinia. Donec dictum, lorem id tristique ullamcorper, augue mauris viverra nibh, nec pretium ex turpis ac lacus. Aliquam bibendum massa in lectus suscipit, fermentum posuere felis congue. Mauris sit amet purus vel sem pharetra bibendum eu tempus libero. Phasellus ullamcorper luctus ligula, et sollicitudin ante viverra nec. Proin vel risus ligula. Aenean mattis, turpis vel sollicitudin         porttitor, nibh elit posuere dui, quis maximus justo eros et urna. Pellentesque vulputate consequat tortor pharetra imperdiet. Proin feugiat elit ut dolor pretium finibus. Aliquam quis tincidunt odio. In fringilla eget leo blandit sagittis. Quisque tortor justo, rhoncus in ultricies vel, mattis eget libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque a blandit turpis. Curabitur at tortor a metus fermentum sagittis.
                        Proin ac imperdiet sem, non varius sapien. Quisque egestas ut lacus at semper. Duis a mauris ac elit ornare vulputate vel sed sem. Morbi eu faucibus magna. Nullam sit amet quam elit. Pellentesque pharetra ligula leo. Aenean nec lacinia nunc. In tempus mauris enim, vel laoreet lorem ornare eget. Morbi euismod lorem leo, ut scelerisque orci efficitur sit amet. Nullam tortor felis, cursus et maximus id, porttitor a elit.</p>
            </div>

        </div>
    </div>
</section>
<!--Counter-->
<section id="countersection">
    <div class="container-fluid" id="counterbg">
    <div class="container">

        <h1 class="centerr" style="padding-top:30px">Liczby</h1>
        <div class="counterlist row centerr">
            <div class="col-md-2 col-2 center2">
                <p><i class="fas fa-newspaper fa-3x"></i></p>
                <h1 id="counter"></h1>
                <p class="countercaption">tekst 1</p>

            </div>
            <div class="col-md-2 col-2 center2">
                <p><i class="fas fa-user-graduate fa-3x"></i></p>
                <h1 id="counter2"></h1>
                <p class="countercaption">tekst 2</p>

            </div>
            <div class="col-md-2 col-2 center2">
                <p><i class="fas fa-paperclip fa-3x"></i></p>
                <h1 id="counter3"></h1>
                <p class="countercaption">tekst 3</p>

            </div>
            <div class="col-md-2 col-2 center2">
                <p><i class="fas fa-graduation-cap fa-3x"></i></p>
                <h1 id="counter4"></h1>
                <p class="countercaption">tekst 4</p>
            </div>
        </div>



    </div>
</div>
</section>


<!-- komentarze -->
<section id="commentsection">
<div class="container-fluid"><div id="carouselExampleControls2" class="carousel slide"  data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">

      <!-- <h1 class="commentcarouselh1">Komentarze</h1> -->

        <img src="images/slide1.png" style="width:100%;height:300px; opacity:0" alt="">
        <div class="commentbg"></div>
        <p class="comment" >"Super strona"</p>
        <p class="caption " >Zbigniew z Wrocławia</p>

    </div>
    <!-- <div class="carousel-item">
        <img src="images/slide1.png" style="width:100%;opacity:0.10" alt="">
        <p class="comment" >"Niezły biznes"</p>
        <p class="caption " >Zbigniew z Wrocławia</p>
    </div>
    <div class="carousel-item">
        <img src="images/slide1.png" style="width:100%;opacity:0.10" alt="">
        <p class="comment" >"Ciężkie jest życie"</p>
        <p class="caption " >Zbigniew z Wrocławia</p>

    </div> -->
  </div>
  <h1 class="commentcarouselh1">Komentarze</h1>
  <span class="commentquote hidden-md-down"><i class="fas fa-quote-right"></i></span>
  <span class="commentquote2 hidden-md-down"><i class="fas fa-quote-left"></i></span>
  <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>
</section>

<section>
    <h1 style="text-align:center">Galeria zdjęć</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="row">
            <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid">
            </a>
        </div>
        <div class="row">
            <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid">
            </a>
        </div>
    </div>
</div>
</section>

<section>
    <div class="container">
        <div class="row">
<div class="col-md-5 center2"><h1>Kontakt z nami</h1><p class="contact">Numer telefonu: XXX XXX XXX</p><p>E-mail: XXX@gmail.com</p></div>
<div class="col-md-5">
    <h1 class="">Formularz kontaktowy</h1>
    <form class=""  method="post">

        <div class="form-group">
        <input class="form-control" type="text" placeholder="Imię i nazwisko" name="name">
        </div>
        <div class="form-group">
        <input class="form-control" type="text" placeholder="Telefon" name="phone">
        </div>
        <div class="form-group">
        <input class="form-control" type="text" placeholder="E-mail" name="mail">
        </div>
        <div class="form-group">

        <textarea class="form-control" style="height:100px" type="text" placeholder="Wiadomość"></textarea>

        </div>
        <div class="form-group">
        <button type="submit" name="button"  class="btn btn-primary">Wyślij</button>
    </div>

        <div class="g-recaptcha" data-sitekey="6LdBMmMUAAAAAOOQ1BUNsjJ1onn4s__Es7TKFZBm"></div>
        <input type="submit" name="submit" value="send">
    </form>

</div>
</div>
</div>
</section>








<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="scripts/countUp.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

<!-- lightbox -->
<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

            // $(this).ekkoLightbox({
            //                 alwaysShowClose: true,
            //                 onShown: function() {
            //                     console.log('Checking our the events huh?');
            //                 },
            //                 onNavigate: function(direction, itemIndex)
            //                     console.log('Navigating '+direction+'. Current item: '+itemIndex);
            //                 }
            //                 ...
            //             });
</script>

<!-- waypoint -->
<script>
var numAnim = new CountUp("counter", 0, 99.99);
var numAnim2 = new CountUp("counter2", 0, 99.99);
var numAnim3 = new CountUp("counter3", 0, 99.99);
var numAnim4 = new CountUp("counter4", 0, 99.99);


if (!numAnim.error) {
// numAnim.start();
} else {
console.error(numAnim.error);
}

var waypoint = new Waypoint({
element: document.getElementById('counter'),
handler: function() {
    console.log('dzials');
    numAnim.start();
    numAnim2.start();
    numAnim3.start();
    numAnim4.start();




},
offset:300
})
</script>
<!-- counter -->
<script>

  $(document).ready(function(){
    $('.aktualjs').on("mouseover", function(){
      console.log('fdsa');
      $(this).siblings().css("font-size","30px");
    });
    $('.aktualjs').on("mouseleave", function(){
      console.log('fdsa2');
      $(this).siblings().css("font-size","20px");
    });
  });
</script>
<!-- viewport experiment -->
<script>$(document).ready(function(){
    console.log($(window).width());
   $('meta[name="viewport"]').prop('content', 'width=1440');
});</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
