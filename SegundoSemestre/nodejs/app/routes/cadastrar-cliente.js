module.exports = function(app){

    app.get('/cadastrar-cliente', function(req, res){
      res.render('admin/form_add_cliente');
    });
    
    app.post('/clientes/salvar', function(req, res){
      var clientes = req.body;
      //res.send(cliente);
    
      //CONEXAO
      //MODEL (DAO)
      //FUNCAO
      var connection = app.config.dbConnection.initialize();
      var ClientesDao = new app.app.models.ClientesDao(connection);
    
      ClientesDao.salvarProduto(produto, connection, function(error, result){
          //res.render('clientes/clientes', {clientes: result });
          res.redirect('/clientes');
        });
    
    
    });
    
    }
    