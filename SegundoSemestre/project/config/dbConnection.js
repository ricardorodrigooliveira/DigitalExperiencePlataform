var mysql = require('mysql');


var conecMySQL = function(){
   
    console.log('Conexão estabelecida');
       var connection = mysql.createConnection(
       {
         host : 'mysql',
         user : 'root',
         password : '',
         database : 'sistema_produto'
       }
     );

     return connection;
}


module.exports = function(){
    console.log('O Autoload do Consign carregou apenas o módulo de conexão');
    return conecMySQL;
}




