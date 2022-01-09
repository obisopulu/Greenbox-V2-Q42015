<?php include(".../top.php");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin</title>
<link href="back.css" rel="stylesheet" type="text/css" />
<link href="/home/gbngrcom/public_html/img/favi.png" rel="shortcut icon" type="image/x-icon"/>
</head>
<a name="top"></a>
<body>
<?php 
$sqlactivities = mysql_query("SELECT * FROM activities");
$countactivities = mysql_num_rows($sqlactivities);
$rowactivities=(mysql_fetch_assoc($sqlactivities));
extract($rowactivities);

$sqlsongs = mysql_query("SELECT * FROM songs");
$countsongs = mysql_num_rows($sqlsongs);
$rowsongs=(mysql_fetch_assoc($sqlsongs));
extract($rowsongs);

$sqllabels = mysql_query("SELECT * FROM labels");
$countlabels = mysql_num_rows($sqllabels);
$rowlabels=(mysql_fetch_assoc($sqllabels));
extract($rowlabels);

$sqlpersons = mysql_query("SELECT * FROM persons");
$countpersons = mysql_num_rows($sqlpersons);
$rowpersons=(mysql_fetch_assoc($sqlpersons));
extract($rowpersons);

$sqlsongsA = mysql_query("SELECT DISTINCT songArtist FROM songs");
$countsongsA = mysql_num_rows($sqlsongsA);
$rowsongsA=(mysql_fetch_assoc($sqlsongsA));
extract($rowsongsA);

$sqlsongsP = mysql_query("SELECT DISTINCT songProducer FROM songs");
$countsongsP = mysql_num_rows($sqlsongsP);
$rowsongsP=(mysql_fetch_assoc($sqlsongsP));
extract($rowsongsP);

$sqlsongsB = mysql_query("SELECT DISTINCT songBeatmaker FROM songs");
$countsongsB = mysql_num_rows($sqlsongsB);
$rowsongsB=(mysql_fetch_assoc($sqlsongsB));
extract($rowsongsB);

$sqlsongsG = mysql_query("SELECT DISTINCT songGenre FROM songs");
$countsongsG = mysql_num_rows($sqlsongsG);
$rowsongsG=(mysql_fetch_assoc($sqlsongsG));
extract($rowsongsG);

$sqlsongsY = mysql_query("SELECT DISTINCT songYear FROM songs");
$countsongsY = mysql_num_rows($sqlsongsY);
$rowsongsY=(mysql_fetch_assoc($sqlsongsY));
extract($rowsongsY);

$sqlsongsAl = mysql_query("SELECT DISTINCT songAlbum FROM songs");
$countsongsAl = mysql_num_rows($sqlsongsAl);
$rowsongsAl=(mysql_fetch_assoc($sqlsongsAl));
extract($rowsongsAl);

$sqlDownloads = mysql_query("SELECT DISTINCT  downloadID FROM  downloads");
$countDownloads = mysql_num_rows($sqlDownloads);
$rowDownloads=(mysql_fetch_assoc($sqlDownloads));
extract($rowDownloads);

$sqlUsers = mysql_query("SELECT DISTINCT anonymousID FROM anonymous");
$countUsers = mysql_num_rows($sqlUsers);
$rowUsers=(mysql_fetch_assoc($sqlUsers));
extract($rowUsers);
?>
<table align="center" width="800px" height="113px" >
<tr>
	<td align="left" width="25%">
		 <a href="/home/gbngrcom/public_html/index.php"><<  Go Frontyard  <<</a>
	</td>
    <td width="50%" align="center">
		<img src="/home/gbngrcom/public_html/favi.png" id="imagerad" width="35px" height="35px" draggable="false" dropzone="link" data-icon="gear"/>
	</td>
    <td align="left" width="25%" style="font-size:40px; font-weight:900; color:#CCC; padding:4px;">
                                        Dashboard
                                    </td>
	
</tr>

