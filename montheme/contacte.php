<?php
/**
 * Template Name: Page contacte
 * Template Post Type: page, post
 */
?>

<?php get_header() ?>

  <div class="container" style="margin-top: 50px">
    <h3>Nous contacter :</h3>
    <div class="contacte">
    <?php Ninja_Forms()->display(1) ?>

    </div>
    <div class="row mb-5">
      <div class="col-md-6">
        <div class="agence">
            <h3>Notre agence :</h3>
            <p >
              adressse : 25 Pl. du Général de Gaulle, 91860 Épinay-sous-Sénart<br><br>
              tel : 06 05 04 07 08
            </p>
        </div>
    </div>
    <div class="col-md-4 text-end">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.6122313182473!2d2.5130799157712658!3d48.693778020236955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60a0a25153e15%3A0xe8695b8457316a54!2sAuto-%C3%A9cole%20Mauboussin!5e0!3m2!1sfr!2sfr!4v1648561796213!5m2!1sfr!2sfr"  style="border:0;max-width: 400px;width: 100%; min-height: 300px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

<?php get_footer() ?>