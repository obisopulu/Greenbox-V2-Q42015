<?php include(".../top.php");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin -Label</title>
<link href="back.css" rel="stylesheet" type="text/css" />
<link href="/home/gbngrcom/public_html/img/favi.png" rel="shortcut icon" type="image/x-icon"/>
</head>
<a name="top"></a>
<body>
<?php
if ($_POST['delete'] == 'Delete')
	{
		$query="DELETE FROM labels WHERE labelID = '{$_POST['theID']}' LIMIT 1";
		$Result = mysql_query($query, $cxn)
		or die("result no work");
		echo "Label data deleted";
	}
else
	{
		echo "Location: Error something went wrong, i just hope u dont get to see this";
	}
?>
</body>
</html>