<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>travelsmoveblog</title>

    <link rel="stylesheet" href="styleblog.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>

  <body>
    <!-- NAVBAR -->
    <nav>
      <h2>Travels<span style="color:#5776f3;">Blog</span></h2>
      <div class="menu" onclick="toggleMenu()">☰</div>

      <ul id="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#blogs">Blogs</a></li>
        <li><a href="#reviews">Reviews</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

    <!-- HERO -->
    <section class="hero" id="home">
      <div class="hero-content">
        <h1>PrimePages Creative & Brandable</h1>
        <!-- <p>Tech • Life • Travel Insights</p> -->

        <div class="hero-buttons">
          <button>Explore</button>
          <button class="secondary">Learn More</button>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section class="blogsectionone__about" id="about">
      <div class="blogsectionone__aboutContainer">
        <!-- LEFT CONTENT -->
        <div class="blogsectionone__aboutText">
          <h2>About Our Blog</h2>

          <p class="blogsectionone__aboutIntro">
            Welcome to <b>Travelslog</b> — a modern digital space where ideas meet
            knowledge. We create content that helps you grow in technology,
            improve your lifestyle, and explore the world through travel
            stories.
          </p>

          <!-- <p class="blogsectionone__aboutDesc">
            Our mission is simple: make learning easy, practical, and enjoyable.
            Every article is designed with real-world examples, so you don’t
            just read — you actually understand and apply.
          </p> -->

          <!-- HIGHLIGHTS -->
          <div class="blogsectionone__aboutPoints">
            <!-- <div class="blogsectionone__point">
              <span>💻</span>
              <p>Tech tutorials with real projects</p>
            </div> -->

            <div class="blogsectionone__point">
              <span>🌱</span>
              <p>Life motivation & productivity tips</p>
            </div>

            <div class="blogsectionone__point">
              <span>✈️</span>
              <p>Travel guides & hidden places</p>
            </div>
          </div>

          <!-- STATS -->
          <div class="blogsectionone__stats">
            <div>
              <h3>100+</h3>
              <p>Articles</p>
            </div>

            <div>
              <h3>50K+</h3>
              <p>Readers</p>
            </div>

            <div>
              <h3>10+</h3>
              <p>Categories</p>
            </div>
          </div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="blogsectionone__aboutImage">
          <img src="images/WildTrail_Blogne.jpeg" class="blog-img" />
      </div>
    </section>

    <!-- BLOG -->
    <section class="blogsectionone" id="blogs">
      <h2 class="blogsectionone__title">Latest Articles</h2>
      <p class="blogsectionone__subtitle">
        Explore Tech, Life & Travel insights
      </p>

      <!-- FILTER BUTTONS -->
      <div class="blogsectionone__filters">
        <button class="active" onclick="filterBlog('all', this)">All</button>
        <button onclick="filterBlog('life', this)">Life</button>
        <button onclick="filterBlog('travel', this)">Travel</button>
      </div>

      <!-- BLOG GRID -->
      <div class="blogsectionone__container">
        <!-- CARD 1 -->
      

        <!-- CARD 2 -->
        <div class="blogsectionone__card life">
          <div class="blogsectionone__image">
            <img src="images/Mindset_Growth.jpeg" />
            <span class="blogsectionone__tag blogsectionone__life">LIFE</span>
          </div>
          <div class="blogsectionone__content">
            <h3>Success Habits</h3>
            <p>Build powerful daily routines.</p>
            <button class="blogsectionone__btn">Read More</button>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="blogsectionone__card travel">
          <div class="blogsectionone__image">
            <img src="images/WildTrail_Blog.jpeg" />
            <span class="blogsectionone__tag blogsectionone__travel"
              >TRAVEL</span
            >
          </div>
          <div class="blogsectionone__content">
            <h3>Hidden Beaches</h3>
            <p>Best secret travel spots in India.</p>
            <button class="blogsectionone__btn">Read More</button>
          </div>
        </div>

        <!-- CARD 4 -->
       

        <!-- CARD 5 -->
        <div class="blogsectionone__card life">
          <div class="blogsectionone__image">
            <img src="images/Success_Habits.jpeg" />
            <span class="blogsectionone__tag blogsectionone__life">LIFE</span>
          </div>
          <div class="blogsectionone__content">
            <h3>Success Habit</h3>
            <p>Change your thinking, change your life.</p>
            <button class="blogsectionone__btn">Read More</button>
          </div>
        </div>

        <!-- CARD 6 -->
        <div class="blogsectionone__card travel">
          <div class="blogsectionone__image">
            <img src="images/Mountain_Trips.jpeg" />
            <span class="blogsectionone__tag blogsectionone__travel"
              >TRAVEL</span
            >
          </div>
          <div class="blogsectionone__content">
            <h3>Mountain Trips</h3>
            <p>Explore peaceful hill stations.</p>
            <button class="blogsectionone__btn">Read More</button>
          </div>
        </div>
      </div>
    </section>

    <!-- REVIEWS -->
    <section class="reviews" id="reviews">
      <h2>Client Reviews ⭐</h2>
      <p>Trusted feedback from readers</p>

      <div class="review-container">
        <div class="review-card">
          <div class="review-header">
            <img src="images/freelancer-using-laptop-telephone-outdoors-summer-day.jpg" />
            <div>
              <h4 style ="color:#000">Rahul patil <span>✔ Verified</span></h4>
              <div class="stars">⭐⭐⭐⭐⭐</div>
            </div>
          </div>
          <p>“Amazing blog website with clean UI and useful content!”</p>
        </div>

        <div class="review-card">
          <div class="review-header">
            <img src="images/open-agenda-with-starfish-shells.jpg" />
            <div>
              <h4 style ="color:#000">Sneha patil <span>✔ Verified</span></h4>
              <div class="stars">⭐⭐⭐⭐⭐</div>
            </div>
          </div>
          <p>“Very professional design and easy to use interface.”</p>
        </div>
      </div>
    </section>

    <section class="blogContact" id="contact">
      <div class="blogContact__header">
        <h2>Let’s Build Something Great</h2>
        <p>We usually respond within 24 hours 🚀</p>
      </div>

      <div class="blogContact__container">
        <!-- LEFT INFO (MODERN CARDS) -->
        <div class="blogContact__info">
          <div class="infoCard">
            <span>📧</span>
            <div>
              <h4>Email</h4>
              <p>support@Travelslog.com</p>
            </div>
          </div>

          <div class="infoCard">
            <span>📞</span>
            <div>
              <h4>Phone</h4>
              <p>+91 123 456 789</p>
            </div>
          </div>

          <div class="infoCard">
            <span>📍</span>
            <div>
              <h4>Location</h4>
              <p>Mumbai, India</p>
            </div>
          </div>
        </div>

        <!-- RIGHT FORM (MODERN FLOAT STYLE) -->
        <form class="blogContact__form">
          <h3>Send a Message</h3>

          <div class="inputBox">
            <input type="text" required />
            <label>Your Name</label>
          </div>

          <div class="inputBox">
            <input type="email" required />
            <label>Your Email</label>
          </div>

          <div class="inputBox">
            <textarea rows="5" required></textarea>
            <label>Your Message</label>
          </div>

          <button type="submit">Send Message 🚀</button>
        </form>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="blogFooter">
      <div class="blogFooter__container">
        <!-- ABOUT -->
        <div class="blogFooter__box">
          <h3 class="blogFooter__title">About MyBlog</h3>
          <p class="blogFooter__text">
            MyBlog is a modern platform sharing Tech tutorials, Life motivation,
            and Travel experiences. We focus on clean learning and practical
            knowledge.
          </p>
        </div>

        <!-- LINKS -->
        <div class="blogFooter__box">
          <h3 class="blogFooter__title">Quick Links</h3>
          <p class="blogFooter__link">Home</p>
          <p class="blogFooter__link">About</p>
          <p class="blogFooter__link">Blogs</p>
          <p class="blogFooter__link">Reviews</p>
        </div>

        <!-- CATEGORIES -->
        <div class="blogFooter__box">
          <h3 class="blogFooter__title">Categories</h3>
          <p class="blogFooter__link">Life</p>
          <p class="blogFooter__link">Travel</p>
          <p class="blogFooter__link">Learning</p>
        </div>

        <!-- CONTACT -->
        <div class="blogFooter__box">
          <h3 class="blogFooter__title">Contact</h3>
          <p>
          <i class="fa-solid fa-envelope"></i> 
          <a> &nbsp; travelsmoveblog@email.com</a>
        </p>

        <p>
          <i class="fa-solid fa-phone"></i> 
          <a> &nbsp; +91 98765 43210</a>
        </p>

        <p>
          <i class="fa-solid fa-location-dot"></i> 
          &nbsp;Your Address, India
        </p>


       </div>
      </div>
    </footer>

    <div class="blogFooter__bottom">
      <p>© 2026 Travels<span style="color:#5776f3;">Blog</span> | All Copyright Reserverd</p>
    </div>

   <script src="script.js"></script>
  </body>
</html>
