@extends('shared.app')


@section('content')


<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(public/images/karate-team.jpg); height:400px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
</header>
<div id="fh5co-trainer">
    @if(count($members)>0)
   @foreach($members as $member)
    <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
    <img class="img-circle img-responsive" style="margin:0px auto;" width="120" height="120" src="http://www.top-madagascar.com/assets/images/admin/user-admin.png">
            <p class="text-center">{{$member->firstName}} {{$member->lastName}}</p>
            <p class="text-center">Datum rođenja: {{$member->dateOfBirth}}</p>
            <p class="text-center">Pojas: {{$member->beltRank}}</p>
    </div>
   @endforeach
   @else 
    <h2>Trenutno nema upisanih članova</h2>
    @endif
</div>
@endsection
@section("scripts")
<script>

</script>
@endsection