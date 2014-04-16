<?php 
include ("top.php"); 
?>

<article id="main">
	<h1>Hours of Operation:</h1>
<table>
<?php
$file=fopen("Rates.csv","r");
?>
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
                
</article>

<aside id="other">
<h2>Aside</h2>

<p>Aside Paragraph</p>
</aside>

<?php include ("footer.php"); ?>
</html>
