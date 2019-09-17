const oracledb = require('oracledb');
const dbConnection = require('../../config/dbConnection.js');

module.exports = function(app){

app.get('/produtos', function(req, res){

var connection = app.config.dbConnection.initialize();
var produtosModel = new app.app.models.ProdutosDAO(connection);

  produtosModel.getProdutos(connection, function(error, result){
        res.render('produtos/produtos', {produtos: result });
  });
});
}
