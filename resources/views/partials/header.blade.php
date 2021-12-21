@php
  $menuLink = 
[
    
[
  "title"=>"caracheters",
  "route_name" =>"home"
],
[
  "title"=>"comics",
  "route_name" =>"comics"
],
[
  "title"=>"movies",
  "route_name" =>"movies"
],
     
[
  "title"=>"tv",
  "route_name" =>"tv"
],

[
  "title"=>"games",
  "route_name" =>"games"
],

[
  "title"=>"collectibles",
  "route_name" =>"collectibles"
],

[
  "title"=>"video",
  "route_name" =>"video"
],
[
  "title"=>"fans",
  "route_name" =>"fans"
],
[
  "title"=>"games",
  "route_name" =>"news"
],
[
  "title"=>"shop",
  "route_name" =>"shop"
],
     
];

$rotta = Request::route()->getName()
@endphp

<header class="hello">
  <div class="blu-border">
  </div>
    <div class="container-logo-list">
      <div>
        <img style="" src={{asset("img/dc-logo.png")}} alt="">
      </div>
        <ul>
       @foreach ($menuLink as $link)
        <li  class={{$rotta === $link["route_name"] ?" active" : ''}}><a style="text-transform: uppercase " href={{route($link["route_name"])}}>{{$link["title"]}}</a></li>
       @endforeach
        </ul>
    </div>
  </header>


  