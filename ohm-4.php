<?php
	include('user_header.php');
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/ed.css">
<script src="css/jquery.min.js"></script>
<script src="css/bootstrap.min.js"></script> 

<div class="main">
<div class="container">
    

<form id="checkout-form" class="checkout-form" action="checkout2.php" method="POST">
  
    <div class="form-group">
    <label>Card Number</label>
    <input type="text" data-name="cardNumber" class="form-control" value="4242424242424242" />
    </div>

    <div class="form-group">
    <label>Name on card</label>
    <input type="text" data-name="nameOnCard" class="form-control" Value="JOHN MAC" />
    </div>

    <div class="form-group">
    <label>Expiry date</label>
    <div class="row">
      <div class="col-xs-6">
        <select class="form-control" data-name="expiryMonth">
          <option value="">MM</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="col-xs-6">
        <select class="form-control" data-name="expiryYear">
          <option value="">YYYY</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
          <option value="2025">2025</option>
        </select>
      </div>
    </div>
    </div>

    <div class="form-group">
    <label>Security code</label>
    <input type="text" data-name="securityCode" class="form-control" value="123" />
    </div>

  <div class="form-group">
  <a class="btn btn-default" href="ohm-5.php" role="button">Payment</a>
  </div>

</form>
</div>



<script src="https://cdn.omise.co/omise.js"></script>

</div>
</div>


<?php
	include('user_footer.php');
?>