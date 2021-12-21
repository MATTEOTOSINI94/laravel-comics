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
            <h1 class="pb-3">{{$fumetti["title"]}}</h1>
            <div class="d-flex info-banner">
                <div class="info-price"><p class="m-0">US price :{{$fumetti["price"]}}</p>  </div>
                <div class="info-avaible"><p class="m-0">AVAIBLE</p></div>
                <div class="info-check"><p class="m-0">Check Avaibilty</p></div>
            </div>

            <div class="pt-3">
                <p>{{$fumetti["description"]}}</p>
            </div>
        </div>
        <div class="col-4"><img style="width: 100%" src={{asset("/img/adv.jpg")}} alt=""></div>
      
    </div>  
</div>
<section style="background-color:rgb(246, 246, 246)" class="border-top">
    <div class="box-table">
    <div class="container pt-3">
       <div class="row">
        <div class="col-6">
            <h3 style="color: black">Talent</h3>
            <div class="d-flex box-art pt-3 pb-3">
                <div><p class="info-artist">Art By:</p></div>
                <div><p class="artist-name">{{implode("," ,$fumetti["artists"])}}</p></div>
              
            </div>
            <div class="d-flex box-written pb-3 pt-3">
                <div><p class="info-artist">Written by:</p></div>
                <div><p class="artist-name">{{implode("," ,$fumetti["writers"])}}</p></div>
              
            </div>
        </div>
        <div class="col-6">
            <h3 style="color: black">Specs</h3>
            <div class="d-flex box-art pt-3 pb-3">
                <div><p class="info-artist">Series:</p></div>
                <div><p class="artist-name">{{$fumetti["series"]}}</p></div>
            </div>
            <div class="d-flex box-written pt-3 pb-3">
                <div><p class="info-artist">Written by:</p></div>
                <div><p class="artist-name">{{$fumetti["price"]}}</p></div>
            </div>
            <div class="d-flex pt-3 pb-3">
                <div><p class="info-artist">On sale date:</p></div>
                <div><p class="artist-name">{{$fumetti["sale_date"]}}</p></div>
            </div>
        </div>
       </div>
    </div>
</div>



       <section class="border-top ">
       <div class="container box-row">
           <div class="row">
           <div class="col-3 box-size border">
               <div class="d-flex ">
                <div style="flex-grow: 1"><p class="icon-text" >Digital Comics</p></div>
                <div><img class="text-right icon-size"  src={{asset("img/buy-comics-digital-comics.png")}}  alt=""></div>
               </div>
           </div>
           <div class="col-3 box-size border">
            <div class="d-flex ">
                <div style="flex-grow: 1"><p class="icon-text" >Digital Comics</p></div>
                <div><img class="text-right icon-size"  src={{asset("img/buy-comics-digital-comics.png")}}  alt=""></div>
               </div>
           </div>
           <div class="col-3 box-size border">
                <div class="d-flex ">
                    <div style="flex-grow: 1"><p class="icon-text" >Subscription</p></div>
                    <div><img class="icon-style icon-size" src="{{asset("img/buy-comics-subscriptions.png")}}"  alt=""></div>
                </div>
            </div>

            <div class="col-3 box-size border">
                <div class="d-flex ">
                    <div style="flex-grow: 1"><p class="icon-text" >Comic Shop Locator</p></div>
                    <div> <img class="icon-style icon-size" src="{{asset("img/buy-comics-shop-locator.png")}}"  alt=""></div>
                </div>
               </div>
           </div>
       </div>
        
       </div>
    </div>
</section>

   
</section>

@endsection



<style>
.info-banner{
    background-color: rgb(85, 186, 89);
    border-bottom: 1px solid black;

    
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

.info-artist{
font-size: 10px;
width: 50px;
margin: 0
}

.artist-name{
font-size: 13px;
margin: 0;
padding-left: 100px;
font-weight:bold;
}

.box-written{
border-top: 1px solid grey;
border-bottom:1px solid grey
}

.box-size{
    padding: 10px

}

.icon-size{
    width: 30px;
    filter:contrast(0.5);
   
}

.box-table{
    padding-bottom: 150px
}
</style>