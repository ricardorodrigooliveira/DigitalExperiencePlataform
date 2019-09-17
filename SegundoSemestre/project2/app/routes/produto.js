module.exports = function(app){

app.get('/produto', function(req, res){

    var connection = app.config.dbConnection();
    var produtosModel = app.app.models.produtosModel;

    produtosModel.getProduto(connection, function(error, result){
      // res.send(result);
      res.render("produtos/produto", {produtos : result} ) ;
     });
  });
}
