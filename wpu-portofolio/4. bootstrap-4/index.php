<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dina Khairunnisa - Personal Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body {
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.6;
    }
    header {
      background-color:rgb(231, 92, 208);
      color: white;
      padding: 2rem 1rem;
      text-align: center;
      position: relative;
    }
    header .profile-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }
    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid white;
    }
    header h1 {
      font-size: 3rem;
    }
    header p {
      font-size: 1.2rem;
      margin-top: 0.5rem;
    }
    .container {
      max-width: 1000px;
      margin: 2rem auto;
      padding: 0 1rem;
    }
    .section {
      margin-bottom: 2.5rem;
    }
    h2 {
      color:rgb(231, 92, 201);
      margin-bottom: 1rem;
      border-bottom: 2px solid #ddd;
      padding-bottom: 0.5rem;
    }
    .about p,
    .social p,
    .projects p,
    .hobbies p,
    .goals p,
    .contact p {
      margin-bottom: 1rem;
    }
    .social ul {
      list-style: none;
      padding: 0;
    }
    .social li {
      margin: 0.5rem 0;
    }
    a {
      color:rgb(231, 92, 208);
      text-decoration: none;
    }
    .gallery {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .gallery img {
      width: 100%;
      max-width: 300px;
      border-radius: 10px;
    }
    .video {
      margin-top: 1rem;
    }
    iframe {
      width: 100%;
      height: 315px;
      border-radius: 10px;
      border: none;
    }
    .upload-section {
      margin: 2rem 0;
      padding: 1rem;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      text-align: center;
    }
    .upload-section input[type="file"] {
      margin-top: 0.5rem;
    }
    .contact-form label {
      display: block;
      margin: 0.5rem 0 0.2rem;
    }
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 0.5rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .contact-form button {
      padding: 0.7rem 1.5rem;
      background-color:rgb(231, 92, 185);
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    footer {
      text-align: center;
      padding: 1.5rem;
      background-color: #eee;
      font-size: 0.9rem;
    }
    .flex-sections {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
}

.flex-sections .section {
  flex: 1 1 30%;
  background-color: #fff;
  padding: 1rem;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.05);
}

  </style>
</head>
<body>
  <header>
    <div class="profile-wrapper">
 <img src="img/thumbs/profiledina.jpg" alt="Foto Profil Dina" class="profile-pic">
      <h1>Dina Khairunnisa</h1>
    </div>
    <p>Content Creator | Social Media Enthusiast | Database Engineering</p>
  </header>

  <div class="container">
    <section class="section about">
      <h2>About Me</h2>
      <p>Hi! I’m <strong>Dina Khairunnisa</strong>, Saya saat ini sedang menempuh pendidikan di UIN Imam Bonjol dengan semangat untuk mengembangkan diri di berbagai bidang. Saya memiliki ketertarikan besar dalam dunia kecantikan dan bercita-cita menjadi seorang beauty creator. Di samping itu, saya juga menekuni dunia teknologi, khususnya di bidang rekayasa basis data,
       dengan harapan dapat menjadikan database engineering sebagai profesi utama saya. Kombinasi minat ini mencerminkan semangat saya untuk terus belajar dan berkarya, baik dalam industri kreatif maupun teknologi. Welcome to my portfolio!</p>
    </section>

    <section class="section social">
      <h2>Social Media</h2>
      <ul>
        <li><strong>Instagram:</strong> <a href="https://instagram.com/_chillhomedddd" target="_blank">@_chillhomedddd</a> — 44 Followers</li>
        <li><strong>YouTube:</strong> <a href="https://www.youtube.com/@DinaKhairunnisa-f3h" target="_blank">Dina Khairunnisa</a> — Lifestyle & Vlogs</li>
        <li><strong>Email:</strong> <a href="mailto:khairunnisadina012@gmail.com">khairunnisadina012@gmail.com</a></li>
      </ul>
    </section>

    <section class="section projects">
      <h2>My Content</h2>
      <p>✨ Instagram Reels: Makeup tips, day-in-my-life clips, fashion inspiration</p>
      <p>🎥 YouTube Vlogs: Daily routines, travel diaries, Q&A sessions</p>
      <p>📝 Collaborations: Open for brand partnerships, product reviews, and shoutouts</p>
      <div class="gallery" id="image-gallery">
        <img src="img/thumbs/profile-nisa.jpg">
        <img src="img/thumbs/profileku.jpg">
        <img src="img/thumbs/dinapoto.jpg">
      </div>
      <div class="upload-section">
        <h3>Upload Your Own Instagram Image</h3>
        <input type="file" id="instagramImageUpload" accept="image/*" multiple>
      </div>
      <div class="video">
        <h3>Latest YouTube Video</h3>
        <iframe src="https://www.youtube.com/embed/QF8sgKWquIw" title="YouTube video" allowfullscreen></iframe>
        <p>Check out my YouTube channel for more content: <a href="https://www.youtube.com/@DinaKhairunnisa-f3h" target="_blank">Dina Khairunnisa</a></p>
      </div>
    </section>

 <div class="flex-sections">
      <section class="section services">
        <h2>Layanan</h2>
        <p>🎯 Promosi brand melalui konten Instagram & YouTube</p>
        <p>🛍️ Review produk fashion, skincare, dan lifestyle</p>
        <p>🎥 Pembuatan konten bersponsor yang menarik dan profesional</p>
      </section>

      <section class="section hobbies">
        <h2>Hobi & Minat</h2>
        <p>📷 Fotografi kreatif & estetika</p>
        <p>🧘 Self-care dan journaling</p>
        <p>🎶 Menikmati musik santai dan K-pop</p>
      </section>

      <section class="section goals">
        <h2>Goals</h2>
        <p>🌟 Capai 5.000 followers di Instagram</p>
        <p>🤝 Bekerja sama dengan brand ternama</p>
        <p>🚀 Merilis produk atau brand pribadi</p>
      </section>
    </div>


    <section class="section contact">
      <h2>Contact Me</h2>
      <form class="contact-form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone">

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </section>
  </div>

  <footer>
    &copy; 2025 Dina Khairunnisa. All rights reserved.
  </footer>

  <script>
    document.getElementById('instagramImageUpload').addEventListener('change', function(event) {
      const files = event.target.files;
      const gallery = document.getElementById('image-gallery');

      // Clear previous images
      gallery.innerHTML = '';

      for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.alt = 'Uploaded Instagram Image';
          img.style.width = '100%'; // Ensure the image fits within the gallery
          img.style.maxWidth = '300px'; // Set a max width for the images
          img.style.borderRadius = '10px'; // Add border radius for aesthetics
          gallery.appendChild(img);
        };

        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>
