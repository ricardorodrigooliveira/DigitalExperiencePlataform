module.exports.produtos = function(app, req, res){

    var connection = app.config.dbConnection();
    var produtosModel = new app.app.models.ProdutosDAO(connection);

    produtosModel.getProdutos(function(error, result){
        res.render('produtos/produtos', {produtos: result });
    });
}