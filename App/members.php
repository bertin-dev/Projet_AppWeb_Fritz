<?php session_start(); ?>
<?php require 'Config/Config_Server.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<?php require 'head.php' ?>

<body>

<section id="intro" class="intro">

    <div class="intro-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-3"></div>
                <div class="col-lg-6">

                    <?php
                  if(!isset($_SESSION['ID_USER']) || !isset($_COOKIE['ID_USER'])){

                      if(isset($_GET['profil'])){

                      } else if($_GET['activity']){

                      } else{
                          ?>
                          <div class="form-wrapper">
                              <div class="wow fadeInRight animated" data-wow-duration="2s" data-wow-delay="0.2s"
                                   style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInRight;">
                                  <div class="panel panel-skin">
                                      <div class="panel-heading">
                                          <h3 class="panel-title"><span class="fa fa-sign-in"></span> SE CONNECTER <small>C'est
                                                  Facile !</small></h3>
                                          <center><img src="img/homme.png" class="img-circle" alt=""></center>
                                      </div>

                                      <div class="panel-body">
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <p><a href="members.php?profil=profil">Modifier Profil</a></p>
                                                  <p><a href="members.php?activity=activity">Modifier Options</a></p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                    <?php
                      }
                  } else{
                      header('Location: index.php');
                  }
                    ?>


                </div>
                <div class="col-lg-3"></div>


            </div>
        </div>
    </div>

</section>
<?php require('footer.php'); ?>
</body>
</html>