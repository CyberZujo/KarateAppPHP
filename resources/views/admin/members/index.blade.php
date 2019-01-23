@extends('shared.admin')


@section('content')


    <div class="col-md-3 offset-2">
            <button type="button" id="btnCreate" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal" onclick="OpenModal()">
                    <span>Dodaj člana</span>
                </button>
    </div>
    <div class="clearfix"></div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div id="dataBody">
                <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Ime i prezime</th>
                                <th>Datum rođenja</th>
                                <th>Pojas</th>
                                <th>JMBG</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                                <tr>
                                <td>{{$member->firstName}} {{$member->lastName}}</td>
                                <td>{{$member->dateOfBirth}}</td>
                                <td>{{$member->beltRank}}</td>
                                <td>{{$member->JMBG}}</td>
                                <td>
                                    <button type="button" id="btnEditMember" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-primary" onclick="EditMember({{$member->id}})">Izmjena</button>
                                </td>
                                <td>
                                    <form method="POST" action="admin-members/{{$member->id}}">
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
    {{$members->links()}}
</div>
@endsection
@section("scripts")

<script>
    var OpenModal = function () {
        $(".modal-body").load("{{url('admin-members/create')}}",function(){
            $("#myModal").show();
        });
    }

    var EditMember = function(id)
    {
        $(".modal-body").load("admin-members/"+id+"/edit",function(){
            $("#myModal").show();
        });
    }
    </script>
@endsection