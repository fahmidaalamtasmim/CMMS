<?php
$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("tasmi6393d06803c94");
$store_passwd=urlencode("tasmi6393d06803c94@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;
  
	
  
    //echo $status." ".$tran_date." ".$tran_id." ".$card_type;
  ////////////////////////////////////////////
	//echo 'DONE';
	//header('location:register_form.php');
	 ////////////////////////////////////////////

} else {

	echo "Failed to connect with SSLCOMMERZ";
}

?>
 <!-- =========HTML CODE starts================ -->

 <!DOCTYPE html>
<html lang="en">

<head>
   <!-- font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600&family=Montserrat+Subrayada:wght@400;700&family=Secular+One&family=Source+Code+Pro:wght@700&family=Zen+Dots&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style3.css">
    <title>PAY TO JOIN THE CLUB</title>
</head>

<body>
    <div class="pay">
       <h1><?=$status."<br>".$tran_date."<br>".$tran_id."<br>".$card_type?></h1>
       <!-- <a href="register_form.php?" class="pay_btn">DONE!!</a> -->

	  

        <a class="pay_btn" href="register_form.php?tran_id='.<?=$tran_id?>">DONE</a>


    </div>
   
    
   
   
</body>

</html>

 <!-- =========HTML CODE ends================ -->