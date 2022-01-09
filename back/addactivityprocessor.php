<?php include(".../top.inc");  
$sqlactivities = mysql_query("SELECT * FROM activities");
$countactivities = mysql_num_rows($sqlactivities);
$rowactivities=(mysql_fetch_assoc($sqlactivities));
extract($rowactivities);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin +Activity</title>
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
                                        Add Activity
                                    </td>
	
</tr>
</table>
<table bgcolor="#444" align="center"><tr><td>
<!-- //////////////////////////////////////activity Name drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div style="float:left;">	<form><select name="activity Name" style=" border:none; background-color:#555; color:#CCC; padding:5px">
							<option>Activity Name</option>
<?php 
	$sqlactivitiesT = 'SELECT DISTINCT activityName FROM activities ORDER BY activityName';
	$activitiesTResult = mysql_query($sqlactivitiesT, $cxn)
		or die("result no work");
while($rowactivitiesT=mysql_fetch_assoc($activitiesTResult))
	{extract($rowactivitiesT);
			if ($activityName != '')echo "<option value=''>$activityName
			</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////activityInfo drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="activity Day" style=" border:none; background-color:#555; color:#CCC; padding:5px">
							<option>Activity Day</option>
<?php 
	$sqlactivitiesA = 'SELECT DISTINCT activityDay FROM activities ORDER BY activityDay';
	$activitiesAResult = mysql_query($sqlactivitiesA, $cxn)
		or die("result no work");
while($rowactivitiesA=mysql_fetch_assoc($activitiesAResult))
	{extract($rowactivitiesA);
			if ($activityDay != '')echo "<option value=''>$activityDay</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityDay drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////activityMonth drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$activityMonth" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>Activity Month</option>
<?php 
	$sqlactivitiesAF = 'SELECT DISTINCT activityMonth FROM activities ORDER BY activityMonth';
	$activitiesAFResult = mysql_query($sqlactivitiesAF, $cxn)
		or die("result no work");
while($rowactivitiesAF=mysql_fetch_assoc($activitiesAFResult))
	{extract($rowactivitiesAF);
			if ($activityMonth != '')echo "<option value=''>$activityMonth</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityMonth drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////activityYear drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$activityYear" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>Activity Year</option>
<?php 
	$sqlactivitiesAl = 'SELECT DISTINCT activityYear FROM activities ORDER BY activityYear';
	$activitiesAlResult = mysql_query($sqlactivitiesAl, $cxn)
		or die("result no work");
while($rowactivitiesAl=mysql_fetch_assoc($activitiesAlResult))
	{extract($rowactivitiesAl);
			if ($activityYear != '')echo "<option value=''>$activityYear</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityYear drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td>
</tr>
</table>

<?php
if ($_POST['activityName'] != '')
{		$f_today = date("mdy",$today);
		$month = date("m",$today);
		$day = date("d",$today);
		$year = date("Y",$today);
		echo $f_today;
		$_FILES['activityPic']['name']="activity{$_POST['activityID']}.png";
		$activitiesPic = $_FILES['activityPic']['name'];
		$activityDate=$_POST['activityMonth'].$_POST['activityDay'].$_POST['activityYear'];
		move_uploaded_file($_FILES['activityPic']['tmp_name'], "/home/gbngrcom/public_html/activitiesimg/"."{$_FILES['activityPic']['name']}");
		$query1 = "INSERT INTO  activities (  activityID ,  activityName ,  activityPic ,  activityInfo , activityDay ,  activityMonth , activityYear , activityDate ,dateDay, dateMonth,	dateYear, dateUpdated) 
VALUES (
NULL ,  '{$_POST['activitiesName']}',  '$activitiesPic',  '{$_POST['activityInfo']}',  '{$_POST['activityDay']}',  '{$_POST['activityMonth']}', '{$_POST['activityYear']}', '$activityDate' , '$day','$month','$year' ,'$f_today;'
)";
$result1 = mysql_query($query1, $cxn)
	or die("result no work 101");
	echo "<table align='center' width='700px'><tr><td align='center'><span style='font-size:20px;'><a href='bactivities.php'>click to view your upload</a></td></tr></table>"?>



<table width="100%" bgcolor="#444"><tr><td align="left">Renegade&reg;</td><td align="right">copyright2015 </td></tr></table><?php 
}
else
{
echo"<form action='addactivityprocessor.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#444'><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'>Activity Name(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='activityName' maxlength='100' value='Greenbox Launch' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Day(2)<br/>
		<div  style='float:left;'><input size='2' type='text' name='activityDay' maxlength='2' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Month(2)<br/>
		<div  style='float:left;'><input size='2' type='text' name='activityMonth' maxlength='2' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Year(2)<br/>
		<div  style='float:left;'><input size='2' type='text' name='activityYear' maxlength='2' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>activities' History(1000)<br/>
		<div  style='float:left;'><textarea name='activityInfo' cols='10' rows='2'  required='required' value='' maxlength='1000' style='color:#444; background-color:#CCC; border:none; padding:5px'>make this shit History</textarea></div></td><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Pic<br/>
		<div  style='float:left;'><input type='hidden' name='MAX_FILE_SIZE' value='5123840'><input required='required' name='activityPic' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#444'>Add to Database<br/>
		<div  style='float:left;'><input name='upload' type='submit' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td>
	</tr></table>
	</form>";
	
echo"<table width='700px' align='center'><tr><td align='center' width='700px'>
	<div  style='float:left;'><textarea name='activitiesLifeStory' cols='110' rows='10'  required='required' value='' maxlength='1000' style='color:#999; background-color:#444; border:none; padding:5px'  disabled='disabled>
		Activity Name(100): text maximum lenght is 100 (including space).<br/>
        Activity Info(1000): the activity in details
        Activity Day(2): the day od the activity. in the format (09, 03, 01 or 25)but it must be of lenght 2(xx)
        Activity Month(2): the month od the activity. in the format (09, 03, 01 or 12)but it must be of lenght 2(xx)
        Activity Year(2): the year od the activity. in the format (09, 03, 01 or 25)but it must be of lenght 2(xx)
</textarea></div>
</td></tr></table>";

}	
?>
<?php include('bfooter.inc')?>
</body>
</html>