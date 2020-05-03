<?php
    $id = 1; 
    if(isset($_GET["id"]))
        $id = $_GET["id"];
    
    $errorMessege = "";
    switch($id)
    {
        case 1:
            $errorMessege = "404 - Page not found";
            break;
        case 2:
            $errorMessege = "Username or password is not exists";
            break;
        case 3:
            $errorMessege = "User name is existed";
            break;
        case 4:
            $errorMessege = "Cannot create new account. Please, try again later!";
            break;
        case 5:
            $errorMessege = "Cannot create new Post. Please, try again later!";
            break;
        case 6:
            $errorMessege = "Cannot create new Comment. Please, try again later!";
            break;
        default:
            $errorMessege = "404 - Page not found";
    }
?>
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $errorMessege ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?=$errorMessege?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>