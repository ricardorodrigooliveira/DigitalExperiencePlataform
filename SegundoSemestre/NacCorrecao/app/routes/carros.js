var dbConnection =  require('../../config/dbConnection');

module.exports = function(application){

    var connection = dbConnection();

    application.get('/carros', function(req, res){
        connection.query('SELECT * FROM carro', function(error, result){
        //   res.send(result);
        res.render('carros', {carros : result});
        });
       
     });
}