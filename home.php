<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Partner</title>
    <meta name="description" content="">
    <meta name="viewpoint" content="width=device=width,initial-scale=1"> 
    <!---font awesome cnd-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!--fonts-->
     <link rel="stylesheet" href="font/fonts.css">
     <!--normalize css-->
     <link rel = "stylesheet" href = "css/normalize.css">
      <!-- custom css -->
      <link rel = "stylesheet" href = "css/utility.css">
      <link rel = "stylesheet" href = "css/style.css">
      <link rel = "stylesheet" href = "css/responsive.css">
</head>
<body>
     <!-- navbar  -->
     <nav class = "navbar">
        <div class = "container flex">
            <a href = "home.php" class = "site-brand">
                Travel<span>Partner</span>
            </a>
            <button type = "button" id = "navbar-show-btn" class = "flex">
                <i class = "fas fa-bars"></i>
            </button>
            <div id = "navbar-collapse">
                <button type = "button" id = "navbar-close-btn" class = "flex">
                    <i class = "fas fa-times"></i>
                </button>
                <ul class = "navbar-nav">
                    <li class = "nav-item">
                        <a href = "home.php" class = "nav-link">Home</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "gallery.html" class = "nav-link">Gallery</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "about.php" class = "nav-link">About Us</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "Login.php" class = "nav-link">Login</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "contact.html" class = "nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar  -->

      <!-- header -->      
      <header class = "flex">
        <!--bottom nav bar booking -->
        <nav class="bottom-nav">
    <div class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-plane"></i>
            <span>Flights</span>
        </a>
    </div>
    <div class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-hotel"></i>
            <span>Hotels</span>
        </a>
    </div>
    <div class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-car"></i>
            <span>Cabs</span>
        </a>
    </div>
</nav>

