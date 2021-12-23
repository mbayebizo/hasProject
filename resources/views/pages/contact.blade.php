@extends('layouts.template')
@section('content')
    <section class="sub-header">
        <h5 class="page-title">CONTACT</h5>
        <ul class="breadcrumb">
            <li><a href="{{asset(route('site'))}}">Home</a></li>
            <li><span class="active">Contact</span></li>
        </ul>
    </section>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="section-title"><span>01</span>ADDRESSE INFOS</h4>
                </div>
                <!-- end col-12 -->
                <div class="col-md-3 col-sm-3">
                    <address>
                        <h5>FRANCE</h5>
                        <p>Siège HAS Logistics Paris, <br>
                            Paris, FRANCE</p>
                        <p><i class="fa fa-phone"></i>  +33 7 67 65 65 77<br>
                            <i class="fa fa-envelope"></i> france@haslogistique.fr
                        </p>
                    </address>
                </div>
                <!-- end col-4 -->
                <div class="col-md-3 col-sm-3">
                    <address>
                        <h5>SENEGAL</h5>
                        <p>HAS Dakar , <br>
                            Dakar, SENEGAL</p>
                        <p><i class="fa fa-phone"></i>  +33 7 67 65 65 77<br>
                            <i class="fa fa-envelope"></i> senegal@haslogistique.fr
                        </p>
                    </address>
                </div>
                <!-- end col-4 -->
                <div class="col-md-3 col-sm-3">
                    <address>
                        <h5>MALI</h5>
                        <p>HAS Bamako, <br>
                            Bamako, MALI</p>
                        <p><i class="fa fa-phone"></i>  +33 7 67 65 65 77<br>
                            <i class="fa fa-envelope"></i> mali@haslogistique.fr</p>
                    </address>
                </div>
                <div class="col-md-3 col-sm-3">
                    <address>
                        <h5>COTE D'IVOIRE</h5>
                        <p>HAS Abidjan , <br>
                            Abidjan, COTE D'IVOIRE</p>
                        <p><i class="fa fa-phone"></i>  +33 7 67 65 65 77<br>
                            <i class="fa fa-envelope"></i> ci@haslogistique.fr
                    </address>
                </div>
                <!-- end col-4 -->
                <div class="col-xs-12">
                    <div class="contact-container">
                        <span class="big-circle"></span>
                        <div class="form">
                            <div class="contact-info">
                                <h3 class="title-info">Let's get in touch</h3>
                                <p class="text">Lorem ipSum Tesrt tres  </p>
                                <div class="info">
                                    <div class="information">
                                        <img src="{{asset("frontend/images/has/cartes-et-drapeaux.png")}}" class="icons">
                                        <p>92 Paris, France</p>
                                    </div>
                                    <div class="information">
                                        <img src="{{asset("frontend/images/has/enveloppe.png")}}" class="icons">
                                        <p>contact@haslogistique.com</p>
                                    </div>
                                    <div class="information">
                                        <img src="{{asset("frontend/images/has/call.png")}}" class="icons">
                                        <p>+33 00 00 00 00 00 00 </p>
                                    </div>
                                </div>
                                <div class="social-media-contact">
                                    <p>Rester Connecter avec Nous:</p>
                                    <div class="social-icon">
                                        <a href="#">
                                            <i class="icon icon-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="icon icon-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="icon icon-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form">
                                <span class="circle one "></span>
                                <span class="circle two"></span>
                                <form action="" class="formulaire"  method="post"
                                      action="{{ route('contact.store')}}">
                                    @csrf
                                    <h3 class="title-contact">Contact Nous</h3>
                                    <div class="input-container">
                                        <input type="text" name="name" class="input-contact" placeholder="Nom">
                                        {{-- <label>Nom</label>
                                         <span>Nom</span>--}}
                                    </div>
                                    <div class="input-container">
                                        <input type="email" name="email" class="input-contact" placeholder="Email">
                                        {{--<label>Email</label>
                                        <span>Email</span>--}}
                                    </div>
                                    <div class="input-container">
                                        <input type="tel" name="phone" class="input-contact" placeholder="Téléphone">
                                        {{--  <label>Téléphone</label>
                                          <span>Téléphone</span>--}}
                                    </div>
                                    <div class="input-container textarea">
                                        <textarea  name="message" rows="10" cols="30" class="input-contact" placeholder="Message"></textarea>
                                        {{--<label>Message</label>
                                        <span>Message</span>--}}
                                    </div>
                                    <input type="submit" value="Envoyer" class="btn btn-contact">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end column -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
