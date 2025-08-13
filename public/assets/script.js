document.querySelector(".cancel").addEventListener("click", () => {
  document.querySelector("form").reset();
});

document.querySelector(".form").addEventListener("submit", (e) => {
  e.preventDefault();
  alert("Form Submitted Successfully!");
});
