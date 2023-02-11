<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Comentários</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./main.css">
        <link rel="icon" type="image/x-icon" href="./favicon-32x32.png">

    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    </head>
    <body>
       
        
        <script src="./main.js" async defer></script>


<div class="wrap_all">
        <main>


        <h1>Comentários</h1>

        <picture class="wrap_logo">

        <img src="./img.png" class="logo"/>
        </picture>
        
        <div class="descricao">

            <p>Nesta página você tem acesso a <b>funcionalidade básicas</b> de uma aplicação server-side:
                 sessões, validação (server-side), insert, delete e get em um banco de dados.</p><br/>
            <p>Sua sessão é baseada em seu IP. Portanto é possível voltar mais tarde e encontrar 
                os seus comentários postados anteriormente.</p><br/>
            <p>Por questão de segurança o número de comentários permitidos é limitado.</p><br/>    
        </div>
<hr> 

<h2>Formulário</h2>
        <form action="index.php" id="insert_comment" method="post">

            <label class="nome">Nome:
            <input type="text" name="name" maxlength="25" class="" 
                    value="<?=$GLOBALS['_REFUSED_DATA'] ? $GLOBALS['_REFUSED_DATA']['name'] :''?>">
            </label>

            <label class="email">
                Email:
                <input type="email" name="email" maxlength="32" class=""
                value="<?=$GLOBALS['_REFUSED_DATA'] ? $GLOBALS['_REFUSED_DATA']['email'] :''?>">
            </label>

            <label class="comment">
                Comentário:
                <textarea name="comment" id="editor" rows="30"
                    value="<?=$GLOBALS['_REFUSED_DATA'] ? $GLOBALS['_REFUSED_DATA']['comment'] :''?>"></textarea>
                
            </label>

            <button type="submit" class="submit">Enviar</button>
        </form>
    
        <hr>
