<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Gift Card | AirAsia Rewards</title>
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
        <a class="back-link" href="card-details.php">&larr; Back to Gift Card Details</a>

        <section class="panel form-panel" aria-labelledby="update-heading">
            <h1 id="update-heading">Update Gift Card</h1>
            <p class="required-note">Edit the values below. All fields are required.</p>

            <!-- Static site: submitting simulates saving by going to card-list.php -->
            <form action="card-list.php" method="post">
                <!-- Identifies which record is being edited; hidden, so it cannot be changed -->
                <input type="hidden" name="cardId" value="3">

                <div class="form-group">
                    <label for="cardName">Card Name</label>
                    <input type="text" id="cardName" name="cardName" maxlength="100"
                        value="Bookstore Gift Card" required>
                </div>

                <div class="form-group">
                    <label for="cardType">Card Type</label>
                    <select id="cardType" name="cardType" required>
                        <option value="">-- Select a card type --</option>
                        <option value="Retail" selected>Retail</option>
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
                        value="25.00" required>
                </div>

                <div class="form-group">
                    <label for="points">Points Required</label>
                    <input type="number" id="points" name="points" min="0" step="1"
                        value="2500" required>
                </div>

                <div class="button-row">
                    <button type="submit" class="button">Submit</button>
                    <a class="button button-secondary" href="card-details.php">Cancel</a>
                </div>
            </form>
        </section>
    </main>
</body>

</html>
