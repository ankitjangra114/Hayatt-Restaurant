const mongoose= require('mongoose');
let userSchema=new mongoose.Schema({
    _id:mongoose.Schema.Types.ObjectId,
     Name:String,
     email:String,
     message:String
});
module.exports=mongoose.model('Query',userSchema)