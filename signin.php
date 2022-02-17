<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <meta name="generator" content="Hugo 0.88.1" />
    <title>Botaris | Equipment Repair - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/signin.css" />
</head>

<body class="text-center">
    <main class="form-signin">
        <form action="login.inc.php" method="POST">
            <img class="mb-4" src="img/LogoBotarisLarge.png" alt="" />
            <h1 class="h3 mb-3 fw-normal">Please log in</h1>
            <section class="signup-form">
                <div class="form-floating">
                    <input type="text" class="form-control" id="nameUser" placeholder="nameUser" />
                    <label for="nameUser">User Name</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password" />
                    <label for="floatingPassword">Password</label>
                </div>

                <p>Don't have an account? <a href="signup.php"> Signup</a></p>
                <button class="w-100 btn btn-lg btn-success" type="submit">
                    Log in
                </button>
        </form>
        </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

</html>