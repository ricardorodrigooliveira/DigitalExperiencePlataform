module.export = function(application){
    application.get('/cadastrar', function(req, res){
        res.render('admin/addCarros');
    });

    application.post('/carros/salvar', function(req, res){
        var carro = req.body;

        var connection = application.config.dbConnection();

        var carrosModel = application.app.models.carrosModel;

        carrosModel.salvarCarro(carro, connection, function(error, result){
            res.redirect('/carros');
        })
    });
}