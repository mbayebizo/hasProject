@extends('layouts.template')
@section('content')
    <section class="sub-header">
        <h5 class="page-title">SERVICES</h5>
        <ul class="breadcrumb">
            <li><a href="{{route('site')}}">Home</a></li>
            <li><span class="active">TARIFICATION</span></li>
        </ul>
    </section>
    <section class="calculate-shipping">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h3 class="section-title"><span>02</span>CALCULE PRIX COLIS </h3>

                    <form>
                        <div class="form-planification">
                            <span class="big-circle-fron"></span>
                            <div class="box">
                                <h4> INFORMATOIN DU COLIS</h4>
                                <div class="row ">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                                <select id="paysdepar" name="paysDepart" required>
                                                    <option value="test">France</option>
                                                </select>
                                                <label for="paysdepar">Pays Départ </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                                <select id="villedepart" name="villedepart" required>
                                                    <option></option>
                                                    <option value="HAS Paris">HAS Paris</option>
                                                    <option value="HAS Rennes Lorient Brest ">HAS Rennes Lorient Brest </option>
                                                    <option value="HAS Angers Nantes">HAS Angers Nantes</option>
                                                </select>
                                                <label for="villedepart">Ville Départ</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 effet-input">
                                                <select id="parrive" name="parrive" required>
                                                    <option></option>
                                                    <option value="SENEGAL">SENEGAL (DAKAR)</option>
                                                    <option value="BAMAKO (ML)">MALI (BAMAKO)</option>
                                                    <option value="ABIDJAN (CI)">COTE D'IVOIRE (ABIDJAN)</option>
                                                </select>
                                                <label for="paysdepar">Pays Arrivé </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                                <select id="tcolis" name="tcolis">
                                                </select>
                                                <label for="tcolis">Type Colis </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                                <input type="number" name="qte_colis"
                                                       id="qte_colis" placeholder="" min="1"/>
                                                <label for="qte_colis">Nombre de Colis</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="box-price">
                                                    <h2 id="prix"> 0 <span>&euro;</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box bg_bleu">
                                <h4> DEPARTS PROGRAMMEES</h4>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <span class="circle two"></span>
                                        <div class="depart-prevu">
                                            <div class="info">
                                                <table class="table table-striped" style="border: 1px solid #1a202c">
                                                    <thead style="background: #0a7891;color: #fff;text-align: center">
                                                    <tr>
                                                        <th>Pays</th>
                                                        <th>Date Départ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Sénégal</td>
                                                        <td>
                                                            @if($sn!=null)
                                                                {{\Carbon\Carbon::parse($sn->date_depart)->format('d/m/y')}}
                                                            @else
                                                                Aucune Date pour le Sénégal
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mali</td>
                                                        <td>
                                                            @if($ml!=null)
                                                                {{\Carbon\Carbon::parse($ml->date_depart)->format('d/m/y')}}
                                                            @else
                                                                Aucune Date pour le Mali
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cote d'Ivoire</td>
                                                        <td>
                                                            @if($ci !=null)
                                                                {{\Carbon\Carbon::parse($ci->date_depart)->format('d/m/y')}}
                                                            @else
                                                                Aucune Date pour la Cote D'Ivoire
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_form">
                                    <a href="{{route('site')}}#planifining" class="btn btn-contact" id="planification">Planification</a>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>
                </div>
                <!-- end col-8 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
@section('script')
    <script>
        document.getElementById("qte_colis").defaultValue = "1"
        $('#parrive').on('change', function () {
            var pays = $(this).find(":selected").val();

            var _url = '/tarifByPays/' + pays
            $.ajax({
                type: "GET",
                url: _url,
                dataType: 'json',
                success: function (data) {
                    var text = "";
                    document.getElementById("qte_colis").innerHTML = 1;
                    document.getElementById("prix").innerHTML = data[0].prix * 1 + " <span>&euro;</span>";
                    $.each(data, function (key, val) {
                        text += "<option value=" + val.id + ">" + val.nom + "</option>";
                    });
                    text += "<option value=" + 'autre' + ">" + "Autres" + "</option>";
                    $("#tcolis").html(text);
                },
                error: function (data) {
                    console.log(data)
                }
            })
        });

        $('#tcolis').on('change', function (e) {
            var id = $(this).find(":selected").val();
            if (id === 'autre') {
                window.location = "/contact"
            } else {
                var qte = document.getElementById("qte_colis").value
                var _url = '/tarification/' + id
                $.ajax({
                    type: "GET",
                    url: _url,
                    dataType: 'json',
                    success: function (data) {
                        $.each(data, function (key, val) {
                            document.getElementById("prix").innerHTML = val.prix * qte + " <span>&euro;</span>";
                        });
                    },
                    error: function (data) {
                        console.log(data)
                    }
                })
            }
        })

        $('#qte_colis').on('change', function () {
            var qte = document.getElementById("qte_colis").value
            var id = document.getElementById("tcolis").value;

            var _url = '/tarification/' + id
            $.ajax({
                type: "GET",
                url: _url,
                dataType: 'json',
                success: function (data) {
                    $.each(data, function (key, val) {
                        document.getElementById("prix").innerHTML = val.prix * qte + " <span>&euro;</span>";
                    });
                },
                error: function (data) {
                    console.log(data)
                }
            })
        })
    </script>
@endsection
