<?php
$conn=mysqli_connect("localhost","root","","engigyan");
$s1=$_REQUEST["n"];
$select_query="select * from search where name like '%".$s1."%'";
$sql=mysqli_query($conn,$select_query) or die (mysqli_error());
$s="";
while($row=mysqli_fetch_array($sql))
{
	$s=$s."
	<a class='link-p-colr' href='".$row['url']."'>
		<div class='live-outer'>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	<p>".$row['name']."</p>
                    </div>
                </div>
            </div>
	</a>
	"	;
}
echo $s;
//<a href='pview.php?id=".$row['id']."&productname=".$row['productname']."'>".$row['productname']."></a>
//<p>".$row['productname']."</p><br>	<p>".$row['producttotalprice']."</p>
?>