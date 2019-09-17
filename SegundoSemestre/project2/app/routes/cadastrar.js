module.exports = function(app){

app.get('/cadastrar', function(req, res){
  res.render("admin/form_add_produto");
});

app.post('/produtos/salvar', function(req, res){
  var produto = req.body;
  //res.send(produto);
  //res.send('Chegou na página, uhul!');

// Conexão
var connection = app.config.dbConnection();
// Model
var produtosModel = app.app.models.produtosModel;
// Função salvarProduto
produtosModel.salvarProduto(produto, connection, function(error, result){
 // res.render("produtos/produtos", {produtos : result} ) ;
  res.redirect('/produtos');
});


});

}
