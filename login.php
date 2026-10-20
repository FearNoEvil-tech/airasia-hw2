<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header class="site-header">
        <div class="header-inner">
            <span class="brand">AirAsia Rewards</span>
        </div>
    </header>

    <main>
        <section class="panel login-panel" aria-labelledby="login-heading">
            <h1 id="login-heading">Member Login</h1>
            <p class="page-intro">Sign in to redeem your reward points for gift cards.</p>

            <!-- Static site: the form only simulates logging in by going to card-list.php -->
            <form action="card-list.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" autocomplete="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" autocomplete="current-password" required>
                </div>

                <button type="submit" class="button">Login</button>
            </form>
        </section>
    </main>
</body>

</html>
