@extends('shared.app')

@section('content')

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(../public/images/karate-team.jpg); height:400px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
</header>
<link rel="stylesheet" href="{{ URL::asset('public')}}/css/image-slider.css">
<p>{{$post->cover_image}}

<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
                <div class="row">
                    <div class="col-md-6">
                            <div class="slider-holder">
                                    <span id="slider-image-1"></span>
                                    <span id="slider-image-2"></span>
                                    <span id="slider-image-3"></span>
                                    <div class="image-holder">
                                    <img src="../public/storage/post_images/1-Moji termini_1544026150.png" height="400" width="800" class="slider-image" />
                                        <img src="../public/images/image2.jpg"  height="400" width="800" class="slider-image" />
                                        <img src="../public/images/image3.jpg"  height="400" width="800" class="slider-image" />
                                    </div>
                                    <div class="button-holder">
                                        <a href="#slider-image-1" class="slider-change"></a>
                                        <a href="#slider-image-2" class="slider-change"></a>
                                        <a href="#slider-image-3" class="slider-change"></a>
                                    </div>
                                </div>
                    </div>
                    <div class="col-md-6">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </div>
                
                </div>
        </div>
    </div>

@endsection
@section('scripts')
<script>
$(document).ready(function(){
  $('.next').on('click', function(){
    var currentImg = $('.active');
    var nextImg = currentImg.next();

    if(nextImg.length){
      currentImg.removeClass('active').css('z-index', -10);
      nextImg.addClass('active').css('z-index', 10);
    }
  });

  $('.prev').on('click', function(){
    var currentImg = $('.active');
    var prevImg = currentImg.prev();

    if(prevImg.length){
      currentImg.removeClass('active').css('z-index', -10);
      prevImg.addClass('active').css('z-index', 10);
    }
  });
});

</script>
@endsection