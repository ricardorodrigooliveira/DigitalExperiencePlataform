var dbConnection = require('../../config/dbConnection');


module.exports = function(application) {

    var connection = dbConnection();

    application.get('/motos', function(req, res){
        //res.send('Motos');

        connection.query('SELECT * FROM moto', function(error, result){
            res.render('motos', {motos: result});
        });

    });
}


