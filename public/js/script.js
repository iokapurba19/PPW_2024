  document.addEventListener("DOMContentLoaded", function () {
    const body = document.body;
    // Fade-in on load
    body.classList.add("fade-in", "fade");

    // Fade-out on link click
    document.querySelectorAll('a').forEach(link => {
      link.addEventListener("click", function (event) {
        if (link.href !== window.location.href && link.target !== "_blank") {
          event.preventDefault();
          body.classList.remove("fade");
          body.classList.add("fade-out");
          setTimeout(() => {
            window.location.href = link.href;
          }, 500);
        }
      });
    });
  });

