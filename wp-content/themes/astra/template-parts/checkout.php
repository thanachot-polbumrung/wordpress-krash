<?php
/**
 * Template Name: checkout
 */

get_header(); ?>

<form class="row g-3">
    <h3>Contact Information</h3>
<div class="col-md-6" style="display:flex,flex-direction:column">
  <div style="width:45%" class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input placeholder="E-mail" type="email" class="form-control" id="inputEmail4">
  </div>
  <div style="width:45%" class="col-md-6">
    <label for="inputPassword4" class="form-label">Phone Number</label>
    <input placeholder="Phone Number" type="text" class="form-control" id="inputPassword4">
  </div>
</div> 
  <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      Keep me up to date on news and exclusive offers
</br>
      </label>
      <label class="form-check-label" for="gridCheck">
      By signing up via text, you agree to receive recurring automated marketing messages, including cart abandonment, at the phone number provided. Consent is not a condition of purchase. Reply STOP to unsubscribe. Reply HELP for help. Message frequency varies. Msg & data rates may apply. View our Privacy Policy and Terms of Service.

      </label>
      <p></p>
    </div>
    <h3>Shipping Address</h3>
    <div class="col-12">
    <label for="inputAddress" class="form-label">First Name</label>
    <input type="text" class="form-control" id="inputFname" placeholder="First Name">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="inputLast" placeholder="Last Name">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Address Line1">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Address Line2">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputCountry" class="form-select">
      <option selected>Country</option>
      <option>Thai</option>
      <option>USA</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>State</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
   
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Continue to shipping</button>
  </div>
</form>
<?php get_footer(); ?>