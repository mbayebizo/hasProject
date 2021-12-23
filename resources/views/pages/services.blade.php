@extends('layouts.template')
@section('content')
    <section class="sub-header">
        <h5 class="page-title">SERVICES</h5>
        <ul class="breadcrumb">
            <li><a href="{{route('site')}}">Home</a></li>
            <li><span class="active">SERVICES</span></li>
        </ul>
    </section>
    <!-- end sub-header -->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="section-title"><span>01</span>SERVICES</h4>
                </div>
                <!-- end col-12 -->
                <div class="col-md-9">
                    <figure class="image"><img src="{{asset('frontend/images/news-image4.jpg')}}" alt="Image"></figure>
                    <div class="row other-features">
                        <div class="col-xs-12">
                            <h4 class="section-title"><span>02</span> Prochain Départ</h4>
                        </div>
                        <!-- end col-12 -->
                        @include('pages.partial.depat')
                        <!-- end col-12 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end col-9 -->
                <div class="col-md-3">
                    <aside class="services-sidebar">
                        <ul role="menu">
                            <li><a href="{{route('groupage')}}" class="transition">Groupage Colis</a></li>
                            <li><a href="{{route('conteneur')}}" class="transition">Mise à disposition</a></li>
                            <li><a href="{{route('garde')}}" class="transition">Meuble & Stockage</a></li>
                            <li><a href="{{route('envoi')}}" class="transition">Envoi Véhicules</a></li>
                        </ul>
                        <figure class="side-banner"><img src="{{asset('frontend/images/side-image.jpg')}}"
                                                         alt="Image"></figure>
                        <!-- end side-banner -->
                        <div class="pdf-catalog"><i class="icon-document"></i> <a href="#">DOWNLOAD PDF</a></div>
                        <!-- end pdf-catalog -->
                    </aside>
                    <!-- end services-sidebar -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end services-->
@endsection
