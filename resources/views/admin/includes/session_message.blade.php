@if (session()->has('success'))
<div class="col-md-12">
    <div class="alert alert-success">
       {{session()->get('success')}}
    </div>
</div>
    @elseif (session()->has('error'))
    <div class="col-md-12">
    <div class="alert alert-danger">
        {{session()->get('error')}}
     </div>
</div>

@endif
