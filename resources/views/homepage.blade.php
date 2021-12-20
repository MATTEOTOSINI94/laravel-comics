@extends('layout.default')
@section('titolo', 'HomePage')
@section('content')
<div class="jumbo-bg"></div>
<div class="bg-container">
           
    <div class="content">
@foreach ($film as $item)
<div class="container-card ">

    <div class="card">
        <div class="box-overlay">
         <img src= "{{$item["thumb"]}}" alt="logo">
           <div class="overlay"><p>{{$item["price"]}}</p></div>
        </div>
        <h4>{{$item["title"]}}</h4>
    </div>
</div>

@endforeach
</div>

</div>
@endsection