<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Page</title>
    <meta name="generator" content="WYSIWYG Web Builder 12 Trial Version - http://www.wysiwygwebbuilder.com">
    <link href="index.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <script src="jquery-1.12.4.min.js"></script>
    <script src="wwb12.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#Editbox4").change(function () {
                ShowObject('', 1);
            });
            $("#Editbox4").trigger('change');
        });

        function searchRoom() {
            // document.getElementById("Editbox6").value = 1; 
            document.getElementById("mainForm").submit;
        }


    </script>
</head>

<?php

   $secureId = $_GET["secureid"];
  $customerName = '';

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbName     = "reservation";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {

  $userNameQ = "Select CONCAT(firstname, ' ', lastname) as name FROM user_information.user_details WHERE secure_login_id='".$secureId."' ";
  $sqResult = $conn -> query($userNameQ);
  
  if ($sqResult->num_rows > 0) {
    while ($row = $sqResult->fetch_assoc()) {
        $customerName = $row["name"];
    }}


        $sql    = "SELECT id, type FROM room_type";
        $result = $conn->query($sql);

        $locationSql    = "SELECT id, address FROM  location";
        $locationResult = $conn->query($locationSql);
    }

?>

<script> 
    console.log("Customer name: ");
    console.log("<?php echo $secureId; ?>");

</script>


<body>
    <a href="http://www.wysiwygwebbuilder.com" target="_blank">
        <img src="images/builtwithwwb12.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;border-width:0;z-index:250">
    </a>
    <div id="wb_Form1" style="position:absolute;left:156px;top:1px;width:1227px;height:742px;z-index:8;">
        <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
        </form>
    </div>

<?php 
    if(strlen($secureId) == 0) {
?>

    <div id="wb_Form2" style="position:absolute;left:0px;top:1px;width:1383px;height:63px;z-index:9;">
        <form name="Form2" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form2">
            <div id="wb_Text6" style="position:absolute;left:1268px;top:14px;width:94px;height:23px;z-index:0;">
                <span style="color:#00008B;font-family:Georgia;font-size:19px;">
                    <a href="signUp.php">Sign Up</a>
                </span>
            </div>
            <div id="wb_Text5" style="position:absolute;left:1128px;top:14px;width:96px;height:23px;z-index:1;">
                <span style="color:#00008B;font-family:Georgia;font-size:19px;">
                    <a href="signIn_up.php">Sign In</a>
                </span>
            </div>
        </form>
    </div>
<?php 
    } else {

?>
    <div id="wb_Form2" style="position:absolute;left:0px;top:1px;width:1383px;height:63px;z-index:9;">
            <div id="wb_Text6" style="position:absolute;left:1268px;top:14px;width:94px;height:23px;z-index:0;">
                <span style="color:#00008B;font-family:Georgia;font-size:19px;">
                    <b> Welcome- <?php echo $customerName; ?></b>
                </span>
            </div>

    </div>
    <?php } ?>


    <div id="wb_Form3" style="position:absolute;left:0px;top:64px;width:1383px;height:51px;z-index:10;">
        <form name="Form3" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form3">
            <div id="wb_Text1" style="position:absolute;left:127px;top:15px;width:73px;height:18px;z-index:2;">
                <span style="color:#00008B;font-family:Georgia;font-size:16px;">
                    <a href="index.php">Home</a>
                </span>
            </div>
            <div id="wb_Text2" style="position:absolute;left:212px;top:16px;width:78px;height:18px;z-index:3;">
                <span style="color:#00008B;font-family:Georgia;font-size:16px;">Offers</span>
            </div>
            <div id="wb_Text3" style="position:absolute;left:299px;top:16px;width:63px;height:18px;z-index:4;">
                <span style="color:#00008B;font-family:Georgia;font-size:16px;">Resorts</span>
            </div>
            <div id="wb_Text4" style="position:absolute;left:394px;top:16px;width:89px;height:18px;z-index:5;">
                <span style="color:#00008B;font-family:Georgia;font-size:16px;">
                    <a href="ContactUs.html">Contact Us</a>
                </span>
            </div>
            <div id="wb_GoMenu1" style="position:absolute;left:1144px;top:12px;width:203px;height:27px;z-index:6;">
                <form id="GoMenu1">
                    <select id="GoMenu1_select" name="GoMenu1">
                        <option class="_self" value="#" selected>Select Hotel</option>
                        <option class="_self" value="./1ChooseRoom.html">Hotel Hilton</option>
                        <option class="_self" value="./1ChooseRoom.html">Hotel Harbour</option>
                    </select>
                    <input id="GoMenu1_input" type="button" value="Go" onclick="OnGoMenuFormLink(this.form.GoMenu1)">
                </form>
            </div>
        </form>
    </div>
    <div id="wb_Image1" style="position:absolute;left:0px;top:115px;width:1383px;height:691px;z-index:11;">
        <img src="images/download.png" id="Image1" alt="">
    </div>
    <marquee direction="right" scrolldelay="90" scrollamount="6" behavior="slide" loop="0" style="position:absolute;left:3px;top:131px;width:436px;height:42px;z-index:12;"
        id="Marquee1" onmouseover="this.stop()" onmouseout="this.start()">
        <span style="color:#0000FF;font-family:Georgia;font-size:17px;">Search Hotel</span>
    </marquee>
    <div id="wb_Text7" style="position:absolute;left:7px;top:195px;width:255px;height:23px;z-index:13;">
        <span style="color:#FFFFFF;font-family:Georgia;font-size:19px;">Where are you going</span>
    </div>
    <div id="wb_Text8" style="position:absolute;left:5px;top:274px;width:88px;height:23px;z-index:14;">
        <span style="color:#FFFFFF;font-family:Georgia;font-size:19px;">Check In</span>
    </div>

