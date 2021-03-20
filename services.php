<?php

require_once 'library/functions.php';
//Add unqiue css files here
$css = array('styles/services.css');
require_once 'views/header.php';

?>


<main>
    <h2>Customer Service</h2>
    <div class="columns">
        <div class="covid">
            <h3>Covid-19 Policies</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores inventore pariatur labore quos numquam dicta tempora, molestias sed nam est.
            </p>
        </div>
        <div class="faq">
            <h3>FAQ</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores inventore pariatur labore quos numquam dicta tempora, molestias sed nam est.
            </p>
        </div>
    </div>
    <div class="contact columns">
        <h3>Contact Us</h3>
        <div class="info">
            <p>Email: test@test.ca</p>
            <p>Phone: 416-123-4567</p>
    </div>
        <div class="form">
              <h4>Send us a message.</h4>
              <form class="contactform" action="mailto@danielguinto@yahoo.ca" method="post" enctype="multipart/form-data">
                  <div class="contactform__nameemail">
                      <label id="name-label" for="name-input"></label>
                      <input type="text" id="name-input" name="name" placeholder="Name">
                      <label id="email-label" for="email-input"></label>
                      <input type="text" id="email-input" name="email" placeholder="Email">
                  </div>
                  <div class="contactform__messagebox">
                      <label id="message-label" for="message-input"></label>
                      <textarea id="message-input" name="message" placeholder="Message"></textarea>
                  </div>
                  <div class="contactform__submit">
                      <button id="submit-button" type="submit">Send</button>
                  </div>
              </form>
          </div>
    </div>
</main>

<?php
require_once 'views/footer.php';
?>