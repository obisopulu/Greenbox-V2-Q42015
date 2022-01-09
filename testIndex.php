<?php
if ($_POST['id']!='')
{
$loginStatus='on';
}
		$id=$_POST['id'];
		$gbname=$_POST['gbname'];
		$fname=$_POST['fname'];
		$zone=$_POST['zone'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$pic=$_POST['pic'];
		$rating=$_POST['rating'];
		$download=$_POST['dowload'];
		$password=$_POST['password'];

if ($_POST['logout']=='logout'){$loginStatus='';}
include("uzo.inc");
$cxn = mysql_connect($host,$user,$password);
if (!$cxn)
	die("e no connect o bros");
mysql_select_db($database, $cxn);
$uname = $_POST['uname'];
$pword = $_POST['pword']; 
if ($loginStatus!='on')
	{
		
		$userIP=$_SERVER['HTTP_X_FORWARDED_FOR'].$_SERVER['REMOTE_ADDR'];
		$query = "SELECT * FROM member WHERE memberGbName LIKE '$uname' OR memberEmail LIKE '$uname'";
			$result = mysql_query($query, $cxn)
				or die("result no work");
			if (mysql_num_rows($result)>0)
				{
					$query2 = "SELECT * FROM member WHERE memberIP='$userIP''";
				$result2 = mysql_query($query2, $cxn);
				if (mysql_num_rows($result2)==1 )
					{
						$row=mysql_fetch_assoc($result2);
						$ID=$row['memberID']; $GbName=$row['memberGbName']; $Name=$row['memberName']; $zone=$row['memberZone']; 
						$Phone=$row['memberPhone'];$Email=$row['memberEmail']; $Pic=$row['memberPic']; $Rating=$row['memberRating']; 
						$Download=$row['memberDownload']; $Password=$row['memberPassword'];
						$loginStatus='on';
					}
				}
		if ($uname!='' and $pword!='')
		{
			$query = "SELECT * FROM member WHERE memberGbName LIKE '$uname' OR memberEmail LIKE '$uname'";
			$result = mysql_query($query, $cxn)
				or die("result no work");
			if (mysql_num_rows($result)>0)
				{
					$query2 = "SELECT * FROM member WHERE (memberGbName='$uname' OR memberEmail='$uname') AND memberPassword='$pword'";
				$result2 = mysql_query($query2, $cxn);
				if (mysql_num_rows($result2)==1 )
					{
						$row=mysql_fetch_assoc($result2);
						$ID=$row['memberID']; $gbname=$row['memberGbName']; $fname=$row['memberName']; $zone=$row['memberZone']; 
						$phone=$row['memberPhone'];$email=$row['memberEmail']; $pic=$row['memberPic']; $rating=$row['memberRating']; 
						$download=$row['memberDownload']; $pword=$row['memberPassword'];
						$loginStatus='on';
					}
				}
			elseif(mysql_num_rows($result)==0)
				{		
					$msg="Gbox name or email is incorrect";
				}
			else
				{
					$msg="Password is incorrect";
				}
		}
		else
		{
			$msg="";
		}
	}
	else
	{
	}
$searchform = "function searchV() 
{
	var obj = document.getElementById('searchForm').style
   if(obj.visibility == 'visible')
    {
		obj.visibility = 'hidden';
	 	obj.height = '0px';
	}
   else
    {
		obj.visibility = 'visible';
	 	obj.height = '45px';
		document.getElementById('memberForm1').style.visibility = 'hidden';
		document.getElementById('memberForm1').style.height = '0px';	
		document.getElementById('memberForm2').style.visibility = 'hidden';
		document.getElementById('memberForm2').style.height = '0px';	
	}
}";
$offscript = "
function addmem()
{
	var mf1 = document.getElementById('memberForm1');
	var mf2 = document.getElementById('memberForm2');
   if(	mf1.style.visibility == 'visible') 
    {
		mf2.style.visibility = 'visible';
	 	mf2.style.height = '310px';
		mf1.style.visibility = 'hidden';
	 	mf1.style.height = '0px';
	}
}
function login()
{
	var mf1 = document.getElementById('memberForm1');
	var mf2 = document.getElementById('memberForm2');
   if(	mf2.style.visibility == 'visible') 
    {
		mf1.style.visibility = 'visible';
	 	mf1.style.height = '160px';
		mf2.style.visibility = 'hidden';
	 	mf2.style.height = '0px';
	}
}
function memberV() 
{
	var mf1 = document.getElementById('memberForm1');
	var mf2 = document.getElementById('memberForm2');
   if(	mf1.style.visibility == 'visible') 
    {
		mf1.style.visibility = 'hidden';
	 	mf1.style.height = '0px';
		document.getElementById('searchForm').style.visibility = 'hidden';
		document.getElementById('searchForm').style.height = '0px';
	}
   else
    {
		mf1.style.visibility = 'visible';
	 	mf1.style.height = '160px';
		mf2.style.visibility = 'hidden';
	 	mf2.style.height = '0px';
		document.getElementById('searchForm').style.visibility = 'hidden';
		document.getElementById('searchForm').style.height = '0px';
	}
}";
$onscript = "
function edits()
{
	var mf1 = document.getElementById('memberForm1');
	var mf2 = document.getElementById('memberForm2');
   if(	mf1.style.visibility == 'visible') 
    {
		mf2.style.visibility = 'visible';
	 	mf2.style.height = '340px';
		mf1.style.visibility = 'hidden';
	 	mf1.style.height = '0px';
	}
}
function details()
{
	var mf1 = document.getElementById('memberForm1');
	var mf2 = document.getElementById('memberForm2');
   if(	mf2.style.visibility == 'visible') 
    {
		mf1.style.visibility = 'visible';
	 	mf1.style.height = '204px';
		mf2.style.visibility = 'hidden';
	 	mf2.style.height = '0px';
	}
}
function memberV() 
{
	var mf1 = document.getElementById('memberForm1');
	var mf2 = document.getElementById('memberForm2');
   if(	mf1.style.visibility == 'visible') 
    {
		mf1.style.visibility = 'hidden';
	 	mf1.style.height = '0px'
		document.getElementById('searchForm').style.visibility = 'hidden';
		document.getElementById('searchForm').style.height = '0px';
	}
   else
    {
		mf1.style.visibility = 'visible';
	 	mf1.style.height = '220px';
		mf2.style.visibility = 'hidden';
	 	mf2.style.height = '0px';
		document.getElementById('searchForm').style.visibility = 'hidden';
		document.getElementById('searchForm').style.height = '0px';
	}
}";
$off = "	<div id='memberForm1'  style=' visibility:hidden; height:0px;'>
        	<table bgcolor='#CCC'><tr align='center'>
			<td style='padding:10px; color:#1F7044; font-weight:900' align='left'>Login</td>
        	<td style='padding:10px' align='right'>
        	<img src='img/addmem.png' width='30' height='30' onclick='addmem()' style='cursor:pointer'></td>
			</tr><tr>
			<td>
    		<form action='index.php' method='post'>
	    	Username</td><td>
            |<input type='text' class='new' name='uname' value=''/>
            </td></tr><tr><td>
	        Password</td><td>
            |<input type='text' class='new' name='pword' value=''/>
            </td></tr><tr><td colspan='2' align='center'>
	        <input type='submit' value='login' style='border:thin #AAA; text-align:start; color:#999; background-color:#DDD; width:100%; padding:5px; height:30px; text-align:center; cursor:pointer'/>
	        </form>
            </td></tr></table>
    		</div>
		<div id='memberForm2' style=' visibility:hidden; height:0px;'>
        <form action='index.php' method='post' enctype='multipart/form-data'>
        <table align='center' style='padding:10px' width='500px' bgcolor='#CCCCCC' cellspacing='0'>
        <tr align='center'>
		<td style='padding:10px; color:#1F7044; font-weight:900' align='left'>Create a GBox Account</td>
        <td style='padding:10px' align='right'>
        <img src='img/login.png' width='30' height='30' onclick='login()' style='cursor:pointer'></td>
        </tr>
        <tr>
        <td>
			Gbox Handle</td><td>|<input type='text' name='gbname' value='$gbname' class='new'/>
		</td>
        </tr>
        <tr>
        <td>
			Full name</td><td>|<input type='text' name='fname' value='$fname'  class='new'/>
		</td>
        </tr>
        <tr>
        <td>
			Zone Residing</td><td>|
			<select name='zone' class='new'> 
			<option value='north central'>North Central
			<option value='north east' >North East
			<option value='north west'> North West
			<option value='south east'>South East
			<option value='south south' >South South
			<option value='south west'> South  West
			</select>
		</td>
        </tr>
        <tr>
        <td>
			eMail</td><td>|<input type='text' name='email' value='$email'  class='new'/>
		</td>
        </tr>
        <tr>
        <td>
			Phone</td><td>|<input type='text' name='phone' value='$phone'  class='new'/>
		</td>
        </tr>
        <tr>
        <td>
			Password</td><td>|<input type='password' name='pword' value=''  class='new'/>
		</td>
        </tr>
        <tr bgcolor='#EEE'>
      <td>
			<label for='file-upload' class='custom-file-upload'> <i class='fa fa-cloud-upload'></i>Add Picture ID<img id='image' align='right' width='20px' height='auto' style='padding-right:10px'/></label> <input id='file-upload' name='pic'  type='file'/>
            
            <script>document.getElementById('file-upload').onchange = function () 
            {
    			var reader = new FileReader();
				reader.onload = function (e) {
        		// get loaded data and render thumbnail.
        		document.getElementById('image').src = e.target.result;
    		};
				// read the image file as a data URL.
    			reader.readAsDataURL(this.files[0]);
			};</script>
		</td>
        <td>
        	<input type='submit' name='create' value='Create' style='color:#999; background-color:#EEE; border:none; padding:5px; width:100%; height:33px; cursor:pointer;'/>
        </td>
        </tr>
		</table>
		</form>
    	</div>";
$on = "<div id='memberForm1' style=' visibility:hidden; height:0px;'>
        <table width='500px' align='center' style='padding:10px'>
        <tr>
        <td colspan='' align='right'>
                <table width='500px' align='center' border='0' cellspacing='0'>
        <tr align='center'>
			<td style='padding:10px; color:#1F7044; font-weight:900' colspan='4' align='left'>$gbname</td>
            <td style='padding:10px' align='right' width='100px'>
			<img src='img/edit.png' width='30' height='30' onclick='edits()' style='cursor:pointer;'></td>
        </tr>
        <tr bgcolor='#CCC'>
        <td style='padding:10px' width='100px' height='100px' align='left'>
            <a href=mempic/$pic' rel='lightbox' title='$gbname Graphic ID'style='background-image:url(mempic/$pic); background-size:contain;  background-position:center; background-repeat:no-repeat; border:none; height:30px; width:30px; cursor:pointer; border-radius:100px'><div class='container'><img src=''></div></a>        
        </td>
        <td colspan='3'>
        <span style='text-transform:capitalize;'>$fname</span><br/>
        <span style='text-transform:capitalize;'>$zone</span><br/>
        $email<br/>
        $phone
        </td>
        <td align='center' bgcolor='#CCC'>
        	Downloads<br/>
            	<b>$download</b><br/>
           Ratings<br/>
            	 <b>$rating</b><br/>
        </td>
        </tr>
		</table>
		<form method='post' action='index.php' enctype='multipart/form-data'>
		<input  type='submit' value='logout' name='logout'  style='border:none; cursor:pointer; color:#1f7044; padding:5px;'/>
		</form>
        </td>
        </tr>
		</table>
    	</div>
		<div id='memberForm2'  style=' visibility:hidden; height:0px;'>
        <form action='index.php' method='post' enctype='multipart/form-data'>
        <table width='500px' align='center' style='padding:10px' class='new' bgcolor='#CCCCCC' cellspacing='0'>
        <tr align='center'>
		<td style='padding:10px; color:#1F7044; font-weight:900' align='left'>Edit</td>
        <td style='padding:10px' align='right'>
        <img onclick='details()' src='img/form.png' width='30' height='30'  style='cursor:pointer;'></td>
        </tr>
        <tr>
        <td>
			Gbox Handle</td><td>|<input type='text' name='gbname' value='$gbname' class='new'/>
		</td>
        </tr>
        <tr>
        <td>
			Full name</td><td>|<input type='text' name='fname' value='$fname'  class='new'/>
		</td>
        </tr>
        <tr>
        <td>
			zone Residing</td><td>|<input type='text' name='zone' value='$zone'  class='new'/>
		</td>
        </tr>
        <tr>
        <td>
			eMail</td><td>|<input type='text' name='mail' value='$email'  class='new'/>
		</td>
        </tr>
        <tr>
        <td>
			Phone</td><td>|<input type='text' name='phone' value='$phone'  class='new'/>
		</td>
        </tr>
        <tr>
        <td>
			Retype Password</td><td>|<input type='password' name='pword' value='$password'  class='new'/>
		</td>
        </tr>
        <tr bgcolor='#EEE'>
        <td>
			<label for='file-upload' class='custom-file-upload'> <i class='fa fa-cloud-upload'></i> Custom Upload </label> <input id='file-upload' name='pic' type='file'/>
		</td>
        <td>
        	<input type='submit' value='Update' style='color:#999; background-color:#EEE; border:none; padding:5px; width:100%; height:33px; cursor:pointer;'/>
        </td>
        </tr>
		</table>
    	</div>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox</title>
<link rel="stylesheet" href="img/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="img/lightbox.js"></script>
<link href="new.css" rel="stylesheet" type="text/css" />
<link href="img/favi.png" rel="icon" type="image/x-icon"/>
<script>
<?php
if ($loginStatus!='on')
{
	echo"$offscript";
}
else
{
	echo"$onscript";
}
echo"$searchform";
?>
</script>
</head>

<a name="top"></a>
<body>
<?php
if ($_POST['create']=='Create')
{
# Check for blanks */                          
foreach($_POST as $field => $value)
	{ if ($field != "fax") 
		{
			if ($value == "")
				{ $blanks[] = $field; } 
		}
 	} 
if(isset($blanks))
	{
	if (count($blanks)>1){	$msg = "A field is blank.  Please enter the required information:  "; }
	$msg = "Some fields are blank.  Please enter the required information:  "; 
	$blank='yes';
	extract($_POST); 
	echo $edit; 
	}
	/* Validate data */ 

if ($blank !='yes')
{
	foreach($_POST as $field => $value)
	{ if(!empty($value))
		{ if(eregi("gbname",$field)) 
			{ if (!ereg("^[A-Za-z0-9'_-]{1,50}$",$value)) 
				{ $errors[]="$value is not a valid Greenbox name. Only alphabets A-Z, numbers 0-9, ', _ and - are allowed"; }
			}
		if(eregi("fname",$field)) 
			{ if (!ereg("^[A-Za-z' -]{1,100}$",$value)) 
				{ $errors[]="$value is not a valid name."; }
			}   
		if(eregi("email",$field)) 
			{ if(!ereg("^.+@.+\\..+$",$value)) 
				{ $errors[] = "$value is not a valid email address."; }
			}  
		if(eregi("phone",$field)) 
			{ if(!ereg("^[0-9)(xX -]{11}$",$value)) 
				{ $errors[] = "$value is not a valid  phone number. "; } 
			}
		if(eregi("pword",$field)) 
			{ if($pword='') 
				{ $errors[] = "$value is not a valid  phone number. "; } 
			}
		}
	 // end if empty
	}
	// end foreach 

if(@is_array($errors))
	{ $msg = " Bad field format"; 
		extract($_POST); 
		echo $edit;
	$bad='yes';
	} 

/* clean data */ 
foreach($_POST as $field => $value) 
	{ if($field == "pword") 
			{ $password = strip_tags(trim($value)); } 
		else { $fields[]=$field; $value = strip_tags(trim($value)); 
				$values[] = mysql_real_escape_string($value, $cxn); $field = $value; }
	} 

/* check whether user name already exists */ 
if ($bad!='yes')
{
	$sql = "SELECT * FROM member WHERE memberGbName = '$gbname'";
	$result = mysql_query($sql, $cxn) 
		or die("Couldn't execute select query."); 
	$num = mysql_num_rows($result);
	if ($num > 0) 
		{ $msg = "$gbname already used. Select another Gbox Name."; 
		echo $edit;
		$gbnametaken='yes';
		} 
	
	if ($gbnametaken !='yes')
	{
	$sqlm = "SELECT * FROM member WHERE memberEmail = '$email'";
	$resultm = mysql_query($sqlm, $cxn) 
		or die("Couldn't execute select query."); 
	$numm = mysql_num_rows($resultm);
	if ($numm > 0) 
		{ $msg = "$email already used. Select another Email."; 
		echo $edit;
		$emailtaken='yes';} 
	/*Add new member to database */ 
	if ($emailtaken!='yes')
		{
		$today = date("mdY"); 
		$sql = "INSERT INTO  member (  memberID,  memberGbName ,  memberName ,  memberZone ,  memberPhone ,  memberEmail ,  memberPic ,  memberRating ,  memberDownload ,  memberPassword , memberRegDate ) 
VALUES (NULL , '$gbname' , '$fname' , '$zone' , '$phone' , '$email' , '$pic' , '' , '' , '$pword' , '$today')";
		move_uploaded_file($_FILES['pic']['tmp_name'], "mempic\\"."{$_FILES['pic']['name']}");
		$result = mysql_query($sql, $cxn) 
		or die("Couldn't execute insert query.");
		$loginStatus='on';
		/* send email to new member
		$emess = "A new Member Account has been set up. ";
	$emess.= "Your new Member ID and password are: ";
	$emess.= "\n\n\t$loginName\n\t$password\n\n";
	$emess.= "If you have any questions, complaints, comments, suggestions, query";
	$emess.= " email info@greenbox.org.ng";
	$ehead="From: member-desk@greenbox.org.ng\r\n"; 
	$subj = "Your new Member Account from Greenbox";
	$mailsnd=mail("$email","$subj","$emess","$ehead"); */
} 
}
}
}
}
?>

<table align='center' id='cubes450' width='680px' border="0" cellspacing="0">
<tr height='30px'>
	<td	 align='left' width='50px'>
		<form action='index.php' method='post'>
        <input type='submit' value='Home' class='home'	/>
		<?php include('session.inc')?></td>
    <td align='left' width='50px'>
		<form action='music.php' method='post'>
        <input type='submit' value='Music' class='link' />
		<?php include('session.inc')?>
	</td>
    <td align='left' width='50px'>
		<form action='people.php' method='post'>
        <input type='submit' value='People' class='link' />
		<?php include('session.inc')?>
	</td>
    <td align='left' width='50px'>
		<form action='Labels.php' method='post'>
        <input type='submit' value='Labels' class='link' />
		<?php include('session.inc')?>
	</td>
    <td align='left' width='30px'>
		<form action='Activities.php' method='post'>
        <input type='submit' value='Activities' class='link'/>
		<?php include('session.inc')?>
	</td>
        <td width='324px'>
	</td>    
	<td width='30px' height='30px' align='center'>
			<button onclick='searchV()' style='background-image:url(img/srch.png);  background-position:center; background-repeat:no-repeat; border:none; height:30px; width:30px; cursor:pointer; background-color:#ddd'></button>
	</td>    
	<td width='30px' height='30px' align='center'>
			<button onclick='memberV()' style='background-image:url(<?php if ($loginStatus!='on') echo "img/member.png"; else echo "mempic/".$Pic;?>); background-size:contain; <?php if ($loginStatus!='on') echo "background-color:#cccccc;"; else echo "background-color:#000000;";?> background-position:center; background-repeat:no-repeat; border:none; height:30px; width:30px; cursor:pointer; border-radius:100px' ></button>
			</td>
	</tr>
	<tr>
	<td colspan="8" align="center" width="700px">
<!--member and search-->
<?php
if ($loginStatus!='on')
{
	extract($_POST); 
	echo"$off";
}
else
{
	extract($_POST);
	echo"$on";
}
?>
 <div id='searchForm' style="visibility:hidden; height:0px;">
        <table><tr><td bgcolor='#CCC'>
    		<form action='search.php' method='post'>
			<input class='new' type='text' name='keyword'  maxlength='50'>
            <input type="submit" value="" style='background-image:url(img/srch.png); background-position:center; background-repeat:no-repeat; border:none; height:30px; width:30px; cursor:pointer; vertical-align:middle; background-color:#CCCCCC' />
	        </form>
            
            </td></tr></table>
    	</div>
        <?php echo $msg ?>
	</td>
</tr>
</table>

<table align='center' width='700px'>
<tr>
	<td align='center'>
<input type='button' value='' style='background-image:url(img/favi.png); background-size:contain; background-position:center; background-repeat:no-repeat; border:none; height:100px; width:100px; cursor:pointer; background-color:#EEE'/>		
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
<input type='submit' name='' value='' style='background:url(img/info.png) #EEEEEE center no-repeat; border:none; height:30px; width:30px; cursor:pointer;'/></form>
</td>
</tr></table>

<table height="17px"><tr><td></td></tr></table>
<?php 
$query = 'SELECT * FROM songs ORDER BY songID LIMIT 5';

$result = mysql_query($query, $cxn)
	or die("result no work");

echo "<table align='center' id='cubes45' width='680px'><tr><td align='left'><span style='font-size:20px;'>New Music</td></tr><tr><td align='right'>";

while($row=mysql_fetch_assoc($result))
	{	
		echo "<b>{$row['songTitle']}</b>&nbsp; {$row['songArtist']}
				<a href='songs/{$row['songURL']}'><img src='img/download.png' width='11px' height='18px'/></a></br>";
	}

echo"</td></tr><tr><td align='right'><b><a href='music.php' style='display:compact;'><span style='color:#1f7044;'><b>more</b></span></a></b></td></tr></table>";

$query = 'SELECT * FROM activities ORDER BY activityDate DESC LIMIT 4';
$result3 = mysql_query($query, $cxn)
	or die("result no work");
echo"<br/><table align='center' id='cubes45' width='680px'>
<tr>
<td align='left'>
<span style='font-size:20px;'>Upcoming Activities</td>
</tr>
<tr>
<td align='center' style='padding-left:25px;'>";
while($row=mysql_fetch_assoc($result3))

	{extract($row);

		echo "<table align='center' width='150px' height='150px' style='float:left;'>
		<tr><td align='left'>
		<h1>";
		echo $activityDay;
		echo"<span style='color:#FFF;'>{$row['activityMonth']}</span><br/></h1><b><span style='color:#1f7044;'>{$row['activityName']}</span></b>
		</td></tr>
		<tr><td align='left'><span>"; echo substr_replace($activityInfo,'...',80); echo "<br/><a href='Activities.php#{$row['activityDay']}{$row['activityMonth']}{$row['activityYear']}' style='display:compact; color:#1f7044;'>more</span></a></td></tr></table>";
	}
echo"</td></tr><tr><td align='right'><b><a href='Activities.php' style='display:compact;'><span style='color:#1f7044;'><b>more</b></span></a></b></td></tr></table>";
mysql_close($cxn);

?> 
</td>
</tr>
</table>
<table height="17px"><tr><td></td></tr></table>
<table width="100%" bgcolor="#DDD" height="200px	"><tr><td align="left">Renegade&reg;</td><td align="right">copyright2015 </td></tr></table>	
</body>
</html>


















?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox</title>
<link rel="stylesheet" href="img/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="img/lightbox.js"></script>
<link href="new.css" rel="stylesheet" type="text/css" />
<link href="img/favi.png" rel="icon" type="image/x-icon"/>
<?php 
$off = "	
<div id='memberForm1'  style=' visibility:hidden; height:0px;'>
<table bgcolor='#CCC'><tr align='center'>
<td style='padding:10px; color:#1F7044; font-weight:900' align='left'>Login</td>
<td style='padding:10px' align='right'>
<img src='img/addmem.png' width='30' height='30' onclick='addmem()' style='cursor:pointer'></td>
</tr><tr>
<td>
<form action='index.php' method='post'>
Username</td><td>
|<input type='text' class='new' name='uname' value=''/>
</td></tr><tr><td>
Password</td><td>
|<input type='text' class='new' name='pword' value=''/>
</td></tr><tr><td colspan='2' align='center'>
<input type='submit' value='login' style='border:thin #AAA; text-align:start; color:#999; background-color:#DDD; width:100%; padding:5px; height:30px; text-align:center; cursor:pointer'/>
</form>
</td></tr></table>
</div>
<div id='memberForm2' style=' visibility:hidden; height:0px;'>
<form action='index.php' method='post' enctype='multipart/form-data'>
<table align='center' style='padding:10px' width='500px' bgcolor='#CCCCCC' cellspacing='0'>
<tr align='center'>
<td style='padding:10px; color:#1F7044; font-weight:900' align='left'>Create a GBox Account</td>
<td style='padding:10px' align='right'>
<img src='img/login.png' width='30' height='30' onclick='login()' style='cursor:pointer'></td>
</tr>
<tr>
<td>
Gbox Handle</td><td>|<input type='text' name='gbname' value='$gbname' class='new'/>
</td>
</tr>
<tr>
<td>
Full name</td><td>|<input type='text' name='fname' value='$fname'  class='new'/>
</td>
</tr>
<tr>
<td>
Zone Residing</td><td>|
<select name='zone' class='new'> 
<option value='north central'>North Central
<option value='north east' >North East
<option value='north west'> North West
<option value='south east'>South East
<option value='south south' >South South
<option value='south west'> South  West
</select>
</td>
</tr>
<tr>
<td>
eMail</td><td>|<input type='text' name='email' value='$email'  class='new'/>
</td>
</tr>
<tr>
<td>
Phone</td><td>|<input type='text' name='phone' value='$phone'  class='new'/>
</td>
</tr>
<tr>
<td>
Password</td><td>|<input type='password' name='pword' value=''  class='new'/>
</td>
</tr>
<tr bgcolor='#EEE'>
<td>
<label for='file-upload' class='custom-file-upload'> <i class='fa fa-cloud-upload'></i>Add Picture ID<img id='image' align='right' width='20px' height='auto' style='padding-right:10px'/></label> <input id='file-upload' name='pic'  type='file'/>
<script>document.getElementById('file-upload').onchange = function () 
{
var reader = new FileReader();
reader.onload = function (e) {
document.getElementById('image').src = e.target.result;
};
reader.readAsDataURL(this.files[0]);
};</script>
</td>
<td>
<input type='submit' name='create' value='Create' style='color:#999; background-color:#EEE; border:none; padding:5px; width:100%; height:33px; cursor:pointer;'/>
</td>
</tr>
</table>
</form>
</div>";

$searchform = "function searchV() 
{
	var obj = document.getElementById('searchForm').style
   if(obj.visibility == 'visible')
    {
		obj.visibility = 'hidden';
	 	obj.height = '0px';
	}
   else
    {
		obj.visibility = 'visible';
	 	obj.height = '45px';
		document.getElementById('memberForm1').style.visibility = 'hidden';
		document.getElementById('memberForm1').style.height = '0px';	
		document.getElementById('memberForm2').style.visibility = 'hidden';
		document.getElementById('memberForm2').style.height = '0px';	
	}
}";
$offscript = "
function addmem()
{
	var mf1 = document.getElementById('memberForm1');
	var mf2 = document.getElementById('memberForm2');
   if(	mf1.style.visibility == 'visible') 
    {
		mf2.style.visibility = 'visible';
	 	mf2.style.height = '310px';
		mf1.style.visibility = 'hidden';
	 	mf1.style.height = '0px';
	}
}
function login()
{
	var mf1 = document.getElementById('memberForm1');
	var mf2 = document.getElementById('memberForm2');
   if(	mf2.style.visibility == 'visible') 
    {
		mf1.style.visibility = 'visible';
	 	mf1.style.height = '160px';
		mf2.style.visibility = 'hidden';
	 	mf2.style.height = '0px';
	}
}
function memberV() 
{
	var mf1 = document.getElementById('memberForm1');
	var mf2 = document.getElementById('memberForm2');
   if(	mf1.style.visibility == 'visible') 
    {
		mf1.style.visibility = 'hidden';
	 	mf1.style.height = '0px';
		document.getElementById('searchForm').style.visibility = 'hidden';
		document.getElementById('searchForm').style.height = '0px';
	}
   else
    {
		mf1.style.visibility = 'visible';
	 	mf1.style.height = '160px';
		mf2.style.visibility = 'hidden';
	 	mf2.style.height = '0px';
		document.getElementById('searchForm').style.visibility = 'hidden';
		document.getElementById('searchForm').style.height = '0px';
	}
}";
?>
</head>
<body>
<table align='center' id='cubes450' width='680px' border="0" cellspacing="0">
<tr height='30px'>
	<td	 align='left' width='50px'>
		<form action='index.php' method='post'>
        <input type='submit' value='Home' class='home'	/>
		<?php include('session.inc')?></td>
    <td align='left' width='50px'>
		<form action='music.php' method='post'>
        <input type='submit' value='Music' class='link' />
		<?php include('session.inc')?>
	</td>
    <td align='left' width='50px'>
		<form action='people.php' method='post'>
        <input type='submit' value='People' class='link' />
		<?php include('session.inc')?>
	</td>
    <td align='left' width='50px'>
		<form action='Labels.php' method='post'>
        <input type='submit' value='Labels' class='link' />
		<?php include('session.inc')?>
	</td>
    <td align='left' width='30px'>
		<form action='Activities.php' method='post'>
        <input type='submit' value='Activities' class='link'/>
		<?php include('session.inc')?>
	</td>
        <td width='324px'>
	</td>    
	<td width='30px' height='30px' align='center'>
			<button onclick='searchV()' style='background-image:url(img/srch.png);  background-position:center; background-repeat:no-repeat; border:none; height:30px; width:30px; cursor:pointer; background-color:#ddd'></button>
	</td>    
	<td width='30px' height='30px' align='center'>
			<button onclick='memberV()' style='background-image:url(<?php if ($loginStatus!='on') echo "img/member.png"; else echo "mempic/".$Pic;?>); background-size:contain; <?php if ($loginStatus!='on') echo "background-color:#cccccc;"; else echo "background-color:#000000;";?> background-position:center; background-repeat:no-repeat; border:none; height:30px; width:30px; cursor:pointer; border-radius:100px' ></button>
			</td>
	</tr>
    <tr>
	<td colspan="8" align="center" width="700px">
<!--member and search-->
	</td>
</tr>
</table>

</body>
</html>