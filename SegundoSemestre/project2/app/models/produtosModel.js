module.exports = function(){

    this.getProdutos = function(connection, callback){
        connection.query('SELECT * FROM produto', callback);
    }

    this.getProduto = function(connection, callback){
        connection.query('SELECT nome FROM produto', callback);
    }

    this.salvarProduto = function(produto, connection, callback){
        connection.query('INSERT INTO produto set ?', produto, callback);
    }

    return this;
}