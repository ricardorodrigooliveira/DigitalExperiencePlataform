module.exports = function(app){


app.get('/cadastrar', function(req, res){
  res.render("admin/form_add_produto");
});

app.post('/produtos/salvar', function(req, res){
  var produto = req.body;
  //res.send(produto);
  //res.send('Chegou na pagina, uhul')

  //conexão
  var connection = app.config.dbConnection();
  //model
  var produtosModel = app.app.models.produtosModel;
  //função para cadastrar produto
  produtosModel.salvarProduto(produto, connection, function(error, result){
    //res.render("produtos/produto", {produtos : result} ) ;
    res.redirect('/produtos');
  })

})

}
