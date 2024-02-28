<?php include 'java_script/dbcon.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>enroll form</h1>
        <table class="">
		<thead>
			<tr class="">
				<th>S.No</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>dateofbirth</th>					
				<th>gender</th>
				<th>knownlanguage</th>
				<th>10th%</th>
				<th>12th%</th>
			</tr>
		</thead>
		
		<tbody>
			
			<?php
				$count=0;
				$contactus_table="select * from registration";
		        $contactus_result=$MySQLiconn->query($contactus_table);
			
			while($contactus=$contactus_result->fetch_array())
			{	$count++;
			  ?> 
				<tr class="">
				<td><?php echo $count;?></td>
				<td><?php echo $contactus['firstname'];?></td>
				<td><?php echo $contactus['lastname'];?></td>
				<td><?php echo $contactus['email'];?></td>
				<td><?php echo $contactus['dateofbirth'];?></td> 	
                <td><?php echo $contactus['gender'];?></td> 
                <td><?php echo $contactus['knownlanguage'];?></td> 
				<td><?php echo $contactus['tenper'];?></td>
				<td><?php echo $contactus['tweper'];?></td>
				
			<?php
				} 
			?>			
		</tbody>
		
	</table>
    </div>

</body>

</html>