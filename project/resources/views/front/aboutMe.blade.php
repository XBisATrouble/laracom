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
            <h2>Contact Us</h2>
            <form action="{{ route('contact.store') }}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="text">Your Full Name</label>
                    <input type="text" name="name" id="name" value="" class="form-control" autofocus>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="text" name="message" id="message" value="" class="form-control"></textarea>
                </div>
                <div class="row">
                    <button class="btn btn-default btn-block" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection