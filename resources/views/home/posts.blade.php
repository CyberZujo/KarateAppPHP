@extends('shared.app')

@section('content')



<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(public/images/karate-team.jpg); height:400px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
</header>
<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Blog</h2>
                    <p>Pratite novosti iz tekućeg mjeseca</p>
				</div>
            </div>
            <div class="row row-bottom-padded-md">

            @foreach($posts as $post)

                    <div class="col-lg-4 col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive" src="public/storage/post_images/kickboxer_silhouette_1543785199" alt=""></a>
                            <div class="blog-text">
                            <h3>{{$post->title}}</h3>
                            <span class="posted_on">{{$post->created_at}}</span>
                            <p>{{$post->shortDescription}}</p>
                            <a href="post/{{$post->id}}" class="btn btn-primary">Saznaj više</a>
                            </div> 
                        </div>
                    </div>

            @endforeach

        </div>
        {{$posts->links()}}

			</div>
		</div>
@endsection