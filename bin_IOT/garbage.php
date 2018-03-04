<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<style>
</style>


<body>
<div class="flex-container">
<header>
  <h1>IOT-AUTONOMOUS GARBAGE / PACKAGE CARRIER SYSTEM</h1>
</header>
<div class="row">
  <div class="column" style="background-color:;">
    <h2>GARBAGE BIN 1</h2>

<div class="container">
<div class="progress vertical">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
  </div>  
</div> 
</div>
  </div>
  <div class="column" style="background-color:;">
    <h2>GARBAGE BIN 2</h2>
<div class="container">
<div class="progress vertical">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
  </div>  
</div>	
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:;">
    <h2>GARBAGE BIN 3</h2>
<div class="container">
<div class="progress vertical">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
  </div>  
</div>	
  </div>
  </div>
  <div class="column" style="background-color:;">
    <h2>GARBAGE BIN 4</h2>
    <div class="container">
<div class="progress vertical">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
  </div>  
</div>	
  </div>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:;">
    <h2>GARBAGE BIN </h2>
    <?php
include 'connect_db.php';
$sql = 'SELECT * FROM bin';
         
$query = mysqli_query($connection, $sql);
 
if (!$query) {
    die ('SQL Error: ' . mysqli_error($connection));
}
 
echo '
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

?>
  </div>
  <div class="column" style="background-color:;">
    <h2>GARBAGE COLLECTOR </h2>
    <?php
		$sql = 'SELECT * FROM bot';
         
$query = mysqli_query($connection, $sql);
 
if (!$query) {
    die ('SQL Error: ' . mysqli_error($connection));
}echo'
<table >
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
mysqli_close($connection);
	?>
  </div>
</div>


<footer>amigos</footer>
</div>

</body>
</html>
