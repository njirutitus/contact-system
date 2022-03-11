<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Contact System</h1>
    <?php
        print '<h2>All messages</h2>';
        $messages = array();
        $message = array(
            'name' => 'John',
            'email' => 'john@example.com',
            'message' => 'Hello, world!'
        );
        array_push($messages, $message);
        echo '<table><tr><th>Name</th><th>Email</th><th>Message</th></tr>';
        foreach ($messages as $message) {
            echo '<tr>';
            echo '<td>' . $message['name'] . '</td>';
            echo '<td>' . $message['email'] . '</td>';
            echo '<td>' . $message['message'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    ?>
</body>
</html>