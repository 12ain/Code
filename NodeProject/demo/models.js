const mongoose = require('mongoose')
mongoose.connect('mongodb://47.100.250.175:27017/SE',{
    useUnifiedTopology: true,
    useNewUrlParser: true,
    useCreateIndex: true,
})
mongoose.connection.on("error", function (error) {
    console.log("数据库连接失败：" + error);
});
mongoose.connection.on("open", function () {
    // console.log("数据库连接成功！");
});
const UserSchema = new mongoose.Schema({
    username: {
            type: String,
            unique: true,
        },
        password: {
            type: String,
            set(val){
                // 使用散列加密
                return require('bcrypt').hashSync(val, 10) 
            }
        },
})
const User = mongoose.model('User', UserSchema)

module.exports = {
    User
}