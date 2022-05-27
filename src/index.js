import "../styles.css";

const alterEgos = document.getElementsByClassName("headline--medium container");

const addText = () => {
    const sorryText = "(Sorry)";
    sorryText.classList.add("headline__replacement");
    alterEgos.append(sorryText);
}