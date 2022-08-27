"use strict";
const rarityValue = document.querySelector('#rarity h1');
const rarityGenerator = document.querySelector('#rarity button');
const generatedCard = document.querySelector('#generatedCard');
const buttons = document.querySelectorAll('#generateCard button');
const cardOutput = document.querySelector('#selectedCard h1');
let cardType;

randomizeCardType();

function randomizeCardType() {
    let rarity = Math.floor((Math.random() * 100) + 1);

    if (rarity === 1) {
        cardType = "legendary";
    } else if (rarity > 1 && rarity < 21) {
        cardType = "rare";
    } else {
        cardType = "common";
    }

    rerollRarity();

    rarityValue.innerText = `${cardType} ${rarity}`;
    console.log(rarity);
}

function rerollRarity() {
    rarityGenerator.onclick = function () {
        randomizeCardType();
    }
}

for (let button of buttons) {
    error.hidden = true;
    button.onclick = function () {
        fetchData(button);
    }
}

async function fetchData(button) {
    const response = await fetch(`resources/${button.dataset.deck}.json`);
    if (response.ok) {
        const cards = await response.json();
        printCards(cards);
    } else {
        const error = document.getElementById('error');
        error.hidden = false;
        error.style.backgroundColor = 'red';
    }
}

function printCards(cards) {
    let randomCard = Math.floor((Math.random() * cards.length));
    console.log(`${cards[randomCard].group} ${cards[randomCard].name}`);
    console.log(randomCard);
    cardOutput.innerText = `${cards[randomCard].group} ${cards[randomCard].name}`;
}