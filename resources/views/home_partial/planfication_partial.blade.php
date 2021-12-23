<section class="calculate-shipping" id="planifining">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h3 class="section-title"><span></span>PLANIFICATION ENLEVEMENT </h3>

                <form method="post" action="{{route('plan.add')}}">
                    @csrf
                    <div class="form-planification">
                        <span class="big-circle-fron"></span>
                        <div class="box">
                            <h4> Expéditeur</h4>
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 col-xl-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                            <input type="text"  name="name_exp"
                                                   id="name" placeholder="" required/>
                                            <label for="name">Nom Expéditeur *</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12" >
                                            <div class="form-check">
                                                <input type="checkbox" id="societe_exp" name="societe_exp">
                                                <label id="societe_exp">Je suis un professionnel</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                            <select id="pays_exp" name="pays_exp" required>
                                                <option value="france">France</option>
                                            </select>
                                            <label for="pays_exp">Pays Origine</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                            <input type="text"  name="ville_exp" id="ville_exp" required/>
                                            <label for="ville_exp">Code Postal *</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                            <input type="text"  name="adresse_exp"
                                                   id="adresse_exp" placeholder="" required/>
                                            <label for="adresse_exp">Adresse Expéditeur *</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                            <input type="email"  name="email_exp"
                                                   id="email_exp" placeholder="" />
                                            <label for="email_exp">Email Expéditeur </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                            <input type="tel"  name="phone_exp"
                                                   id="phone_exp"  required/>
                                            <span id="error-msg" class="hide"></span>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                            <input  name="date_enlevement" class="datepicker"
                                                    id="date_enlevement" placeholder="" required/>
                                            <label for="date_enlevement">Date Enlevement dd/mm/yyyy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-check">
                                                <input type="checkbox" id="decharge" name="decharge" required>
                                                <label>Confirmer votre planning</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box bg_bleu">


                            <h4> Destinataire</h4>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <span class="circle two"></span>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                            <input type="text" name="name_dest"
                                                   id="name_dest" placeholder="Nom Destinataire *" required/>
                                            <label for="name_dest">Nom Destinataire *</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-check">
                                                <input type="checkbox" id="societe_dest" name="societe_dest">
                                                <label id="societe_dest">Destinataire est un professionnel</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 effet-input">
                                            <select  id="pays_dest" name="pays_dest"  required>
                                                <option></option>
                                                <option value="senegal">Sénégal (DAKAR)</option>
                                                <option value="mali">Mali (BAMAKO)</option>
                                                <option value="ci">Cote D'Ivoire (ABIDJAN)</option>
                                            </select>
                                            <label for="pays_dest">Pays Destination</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                            <input type="email" name="email_dest"
                                                   id="email_dest" placeholder=""/>
                                            <label for="email_dest">Email Destinataire </label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 effet-input">
                                            <input type="tel"  name="phone_dest"
                                                   id="phone_dest"  required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_form">
                                <button class="btn btn-contact" id="planification">Planification</button>
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
