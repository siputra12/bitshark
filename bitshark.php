<?php
function answer($url, $email){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://bitshark.info/wp-admin/admin-ajax.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "qsm_hidden_questions=&contact_field_0=$email&contact_field_1=$url&question2=BNB&question5=BTT&question6=LTC&question7=UNI&question9=TRON&question10=ZEC&question11=ZIL&question12=MATIC&question13=YFI&question14=XMR&question15=MIOTA&question16=LISK&question17=AXS&question18=AAVE&question19=AOA&question20=SXP&question21=XNO&question22=NPXS&question23=ZRX&question24=PPT&qmn_question_list=2Q5Q6Q7Q9Q10Q11Q12Q13Q14Q15Q16Q17Q18Q19Q20Q21Q22Q23Q24Q&total_questions=20&timer=60&timer_ms=60770&qmn_quiz_id=1&complete_quiz=confirmation&action=qmn_process_quiz&currentuserTime=".time()."&currentuserTimeZone=Asia%2fJakarta");
	$headers = array();
	$headers[] = 'Host: bitshark.info';
	$headers[] = 'Accept: */*';
	$headers[] = 'Content-Type: application/x-www-form-urlencoded';
	$headers[] = 'X-Requested-With: XMLHttpRequest';
	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';
	$headers[] = 'Origin: https://bitshark.info';
	$headers[] = 'Referer: https://bitshark.info/claim-reward/';
	$headers[] = 'Accept-Language: en-US,en;q=0.9';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}
echo "?Email	: ";
$e = trim(fgets(STDIN));
echo "?LinkTx	: ";
$l = trim(fgets(STDIN));
echo answer($l, $e);