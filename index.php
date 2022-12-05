<?php
   $conn = mysqli_connect('localhost','root','','db2') or die('connection failed');

   if(isset($_POST['submit'])){
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $shoes = mysqli_real_escape_string($conn, $_POST['shoes']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $number = $_POST['number'];

      $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, shoes) VALUES('$name','$email','$number', '$shoes')") or die('query failed');
      if($insert){
         $message[] = 'Order successfully!';
      }else {
         $message[] = 'Order failed';
      }
   }



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shoes.</title>
        <!-- css file -->
        <link rel="stylesheet" href="style.css">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>

    <body>
        <!-- header section -->
        <header class="header">
            <div class="header-items">
                <div class="logo">
                    <p>Shoes.</p>
                </div>
                <nav class="navbar">

                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#gallery">Gallery</a>
                    <a href="#review">Review</a>
                    <a href="#blog">Blog</a>
                    <a href="#contact">Contact</a>

                </nav>
                <div id="menuBtn" class="fas fa-bars"></div>
            </div>
        </header>
        <!-- header section end -->

        <!-- home section -->

        <section class="home" id="home">
            <div class="home-items">
                <div class="home-info">
                    <h3>It's your <span> shoes. </span></h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque fugit vero, explicabo soluta sunt tempore incidunt repellendus unde. Provident, quisquam.</p>
                </div>
            </div>
        </section>

        <!-- home section end -->



        <!-- about section -->

        <section class="about" id="about">
            <h3 class="heading">About <span>Us</span></h3>
            <div class="about-items">
                <img src="images/images2.jpg" alt="">
                <div class="about-info">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, numquam! Voluptas quisquam eius nesciunt eaque veritatis cumque. Accusamus aliquam at rerum voluptatem molestiae est et quae officia necessitatibus laudantium qui perferendis
                        asperiores quod sed, illum porro eaque iure suscipit expedita?
                        <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, omnis mollitia. Sunt impedit vel animi vitae quos aliquam quae assumenda. Exercitationem eaque rerum quod cum delectus dignissimos reiciendis illo? Porro
                        vitae maxime eaque velit fugiat, aspernatur ab autem ratione, laborum beatae enim pariatur! Quasi quibusdam assumenda autem eaque fugit perspiciatis.
                    </p>

                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </section>


        <!-- about section end -->

        <!-- gallery section -->

        <section class="gallery" id="gallery">
            <h3 class="heading">Our <span>Gallery</span></h3>
            <div class="gallery-items">
                <img src="images/austin-ramsey-3vaM5m-3yAI-unsplash.jpg" alt="">
                <img src="images/junior-samson-BjhKc5QBzlg-unsplash.jpg" alt="">
                <img src="images/luis-felipe-lins-LG88A2XgIXY-unsplash.jpg" alt="">
                <img src="images/luis-felipe-lins-S6Cp3uN39_M-unsplash.jpg" alt="">
                <img src="images/paul-gaudriault-a-QH9MAAVNI-unsplash.jpg" alt="">
                <img src="images/revolt-164_6wVEHfI-unsplash.jpg" alt="">
                <img src="images/robin-davidson-oDnPch2Fu1U-unsplash.jpg" alt="">
                <img src="images/t-kaiser-XF9zfijEQK8-unsplash.jpg" alt="">
            </div>
        </section>

        <!-- gallery section end -->

        <!-- review section -->

        <section class="review" id="review">
            <h3 class="heading">Customer <span>Review</span></h3>
            <div class="review-items">
                <div class="box">
                    <div id="data">

                    <script>
              
              var ajax = new XMLHttpRequest();
              var method = "GET";
              var url = "./data.php";
              var asynchoronous = true;

              ajax.open(method, url, asynchoronous);
              
              ajax.send();
              
              ajax.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                  
                  var data = JSON.parse(this.responseText);

                  var html = "";
                  
                  var i = 0;
                  setInterval(function () {
                    
                    var name = data[i].name;
                    var surname = data[i].surname;
                    var comment = data[i].comment;

                    html = comment + "<br><br><br><br>" + name + " " + surname ;

                    $("#data").html(html);
                    i++;

                    if (i == 4) {
                        i = 0;
                    }
                  }, 2000);
                }
              };
            </script>

                    </div>

                </div>

            </div>
        </section>

        <!-- review section end -->

        <!-- contact section start -->

        <section class="contact" id="contact">
            <h1 class="heading">Make an Order</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <?php
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
                    <input type="text" name="name" placeholder="Enter your name" class="box" required>

                    <input type="email" name="email" placeholder="Enter your email" required class="box">

                    <input type="number" name="number" placeholder="Enter your number" required class="box">

                    <input type="text" name="shoes" placeholder="Enter your shoes you want" required class="box">

                    <input type="submit" value="Make an order" name="submit" class="link-btn">
            </form>
        </section>

        <!-- contact section end -->

        <!-- blog section -->

        <section class="blog" id="blog">
            <h3 class="heading">Our <span>Blogs</span></h3>
            <div class="blog-items">
                <div class="box">
                    <img src="images/austin-ramsey-3vaM5m-3yAI-unsplash.jpg" alt="">
                    <h3>Blog 1</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique iusto, explicabo repudiandae fugiat quis, dolor, labore adipisci vero provident totam nemo magni aliquid? Asperiores a exercitationem eius tempore?</p>
                </div>
                <div class="box">
                    <img src="images/t-kaiser-XF9zfijEQK8-unsplash.jpg" alt="">
                    <h3>Blog 2</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique iusto, explicabo repudiandae fugiat quis, dolor, labore adipisci vero provident totam nemo magni aliquid? Asperiores a exercitationem eius tempore? </p>
                </div>
                <div class="box">
                    <img src="images/robin-davidson-oDnPch2Fu1U-unsplash.jpg" alt="">
                    <h3>Blog 3</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique iusto, explicabo repudiandae fugiat quis, dolor, labore adipisci vero provident totam nemo magni aliquid? Asperiores a exercitationem eius tempore? </p>
                </div>
            </div>
        </section>

        <!-- blog section end -->


        <!-- footer section -->

        <footer class="footer">
            <div class="footer-items">
                <div class="row1">
                    <p class="phone">+123 456 78 90</p>
                </div>
                <div class="row2">
                    <h3 class="heading">Our <span> Branches </span></h3>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i>Turkey</a></li>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i>USA</a></li>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i>Russia</a></li>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i>China</a></li>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i>Canada</a></li>
                    </ul>
                </div>
                <div class="row3">
                    <h3 class="heading">Contact <span> Us </span></h3>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-phone"></i>+123 456 78 90</a></li>
                        <li><a href="#"><i class="fa-solid fa-envelope"></i>burakbaloglu148@gmail.com</a></li>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i>Bozüyük, Bilecik/Turkey</a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <!-- social media accounts -->

        <section class="social-media-accounts">
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
        </section>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="script.js"></script>
    </body>

    </html>