<?php include "../connect_db.php"; ?>
<h1>Admin site</h1>

<p>
    Here lie secrets

</p>

<h2>Users</h2>
<?php
    echo "<table>";
    echo "<tr><th>Username</th><th>Password</th><th>Role</th><th>Credit card</th></tr>";
    foreach ($user_data as $user => $data) {
        // echo user data as table
        echo "<tr><td>" . $user . "</td><td>" . $data["password"] . "</td><td>" . $data["role"] . "</td><td>" . $data["credit_card"] . "</td></tr>";
    }
    echo "</table>";
?>