<?php 
// connect code stukje includen hier 
include 'inc/conn.php';
include 'inc/form.php';
include 'inc/select.php';
include 'inc/db_close.php';


?>


<?php include_once 'parts/header.php';  ?>

<body>
 
<!-- jumbotron   -->
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
      <img src="images/win.png" width="250px" alt="Win">
      <h1 class="display-6 fw-normal">WIN MET ZAKARIA </h1>
      <p class="lead fw-normal">De actie is geldig tot :.</p> 
      <!-- Display the countdown timer in an element   -->
      <h3  id="countdown"></h3>
      <p class="lead fw-normal">Maak kans op PHONE 12 PRO MAX.</p>
    </div>  
    <!-- List   -->
      <div class="container">
        <h3>Om te winnen volg de volgende instructies : </h3>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Follow me on instagram</li>
          <li class="list-group-item">Like de laatste 10 foto's</li>
          <li class="list-group-item">Voer je gegevens in en wacht op de deadline</li>
          <li class="list-group-item">Er wordt een man random gekozen als de winaar </li>
          <li class="list-group-item">De winaar krijgt een IPHONE 12 PRO MAX.</li>
        </ul>
      </div>
  </div>


<div class="container">


<div class="position-relative text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<!-- inlog form-->
<form id="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">  <!-- in plaats van index.php -->
<h3>Voer je gegevens in </h3>
  <div class="form-group">
    <label for="firstName">Voornaam</label>
    <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ?>" >
    <div class="form-text  text-muted error"> <?php echo $errors['firstNameError']  ?></div>
  </div>

  <div class="form-group">
    <label for="lastName">Achternaam</label>
    <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ?>" >
    <div class="form-text text-muted error"> <?php echo $errors['lastNameError']  ?></div>
  </div>

  <div class="form-group">
    <label for="email">Email adres</label>
    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>" >
    <div class="form-text text-muted error "><?php echo $errors['emailError']  ?><div>
  </div>
 
  <button type="submit" name="submit" class="btn btn-success">Bevestigen </button>
</form>
</div>  
  </div>
</div>

<div class="loader-container">
    <div id="loader">
      <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>


<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
  <button type="button" id="winner" class="btn btn-primary">
  De winnaar kiezen
  </button>
</div>

<!-- confetti -->
<canvas id="confetti" width="1" height="1"></canvas>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal">De Winnaar is :</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h6 class="display-1 "><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']); ?></h6>
        <p class="card-text"><?php echo htmlspecialchars($user['email']);  ?></p>
        <?php endforeach; ?>

      </div>

    </div>
  </div>
</div>




<!--  <div id="cards" class="row mb-5 pb-5">   -->  <!-- grid system row -->
       <!-- hier hebben wij gecombineert met html en php met de manier die je hier ziet, we gebruiken (:) om dat te mogen doen -->
    
    <!--  de firstName aanroepen van de database als een text door de function : htmlspecialchars(),
    zodat als de gebruiker een script heeft ingevoert naar de database,
    by het aanroepen werkt de script niet, dus de functie maakt de script defect.--> 
    <!--
      <div class="col-sm-6">
        <div class="card my-2 bg-light">
          <div class="card-body">
            <h5 class="card-title">  </h5> 
            <p> < ?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']); ?></p>
            <p class="card-text">< ?php echo htmlspecialchars($user['email']);  ?></p>
          </div>
        </div>
      </div>
      
                         <!-- hier gebruiken wij endforeach in plaats van sluiten met cyrly bracket ({}) -->  
  
<!-- </div> -->
   

<?php include_once 'parts/footer.php';  ?>


