<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap-flatly.css">
    <title>Checkuot - Mirror Fashion</title>
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-id">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><!-- <img src="img/logo.png" alt="Mirror Fashion"> -->Mirror Fashion</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-id">
            <ul class="nav navbar-nav">
                <li class="active"><a href="sobre.html">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Perguntas frequentes</a></li>
                <li><a href="#">Entre em contato</a></li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
        <div class="row">
            <h1>Ótima Escolha</h1>
            <p>
                Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra
            </p>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title">Sua compra:</h2>
                </div>
                <div class="panel-body col-sm-4 col-lg-3">
                    <img src="img/produtos/foto1-<?=$_POST['cor']?>.png" class="img-thumbnail img-responsive">
                    <dl>
                        <dt>Produto</dt>
                        <dd><?=$_POST['nome']?></dd>
                        <dt>Preço</dt>
                        <dd id="preco"><?=$_POST['preco']?></dd>
                        <dt>Cor</dt>
                        <dd><?=$_POST['cor']?></dd>
                        <dt>Tamanho</dt>
                        <dd><?=$_POST['tamanho']?></dd>
                    </dl>

                    <div class="form-group">
                        <label for="qt">Quantidade</label>
                        <input id="qt" class="form-control" type="number" min="1" max="99" value="1">
                    </div>

                    <div class="form-group">
                        <label for="total">Total</label>
                        <output id="total" class="form-control"><?= $_POST["preco"]?></output>
                    </div>
                </div>

                <form action="POST" class="col-sm-8 col-lg-9">
                    <div class="row">
                        <fieldset class="col-md-6">
                            <legend>Dados pessoais</legend>

                            <div class="form-group">
                                <label for="nome">Nome completo:</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpf">CPF:</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="sim" name="spam">
                                    Quero receber novidades da Mirror Fashion
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="col-md-6">
                            <legend>Cartão de crédito:</legend>

                            <div class="form-group">
                                <label for="numero-cartao">Número do cartão:</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>

                            <div class="from-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                    <option value="master">MasterCard</option>
                                    <option value="visa">VISA</option>
                                    <option value="amex">American Express</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="validade-cartao"></label>
                                <input type="month" class="form-group" id="validade-cartao" name="validade-cartao">
                            </div>

                        </fieldset>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right btn-lg"><spam class="glyphicon glyphicon-thumbs-up"></spam>Confirmar pedido</button>

                </form>
            </div>
        </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/total.js"></script>

</body>
</html>