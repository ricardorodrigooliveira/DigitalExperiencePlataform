var http = require('http'); // incorporando a biblioteca/módulo http

//Criando um servidor
// var server = http.createServer(function(req, res){
//
//   res.end("<html><body>Pagina Teste</body></html>");
//
// });
//
// server.listen(3000);

var server = http.createServer(function(req, res){

  var categoria = req.url;

  if(categoria == "/cerveja"){
    res.end("<html><body>Pagina sobre cervejas</body></html>");
  } else if (categoria == "/musica") {
    res.end("<html><body>Pagina sobre musicas</body></html>");
  }

  res.end("<html><body>Pagina Teste</body></html>");

});

server.listen(3000);
