<?php
require('data_validator.php');

$errors = [];

if(isset($_POST['submit'])){
    //validate entries
    $validation = new UserValidator($_POST);
    try {
        $errors = $validation->validateForm();
        //save data to the database if errors are empty (no errors)
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Practice</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="new-user">
        <h2>Create New User</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label>Username:</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? '') ?>">
            <div class="error">
                <?php echo $errors['username'] ?? '' ?>
            </div>

            <label>Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '') ?>">
            <div class="error">
                <?php echo $errors['email'] ?? '' ?>
            </div>

            <label>Phone Number:</label>
            <input type="tel" name="phonenumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php echo htmlspecialchars($_POST['phonenumber'] ?? '') ?>" required>
            <div class="error">
                <?php echo $errors['phonenumber'] ?? '' ?>
            </div>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>