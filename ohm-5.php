<?php
	include('user_header.php');
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/ed.css">
<script src="css/jquery.min.js"></script>
<script src="css/bootstrap.min.js"></script> 

<div class="main">
<div class="container">
    

    <div class="jumbotron">
      <h3 class="display-4">Status Payment: </h3>
      <img src="images/checked.png" alt="100x100" class="img-circle" style="width: 10%;">
			<p class="lead">Successful</p>
			<hr class="my-4">
      <p>ทำการพิมพ์ใบเสร็จ</p> 
      <a class="btn btn-default" href="ohm-5.php" role="button">Print : PDF</a>
      <a class="btn btn-default" href="" data-toggle="modal" data-target="#view_donor
        <?php 
          echo $fetch['donor_id']
        ?>">
        <h5>View More Info</h5>
      </a>
    </div>
    
    

</div>
</div>










<?php
	include('user_footer.php');
?>