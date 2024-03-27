<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/adminreg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://diyrex.github.io/CSS-Library/colors.css">
   
    <title>Document</title>
</head>
<body>
    <?php require_once '../components/header.php';?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12"> <!-- Adjust column size based on screen size -->
                <div class="registration-form bg-light rounded p-4">
                    <h2 class="text-center mb-4">User Registration Form</h2>
                    <form>
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-4 col-form-label">Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="contact" class="col-sm-4 col-form-label">Contact:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="contact" name="contact">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-4 col-form-label">User Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Password:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
