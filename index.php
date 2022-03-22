<?php
include 'header.php';
?>




<!-- page-header -->
<div class="page-header2" >
    <div class="container" >
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-caption">
                    <h1 class="page-title">SOREAU BASTIEN</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
<!-- news -->
<div class="card-section" style="height: 50vh">
    <div class="container">
        <div class="card-block bg-white mb30" style="box-shadow: 0 0 12px #8d8f90;">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- section-title -->
                    <div class="section-title mb-0">
                        <h2>Bonjour, je m'appelle SOREAU Bastien</h2>
                        <p style="color: #8d8f90;" >Je suis développeur en deuxième années de BTS SIO au lycée chevrolliers à ANGERS. </p>
                    </div>
                    <!-- /.section-title -->
                </div>
            </div>
        </div>
    </div>

    <div class="ensemble">
        <div class="gauche">
            <div class="slider">
                <img src="img/Photo_Profil.png" alt="SOREAU Bastien" class="img__slider active" />
                <img src="img/Photo_Profil2.jpeg" alt="SOREAU Bastien" class="img__slider" />
                <img src="img/Photo_Profil3.jpeg" alt="SOREAU Bastien" class="img__slider" />
                <div class="suivant">
                    <i class="fas fa-chevron-circle-right"></i>
                </div>
                <div class="precedent">
                    <i class="fas fa-chevron-circle-left"></i>
                </div>
            </div>
            <script src="java/js.js"></script>
        </div>
        <div class="droite">
            <div class="contenu_droite" style="box-shadow: 8px 8px 50px red;" >
                <div class="col-lg-3">
                    <a href="/">
                        <img src="img/logo.png" alt="SOREAU Bastien LOGO" class="img_logo" />
                    </a>
                </div>

                <nav class="col-lg-9">
                    <ul class="nav-list">
                        <li class="list"><a href="/">Accueil</a> </li>
                        <li class="list"><a href="profil.php">Profil</a> </li>
                        <li class="list"><a href="contact.php">Contact</a> </li>
                    </ul>
                </nav>


            </div>
        </div>
    </div>


</div>
<br><br><br>
<?php
    include 'footer.php';
?>