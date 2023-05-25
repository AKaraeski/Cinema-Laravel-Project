const movieContainer = document.getElementById("movie-container");
const leftArrow = document.getElementById("left-arrow");
const rightArrow = document.getElementById("right-arrow");

let scrollPosition = 0;

leftArrow.addEventListener("click", () => {
  scrollPosition -= 950;
  movieContainer.scrollTo({
    left: scrollPosition,
    behavior: "smooth"
  });
});

rightArrow.addEventListener("click", () => {
  scrollPosition += 950;
  movieContainer.scrollTo({
    left: scrollPosition,
    behavior: "smooth"
  });
}); 

