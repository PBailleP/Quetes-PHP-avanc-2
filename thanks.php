<?php

$errors=[];

function test_input($datas) {{
  $datas = trim($datas);
  $datas = stripslashes($datas);
  $datas = htmlspecialchars($datas);
  return $datas;
}}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user_name"])) {
    $errors[] ="Lastname is required ";
  } else {
    $name = test_input($_POST["user_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $errors[] = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["user_prenom"])) {
    $errors[] = "Firstname is required";
  } else {
    $prenom = test_input($_POST["user_prenom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
      $errors[] = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["user_email"])) {
    $errors[] = "Email is required";
  } else {
    $email = test_input($_POST["user_email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Invalid email format";
    }
  }
  if (empty($_POST["user_tel"])) {
    $errors[] = "Telephone number is required";
  } else {
    $tel = test_input($_POST["user_tel"]);
    // check if tel is well formed
    if (!preg_match("/.0[1-9]{1}(([0-9]{2}){4})|((\s[0-9]{2}){4})|((-[0-9]{2}){4})$/",$tel)) {
      $errors[] = "Invalid phone number";
    }
  }
  if (empty($_POST["sujet"])) {
    $errors[] = "Sujet is required";
  } else {
    $sujet = test_input($_POST["sujet"]);
  }

  if (empty($_POST["user_message"])) {
    $errors[] = "Message is required";
  } else {
    $message = test_input($_POST["user_message"]);
  }
}

if (empty($errors)) {
    echo "Merci ".$name." ".$prenom." de nous avoir contacté à propos de ".$sujet.". ".
    "Un de nos conseiller vous contactera soit à l’adresse ".$email." ou par téléphone 
    au ".$tel." dans les plus brefs délais pour traiter votre demande : " 
    .$message;
} else {
    foreach($errors as $type => $errMess){
        echo $errMess;
    }
}
