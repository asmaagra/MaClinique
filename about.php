<!-- Masthead -->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                <h1 class="text-uppercase text-white font-weight-bold">À propos</h1>
                <hr class="divider my-4" />
            </div>
        </div>
    </div>
</header>

<!-- Section principale -->
<section class="page-section">
    <div class="container">
        <p class=" text-center fs-6 text-black font-weight-bold  " style="line-height: 1.5 !important;">
        
            Bienvenue sur MaClinique, une plateforme en ligne qui facilite la réservation de rendez-vous médicaux. 
            Notre objectif est de rendre l’accès aux soins de santé plus simple en permettant aux utilisateurs 
            de trouver et réserver des consultations avec différents médecins de leur région en quelques clics.
        </p>
    </div>
</section>

<div class="row justify-content-center">
    <div class="col-md-4 text-center mb-3">
        <button id="btn1" class="btn btn-primary btn-lg btn-block">Notre Engagement</button>
        <p id="para1" class="text-center fs-4" style="display: none;">À MaClinique, nous nous engageons à offrir une expérience transparente et pratique pour nos utilisateurs. Notre objectif principal est de simplifier le processus de prise de rendez-vous, vous permettant ainsi de gérer vos consultations médicales en toute tranquillité, où que vous soyez.</p>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-4 text-center mb-3">
        <button id="btn2" class="btn btn-primary btn-lg btn-block">Notre Vision</button>
        <p id="para2" class="text-center fs-4" style="display: none;">Chez MaClinique, nous croyons fermement en l’importance d’une santé accessible pour tous. Nous visons à créer un environnement où la réservation de rendez-vous médicaux est à la fois pratique et transparente, permettant ainsi à nos utilisateurs de prendre en main leur bien-être sans tracas.</p>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-4 text-center mb-3">
        <button id="btn3" class="btn btn-primary btn-lg btn-block">Comment fonctionne MaClinique?</button>
        <p id="para3" class="text-center fs-4" style="display: none;">Notre plateforme vous donne un accès rapide et facile à une liste exhaustive de professionnels de la santé, chacun spécialisé dans divers domaines médicaux. Grâce à une interface conviviale, vous pouvez parcourir les profils détaillés des médecins, consulter leurs horaires de disponibilité, et sélectionner un créneau qui correspond à vos besoins.</p>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#btn1').click(function () {
            $('#para1').toggle();
            $('#para2, #para3').hide(); // Cacher les autres paragraphes si besoin
        });

        $('#btn2').click(function () {
            $('#para2').toggle();
            $('#para1, #para3').hide(); // Cacher les autres paragraphes si besoin
        });

        $('#btn3').click(function () {
            $('#para3').toggle();
            $('#para1, #para2').hide(); // Cacher les autres paragraphes si besoin
        });
    });
</script>
