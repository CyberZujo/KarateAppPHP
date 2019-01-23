{{-- @extends('shared.admin') --}}


{{-- @section('content') --}}

<div class="form-container">
        <div class="alert alert-success hidden">
                <strong>Nova obavijest je uspješno dodana!</strong>
              </div>
<form id="frmCreatePost" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <input type="text" name="title" placeholder="Naslov" class="form-control">
        <p class="text-danger error-title"></p>
    </div>
    <div class="form-group">
        {{-- <input type="" name="body" placeholder="Tekst" class="form-control"> --}}
        <textarea rows="10" cols="50" name="body" placeholder="Sadržaj objave">
        Sadržaj objave
                </textarea>
        <p class="text-danger error-body"></p>

    </div>
    <div class="form-group">
        <input type="text" name="shortDescription" placeholder="Kratak opis" class="form-control">
        <p class="text-danger error-sDescription"></p>
    </div>
    <div class="form-group">
        <input type="file" name="file[]" class="form-control" multiple="multiple">
    </div>
    <div class="form-group">
        <button id="btnSubmit" class="btn btn-sm btn-primary">Spasi</button>
    </div>
</form>
</div>

{{-- @endsection --}}

<script>
   $("#btnSubmit").click(function(e){
       var frmData=$("#frmCreatePost").serialize();
       var form = new FormData($("#frmCreatePost"));
       console.log(form);
   e.preventDefault();
   $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
        $.ajax({
                        type:'post',
                        url:'admin-posts',
                        data:new FormData($("#frmCreatePost")[0]),
                        contentType:false,
                        processData:false,
                        // data:{
                        //     '_token':$('input[name=_token]').val(),
                        //     'firstName':$('input[name=firstName]').val(),
                        //     'lastName':$('input[name=lastName]').val(),
                        //     'beltRank':$('input[name=beltRank]').val(),
                        //     'JMBG':$('input[name=JMBG]').val(),
                        //     'dateOfBirth':$('input[name=dateOfBirth]').val(),
                        //     'file':$('input[name=file]').val()
                        // },
                        success:function(data)
                        {
                            if(data.errors)
                            {
                                
                            }else{
                                console.log(data);
                                $("#dataBody").html(data);
                                $(".alert").removeClass("hidden");
                            }
                        }
                    });
   });
  
              

    </script>