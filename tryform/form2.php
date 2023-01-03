<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2178851c00.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<div class="hero">
<form action="contact.php" method="POST">
    <div class="row">
        <div class="input-group">
            <input type="text" id = "name" name = "name" required>
            <label for="name1"><i class="fa-solid fa-user-secret"></i> Your Name</label>
            <?php $nameErr = "Name is required" ?>
        </div>
        <div class="input-group">
            <input type="text" id = "number1" name = "phone" required>
            <label for="number"><i class="fa-solid fa-phone-square-alt"></i> Phone no</label>
        </div>
    </div>
    <div class="input-group">
        <input type="email" id = "email1" name = "email" required>
        <label for="email"><i class="fa-solid fa-envelope"></i> Your Email</label>
    </div>
    <div class="input-group">
        <textarea id="message" rows="8" name = "message" required></textarea>
        <label for="message"><i class="fa-solid fa-comments"></i> Your message</label>
    </div>
    <button type="submit">Submit<i class="fa-sharp fa-solid fa-paper-plane"></i> </button>
</form>

</body>
</html>