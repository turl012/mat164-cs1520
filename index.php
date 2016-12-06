<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
    <title>Matthew Turley</title>
  </head>

  <body>
    <header>
      <div class="nav">
        <h1>Matthew Turley</h1>
        <ul>
          <li><a href="#aboutMe">About Me</a></li>
          <li><a href="#exp">Experience</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </header>
    <section id="aboutMe">
      <img src="img/about_me.png" alt="Photo of Me" />
      <h2>Hi, I'm Matt</h2>
      <p>I am a senior at the University of Pittsburgh studying computer science!</p>
      <p>My main interest in computer science are in security and data.
        I love seeing data visualized, and how it can be used to impact our daily lives.</p>
      <p>While I am originally from Mississippi, I have greatly enjoyed my time at Pitt even though snow is not okay.</p>
    </section>
    <section id="exp">
      <h2>Experience</h2>
      <section>
        <section id="education">
          <h3>Education</h3>
          <p><b>University of Pittsburgh</b></p>
          <p>B.S Computer Science - 2017</p>
          <p style="padding-top:1em"><b>MS School for Math and Science</b></p>
          <p>High School - 2012</p>
        </section>
        <section id="prog">
          <h3>Programming Languages</h3>
          <p>Java</p>
          <p>Oracle / SQL</p>
          <p>HTML, PHP, and JavaScript</p>
          <p>C</p>
        </section>
        <section id="work">
          <h3>Work Experience</h3>
          <p><b>University of Pittsburgh CSSD</b></p>
          <p>Senior Student Technical Consultant</p>
          <p>Student Technical Consultant</p>
          <p style="padding-top:1em"><b>Camp Seph Mack</b></p>
          <p>C.O.P.E. &amp Climbing Director</p>
        </section>
        <section id="clubs">
          <h3>Clubs</h3>
          <p>Panther Swim Club</p>
          <p>Pitt Outdoors Club</p>
        </section>
      </section>
    </section>
    <section id="contact">
      <h2>Contact Me</h2>
      <div id="hideForm">
      <form action="mail.php" method="post" name="contactMe" id="contactMe" onsubmit="return(validateForm());">
        <label for="name"><div id="nameLabel">Name:</div></label>
        <input type="text" name="name" />
        <label for="email"><div id="emailLabel">Email:</div></label>
        <input type="text" name="email" />
        <textarea name="msg">Please Type Your Message</textarea>
        <button type="submit" value="submit">Submit!</button>
      </form>
    </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="scripts/form.js"></script>
  </body>
</html>
