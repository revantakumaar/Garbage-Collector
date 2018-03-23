<?php
$conn = mysqli_connect("localhost", "root", "", "bin_iot");  
$data[] = array('bin level','count');
$sql = "SELECT bin_level, count(*) as number FROM bin_t WHERE bin_id= 2 GROUP BY bin_level "; 
$query = mysqli_query($conn,$sql);
while($result = mysqli_fetch_array($query))
{
$data[] = array((int)$result['bin_level'],(int)$result['number']);
  
}

//	$data = array($data);			
echo json_encode($data);
?>
