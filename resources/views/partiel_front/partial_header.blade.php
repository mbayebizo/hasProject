<header class="full-header">
    <nav class="navbar navbar-default">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 hidden-xs">

                    </div>
                    <!-- end col-6 -->
                    <div class="col-md-2 col-sm-2 col-xs-4">

                    </div>
                    <!-- end col-3 -->
                    <div class="col-md-4 col-sm-4 col-xs-8">
                            <span class="weather">
                                <i class="ion-ios-calculator"></i>
                                <a href="{{route('tarification')}}" class="link_top"> Estimation</a>
                            </span> <span class="weather"><i
                                class="ion-ios-clock-outline"></i>
                                <a href="{{route('site')}}#planifining" class="link_top"> Elèvement</a>
                            </span>
                        <span class="phone"><i
                                class="ion-ios-telephone"></i> +1 8734 7346 4 </span></div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end top-bar -->
        <div class="container">
            <div class="navbar-header">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <button type="button" class="navbar-toggle toggle-menu menu-left push-body"
                                data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span
                                class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span></button>
                        <a class="navbar-brand" href="{{route('site')}}"><img
                                src="{{asset('frontend/images/logo.png')}}" alt="Image"></a></div>
                    <!-- end col-5 -->
                    <div class="col-md-3 col-sm-4 hidden-xs"><i class="icon-global"></i>
                        <h6>HEURE OVERTURE<br>
                            <span>LUN-DIM 07:00 - 18:00 </span></h6>
                    </div>
                    <!-- end col-2 -->
                    <div class="col-md-3 col-sm-4 hidden-xs"><i class="icon-map-pin"></i>
                        <h6>NOS AGENCES<br>
                            <span>FRANCE - SENEGAL - MALI - C. IVOIRE</span></h6>
                    </div>
                    <!-- end col-2 -->
                    <div class="col-md-3 hidden-sm hidden-xs"><i class="icon-chat"></i>
                        <h6>QUICK SUPPORT<br>
                            <span>SUPPORT@SHIPPER.COM</span></h6>
                    </div>
                    <!-- end col-2 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end navbar-header -->
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left"
                 id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav main-menu">
                    <li><a href="{{route('site')}}" class="transition">HOME</a></li>
                    <li><a href="{{route('service')}}" class="transition">SERVICES</a></li>
                    <li><a href="{{route('tarification')}}" class="transition">TARIFICATION</a></li>
                    <li><a href="{{route('contact')}}" class="transition">CONTACT</a></li>
                </ul>
                <ul class="nav navbar-nav social-nav visible-lg visible-xs">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                class="ion-social-facebook"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                class="ion-social-twitter"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google+"><i
                                class="ion-social-googleplus"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i
                                class="ion-social-youtube"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Vimeo"><i
                                class="ion-social-vimeo"></i></a></li>
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </nav>
</header>
