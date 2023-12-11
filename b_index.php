<?php
error_reporting(0);
function build_calendar($month, $year) {
    $mysqli = new mysqli('localhost', 'root', '', 'bookingsysystem');
    $stmt = $mysqli->prepare("SELECT * FROM bookings_record WHERE MONTH(DATE) = ? AND YEAR(DATE) = ?");
    $stmt->bind_param('ss', $month, $year);
    $bookings = array();
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $bookings[] = $row['DATE'];
            }

            $stmt->close();
        }
    }



    $daysOfWeek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
    $numberDays = date('t', $firstDayOfMonth);
    $dateComponents = getdate($firstDayOfMonth);
    $monthName = $dateComponents['month'];
    $dayOfWeek = ($dateComponents['wday'] + 6) % 7 + 1;

    $datetoday = date('Y-m-d');

    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    $prevMonth = date('m', mktime(0, 0, 0, $month - 1, 1, $year));
    $prevYear = date('Y', mktime(0, 0, 0, $month - 1, 1, $year));

    $nextMonth = date('m', mktime(0, 0, 0, $month + 1, 1, $year));
    $nextYear = date('Y', mktime(0, 0, 0, $month + 1, 1, $year));

    $calendar .= "<a class='btn btn-xs btn-success' href='?month=$prevMonth&year=$prevYear'>Previous Month</a> ";
    $calendar .= " <a class='btn btn-xs btn-danger' href='?month=$month&year=$year'>Current Month</a> ";
    $calendar .= "<a class='btn btn-xs btn-primary' href='?month=$nextMonth&year=$nextYear'>Next Month</a></center><br>";

    $calendar .= "<tr>";
    foreach ($daysOfWeek as $day) {
        $calendar .= "<th  class='header'>$day</th>";
    }

    $currentDay = 1;
    $calendar .= "</tr><tr>";

    if ($dayOfWeek > 0) {
        for ($k = 0; $k < $dayOfWeek; $k++) {
            $calendar .= "<td  class='empty'></td>";
        }
    }

    $month = str_pad($month, 2, "0", STR_PAD_LEFT);

    while ($currentDay <= $numberDays) {

        if ($dayOfWeek == 7) {

            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }

        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";

        $dayname = strtolower(date('l', strtotime($date)));
        $eventNum = 0;
        $today = $date == date('Y-m-d') ? "today" : "";
        if ($date < date('Y-m-d')) {
            $calendar .= "<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs' disabled>N/A</button>";
        } elseif (in_array($date, $bookings)) {
            $calendar .= "<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'> <span class='glyphicon glyphicon-lock'></span> Already Booked</button>";
        } else {
            
            $calendar .= "<td class='$today'><h4>$currentDay</h4> <a href='book.php?date=' class='btn btn-success btn-xs' data-action='confirmation'> <span class='glyphicon glyphicon-ok'></span> Book Now</a>";

        }
    
       
        //book.php?date=" . $date . "

        $calendar .= "</td>";
        $currentDay++;
        $dayOfWeek++;
    }

    if ($dayOfWeek != 7) {

        $remainingDays = 7 - $dayOfWeek;
        for ($l = 0; $l < $remainingDays; $l++) {
            $calendar .= "<td class='empty'></td>";
        }
    }

    $calendar .= "</tr>";
    $calendar .= "</table>";
    echo $calendar;
}

?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Online booking system</title>
    <link href="assets/css/style_calendar.css" rel="stylesheet">
</head>

<body>
    <div class="container alert alert-default" style="background:#fff">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" style="background:#2ecc71;border:none;color:#fff">
                    <h1>Online Booking System</h1>
                </div>
                <div class="wrapper_calendar">   
                <span class="icon-closed"><ion-icon name="close"></ion-icon> </span>  
                    <div class="form-boxed ">
                        <h1> ARE YOU SURE?</h1>
                        <div class="btn-wrapper">
                        <button type="button" class="btn btn-warning btn-lg white-button" id="yesButton">
                            <a href="book.php?$calendar" class="calendar_yes">YES</a>
                        </button>          
                            <button type="button" class="btn btn-warning text-light btn-lg white-button">
                                <a href="#" class="calendar_no ">NO</a>
                            </button>
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" id="selectedDateInput" name="selectedDateInput" value="">
                <?php
                $dateComponents = getdate();
                if (isset($_GET['month']) && isset($_GET['year'])) {
                    $month = $_GET['month'];
                    $year = $_GET['year'];
                } else {
                    $month = $dateComponents['mon'];
                    $year = $dateComponents['year'];
                }
                echo build_calendar($month, $year);
                ?>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/calendar_script.js"></script>
</body>

</html>
