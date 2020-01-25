<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="public/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>Tinder things</title>
    <style>

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">

        <form action="?page=register" method="POST">
            <div class="messages">
                <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                ?>
            </div>
            <div id ="napis">

                <h1><span style="color: white">Witaj w rejestracji!</span></h1>
                <h4><span style="color: white">Utwórz nowe konto</span></h4>
            </div>

            <div class="form-group">

                <input name="name" class="form-control" type="text" placeholder="Nazwa">


            </div>
            <div class="form-group">
            <input name="email" class="form-control" type="email" placeholder=" Email">
            </div>
            <div class="form-group">
                <input name="email2" class="form-control" type="email" placeholder=" Email">
            </div>
            <div class="form-group">
            <input name="password" class="form-control" type="password" placeholder="Haslo">
            </div>
            <div class="form-group">
            <input name="password2" class="form-control" type="password" placeholder="Powtórz haslo">

            </div>
            <div class="form-group">
               <span style="color: white"> <input type = "checkbox"  name="regulamin" /> <a href="regulamin.php">Akceptuję regulamin
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Zarejestruj się</button>
            </div>

        </form>

    </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>