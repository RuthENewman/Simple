<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./style.css" type="text/css" /> -->
    <title>Keep it SIMPLE</title>
    <?php $title = "Simple" ?>
</head>
<body>
    <h1 class="main-heading">Keep it <?php echo strtoupper($title); ?></h1>
    <h3 class="secondary-heading">Rate your text for complexity</h3>
    <form>
        <textarea placeholder="Add your text here"></textarea>
        <button type="submit">Check your complexity score</button>
    </form>
</body>
</html>