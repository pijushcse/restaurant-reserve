<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Page</title>
    <meta name="generator" content="WYSIWYG Web Builder 12 Trial Version - http://www.wysiwygwebbuilder.com">
    <link href="bookingDetailsTab.css" rel="stylesheet">
    <link href="paymentMethod.css" rel="stylesheet">
    <script src="jquery-1.12.4.min.js"></script>
    <script src="wwb12.min.js"></script>
    <script> 

            function confirmBooking() {
                document.getElementById("paymentForm").submit;
            }

    </script>


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

    
?>
 <script>
        console.log( "<?php echo $checkInDate.' - '.$checkInDate; ?>");

        function bookingDetails() {
        alert ("Go back to booking details first.")
    }
        function paymentRequired() {
            alert ("Payment information is required to confirm a booking.")
         }
 </script>


<body>
 
<div id="wb_Form2" style="position:absolute;left:0px;top:181px;width:1226px;height:34px;z-index:6;">
                <form name="Form2" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form2">
                    <div id="wb_Text2" style="position:absolute;left:97px;top:6px;width:58px;height:20px;z-index:0;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;">Offers</span>
                    </div>
                    <div id="wb_Text3" style="position:absolute;left:178px;top:6px;width:61px;height:20px;z-index:1;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;">Resorts</span>
                    </div>
                    <div id="wb_Text4" style="position:absolute;left:261px;top:5px;width:105px;height:20px;z-index:2;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;"><a href="ContactUS.html">Contact Us</a></span>
                    </div>
                    <div id="wb_Text1" style="position:absolute;left:15px;top:6px;width:82px;height:20px;z-index:3;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;"><a href="index.php">Home</a></span>
                    </div>
                </form>
            </div>

         <form id="roomChoose" method="POST" action=".2bookingDetailsTab.php">  
         <div id="wb_TabMenu1" style="position:absolute;left:0px;top:231px;width:1224px;height:36px;z-index:5;overflow:hidden;">
                <ul id="TabMenu1">
                    <li>
                        <a style="background-color: palegoldenrod"  href="javascript:bookingDetails();">  Choose your Room </a>
                    </li>
                    <li>
                        <a style="background-color: palegoldenrod" onclick="document.getElementById('bookingDetails').submit();"> Enter Booking Details</a>
                    </li>
                    <li>
                        <a style="background-color: chartreuse"  href="#" > Enter Payment Method</a>
                    </li>
                    <li>
                        <a href="javascript:paymentRequired();"> Booking Confirmation </a>
                    </li>
                </ul>
            </div>

                       <input type="hidden" id="roomId" name="roomId" value="<?php echo $roomId; ?>" />
                       <input type="hidden" id="checkInDate" name="checkInDate" value="<?php echo $checkInDate; ?>" />
                       <input type="hidden" id="checkOutDate" name="checkOutDate" value="<?php echo $checkOutDate; ?>"  />
                       <input type="hidden" id="noOfRoom" name="noOfRoom" value="<?php echo $noOfRoom; ?>"  />
                       <input type="hidden" id="noOfAdults" name="noOfAdults" value="<?php echo $noOfAdults; ?>"  />
                       <input type="hidden" id="noOfKids" name="noOfKids"  value="<?php echo $noOfKids; ?>"  />
                       <input type="hidden" id="addressId" name="addressId"  value="<?php echo $addressId; ?>"  />
                       <input type="hidden" id="customerName" name="customerName"  value="<?php echo $customer_name; ?>"  />
                       <input type="hidden" id="customerEmail" name="customerName"  value="<?php echo $customer_email; ?>"  />
                       <input type="hidden" id="customer_phone" name="customerName"  value="<?php echo $customer_phone; ?>"  />

        </form>


            <div id="wb_Form2" style="position:absolute;left:0px;top:181px;width:1226px;height:34px;z-index:5;">
                <form name="Form2" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form2">
                    <div id="wb_Text2" style="position:absolute;left:97px;top:6px;width:58px;height:20px;z-index:0;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;">Offers</span>
                    </div>
                    <div id="wb_Text3" style="position:absolute;left:178px;top:6px;width:61px;height:20px;z-index:1;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;">Resorts</span>
                    </div>
                    <div id="wb_Text4" style="position:absolute;left:261px;top:5px;width:105px;height:20px;z-index:2;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;">Contact Us</span>
                    </div>
                    <div id="wb_Text1" style="position:absolute;left:15px;top:6px;width:82px;height:20px;z-index:3;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;">Home</span>
                    </div>
                </form>
            </div>
            <div id="wb_Text5" style="position:absolute;left:15px;top:303px;width:358px;height:20px;z-index:6;">
                <span style="color:#0000CD;font-family:Georgia;font-size:17px;">Please Enter Payment Details</span>
            </div>
            <div id="wb_Text6" style="position:absolute;left:15px;top:358px;width:235px;height:18px;z-index:7;">
                <span style="color:#191970;font-family:Georgia;font-size:16px;">Select Payment Method</span>
            </div>
            <select name="paymentType"  size="1" id="Editbox1" style="position:absolute;left:15px;top:380px;width:428px;height:28px;line-height:16px;z-index:8;"> 
                    <option> Visa </option>
                    <option> Master </option>
            </select>
            <div id="wb_Text7" style="position:absolute;left:15px;top:440px;width:272px;height:18px;z-index:9;">
                <span style="color:#191970;font-family:Georgia;font-size:16px;">Credit/Debit Card No.</span>
            </div>

