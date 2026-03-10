document.addEventListener("DOMContentLoaded", () => {
  const grid = document.getElementById("reviews-grid");
  const items = Array.from(grid.querySelectorAll(".review-item"));
  const rowHeight = 1;
  const rowGap = 0;

  items.forEach((item) => {
    const card = item.querySelector(".review-card");

    const baseGray = 250;
    const variation = Math.floor(Math.random() * 5) - 3;
    const grayShade = baseGray + variation;
    card.style.backgroundColor = `rgb(${grayShade}, ${grayShade}, ${grayShade})`;

    const shadowOpacity = (Math.random() * 0.05 + 0.05).toFixed(2);
    const shadowSpread = Math.floor(Math.random() * 2);
    card.style.boxShadow = `0 2px ${4 + shadowSpread}px rgba(0,0,0,${shadowOpacity})`;

    card.style.transitionDelay = `${Math.random() * 600}ms`;

    const height = card.getBoundingClientRect().height;
    const rowSpan = Math.ceil((height + rowGap) / (rowHeight + rowGap));
    item.style.gridRowEnd = `span ${rowSpan}`;
  });

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const card = entry.target.querySelector(".review-card");
        card.style.opacity = 1;
        observer.unobserve(entry.target);
      });
    },
    { threshold: 0.45 },
  );
  items.forEach((item) => observer.observe(item));

  const modal = document.getElementById("review-modal");
  const modalBackdrop = document.getElementById("review-modal-backdrop");
  const modalContent = document.getElementById("review-modal-content");
  const modalClose = document.getElementById("review-modal-close");
  const modalName = document.getElementById("review-modal-name");
  const modalDate = document.getElementById("review-modal-date");
  const modalRating = document.getElementById("review-modal-rating");
  const modalBody = document.getElementById("review-modal-body");

  const openModal = (name, date, rating, body) => {
    modalName.textContent = name;
    modalDate.textContent = new Date(date).toLocaleDateString();
    modalRating.textContent = "★".repeat(rating) + "☆".repeat(5 - rating);
    modalBody.textContent = body;

    modal.classList.remove("hidden");
    document.body.style.overflow = "hidden";

    void modalContent.offsetWidth;

    setTimeout(() => {
      modalBackdrop.classList.add("opacity-100");
      modalContent.classList.add("opacity-100", "scale-100");
      modalContent.classList.remove("scale-95");
    }, 10);
  };

  const closeModal = () => {
    modalBackdrop.classList.remove("opacity-100");
    modalContent.classList.remove("opacity-100");
    modalContent.classList.add("scale-95");

    setTimeout(() => {
      modal.classList.add("hidden");
      document.body.style.overflow = "";
    }, 300);
  };

  const isMobile = window.innerWidth < 1024;
  let visibleCount = isMobile ? 3 : items.length;

  items.forEach((item, index) => {
    if (index >= visibleCount) item.style.display = "none";
  });

  if (isMobile && items.length > visibleCount) {
    const seeMoreBtn = document.createElement("button");
    seeMoreBtn.textContent = "See more reviews";
    seeMoreBtn.className =
      "mt-6 w-full bg-gray-100 text-gray-700 py-2 rounded-lg font-semibold hover:bg-gray-200 transition";
    grid.parentNode.appendChild(seeMoreBtn);

    seeMoreBtn.addEventListener("click", () => {
      const nextCount = visibleCount + 3;
      const batch = items.slice(visibleCount, nextCount);

      batch.forEach((item, index) => {
        item.style.display = "block";
        const card = item.querySelector(".review-card");
        card.style.opacity = 0;
        card.style.transition = "opacity 0.7s ease-out";
        setTimeout(() => {
          card.style.opacity = 1;
        }, index * 150);
      });

      visibleCount = nextCount;

      if (visibleCount >= items.length) {
        seeMoreBtn.style.display = "none";
      }
    });
  }

  grid.querySelectorAll(".read-more").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const isMobileClick = window.innerWidth < 1024;

      if (isMobileClick) {
        const reviewText = btn.previousElementSibling;
        const fullText = reviewText.querySelector(".full-text");
        const ellipsis = reviewText.querySelector(".ellipsis");

        if (
          fullText.style.display === "none" ||
          fullText.style.display === ""
        ) {
          fullText.style.display = "inline";
          fullText.style.maxHeight = "0px";
          fullText.style.opacity = 0;
          fullText.style.transition = "max-height 0.4s ease, opacity 0.4s ease";

          void fullText.offsetWidth;

          fullText.style.maxHeight = fullText.scrollHeight + "px";
          fullText.style.opacity = 1;
          ellipsis.style.display = "none";

          btn.style.display = "none";
        }

        e.stopPropagation();
      } else {
        openModal(
          btn.dataset.reviewName,
          btn.dataset.reviewDate,
          btn.dataset.reviewRating,
          btn.dataset.reviewBody,
        );
      }
    });
  });

  modalClose.addEventListener("click", closeModal);
  modalBackdrop.addEventListener("click", closeModal);
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeModal();
  });
});
