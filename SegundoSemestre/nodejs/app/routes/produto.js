module.exports = function(app){

app.get('/produto', function(req, res){
        
var connection = app.config.dbConnection.initialize();

var produtosModel = new app.app.models.ProdutosDAO(connection);

produtosModel.getProduto(connection, function(error, result){
        res.render('produtos/produto', {produto: result });
});

});
}