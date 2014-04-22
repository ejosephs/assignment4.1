<?php 
include ("top.php"); 
?>
<?php
    $h=date('G');
    $d=date('D');    

    if($d=='Mon'or $d=='Tue'or $d=='Wed'or $d=='Thu' and $h<20 and $h>9) $img= 'open.jpg';
    else if ($d=='Fri' or $d=='Sat' and $h>9 and $h<24) $img='open.jpg';
    else if($d=='Sun' and $h>10 and $h<6) $img='open.jpg';
    else $img='closed.jpg';
?>
<img src="<?php echo $img;?>">
<article id="main">
	<h1>Hours:</h1>
</article>
<table align ="center">
	<thead>
	<tr>
		<th>Hours of Operations</th>
		<th> </th>

	</tr>
	</thead>
        
        <tr>
		<td>Monday - Thursday</td>
		<td>9am - 10pm</td>
        </tr>
        <tr>
		<td>Fridays & Saturdays</td>
		<td>9am - Midnight</td>
        </tr>
        <tr>
		<td>Sundays</td>
		<td>10am - 6pm</td>
        </tr>
</table>            

<?php include ("footer.php"); ?>
</html>
