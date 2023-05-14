<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="box">
            <span class="borderline"></span>
            <form action="login_session.php" method="post">
                <h2>Sign in</h2>
                <div class="inputbox">
                    <input type="text" name="username" required id="username">
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputbox">
                    <input type="password" name="password" required id="password">
                    <span>Password</span>
                    <i></i>
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
    </body>
</html>