require('./bootstrap');

window.Jquery = require('jquery');

$("#fileInput").change(function(){
    $("button").prop("disabled", this.files.length == 0);
});