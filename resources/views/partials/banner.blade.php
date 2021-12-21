

<section class="section-icon" style=@yield('stile')>
    <div class="icon-container">
        <div  class="flex-style">
            <img class="icon-style" src={{asset("img/buy-comics-digital-comics.png")}}  alt="">
            <p class="icon-text" >Digital Comics</p>
        </div>
        <div  class="flex-style">
            <img class="icon-style" src="{{asset("img/buy-comics-merchandise.png")}}"  alt="">
            <p class="icon-text" >Dc Merchandaise</p>
        </div>
        <div  class="flex-style">
            <img class="icon-style" src="{{asset("img/buy-comics-subscriptions.png")}}"  alt="">
            <p class="icon-text" >Subscription</p>
        </div>
        <div  class="flex-style">
            <img class="icon-style" src="{{asset("img/buy-comics-shop-locator.png")}}"  alt="">
            <p class="icon-text" >Comic Shop Locator</p>
        </div>
        <div  class="flex-style">
            <img class="icon-style" src="{{asset("img/buy-dc-power-visa.svg")}}"  alt="">
            <p class="icon-text" >Dc Power Visa</p>
        </div>
    </div>
</section>

<style>
    .section-icon{
        background-color: rgb(2, 130, 249);
        padding: 10px 0;
    }

    .icon-container{
        display: flex;
        margin: auto;
        max-width: 920px;
        justify-content: space-between;
        padding: 55px 0;}

        .icon-style{
            width: 30px;  
        }


.flex-style{
    display: inline-flex;
    align-items: center;
    
}

.icon-text{
    color: white;
    padding-left: 10px;
}
</style>