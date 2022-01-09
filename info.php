<?php include("top.inc");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox</title>
<link href="new.css" rel="stylesheet" type="text/css" />
<link href="img/favi.ico" type="image/x-icon" rel="shortcut icon"/>
<?php include('mainhead.inc'); ?>
<table align='center' width='700px'>
<tr>
	<td align='center'>
<input type='button' value='' style='background-image:url(img/favi.png); background-size:contain; background-position:center; background-repeat:no-repeat; border:none; height:100px; width:100px; cursor:none; background-color:#EEE'/>		
		</form>
	</td>
</tr>
</table>
<table align='center' width='700px'><tr><td align='left'><span style='color:#1F7044; font-size:50px'>About</span></td></tr></table>
<table align="center"  width='700px'>
<tr valign="middle">
<td align="left">
<p style='font-size:18px; padding:20px;
font-weight:bold;'>Greenbox... imagine a platform that brings out all the element of the Nigerian music... most of it tho. Letting you in on the Nigerian music you love, the people involved, the houses under which they operate and the musical activities on the green Nigerian soil. That platform is GreenBox.</p>
<p style='font-size:18px; padding:20px;
font-weight:bold;'>
GreenBox was birthed to meet the dire need of every true lover of not just Nigeria music but the music industry which has grown to be a global force to be reckoned with. Currently regarded as the leading music in Africa, the Nigeria music keeps growing and more upcoming acts are turned into “mega super stars”. Nonetheless, most people yearn to know the people behind the scenes, the secret to the success of these music acts which involves the producers, beat makers, DJs etc.
This information can help those who want to get into the music scene to know the right people to meet, how to do it and stay afloat of what goes on in the music scene.
Furthermore, upcoming events in the entertainment world is showcased to the world via this platform, you can also get your latest songs and much more...
</p>

<p style='font-size:18px; padding:20px;
font-weight:bold;'>GreenBox is basically an archive of Nigerian Music.</p>

<p style='font-size:18px; padding:20px;
font-weight:bold;'>At GreenBox we position the spotlight so that it shines on every person in the industry, because we believe that they all play an important role in the soothing Nigerian music we have come to love.</p>

<p style='font-size:18px; padding:20px;
font-weight:bold;'>The archive offers the legendary music pieces and all the human elements that made them what they are.</p>

<span style='font-size:18px; padding:20px;font-weight:bold; '>
<div >Music of Nigeria History
</span>
<br />
<span style='font-size:18px; padding:20px;font-weight:bold; text-align:right;'>
The Nigerian Music... started with and now includes many kinds of Folk and popular music, some of which are known worldwide. Styles of folk music are related to the multitudes of ethnic groups in the country, and the largest ethnic groups are the Igbo, Hausa and Yoruba. Traditional music from Nigeria and throughout Africa is almost always functional; in other words, it is performed to mark a ritual such as a wedding or funeral and not for pure entertainment or artistic enjoyment. 
The Nigerian music has transformed from the starting phase of pure traditional songs  for occasions to the Popular music which on the other hand ranges from the introduction of foreign music culture like reggae, Hip-hop, classical and more. Stars like Tuface Idibia, P-Square,Wizkid, Ice Prince, Olamide, MI, Davido and more have risen to international prominence  from the Nigeria music scene.
In the Nigerian music the female artists are not left out but they stand out and are widely recognized for their talents and achievements. Over the years most Nigerian female artists stuck to the contemporary African music, but in the 21st century several female artists began to diversify into other genres like Rap, Hip-hop and Afrobeat. Some of the popular female Nigerian rappers include, Weird Mc, Eva Alordiah, and Sasha P. While in terms of Afrobeat there are so many female artists like Yemi Alade and Chidinma, but only a few have been constant over the years like Omawumi Megbele, Yinka Davies and Tiwa Savage. 
</span>
<br />

<span style='font-size:18px; padding:20px;
font-weight:bold;' >Providing you with all the musical piece from the people you love. Working around the clock to keep you updated with the Nigerian music, because they are produced by the second.so as long as its out there and you want it... </span><br />
</td>
</tr>
<tr>
<td align="center">
<span style='font-size:18px; padding:20px;
font-weight:bold;' align="center">we got you.</span><br />

<span style='font-size:18px; padding:20px;
font-weight:bold;'align="center">Here</span> <br />
</td>
</div>
</tr>
<tr>
<td align="center">


<table align="center" width="300px" style='padding:20px;'>
<tr>
<td align="center">
<a href='https://www.facebook.com/Greenbox-Nigeria-156169288067340/' target="_blank"><img src="img/fb.png" width="30" height="30" /></a>
</td>
<td align="center">
<a href='https://instagram.com/greenboxnigeria/' target="_blank"><img src="img/ig.png" width="30" height="30" /></a>
</td>
<td align="center">
<a href='https://twitter.com/GreenboxNigeria' target="_blank"><img src="img/tt.png" width="30" height="30" /></a>
</td>
</tr>
</table>

<span style='color:#1f7044; font-size:18px; padding:20px;
font-weight:bold;'>@greenboxnigeria</span>
</td>
</tr>
<tr>
<td align="center">
<br />
<br />

<span style='font-size:20px;'>Feedback</span><br />
<?php 
trim($_POST['name']);
if ($_POST['name'] != '' )
	{
		$today = date("mdY"); 
		$sql = "INSERT INTO  feedback (  feedID, feedName, feedTopic, feedBack, feedDate) VALUES (NULL, '{$_POST['name']}-{$_POST['contact']}', '{$_POST['subject']}', '{$_POST['details']}','$today')";
		mysql_query($sql, $cxn) 
			or die("Couldn't execute insert query anon.");
	}
	else
	{
		echo 'Fill all required fields';
	}
?>
<table style="background-color:#DDD; width:100%; padding:20px; ">
<tr>
<td><form action='info.php' method='post'>Name</td><td>|*<input required="required" type='text' class='new' name='name' value=''  placeholder="Your name" /></td></tr>
<tr><td>Phone or email</td><td>|<span style="color:#DDD;">*</span><input type='text' class='new' name='contact'  placeholder="Contact Detail"  value=''/></td></tr>
<tr><td>Subject</td><td>|*<input required="required" type='text' class='new' name='subject'  placeholder="Topic"  value=''/></td></tr>
<tr><td>Details</td><td>|*<input type='text' class='new' name='details' required="required" placeholder="comment goes here" value=''/></td></tr>
<tr><td colspan='2' align='center'><input type='submit' value='send' style='border:thin #AAA; text-align:start; color:#999; background-color:#DDD; width:100%; padding:5px; height:30px; text-align:center; cursor:pointer'/>
</form>
</td>
</tr>
</table>

</td>
</tr>
</table>


<?php include('mainfooter.inc')?>
</body>
</html>