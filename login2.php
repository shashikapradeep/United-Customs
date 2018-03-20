<html>
	<head>
		<title>My first PHP website</title>
        <style>
            body
            {
      background-repeat: no-repeat;}
        </style>
	</head>
	<body background="back24.jpg">
  
       <br/> <center><h2>Login Page</h2></center><br/>
		<form action="checklogin.php" method="post">
			<center>
                <fieldset>
            Enter Username: <input type="text" name="username" required="required"/> <br/><br/>
			Enter Password: <input type="password" name="password" required="required" /> <br/><br/><br/>
            <input type="submit" value="Login"/>
                </fieldset>    
            </center>
		</form>
	</body>
</html>