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
        <link rel ="stylesheet" type="text/css" href="public/css.css" />


   

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

        <div class="container-fluid">
            <div class="row justify-content-center">

                <button class="check-season-submit mt-5" type="button" name="createUser" value="Create User" data-toggle="modal" data-target="#ModalCreate"> Create User </button>
                <button class="check-season-submit mt-5" type="button" name="updateUser" value="Update User" data-toggle="modal" data-target="#ModalUpdate"> Update User </button>
                <button class="check-season-submit mt-5" type="button" name="deleteUser" value="Delete User" data-toggle="modal" data-target ="#ModalDelete">Delete User </button>
                
                <!-- Button trigger modal -->

                <!-- Modal  CREATE-->
                <div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content text-dark">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form method="post" action="<?php BASE_PATH."/adminPanel"?>">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="username">Name</label>
                      <input type="text" class="form-control" id="username" name="username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="form-group">
                   <label for="userlevel">User level</label>
                     <select class="form-control" id="userlevel" name="user_level">
                       <option>0</option>
                       <option>1</option>
                     </select>
                 </div>
                  
                   <button type="submit" name="createUserButton" class="btn btn-primary sign-in-submit">Create</button>
                    </form>
                   
                  </div>
                    </div>
                  </div>
                </div>

                <!-- MODAL UPDATE -->
                 <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content text-dark">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Update User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form method="post" action="<?php BASE_PATH."/adminPanel"?> ">
                      <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="user_id">Id</label>
                      <input type="text" class="form-control" id="user_id" name="user_id">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="userName">Name</label>
                      <input type="text" class="form-control" id="userName" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="emailupdate" name="email">
                  </div>
                  <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" class="form-control" id="password1" name="password">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="inputCity" name="city">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="team">Favorite Team</label>
                      <input type="text" class="form-control" id="team" name="team">
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="userlevel">User level</label>
                     <select class="form-control" id="userlevel1" name="user_level">
                       <option>0</option>
                       <option>1</option>
                     </select>
                 </div>
                   <button type="submit" name="updateUserButton" class="btn btn-primary sign-in-submit">Update</button>
                    </form>
                  </div>
                    </div>
                  </div>
                </div>

                <!-- MODAL DELETE -->
                <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content text-dark">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Delete User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" action="<?php BASE_PATH."/adminPanel"?>">
                      <form method="post" action="">
                      <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="user_id1">Id</label>
                      <input type="text" class="form-control" id="user_id1" name="user_id">
                    </div>
                  </div>
                  
                   <button type="submit" name="deleteUserButton" class="btn btn-primary sign-in-submit">Delete</button>
                    </form>
                  </div>
                    </div>
                  </div>
                </div>

            </div>
        </div>
       

    </body>
           
</html>

