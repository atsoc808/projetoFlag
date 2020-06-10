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
      Drivers
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
  

  <div class="div-check-season row d-flex justify-content-center">
      <label class="label-season" for="season">Choose a season:</label>
    
       <form action="">

        <select class="select-season" id="season" name ="season">
         <?php  
           foreach($dropdownYear as $dropdown)
             echo'<option value="'.$dropdown["year"].'" >'.$dropdown["year"].'</option>'
         ?>
   
           <!-- Ver como é a melhor forma de fazer submit do valor da dropdown -->
          <input class="check-season-submit"type="submit" name="submit" value="Check Season"> 

        </select>
       </form>
  </div>

  <div class="row-chosen-driver row align-items-center ">

    <div class="container">
      <div class="row">
        <div class="chosen-driver-left col">
          <p> Piloto 1:
          </p> 
          <p class="chosen-driver-left-text"></p>            
        </div>

        <div class="chosen-driver-right col">
          <p> Piloto 2:
          </p> 
          <p class="chosen-driver-right-text"></p> 
        </div>

      </div>
    </div>

  </div>

  <form method ="POST" action="<?php BASE_PATH ?>compare">

   <div class="toggle-container-compare container mt-5">
    <div class="row ">
      <div class="col text-center">
      <input type="hidden" id= "idLeft" name="idLeft" value="">
      <input type="hidden" id="idRight"name="idRight" value="">
          <button class="compare-submit" type="submit" name="submit-compare" > 
            Compare 
          </button>
     </div>
    </div>
  </div>
  
  </form>

  </div>

   <!-- Para load automático: criar um foreach para cada piloto. A pesquisa por season vai ter de permitir guardar o primeiro piloto nos "escolhidos" no session? para poder 
   haver comparações de pilotos em épocas diferentes.  -->

   
     <div class="h-95 row align-items-center mt-5">
       <div class="container">
       
         <!-- POSSIVEL SOLUÃÇÃO:
         https://stackoverflow.com/questions/40561301/loop-row-in-bootstrap-every-3-columns -->

                          <!-- Load no bootstrap com possível ajuste de quantidade de colunas no layout -->
             <?php 
             $numOfCols =2;
             $rowCount =0;
             
               foreach($driver as $piloto){
                

                   if($rowCount % $numOfCols == 0 ){
                   ?>
               
                <div class="row-col-drivers row">

                <?php
                 }
                $rowCount++;
                ?>
                    <div class="driver-name col">
                        <p data-id="<?php echo $piloto["driverId"]?>"> <?php echo $piloto["driver"] ?>
                        </p>
                    </div> 
                   
               
                <?php
                        
                  if($rowCount % $numOfCols==0){
                    ?>
                    </div>
                    <?php
                  }
                      
                    }
                ?>

       </div>
     </div>
    
     </body>
           
</html>