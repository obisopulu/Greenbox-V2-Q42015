<?php include("top.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Free Web tutorials" />
<meta name="keywords" content="nigeria, music, label, activities, industry, nigeria,
<?php
$queryp = 'SELECT * FROM persons';
$resultp = mysql_query($queryp, $cxn)
	or die("result no work");
while($rowp=mysql_fetch_assoc($resultp)){extract($rowp);	echo $personName.',';}

$queryl = 'SELECT * FROM labels';
$resultl = mysql_query($queryl, $cxn)
	or die("result no work");
while($row=mysql_fetch_assoc($resultl)){extract($row);echo $labelName.',';}

$queryl = 'SELECT * FROM activities';
$resultl = mysql_query($queryl, $cxn)
	or die("result no work");
while($row=mysql_fetch_assoc($resultl)){extract($row);echo $activityName.',';}

?>green, greenbox, green box
" />
<meta name="author" content="_sopulu" />
<title>GreenBox</title>
<link href="new.css" rel="stylesheet" type="text/css" />
<link href="img/favi.ico" type="image/x-icon" rel="shortcut icon"/>
</head>
<?php include('mainhead.inc'); ?>
<table align='center' width='700px'>
<tr>
	<td align='center'>
<input type='button' value='' style='background-image:url(img/favi.png); background-size:contain; background-position:center; background-repeat:no-repeat; border:none; height:100px; width:100px; cursor:none; background-color:#EEE'/>		
		</form>
	</td>
</tr>
<tr>
<td id='toppad' align='center'>
GreenBox
</td>
</tr>
</table>
<table align="center">
<tr valign="middle" height="30px"><td width="30px" align="center">
<form action="info.php" method="post">
<input type='submit' name='' value='' style='background:url(img/info.png) #EEEEEE center no-repeat; border:none; height:30px; width:30px; cursor:pointer;'/></form>
</td>
</tr></table>

<table height="17px"><tr><td></td></tr></table>
<?php
$query = 'SELECT * FROM songs ORDER BY dateUpdated DESC LIMIT 4';
$result3 = mysql_query($query, $cxn)
	or die("result no work");
echo"<br/><table align='center' id='cubes45' width='700px'>
<tr>
<td align='left'>
<span style='font-size:20px;'>Fresh of the Oven</td>
</tr>
<tr>
<td align='center' style='padding-left:25px;'>";
while($row=mysql_fetch_assoc($result3))

	{extract($row);
		if (empty($row['songArt'])) { $songArt='albumart.png';}
		echo "<table align='center' width='150px' height='150px' style='float:left; background:url(songsimg/$songArt) no-repeat; background-size:contain;  -webkit-filter: grayscale(100%); margin:1px;'>
		<tr><td align='right'  style='text-shadow:1px 1px 1px #000'>
		<h2>";
		if ($row['dateDay'] <10) {echo "0$dateDay";}else {echo $dateDay;} echo"<span style='color:#FFF;'>"; if ($row['dateMonth'] <10) {echo "0$dateMonth";}else {echo $dateMonth;} echo"&nbsp;</span>
		</td></tr><tr><td  align='right' style='font-size:large; text-shadow:1px 1px 1px #000'>"; echo substr_replace($row['songTitle'],'',15); echo "&nbsp;</td></tr>
		<tr><td  align='right' style='text-shadow:1px 1px 1px #000'>"; echo substr_replace($row['songArtist'],'',15); echo "&nbsp;</td></tr>
		<tr'><td align='right' style='border:none; filter:alpha(opacity=80); opacity:0.8;'>
		<form action='stats.php' method='post'>
		<input type='hidden' name='songID' value='$songID' />
		<input  type='submit' value='Download[$songDownload]' style='background-image:url(img/download.png); background-position:center; background-repeat:no-repeat; border:none; height:30px; width:100%; cursor:pointer; vertical-align:middle; background-color:#CCCCCC' /></div></a></td></tr></table></form>";
	}
echo"</td></tr><tr><td align='right'><b><a href='music.php' style='display:compact;'><span style='color:#1f7044;'><b>The Music</b></span></a></b></td></tr></table>

</td></tr><tr><td>";

$queryp = 'SELECT * FROM persons ORDER BY dateUpdated DESC LIMIT 4';
$resultp = mysql_query($queryp, $cxn)
	or die("result no work");
echo"<br/><table align='center' id='cubes45' width='700px'>
<tr>
<td align='left'>
<span style='font-size:20px;'>New on the Block</td>
</tr>
<tr>
<td align='center' style='padding-left:25px;'>";
while($rowp=mysql_fetch_assoc($resultp))

	{extract($rowp);

		echo "<table align='center' width='150px' height='150px' style='float:left; background:url(personsimg/$personPic1) no-repeat; background-size:contain;  -webkit-filter: grayscale(100%); margin:1px;'>
		<tr><td align='right'  style='text-shadow:1px 1px 1px #000'>
		<h2>";
		if ($dateDay <10) {echo "0$dateDay";}else {echo $dateDay;} echo"<span style='color:#FFF;'>"; if ($dateMonth <10) {echo "0$dateMonth";}else {echo $dateMonth;} echo"&nbsp;</span>
		</td></tr><tr><td></td></tr>
		<tr><td ></td></tr>
		<tr'><td align='right' style='border:none; filter:alpha(opacity=80); opacity:0.8;'>
		<form action='person.php' method='post'>
		<input type='submit' name='person' value='$personStageName' style='background-image:url(); background-position:center; background-repeat:no-repeat; border:none; height:30px; width:100%; cursor:pointer; vertical-align:middle; background-color:#CCCCCC'  /></div></a></td></tr></table></form>";
	}
echo"</td></tr><tr><td align='right'><b><a href='people.php' style='display:compact;'><span style='color:#1f7044;'><b>The People</b></span></a></b></td></tr></table>

</td></tr><tr><td>";

$queryl = 'SELECT * FROM labels ORDER BY dateUpdated DESC LIMIT 4';
$resultl = mysql_query($queryl, $cxn)
	or die("result no work");
echo"<br/><table align='center' id='cubes45' width='700px'>
<tr>
<td align='left'>
<span style='font-size:20px;'>Startups</td>
</tr>
<tr>
<td align='center' style='padding-left:25px;'>";
while($row=mysql_fetch_assoc($resultl))

	{extract($row);
	
echo "<table align='center' width='150px' height='150px' style='float:left; background:url(songsimg/$labelPic) no-repeat; background-size:contain;  -webkit-filter: grayscale(100%); margin:1px;'>
		<tr><td align='right'  style='text-shadow:1px 1px 1px #000'>
		<h2>";
		if ($dateDay <10) {echo "0$dateDay";}else {echo $dateDay;} echo"<span style='color:#FFF;'>"; if ($dateMonth <10) {echo "0$dateMonth";}else {echo $dateMonth;} echo"&nbsp;</span>
		</td></tr><tr><td></td></tr>
		<tr><td ></td></tr>
		<tr'><td align='right' style='border:none; filter:alpha(opacity=80); opacity:0.8;'>
		<form action='label.php' method='post'>
		<input type='submit' name='label' value='$labelName' style='background-image:url(); background-position:center; background-repeat:no-repeat; border:none; height:30px; width:100%; cursor:pointer; vertical-align:middle; background-color:#CCCCCC'  /></div></a></td></tr></table></form>";
	}
echo"</td></tr><tr><td align='right'><b><a href='labels.php' style='display:compact;'><span style='color:#1f7044;'><b>The Labels</b></span></a></b></td></tr></table>

</td></tr><tr><td>";

$query = 'SELECT * FROM activities ORDER BY activityDate DESC LIMIT 4';
$result3 = mysql_query($query, $cxn)
	or die("result no work");
echo"<br/><table align='center' id='cubes45' width='700px'>
<tr>
<td align='left'>
<span style='font-size:20px;'>Upcoming Events</td>
</tr>
<tr>
<td align='center' style='padding-left:25px;'>";
while($row=mysql_fetch_assoc($result3))

	{extract($row);

		echo "<table align='center' width='150px' height='150px'style='float:left; background:url("; if ($activityPic=='') {echo "img/gb.png";}else{echo"activitiesimg/$activityPic";}echo ") no-repeat; background-size:contain; -webkit-filter: grayscale(100%); margin:1px; color:#DDD'>
		<tr><td align='left'>
		<h1>";
		echo $activityDay;
		echo"<span style='color:#FFF;'>{$row['activityMonth']}</span><br/></h1><b><span style='color:#1f7044;'>{$row['activityName']}</span></b>
		</td></tr>
		<tr><td align='left'><span>"; echo substr_replace($activityInfo,'...',80); echo "<br/><a href='Activities.php#{$row['activityDay']}{$row['activityMonth']}{$row['activityYear']}' style='display:compact; color:#1f7044;'>more</span></a></td></tr></table>";
	}
echo"</td></tr><tr><td align='right'><b><a href='activities.php' style='display:compact;'><span style='color:#1f7044;'><b>The Activities</b></span></a></b></td></tr></table>";
mysql_close($cxn);

?> 
</td>
</tr>
</table>
<?php include('mainfooter.inc')?>
</body>
</html>