const express = require("express");
const multer = require("multer");
const path = require('path');

const app = express();

const storageConfig = multer.diskStorage({
    destination: (req, file, cb) =>{
        cb(null, "uploads");
    },
    filename: (req, file, cb) =>{
        cb(null, Date.now() + path.extname(file.originalname));
    }
});

app.use(express.static(__dirname ));
app.use(multer({ storage:storageConfig }).single("filedata"));
app.post("/upload", function (req, res, next) {
    let filedata = req.file;
    console.log(filedata);
    if(!filedata)
        res.send("Error");
    else
        res.send("done");    
});

app.listen(3000);
