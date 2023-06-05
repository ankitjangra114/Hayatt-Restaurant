var express = require("express")
var bodyParser=require("body-parser")
var mongoose=require("mongoose")

const app= express()

app.use(bodyParser.json())
app.use(express.static('public'))
app.use(bodyParser.urlencoded({
    extended:true
}))
mongoose.connect('mongodb+srv://Aryan432:Aryan@12@cluster0.fdkmm.mongodb.net/?retryWrites=true&w=majority')

app.get("/",(req,res)=>{
    res.set({
    "Alow-access-Allow-Origin":'*'
})


}).listen(3000);
console.log("Listening on PORT 3000")