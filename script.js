function toggleMenu() {
  document.getElementById("menu").classList.toggle("show");
}

function filterBlog(type, btn) {
  let cards = document.querySelectorAll(".blogsectionone__card");
  let buttons = document.querySelectorAll(".blogsectionone__filters button");

  buttons.forEach((b) => b.classList.remove("active"));
  btn.classList.add("active");

  cards.forEach((c) => {
    if (type === "all" || c.classList.contains(type)) {
      c.classList.remove("hide");
    } else {
      c.classList.add("hide");
    }
  });
}

function filterBlog(category, btn) {
  let cards = document.querySelectorAll(".blogsectionone__card");
  let buttons = document.querySelectorAll(".blogsectionone__filters button");

  // ACTIVE BUTTON STYLE
  buttons.forEach((b) => b.classList.remove("active"));
  btn.classList.add("active");

  // FILTER LOGIC
  cards.forEach((card) => {
    if (category === "all") {
      card.classList.remove("hide");
    } else if (card.classList.contains(category)) {
      card.classList.remove("hide");
    } else {
      card.classList.add("hide");
    }
  });
}
