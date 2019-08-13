var express = require('express');
var app = express();
var msg = 'Servidor Ativo!';
app.set('view engine', 'ejs');
app.set('views', './app/views');

module.exports = app;