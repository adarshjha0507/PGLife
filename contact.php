<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PG Life - CONTACT</title>
  <?php require('inc/links.php'); ?> 
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Ratione possimus debitis sequi <br> quidem dicta. 
    Corrupti dolorum iusto sit eveniet nemo?
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117925.33439927742!2d88.34735275!3d22.53542735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1712866255015!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h5>Address</h5>
        <a href="https://maps.app.goo.gl/9P5eRuXpVDFkAiJs5" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i>PGLife, Kolkata, West Bengal
        </a>
        <h5 class="mt-4">Call us</h5>
        <a href="tel: +919430326334" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+919430326334
        </a>
        <br>
        <a href="tel: +919430326334" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+919430326334
        </a>
        <h5 class="mt-4">E-mail</h5>
        <a href="mailto: jhaadarsh0243@gmail.com" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-envelope-fill"></i>jhaadarsh0243@gmail.com
        </a>
        <h5 class="mt-4">Follow us</h5>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
        </a>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
        </a>
        <a href="#" class="d-inline-block text-dark fs-5">
            <i class="bi bi-instagram me-1"></i>
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded shadow p-4">
       <form>
        <h5>Send a message</h5>
        <div class="mt-3">
          <label class="form-label" style="font-weight: 500;">Name</label>
          <input type="text" class="form-control shadow-none">
        </div>
        <div class="mt-3">
          <label class="form-label" style="font-weight: 500;">E-mail</label>
          <input type="email" class="form-control shadow-none">
        </div>
        <div class="mt-3">
          <label class="form-label" style="font-weight: 500;">Subject</label>
          <input type="text" class="form-control shadow-none">
        </div>
        <div class="mt-3">
          <label class="form-label" style="font-weight: 500;">Message</label>
          <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
        </div>
        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
       </form>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>


</body>
</html>