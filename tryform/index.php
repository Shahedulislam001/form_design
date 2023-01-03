<?php
$name = $age = $email = $password = $website = " ";
$errname = $erremail= $errpass = $emptyage = $errweb = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST['name'])){
            $errname = "<div class='alert alert-warning' role='alert'>You can't miss this!</div>";
        }
        else{
            
            $name = validate($_POST['name']);
        }
        if(empty($_POST['name'])){
            $emptyage = "<div class='alert alert-warning' role='alert'>You can't miss this!</div>";
        }
        else{
            $age =validate($_POST['age']);
        }
        if(empty($_POST['name'])){
            $erremail = "<div class='alert alert-warning' role='alert'>You can't miss this!</div>";
        }
        else{
            $email = validate($_POST['email']);
        }
        if(empty($_POST['name'])){
            $errpass = "<div class='alert alert-warning' role='alert'>You can't miss this!</div>";
        }
        else{
            $password = validate($_POST['password']);
        }
        if(empty($_POST['name'])){
            $errweb = "<div class='alert alert-warning' role='alert'>You can't miss this!</div>";
        }
        else{
            $website = validate($_POST['website']);
        }
    }

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <h3 class="text-center p-4 bg-dark text-white">First form</h3>
    <div class="container">
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Enter your name</label>
    <input type="name" class="form-control" name = "name">
    <?php echo $errname ?>
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Enter your age</label>
    <input type="number" class="form-control" name = "age">
    <?php echo $emptyage ?>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Enter your email</label>
    <input type="email" class="form-control" name ="email">
    <?php echo $erremail ?>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Enter your password</label>
    <input type="password" class="form-control" name="password">
    <?php echo $errpass ?>
  </div>
  <div class="mb-3">
    <label for="website" class="form-label">Enter your websitel link</label>
    <input type="url" class="form-control" name="website">
    <?php echo $errweb ?>
  </div>
  <button type="submit" class="btn btn-primary m-4">Submit</button>
  <button type="Reset" class="btn btn-warning m-4">Reset</button>
</form>
</div>

<div class="container">
<ul class="list-group">
  <li class="list-group-item">Name is :<?php echo $name ?></li>
  <li class="list-group-item">Age:<?php echo $age ?></li>
  <li class="list-group-item">Email:<?php echo $email ?></li>
  <li class="list-group-item">Password:<?php echo $password ?></li>
  <li class="list-group-item">Website link:<?php echo $website ?></li>
</ul>
</div>



</div>

    
</body>
</html>