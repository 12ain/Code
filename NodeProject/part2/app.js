var http = require('http');

var server = http.createServer(function(request, response){
    console.log('Request received')
    response.writeHead(200,{ 'Content-Type': 'text/plain'});
    response.write('hello node.js');
    response.end();
})

server.listen(3000, '127.0.0.1');
console.log('listen 3000')