<?php
$getSentence = $_GET["sentence"];
$getCensored = $_GET["censored"];

// echo $getSentence ."<br>";
// echo $getCensored ."<br>";
$censoredSentence = str_replace("sushi", "*****", $getSentence);
$sentenceLenght = strlen($getSentence);
// echo $sentenceLenght;
// echo $censoredSentence;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body class="bg-dark">
    <div class="container mt-4 text-danger text-center">
        <h1> Full Sentence: <span class="text-white"> <?php echo $getSentence ?></span> </h1>
        <h2> Sentence lenght: <span class="text-white"> <?php echo $sentenceLenght?></span></h2>
        <h3> Censored Sentence: <span class="text-white"> <?php echo $censoredSentence ?></span> </h3>
    </div>
</body>
</html>