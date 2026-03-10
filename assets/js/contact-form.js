document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contact-form");
  const popup = document.getElementById("success-popup");
  const popupBox = document.getElementById("popup-box");
  const popupClose = document.getElementById("popup-close");
  const popupOk = document.getElementById("popup-ok");

  if (!form || typeof contact_ajax === "undefined") return;

  function openPopup() {
    popup.classList.remove("opacity-0", "pointer-events-none");
    setTimeout(() => {
      popupBox.classList.remove("scale-95", "opacity-0");
    }, 10);
  }

  function closePopup() {
    popupBox.classList.add("scale-95", "opacity-0");
    setTimeout(() => {
      popup.classList.add("opacity-0", "pointer-events-none");
    }, 200);
  }

  popupClose.addEventListener("click", closePopup);
  popupOk.addEventListener("click", closePopup);
  popup.addEventListener("click", function (e) {
    if (e.target === popup) closePopup();
  });

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(form);
    formData.append("action", "send_contact_form");

    fetch(contact_ajax.ajax_url, {
      method: "POST",
      body: formData,
    })
      .then((res) => res.json())
      .then((data) => {
        if (data.success) {
          form.reset();
          openPopup();
        } else {
          alert(data.data);
        }
      })
      .catch(() => {
        alert("Something went wrong. Please try again.");
      });
  });
});
