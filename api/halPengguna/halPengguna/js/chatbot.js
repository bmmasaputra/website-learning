const scrollContainer = document.getElementById("horizontalScroll");
console.log(scrollContainer);

let isDown = false;
let startX;
let scrollLeft;

scrollContainer.addEventListener("mousedown", (e) => {
  isDown = true;
  scrollContainer.classList.add("active");
  startX = e.pageX - scrollContainer.offsetLeft;
  scrollLeft = scrollContainer.scrollLeft;
});

scrollContainer.addEventListener("mouseleave", () => {
  isDown = false;
  scrollContainer.classList.remove("active");
});

scrollContainer.addEventListener("mouseup", () => {
  isDown = false;
  scrollContainer.classList.remove("active");
});

scrollContainer.addEventListener("mousemove", (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - scrollContainer.offsetLeft;
  const walk = (x - startX) * 2; // Adjust the speed
  scrollContainer.scrollLeft = scrollLeft - walk;
});

const presets = document.querySelectorAll("#preset");
const chatInput = document.querySelector(".chat-input")

presets.forEach(preset => {
    preset.addEventListener("click", e => {
        chatInput.value = preset.innerText
    })
});

const chatActivation = document.getElementById("chatbot-act-btn");
const chatBot = document.getElementById("chatbot-chat");
const chatBotClose = document.getElementById("chatbot-close")

chatActivation.addEventListener("click", () => {
    chatBot.removeAttribute("hidden");
    chatActivation.setAttribute("hidden", "1")
})

chatBotClose.addEventListener("click", () => {
  chatActivation.removeAttribute("hidden");
  chatBot.setAttribute("hidden", "1");
});