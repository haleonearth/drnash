<?php
$title = "Welcome to The Refuge Pain Center";
$keywords = "Pain Management, Pain Relief, Pain, Magnolia Texas";
$description = "#";

$pg = 'home';
$cta1 = 'show';
$cta2 = 'show';
$cta3 = 'show';

require "includes/header.php";
?>

<div class="jumbotron jumbotron-fluid jumbo-intro">
  <div class="container">
    <h1 class="display-3">Lorem Ipsum</h1>
    <p class="lead">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur."</p>
  </div>
</div>



<!-- //////// BEGIN CTA -->
<div class="container-fluid cta">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12 text-center cta1-link">
      <a class="align-baseline" href="appointments.php">schedule your appointment now</a>
          <a href="appointments.php"><img class="btn-cta-arrow" src="images/btn-arrow.svg"></a>
    </div>
  </div>
</div> <!--/.container-->
</div> <!--/.container-fluid /.cta-->

<!-- ////// BEGIN JUMBOTRON 2-->
<div class="jumbotron jumbotron-fluid jumbo2">
  <div class="container">
    <h1 class="display-3 text-center">Claritas Est Etiam Processus</h1>
      <h4 class="text-center">Lorem ipsum dolor sit amet, consectetur  
  adipiscing elit sed do eiusmod.</h4>
      <div class="row justify-content-around">


      <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5"> 
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div> <!--/.cols-->

      <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5"> 
       <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
      </div> <!--/.cols-->
    </div> <!--/.row-->

    
<button type="button" class="btn btn-primary-cust d-block mx-auto mt-5">Learn More</button>

  </div> <!--/.container-->
</div>

<!--END JUMBOTRON 2 ////// -->



<!--////// BEGIN CARDS-->
<section class="container card-set">
  <div class="row">
    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
      <img class="icons-med d-block mx-auto" src="images/icon-test-tubes.svg" alt="">
      <h4 class="text-center">PAIN MANAGEMENT</h4>
      <p>Let NeuroInterventional Pain Management take care of your pain. We offer both medication management and interventional
        treatments.</p>
    </article>

    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
      <img class="icons-med d-block mx-auto" src="images/icon-stethoscope.svg" alt="">
      <h4 class="text-center">PAIN AND DEBILITATING MANAGEMENT</h4>
      <p>Our pain management physicians will work one-on-one with you to understand your individual pain, evaluating all factors.</p>
    </article>

    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
      <img class="icons-med d-block mx-auto" src="images/icon-pill.svg" alt="">
      <h4 class="text-center">PHARMACOLOGIC PAIN MANAGEMENT</h4>
      <p>Prescription or over-the-counter pharmacologic pain management. pharmacologic pain management for symptomatic relief
        and control .</p>
    </article>

    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
      <img class="icons-med d-block mx-auto" src="images/icon-heart.svg" alt="">
      <h4 class="text-center">INTERVENTIONAL PAIN MANAGEMENT</h4>
      <p>Find pain relief through interventional pain management: a multidisciplinary approach to treatment.</p>
    </article>

    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
      <img class="icons-med d-block mx-auto" src="images/icon-brain.svg" alt="">
      <h4 class="text-center">NEUROMODULATION</h4>
      <p>Neuromodulation for treating pain refers to the use of highly specialized technology that can alter the function of
        the human nervous system.</p>
    </article>

    <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
      <img class="icons-med d-block mx-auto" src="images/icon-kit.svg" alt="">
      <h4 class="text-center">MINIMALLY INVASIVE SURGERY</h4>
      <p>Minimally invasive pain procedures may prove effective treatments for your pain condition.</p>
    </article>
    
  </div> <!-- /.row -->
  </section>

  <!--END CARDS ////// -->





<section class="testimonials container-fluid gradient-overlay">
<div class="container">
    <div class="row">
    
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <img class="img-fluid" src="images/cross-heart.png" alt="">
        </div> <!--/.col-->

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <p class="quotation">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>
        
          <div class="attribution">
          <span class="name">Mary Smyth</span>
            <span class="title">Lorem Ipsum, Dolor, M.D. PMA</span>
          </div> <!-- /.attribution -->
          </div> <!--/.row-->
          </div> <!--/.col-->
</div> <!--/.container-->
</section>

<?php require "includes/footer.php"; ?>