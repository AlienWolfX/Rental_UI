<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];
}

if(isset($_POST['submit'])){

        $fname =$_POST['FIRSTNAME'];
        $mname =$_POST['MIDDLENAME'];
        $lname =$_POST['LASTNAME'];
        $phone =$_POST['PHONE'];
        $email =$_POST['EMAIL'];
		$AUTONUM=$_POST['AUTONUM'];
        $conn = new mysqli('localhost','root','','bookingsysystem');

        $sql ="INSERT INTO bookings_record(FIRSTNAME,MIDDLENAME,LASTNAME,PHONE,EMAIL,DATE,AUTONUM)VALUES('$fname','$mname','$lname','$phone','$email','$date','$AUTONUM')";
        
        if($conn->query($sql)){
            $message = "<div class='alert alert-success'>Booking Successfull</div>";
        }else{
            $message = "<div class='alert alert-danger'>Booking was not Successfull</div>";
        }
}

?>
<?php 
$a = mt_rand(100000,999999); 

for ($i = 0; $i<6; $i++) 
{
   $a .= mt_rand(0,9);
}?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Booking System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>
    <div class="container">
        <h1 class="text-center alert alert-danger" style="background:#2ecc71;border:none;color:#fff"> Book for Date: <?php echo date('m/d/Y', strtotime($date)) ;?></h1>
        <div class="row">
            <div class="col-md-12">
                <?php echo isset($message)?$message:'';?>
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for=""> FIRST NAME</label>
                        <input type="text" class="form-control" name="FIRSTNAME" required>
                        <input type="hidden" class="form-control" name="AUTONUM" value="<?php echo 'TRAC'.$a;?>"required>
                    </div>
                    <div class="form-group">
                        <label for=""> MIDDLE NAME</label>
                        <input type="text" class="form-control" name="MIDDLENAME" required>
                    </div>
                    <div class="form-group">
                        <label for=""> LAST NAME</label>
                        <input type="text" class="form-control" name="LASTNAME" required>
                    </div>
                    <div class="form-group">
                        <label for=""> PHONE NUMBER</label>
                        <input type="text" class="form-control" name="PHONE" required>
                    </div>
                    <div class="form-group">
                        <label for=""> EMAIL</label>
                        <input type="email" class="form-control" name="EMAIL" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary"> Submit </button>
                    <a href="b_index.php" class="btn btn-success">Back</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
