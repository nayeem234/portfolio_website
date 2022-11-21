@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Main</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Main</li>
        </ol>
      <div class="row">
        <div class="form-group col-md-3 mt-3">
            <h3>Background Image</h3>
            <img style="height:30vh"src="{{ asset('assets/img/bg-masthead.jpg')}}" class="img-thumbnail">
        </div>
      </div>
    </div>

</main>

@endsection
