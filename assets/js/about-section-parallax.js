document.addEventListener("DOMContentLoaded", () => {
  const headingAbout = document.getElementById("parallax-about");
  const headingServices = document.getElementById("parallax-services");
  const sectionServices = document.getElementById("services");

  window.addEventListener("scroll", () => {
    const scrollY = window.scrollY;

    // About heading: always moves
    if (headingAbout) {
      headingAbout.style.transform = `translate(-50%, ${scrollY * -0.3}px)`;
    }

    // Services heading: only move when section top enters viewport
    if (headingServices && sectionServices) {
      const rect = sectionServices.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      // Start moving when section top is <= viewport bottom
      if (rect.top <= windowHeight) {
        // Calculate how far the section has been scrolled into view
        const offset = windowHeight - rect.top;
        headingServices.style.transform = `translate(0%, ${offset * -0.3}px)`;
      }
    }
  });
});
