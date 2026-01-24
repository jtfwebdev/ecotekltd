document.addEventListener("DOMContentLoaded", () => {
  const imageLinks = document.querySelectorAll(".image-link");
  const lightboxOverlay = document.getElementById("lightbox-overlay");
  const lightboxImg = document.getElementById("lightbox-img");
  const lightboxClose = document.getElementById("lightbox-close");

  imageLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const img = link.querySelector("img");
      const rect = img.getBoundingClientRect();

      lightboxImg.src = img.src;
      lightboxImg.style.position = "fixed";
      lightboxImg.style.top = rect.top + "px";
      lightboxImg.style.left = rect.left + "px";
      lightboxImg.style.width = rect.width + "px";
      lightboxImg.style.height = rect.height + "px";
      lightboxImg.style.objectFit = "contain";

      lightboxOverlay.style.display = "flex";

      lightboxOverlay.getBoundingClientRect();
      lightboxOverlay.classList.add("show");

      const aspectRatio = img.naturalWidth / img.naturalHeight;
      const maxW = window.innerWidth;
      const maxH = window.innerHeight;
      let targetW = maxW;
      let targetH = maxW / aspectRatio;
      if (targetH > maxH) {
        targetH = maxH;
        targetW = maxH * aspectRatio;
      }
      const targetTop = (maxH - targetH) / 2;
      const targetLeft = (maxW - targetW) / 2;

      lightboxImg.getBoundingClientRect();
      lightboxImg.style.top = targetTop + "px";
      lightboxImg.style.left = targetLeft + "px";
      lightboxImg.style.width = targetW + "px";
      lightboxImg.style.height = targetH + "px";
    });
  });

  function closeLightbox() {
    const currentRect = document
      .querySelector(`.image-link img[src="${lightboxImg.src}"]`)
      .getBoundingClientRect();

    lightboxImg.style.top = currentRect.top + "px";
    lightboxImg.style.left = currentRect.left + "px";
    lightboxImg.style.width = currentRect.width + "px";
    lightboxImg.style.height = currentRect.height + "px";

    lightboxOverlay.classList.remove("show");

    lightboxImg.addEventListener(
      "transitionend",
      () => {
        lightboxOverlay.style.display = "none";
      },
      { once: true },
    );
  }

  lightboxClose.addEventListener("click", closeLightbox);
  lightboxOverlay.addEventListener("click", (e) => {
    if (e.target === lightboxOverlay) closeLightbox();
  });
});
