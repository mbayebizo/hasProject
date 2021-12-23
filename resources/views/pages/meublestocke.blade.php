@extends('layouts.template')
@section('content')
    <section class="sub-header">
        <h5 class="page-title">SERVICES</h5>
        <ul class="breadcrumb">
            <li><a href="{{route('site')}}">Home</a></li>
            <li><span class="active">Meuble & Stockage</span></li>
        </ul>
    </section>
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="section-title"><span>01</span>Meuble & Stockage</h4>
                </div>
                <!-- end col-12 -->
                <div class="col-md-9">
                    <p class="lead">Nous disposons de plus de XXXX mètres cubes d'espace de stockage pour protéger vos meubles dans des lieux protégés ( vidéosurveillance 24h/24, 7j/7 ). Placez vos effets personnels dans des conteneurs numérotés individuellement.
                        L'entrepôt est situé dans le département 94 – Villeneuve saint Georges en Île-de-France. La sécurité des marchandises et les meilleures conditions de stockage sont devenues le concept de base du stockage de meubles.</p>
                    <p>Avec HAS Logistique, Vous êtes informé en temps réel de l’état d’acheminement de votre colis, sur notre site internet, par SMS et  aussi par Email.</p>
                    <p>Nous vous garantissons une livraison en moyenne un mois.</p>
                    <p>HAS Logistique prend en charge toutes les procédures douanières d'exportation. Cependant, vous devez nous fournir des déclarations de colisages exactes. Les effets personnels sont considérés comme de marchandises.
                        Un formulaire de déclaration en douane est requis à l'arrivée au port. </p>
                    <p>Il est donc nécessaire de déclarer clairement le contenu de vos articles
                        lors de l’enlèvement ou de la prise en charge de vos colis.</p>
                    <p>Pour les nouveaux produits, il faudra présenter vos factures d’achats.</p>
                    <p>Il est formellement prescrit d’introduire des produits interdits sous peine de sanctions graves.</p>
                    <p>Pour plus d'informations, veuillez vous référer au site Web des douanes du pays/région.</p>
                    <ul>
                        <li>Mali : <a href="https://douanes.gouv.ml/" style="color: #0a7891">Douane Malienne</a></li>
                        <li>Sénégal : <a href="https://douanes.gouv.ml/" style="color: #0a7891">Douane Sénégalaise</a></li>
                        <li>Côte d'Ivoire : <a href="https://douanes.gouv.ml/" style="color: #0a7891">Douane Ivoirienne</a></li>

                    </ul>
                    <div class="row other-features">
                        <div class="col-xs-12" style="margin-bottom: 10px" >
                            <h4 class="section-title"><span>02</span> Comment faire pour envoyer vos colis ?</h4>
                            <li>Sans surprise, utiliser notre <a href="{{route('tarification')}}" style="color: #0a7891"><strong>simulateur intelligent</strong></a>  pour calculer le prix de vos colis.</li>
                            <li>Cela vous conviens ? Nickel ! <a href="{{route('site')}}#planifining" style="color: #0a7891"><strong>Planifier l’enlèvement</strong></a> en ligne en toute simplicité lien.</li>
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
                        <figure class="side-banner"><a href="#"><img src="{{asset('frontend/images/side-image.jpg')}}" alt="Image"></a></figure>
                        <!-- end side-banner -->
                        <div class="pdf-catalog"> <i class="icon-document"></i> <a href="#">DOWNLOAD PDF</a> </div>
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
@endsection
