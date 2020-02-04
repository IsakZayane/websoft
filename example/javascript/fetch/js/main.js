/**
 * @preserve Made by mos@dbwebb.se
 */
(function () {
    'use strict';

    let url;

    //url = "https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun/1081";
    url = "data/1081.json";
    fetch(url)
        .then((response) => {
            return response.json();
        })
        .then((myJson) => {
            console.log(myJson);
        });

    url = "https://rem.dbwebb.se/api/users";
    fetch(url)
        .then((response) => {
            return response.json();
        })
        .then((myJson) => {
            console.log(myJson);
        });

    console.log('Sandbox is ready!');
})();
