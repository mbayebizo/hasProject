<section class="slider">
    <div class="fixed-form">
        <div class="container">
            <h3>LOGISTICS</h3>
            <h5>Suivre votre colis jusqu'à la livraison</h5>
            <form class="row" method="post" action="{{route('tracking')}}">
                @csrf
                <input type="text" name="colis" placeholder="Tracking ID" class="col9">
                <button type="submit" class="col3">SUIVRE</button>
            </form>
        </div>
        <!-- end container -->
    </div>
    <!-- end fixed-form -->
    <div class="main-slider">
        <div class="slide1"></div>
        <!-- end slider1 -->
        <div class="slide2"></div>
        <!-- end slider2 -->
        <div class="slide3"></div>
        <!-- end slider3 -->
    </div>
</section>
