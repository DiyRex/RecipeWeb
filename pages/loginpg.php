<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/loginpg.css"> <!-- Link to your loginpg.css file -->
    <title>Login Page</title>
</head>
<body>
    <?php require_once '../components/header.php';?>

    <div class="container">
        <div class="row justify-content-center mt-5"> <!-- Center the column -->
            <div class="col-md-4 text-end"> <!-- Align the column content to the right -->
                <div class="login-box p-4 rounded">
                    <h2 class="text-center mb-4">LOGIN</h2>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <a href="#" class="form-link">Forgot password?</a>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
