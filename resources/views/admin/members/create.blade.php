{{-- @extends('shared.admin') --}}


{{-- @section('content') --}}

<div class="form-container">
        <div class="alert alert-success hidden">
                <strong>Novi član je uspješno dodan!</strong>
              </div>
<form id="frmCreateMember" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <input type="text" name="firstName" placeholder="Ime" class="form-control">
        <p class="text-danger error-fName"></p>
    </div>
    <div class="form-group">
        <input type="text" name="lastName" placeholder="Prezime" class="form-control">
        <p class="text-danger error-lName"></p>
    </div>
    <div class="form-group">
        <input type="text" name="beltRank" placeholder="Pojas" class="form-control">
        <p class="text-danger error-bRank"></p>
    </div>
    <div class="form-group">
        <input type="text" name="JMBG" placeholder="JMBG" class="form-control">
        </div>
    <div class="form-group">
        <input type="date" name="dateOfBirth" placeholder="Datum rođenja" class="form-control">
    </div>
    <div class="form-group">
        <input type="file" name="file" class="form-control">
    </div>
    <div class="form-group">
        <button id="btnSubmit" class="btn btn-sm btn-primary">Spasi</button>
    </div>
</form>
</div>

{{-- @endsection --}}

<script>
   $("#btnSubmit").click(function(e){
       var frmData=$("#frmCreateMember").serialize();
       var form = new FormData($("#frmCreateMember"));
       console.log(form);
   e.preventDefault();
   $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
        $.ajax({
                        type:'post',
                        url:'admin-members',
                        data:new FormData($("#frmCreateMember")[0]),
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
                                $(".error-fName").text(data.errors.firstName);
                                $(".error-lName").text(data.errors.lastName);
                                $(".error-bRank").text(data.errors.beltRank);
                            }else{
                                console.log(data);
                                $("#dataBody").html(data);
                                $(".alert").removeClass("hidden");
                            }
                        }
                    });
   });
  
              

    </script>