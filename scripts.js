window.addEventListener("scroll", function() {
  const header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});

// Animate buttons on hover
const buttons = document.querySelectorAll('.btn');
buttons.forEach(button => {
  button.addEventListener('mouseover', function() {
    button.style.backgroundColor = '#45a049';
  });
  button.addEventListener('mouseout', function() {
    button.style.backgroundColor = '#4CAF50';
  });
});