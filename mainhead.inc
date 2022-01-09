<script>
function searchV() 
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
	}
}
</script>
</head>
<body>
<table align='center' id='cubes450' width='700px' border="0" cellspacing="0" cellpadding="0">
<tr height='30px'>
	<td	 align='left' width='50px'>
    	<a href='index.php' class="link">Home</a>
    <td align='left' width='50px'>
		<a href='music.php' class='link'>Music</a>
	</td>
    <td align='left' width='50px'>
		<a href='people.php' class='link'>People</a>
	</td>
    <td align='left' width='50px'>
		<a href='labels.php' class='link'>Labels</a>
	</td>
    <td align='left' width='30px'>
		<a href='Activities.php' class='link'>Activities</a>
	</td>
        <td width='324px'>
	</td>    
	<td width='30px' height='30px' align='center'>
			<button onclick='searchV()' style='background-image:url(img/srch.png);  background-position:center; background-repeat:no-repeat; border:none; height:30px; width:30px; cursor:pointer; background-color:#ddd'></button>
	</td>    
	<tr>
	<td colspan="9" align="center" width="700px">
 	<div id='searchForm' style="visibility:hidden; height:0px;">
    <table><tr><td bgcolor='#CCC'>
    	<form action='search.php' method='post'>
		<input class='new' type='text' name='keyword' required="required"  maxlength='50'>
        <input type="submit" value="" style='background-image:url(img/srch.png); background-position:center; background-repeat:no-repeat; border:none; height:30px; width:30px; cursor:pointer; vertical-align:middle; background-color:#CCCCCC' /></form>
	</td>
</tr>
</table>
	</td>    
	<tr>
	<td colspan="9" align="right" width="700px">
<?php if($loginStatus=='new'){echo 'Welcome first-time GreenBox user&nbsp;';}else{echo 'Welcome back '.$anonymous.'&nbsp;';}?>
	</td>
</tr>
</table>