// 简单计时器
// let time = 0;
// let timer = setInterval(() => {
//     time += 2;
//     console.log(time + "s passed")
//     if (time >= 10) {
//         clearInterval(timer);
//     }
// }, 2000);

// 函数定义写法
// 1.
// function hello() {
//     console.log(__filename);
// }
// hello();

// 2.回调函数
// var haha = function hello(name) {
//     console.log('hello' + name);
// }

// function callBack(fun, name){
//     fun(name);
// }
// callBack(haha,'xiao');

// 自定义库的引入
// let funs = require('./common')
// let arr = ['a', 'b', 'c'];
// console.log(funs.counter(arr));
// console.log(funs.area(6))

// node中的事件
var events = require('events');
var util = require('util')

// var myEmitter = new events.EventEmitter(); // 新建事件
// myEmitter.on('someEvent',function (message) {
//     console.log(message);
// })

var Person = function (name) {
    this.name = name
}

util.inherits(Person, events.EventEmitter);

var xiaoming = new Person('xiaoming');
var xiaoli = new Person('xiaoli');
var lucy = new Person('lucy');

var person = [xiaoming, xiaoli, lucy];
console.log(person)

// myEmitter.emit('someEvent','The event was emmited');