import '../scss/app.scss';
import 'font-awesome/scss/font-awesome.scss'
import 'sweetalert/dist/sweetalert.css'

window.$ = window.jQuery = require('jquery');
window._ = require('lodash');
window.Vue = require('vue/dist/vue.js');
require('vue-resource');
require('../../bower_components/jquery.maskedinput/src/jquery.maskedinput');

window.toggleMenu  = require('./menu');
window.Size = require('./size')('#select');
window.Basket = require('./basket')('#basket');