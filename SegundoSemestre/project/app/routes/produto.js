module.exports = function(app){
    app.get('/produto', function(req, res){
        res.render('produtos/produto');
    });
}