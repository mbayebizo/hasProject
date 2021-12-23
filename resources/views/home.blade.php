@extends('layouts.template')
@section('content')
    @include('home_partial.slider_partial')
    @include('home_partial.featured_partial')
    @include('home_partial.planfication_partial')
    @include('home_partial.service_home_partial')
    @include('home_partial.temoin_partial')
    @include('home_partial.client_partial')
@endsection
@section('script')
    <script src="https://unpkg.com/imask"></script>
    <script src="{{asset('frontend/js/intlTelInput-jquery.js')}}"></script>
    <script src="{{asset('frontend/js/intlTelInput.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
    <script>
        var regExpMask = IMask(document.getElementById('ville_exp'), {
            mask: /^[0-9]\d{0,4}$/
        });
    </script>
    <script>
        $('#pays_dest').val("mali");
        var input = document.querySelector("#phone_exp");
        var inputdest = document.querySelector("#phone_dest");
        var  addressDropdown = document.querySelector("#pays_dest");
        addressDropdown.addEventListener('change', function() {
            if(this.value==="senegal"){
                iti.setCountry('sn');
            }
            if(this.value==="mali"){
                alert('mali')
                iti.setCountry('ml');
            }
            if(this.value==="ci"){
                iti.setCountry('ci');
            }
        });
        window.intlTelInput(input, {
            onlyCountries:['fr'],
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                return  selectedCountryPlaceholder;
            },

            utilsScript: "/frontend/js/utils.js"
        });
        var iti = window.intlTelInput(inputdest, {
            onlyCountries:['sn','ml','ci'],
            initialCountry: "ml",
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                return  selectedCountryPlaceholder;
            },

            utilsScript: "/frontend/js/utils.js"
        });
        $('.owl-carousel').owlCarousel({
            autoplay: true,
            loop: true,
            margin: 10,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection
