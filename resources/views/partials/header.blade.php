@php
  $menuLink = ["caracheters","comics","movies","tv","games","collectibles","video","fans","news","shop"]
@endphp

<header class="hello">
  <div class="blu-border">
  </div>
    <div class="container-logo-list">
      <div>
        <img src="img/dc-logo.png" alt="">
      </div>
        <ul>
       @foreach ($menuLink as $link)
        <li ><a style="text-transform: uppercase" href="{{$link}}">{{$link}}</a></li>
       @endforeach
        </ul>
    </div>
  </header>