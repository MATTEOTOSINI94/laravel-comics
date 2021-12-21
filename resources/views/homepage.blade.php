@extends('layout.default')
@section('titolo', 'HomePage')
@section('content')
<div class="jumbo-bg"></div>
<div class="bg-container">
           
    <div class="content">
@foreach ($film as $key=>  $item)
<a class="container-card " href="fumetti/{{$key}}">

    <div class="card">
        <div class="box-overlay">
         <img src= "{{$item["thumb"]}}" alt="logo">
           <div class="overlay"><p>{{$item["price"]}}</p></div>
        </div>
        <h4>{{$item["title"]}}</h4>
    </div>
</a>

@endforeach
</div>
</div>
@endsection
@section('banner')
@include('partials.banner')
@endsection