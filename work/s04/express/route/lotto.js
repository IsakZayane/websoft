"use strict";

var express = require("express");
var router = express.Router();
var lotto = require("../lotto");

var lottoRow = [];
router.get("/lotto", (req, res) => {

    for (let i = 0; i < 7; i++) {
        lottoRow[i] = new lotto();
        lottoRow[i].roll();
    }

    res.send("Todays lottery number: " + lottoRow.toString());

});


router.get("/about", (req, res) => {

    res.send("Its-a-me Mario");

});

module.exports = router;