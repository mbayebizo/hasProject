<div class="col-xs-12">
    <div class="row">
        <div class="col-md-9">
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
        <div class="col-md-3 ">
            <a href="{{route("tarification")}}">
                <div class="btn-service btn btn-ripple">
                    <span>Estimation</span>
                </div>
            </a>
            <a href="{{route("site")}}#planifining">
                <div class="btn-service btn  ">
                    <span>Planification</span>
                </div>
            </a>
        </div>
    </div>
</div>
