<html>
	<head>
		<title>Insert Data</title>
	</head>
<body>

	<form action="/create" method="post">
		<input type="hidden" name="_/token" value="<?php echo csrf_token(); ?>">
		
		<table>
			<tr>
				<td>Name</td>
				<td><input type='text' name='name' /></td> 
			</tr>
			<tr>
				<td>Password</td>
				<td><input type='password' name='password' /></td> 
				</tr>
				<tr>
				<td>Age</td>
				<td><input type='text' name='age' /></td>
			</tr>
			<tr> 
 			 <td colspan='2'><input type='submit' value="Add student" /></td> 
		 </tr> 
		</table>
	</form>
</body>
</html>