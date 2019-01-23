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