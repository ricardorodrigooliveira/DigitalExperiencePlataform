var dbConnection =  require('../../config/dbConnection');

module.exports = function(application){
    
var connection = dbConnection();

application.get('/motoristas', function(req, res){
    connection.query('SELECT * FROM motorista', function(error, result){
        //   res.send(result);
        res.render('motoristas', {motoristas : result});
        });
       
     });
 
}