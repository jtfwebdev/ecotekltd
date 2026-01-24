document.addEventListener("DOMContentLoaded", () => {
  const headingAbout = document.getElementById("parallax-about");

  window.addEventListener("scroll", () => {
    const scrollY = window.scrollY;

    if (headingAbout) {
      headingAbout.style.transform = `translate(-50%, ${scrollY * -0.3}px)`;
    }
  });
});
