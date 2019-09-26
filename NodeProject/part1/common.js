var counter = function counter(arr) {
    return 'The length is' + arr.length
}
var area = function area(a) {
    return `The answer is ${a*a*PI}`;
}
let PI = 3.14;
module.exports = {
    counter: counter,
    PI: PI,
    area: area
}