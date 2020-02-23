@if(session('message'))
<div class="alert alert-info">
    <h6 class='text-center'>{{session('message')}}</h6>
</div>
@endif


@if(session('delete'))
<div class="alert alert-danger">
    <h6 class='text-center'>{{session('delete')}}</h6>
</div>
@endif
