<?php

require_once('tcpdf/tcpdf_import.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetFont('cid0jp','', 18); 
$pdf->AddPage();

/*---------------- Your Code Start -----------------*/
$name = $_POST['name'];
$tel = $_POST['tel'];
$howtosite = $_POST['howtosite'];
$rating = $_POST['rating'];
$email = $_POST['email'];
$time = $_POST['time'];
$place = $_POST['place'];
$html = <<<EOF
<link rel = "stylesheet" type = "text/css" href = "s1043339_HW2.css">
<p style="text-align: center;">感謝您的惠顧</p>
<table border = "1" ;"width : 100px ; height : 100px;" >
<tr>
	<td color="blue">姓名</td>
	<td style="text-align: center;">$name</td>
</tr>
<tr>
	<td color="blue">電話</td>
	<td style="text-align: center;">$tel</td>
</tr>
<tr>
	<td color="blue">餐點</td>
	<td style="text-align: center;">$howtosite</td>
</tr>
<tr>
	<td color="blue">加價購</td>
	<td style="text-align: center;">$rating</td>
</tr>
<tr>
	<td color="blue">信箱</td>
	<td style="text-align: center;">$email</td>
</tr>
<tr>
	<td color="blue">取餐時間</td>
	<td style="text-align: center;">$time</td>
	
</tr>
<tr>
	<td color="blue">地址</td>
	<td style="text-align: center;">$place</td>
</tr>
<tr>
	<td color="red" colspan="2" style="text-align: center;">請確認以上資料是否有誤</td>
</tr>
</table>
<p></p>
<p></p>
<p>下方QR CODE將連到訂餐系統</p>
<img src="qr code.png">
<p>下方QR CODE將連到訂單</p>
<img src="QR CODE .png">

EOF;
/*---------------- Your Code End -------------------*/

$pdf->writeHTML($html);
$pdf->lastPage();
$pdf->Output('order.pdf', 'I');
