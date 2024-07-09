<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body class="bg-light">
    <div class="container mt-3">
        <div class="row m-0">
            <div class="card w-100 my-auto mx-auto border-0 shadow">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center"><i class="fa-solid fa-id-card"></i>Registration</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/register-action.php" method="post">
                        <div class="mb-3">
                            <label for="first-name" class="form-label">First Nameします</label>
                            <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="last-name" class="form-label">Last Nameします</label>
                            <input type="text" name="last_name" id="last-name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold">Usernameします</label>
                            <input type="text" name="username" id="username" class="form-control fw-bold" requied>
                        </div>

                        <div class="mb-5">
                            <label for="password" class="form-label fw-bold">Passwordします</label>
                            <input type="password" name="password" id="password" class="form-control" minlength="4" aria-describedby="password-info" required>
                            <div class="form-text" id="password-info">
                                Password must be 4 characters long,
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Register</button>
                    </form>

                    <p class="text-center mt-3 small">Registered already? <a href="../views/">Log in</a>.</p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>