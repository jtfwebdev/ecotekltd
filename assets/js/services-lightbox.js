document.addEventListener("DOMContentLoaded", () => {
  const imageLinks = document.querySelectorAll(".image-link");
  const lightboxOverlay = document.getElementById("lightbox-overlay");
  const lightboxImg = document.getElementById("lightbox-img");
  const lightboxClose = document.getElementById("lightbox-close");
  const lightboxText = document.getElementById("lightbox-text");
  const imageSlot = document.getElementById("lightbox-image-slot");

  const lightboxTitle = lightboxText.querySelector("h2");
  const lightboxDescription = lightboxText.querySelector("p");

  const contactBtn = document.getElementById("lightbox-contact-btn");

  let scrollPosition = 0;
  let originalRect = null;
  let activeImg = null;

  function initAccordion() {
    const toggles = document.querySelectorAll(".accordion-toggle");
    toggles.forEach((toggle) => {
      toggle.onclick = () => {
        const content = toggle.nextElementSibling;
        const chevron = toggle.querySelector(".chevron");

        if (content.style.maxHeight && content.style.maxHeight !== "0px") {
          content.style.maxHeight = "0px";
          if (chevron) chevron.classList.remove("rotate-180");
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
          if (chevron) chevron.classList.add("rotate-180");
        }
      };
    });
  }

  imageLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();

      const img = link.querySelector("img");
      const rect = img.getBoundingClientRect();

      originalRect = rect;
      activeImg = img;

      scrollPosition = window.scrollY;
      document.body.style.overflow = "hidden";

      lightboxText.scrollTop = 0;

      lightboxTitle.textContent = link.dataset.title;
      lightboxDescription.innerHTML = link.dataset.description;

      lightboxText.classList.add("opacity-0");
      lightboxText.classList.remove("opacity-100");

      setTimeout(initAccordion, 50);

      lightboxImg.src = img.src;
      lightboxOverlay.style.display = "flex";
      lightboxOverlay.classList.add("show");

      lightboxImg.style.position = "fixed";
      lightboxImg.style.top = rect.top + "px";
      lightboxImg.style.left = rect.left + "px";
      lightboxImg.style.width = rect.width + "px";
      lightboxImg.style.height = rect.height + "px";
      lightboxImg.style.objectFit = "contain";

      const aspectRatio = img.naturalWidth / img.naturalHeight;
      const maxH = window.innerHeight * 0.8;
      const maxW = window.innerWidth * 0.45;

      let targetW = maxW;
      let targetH = maxW / aspectRatio;
      if (targetH > maxH) {
        targetH = maxH;
        targetW = maxH * aspectRatio;
      }

      imageSlot.style.width = targetW + "px";
      imageSlot.style.height = targetH + "px";

      const targetTop = (window.innerHeight - targetH) / 2;
      const targetLeft = 64;

      lightboxImg.getBoundingClientRect();

      lightboxImg.style.top = targetTop + "px";
      lightboxImg.style.left = targetLeft + "px";
      lightboxImg.style.width = targetW + "px";
      lightboxImg.style.height = targetH + "px";

      lightboxImg.addEventListener(
        "transitionend",
        () => {
          lightboxText.classList.remove("opacity-0");
          lightboxText.classList.add("opacity-100");
        },
        { once: true },
      );
    });
  });

  function closeLightbox(skipRestore = false) {
    if (!originalRect) return;

    lightboxText.classList.add("opacity-0");
    lightboxText.classList.remove("opacity-100");

    lightboxImg.style.top = originalRect.top + "px";
    lightboxImg.style.left = originalRect.left + "px";
    lightboxImg.style.width = originalRect.width + "px";
    lightboxImg.style.height = originalRect.height + "px";

    const currentHash = window.location.hash;
    if (currentHash) history.replaceState(null, "", " ");

    lightboxImg.addEventListener(
      "transitionend",
      () => {
        lightboxOverlay.classList.remove("show");
        lightboxOverlay.style.display = "none";

        lightboxImg.style.position = "";
        lightboxImg.style.top = "";
        lightboxImg.style.left = "";
        lightboxImg.style.width = "";
        lightboxImg.style.height = "";

        document.body.style.overflow = "";

        if (!skipRestore) {
          window.scrollTo(0, scrollPosition);
        }

        originalRect = null;
        activeImg = null;

        if (currentHash) history.replaceState(null, "", currentHash);
      },
      { once: true },
    );
  }

  contactBtn.addEventListener("click", (e) => {
    e.preventDefault();

    closeLightbox(true);

    setTimeout(() => {
      const contactSection = document.getElementById("contact");
      if (contactSection) {
        contactSection.scrollIntoView({ behavior: "smooth" });
      }
    }, 500);
  });

  lightboxClose.addEventListener("click", closeLightbox);
  lightboxOverlay.addEventListener("click", (e) => {
    if (e.target === lightboxOverlay) closeLightbox();
  });
});
