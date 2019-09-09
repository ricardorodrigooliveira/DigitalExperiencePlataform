# Correção NAC - Node.js

O primeiro passo é criar o banco de dados  
Após a criação iniciamos com o require

Dentro do diretório server.js criamos a rotina da seguinte forma

```node.js
var express = require('express'); // a variavel express pode ter qualquer nome
var application = express();

module.exports = application;
```

Em seguida teste o serviço  
Dentro do arquivo app.js faça um require de onde foi criado o express
```node.js
var application = require('./config/server');

aplication.listen(1000, function(){
    console.log('serviço no ar');
})
```

## Após o teste implemente os caminhos para fazer o request e response  
```node.js
var application = require('./config/server');

application.get('/', function(req, res){
    res.send('home');
});

application.get('/carros', function(req, res){
    res.send('carros');
});

application.get('/motos', function(req, res){
    res.send('motos');
});

application.get('/motorista', function(req, res){
    res.send('motorista');
});

application.listen(1000, function(){
    console.log('serviço no ar');
})
```

# Renderizar as paginas com EJS

Quando usamos EJS renderizamos um caminho, diferente do node que carrega código  

Ex: res.end(<html><body><h1>Pagina</h1></body></html>)
    com ejs

Dentro de Views criamos um arquivo para cada pagina
Ex:
carros.ejs -- que irá conter o código

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Carros</h1>

    <table>
        <tr>
            <td>ID</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Cor</td>
            <td>Placa</td>
        </tr>

        <tr>
            <td>1</td>
            <td>Volks</td>
            <td>Fusca</td>
            <td>Preto</td>
            <td>ABC1234</td>
        </tr>
    </table>
</body>
</html>
```

Configuramos agora o caminho dos arquivos EJS para serem renderizados

```node.js
var express = require('express'); // a variavel express pode ter qualquer nome
var application = express();

var application.set('view engine','ejs');
var application.set('view engine',);

module.exports = aplication
```

Voltamos agora ao app.js e apontamos a renderização para os devidos locais
```node.js
var application = require('./config/server');

application.get('/', function(req, res){
    //res.send('home');
    res.render('home');
});

application.get('/carros', function(req, res){
    //res.send('carros');
    res.render('carros');
});

application.get('/motos', function(req, res){
    //res.send('motos');
    res.render('motos');
});

application.get('/motorista', function(req, res){
    //res.send('motorista');
    res.render('motoristas');
});

application.listen(1000, function(){
    console.log('serviço no ar');
})
```

# Modularização

Para modularizar o projeto vamos iniciar com as rotas

Criamos um arquivo para cada pagina criada  
No caso do exemplo temos...
carro.js
motos.js
etc...

e fica da seguinte forma...
```node.js
module.express = function(application){
    application.get('/', function(req, res){
        //res.send('home');
        res.render('home');
    });
}
```

e no arquivo app.js fazemos a criação e chamada das rotas

```node.js
var application = require('./config/server');

application.get('/', function(req, res){
    //res.send('home');
    res.render('home');
});

var rotaMotos = require('./app/rotes/motos');
rotaMotos(application);

var rotaMotos = require('./app/rotes/carros');
rotaMotos(application);

var rotaMotos = require('./app/rotes/motoristas');
rotaMotos(application);

application.get('/carros', function(req, res){
    //res.send('carros');
    res.render('carros');
});

application.get('/motos', function(req, res){
    //res.send('motos');
    res.render('motos');
});

application.get('/motorista', function(req, res){
    //res.send('motorista');
    res.render('motoristas');
});

application.listen(1000, function(){
    console.log('serviço no ar');
})
```

# Conecção com Banco de Dados

No diretório server criamos o arquivo para configurar a conexão

dbConnection.js que irá conter...

```node.js
Var mysql = require(''mysql);

module.express = function(){
    return mysql.createConnection({
        host : 'localhost'
        user : 'root'
        password : ''
        database : 'nac'
    })
}
```

Exportação do modulo de conexão para os arquivos de rotas

```node.js
var dbConnection = require('../../config/dbConnection');

module.express = function(application){

    var connection = dbConnection();

    application.get('/', function(req, res){
        
        connection.query('select * from carro', function(error, result){
            //res.send('carros');
            res.render('carros',{carros : result});
        })
    });
}
```

Ai basta alterar os HTMls para receber as variáveis

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Carros</h1>

    <table>
        <tr>
            <td>ID</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Cor</td>
            <td>Placa</td>
        </tr>
        <% for(var i =0; i < carros.length; i++) {%>
        <tr>
            <td><%= carros[i].id_carros %></td>
            <td><%= carros[i].marca %></td>
            <td><%= carros[i].modelo %></td>
            <td><%= carros[i].cor %></td>
            <td><%= carros[i].placa %></td>
        </tr>
        <% } %>
    </table>
</body>
</html>
```

# Utilização do consign

## O consign é responsável por fazer auto load da pagina

No arquivo server inclua

var consign = require('consign');

consign().include('app/routes').into(application)

e app.js é alterado para 

```node.js
var application = require('./config/server');

application.get('/', function(req, res){
    //res.send('home');
    res.render('home');
});

application.listen(1000, function(){
    console.log('serviço no ar');
})
```