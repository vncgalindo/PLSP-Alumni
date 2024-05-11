const initSlider1 = () => {
    const slideButtons1 = document.querySelectorAll(".slider-wrapper1 .slide-button1");
    const imageList1 = document.querySelector(".slider-wrapper1 .image-list1");
    const maxScrollLeft1 = imageList1.scrollWidth - imageList1.clientWidth;

    slideButtons1.forEach(button =>{
        button.addEventListener("click", () => {
            const direction1 = button.id === "prev-slide1" ? -1 : 1;
            const scrollAmount1 = imageList1.clientWidth * direction1;
            imageList1.scrollBy({left: scrollAmount1, behavior: "smooth"});
        });
    });

    const handleSlideButtons1 = () => {
        slideButtons1[0].style.display = imageList1.scrollLeft <= 0 ? "none" : "block";
        slideButtons1[1].style.display = imageList1.scrollLeft >= maxScrollLeft1 ? "none" : "block";
    }
    
    imageList1.addEventListener("scroll", () => {
        handleSlideButtons1();
    })
}

window.addEventListener("load", initSlider1);

const initSlider2 = () => {
    const slideButtons2 = document.querySelectorAll(".slider-wrapper2 .slide-button2");
    const imageList2 = document.querySelector(".slider-wrapper2 .image-list2");
    const maxScrollLeft2 = imageList2.scrollWidth - imageList2.clientWidth;

    slideButtons2.forEach(button =>{
        button.addEventListener("click", () => {
            const direction2 = button.id === "prev-slide2" ? -1 : 1;
            const scrollAmount2 = imageList2.clientWidth * direction2;
            imageList2.scrollBy({left: scrollAmount2, behavior: "smooth"});
        });
    });

    const handleSlideButtons2 = () => {
        slideButtons2[0].style.display = imageList2.scrollLeft <= 0 ? "none" : "block";
        slideButtons2[1].style.display = imageList2.scrollLeft >= maxScrollLeft2 ? "none" : "block";
    }
    
    imageList2.addEventListener("scroll", () => {
        handleSlideButtons2();
    })
}

window.addEventListener("load", initSlider2);

