<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lima Mail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <div class="py-3 text-center">
            <img class="d-block mx-auto mb-2" src="logo.png" width="72" height="72" alt="" >
            <h2>Lima Mail</h2>
            <p class="lead">Seu app de envio de e-mails particular!</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card-body" style="font-weight:bold;">

                    <form action="processa_envio.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="para" class="form-label">Para</label>
                            <input name="para" type="text" class="form-control" id="para" placeholder="maria@dominio.com.br">
                        </div>

                        <div class="form-group mb-3">
                            <label for="assunto" class="form-label">Assunto</label>
                            <input name="assunto" type="text" class="form-control" id="assuntos" placeholder="Assunto do e-mail">
                        </div>

                        <div class="form-group mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea name="mensagem" id="mensagem"  class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-large">Enviar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>