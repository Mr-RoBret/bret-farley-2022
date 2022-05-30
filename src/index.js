const wrapper = document.querySelector(".wrapper");

// const coffeeText = document.getElementsByClassName("li-first")[0].children[0];
const coffeeText = wrapper.children[0].children[0];
// console.log(coffeeText);
const sorryText = wrapper.children[1].children[0];
// console.log(sorryText);

const changeText = () => {
    coffeeText.classList.toggle("hidden");
    sorryText.classList.toggle("hidden");
    console.log(coffeeText.classList);
    console.log(sorryText.classList);
}

wrapper.addEventListener("mouseover", e => {
    changeText();
})

wrapper.addEventListener("mouseout", e => {
    changeText();
})

