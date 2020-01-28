/**
 * @preserve Made by dbwebb-staff, staff@dbwebb.se
 */

var myButton = document.getElementById("myButton");



myButton.onclick = function() {
    console.log("button clicked");
    'use strict';

    var myContent = document.getElementById('content');
    var myTable = document.getElementById("frow");

    myContent.innerHTML = '<h3>This is a MEGA template!</h3>';




    //fetch('https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun/1081')

    fetch('data/1081.json')
        .then((response) => {
            return response.json();
        })
        .then((myJson) => {

            populateTable(myJson);
        });


    console.log('Sandbox MEGA is ready!');
};





function populateTable(myJson) {
    var element = document.getElementById("content");

    var jsonObj = JSON.stringify(myJson);

    console.log(myJson.Skolenheter[0]);
    var col = [];
    for (var i = 0; i < myJson.Skolenheter.length; i++) {
        console.log(myJson.Skolenheter[i]);
        for (var keey in myJson.Skolenheter[i]) {
            if (col.indexOf(keey) === -1) {
                col.push(keey);
            }

        }
        var table = document.createElement("table");
        table.id = "theTable";

        var tr = table.insertRow(-1);

        for (var i = 0; i < col.length; i++) {
            var th = document.createElement("th"); // TABLE HEADER.
            th.id = "tableHeader";
            th.innerHTML = col[i];
            tr.appendChild(th);
        }


        for (var i = 0; i < myJson.Skolenheter.length; i++) {

            tr = table.insertRow(-1);

            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                tabCell.id = "tabCell";

                tabCell.innerHTML = myJson.Skolenheter[i][col[j]];
            }
        }

        var divContainer = document.getElementById("content");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);
    }



}