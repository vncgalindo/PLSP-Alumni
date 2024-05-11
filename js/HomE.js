document.addEventListener("DOMContentLoaded", () => {
  const initSlider = () => {
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

    slideButtons.forEach(button => {
      button.addEventListener("click", () => {
        const direction = button.id === "prev-slide" ? -1 : 1;
        const scrollAmount = imageList.clientWidth * direction;
        imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
      });
    });

    const handleSlideButtons = () => {
      slideButtons[0].classList.toggle("hidden", imageList.scrollLeft <= 0);
      slideButtons[1].classList.toggle("hidden", imageList.scrollLeft >= maxScrollLeft);
    };

    imageList.addEventListener("scroll", () => {
      handleSlideButtons();
    });

    handleSlideButtons(); // Initial state of buttons
  };

  initSlider();
});
