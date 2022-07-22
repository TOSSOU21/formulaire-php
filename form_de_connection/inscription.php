<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="login-form">

    <?php
   
        if(isset($_GET['login_err']))
        {
            $err = htmlspecialchars($_GET['login_err']);
            switch($err)
            {
                case 'success':
                    ?>
                    <div class="alert alert-success">
                        <strong>success</strong> inscription reusssi !
                    </div>
                <?php
                break;    

                case 'password':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Errreur</strong> email non valide
                    </div>
                <?php
                break;    

                case 'emeil_length':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Errreur</strong> email trop long
                    </div>
                <?php
                break;    

                case 'pseudo_length':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Errreur</strong> pseudo trop long
                    </div>
                <?php
                break;    

                case 'already':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Errreur</strong> compte deja existant 
                    </div>
                <?php
                break;    
            }
            
        }


    ?>
        <form action="connection.php" method="post">
            <h2 class="text-center">Connection</h2>
            <div class="form-group">
                <input type="email" name="email"  class="form-control" placeholder="email" required="required" autocomplete="off">
            </div>

            <div class="form-group">
                <input type="password" name="password"  class="form-control" placeholder="password" required="required" autocomplete="off">
            </div>

            <div class="form-group">
                <input type="password" name="password"  class="form-control" placeholder="password" required="required" autocomplete="off">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Connection</button>
            </div>
            
        </form>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>