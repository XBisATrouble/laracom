@extends('layouts.front.app')
@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
    <section class="container content">
        <div class="col-md-12" style="align-content: center">{{$data}}</div>
        <div class="col-md-4 col-md-offset-4">
            <h2>About Us</h2>
        </div>
    </section>
@endsection