@if ($errors->any())


            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error</strong>{{$error}}
                </div>
            @endforeach


@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Error</strong>{{session('error')}}
</div>
@endif






