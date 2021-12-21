@extends('layout.default')

@section('content')
<div class="jumbo-bg"></div>
<div class="thumb-container">
    <div class="container">
      <img class="thumb-pic" src={{asset($fumetti["thumb"])}} alt="">
    </div>
</div>

<div class="container">
    
    <div class="row align-items-center pt-5 pb-5">
        
        
        <div class="col-8">
            <h1>{{$fumetti["title"]}}</h1>
            <div class="d-flex info-banner">
                <div class="info-price"><p class="m-0">US price :{{$fumetti["price"]}}</p>  </div>
                <div class="info-avaible"><p class="m-0">AVAIBLE</p></div>
                <div class="info-check"><p class="m-0">Check Avaibilty</p></div>
            </div>

            <div class="">
                <p>{{$fumetti["description"]}}</p>
            </div>
        </div>
        <div class="col-4"><img src={{asset("/img/adv.jpg")}} alt=""></div>
      
    </div>  
</div>
<section>
    <div class="container">
       <div class="row">
        <div class="col-6">
            <h3>Talent</h3>
            <div class="d-flex">
                <div><h6>Art By:</h6></div>
                <div><p>{{implode("," ,$fumetti["artists"])}}</p></div>
              
            </div>
            <div class="d-flex">
                <div><h6>Art By:</h6></div>
                <div><p>{{implode("," ,$fumetti["writers"])}}</p></div>
              
            </div>
        </div>
        <div class="col-6"></div>
       </div>
    </div>
</section>
@dump($fumetti)
@endsection



<style>
.info-banner{
    background-color: rgb(85, 186, 89);
    border-bottom: 1px solid black
    
}
.info-price{
    flex-grow: 1;
    padding: 15px
   
}

.info-avaible{
    border-right: 1px solid black;
    padding:15px
}

.info-check{
    padding: 15px
}

.thumb-container{
    background: rgb(2, 130, 249);
    padding: 40px;
    position: relative;

}

.thumb-pic{
    position: absolute;
    width: 200px;
    bottom: 40px
}
</style>