<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/homepg.css"> <!-- Link to your homepg.css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://diyrex.github.io/CSS-Library/colors.css">
   
    <title>Document</title>
</head>
<body>
    <?php require_once '../components/header.php';?>

    <div class="container custom-container"> <!-- Added custom-container class -->
        <div class="row justify-content-center align-items-center"> <!-- Added align-items-center class to vertically center the content -->
            <div class="col-md-6 order-md-last text-center"> <!-- Adjusted column size and order to place the image on the right side -->
                <h1 class="display-4">Wanna Try<br>Some Food?</h1>
                <a href="userregis.php" class="btn btn-primary btn-lg mt-3 rounded-pill">Find a Recipe</a> <!-- Added button with rounded corners -->
            </div>
            <div class="col-md-6 order-md-first text-md-end"> <!-- Adjusted column size and order to place the image on the right side -->
                <img src="../images/hamburger.webp" alt="Image" class="img-fluid mb-3"> <!-- Added image with fluid class -->
            </div>
        </div>
    </div>

</body>
</html>
