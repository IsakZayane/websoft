/**
 * A module for game Guess the number I'm thinking of.
 */
"use strict";

class Lotto {
    /**
     * @constructor
     */
    constructor() {
        this.lotto = null;
    }

    /**
     * Roll the dice and remember tha value of the rolled dice.
     *
     * @param {integer} faces The number of faces of the dice, defaults to 6.
     *
     * @returns {integer} The value of the rolled dice min=1 and max=faces.
     */
    roll(faces = 35) {
        this.lotto = Math.floor(Math.random() * faces + 1);
        return this.lotto;
    }



    /**
     * Get the value of the last rolled dice.
     *
     * @returns {integer} The value of the last rolled dice.
     */
    lastRoll() {
        return this.lotto;
    }

    /**
     * When someone is printing this object, what should it look like?
     *
     * @returns {string} The value of the last rolled dice.
     */
    toString() {
        return this.lotto;
    }
}

module.exports = Lotto;