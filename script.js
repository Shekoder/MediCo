document.addEventListener('DOMContentLoaded', function () {
  const registrationForm = document.getElementById('registrationForm');
  const symptomFormContainer = document.getElementById('symptomFormContainer');

  registrationForm.addEventListener('submit', function (event) {
      event.preventDefault();

      // Assuming registration is successful
      // Display the symptom form container and hide the registration form
      symptomFormContainer.style.display = 'block';
      registrationForm.style.display = 'none';
  });

  const symptomForm = document.getElementById('symptomForm');

  symptomForm.addEventListener('submit', function (event) {
      event.preventDefault();

      // Assuming you want to log the entered symptoms
      const symptom1 = document.getElementById('symptom1').value;
      const symptom2 = document.getElementById('symptom2').value;
      console.log('Symptom 1:', symptom1);
      console.log('Symptom 2:', symptom2);

      // Optionally, you can reset the symptom form
      symptomForm.reset();

      // You can add additional logic here, like sending the data to the server

      // For now, let's hide the symptom form after submission
      symptomFormContainer.style.display = 'none';
  });
});
// Add this to your script.js file
document.addEventListener('DOMContentLoaded', function () {
  const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
  const navLinks = document.querySelector('.nav__links');

  mobileMenuIcon.addEventListener('click', function () {
    navLinks.classList.toggle('hidden-mobile');
  });
});


   // Select all elements with class "learnMoreLink"
  const learnMoreLinks = document.querySelectorAll('.learnMoreLink');

learnMoreLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Get the data-target attribute value (ID of the additional content)
        const targetId = this.getAttribute('data-target');

        // Find the corresponding additional content div
        const additionalContent = document.querySelector(`#${targetId} .additionalContent`);

        // Toggle the visibility of the additional content
        additionalContent.classList.toggle('show');

        // Toggle the text of the Learn More link
        this.classList.toggle('show');
        const readLessLink = document.querySelector(`a[data-target="${targetId}"].readLessLink`);
        readLessLink.classList.toggle('show');
    });
});

// Similar logic for "Read Less" links
const readLessLinks = document.querySelectorAll('.readLessLink');

readLessLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const targetId = this.getAttribute('data-target');
        const additionalContent = document.querySelector(`#${targetId} .additionalContent`);
        additionalContent.classList.toggle('show');
        const learnMoreLink = document.querySelector(`a[data-target="${targetId}"].learnMoreLink`);
        learnMoreLink.classList.toggle('show');
        this.classList.toggle('show');
    });
});


