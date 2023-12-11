<?php


if (isset($_GET['date'])) {
    $calendar = $_GET['date'];
} else {
    // Default to today's date if date parameter is not set
    echo  date("Error");
}

if (isset($_POST['submit'])) {

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
    <link href="assets/css/style_book.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
        <h1 class="text-center alert alert-danger" style="background:#2ecc71;border:none;color:#fff"> Book for Date: <?php echo date('m/d/Y', strtotime($date)) ;?></h1>
        <div class="row">
            <div class="col-md-12">
                <?php echo isset($message)?$message:'';?>
                <input type="hidden" id="selectedDateInput">
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for=""> FIRST NAME</label>
                        <input type="text" class="form-control" name="FIRSTNAME" required>
                        <input type="hidden" class="form-control" name="AUTONUM" value="<?php echo 'TRAC'.$a;?>"required>
                    </div>
                    <div class="form-group">
                        <label for=""> LAST NAME</label>
                        <input type="text" class="form-control" name="LASTNAME" required>
                    </div>
                    <div class="wrapper_calendar">   
                    <span class="icon-closed"><ion-icon name="close"></ion-icon> </span>  
                        <div class="form-boxed ">
                            <h1>Method of Payment</h1>
                            <div class="btn-wrapper">
                                <button type="button" class="btn btn-warning text-light btn-lg" id="yesButton">
                                    <a href="book.php" class="calendar_yes">Online Payment(Stripe)</a>
                                </button>
                                <button type="button" class="btn btn-warning text-light btn-lg">
                                    <a href="#" class="calendar_no">Cash Payment</a>
                                </button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""> AGE</label>
                        <input type="text" class="form-control" name="AGE" required>
                    </div>
                    <div class="form-group">
                        <label for=""> PHONE NUMBER</label>
                        <input type="text" class="form-control" name="PHONE" required>
                    </div>
                    <div class="form-group">
                        <label for=""> ADDRESS</label>
                        <input type="text" class="form-control" name="ADDRESS" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary" data-action="confirmation"> Submit </button>
                    <a href="b_index.php" class="btn btn-success">Back</a>
                </form>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/calendar_script.js"></script>
  </body>
</html>
