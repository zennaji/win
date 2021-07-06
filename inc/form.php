<?php 
// variables maken die geconnected zijn met form 
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
// array makem om de error message hier op te slaan.
$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

// als je op submit button kilckt dan stuur de gegevens naar de database
if(isset($_POST['submit'])){

    include 'inc/conn.php';
    $sql = "INSERT INTO users(firstName, lastName, email ) 
             VALUES ('$firstName', '$lastName', '$email')";
    // checken als de gegevens vakjes niet leeg is dan ga verder aan de hand van else
    if(empty($firstName) || ctype_space($firstName)){   // ctype_space($firstName betekent als er een spatie is
        $errors['firstNameError'] = 'Voer je voornaam in !!';    // error message opslaan in de array
       // last name validation
    }if(empty($lastName) || ctype_space($lastName)){
        $errors['lastNameError'] = 'Voer je achternaam in !!';
      // emailvalidation

    }if(empty($email)){
        $errors['emailError'] = 'Voer je email adres in !!';
       
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){  // al gemaakte function in php om de syntax van de email te controleren
        $errors['emailError'] = 'Voer een geldige email adres in !!';
    }

    // validation : er zijn geen errors
    if(!array_filter($errors)){                   // betekent als de array geen errors heeft 
        // Security !!  hier zeggen we tegen php in plaats van dat 
    //je de data als script gaat sturen, stuur ze als een string om de hackers voor te komen
    // DUS GA VLIGEN HAHAHAHA
    // Dit moet uit hoefd geleerd zijn !!.
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName =  mysqli_real_escape_string($conn, $_POST['lastName']);
    $email =     mysqli_real_escape_string($conn, $_POST['email']);


    $sql = "INSERT INTO users(firstName, lastName, email ) 
             VALUES ('$firstName', '$lastName', '$email')";

     //de variable sql connecten met de connect naar de databae(conn variable), en in een if stoppen om te checken
     if(mysqli_query($conn, $sql)){
        // dit betekent page refreshen
            header('Location: ' . $_SERVER['PHP_SELF']);    // hier ook in plaats van index.php
        }else{
            echo 'error: ' . mysqli_error($conn);
        }

    }
    
    
    
    
    
   
}



?>