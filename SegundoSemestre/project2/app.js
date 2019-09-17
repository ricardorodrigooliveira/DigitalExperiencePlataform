var app = require('./config/server');
//Com o listen da pra subir o servidor mas precisa de 2 parametros, um deles é o callback
app.listen(3000, function(){
  console.log('Servidor ativo, rodando com Express!');
});