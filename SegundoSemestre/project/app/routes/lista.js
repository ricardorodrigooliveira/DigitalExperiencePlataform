module.exports = function(app){
    app.get('/Lista', function(req, res){
        res.render('produtos/lista');
    });
}