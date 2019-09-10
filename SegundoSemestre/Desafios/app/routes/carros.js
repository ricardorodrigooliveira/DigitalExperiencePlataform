module.export = function(application){
    application.get('/cadastrar', function(req, res){
        
        var connection = application.config.dbConnection();
        
        var cadastrarModel = application.models.cadastrarModel;

        cadastrarModel.getCarros(connection, function(){
            res.render('carro', {carro : result});
        });
    });
}