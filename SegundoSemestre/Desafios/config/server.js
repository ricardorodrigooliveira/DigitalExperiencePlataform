var express = require('express');
var application = express();

var consign = require('consign');

application.set('view engine', 'ejs');
application.set('views', './app/views');

consign()
.include('app/routes')
.then('config/dbConnection.js')
.then('app/models')
.into(application);



module.exports = application;