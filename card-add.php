<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Gift Card | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="card-list.php">AirAsia Rewards</a>
            <nav class="main-nav" aria-label="Main navigation">
                <ul>
                    <li><a href="card-list.php">Gift Cards</a></li>
                    <li><a href="card-add.php" aria-current="page">Add Gift Card</a></li>
                    <li><a href="login.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <a class="back-link" href="card-list.php">&larr; Back to Gift Cards</a>

        <section class="panel form-panel" aria-labelledby="add-heading">
            <h1 id="add-heading">Add a New Gift Card</h1>
            <p class="required-note">All fields are required. The Card ID is generated automatically.</p>

            <!-- Static site: submitting simulates saving by going to card-list.php -->
            <form action="card-list.php" method="post">
                <div class="form-group">
                    <label for="cardName">Card Name</label>
                    <input type="text" id="cardName" name="cardName" maxlength="100"
                        placeholder="e.g., Bookstore Gift Card" required>
                </div>

                <div class="form-group">
                    <label for="cardType">Card Type</label>
                    <select id="cardType" name="cardType" required>
                        <option value="">-- Select a card type --</option>
                        <option value="Retail">Retail</option>
                        <option value="Dining">Dining</option>
                        <option value="Food &amp; Beverage">Food &amp; Beverage</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Grocery">Grocery</option>
                        <option value="Travel">Travel</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cardValue">Card Value ($)</label>
                    <input type="number" id="cardValue" name="cardValue" min="0" step="0.01"
                        placeholder="25.00" required>
                </div>

                <div class="form-group">
                    <label for="points">Points Required</label>
                    <input type="number" id="points" name="points" min="0" step="1"
                        placeholder="2500" required>
                </div>

                <div class="button-row">
                    <button type="submit" class="button">Submit</button>
                    <a class="button button-secondary" href="card-list.php">Cancel</a>
                </div>
            </form>
        </section>
    </main>
</body>

</html>