<!--end of bottom nav -->
         
        <div class = "container">
            <div class = "header-title">
                <h1>Leave Your Footprints</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum maxime enim odit illum in molestias beatae doloremque, ratione optio.</p>
            </div>
            <div class="header-form">
                <h2>Choose your Travel location:</h2>
                <form class="flex" action="login/login.php" method="get">
                  <input type="text" class="form-control" placeholder="Destination name">
                  <input type="date" class="form-control" placeholder="Date">
                  <input type="number" class="form-control" placeholder="Price ($)">
                  <input type="submit" class="btn" value="Search">
                </form>
              </div>
        </div>
    </header>
    <!-- header -->
     <!-- featured section -->
     <section id = "featured" class = "py-4">
        <div class = "container">
            <div class = "title-wrap">
                <span class = "sm-title">know about some places before your travel</span>
                <h2 class = "lg-title">featured places</h2>
            </div>

            <div class = "featured-row">
                <div class = "featured-item my-2 shadow">
                    <img src = "img/featured-rio-de-janeiro.jpg" alt = "featured place">
                    <div class = "featured-item-content">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                            Reo De Janeiro, Brazil
                        </span>
                        <div>
                            <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>

                <div class = "featured-item my-2 shadow">
                    <img src = "img/featured-maldives.jpg" alt = "featured place">
                    <div class = "featured-item-content">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                            Veligandu, Maldives
                        </span>
                        <div>
                            <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>

                <div class = "featured-item my-2 shadow">
                    <img src = "img/featured-The Brandenburg Gate.jpg" alt = "featured place">
                    <div class = "featured-item-content">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                            The Brandenburg Gate, Germany
                        </span>
                        <div>
                            <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>

                <div class = "featured-item my-2 shadow">
                    <img src = "img/featured-BANGKOK, thailand.jpg" alt = "featured place">
                    <div class = "featured-item-content">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                            BANGKOK, thailand
                        </span>
                        <div>
                            <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>

                <div class = "featured-item my-2 shadow">
                    <img src = "img/featured-Hawa Mahal.jpg" alt = "featured place">
                    <div class = "featured-item-content">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                            Jaipur  Rajasthan, India
                        </span>
                        <div>
                            <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>

                <div class = "featured-item my-2 shadow">
                    <img src = "img/featured- Vrindavan, Mathura.jpg" alt = "featured place">
                    <div class = "featured-item-content">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                            Vrindavan, Mathura India
                        </span>
                        <div>
                            <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of featured section -->

    <!--services section -->

    <section id = "services" class = "py-4">
        <div class = "container">
            <div class = "title-wrap">
                <span class = "sm-title">know about services that we offer</span>
                <h2 class = "lg-title">Our services</h2>
            </div>
            <div class = "services-row">
                <div class = "services-item">
                    <span class = "services-icon">
                    </span>
                    <h3>Product Offering</h3>
                    <p class="text">Flights, International Flights, Charter Flights, Hotels, International Hotels, Homestays and Villas, Activities, Holidays In India, International Holidays, Book Hotels From UAE, myBiz for Corporate Travel, Book Online Cabs, Book Bus Tickets, Book Train Tickets, Cheap Tickets to India, Book Flights From US, Book Flights From UAE, Trip Planner, Forex Card, Buy Foreign Currency, Gift Cards, Gift, Wedding Gift, Anniversary Gift, Birthday Gift, Diwali Gift, Valentines Gift, Farewell Gift, Christmas Gift, New Year Gift, Trip Money, Trip Ideas, Travel Blog, PNR Status, MakeMyTrip Advertising Solutions, One Way Cab</p>
   
                     <div class = "services-row">
                        <div class = "services-item">
                            <span class = "services-icon">
                            </span>
                            <h3>TravelPartner</h3>
                            <p class="text">About Us, Investor Relations, Careers, MMT Foundation, Legal Notices, CSR Policy, myPartner - Travel Agent Portal, Foreign Exchange, List your hotel, Partners- Redbus, Partners- Goibibo, Advertise with Us, Holiday-Franchise, Partners- BookMyForex, RedBus Ferry Malaysia, RedBus Ferry Singapore, redBus Vietnam, redBus Cambodia, Things to Do in Malaysia, Things to Do in Singapore</p>        
                   
                            <div class = "services-row">
                                <div class = "services-item">
                                    <span class = "services-icon">
                                    </span>
                                    <h3>TravelPartner</h3>
                                    <p class="text">About Us, Investor Relations, Careers, MMT Foundation, Legal Notices, CSR Policy, myPartner - Travel Agent Portal, Foreign Exchange, List your hotel, Partners- Redbus, Partners- Goibibo, Advertise with Us, Holiday-Franchise, Partners- BookMyForex, RedBus Ferry Malaysia, RedBus Ferry Singapore, redBus Vietnam, redBus Cambodia, Things to Do in Malaysia, Things to Do in Singapore</p>        
                                   
                                    <div class = "services-row">
                                        <div class = "services-item">
                                            <span class = "services-icon">
                                            </span>
                                            <h3>About THE SITE</h3>
                                            <p class="text">Customer Support, Payment Security, Privacy Policy, Cookie Policy, User Agreement, Terms of Service, Franchise Offices, Make A Payment, Work From Home, Escalation Channel, Report Security Issues</p>        
                                           
                                            <div class = "services-row">
                                                <div class = "services-item">
                                                    <span class = "services-icon">
                                                    </span>
                                                    <h3>TOP HOTELS IN INDIA</h3>
                                                    <p class="text">Fairmont Jaipur, St Regis Goa, Six Senses Fort Barwara, W Goa, Grand Hyatt Goa, Shangri-La Bangalore, The St Regis Mumbai, Taj Rishikesh, Grand Hyatt Mumbai, Le Meridien Delhi, Rambagh Palace Jaipur, Leela Palace Chennai, The Leela Palace Udaipur, Taj Lake Palace Udaipur, Jw Marriott Chandigarh, Alila Diwa Goa, Le Meridien Goa, Taj Lands End Mumbai, Itc Grand Chola Chennai, Itc Maratha Mumbai, Oberoi Udaivilas, Jai Mahal Palace Jaipur, Taj Mahal Tower Mumbai, Marriott Suites Pune, Park Hyatt Chennai, The Leela Palace Jaipur, Jw Marriott Mumbai Sahar, Jw Marriott Mumbai Juhu, The Ritz Carlton Bengaluru, The Oberoi New Delhi, Taj Resort & Convention Centre Goa, Taj Bengal Kolkata, Taj Coromandel Chennai, The Oberoi Gurgaon, The Westin Goa, Jw Marriott Hotel Pune, The Leela Palace New Delhi, Taj West End Bengaluru, The Taj Mahal Palace Mumbai, Best Hotels in India</p>        
                                           
                                                    <div class = "services-row">
                                                        <div class = "services-item">
                                                            <span class = "services-icon">
                                                            </span>
                                                            <h3>BOOK HOTELS IN INDIA FROM TOP DESTINATIONS</h3>
                                                            <p class="text">Hotels in Jaipur, Hotels in Goa, Hotels in Delhi, Hotels in Udaipur, Hotels in Gurgaon, Hotels in Mumbai, Hotels in Bangalore, Hotels in Rishikesh, Hotels in Agra, Hotels in Chennai, Hotels in Kasauli, Hotels in Kolkata, Hotels in Pune, Hotels in Manali, Hotels in Lonavala, Hotels in Shimla, Hotels in Munnar, Hotels in Ayodhya, Hotels in Gulmarg, Hotels in Leh, Hotels in Hyderabad</p>        
                                           
                                                            <div class = "services-row">
                                                                <div class = "services-item">
                                                                    <span class = "services-icon">
                                                                    </span>
                                                                    <h3>TOP International HOTELS</h3>
                                                                    <p class="text">Adaaran Club Rannalhi, Marina Bay Sands Singapore, Coco Bodu Hithi, Taj Dubai, Atlantis Hotel Dubai, Amari Phuket, Jw Marriott Dubai, Armani Hotel Dubai, Grand Hyatt Dubai, Saii Lagoon Maldives, Gevora Hotel Dubai, Hyatt Regency Dubai, Pan Pacific Singapore, The Palm Dubai, Caesars Palace, Baiyoke Sky Hotel, Centara Pattaya Hotel, Embudu Village, Orchard Hotel Singapore, Reethi Beach Resort, Ambassador Hotel Bangkok, Dusit Thani Pattaya, Shangri La Singapore, Sunbeam Hotel Pattaya, Taj Samudra Colombo, Bangkok Palace Hotel, Hilton Pattaya, Novotel Phuket Resort, Taj Exotica Resort Maldives, Village Hotel Bugis, Avani Atrium Bangkok, The Plaza New York, Village Hotel Albert Court, Amari Pattaya</p>        
                                                                    
                                                                    <div class = "services-row">
                                                                        <div class = "services-item">
                                                                            <span class = "services-icon">
                                                                            </span>
                                                                            <h3>QUICK LINKS</h3>
                                                                            <p class="text">Delhi Chennai Flights, Delhi Mumbai Flights, Delhi Goa Flights, Chennai Mumbai flights, Mumbai Hyderabad flights, Kolkata to Rupsi Flights, Rupsi to Guwahati Flights, Pasighat to Guwahati Flights, Delhi to Khajuraho Flights, Cochin to Agatti Island Flights, Hotels in Delhi, Hotels in Mumbai, Hotels In Goa, Hotels In Jaipur, Hotels In Ooty, Hotels In Udaipur, Hotels in Puri, Hotels In North Goa, Hotels In Rishikesh, Honeymoon Packages, Kerala Packages, Kashmir Packages, Ladakh Packages, Goa Packages, Thailand Packages, Sri Lanka Visa, Thailand Visa, Explore Goa, Explore Manali, Explore Shimla, Explore Jaipur, Explore Srinagar</p>     
                                                                            
                                                                            <div class="section">
                                                                                <div class="column">
                                                                                    <h2>Why TravelPartner?</h2>
                                                                                    <p>Established in 2000, TravelPartner has since positioned itself as one of the leading companies, providing great offers, competitive airfares, exclusive discounts, and a seamless online booking experience to many of its customers. The experience of booking your flight tickets, hotel stay, and holiday package through our desktop site or mobile app can be done with complete ease and no hassles at all. We also deliver amazing offers, such as Instant Discounts, Fare Calendar, MyRewardsProgram, MyWallet, and many more while updating them from time to time to better suit our customers' evolving needs and demands.</p>
                                                                                </div>
                                                                                <div class="column">
                                                                                    <h2>Booking Flights with TravelPartner</h2>
                                                                                    <p>At TravelPartner, you can find the best of deals and cheap air tickets to any place you want by booking your tickets on our website or app. Being India's leading website for hotel, flight and holiday bookings, TravelPartner helps you book flight tickets that are affordable and customized to your convenience. With customer satisfaction being our ultimate goal, we also have a 24/7 dedicated helpline to cater to our customer's queries and concerns. Serving over 5 million happy customers, we at TravelPartner are glad to fulfill the dreams of folks who need a quick and easy means to find air tickets. You can get a hold of the cheapest flight of your choice today while also enjoying the other available options for your travel needs with us.</p>
                                                                                </div>
                                                                                <div class="column">
                                                                                    <h2>Domestic Flights with TravelPartner</h2>
                                                                                    <p>TravelPartner is India's leading player for flight bookings. With the cheapest fare guarantee, experience great value at the lowest price. Instant notifications ensure current flight status, instant fare drops, amazing discounts, instant refunds and rebook options, price comparisons and many more interesting features.</p>
                                                                                </div>
                                                                            </div>     
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>           
                                                      <!--end of section services-->

         <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        Travel<span>Partner</span>
                    </a>
                    <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptates maiores nam vitae iusto. Placeat rem sint voluptas natus exercitationem autem quod neque, odit laudantium reiciendis ipsa suscipit veritatis voluptate.</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "#">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "#">Thailand</a></li>
                        <li><a href = "#">Australia</a></li>
                        <li><a href = "#">Maldives</a></li>
                        <li><a href = "#">Switzerland</a></li>
                        <li><a href = "#">Germany</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for Newsletter!</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        
                                                            

                            <!-- js -->
    <script src = "js/script.js"></script>
    
        
    </body>
</html>






