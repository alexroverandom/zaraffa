<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<header>
			<h1><?php echo "Hello Evgeniya" ?></h1>
			<div>
				<form method="post" action="auth.php">
					
					<label>Login<input class="jLogin" name="login" type="text"/></label>
					
					<br/>
					<label>Password<input class="jPassword" name="password" type="password" /></label>
					
					<br/>
					<input type="submit" class="jSend" disabled />
				</form>
				<hr/>
			</div>
		</header>
		<footer></footer>
		<script type="text/javascript" src="/zaraffa/js/libs/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="/zaraffa/js/layout.js"></script
	</body>
</html>


