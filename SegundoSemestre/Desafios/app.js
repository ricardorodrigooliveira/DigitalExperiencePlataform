var application = require('./config/server');

application.get('/', function(req, res){
    res.send('Bem vindo ao Sistema Novo do Detran');
});


application.listen(2000, function(){
    console.log('Servidor está ON');
});