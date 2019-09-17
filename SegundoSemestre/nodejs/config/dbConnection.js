const oracledb = require('oracledb');
const dbConfig = require('./dbConfig');;
 
async function initialize() {
  const pool = await oracledb.createPool(dbConfig.hrPool);
}
 
module.exports.initialize = initialize;

async function close() {
    await oracledb.getPool().close();
}

module.exports.close = close;

async function close() {
  await oracledb.getPool().close();
}

function simpleExecute(statement, binds = [], opts = {}) {
  return new Promise(async(resolve, reject) => {
    let conn;

    opts.outFormat = oracledb.OBJECT;
    opts.autoCommit = true;

    try {
      conn = await oracledb.getConnection();

      const result = await conn.execute(statement, binds, opts);

      resolve(result);
    } catch (err) {
      reject(err);
    } finally {
      if (conn) {
        try {
          await conn.close();
        } catch (err) {
          console.log(err);
        }
      }
    }
  });
}

module.exports.simpleExecute = simpleExecute;








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
