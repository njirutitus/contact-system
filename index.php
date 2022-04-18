<?php include_once 'header.php'; ?>

<div class="container">
    <h1>Contact System</h1>
    <?php include_once 'feedback.php';?>
    <form action="save.php" method="post">
        <div class="grid">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>
            <span>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
</div>
<?php include_once 'footer.php'; ?>