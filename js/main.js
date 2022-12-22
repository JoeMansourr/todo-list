const addTask = document.querySelector(".icon");
const openBox = document.querySelector(".msg-box");
const closeBox = document.querySelector(".mark");

addTask.addEventListener("click", () => {
    openBox.style.display = "block";
});

closeBox.addEventListener("click", () => {
    openBox.style.display = "none";
});