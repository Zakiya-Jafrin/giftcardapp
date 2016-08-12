<?php
mysql_connect('DATABASE HOST','DATABASE NAME','DATABASE PASSWORD');
mysql_select_db('DATABASE NAME');

$sql = "SELECT * FROM cards ORDER BY `card_date`";
$res = mysql_query($sql) or die(mysql_error());
$result = array();

while ($row = mysql_fetch_array($res) )
            //$entries_timestamp = date('D M Y , h:i', $entries_row['timestamp']);
    array_push($result, array('time' => $row['card_date'],
                              'name'=> $row['card_booker_name'],
                              'card_number'=> $row['card_number']));
echo json_encode(array("result" => $result));



//json is a way of encoding array
?>
