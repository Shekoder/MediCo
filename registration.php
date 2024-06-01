<?php

 session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root","", "medicine_system");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql= "INSERT INTO `registration`(`firstName`, `lastName`, `email`, `phone`) VALUES ('$firstName','$lastName',' $email','  $phone') ;";
    $result = $conn->query($sql);

    
    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="index.css" />
  <title>HealthCare</title>
</head>
<body>
  <header>
    <nav class="section__container nav__container">
      <div class="nav__logo">Health<span>Care</span></div>
      <ul class="nav__links">
        <li class="link"><a href="#">Home</a></li>
        <li class="link"><a href="#aboutus">About Us</a></li>
        <li class="link"><a href="#serviceSection">Services</a></li>
        <li class="link"><a href="Symptom.html">Symptom</a></li>
      </ul>
      <div class="mobile-menu-icon">
        <i class="ri-menu-line"></i>
      </div>
    </nav>
    <div class="section__container header__container">
      <div class="header__content">
        <h1>Empowering Health, Inspiring Happiness!</h1>
        <p>
          Welcome to a seamless healthcare experience where your well-being is our top priority. At our medical shop,
          we've simplified the path to better health. Just enter your symptoms, and let our advanced system recommend
          the right medicine for you. With a focus on efficiency and accuracy, we're here to make your health journey
          straightforward and worry-free. Trust us for personalized recommendations and a healthier tomorrow!
        </p>
        <button class="btn">See Services</button>
      </div>
      <div class="header__form">
        <form method="post" action="registration.php">
          <h4>Register</h4>
          <input type="text" name="firstName" placeholder="First Name" />
          <input type="text" name="lastName" placeholder="Last Name" />
          <input type="email" name="email" placeholder="Email-Id" />
          <input type="number" name="phone" placeholder="Phone No." />
          <button type="submit" class="btn form__btn" id="registerButton">Submit</button>

        </form>
      </div>
    </div>
  </header>

  <section id="serviceSection" section class="section__container service__container">
    <div class="service__header">
      <div class="service__header__content">
        <h2 class="section__header">Explore Our Specialized Services</h2>
        <p>
          At MediCo, our advanced healthcare system is dedicated to providing accurate and
          personalized recommendations based on your unique symptoms.
        </p>
      </div>
      <button class="service__btn" id="discoverBtn">Discover Our Services</button>
    </div>
    <div class="service__grid">
      <div class="service__card" id="medicationCard">
        <span><i class="ri-microscope-line"></i></span>
        <h4>Personalized Medication</h4>
        <p>
          Precision in Recommendation: Access customized medications tailored to your specific health requirements.
        </p>
        <a href="#" class="learnMoreLink" data-target="medicationCard">Learn More</a>

        <div class="additionalContent">
          <p>
            Our personalized medication service utilizes accurate data from our API to provide tailored recommendations
            based on your unique symptoms. We carefully customize medicine to suit your specific requirements, ensuring
            the best outcomes for your health.
          </p>
          <p>
            Our team of experienced pharmacists and healthcare professionals is dedicated to delivering the highest
            quality of service, focusing on your well-being and satisfaction.
          </p>
          <a href="#" class="readLessLink hidden" data-target="medicationCard">Read Less</a>
        </div>
      </div>
      <div class="service__card" id="assessmentCard">
        <span><i class="ri-mental-health-line"></i></span>
        <h4>Health Assessments</h4>
        <p>
          Stay Proactive, Stay Healthy: Our comprehensive health assessments and system evaluations empower you to take
          charge of your well-being.
        </p>
        <a href="#" class="learnMoreLink" data-target="assessmentCard">Learn More</a>

        <div class="additionalContent">
          <p>
            Our health assessments are designed to empower you to stay proactive and maintain optimal health. Through
            accurate API-driven data, we offer comprehensive evaluations conducted by expert healthcare professionals,
            allowing you to take charge of your well-being.
          </p>
          <p>
            By providing personalized insights and recommendations, we aim to support you on your journey to a healthier
            and happier life.
          </p>
          <a href="#" class="readLessLink hidden" data-target="assessmentCard">Read Less</a>
        </div>
      </div>
      <div class="service__card" id="firstAidCard">
        <span><i class="ri-hospital-line"></i></span>
        <h4>First Aid Supplies</h4>
        <p>
          Preparedness in Every Box: Explore our range of first aid supplies, ensuring you have the essentials for every
          health situation.
        </p>
        <a href="#" class="learnMoreLink" data-target="firstAidCard">Learn More</a>

        <div class="additionalContent">
          <p>
            Our first aid supplies are curated to ensure preparedness for every health situation. Explore our range, and
            equip yourself with the essentials needed for a prompt response to emergencies.
          </p>
          <p>
            We prioritize the quality and effectiveness of our first aid supplies, providing you with confidence in
            handling unexpected health challenges.
          </p>
          <a href="#" class="readLessLink hidden" data-target="firstAidCard">Read Less</a>
        </div>
      </div>
    </div>
  </section>

  <section id="aboutus" section class="section__container about__container">
    <div class="about__content">
      <h2 class="section__header">About Us</h2>
      <p>
        Welcome to MediCo - Your go-to platform for personalized healthcare guidance. Our sytem is committed to
        enhancing your well-being by providing accurate information and valuable resources tailored to your unique
        health needs.
      </p>
      <p>
        Dive into our vast collection of expertly curated articles and guides spanning a diverse range of health topics.
        Whether you're seeking insights into common medical conditions or tips for cultivating a healthier lifestyle,
        our content is crafted to educate, inspire, and empower you in making informed choices for your health journey.
      </p>
      <p>
        Uncover practical health tips and lifestyle advice to optimize your physical and mental well-being. We firmly
        believe that small, positive changes can lead to significant improvements in your quality of life. At MediCo,
        we're here to guide you on your journey towards a healthier and happier version of yourself.
      </p>

    </div>
    <div class="about__image">
      <img src="medicine.jpeg" alt="about" />
    </div>
  </section>

  <section class="section__container why__container">
    <div class="why__image">
      <img src="medicine2.jpeg" alt="why choose us" />
    </div>
    <div class="why__content">
      <h2 class="section__header">Why Choose Us</h2>
      <p>
        At MediCo, our commitment lies in providing you with precise and reliable medicine recommendations tailored to
        your specific symptoms. Our focus is on delivering exceptional healthcare assistance through advanced technology
        and accurate data, ensuring you receive optimal guidance for your well-being.
      </p>
      <div class="why__grid">
        <span><i class="ri-health-book-line"></i></span>
        <div>
          <h4>Precise Medicine Recommendations</h4>
          <p>
            Choose MediCo for accurate medicine recommendations based on the symptoms you enter. Our system is designed
            to provide you with precise guidance, simplifying your healthcare decision-making process.
          </p>
        </div>
        <span><i class="ri-user-heart-line"></i></span>
        <div>
          <h4>Efficient and Compassionate Service</h4>
          <p>
            Experience compassionate care with our streamlined process. Enter your symptoms, and our system will swiftly
            provide you with accurate and relevant medicine recommendations, ensuring efficiency in your healthcare
            journey.
          </p>
        </div>
        <span><i class="ri-file-list-3-line"></i></span>
        <div>
          <h4>Reliable Data from Trusted Sources</h4>
          <p>
            Trust MediCo for reliable medicine recommendations backed by accurate data from trusted medical APIs. Your
            health and well-being are our top priorities, and we strive to provide recommendations you can rely on.
          </p>
        </div>
      </div>

    </div>
  </section>
  


  <footer class="footer">
    <div class="section__container footer__container">
      <div class="footer__col">
        <h3>Medi<span>Co</span></h3>
        <p>
          We are honored to be a part of your healthcare journey and committed
          to delivering compassionate, personalized, and top-notch care every
          step of the way.
        </p>
        <p>
          Trust us with your health, and let us work together to achieve the
          best possible outcomes for you and your loved ones.
        </p>
      </div>
      <div class="footer__col footer__col--contact">
        <h4>Contact Us</h4>
        <p><i class="ri-linkedin-fill"></i> <a href="https://www.linkedin.com/in/tanishajain23/"> Tanisha Jain</a></p>
        <p><i class="ri-linkedin-fill"></i> <a href="https://www.linkedin.com/in/yashika-singh14/">Yashika Singh</a></p>

        <p><i class="ri-mail-fill"></i> itanishajain@gmail.com</p>
        <p><i class="ri-mail-fill"></i> yashikasingh1412@gmail.com</p>
        <p><i class="ri-github-fill"></i><a href="https://github.com/TanishaJain23"> TanishaJain23</a> </p>
        <p><i class="ri-github-fill"></i><a href="https://github.com/shekoder">YashikaSingh</a></p>
      </div>
    </div>
    <div class="footer__bar">
      <div class="footer__bar__content">
        <p>Copyright © 2023 <a href="https://www.linkedin.com/in/tanishajain23/" target="_blank">TanishaJain</a>. All rights reserved.</p>
        <p>Copyright © 2023 <a href="https://www.linkedin.com/in/yashikasingh14/" target="_blank">YashikaSingh</a>. All rights reserved.</p>

      </div>
    </div>
  </footer>
  <script src="script.js"></script>
  <script>
  document.getElementById("registrationForm").addEventListener("submit", function (event) {
    // Prevent the default form submission
    event.preventDefault();

    // Hide the registration form block
    document.getElementById("registrationForm").style.display = "none";

    // You can add additional logic here, such as displaying a success message
  });
</script>
<script>
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
        this.classList.toggle('hidden');
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

        additionalContent.classList.toggle('hidden');
        
        this.classList.toggle('show');
        const learnMoreLink = document.querySelector(`a[data-target="${targetId}"].learnMoreLink`);
        learnMoreLink.classList.toggle('hidden');
       
    });
});
</script>
</body>
</html>