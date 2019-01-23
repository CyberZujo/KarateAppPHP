@extends('shared.admin')


@section('content')


    <div class="col-md-3 offset-2">
            <button type="button" id="btnCreate" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal" onclick="CreatePost()">
                    <span>Dodaj obavijest</span>
                </button>
    </div>
    <div class="clearfix"></div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div id="dataBody">
                <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Naslov</th>
                                <th>Kratak opis</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->shortDescription}}</td>
                                <td>
                                    <button type="button" id="btnEditPost" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-primary" onclick="EditPost({{$post->id}})">Izmjena</button>
                                </td>
                                <td>
                                    <form method="POST" action="admin-posts/{{$post->id}}">
                                         @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input type="submit" value="Ukloni" class="btn btn-sm btn-danger">
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
    {{$posts->links()}}
</div>
@endsection
@section("scripts")

<script>
    var CreatePost = function () {
        $(".modal-body").load("{{url('admin-posts/create')}}",function(){
            $("#myModal").show();
        });
    }

    var EditPost = function(id)
    {
        $(".modal-body").load("admin-posts/"+id+"/edit",function(){
            $("#myModal").show();
        });
    }
    </script>
@endsection