<!DOCTYPE html>
<html lang="en">

  <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
       <!-- JQUERY +JS-->
       <script src="/public/jquery-3.5.1.js"></script>
      <script src="/public/jquery-ui.min.js"></script> 
        <link rel="stylesheet" href="/public/jquery-ui.min.css">
        <script src="/public/js.js"></script>

   <!-- BOOTSTRAP + CSS-->
        <script src="/public/bootstrap.js"></script>
        <link rel="stylesheet" href="/public/bootstrap.min.css"/>
        <link rel ="stylesheet" type="text/css" href="/public/css.css" />

    <!-- Fonts ----- -->
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
        
    <!-- POPPER -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- AJAX        -->
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


     <title>
       <?php 
       echo $driverInfo[0]["driver"];
       ?>
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
        <a class="justify-content-center pr-5  align-middle " href="<?= BASE_PATH?>myProfile/<?=$_SESSION["user_id"]?>"><?=$_SESSION["name"]?></a>
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

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col driver-num text-center">
                    <h1><?=$driverInfo[0]["driver"]?></h1>
                </div>
                <div class="driver-num col text-center ">
                <h1>Number : 
                <?= $driverInfo[0]["number"]?>
                </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col driver-num text-center">
                    <h2>Nationality : <?=$driverInfo[0]["nationality"]?></h2>
                </div>
                <div class="driver-num col text-center ">
                <h2>Age : 
                <?= $driverInfo[0]["age"]?>
                </h2>
                </div>
            </div>
        </div>
    </section>
  </body>
</html>
