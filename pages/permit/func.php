<?php
if(isset($_POST['btn_permit_send'])){
	

    $txt_name = $_POST['txt_name'];
    $txt_busname = $_POST['txt_busname'];
    $txt_busadd = $_POST['txt_busadd'];
    $txt_type = $_POST['txt_type'];
    $txt_ornum = $_POST['txt_ornum'];
    $s_amount = $_POST['txt_amount'];
    $date = date('Y-m-d H:i:s');

    $con = mysqli_connect('localhost','root','','db_barangay') or die(mysqli_error());
    date_default_timezone_set("Asia/Manila");

    $sql = mysqli_query($con,"INSERT INTO `tblpermit`(fullname,businessName,businessAddress,typeOfBusiness,orNo,samount,dateRecorded,recordedBy,status) VALUES ('$txt_name','$txt_busname','$txt_busadd','$txt_type','$txt_ornum','$s_amount','$date'))";

    if(mysqli_query($sql)){
        echo '<script>alert("Request Sent Successfully!")</script>';
    }
    else{
        echo '<script>alert("An Error Occured!")</script>';
    }
    

    mysqli_close($con);
}
?>