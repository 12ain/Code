# VUE_Code

## part1

1. 实例化 vue 对象
2. vue 的数据和方法
3. vue 的属性绑定
4. 事件修饰符
5. v-model
6. vue中class
7. vue中style
8. v-for

### Notes

- el: element 需要获取的元素，一定是 html 中的根容器元素
- data: 用于存储数据
- methods: 用于定义当前实例各种方法
- data-binding: 给属性绑定对应的值

- v-cloak
- 只替换插值表达式部分，不清空整个元素
- 解决插值表达式闪烁问题
- 用法:在style中添加[v-cloak]的display为none

- v-text无闪烁问题
- 覆盖当前标签内容
- 用法:

```

<h4 v-text="msg"></h4>

```

- v-html
- 可正常输出HTML标签
- 覆盖原有html内容

- v-bind 绑定属性的指令
- 用法:

```

<input type="button" value="按钮" v-bind:title="msg">

```

- 可简写为英文" : "，后面可以写合法JS表达式

- v-on 事件绑定机制
	- 可简写为 " @ "

- 事件修饰符
	+ .stop 阻止冒泡
	+ .prevent 阻止默认事件
	+ .capture 捕获模式(从外向内)
	+ .self 只有点击当前元素,才触发事件处理函数
	+ .once 只触发一次事件处理函数

	+ 注意
		- .self只会阻止自身的冒泡,不会阻止其余冒泡行为

- v-model 双向数据绑定
	+ v-bind:单向数据绑定
	+ 用法:例如```v-model="msg"```无需写value
	+ 只能用于表单元素中(input相关)

- vue中class使用
	1. 直接传递一个数组,class用v-bind做数据绑定
	2. 在数组中使用三元表达式
	3. 数组中使用对象代替三元表达式,提高代码可读性
	4. 对象属性为类名,由于对象属性引号可省略,属性的值为标识符
	```
	<h1 :class="classObj">这是h1标签</h1>
	classObj: {red:true, thin:true, italic:false, active:true}
	```
- vue中内联样式style的使用
	- 行内v-bind直接写样式对象
	- 样式对象定义到data中引用
	- 通过数组引用多个样式对象

- v-for循环普通数组

	```
		<p v-for="(item, i) in list">
    		索引值:{{ i }}
    		每一项值:{{ item }}
    	</p>
    	data:{
    			list:[1, 2, 3, 4, 5]
    		}
    ```

- v-for循环对象数组

	```
		<p v-for="(user,i) in list">
    		ID:{{ user.id }}
    		名字:{{ user.name }}
    		索引:{{ i }}
    	</p>   	
    	data:{
    		list:[
    		{id: 1, name: 'zs1'},
    		{id: 2, name: 'zs2'},
    		{id: 3, name: 'zs3'},
    		{id: 4, name: 'zs4'}
    		]
    	}
	```

- v-for循环对象

	```
	<p v-for="(val, key, index) in user">
    	值为:{{ val }}
    	----
    	键:{{ key }}
    	----
    	索引:{{ index }}
    </p>
    data:{
    	user:{
    		id: 1,
    		name: 'tony',
    		gender: '男'
    		}
    	},
	```

- v-for迭代数字
	
	```
	<p v-for="count in 10">
    		这是第 {{count}} 次循环
    </p>
	```
	+ 注意:v-for迭代数字,从1开始


- v-for中key的使用及注意

	> vue2.2.0+版本使用v-for,必须使用key

	+ 在使用v-for时,如果出现问题，应当指定唯一的字符串/数字
	+ v-for循环时key属性只能使用number或者string
	+ key使用时必须使用v-bind绑定指定key值

- v-if和v-show的使用
	+ v-if
		- 每次都会重新删除或创建元素
		- 切换性能消耗严重

	+ v-show
		- 每次不会重新进行DOM操作,只切换display:none
		- 初始渲染消耗高
		
	+ 频换切换使用v-show
	+ 元素可能不会永远显示用v-if