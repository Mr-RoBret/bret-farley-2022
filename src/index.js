// import "../styles.css";
const traitsList = document.getElementById("traits-list");

const coffeeText = document.querySelector('.headline--medium__li:nth-child(4)');
coffeeText.style.transition = "all .5s";

const sorryText = document.createElement("li");
// sorryText.setAttribute("transition", ".5s");
sorryText.innerText = "(sorry)";
sorryText.classList.add("headline--medium__li", "headline__replacement", "hidden");

const alterEgos = document.getElementById('traits-list');
alterEgos.append(sorryText);
console.log(alterEgos);

const changeText = () => {
    coffeeText.textContent = "(sorry)";
}

coffeeText.addEventListener("mouseover", e => {
   sorryText.classList.remove("hidden");
   sorryText.classList.add("unhidden");
   coffeeText.classList.remove("unhidden");
   coffeeText.classList.add("hidden");
    // coffeeText.textContent = "(sorry)";
    // changeText();
});

