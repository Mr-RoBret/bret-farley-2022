// import "../styles.css";
// const traitsList = document.getElementById("traits-list");

const wrapper = document.getElementById("wrapper");

// const coffeeText = document.getElementsByClassName("li-first")[0].children[0];
const coffeeText = wrapper.children[0].children[0];
console.log(coffeeText);
const sorryText = wrapper.children[1].children[0];
console.log(sorryText);
// coffeeText.style.transition = "all .5s";

const changeText = () => {
    coffeeText.classList.toggle("hidden");
    sorryText.classList.toggle("hidden");
}

wrapper.addEventListener("mouseover", e => {
    changeText();
})

wrapper.addEventListener("mouseleave", e => {
    changeText();
})

