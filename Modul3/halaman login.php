<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="halaman login.css">
</head>
<body>
	<h1>RaDemsi</h1>
	<div class="kotak_login">
        <fieldset>
        <legend>Login Account</legend>
		<form action = "COBA.php" method="post">
            <div class="col-3 label">
                Username
            </div>
			<div class="col-9">
                <input type="text" name="username" class="form_login" placeholder="Username Anda">
            </div>
			<div class="col-3 label">
                Password
            </div>
			<div class="col-9">
                <input type="password" name="password" class="form_login" placeholder="Password Anda">
            </div>

			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
        </form>
        </fieldset>
	</div>
</body>
</html>