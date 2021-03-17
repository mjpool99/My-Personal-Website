<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>My Personal Website</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Sans&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/2561a817f5.js"></script>
</head>

<body>
  <section id="header">
    <div class="text">
      Hello, my name is <span class="name">Mason Pool</span>.
      <br>
      I'm a Full-Stack web developer.
    </div>
    <a class="nav-btn" href="#about">Check Me Out <i class=" icon fa fa-arrow-right" aria-hidden="true"></i></a>
  </section>

  <nav class="nav-bar">
    <ul>
      <li><a href="#about">About Me</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#contact-me">Contact</a></li>
    </ul>
  </nav>
  <section id="about">
    <h3>About Me</h3>
    <div class="aboutBody">
      <div class="my-img">
        <img class="my-img" src="images/Profilepic.png" alt="My-Profile-picture">
      </div>
      <div class="bio">
        I am a 21 year old Full-Stack Web Developer. I only recently started learning to program, but I have loved the experience so far and I can't wait to see where it takes me.
      </div>
    </div>
  </section>
  <hr>
  <section id="skills">
    <h3>Skills</h3>
    <div class="frontEnd">
      <table>
        <tr>
          <th colspan="2">Front End</th>
        </tr>
        <tr>
          <td>HTML5</td>
          <td>⭐⭐⭐⭐</td>
        </tr>
        <tr>
          <td>CSS3</td>
          <td>⭐⭐⭐</td>
        </tr>
        <tr>
          <td>JavaScript</td>
          <td>⭐⭐⭐</td>
        </tr>
        <tr>
          <td>Bootstrap</td>
          <td>⭐⭐⭐</td>
        </tr>
        <tr>
          <td>Reactjs</td>
          <td>⭐⭐⭐</td>
        </tr>
      </table>
    </div>
    <div class="backEnd">
      <table>
        <tr>
          <th colspan="2">Back End</th>
        </tr>
        <tr>
          <td>Node.Js</td>
          <td>⭐⭐⭐</td>
        </tr>
        <tr>
          <td>Express.JS</td>
          <td>⭐⭐⭐</td>
        </tr>
        <tr>
          <td>PHP</td>
          <td>⭐⭐</td>
        </tr>
        <tr>
          <td>Jquery</td>
          <td>⭐⭐⭐</td>
        </tr>
      </table>
    </div>
  </section>
  <hr>
  <section id="projects">
    <h3>Projects</h3>
    I do not have any projects yet, but I will be updating this soon.
  </section>
  <hr>
  <section id="contact-me">
    <div class="cm">
      <h3>Contact</h3>
      <span><p  class="cms">Have questions?</p></span>
    </div>
    <div class="form">
  <form class="contact" action="contact.php" method="post">
    <input type="text" name="name" placeholder="Your Name"><br>
    <input type="email" name="email" placeholder="Your Email"><br>
    <textarea name="message" rows="8" cols="80" placeholder="Your Message"></textarea><br>
    <button id="email-btn" type="submit" name="Submit">Submit <i class="fa fa-envelope"></i></button>
  </form>
  </div>
  </section>
<hr>
<section id="footer">
  <div class="socialdiv">
  <a href="https://www.instagram.com/mjpool99/"><i class="social fa fa-instagram" aria-hidden="true"></i></a>
  <a href="https://www.facebook.com/mason.pool.58"><i class="social fa fa-facebook-official" aria-hidden="true"></i></a>
  <a href="https://www.linkedin.com/in/mason-pool-3612a3187/"><i class="social fa fa-linkedin-square" aria-hidden="true"></i></a>
  </div>
  <p> <em>©️ 2021 Mason Pool</em> </p>
</section>


  <script src="index.js" charset="utf-8"></script>
</body>

</html>
