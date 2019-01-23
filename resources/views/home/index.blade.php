@extends('shared.app')

@section('content')
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(public/images/karate-bg.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Crni pojas je stanje vašeg uma i stava</h1>
                        <p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary popup-vimeo">Watch Our Video</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="fh5co-services" class="fh5co-bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><img class="img-responsive" src="images/dumbbell.svg" alt=""></span>
                        <h3>Zajednica</h3>
                        <p>Karate klub Bregava akcenat stavlja na zajedništvo svih članova</p>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><img class="img-responsive" src="images/exercise.svg" alt=""></span>
                        <h3>Disciplina</h3>
                            <p>Naša izreka je : "Disciplina je most između ciljeva i ostvarenja." </p>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span><img class="img-responsive" src="images/yoga-carpet.svg" alt=""></span>
                        <h3>Yoga</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-testimonial" class="fh5co-bg-section">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>O nama</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row animate-box">
                            <div class="owl-carousel owl-carousel-fullwidth">
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="public/images/png-belt.png" alt="user">
                                        </figure>
                                        <blockquote>
                                            <p>&ldquo;Karate klub 'Bregava' Stolac je nastao u cilju promovisanja karatea kao sporta u gradu Stocu &rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                            <figure>
                                                    <img src="public/images/png-belt.png" alt="user">
                                                </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                            <figure>
                                                    <img src="public/images/png-belt.png" alt="user">
                                                </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div id="fh5co-trainer">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Treneri</h2>
                        <p>Naš klub predvode treneri sa dugogodišnjim takmičarskim i trenerskim iskustvom.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="trainer">
                            <a href="#"><img class="img-responsive" src="public/images/kk-trener-1.png" alt="trainer"></a>
                            <div class="title">
                                <h3><a href="#">Salko Vukičević</a></h3>
                                <span>Crni pojas 2.dan</span>
                            </div>
                            <div class="desc text-center">
                                <ul class="fh5co-social-icons">
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="trainer">
                            <a href="#"><img class="img-responsive" src="public/images/kk-trener-2.png" alt="trainer"></a>
                            <div class="title">
                                <h3><a href="#">Alija Pezo</a></h3>
                                <span>Crni pojas 2.dan</span>
                            </div>
                            <div class="desc text-center">
                                <ul class="fh5co-social-icons">
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

@endsection