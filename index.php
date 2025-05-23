<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Coffee Shop Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://images.unsplash.com/photo-1445116572660-236099ec97a0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Roboto', sans-serif;
        }
        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            background-color: rgba(255, 248, 240, 0.9);
            animation: fadeIn 0.5s ease-in-out;
        }
        .form-floating {
            position: relative;
            margin-bottom: 20px;
        }
        .form-floating input {
            border: none;
            border-bottom: 2px solid #6F4E37;
            background-color: transparent;
            padding: 10px 0 10px 0;
            width: 100%;
            font-size: 16px;
        }
        .form-floating input:focus {
            outline: none;
            border-bottom: 2px solid #4B3621;
        }
        .form-floating label {
            position: absolute;
            top: 0;
            left: 0;
            color: #6F4E37;
            font-size: 16px;
            transition: 0.2s;
        }
        .btn-coffee {
            background-color: #6F4E37;
            border: none;
            border-radius: 20px;
            padding: 12px 0;
            color: white;
        }
        .btn-coffee:hover {
            background-color: #4B3621;
        }
        .text-center h1 {
            color: #4B3621;
            font-weight: bold;
            margin-bottom: 24px;
        }
        .text-center h1 i {
            color: #6F4E37;
            margin-right: 10px;
        }
        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }
        .forgot-password a {
            color: #6F4E37;
            text-decoration: none;
        }
        .forgot-password a:hover {
            color: #4B3621;
            text-decoration: underline;
        }
        .coffee-icon {
            font-size: 2.5rem;
            color: #6F4E37;
            margin-bottom: 15px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert alert-danger text-center'>Username and Password don't match!</div>";
        }
    }
?>

<main class="form-signin">
    <form action="login.php" method="post">
        <div class="text-center mb-4">
            <div class="coffee-icon">
                <i class="bi bi-cup-hot-fill"></i>
            </div>
            <h1 class="h3 mb-3 fw-normal"><i class="bi bi-cup-hot"></i> Coffee Shop Login</h1>
        </div>

        <div class="form-floating">
            <input type="username" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required>
            <label for="floatingInput"><i class="bi bi-person-fill"></i> Username</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
            <label for="floatingPassword"><i class="bi bi-lock-fill"></i> Password</label>
        </div>

        <button class="btn btn-coffee w-100 py-2" type="submit">Login</button>

        <div class="forgot-password mt-3">
            <span><a href="#">Forgot password?</a></span>
        </div>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>