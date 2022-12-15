<?php  
  $path = $_SERVER["PHP_SELF"] ;
  $realPath = substr($path, 0, strpos($path, "index"));

?>
<div id="WelcomePage" class="wlcm h-100">
  <nav class="navbar">
    <div class="container-fluid">
      <ul class="d-flex list-unstyled">
        <li><a href="" class="navbar-brand text-secondary">Youcode Doc</a></li>
        <li><a href="" class="navbar-brand text-white">| Rendez vous en ligne</a></li>
      </ul>
      <ul class="d-flex list-unstyled">
        <li><a href="<?= $realPath ?>?&action=signIn" class="navbar-brand text-secondary border border-2">Sign In</a></li>
        <li> <a href="<?= $realPath ?>?action=signUp" class="navbar-brand text-secondary border border-2">Sign Up</a></li>
      </ul>
    </div>
  </nav>
  <div id="hero" class="text-white text-center d-flex align-items-center justify-content-center">
    <div class="">
      <h2 class="pb-3">Éviter les problèmes et les retards.</h2>
      <p class="text-normal">Comment est la santé aujourd'hui, on dirait qu'elle n'est pas bonne ! <br>
        Ne vous inquiétez pas. Trouvez votre médecin en ligne Réservez comme vous le souhaitez avec Youcode Doc. <br>
        Nous vous offrons un service gratuit de canalisation de médecin, prenez votre rendez-vous </p>
      <button id="appointementBtn" type="button" class="btn p-2 mt-2 fw-bold">Make Appointment</button>
    </div>
  </div>
  <a href="" class="text-white d-flex justify-content-center">YOUCODE DOC.</a>
</div>