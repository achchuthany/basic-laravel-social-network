@if(count($errors))
<div class="row">
    <div class="col-md-12 mt-2"> 
        @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$error}}            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach       
    </div>
</div>
@endif

@if(Session::has('message'))
<div class="row">
    <div class="col-md-12 mt-2"> 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('message')}}            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif