<?php include(".../top.php");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/home/gbngrcom/public_html/img/favi.png" rel="shortcut icon" type="image/x-icon"/>
<title>GreenBox || Admin -Music</title>
<link href="back.css" rel="stylesheet" type="text/css" />
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
                                        delete music
                                    </td>
	
</tr>
</table>
<?php 
if ($_POST['songTitle'] == '' or $_POST['songArtist'] == '' or $_POST['songAlbum'] == '') 
	{?>
		<form method="POST" action="deletemusicprocessor.php">
		<table align="center" bgcolor="#444"><tr>
		<td style="padding:5px; font-size:12px;">SongTitle(50)<br />
		<div  style="float:left;"><input size="10" type='text' name='songTitle' maxlength='50' value='' style="color:#444; background-color:#CCC; border:none; padding:5px"></div>
		</td><td style="padding:5px; font-size:12px;">SongArtist(50)<br/>
		<div  style="float:left;"><input size="10" type='text' name='songArtist' maxlength='50' value='' style="color:#444; background-color:#CCC; border:none; padding:5px"></div>
		</td><td style="padding:5px; font-size:12px;">SongArtistFt(100)<br/>
		<div  style="float:left;"><input size="10" type='text' name='songArtistFt' maxlength='50' value='' style="color:#444; background-color:#CCC; border:none; padding:5px"></div>
		</td><td style="padding:5px; font-size:12px;">SongAlbum(50)<br/>
		<div  style="float:left;"><input size="10" type='text' name='songAlbum' maxlength='50' value='' style="color:#444; background-color:#CCC; border:none; padding:5px"></div>
		</td><td style="padding:5px; font-size:12px;">Extract<br/>
		<div  style="float:left;"><input name="extract" type='submit' value="Extract" style="color:#444; background-color:#CCC; border:none; padding:15px 15px"></div>
		</td>
		</tr></table>
		</form>
<?php 
	}
else
	{
		$query = "SELECT * FROM songs WHERE songTitle LIKE '%{$_POST['songTitle']}%' OR songArtist LIKE '%{$_POST['songArtist']}%' OR songAlbum LIKE '%{$_POST['songAlbum']}%' OR songArtistFt LIKE '%{$_POST['songArtistFt']}%'";
		$result = mysql_query($query, $cxn)
			or die("result no work people");
$nr = mysql_num_rows($result);		
	if ($nr > 0)
	{
		echo"<table align='center' bgcolor='#444'>
		<tr  bgcolor='#555' height='11px'>
        <td width='' style='padding:5px 5p;'>Song Title</td>
        <td width='auto' style='padding:5px 5p;'>Song Artist</td>
        <td style='padding:5px 5p;'>Song ArtistFt</td>
        <td style='padding:5px 5p;'>Song Album</td>
		<td style='padding:5px 5p; background-color:#733;'>Delete</td>
		</tr>";
	$r = 1;
	?><form action="bmdelete.php" method="post"><?php
	while($row = mysql_fetch_array($result))
		{
			extract($row);
			$c= $r%2;?>
	 		<tr bgcolor='<?php if ($c==0) echo "#666"; else echo "#777" ?>'>
    	    <td style="padding:0px 5px;"><?php echo trim($songTitle)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($songArtist)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($songArtistFt)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($songAlbum)?></td>
	        <td style='padding:5px 5p; background-color:#733;'><input type='hidden' name='theID' value='<?php echo $songID ?>'/><input type="submit" name="delete" value="Delete" style="margin-left:20px; cursor:pointer; border:none; background-color:#D55; color:#CCC; padding:10px"/><input type="submit" name="" value="" style="margin-left:20px; cursor:pointer; border:none; background-color:#D55; color:#CCC; padding:10px"/></td>
	        </tr>
	        <?php $r++; } ?>
	        </table><form>
			<?php 
		}
	else
		{
			echo '<center>you search well nw bros</center>';
			echo"<form method='POST' action='deletemusicprocessor.php'>
		<table align='center' bgcolor='#444'><tr>
		<td style='padding:5px; font-size:12px;'>SongTitle(50)<br />
		<div  style='float:left;'><input size='10' type='text' name='songTitle' maxlength='50' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
		</td><td style='padding:5px; font-size:12px;'>SongArtist(50)<br/>
		<div  style='float:left;'><input size='10' type='text' name='songArtist' maxlength='50' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
		</td><td style='padding:5px; font-size:12px;'>SongArtistFt(100)<br/>
		<div  style='float:left;'><input size='10' type='text' name='songArtistFt' maxlength='50' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
		</td><td style='padding:5px; font-size:12px;'>SongAlbum(50)<br/>
		<div  style='float:left;'><input size='10' type='text' name='songAlbum' maxlength='50' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
		</td><td style='padding:5px; font-size:12px;'>Extract<br/>
		<div  style='float:left;'><input name='extract' type='submit' value='Extract' style='color:#444; background-color:#CCC; border:none; padding:15px 15px'></div>
		</td>
		</tr></table>
		</form>";
		}

	}
?>
<?php include('bfooter.inc')?>