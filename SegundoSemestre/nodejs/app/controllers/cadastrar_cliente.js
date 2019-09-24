module.exports.formulario_cliente = function(app, req, res){
    res.render('admin/form-add-cliente', {validacao : erros, valueForm : cliente});

}

module.exports.add_cliente = function(app, req, res){
    var cliente = req.body;
    //res.send(cliente);

    req.assert('nome', 'Nome é obrigatório').notEmpty();
    req.assert('sobrenome', 'Sobrenome é obrigatório').notEmpty();
    req.assert('cep', 'cep é obrigatório').notEmpty();
    req.assert('endereco', 'Endereço é obrigatório').notEmpty();
    req.assert('endereco', 'Endereço precisa ter entre 10 e 200 caracteres').len(10,10);
    req.assert('rg', 'Rg é obrigatório').len(9,9);
    req.assert('cpf', 'CPF é obrigatório').len(11,11);

    var erros = req.validationsErros();

    console.log(erros);


    if(erros){
        res.render('admin/form-add-cliente', {validacao : erros, valueForm : cliente});
    return;
    }

    //CONEXAO
    //MODEL (DAO)
    //FUNCAO
    var connection = app.config.dbConnection();
    var ClientesDAO = new app.app.models.ClientesDAO(connection);

    ClientesDAO.salvarCliente(cliente, function(error, result){
        //res.render('produtos/produtos', {produtos: result });
        res.redirect('/clientes');
    });
}