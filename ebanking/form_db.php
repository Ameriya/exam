<?php
$p=$_GET['p'];
if($p=='adddb'){
		$refer_pass = $_POST['referpass'];
		$get_money = $_POST['getmoney'];
		$nameacc = $_POST['nameaccount'];
		$amount = $_POST['amount'];
		$sql="INSERT INTO tbl_income
		(referpass, getmoney, nameaccount, amount )
		VALUES
		('$refer_pass', '$get_money', '$nameacc', '$amount ' )
		";
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
			mysqli_close($con);
	
	if($result){
			echo "<script type='text/javascript'>";
			echo "alert('Add Income Succesfuly');";
			echo "window.location = 'index.php'; ";
			echo "</script>";
			}
			else{
			echo "<script type='text/javascript'>";
			echo "alert('Error!!');";
			echo "window.location = 'index.php'; ";
			echo "</script>";
			}
}
?>
