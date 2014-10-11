<!DOCTYPE html>
<html lang="en">

	<!-- 
		This HTML document creates a web form that takes a user's first, middle, and last names in <input> boxes, submits them via 'post' and
		outputs the result at the bottom of the page.  This is supposed to serve as a simple example of how to manipulate information using
		'post'.
	-->

	<head>
		
		<!-- Internal style sheet below -->
		<style>
			
			button {
				margin-left: 200px;
			}
			
			h1 {
				color: #FF0000;
			}
			
		</style>
		
	</head>

	<body>
	
		<!-- Showing the var_dump of the super global array $_POST -->
		<h1>
			<?php echo 'var_dump($POST) directly below'; ?>
		</h1>
		
		<?php var_dump($_POST); ?> </br> </br>
	
	
		<!--
			Creating the form that will ask the user for their first, middle and last names.  The input for 'First Name' will be stored in
			$_POST['fname'], the input for 'Middle Name' will be stored in $_POST['mname'] and the input for 'Last Name' will be stored in
			$_POST['lname'].
		-->
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>") method="post">
		
			First Name: &nbsp;&nbsp;&nbsp; <input type='text' name='fname'> </br> </br>
			Middle Name:  <input type='text' name='mname'> </br> </br>
			Last Name: &nbsp;&nbsp;&nbsp;&nbsp; <input type='text' name='lname'> </br> </br>
		
			<button type="submit">Submit</button> </br>
		
		</form>

		<!--
			When the form is submitted, the page will reload (because the action on the form returns the information to this page) and the values
			in $_POST will be shown below.
		-->
		<h1>Values in $_POST</h1>
		<?php
			
			if(array_key_exists('fname', $_POST)) {
				echo 'fname = '.$_POST['fname'].'<br>';
			}

			if(array_key_exists('mname', $_POST)) {
				echo 'mname = '.$_POST['mname'].'<br>';
			}
			
			if(array_key_exists('fname', $_POST)) {
				echo 'mname = '.$_POST['lname'].'<br>';
			}
			
		?>
	
	</body>
	
</html>
