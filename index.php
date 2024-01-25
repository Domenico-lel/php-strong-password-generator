<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <?php
        function generateRandomPassword() {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=';
            $password = '';

            for ($i = 0; $i < 12; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $password .= $characters[$index];
            }

            return $password;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $generated_password = generateRandomPassword();
        }
    ?>
</head>

<body>
    <h1>Password Generator</h1>

    <?php if (isset($generated_password)): ?>
        <h2>Generated Password:</h2>
        <p><?php echo $generated_password; ?></p>
    <?php endif; ?>
</body>

</html>