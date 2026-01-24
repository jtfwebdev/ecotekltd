document.addEventListener("DOMContentLoaded", () => {
  const grid = document.getElementById("reviews-grid");
  const items = grid.querySelectorAll(".review-item");

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
});
