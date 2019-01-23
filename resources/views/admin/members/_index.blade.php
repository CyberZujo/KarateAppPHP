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