@extends('layouts.front.app')
@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
    <section class="container content">
        <div class="col-md-8 col-md-offset-2">
            <h2>About Us</h2>
            <p>Libelula is a unique exciting store. It offers several products such as shoes, bags, belts, cloth, slimming wear. It also produces cakes, cookies etc. Uniqueness from this site comes from having the owner of the place Lorena producing everything herself. She also offers other services such as doing some models for you, and you bring to other place. She offers course such as how to make cakes, how to make models, etc. She decided to have her own store, a nice entrepreneur. She is thinking about becoming a worldwide wholesale place. We want to help her.</p>
            <p>She wants to offer all her services and products in her site.</p>
            <p>She wants a site to offer her products, services and sell them.</p>
            <p>Libelula site is an E-commerce that offers products and services and both products and services can be acquired from her site. We as developer need to define her catalog and setup a place to sell her products. Her site is in English and Spanish.</p></br>
        </div>
    </section>
@endsection