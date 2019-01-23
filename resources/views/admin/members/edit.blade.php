<div class="form-container">
        <div class="alert alert-success hidden">
                <strong>Član je uspješno izmijenjen!</strong>
              </div>
<form id="frmEditMember" method="PUT" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
            <input name="_method" value="PUT" type="hidden"/>
        <input type="hidden" value="{{$member->id}}" name="id">
    </div>
    <div class="form-group">
    <input type="text" name="firstName" value="{{$member->firstName}}" placeholder="Ime" class="form-control">
        <p class="text-danger error-fName"></p>
    </div>
    <div class="form-group">
        <input type="text" name="lastName" value="{{$member->lastName}}" placeholder="Prezime" class="form-control">
        <p class="text-danger error-lName"></p>
    </div>
    <div class="form-group">
        <input type="text" name="beltRank" value="{{$member->beltRank}}" placeholder="Pojas" class="form-control">
        <p class="text-danger error-bRank"></p>
    </div>
    <div class="form-group">
        <input type="text" name="JMBG" value="{{$member->JMBG}}" placeholder="JMBG" class="form-control">
        </div>
    <div class="form-group">
        <input type="date" name="dateOfBirth" value="{{$member->dateOfBirth}}" placeholder="Datum rođenja" class="form-control">
    </div>
    <div class="form-group">
        <input type="file" name="file" class="form-control">
    </div>
    <div class="form-group">
        <button id="btnSubmit" class="btn btn-sm btn-primary">Spasi</button>
    </div>
</form>
</div>

<script>
    $("#btnSubmit").click(function(event){
        event.preventDefault();


        var id = $("input[name=id]").val();
        var actionUrl="admin-members/"+id;
        console.log(actionUrl);
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:"post",
            url:actionUrl,
            data: new FormData($("#frmEditMember")[0]),
            contentType:false,
            processData:false,
            success:function(data)
            {
                if(data.errors)
                {
                    $(".error-fName").text(data.errors.firstName);
                    $(".error-lName").text(data.errors.lastName);
                    $(".error-bRank").text(data.errors.beltRank);
                }else{
                    $("#dataBody").html(data);
                    $(".alert").removeClass("hidden");
                }
            }
        });

    });
</script>