
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restraunt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="projject.css" />
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#food">Category</a></li>
                <li><a href="menn.php">Menu</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="l.php">Logout</a></li>
            </ul>
            <h1 class="logo">Fam Restro</h1>
        </div>
    </nav>
    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">Eat Right Food</h1>
            <p>Eat Healty, it is good for our health.</p>
            <p>Reserv ur table.</p>
            <a href="reser_table.php" class="btn btn-primary">Book</a>
        </div>
    </section>

    <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About Us</p>
                <h2>We've beem serving healthy food last for 10 years</h2>
                <p>
                    The FamRestro was born out of love and respect for these humble deli creations, 
                    met with a desire to bring quality ingredients to the table. 
                    Simply put, we’re here to bring you a sandwich experience you can feel good about.
                </p>
            </div>
            <div class="about-img">
                <img src="https://images.getbento.com/accounts/c7b49cc88d1bb3823c4129b95e9fcb71/media/images/18649DSC_0814.jpg?w=1800&fit=max&auto=compress,format&h=1800" alt="food" class="lee"/>
            </div>
        </div>
    </section>
    <section id="food">
        <h2>Types of food</h2>
        <div class="food-container container">
            <div class="food-type fruite">
                <div class="img-container">
                    <img src="https://img.freepik.com/premium-photo/assorted-indian-non-vegetarian-food-recipe-served-group-includes-chicken-curry-mutton-masala-anda-egg-curry-butter-chicken-biryani-tandoori-murg-chicken-tikka-naa-roti-ramadan_466689-40882.jpg?w=2000" alt="error" class="imag1" />
                    <div class="img-content">
                        <h3>non veg</h3>
                        <a href="menn.php" class="btn btn-primary" target="blank">see items</a>
                    </div>
                </div>
            </div>
            <div class="food-type vegetable">
                <div class="img-container">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-hhaPIeUzYaYfNvwJvyx7krZL6pU413yT5A&usqp=CAU" alt="error" class="imag1"/>
                    <div class="img-content">
                        <h3>veg</h3>
                        <a href="menn.php" class="btn btn-primary" target="blank">see items</a>
                    </div>
                </div>
            </div>
            <div class="food-type grin">
                <div class="img-container">
                    <img src="https://restaurantindia.s3.ap-south-1.amazonaws.com/s3fs-public/content11143.jpg" alt="error" class="imag1"/>
                    <div class="img-content">
                        <h3>beverages</h3>
                        <a href="menn.php" class="btn btn-primary" target="blank">see items</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="food-menu">
        <h2 class="food-menu-heading">Today's Special</h2>
        <div class="food-menu-container container">
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="http://jajmaan.in/wp-content/uploads/2022/03/Untitled-design-3.png" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 1</h2>
                    <p>
                        Chicken Curry
                    </p>
                    <p class="food-price">Price: &#8377; 350</p>
                </div>
            </div>

            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/19/a6/76/d5/schezwan-baby-corn.jpg" alt="error" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 2</h2>
                    <p>
                        schezwan-baby-corn
                    </p>
                    <p class="food-price">Price: &#8377; 250</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://www.licious.in/blog/wp-content/uploads/2020/12/Popcorn-Chicken.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 3</h2>
                    <p>
                         Popcorn-Chicken
                    </p>
                    <p class="food-price">Price: &#8377; 330</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://www.pachakam.com/wp-content/uploads/2019/08/PeriPeriPaneerTikka-12620-1.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 4</h2>
                    <p>
                       peri peri panner
                    </p>
                    <p class="food-price">Price: &#8377; 290</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://spicecravings.com/wp-content/uploads/2021/04/Chicken-Biryani-Featured-2.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 5</h2>
                    <p>
                        Fam's Special Chicken Biriyani
                    </p>
                    <p class="food-price">Price: &#8377; 350</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://yarasbiryani.com/wp-content/uploads/2022/09/paneer-tikka-biryani.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 6</h2>
                    <p>
                        Panner tikka Biriyani
                    </p>
                    <p class="food-price">Price: &#8377; 390</p>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials">
        <h2 class="testimonial-title">What Our Customers Say</h2>
        <div class="testimonial-container container">
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="sathu.jpg" alt="" />
                        <p class="customer-name">Sathvik Varma</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    FamRestro good at it's service, can have a great with friends.
                    tasty food.
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="chiru.jpg" alt="" />
                        <p class="customer-name">ChiruDeep</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    FamRestro having a great ambience, good service.
                    delicious food.
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="kowshik.jpg" alt="" />
                        <p class="customer-name">Kowshik</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    FamRestro is having a good service,
                    awesome food, very hygiene.
                </p>

            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact-container container">
            <div class="contact-img">
                <img src="https://i.postimg.cc/1XvYM67V/restraunt2.jpg" alt="" />
            </div>

            <div class="form-container">
                <h2>Contact Us</h2>
                <input type="text" placeholder="Your Name" />
                <input type="email" placeholder="E-Mail" />
                <textarea cols="30" rows="6" placeholder="Type Your Message"></textarea>
                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
    </section>
    <footer id="footer">
        <h2>Restaurant &copy; all rights reserved</h2>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="projecct.js"></script>

</html>

</body>

</html>