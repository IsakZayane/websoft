"use strict";

var express = require("express");
var router = express.Router();
var lotto = require("../lotto");



router.get('/lotto-json', (req, res) => {
    var correctNum = 0;

    let data = {};
    data.numbers = [];




    var row = req.param('row');
    data.row = row.split(",");


    if (data.row.length < 7) {

        res.json({
            Error: "To few numbers"
        });
    } else if (data.row.length > 7) {
        res.json({
            Error: "Many numbers"
        });

    }

    for (let i = 0; i < 7; i++) {
        data.numbers[i] = new lotto();
        data.numbers[i].roll();
    }
    data.numbers.sort(function(a, b) {
        return a - b;
    });

    for (let i = 0; i < data.numbers.length; i++) {

        for (let j = 0; j < data.row.length; j++) {

            if (data.numbers[i] == data.row[j]) {
                correctNum++;
                console.log("HIT!!!");
                console.log(correctNum);
            }
        }

    }


    res.json({
        Todaysnumber: data.numbers.toString(),
        Yournumbers: data.row.toString(),
        NumberCorrect: correctNum
    });


});


module.exports = router;