var connect = require('connect'); 
var serveStatic = require('serve-static'); 
 
connect().use(serveStatic("WebDir")).listen(80, function(){ 
    console.log('Server running on port 80...'); 
});


console.log(global)
/**
const bodyParser = require('body-parser');
const express = require('express');
const port = (process.env.PORT || 3000);
const app = express();

app.use(express.static(__dirname));
app.use(bodyParser.json());

app.post('/inputData', (req, res, next) => {

    console.log('/inputData post: ', JSON.stringify(req.body));
    // Read the variable entered by the user..
    var inputField = req.body.inputField;
    console.log('Input field: ', inputField);

    res.status(201).send(JSON.stringify({status: 'OK'}))
});

app.listen(port);
console.log('Express listening on port ' + port);
*/
