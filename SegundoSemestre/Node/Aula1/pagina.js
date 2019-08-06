var http = require('http'); //incorporando o módulo http

// Criar um servidor

    var server = http.createServer(
        function(req, res){
            var categoria = req.url;

            if(categoria == "/cerveja"){
                res.end("<html><body>Tudo sobre cervejas</body></html>")
            } else if(categoria == "/musica"){
                res.end("<html><body>Tudo sobre musica</body></html>")
            } else {
                res.end("<html><body>Outra pagina</body></html>")
            }

            res.end("<html><body>Pagina de Teste</body></html>")
        }
    );

server.listen(3000);