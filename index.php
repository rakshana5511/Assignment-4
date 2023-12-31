<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Photography Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="logo">
      <img src="pic/logo.jpg" alt="Logo">
    </div>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>
  
  <!-- Main Section -->
  <main>
    <section id="home">
      <h1>Welcome to my Photography Portfolio</h1>
      <p>I am a passionate photographer with a love for capturing beautiful moments and places. Please take a look at my work below.</p>
      <a href="#portfolio" class="btn">View Portfolio</a>
    </section>
    
    <section id="about">
      <h2>About Me</h2>
      <p>My name is Rakshana Begum, and my hobby is photography. I specialize in landscape and portrait photography and have won multiple awards for my work..</p>
	  <p><a href="https://github.com/rakshana5511/Assignment_3.git">Visit My GitHub!</a></p>
    </section>
    
    <section id="portfolio">
      <h2>Portfolio</h2>
      <div class="gallery">
        <img src="pic/PicsArt_10-02-10.16.32.jpg" alt="Image 1">
        <img src="pic/PicsArt_09-09-10.09.21.jpg" alt="Image 2">
        <img src="pic/Picsart_22-03-06_19-54-40-579.jpg" alt="Image 3">
        <img src="pic/PicsArt_10-05-10.03.42.jpg" alt="Image 4">
        <img src="pic/PicsArt_11-19-08.04.52.jpg" alt="Image 5">
        <img src="pic/PicsArt_12-25-09.53.33.jpg" alt="Image 6">
      </div>
    </section>
    
    <section id="contact">
      <h2>Contact Me</h2>
      <form action="insert.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit" class="btn">Send Message</button>
      </form>
    </section>
  </main>
  
	  <footer>
    <div class="social-media">
      <a href="https://www.instagram.com"><img src="pic/instagram.png" alt="Instagram"></a>
      <a href="https://www.facebook.com"><img src="pic/facebook.png" alt="Facebook"></a>
      <a href="https://www.twitter.com"><img src="pic/twitter.png" alt="Twitter"></a>
    </div>
	</footer>	  
	
	  <script src="script.js"></script>
	</body>
</html>
