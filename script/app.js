"use strict";
const rarityValue = document.querySelector('#cardName');
const rarityGenerator = document.querySelector('#rarity button');
const generatedCard = document.querySelector('#generatedCard');
const buttons = document.querySelectorAll('.buttons button');
const cardOutput = document.querySelector('#selectedCard h1');
let cardType;
let dataset;
let deckName;

const date = new Date();
document.getElementById('year').innerText = date.getFullYear();

function navigation() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

randomizeCardType();

function randomizeCardType() {
    let rarity = Math.floor((Math.random() * 100) + 1);

    document.querySelector('.deck').hidden = true;
    document.querySelector('.deck').innerText = "";

    if (rarity === 1) {
        cardType = "Limited";
        document.getElementById('rarity').style.background = "linear-gradient(to right,rgb(222, 168, 248) 10%,rgb(168, 222, 258) 30%,rgb(189, 250, 205) 42%,rgb(243, 250, 189) 58%,rgb(250, 227, 189) 70%,rgb(248, 172, 171) 95%,rgb(254, 170, 212) 100%)";
    } else if (rarity > 1 && rarity <= 21) {
        cardType = "Rare";
        document.getElementById('rarity').style.background = "linear-gradient(to right, #BF953F, #FCF6BA)";
    } else {
        cardType = "Common";
        document.getElementById('rarity').style.background = "#9f5bcf";
    }

    rerollRarity();

    rarityValue.innerText = `${cardType} ${rarity}`;
}

function rerollRarity() {
    rarityGenerator.onclick = function () {
        randomizeCardType();
    }
}

for (let button of buttons) {
    error.hidden = true;
    rarityValue.hidden = false;
    button.onclick = function () {
        fetchData(button);
    }
}

async function fetchData(button) {
    dataset = button.dataset.deck;
    deckName = button.innerText;
    const response = await fetch(`resources/${dataset}.json`);
    if (response.ok) {
        const cards = await response.json();
        printCards(cards);
    } else {
        const error = document.getElementById('error');
        error.hidden = false;
        document.getElementById('rarity').style.background = "#e03030";
        rarityValue.hidden = true;
    }
}

function printCards(cards) {
    if (navigator.onLine) {
        let randomCard = Math.floor((Math.random() * cards.length));
        console.log(deckName);
        console.log(`${cards[randomCard].group} ${cards[randomCard].name}`);
        console.log("========");
        document.getElementById('error').hidden = true;
        document.getElementById('cardName').hidden = false;
        document.getElementById('rarity').style.background = "#04b486";
        document.querySelector('.deck').hidden = false;
        document.querySelector('.deck').innerText = deckName;
        if (!cards[randomCard].group) {
            rarityValue.innerText = `${cards[randomCard].name}`;
        } else if (!cards[randomCard].name) {
            rarityValue.innerText = `${cards[randomCard].group}`;
        } else {
            rarityValue.innerText = `${cards[randomCard].group} ${cards[randomCard].name}`;
        }
    } else {
        rarityValue.hidden = true;
        document.querySelector('.deck').hidden = true;
        document.getElementById('error').hidden = false;
        document.getElementById('rarity').style.background = "#e03030";
    }
}

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))