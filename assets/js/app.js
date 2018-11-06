import 'sweetalert/dist/sweetalert.css'
import 'font-awesome/scss/font-awesome.scss'
import '../scss/app.scss';

window.$ = window.jQuery = require('jquery');
window._ = require('lodash');
window.Vue = require('vue/dist/vue.js');
require('vue-resource');
require('jquery.maskedinput/src/jquery.maskedinput');
require('sweetalert');

window.toggleMenu  = require('./menu');
window.callMe  = require('./callme');
window.Size = require('./size')('#select');
window.Basket = require('./basket')('#basket');
window.Form = require('./form')('#form');