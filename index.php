<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online TEAMPROJECT Menu App</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html {
            scroll-behavior: smooth;
            box-sizing: border-box;
        }

        body {
            background-image: url('https://images.unsplash.com/photo-1495195129352-aeb325a55b65?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        /* navigation changes  */
        
        a {
            text-decoration: none !important;
            font-family: "Century Gothic", 'Lato', sans-serif;
        }

      
        .et-hero-tabs-container {

    display: flex;
    flex-direction: row;
    position: absolute;
    bottom: 0;
    max-width: 100%;
    width: 100%;
    height: 70px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background: #fff;
    z-index: 10;
    
}

&--top {
        position: fixed;
        top: 0;
    }

.et-hero-tab {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 3rem;
    /* flex: 1; */
    color: #000;
    letter-spacing: 0.1rem;
		transition: all 0.5s ease;
		font-size: 0.8rem;
	  
}

.et-hero-tab:hover{
   
			color:white;
      background: rgba(102,177,241,0.8);
			transition: all 0.5s ease;
}

et-hero-tab-slider {
    position: absolute;
    bottom: 0;
    width: 0;
    height: 6px;
    background: #66B1F1;
    transition: left 0.3s ease;
}

.et-hero-tab-slider {
    position: absolute;
    bottom: 0;
    width: 0;
    height: 6px;
    background: #66B1F1;
    transition: left 0.3s ease;
}


/* //////////////////////////////////////END /////////////////////////////// */



        #navbar-header {
            position: fixed;
            top: 0;
            width: 100%;
            
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .home-container {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 1100px;
            color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 40px;
            text-shadow: 2px 2px rgb(100, 100, 100);
            background-color: rgba(0, 0, 0, 0.4);
            margin-top: 50px;
        }

        .home-container > img {
            width: 150px;
        }

        .home-container > h1 {
            font-size: 90px;
            font-weight: bold;
        }

        .home-container > p {
            font-size: 25px;
        }

        .contact-us-container {
            width: 1100px;
            color: rgb(255, 255, 255);
            text-shadow: 2px 2px rgb(100, 100, 100);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-top: 64px;
        }

        .contact-container > div {
            padding: 30px;
        }

        .details-container {
            background-color: rgba(0, 0, 0, 0.4);
            padding: 50px;
        }

        .details-container > p {
            margin: 10px;
        }

        .details-container > h6 {
            margin: 25px;
        }

        .social {
            margin: 10px 35px;
        }
        
        .social > i {
            font-size: 25px;
            margin-right: 15px;
        }

        .form-container {
            padding: 50px;
        }

        .study-menu-container {
            display: flex;
            flex-direction: column;
            width: 1200px;
            height: 720px;
            margin-top: 50px;
            color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .menus {
            display: flex;
            flex-wrap: wrap;
            overflow: auto;
        }

        .card {
            margin: 19px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar-header">
        <a class="navbar-brand ml-3" href="#">Online TEAMPROJECT </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="et-hero-tabs-container">
                <a href="#home" class="et-hero-tab" id="home">Home</a>
                <a href="#About" class="et-hero-tab">About Us</a>
                <a href="#community" class="et-hero-tab" >Developer Community</a>
                <a href="#studyMenu" class="et-hero-tab">Study Group</a>
                <a href="#contactUs" class="et-hero-tab">Contact</a>
                <a href="./admin.php" class="et-hero-tab">Administrator</a>
                <span class="et-hero-tab-slider"></span>

            </div>
           
            
           
        </div>
    </nav>      
    
    <div class="main">

            <section class="et-slide" id="home">
            <div class="home-container row">
                <img src="https://cdn-icons-png.flaticon.com/128/3575/3575860.png" alt="">
                <h1>Welcome to Online TEAMPROJECT </h1>
                <p>The TeamProject platform is poised to revolutionize the educational landscape for software engineering students by enhancing learning through collaboration and fostering a supportive community. By providing the tools, resources, and connections needed for success, TeamProject empowers students to not only excel in their studies but also build meaningful professional networks that will benefit them throughout their careers. Join TeamProject today and be part of a transformative learning experience!</p>
            </div>
            </section>

            <section class="et-slide" id="studyMenu">
                <div class="study-menu-container">
                    <h1 class="text-center">Our Study Menu</h1>

                    <div class="menus">

                        <?php 
                            
                            include('conn/conn.php');

                            $stmt = $conn->prepare("SELECT * FROM `tbl_menu`");
                            $stmt->execute();

                            $result = $stmt->fetchAll();

                            foreach($result as $row) {
                                $image = $row['image'];
                                $menuName = $row['menu_name'];
                                $price = $row['price'];
                                $description = $row['description'];
                                ?>


                            <div class="card" style="width: 15rem; background-color:rgba(0,0,0,0.5);" >
                                <img src="images/<?= $image ?>" class="card-img-top" alt="..." style="height:150px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $menuName ?></h5>
                                    <p class="card-text">Description: <?= $description ?></p>
                                </div>
                                <div class="card-footer">
                                    Price: <?= $price ?>
                                </div>
                            </div>

                                <?php
                            }
                        ?>

                    </div>
                </div>
            </section>

            <section class="et-slide" id="contactUs">
                <div class="contact-us-container row">

                <div class="details-container col-6">
                    <h1>Contact Us</h1>
                    <p>Have questions, feedback, or just want to say hello? We'd love to hear from you! Reach out to us through the following channels:</p>

                    <h6><span><i class="fa-solid fa-envelope"></i></span> Email: info@DevTeam24 food.com</h6>

                    <h6><span><i class="fa-solid fa-phone"></i></span> Phone: +263 (772) 504 845</h6>

                    <h6><span><i class="fa-solid fa-location-dot"></i></span> Address: 100 Main Street, SylTech</h6>

                    <div class="social">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-square-instagram"></i>
                    </div>
                </div>

                <div class="form-container col-6">
                    <form action="./send-message.php" method="POST">
                        <div class="form-group">
                            <label for="name">Your Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark form-control">Send Message -></button>
                    </form>
                </div>


            </section>


   

    <!-- Bootstrap JS -->
    <!-- Replace the slim version with the full version of jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <script src="./nav.js">
        $(document).ready(function(){
            // Add active class to navbar links on click
            $(".navbar-nav a").on("click", function(){
                $(".navbar-nav").find(".active").removeClass("active");
                $(this).parent().addClass("active");
            });
        });
    </script>
</body>
</html>
