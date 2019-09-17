var dbConfig = require('../../config/dbConnection.js')

module.exports = function(app){

    app.get('/clientes', function(req, res){

        var connection = app.config.dbConnection.initialize();
        var ClientesDAO = new app.app.models.ClientesDAO(connection);

        ClientesDAO.getClientes(connection, function(error, result){
            res.render('clientes/clientes', {clientes: result });
        });

    });
}
