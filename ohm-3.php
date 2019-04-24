<?php
	include('user_header.php');
?>
<link rel="stylesheet" href="css/ed.css">
<script src="css/jquery.min.js"></script>
<script src="css/bootstrap.min.js"></script> 

<div class="main">
	<div class="container">
		<div class="jumbotron">
		<h3 class="display-4">โครงการต้องการบริจาค :</h3>
			<div class="img-border">
           		<a><img src="images/page1-img2.jpg"/></a>
            </div>
			<hr class="my-4">
			<p class="lead">มูลนิธิกระจกเงา</p>
			<p>ยอดเงินที่ต้องการบริจาค  </p>
			<p>300 บาท</p> 
		</div>

		<div class="jumbotron">
			<h3 class="display-4">เลือกวิธีชำระเงิน :</h3>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					บัตร Credit/Debit
				</label>
			</div>

			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					Rabbit Line Pay
				</label>
			</div>
			<a class="btn btn-default" href="ohm-4.php" role="button">Select</a>
			
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php
	include('user_footer.php');
?>