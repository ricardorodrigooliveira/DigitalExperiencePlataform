const oracledb = require('oracledb');
const dbConnection = require('../../config/dbConnection');

function ProdutosDAO(connection){
  console.log(connection);
  this._connection = connection;
}

ProdutosDAO.prototype.getProdutos = async function(callback){
  const query = `SELECT * FROM produtos`;

  const binds = {};

  const result = await dbConnection.simpleExecute(query, binds);

  return result.rows;
  //this._connection.query('SELECT * FROM produtos', callback);
}

ProdutosDAO.prototype.getProduto = function(callback){
  this._connection.query('SELECT * FROM produtos WHERE id_produtos = 1', callback);
}

ProdutosDAO.prototype.salvarProduto = function(produto, callback) {
  this._connection.query('INSERT INTO produtos SET ? ', produto, callback);
}

module.exports = function() {

  return ProdutosDAO;

}
