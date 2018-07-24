<?php
$msg_error= "";

// control form
if(!empty($_SERVER['REQUEST_METHOD']=='POST')){

	if(empty($_POST['make']) || strlen($_POST['make']) <= 2){
		$msg_error .= " Make must be higher than 2 caracters";
	}
	if(empty($_POST['model']) || strlen($_POST['model']) <= 4){
		$msg_error .= "Model must be higher than 4 caracters";
	}
	if(empty($_POST['year']) || strlen($_POST['year']) <= 2){
		$msg_error .= " Year must be higher than 2 caracters";
	}
	if(empty($_POST['color']) || in_array($_POST['color'],['blue', 'black', 'grey'])){
		$msg_error .= "Please select a valid color.";
	}
	if(!empty($_POST)){
		echo "Success!!";
	}else{
	http_response_code(400);
	echo "error..";
	}
}// if empty form


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Exrcice 3 </title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
   </head>
   <body>
     <h1>Exercice 3 - Let's tidy up ! </h1>
     <br><br>
     <div class="alert alert-warning" role="alert">
       <?= $msg_error ?>
     </div>
     <main class="container">
       <form action="#" method="post">
         <div class="form-group">
           <label for="make"> Make ? </label>
           <input type="text" class="form-control" name="make" value="">
         </div>
         <div class="form-group">
           <label for="model">Model</label>
           <input type="text" class="form-control" name="model" value="">
         </div>
         <div class="form-group">
           <label for="year">Year</label>
           <input type="text" class="form-control" name="year" value="">
         </div>
         <div class="form-group">
           <label for="color"> Color ?</label>
           <select class="form-control"  name="color">
             <option value="blue">blue</option>
             <option value="black">black</option>
             <option value="grey">grey</option>
           </select>
         </div>
         <input type="submit" name="submit"  class="btn btn-info btn-lg btn-block" value="Submit">
       </form>
     </main>



   </body>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
 </html>
