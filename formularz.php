<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
     $imie = $_POST['imie'];
     $nazwisko = $_POST['nazwisko'];
     $email = $_POST['email'];
     $temat = $_POST['temat'];
     $tresc = $_POST['tresc'];
  
       if(empty($imie) || empty($nazwisko) || empty($email) || empty($temat) || empty($tresc)){
        echo "Wszystkie pola są wymagane!";
        exit;
    }

     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     echo "Niepoprawny E-mail!";
     exit;
   }
  
    $imie = htmlspecialchars($imie);
    $nazwisko = htmlspecialchars($nazwisko);
    $email = htmlspecialchars($email);
    $temat = htmlspecialchars($temat);
    $tresc = htmlspecialchars($tresc);

   $dane = "$imie | $nazwisko | $email | $temat | $tresc\n";
   
   file_put_contents("dane.txt", $dane, FILE_APPEND);

   header("Location:index.html");
   exit();
  }
?>