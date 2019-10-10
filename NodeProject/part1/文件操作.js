var fs = require('fs');

// 异步读写文件删除文件

// fs.readFile('app.js',"utf8",function (err, data) {
//         console.log('read finished')
//     fs.writeFile('hellojs.js',data,function (err, data) {
//         console.log('write finished')
//         fs.unlink('hellojs.js', function () {
//             console.log('delete finished')
//         })
//     })
// })


// 同步读写删除文件

// var data = fs.readFileSync('app.js','utf8')
// fs.writeFileSync('hellojs.js',data)
// fs.unlinkSync('hellojs.js')

// 同步创建删除文件夹
// fs.mkdirSync('hello')
// fs.rmdirSync('hello')



// 拷贝文件实例

// fs.mkdir('hello',function () {
//     fs.readFile('app.js','utf8',function (err, data) {
//         fs.writeFile('./hello/hellojs.js',data,function () {
//             console.log('finished')
//         })
//     })
// })
