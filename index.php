<?php
  /*$firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];
  $age = $_GET['age'];
  echo htmlspecialchars($_GET['firstname']);
  echo htmlspecialchars($_GET['lastname']);
  echo htmlspecialchars($_GET['age']);
  */
  $firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
  $lastname = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_STRING);
  $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);

   if(!empty($firstname) && !empty($lastname)){
    echo 'Hello, my name is ' . $firstname . ' ' . $lastname . '.<br>';
   }
   else{
       echo "Missing data";
   }
   if(!empty($age)){
    echo 'I am ' . $age . ' years old and... ';
    if($age >= 18){
        echo 'I am old enough to vote in the United States.<br>';
    }
    else{
        echo 'I am not old enough to vote in the United States.<br>';
    }
    echo 'I have been alive for ' . ($age * 365), ' days.<br>';
    }
  echo 'Today is ' . date('Y/m/d') . '<br>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <form method="GET" action="index.php">
        <div>
            <label>First Name</label><br>
            <input type="text" name="firstname">
        </div>
        <div>
            <label>Last Name</label><br>
            <input type="text" name="lastname">
        </div>
        <div>
            <label>Age</label><br>
            <input type="text" name="age">
        </div>
        <input type="submit" value="Submit">

    </form>
    </div>
</body>
</html>