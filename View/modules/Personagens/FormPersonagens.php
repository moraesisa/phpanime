<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Personagens</title>
    <style>
        label, input { display: block;}

        body {
            background-image: url("https://cdn.wallpapersafari.com/71/4/ozLYRk.png");
        }
        fieldset {
            position:absolute;
            left:50%;
            top:50%;
            margin-left:-230px;
            margin-top:-200px; 
            font-style: italic;
            background-color: white;
            border-radius: 10px;
            tjhhhr
            box-shadow: 1px 1px 15px;
        }
        label {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
        }
        
        h1 {
            font-size: 40px;
            font-family: Arial, Helvetica, sans-serif;

        }
        #button {
            background-color: purple;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        } 
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <form action="/personagens/save" method="post">
        <fieldset>
            <h1>Cadastro de Personagens</h1>
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <label for="nome">Nome:</label>
            <input name="nome" value="<?= $model->nome ?>" id="nome" type="text" />
            <label for="descricao">Descrição:</label>
            <input name="descricao" value="<?= $model->descricao ?>" id="descricao" type="text" />
            <br>
            <button type="submit" id="button">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>