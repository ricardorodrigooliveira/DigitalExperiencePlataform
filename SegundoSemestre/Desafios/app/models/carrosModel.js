module.export = function(){

    this.getCarros = function(connection, callback){
        connection.query('SELECT * FROM carro', callback);
    }

    this.salvarCarro = function(carro, connection, callback){
        connection.query('INSERT INTO carro set ?', callback);
    }

    return this;
}