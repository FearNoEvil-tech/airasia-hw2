<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gift Cards | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="card-list.php">AirAsia Rewards</a>
            <nav class="main-nav" aria-label="Main navigation">
                <ul>
                    <li><a href="card-list.php" aria-current="page">Gift Cards</a></li>
                    <li><a href="card-add.php">Add Gift Card</a></li>
                    <li><a href="login.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="list-header">
            <h1>Available Gift Cards</h1>
            <a class="button" href="card-add.php">Add Gift Card</a>
        </div>

        <!-- Static sample data: every card links to the one card-details.php page -->
        <ul class="card-grid">
            <li class="gift-card">
                <a href="card-details.php"><img src="images/gift-card.png" alt="Bookstore Gift Card"></a>
                <h2><a href="card-details.php">Bookstore Gift Card</a></h2>
                <p class="points">Points required: <strong>2,500</strong></p>
            </li>
            <li class="gift-card">
                <a href="card-details.php"><img src="images/gift-card.png" alt="Coffee Shop Gift Card"></a>
                <h2><a href="card-details.php">Coffee Shop Gift Card</a></h2>
                <p class="points">Points required: <strong>1,000</strong></p>
            </li>
            <li class="gift-card">
                <a href="card-details.php"><img src="images/gift-card.png" alt="Movie Theater Gift Card"></a>
                <h2><a href="card-details.php">Movie Theater Gift Card</a></h2>
                <p class="points">Points required: <strong>5,000</strong></p>
            </li>
            <li class="gift-card">
                <a href="card-details.php"><img src="images/gift-card.png" alt="Grocery Gift Card"></a>
                <h2><a href="card-details.php">Grocery Gift Card</a></h2>
                <p class="points">Points required: <strong>10,000</strong></p>
            </li>
            <li class="gift-card">
                <a href="card-details.php"><img src="images/gift-card.png" alt="Electronics Gift Card"></a>
                <h2><a href="card-details.php">Electronics Gift Card</a></h2>
                <p class="points">Points required: <strong>5,000</strong></p>
            </li>
            <li class="gift-card">
                <a href="card-details.php"><img src="images/gift-card.png" alt="Dining Gift Card"></a>
                <h2><a href="card-details.php">Dining Gift Card</a></h2>
                <p class="points">Points required: <strong>2,500</strong></p>
            </li>
        </ul>
    </main>
</body>

</html>