<form id="paymentForm" method="POST" action="./4confirmation.php">

            <input type="text" id="cardNo" style="position:absolute;left:15px;top:460px;width:428px;height:20px;line-height:16px;z-index:10;"
                name="cardNo" value="" spellcheck="false">
            <input type="text" id="holderName" style="position:absolute;left:15px;top:549px;width:428px;height:20px;line-height:16px;z-index:11;"
                name="holderName" value="" spellcheck="false">
            <div id="wb_Text8" style="position:absolute;left:18px;top:525px;width:243px;height:18px;z-index:12;">
                <span style="color:#191970;font-family:Georgia;font-size:16px;">Card Holder's Name</span>
            </div>
            <div id="wb_Text9" style="position:absolute;left:18px;top:610px;width:175px;height:18px;z-index:13;">
                <span style="color:#191970;font-family:Georgia;font-size:16px;">Expiry Date</span>
            </div>
            <select name="month"  size="1" id="Combobox1" style="position:absolute;left:15px;top:638px;width:150px;height:28px;z-index:14;">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <div id="wb_Text10" style="position:absolute;left:170px;top:644px;width:18px;height:16px;z-index:15;">
                <span style="color:#000000;font-family:Arial;font-size:13px;">/</span>
            </div>
            <select name="year"  size="1" id="Editbox4" style="position:absolute;left:190px;top:638px;width:80px;height:28px;line-height:16px;z-index:16;"> 
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>
                
            <input type="submit" id="Button1" onclick="confirmBooking();return true;" name="" value="Book Room" style="position:absolute;left:248px;top:723px;width:205px;height:25px;z-index:17;">

                       <input type="hidden" id="roomId" name="roomId" value="<?php echo $roomId; ?>" />
                       <input type="hidden" id="checkInDate" name="checkInDate" value="<?php echo $checkInDate; ?>" />
                       <input type="hidden" id="checkOutDate" name="checkOutDate" value="<?php echo $checkOutDate; ?>"  />
                       <input type="hidden" id="noOfRoom" name="noOfRoom" value="<?php echo $noOfRoom; ?>"  />
                       <input type="hidden" id="noOfAdults" name="noOfAdults" value="<?php echo $noOfAdults; ?>"  />
                       <input type="hidden" id="noOfKids" name="noOfKids"  value="<?php echo $noOfKids; ?>"  />
                       <input type="hidden" id="addressId" name="addressId"  value="<?php echo $addressId; ?>"  />

                       <input type="hidden" id="customerName" name="customerName"  value="<?php echo $customer_name; ?>"  />
                       <input type="hidden" id="customerEmail" name="customerEmail"  value="<?php echo $customer_email; ?>"  />
                       <input type="hidden" id="customerPhone" name="customerPhone"  value="<?php echo $customer_phone; ?>"  />
                       <input type="hidden" id="country" name="country"  value="<?php echo $country; ?>"  />

        </form>
    </div>
    <marquee direction="left" scrolldelay="90" scrollamount="6" behavior="scroll" loop="0" style="position:absolute;left:0px;top:137px;width:1225px;height:38px;z-index:24;"
        id="Marquee1">
        <span style="color:#0000CD;font-family:Georgia;font-size:20px;">Welcome!!!</span>
    </marquee>
    <picture id="wb_Picture1" style="position:absolute;left:0px;top:0px;width:1227px;height:137px;z-index:25">
        <img src="images/images.jpg" id="Picture1" alt="" srcset="">
    </picture>
</body>

</html>
