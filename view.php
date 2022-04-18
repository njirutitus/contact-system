<?php include_once 'header.php'; ?>
<div class="container">
    <h1>All Messages</h1>
    <figure>

        <?php
     include_once 'feedback.php';
     $stmt = $db->query('SELECT * FROM feedback');
     $feedbacks = $stmt->fetchAll();
     echo '<table>';
     echo '<tr>';
     echo '<th>Name</th>';
     echo '<th>Email</th>';
     echo '<th>Message</th>';
     echo '<th>Actions</th>';
        echo '</tr>';
        foreach($feedbacks as $feedback){
            echo '<tr>';
            echo '<td>'.$feedback['name'].'</td>';
            echo '<td>'.$feedback['email'].'</td>';
            echo '<td>'.$feedback['message'].'</td>';
            echo '<td><a href="delete.php?id='.$feedback['id'].'">Delete</a> <a href="edit.php?id='.$feedback['id'].'">Edit</a> </td>'; 
            echo '</tr>';
        }
     echo '</table>';

     
     ?>
    </figure>
</div>
<?php include_once 'footer.php'; ?>