<table align="center" width="800px">
<tr>
	<td align="left" width="100px">
                            <table align="center"><tr><td align="left" width="100px" bgcolor="#555">
                                        <x align="center"><a href="bsongs.php">Music</a></x>
                                    </td><td align="left" width="100px" bgcolor="#555">
                                        <x align="center"><a href="bpeople.php">People</a></x>
                                    </td><td align="left" width="100px" bgcolor="#555">
                                        <x align="center"><a href="bactivities.php">Activities</a></x>
                                    </td><td align="left" width="100px" bgcolor="#555">
                                        <x align="center"><a href="blabels.php">Labels</a></x>
                                </td>
                            </tr>
                        </table>
	</td></tr><tr>
    <td width="100%">
    <table width='190px' style="float:left; margin-left:2px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Music
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongs?></span><br/>
                Tracks
            </td></tr></table>
    <table width='190px' style="float:left; margin-left:10px" bgcolor="#444">
    	<tr class='color'>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	People
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countpersons?></span><br/>
                People
            </td></tr></table>         
    <table width='190px' style="float:left; margin-left:10px" bgcolor="#444">
    	<tr class='color'>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Labels
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countlabels?></span><br/>
                labels
            </td></tr></table>     
    <table width='190px' style="float:left; margin-left:10px" bgcolor="#444">
    	<tr class='color'>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	Activities
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countactivities?></span><br/>
                Event
            </td></tr></table>  
    <table width='190px' style="float:left; margin-left:2px; margin-top:10px" bgcolor="#444">
    	<tr class='color'>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	Producers
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsP?></span><br/>
                Producers
            </td></tr></table> 
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr class='color'>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Artists
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsA?></span><br/>
                Artists
            </td></tr></table> 
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr class='color'>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	Beatmakers
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsB?></span><br/>
                Beatmakers
            </td></tr></table>
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr class='color'>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Genres
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsG?></span><br/>
                Genres
            </td></tr></table> 
    <table width='190px' style="float:left; margin-left:2px; margin-top:10px" bgcolor="#444">
    	<tr class='color'>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Years
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsY?></span><br/>
                Years
            </td></tr></table>
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr class='color'>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	Albums
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsAl?></span><br/>
                Albums
            </td></tr></table> 
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr class='color'>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Downloads
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countDownloads?></span><br/>
                Files
            </td></tr></table>
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr class='color'>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	Anonymous
            </td></tr><tr class='color'><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countUsers?></span><br/>
                Users
            </td></tr></table>   
       </td>
    <tr>
<?php 
$b = strlen($countsongs);
$a = pow(10,$b);
$songs= ($countsongs/$a)* 100;

$b = strlen($countpersons);
$persons= ($countpersons/$a)* 100;

$b = strlen($countactivities);
$activities= ($countactivities/$a)* 100;

$b = strlen($countlabels);
$labels= ($countlabels/$a)* 100;

?>
	</td>
</tr>
</table>
<table width="800px" align="center"  bgcolor="#444"><tr>
<td align="center" width="<?php echo $songs?>%" bgcolor="#666">Songs</td>
<td align="center" width="<?php echo $persons?>%" bgcolor="#777">People</td>
<td align="center" width="<?php echo $labels?>%" bgcolor="#888">Labels</td>
<td align="center" width="<?php echo $activities?>%" bgcolor="#999">Activities</td>
</tr></table>

<center><a href="feedback.php"><span style='font-size:20px;'>Feedback</span></a></center>
    	
<?php include('bfooter.inc')?>
<table align="center" height="17px"><tr><td align="center" >
<form action="backyard.php" method="post">
<textarea name='sql' cols='100' rows='5' value='' maxlength='' style='color:#444; background-color:#CCC; border:none; padding:5px'></textarea><br />
<input type="submit" value="Query" class="new" />
</form>
</td></tr></table>
<?php extract($_POST); if ($sql != '') {mysql_query("$sql") or die('O_o Oops!');}?>
<table width="100%" bgcolor="#444"><tr><td align="left">Renegade&reg;</td><td align="right">copyright2015 </td></tr></table>
</body>
</html>
