<!DOCTYPE HTML>
<html>
    <head>
        <title>Spam Form google</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div class="w-50 p3 mt-5 mx-auto">
            <form class="form-signin" action="bot.php" method="POST">
                <div class="text-center mb-4">
                    <h1>Bot para spammar forms do google</h1>
                </div>
                <div class="form-label-group mt-3">
                    <input class="form-control" type="text" name="url" placeholder="URL">
                </div>
                <div class="form-label-group mt-3">
                    <input class="form-control" type="text" name="nome" placeholder="Nome">
                </div>
                <div class="form-label-group mt-3 mb-3">
                    <input class="form-control" type="text" name="qtdVotos" placeholder="votos">
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-block">Vota</button>
            </form>
        </div>
        <script>
            function buscaInput(){
                // let input = $("input[name=entry.]");
                //procurar uma forma de pegar o entry.244511147(name) do input hidden do forms e enviar pro php
                // await sleep(20000);
                // return;
            }
        </script>
    </body>
</html>