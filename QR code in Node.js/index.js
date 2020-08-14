const QRCode = require('qrcode');
const fs = require('fs');
const http = require('http');
const express = require('express');
const app = express();
const b64ti = require('base64-to-image');
const { url } = require('inspector');

app.set('view engine','ejs');
 
// app.get('/', function(req,res){
//     QRCode.toDataURL('I am a pony!', function (err, url) {
//         var data = {url: url};
//         res.render('view',{data: data});

//         if(err){
//             console.log(err);
//         }
//     });
// });

var server = http.createServer(function(req,res){
    QRCode.toDataURL('I am test file', function (err, url) {
        var img = url;
        var path = (__filename);
        var oObj = {type : 'png'};

        b64ti(img,path,oObj);

        var imgInfo = b64ti(img,path,oObj);
        console.log('DONE!!!!');
        // console.log(url);
        // fs.writeFile("img.png",img,function(err){
        //     if(err){
        //         console.log(err);
        //     }else{
        //         console.log("file created");
        //     }
        // });
        // img = url.replace('/^data:image\/png;base64,/',"");
        // img += img.replace('+',' ');
        // bid = new Buffer(img,'base64').toString('binary');

        // fs.writeFile("out2w.png",img,'base64',function(err){
        //     console.log(err);
        // });
        // fs.writeFile('img.txt',img);s
    });
});

server.listen(3000, function(){
    console.log("we on port 3000 localhost");
});



// // var http = require('http');
// // var fs = require('fs');

// // var server = http.createServer(function(req,res){
// //     console.log('request was made: ' + req.url);
// //     res.writeHead(200,{'Content-type':'text/html'});
// //     var myReadStream = fs.createReadStream(__dirname + '/index.html', 'utf8');
// //     myReadStream.pipe(res);
// // });

// app.listen(3000, function(){
//     console.log("We are now on port 3000");
// }); 
