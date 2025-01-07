let navbarDiv = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    if(document.body.scrollTop > 40 || document.documentElement.scrollTop > 40){
        navbarDiv.classList.add('navbar-cng');
    } else {
        navbarDiv.classList.remove('navbar-cng');
    }
});

const navbarCollapseDiv = document.getElementById('navbar-collapse');
const navbarShowBtn = document.getElementById('navbar-show-btn');
const navbarCloseBtn = document.getElementById('navbar-close-btn');
// show navbar
navbarShowBtn.addEventListener('click', () => {
    navbarCollapseDiv.classList.add('navbar-collapse-rmw');
});

// hide side bar
navbarCloseBtn.addEventListener('click', () => {
    navbarCollapseDiv.classList.remove('navbar-collapse-rmw');
});

document.addEventListener('click', (e) => {
    if(e.target.id != "navbar-collapse" && e.target.id != "navbar-show-btn" && e.target.parentElement.id != "navbar-show-btn"){
        navbarCollapseDiv.classList.remove('navbar-collapse-rmw');
    }
});

// stop transition and animation during window resizing
let resizeTimer;
window.addEventListener('resize', () =>{
    document.body.classList.add("resize-animation-stopper");
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        document.body.classList.remove("resizer-animation-stopper");
    },400);
});

//Handel form submission and model

const searchForm = document.getElementById('search-form');
const searchModal = document.getElementById('search-modal');
const searchModalContent = document.getElementById('search-modal-content');
const searchModalClose = document.getElementById('search-modal-close');
searchForm.addEventListener('submit', (event) => { event.preventDefault();
// Get form values

const destination = document.getElementById('destination').value;
const date = document.getElementById('date').value;
const price = document.getElementById('price').value;
// Validate input (add more validation if needed)

if (!destination || !date || !price) {
    alert ('Please fill in all fields.');
    return;

}

// Show the modal
searchModal.style.display = 'block';
// Perform AJAX request to server-side script (registration.php)
//... (code for AJAX request)
// After successful registration, show the login modal
//... (code for login modal)

});

searchModalClose.addEventListener('click', () => {

searchModal.style.display = 'none';

});

const form = document.querySelector('.header-form form');
form.addEventListener('submit', (e) => {
  e.preventDefault();
  window.location.href = 'registration.php';
});

// registration logic

const searchButton = document.querySelector('.search-button');
const modalOverlay = document.getElementById('modalOverlay');
const closeBtn = document.querySelector('.close-btn');
const modal = document.querySelector('.modal');

searchButton.addEventListener('click', () => {
  modalOverlay.style.display = 'flex';
});

closeBtn.addEventListener('click', () => {
  modalOverlay.style.display = 'none';
});

modalOverlay.addEventListener('click', (e) => {
  if (e.target === modalOverlay) {
    modalOverlay.style.display = 'none';
  }
});

document.getElementById('registrationForm').addEventListener('submit', (e) => {
  e.preventDefault();
  // Add your form submission logic here
  alert('Form submitted successfully!');
  modalOverlay.style.display = 'none';
});
//end of registration logic

// bottom nav 

// JavaScript for Bottom Navbar Interactions
document.addEventListener('DOMContentLoaded', () => {
  const navItems = document.querySelectorAll('.nav-item');

  // Add click event for additional animation or interaction
  navItems.forEach(item => {
      item.addEventListener('click', () => {
          // Highlight the selected nav item (optional animation)
          navItems.forEach(nav => nav.classList.remove('active'));
          item.classList.add('active');
      });
  });
});



// end of bottom nav

// Simple form validation for flight
document.getElementById('bookingForm').addEventListener('submit', function(e) {
  const flight = document.getElementById('flight').value;
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;

  if (!flight || !name || !email || !phone) {
      e.preventDefault();
      alert('Please fill in all fields');
  }
}); 

/* testing code */

document.querySelector('.btn[value="Search"]').addEventListener('click', function(e) {
  e.preventDefault();
  document.querySelector('.popup-container').style.display = 'block';
});

document.querySelector('.close-btn').addEventListener('click', function() {
  document.querySelector('.popup-container').style.display = 'none';
});

document.querySelectorAll('.toggle-btn').forEach(button => {
  button.addEventListener('click', function() {
      document.querySelector('.login-form').classList.toggle('hide');
      document.querySelector('.register-form').classList.toggle('show');
  });
});

// Close popup when clicking outside
document.querySelector('.popup-container').addEventListener('click', function(e) {
  if (e.target === this) {
      this.style.display = 'none';
  }
});

/* end of testing */