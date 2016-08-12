<?php
$time=date("Y-m-d h:i:sa");

mysql_connect('DATABASE HOST','DATABASE NAME','DATABASE PASSWORD');
mysql_select_db('DATABASE NAME');

if (mysql_connect('DATABASE HOST','DATABASE NAME','DATABASE PASSWORD') && mysql_select_db('DATABASE NAME')){

    if (isset($_POST['card_location'], $_POST['card_name'], $_POST['card_type'],
    $_POST['card_amount'],$_POST['card_notes'],$_POST['card_booker_name'])){

    $card_location = mysql_real_escape_string(htmlentities($_POST['card_location']));
    $card_name = mysql_real_escape_string(htmlentities($_POST['card_name']));
    $card_type = mysql_real_escape_string(htmlentities($_POST['card_type']));
    $card_amount = mysql_real_escape_string(htmlentities($_POST['card_amount']));
    $card_notes = mysql_real_escape_string(htmlentities($_POST['card_notes']));
    $card_booker_name = mysql_real_escape_string(htmlentities($_POST['card_booker_name']));
    $charge_amount=50;
        $credit_amount=$card_amount-$charge_amount;
          //$card_number=4000;
// for ($card_numberx = 1000; $card_numberx <= 1110; $card_numberx++) {
      // $card_number="COS" . $card_numberx;
    $insert="INSERT INTO `cards` VALUES('$time','$card_location','$card_type','','$card_amount','$card_booker_name','$charge_amount','$credit_amount','$card_name','$card_notes','')";

                if ($insert = mysql_query($insert)){
                //overriding $insert with mysql->$insert
                //echo ':) Thank you! for inserting card '.$card_number.'';
                }else{
                $errors[]='Sorry Guys! :( something went wrong. Can you insert it again?';
                }
// }
      }
}else{
echo 'sorry guys! :( could not connect to database at this time';
}

?>
