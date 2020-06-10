<?php

?>
<!DOCTYPE html>

<html lang="en">

  <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

       <!-- JQUERY +JS-->
      <script src="public/jquery-3.5.1.js"></script>
      <script src="public/jquery-ui.min.js"></script> 
        <link rel="stylesheet" href="public/jquery-ui.min.css">
        <script src="public/js.js"></script>

   <!-- BOOTSTRAP + CSS-->
        <script src="public/bootstrap.js"></script>
        <link rel="stylesheet" href="public/bootstrap.min.css"/>
        <link rel ="stylesheet"type="text/css" href="public/css.css" />


   

    <!-- Fonts----- -->
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
        
    <!-- POPPER -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- AJAX        -->
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



     <title>
       Comparison
     </title>
    
  </head>

  <body>
      
  <!-- NAV BAR -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-3">
  <!-- Brand/logo -->
    <a class="navbar-brand" href="<?= BASE_PATH?>">F1 Comparison</a>
  <div class="ml-auto">
  
    <?php
    if(isset($_SESSION["user_id"])){
    ?>

    <ul class="navbar-nav">
      <li class="align-middle pt-2">
      <?php if($_SESSION["user_level"] == USER_LEVEL_ADMIN){ ?>
        <a class="justify-content-center pr-5  align-middle " href="<?= BASE_PATH?>adminPanel"><?=$_SESSION["name"]?></a>

      <?php 
      }else{ ?>
        <a class="justify-content-center pr-5  align-middle " href="<?= BASE_PATH?>myProfile/<?=$_SESSION["user_id"]?>"><?=$_SESSION["name"]?></a>

      <?php
      }
      ?>
      </li>

      <li>
        <button type="button" class="btn check-season-submit ml-auto">
          <a href="<?=BASE_PATH?>logout"> LOGOUT</a> 
        </button>
       </li>

    </ul>
  </div>
</nav> 

<!-- Modal -->

      <?php
        }
        else{
            require("modal.php");
      ?>

      <button type="button" class="btn check-season-submit ml-auto" data-toggle="modal" data-target="#exampleModal">
        Log in / Sign Up
      </button>
    </div>
  </nav> 

<?php
    }
?>
    <div class="row-chosen-driver row align-items-center ">
        <div class="container">
          <div class="row"> 
            <div class="chosen-driver-left col">
           
                <p><a class="anchor-compare" href="<?=BASE_PATH?>driverProfile/<?= $driverLeft[0]["driverId"] ?>/<?=$driverLeft[0]["driver"]?>"> <?= $driverLeft[0]["driver"]?></a>
                </p>

            </div>  
            <div class="chosen-driver-right col">
              <p> <a class="anchor-compare" href="<?=BASE_PATH?>driverProfile/<?= $driverRight[0]["driverId"]?>/<?=$driverRight[0]["driver"]?>"> <?= $driverRight[0]["driver"]?></a>
              </p> 
            </div>  
         </div>
        </div>
    </div>

    <!-- AVERAGE GRID START -->
        <section class="container">
            <div class="stat-title text-center">Average Grid Start </div>
                <div class="row">
                    <div class="col stat-left text-center">
                        <p>
                            <?= $avgGridStartLeft[0]["avgStart"]?>
                        </p>
                    </div>
                    <div class="col stat-right text-center">
                        <p> <?= $avgGridStartRight[0]["avgStart"]?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- AVERAGE FINISH -->
        <section class="container">
            <div class="stat-title text-center">Average Finish </div>
                <div class="row">
                    <div class="col stat-left text-center">
                        <p>
                            <?= $avgFinishLeft[0]["avgFinish"]?>
                        </p>
                    </div>
                    <div class="col stat-right text-center">
                        <p> <?= $avgFinishRight[0]["avgFinish"]?></p>
                    </div>
                </div>
            </div>
        </section>

         <!-- POLE POSITIONS -->
         <section class="container">
            <div class="stat-title text-center">POLE POSITIONS </div>
                <div class="row">
                    <div class="col stat-left text-center">
                        <p>
                            <?= $polePositionsLeft[0]["polePositions"]?>
                        </p>
                    </div>
                    <div class="col stat-right text-center">
                        <p> <?= $polePositionsRight[0]["polePositions"]?></p>
                    </div>
                </div>
            </div>
        </section>

         <!-- PODIUMS -->
         <section class="container">
            <div class="stat-title text-center">PODIUMS </div>
                <div class="row">
                    <div class="col stat-left text-center">
                        <p>
                            <?= $podiumsLeft[0]["podiums"]?>
                        </p>
                    </div>
                    <div class="col stat-right text-center">
                        <p> <?= $podiumsRight[0]["podiums"]?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- DNF -->
        <section class="container">
            <div class="stat-title text-center">DNF </div>
                <div class="row">
                    <div class="col stat-left text-center">
                        <p>
                            <?= $dnfLeft[0]["dnf"]?>
                        </p>
                    </div>
                    <div class="col stat-right text-center">
                        <p> <?= $dnfRight[0]["dnf"]?></p>
                    </div>
                </div>
            </div>
        </section>


    </body>

  </html>
