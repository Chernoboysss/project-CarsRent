const links = document.querySelectorAll(".nav-link")

let path = window.location.pathname;
let filename = path.substring(path.lastIndexOf("/") + 1);

links.forEach(link => {
  link.classList.remove("on")

  if (filename == link.getAttribute("data-filename")) {
    link.classList.add("on")
  }
});

const buttonFilterGroup = document.querySelectorAll(".filter-btn")
const carsContainer = document.querySelector(".cars-container")
buttonFilterGroup.forEach((button) => {
  button.addEventListener("click", function () {
    buttonFilterGroup.forEach(item => {
      item.classList.remove("filter-active")
    });
    this.classList.add("filter-active")

    let listCars = document.querySelectorAll(".cars-item")

    listCars.forEach(cars => {
      cars.classList.remove("d-none")
      if (this.getAttribute("data-filter") == "*") {
        cars.classList.remove("d-none")
      } else if (!cars.classList.contains(this.getAttribute("data-filter"))) {
        cars.classList.add("d-none")
      }
    });
  })
});

