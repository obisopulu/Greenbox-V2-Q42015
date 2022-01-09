<?php include(".../top.php");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin +label</title>
<link href="back.css" rel="stylesheet" type="text/css" />
<link href="/home/gbngrcom/public_html/img/favi.png" rel="shortcut icon" type="image/x-icon"/>
</head>
<a name="top"></a>
<body>
<table align="center" width="800px" height="113px" >
<tr>
	<td align="left" width="25%">
		 <a href="/home/gbngrcom/public_html/index.php"><<  Go Frontyard  <<</a><br/><a href="backyard.php"><<  Go Dashboard  <<</a>
	</td>
    <td width="50%" align="center">
		<img src="/home/gbngrcom/public_html/img/favi.png" id="imagerad" width="35px" height="35px" draggable="false" dropzone="link" data-icon="gear"/>
	</td>
    <td align="left" width="25%" style="font-size:40px; font-weight:900; color:#CCC; padding:4px;">
                                        Add label
                                    </td>
	
</tr>
</table>
<table bgcolor="#444" align="center"><tr><td>
<!-- //////////////////////////////////////label Name drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div style="float:left;">	<form><select name="label' Name" style=" border:none; background-color:#555; color:#CCC; padding:5px">
							<option>label' Name</option>
<?php 
	$sqllabelsT = 'SELECT DISTINCT labelName FROM labels ORDER BY labelName';
	$labelsTResult = mysql_query($sqllabelsT, $cxn)
		or die("result no work");
while($rowlabelsT=mysql_fetch_assoc($labelsTResult))
	{extract($rowlabelsT);
			if ($labelName != '')echo "<option value=''>$labelName
			</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////labelName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////labelOwner drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="labelOwner" style=" border:none; background-color:#555; color:#CCC; padding:5px">
							<option>label' Owner</option>
<?php 
	$sqllabelsA = 'SELECT DISTINCT labelOwner FROM labels ORDER BY labelOwner';
	$labelsAResult = mysql_query($sqllabelsA, $cxn)
		or die("result no work");
while($rowlabelsA=mysql_fetch_assoc($labelsAResult))
	{extract($rowlabelsA);
			if ($labelOwner != '')echo "<option value=''>$labelOwner</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////labelOwner drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td>
</tr>
</table>

<?php
if ($_POST['labelName'] != '')
{
			$f_today = date("mdy",$today);
		$month = date("m",$today);
		$day = date("d",$today);
		$year = date("Y",$today);
		echo $f_today;
		$_FILES['labelPic']['name']="label{$_POST['labelID']}.png";
		$labelPic = $_FILES['labelPic']['name'];
		echo $_FILES['labelPic']['name'];
		move_uploaded_file($_FILES['labelPic']['tmp_name'], "/home/gbngrcom/public_html/labelsimg/"."{$_FILES['labelPic']['name']}");
		$query = "INSERT INTO  labels (  labelID ,  labelName ,  labelPic ,  labelOwner , labelIntro ,  labelHistory ,  labelArtists , labelProducers, dateDay, dateMonth,	dateYear, dateUpdated ) 
VALUES (
NULL ,  '{$_POST['labelName']}',  '$labelPic1',  '{$_POST['labelOwner']}',  '{$_POST['labelIntro']}',  '{$_POST['labelHistory']}',  '{$_POST['labelArtists']}',  '{$_POST['labelProducers']}' ,'$day','$month','$year', '$f_today'
)";
$result = mysql_query($query, $cxn)
	or die("result no work 101");
	echo "<table align='center' width='700px'><tr><td align='center'><span style='font-size:20px;'><a href='blabels.php'>click to view your upload</a></td></tr></table>"?>


<table width="100%" bgcolor="#444"><tr><td align="left">Renegade&reg;</td><td align="right">copyright2015 </td></tr></table><?php
	
}
else
{
echo"<form action='addlabelprocessor.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#444'><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'>label' Name(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='labelName' maxlength='100' value='Mavin' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>label' Owner(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='labelOwner' maxlength='100' value='Don Jazzy}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>label' Intro(1000)<br/>
		<div  style='float:left;'><textarea name='labelIntro' cols='10' rows='2'  required='required' value='mavin is whatever' maxlength='1000' style='color:#444; background-color:#CCC; border:none; padding:5px'>spice this shit up</textarea></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>label' History(1000)<br/>
		<div  style='float:left;'><textarea name='labelHistory' cols='10' rows='2'  required='required' value='started when dbanj left n bla bla bla' maxlength='1000' style='color:#444; background-color:#CCC; border:none; padding:5px'>make this shit History</textarea></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>label' Accolades(300)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='labelAccolades' maxlength='300' value='dem dom collect no worry yasef contain' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>label' Artists(300)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='labelArtists' maxlength='300' value='don jazzy n co}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>label' Producers(200)<br/>
		<div  style='float:left;'><input size='10' type='text' name='labelProducers' maxlength='200' value='don jazzy n co' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>label' pic<br/>
		<div  style='float:left;'><input type='hidden' name='MAX_FILE_SIZE' value='5123840'><input required='required' name='labelPic' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#444'>Add to Database<br/>
		<div  style='float:left;'><input name='upload' type='submit' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td>
	</tr></table>
	</form>";
	
echo"<table width='700px' align='center'><tr><td align='center' width='700px'>
	<div  style='float:left;'><textarea name='labelLifeStory' cols='110' rows='10'  required='required' value='' maxlength='1000' style='color:#999; background-color:#444; border:none; padding:5px'  disabled='disabled>
	label' Name(100): text maximum lenght is 50 (including space).<br/>
        label' Genre(50): could be more than one (eg: Afro Rap and Afro pop) or even more.<br/>
        label' Intro(1000): An intro to yhe label
        label' Accolades(300): awards won by these guys
        label' pic: the labels logo, 170(width) *(by) 170(height) image size
</textarea></div>
</td></tr></table>";
}	
?>
<?php include('bfooter.inc')?>
</body>
</html>