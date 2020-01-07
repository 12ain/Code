const express = require('express')
const app = express()
const { User } = require('./models')
const port = 3000
app.use(express.json())
const SECRET = 'hahaha'
const jwt = require('jsonwebtoken')

app.listen(port, () => console.log(`http://localhost:3000`))

app.get('/', async(req, res) => {
    res.send('Hello World!')
})
// 注册
app.post('/api/register', async(req, res) =>{

    const user = await User.create({
        username: req.body.username,
        password: req.body.password,
    })
        // console.log(req.body)
        
        // res.send(user)
        res.send({
            message:'注册成功'
        })
})
// 登录
app.post('/api/login', async(req, res) =>{
    const user = await User.findOne({
        username: req.body.username
    })
    if (!user){
        return res.status(422).send({
            message:'用户名不存在',
        })
    }
    const isPasswordValid = require('bcrypt').compareSync(
        req.body.password,
        user.password
    )
    if (!isPasswordValid){
        return res.status(422).send({
            message:'密码无效',
        })
    }

    // 生成token
    const token = jwt.sign({
        id: String(user._id)
    },SECRET)
    res.send({
        user,
        token
    })
})


// 鉴权中间件
const auth = async(req, res, next) => {
    const raw = String(req.headers.authorization).split(' ').pop()
    const {id} = jwt.verify(raw, SECRET)
    req.user = await User.findById(id)
    next()
}

app.get('/api/profile',auth,async (req,res) =>{
    res.send(user)
})


// 使用接口鉴权实例
app.get('/api/orders', auth, async (req, res) => {
    const orders = await Order.find().where({
        user: req.user
    })
    res.send(orders)
})