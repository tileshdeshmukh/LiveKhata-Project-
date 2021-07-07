@if(session('exist'))
<div class="alert alert-danger">
{{session('exist')}}
</div>
@endif

@if(session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif
