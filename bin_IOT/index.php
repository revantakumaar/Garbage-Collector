<?php
include 'connect_db.php';



$sql = 'SELECT * FROM bin';
         
$query = mysqli_query($connection, $sql);
 
if (!$query) {
    die ('SQL Error: ' . mysqli_error($connection));
}
 
echo '<html>
		<head>
		<meta http-equiv="refresh" content="5" >
			<title>status view</title>
			<style>
				body {
					font-family: "segoe ui";
					background-color: #AED6F1;
					
					}
				h1 {
					color: blue;
					padding: 15px 10px;
					text-align:center;
					}
				table {
					margin:auto;
					margin-top: 15px;
					border-collapse: collapse;
				}
				th, td {
					border: 1px solid #dadada;
					padding: 5px 10px;
				}
				th {
					background-color: #f3f3f3;
				}
				td{
					text-align: center;
					color:;
				}
			</style>
		<head>
		<body>
		<h1 style="background-color:#1A5276;"><p style="color:red;">IOT AUTONOMOUS GARBAGE/PACKAGE CARRIER SYSTEM</p></h1>
		<h1> Garbage Bin: </h1>
		<table>
        <thead>
            <tr>
                <th>bin_id</th>
				<th>bin_status</th>
				<th>bin_level</th>
				<th>bin_location</th>
               
            </tr>
        </thead>
        <tbody>';
         
while ($row = mysqli_fetch_assoc($query))
{
    echo '<tr>
            <td>'.$row['bin_id'].'</td>';
		if($row['bin_status']==1)
		{ echo '<td style="color:red;"><b>Filled</b></td>';}
		else{
			echo' <td style="color:green;"><b>Not filled</b></td>';
		}
	echo'
            <td>'.$row['bin_level'].'</td>
			<td>'.$row['bin_location'].'</td>
        </tr>';
}

echo '
    </tbody>
</table>';
$sql = 'SELECT * FROM bot';
         
$query = mysqli_query($connection, $sql);
 
if (!$query) {
    die ('SQL Error: ' . mysqli_error($connection));
}echo'
<h1> Garbage Collector: </h1>
<table>
        <thead>
            <tr>
                <th>bot_id</th>
				<th>bot_status</th>
				<th>bot_level</th>
				<th>bot_location</th>
               
            </tr>
        </thead>
        <tbody>';
         
while ($row = mysqli_fetch_assoc($query))
{
    echo '<tr>
            <td>'.$row['bot_id'].'</td>
            <td>'.$row['bot_status'].'</td>
            <td>'.$row['bot_level'].'</td>
			<td>'.$row['bot_location'].'</td>
        </tr>';
}

echo '
    </tbody>
</table>';
echo '
</body>
</html>';

 

mysqli_close($connection);
?>
