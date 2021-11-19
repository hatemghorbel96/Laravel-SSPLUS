<head> <title>Login</title></head>

@extends('layouts.interfacegen')
@section('content')


<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(ptoo/images/PROFIL.jpg);">
    <h2 class="tit6 t-center">
        se connecter
    </h2>
</section>



<!-- Contact form -->
<section class="section-contact bg1-pattern p-t-90 p-b-113">


    <div class="container">
        <h3 class="tit7 t-center p-b-62 p-t-105">
            se connecter
        </h3>
        <form class="wrap-form-reservation size22 m-l-r-auto" method="post" action="/userloginaction">
            @csrf
            <center>
                <div class="col-md-5">
                    <!-- Email -->
                    <span class="txt9">
						<h6>Login</h6>
						</span>

                    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="username" placeholder="Login"   required>

                    </div>

                </div>

                <div class="col-md-5">
                    <!-- Mot de Passe -->
                    <span class="txt9">
							<h6>Mot de Passe</h6>
						</span>

                    <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input id="password" class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="pass" placeholder="Mot de Passe" required>

                    </div>



                </div>

                <div class="wrap-btn-booking flex-c-m m-t-13">
                    <!-- Button3 -->
                    <button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4" >
                        Login
                    </button>
                </div>
            </center>
        </form>

        <div class="row p-t-135">
            <div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <img src="ptoo/images/icons/map-icon.png" alt="IMG-ICON">
                    </div>

                    <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Location
							</span>

                        <span class="txt23 size38">
							Route de Gabes km 3 - 3042 - Tunisie
							</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <img src="ptoo/images/icons/phone-icon.png" alt="IMG-ICON">
                    </div>


                    <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Contacter nous
							</span>

                        <span class="txt23 size38">
							(+216) 74 453 027
							</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <img src="ptoo/images/icons/clock-icon.png" alt="IMG-ICON">
                    </div>


                    <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Horaires d'ouverture
							</span>

                        <span class="txt23 size38">
								08:30  – 18:00  <br/>Lundi-Samedi
							</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection