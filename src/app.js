Vue.config.devtools = true
/*
* el: element 需要获取的元素，一定是html中的根容器元素
* data: 用于存储数据
* methods: 用于存储各种方法
* data-binding: 给属性绑定对应的值
*/
new Vue({
	el:"#vue-app",
	data:{
		name:"Hello World!",
		job:"web开发",
		website:"http://www.baidu.com",
		websiteTag:"<a href='http://www.baidu.com'>超链接</a>"
	},
	methods:{
	greet: function(){
		return this.name;
	},
	hello: function(){
		alert('hello');
	}}
});
