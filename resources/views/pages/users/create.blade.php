@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 p-5 shadow">
            <div class="text-center pb-5"><h3><u>{{ $formData['title'] }}</u></h3></div>
            @include('pages.users.forms.create')
        </div>
        <div class="col-md-3">
        </div>
    </div>  
@endsection
