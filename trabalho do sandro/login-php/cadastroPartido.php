<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Urna sandro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <h3 class="title has-text-grey"><a href="https://www.justicaeleitoral.jus.br/urna-eletronica/"target="_blank">URNA</a></h3>
                      <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                    </div>
                    <div class="link">
                    <h2 class="texth3">Quer ver nosso candidatos? </h2>
                    <h4 class="texth2"><a href="telascandidatos.php"><u href="telascandidatos.php">Venha ver agora com apenas um click</u></h4></a>
                    </div>
                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="Sigla" type="text" class="input is-large" placeholder="Sigla">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="cor" type="text" class="input is-large" placeholder="Cor">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="Numero" class="input is-large" type="password" placeholder="Número">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>