<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Page</title>
    <meta name="generator" content="WYSIWYG Web Builder 12 Trial Version - http://www.wysiwygwebbuilder.com">
    <link href="Untitled9.css" rel="stylesheet">
    <link href="4confirmation.css" rel="stylesheet">
</head>

<?php

$checkInDate = $_POST["checkInDate"];  
$checkOutDate = $_POST["checkOutDate"];  
$noOfRoom = $_POST["noOfRoom"];  
$noOfAdults = $_POST["noOfAdults"];  
$noOfKids = $_POST["noOfKids"];  
$addressId = $_POST["addressId"];
$roomId  = $_POST["roomId"];
$customer_name = $_POST["customerName"];
$customer_email = $_POST["customerEmail"];
$customer_phone = $_POST["customerPhone"];
$country = $_POST["country"];

$cardNo =  $_POST["cardNo"];
$holderName =  $_POST["holderName"];
$month =  $_POST["month"];
$year =  $_POST["year"];

$servername = "localhost";
$username   = "root";
$password   = "";
$dbName     = "reservation";

$booking_date = '';
$sqlget = '';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
$sql = '';
$rowid = 0;

$bookingId =   strtoupper( bin2hex(openssl_random_pseudo_bytes(2))); // 20 chars


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    $sql    = "INSERT INTO reservation_confirmation (customer_name ,customer_phone, customer_email , check_in_date, check_out_date, room_fk, booking_id) 
          VALUES('".$customer_name."', '".$customer_phone."', '".$customer_email."',date('".$checkInDate."'), date('".$checkOutDate."'),".$roomId.", '".$bookingId."' ) "  ;   
    $result = $conn->query($sql);
     $rowid = $conn -> insert_id;   


       $sqlget =  "SELECT booking_date  FROM  reservation_confirmation WHERE id=".$rowid;
        $result = $conn->query($sqlget );    
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                $booking_date = $row["booking_date"];
            }}
        

    }
?>

<script>
  console.log("<?php echo $sqlget;  ?>");

 </script>

<body>
    <a href="http://www.wysiwygwebbuilder.com" target="_blank">
        <img src="images/builtwithwwb12.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;border-width:0;z-index:250">
    </a>
    <div id="wb_Form1" style="position:absolute;left:2px;top:1px;width:1265px;height:824px;z-index:4;">
        <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
            <div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:1199px;height:140px;z-index:0;">
                <img src="images/images.jpg" id="Image1" alt="">
            </div>
            <div id="wb_TabMenu1" style="position:absolute;left:3px;top:132px;width:1194px;height:40px;z-index:1;overflow:hidden;">
                <ul id="TabMenu1">
                    <li>
                        <a href="#">1. Choose Your Room</a>
                    </li>
                    <li>
                        <a href="#">2. Enter Booking Details </a>
                    </li>
                    <li>
                        <a href="#">3. Enter Payment Method</a>
                    </li>
                    <li>
                        <a href="#">4. Booking Confirmation</a>
                    </li>
                </ul>
            </div>

             

            <div style="position:absolute;left:131px;top:257px;width:793px;height:96px;z-index:2;"> 
                  <p> <strong>  Booking Id: </strong> <?php echo $bookingId;  ?> </p> </br>
                  <p> <strong>  Customer Name: </strong> <?php echo $customer_name;  ?> </p> </br>
                  <p> <strong>  Customer Phone: </strong> <?php echo $customer_phone;  ?> </p> </br>
                  <p> <strong>  Customer Email: </strong> <?php echo $customer_email;  ?> </p> </br>
                  <p> <strong>  Arrival Date: </strong> <?php echo $checkInDate;  ?> </p> </br>
                  <p> <strong>  Departure Date: </strong> <?php echo $checkOutDate;  ?> </p> </br>
                  <p> <strong>  Booking date time: </strong>  <?php  echo $booking_date;  ?> </p> </br>

            </div>
        </form>
    </div>
</body>

</html>


<?php
  mysqli_close($conn);

?>