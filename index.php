<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="refoEnter your rm">
<form action="login.php" class="reform" target="_blank" method="POST">
<div>
<label for="email">Email:</label>
<input type="email" name="email" id="email" placeholder="Enter your email" required maxlength="35">
</div>
<div>
<label for="password">password:</label>
<input type="password" name="password" id="password" placeholder="password" required minlength="8">

</div>
<div>
<input type="checkbox" name="email alert" id="email alert" required>
<label for="email alert">Email Alert </label>
</div>
<div>
<button type="Reset">Reset</button>
<button type="Submit">Submit</button>
</div>
</form>
</div>
</body>
</html>