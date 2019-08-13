var app = require('./config/server');

var rotaCadastrar = require('./app/routes/cadastrar');
rotaCadastrar(app);

var rotaHome = require('./app/routes/home');
rotaHome(app);

var rotaLista = require('./app/routes/lista');
rotaLista(app);

var rotaProduto = require('./app/routes/produto');
rotaProduto(app);

app.listen(2000, function(){
    console.log('Servidor Ativo!');
});