<form id="mainForm" method="POST" action="./1ChooseRoom.php" >

    <input type="date" id="Editbox2" style="position:absolute;left:6px;top:297px;width:120px;height:16px;line-height:16px;z-index:15;"
        name="checkInDate" value="" spellcheck="false">
    <div id="wb_Text9" style="position:absolute;left:151px;top:272px;width:121px;height:23px;z-index:16;">
        <span style="color:#FFFFFF;font-family:Georgia;font-size:19px;">Check Out</span>
    </div>
    <input type="date" id="Editbox3" style="position:absolute;left:151px;top:297px;width:156px;height:16px;line-height:16px;z-index:17;"
        name="checkOutDate" value="" spellcheck="false">
    <div id="wb_Text10" style="position:absolute;left:6px;top:350px;width:87px;height:23px;z-index:18;">
        <span style="color:#FFFFFF;font-family:Georgia;font-size:19px;">Rooms</span>
    </div>
    <input type="number" id="Editbox4" style="position:absolute;left:7px;top:373px;width:119px;height:16px;line-height:16px;z-index:19;"
        name="noOfRoom" value="1" min="1" max="20" spellcheck="false">
    <input type="number" id="Editbox5" style="position:absolute;left:11px;top:447px;width:110px;height:16px;line-height:16px;z-index:20;"
        name="noOfAdults" value="1" min="1" max="20" spellcheck="false">
    <input type="number" id="Editbox6" style="position:absolute;left:154px;top:447px;width:157px;height:16px;line-height:16px;z-index:21;"
        name="noOfKids" value="1" min="0" max="20" spellcheck="false">
    <div id="wb_Text11" style="position:absolute;left:11px;top:424px;width:60px;height:23px;z-index:22;">
        <span style="color:#FFFFFF;font-family:Georgia;font-size:19px;">Adult</span>
    </div>
    <div id="wb_Text12" style="position:absolute;left:151px;top:420px;width:87px;height:23px;z-index:23;">
        <span style="color:#FFFFFF;font-family:Georgia;font-size:19px;">Children</span>
    </div>
    <input type="submit" id="Button1" onclick="searchRoom() ;return true;" name="" value="Submit" style="position:absolute;left:19px;top:575px;width:117px;height:25px;z-index:24;">
    <input type="reset" id="Button2" onclick="ShowObject('', 0);return false;" name="" value="Reset" style="position:absolute;left:151px;top:575px;width:96px;height:25px;z-index:25;">
    <div id="wb_Text13" style="position:absolute;left:151px;top:350px;width:120px;height:23px;z-index:26;">
        <span style="color:#FFFFFF;font-family:Georgia;font-size:19px;">Room Type</span>
    </div>
    <select name="roomType" size="1" id="roomType" style="position:absolute;left:151px;top:373px;width:166px;height:28px;z-index:27;">
        <?php 
             if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option  value="'.$row["id"].' " >'.$row["type"].'</option>';
                 }
            }
        ?>


    </select>
    <select name="address" size="1" id="Combobox1" style="position:absolute;left:8px;top:218px;width:310px;height:28px;z-index:28;">
        <?php 
             if ($locationResult->num_rows > 0) {
                while ($row = $locationResult->fetch_assoc()) {
                     echo '<option  value="'.$row["id"].' " >'.$row["address"].'</option>';
                }
            }        
        ?>
    </select>

</form> 

</body>

</html>


<?php
  mysqli_close($conn);

?>