<?php 
include 'dbcon.php';
if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname']; 
	$email=$_POST['email']; 
	$dateofbirth=$_POST['dateofbirth']; 
	$gender=$_POST['gender']; 
	$knownlanguage=$_POST['knownlanguage']; 
	$tenper=$_POST['tenper'];
	$tweper=$_POST['tweper'];


		$insert= "insert into registration(firstname, lastname, email, dateofbirth, gender, knownlanguage, tenper, tweper)
		values('$firstname','$lastname','$email','$dateofbirth','$gender','$knownlanguage','$tenper','$tweper')";
		$sql = $MySQLiconn->query($insert);
		
		if($sql)

	{
		?>
			<script>alert('<?php echo 'Dear '.$firstname.' Your Inquiry Sent Successfully. Thankyou !!!';?>');
			window.location.href='../home.php';	</script>
		<?php 
	}

	else
		{ echo 'Error Occured Try again';
		}
}
?>