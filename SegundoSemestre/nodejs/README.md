# DAO e Prototype

Nessa aula iremos aprender o conceito de propriedade

Trabalharemos com Prototype e transformaremos as rotas e models em DAO conforme abaixo  

No arquivo produtosModel iremos criar a classe Produtos...
```node.js
function Produtos(){
}
```

Assim teremos acesso ao prototype e chamamos da seguinte forma logo abaixo da classe que criamos...
```node.js
Produtos.prototype
```

Os metodos getProdutos, getProduto e salvarProduto farão parte da classe produto e chamamos da seguinte forma
```node.js
Produtos.prototype.getProdutos = function(connection, callback){
  this.connection.query('SELECT * FROM produtos', callback);
}

Produtos.prototype.getProduto = function(connection, callback){
  this.connection.query('SELECT * FROM produtos WHERE id_produtos = 1', callback);
}

Produtos.prototype.salvarProduto = function(connection, produto, callback) {
  this.connection.query('INSERT INTO produtos SET ? ', produto, callback);
}
```

E como retorno desse modulo teremos a própria classe
```node.js
module.exports = function() {

  return ProdutosDAO;

}
```