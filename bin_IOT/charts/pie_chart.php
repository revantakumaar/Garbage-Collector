<?php
$conn = mysqli_connect("localhost", "root", "", "bin_iot");  
$sql = "SELECT bin_id, count(*) as number FROM bin_t WHERE bin_status = 1  GROUP BY bin_id  "; 
$query = mysqli_query($conn,$sql);
while($result = mysqli_fetch_array($query))
{
  $rows[]=array("c"=>array("0"=>array("v"=>$result['bin_id'],"f"=>NULL),"1"=>array("v"=>(int)$result['number'],"f" =>NULL)));
  
}

echo $format = '{
"cols":
[
{"id":"","label":"bin_id","pattern":"","type":"string"},
{"id":"","label":"Number","pattern":"","type":"number"}
],
"rows":'.json_encode($rows).'}';

	

?>








