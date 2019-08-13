var express = require('express');
var app = express();

// Agora a engine de view mudou, será o EJS
// e para setarmos isso na config. do node iremos utilizar:

app.set('view engine', 'ejs');

app.get('/vingadores', function(req, res){
    res.render('secao/vingadores');
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

app.get('/media', function(req, res){
    var mensagem = '<center><h2>Desafio Media<h2>';

    //notas
    var nota_nac = 7;
    var nota_am = 8.7;
    var nota_ps = 1.2;

    //pesos
    var peso_nac = 0.2;
    var peso_am = 0.3;
    var peso_ps = 0.5;

    var media = (Math.round(nota_nac * peso_nac) + (nota_am * peso_am) + (nota_ps * peso_ps));

    mensagem += 'Sua media foi: ' + media;
    mensagem += '</center>';

    res.send(mensagem);
})

app.listen(3000, function(){ //recebe dois parametros, porta e resultado da função
    console.log("Servidor Ativo, rodando com Express!")
}); 