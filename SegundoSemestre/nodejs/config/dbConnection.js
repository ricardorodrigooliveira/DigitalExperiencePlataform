const oracledb = require('oracledb');
 
async function initialize() {
  const pool = await oracledb.createPool(dbConfig.hrPool);
}
 
module.exports.initialize = initialize;

async function close() {
    await oracledb.getPool().close();
}

module.exports.close = close;

/*var mysql = require('mysql');

var conecMySQL = function() {
  console.log('Conexao foi estabelecida');
  return mysql.createConnection(
  {
    host : 'localhost',
    user : 'root',
    password : 'Ric@rd0mysql',
    database : 'sistema_produto'
  }
);
}

module.exports = function(){ // abre funcao
  console.log('O Autoload carregou o módulo de conexão');
  return conecMySQL;
} // fecha funcao
*/
