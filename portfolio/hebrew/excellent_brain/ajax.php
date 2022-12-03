<?php
	session_start();
	
		header('Content-Type: text/html; charset=utf8');

		$leadType = 2;
		
		if(!isset($_POST["AllowedMail"])){
			$_POST["AllowedMail"] = 2;
		}else{
			$_POST["AllowedMail"] = 0;
		}
		
		$to = "chaisorya@gmail.com";
		
		function validateEmail($email){
			return (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))?true:false;
		}

		function validate_mobile($mobile){
    		return preg_match('/^[0-9]{10}+$/', $mobile);
		}

		
		function sendMail($to,$subject,$values,$CC = array("")){
			$headers = "From: leads@excellent-brain.co.il". "\r\n";
			$emailFrom = $values["email"];
			$divur = ($values['divur'])?"כן":"לא";
			if(!validateEmail($emailFrom))
				$headers .= "Reply-To: no-replay@excellent-brain.co.il" . "\r\n";
			else
				$headers .= "Reply-To: ". $emailFrom . "\r\n";
				
			$headers .= "CC: ".implode(",",$CC)."\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
			
			$message = '<html><body>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($values['name']) . "</td></tr>";
			$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($values['phone']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($values['email']) . "</td></tr>";
			$message .= "<tr><td><strong>Mailist:</strong> </td><td>" . strip_tags($divur) . "</td></tr>";
			$message .= "<tr><td><strong>Mobile:</strong> </td><td>" . strip_tags($values['mobile']) . "</td></tr>";
			$message .= "<tr><td><strong>Ip:</strong> </td><td>" . strip_tags($values['fullip']) . "</td></tr>";
			$message .= "<tr><td><strong>Media:</strong> </td><td> ".$values['media']." - " . strip_tags($values['banner']) . "</td></tr>";
			$message .= "<tr><td><strong>Date & Time:</strong> </td><td>" . strip_tags($values['dateAdded']) . "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";			
			if(mail($to, $subject, $message, $headers)){
				return true;
			}else{
				return false;
			}
		}
/*		
	    $g_link = mysql_connect( 'localhost', 'shlaykes_dori', 'WjDIcY8D') or die('Could not connect to mysql server.' );
        mysql_select_db('shlaykes_dori', $g_link) or die('Could not select database.');
		
		mysql_query("SET NAMES 'utf8'");
		
		$q = mysql_query("SELECT email FROM  `lcm_users` where id != 1 and isAdmin = 1");
		if(mysql_num_rows($q) > 0){
			while($row = mysql_fetch_array($q)){
				$CC[] = $row["email"];
			}
		}
*/

		  $CC[] = "miyani08@gmail.com";
		  $CC[] = "rsseowebz@gmail.com";
		  $CC[] = "";
		
		$name = $_POST["name"];
		

		//preg_match_all('!\d+!', $_POST["phone"], $matches);
		$phone = $_POST["phone"];
		
		if( !validate_mobile($phone) ){
			die("error");
		}
		
		$email = $_POST["email"];
		$divur = ($_POST["divur"] == "on")?1:0;
		$media = $_POST["media"];
		$mobile = ($_POST["mobile"])?"אתר מותאם לנייד":"אתר בתצוגה רגילה";
		$fullip = $_POST["fullip"];
		$dateAdded = date("Y-m-d H:i:s");
		
		$banner = $_POST["banner"];
		
		$values = array(
			"name" => $name,
			"phone" => $phone,
			"media" => $media,
			"email" => $email,
			"divur" => $divur,
			"mobile" => $mobile,
			"dateAdded" => $dateAdded,
			"banner" => $banner,
			"fullip" => $fullip
		);



/*
		$customField = $_POST["IP"];
		
		
			switch($_REQUEST["utm_source"]){
				case "facebook":
						$lm_form = '';
						$lm_key = '';
						$lm_supplier = '';
						$lm_bc = $banner;
				break;
				case "google":
						if($banner == "PPC"){
							$lm_form = '';
							$lm_key = '';
						}else{
							$lm_form = '';
							$lm_key = '';
						}
				break;
			}

	
			$url = 'http://api.leadmanager.co.il/handlers/lm/submit.cms';

			$vipplus = array(
				'lm_form' => $lm_form,
				'lm_key' => $lm_key,
				'' => $email,
				'' => $name,
				'' => $phone
			);
			
			//url-ify the data for the POST
			foreach($vipplus as $key=>$value) {
				$value = urlencode($value);
				$fields_string .= $key.'='.$value.'&';
			}

			rtrim($fields_string, '&');

			// create curl resource 
			$ch = curl_init(); 

			curl_setopt($ch, CURLOPT_URL, $url."?".$fields_string); 

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

			//if($_SESSION["sent"] != 1){
				$output = curl_exec($ch); 
			//	$_SESSION["sent"] = 1;
			//}

			curl_close($ch);   
*/


		if(sendMail($to,"Lead For Excellent Brain From - Webz Digital",$values,$CC)){
			echo "1";
		}else{
			echo "0";
		}
?>