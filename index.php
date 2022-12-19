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
    <div class="container text-white">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="censoredword.php" method="GET">
                    <legend class="fw-bold">Bad Words [GET]</legend>
                    <div class="my-3">
                        <label for="" class="form-label fw-bold">Write a sentence:</label>
                        <input type="text" class="form-control" name="sentence">
                    </div>
                    <div class="my-2">
                        <label for="" class="form-label fw-bold">Bad Words:</label>
                        <input type="text" class="form-control" name="censored">
                    </div>
                    
                        <button class="btn btn-light text-center">Send</button>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>