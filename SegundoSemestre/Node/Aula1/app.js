var express = require('express');
var app = express();

// Agora a engine de view mudou, será o EJS
// e para setarmos isso na config. do node iremos utilizar:

app.set('view engine', 'ejs');

app.get('/cervejas', function(req, res){
    res.render('secao/cervejas');
});

app.get('/', function(req, res){
    res.send("<html><body>Home Page</body></html>");
});

app.get('/frutas', function(req, res){
    res.send("<html><body>Abacaxi</body></html>");
});

app.get('/legumes', function(req, res){
    res.send("<html><body>Abobora</body></html>");
});

app.get("/tabuada", function(req, res){
    var tabu = "";
    for(i=1; i<=10;i++){
        for(f=1;f<=10;f++){
            var resp = i * f;
            tabu += (i + " x " + f + " = " + resp + "</br>");
        }
        tabu += "</br>"
    }
    res.send("<html><body>" + tabu + "</body></html>")
});

app.listen(3000, function(){ //recebe dois parametros, porta e resultado da função
    console.log("Servidor Ativo, rodando com Express!")
}); 