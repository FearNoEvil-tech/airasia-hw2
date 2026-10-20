<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gift Card Details | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="card-list.php">AirAsia Rewards</a>
            <nav class="main-nav" aria-label="Main navigation">
                <ul>
                    <li><a href="card-list.php">Gift Cards</a></li>
                    <li><a href="card-add.php">Add Gift Card</a></li>
                    <li><a href="login.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <a class="back-link" href="card-list.php">&larr; Back to Gift Cards</a>

        <article class="panel">
            <h1>Bookstore Gift Card</h1>

            <!-- Read-only page: values are plain text, not form fields -->
            <div class="details">
                <img src="images/gift-card.png" alt="Bookstore Gift Card">

                <dl>
                    <dt>Card Name</dt>
                    <dd>Bookstore Gift Card</dd>

                    <dt>Card Type</dt>
                    <dd>Retail</dd>

                    <dt>Card Value</dt>
                    <dd>$25.00</dd>

                    <dt>Points Required</dt>
                    <dd>2,500</dd>
                </dl>
            </div>

            <div class="button-row">
                <a class="button" href="card-update.php">Update Gift Card</a>
                <a class="button button-secondary" href="card-list.php">Back to List</a>
            </div>
        </article>
    </main>
</body>

</html>
