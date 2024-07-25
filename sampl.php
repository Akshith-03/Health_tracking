<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap');

        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        #bdy {
            display: flex;
            position: relative;
            padding: 50px;
            background-image: url('https://c8.alamy.com/comp/2CD0N1H/healthy-food-concept-close-up-of-open-lunch-box-with-rice-fresh-fruits-and-vegetables-on-the-grey-background-with-blank-space-for-text-top-view-fl-2CD0N1H.jpg');
            background-repeat: repeat;
            background-size: cover;
            margin-top: 2px;
        }
        #bdy h1 {
            color: rgb(211, 192, 215);
        }
        
         h1 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: larger;
            color: black;
        }

        #topcont {
            display: flex;
            align-items: center;
            text-align: center;
            border-radius: 15px;
            border-color: rgb(15, 8, 4);
            padding: 50px;
        }

        #img {
            margin-left: 0;
            opacity: 0.8;
            margin-right: 20px; 
            flex: 1; 
        }

        #info {
            flex: 2; 
            text-align: left;
        }

        #smallpara {
            font-size: 18px;
            font-style: italic;
        }

        #para {
            font-size: 20px;
            font-style: italic;
        }

        #hght {
            margin: 10px;
            font-size: 30px;
            font-family: 'Roberto';
            text-align: center;
        }

        #wght {
            margin: 10px;
            font-size: 30px;
            font-family: 'Roberto';
            text-align: center;
        }

        #hghtinpt {
            padding: 10px;
            font-size: 16px;
            border-left: black;
            border-top: black;
            border-right: black;
            border-bottom: 3px solid black;
            border-radius: 17px;
            width: 200px;
            height: 40px;
            margin: 10px;
            transition: border-color 0.3s ease-in-out;
            text-align: center;
        }

        #sbmt {
            background-color: rgb(53, 90, 133);
            border: none;
            border-radius: 5px;
            color: #fff;
            font-style: italic;
            margin: 10px;
            font-size: 20px;
            height: 40px;
            width: 120px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, transform 0.3s ease-in-out;
            text-align: center;
        }

        #sbmt:hover {
            background-color: rgb(38, 65, 97);
            color: #ffd700;
            transform: scale(1.05);
        }

        h2 {
            text-align: center;
        }

        #para,
        #para1,
        #para2 {
            font-size: 25px;
            text-align: center;
            color: black;
        }
        #head{
            text-align: center;
            font-size: 30px;
            color: black;
        }
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

form {
    margin-bottom: 20px;
}

input, button {
    display: block;
    margin-bottom: 10px;
}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="health.php">Health Track</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="sampl.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
               
                    <a class="nav-link" href="https://www.who.int/europe/news-room/fact-sheets/item/a-healthy-lifestyle---who-recommendations#:~:text=12%20steps%20to%20healthy%20eating&text=Eat%20a%20variety%20of%20vegetables,of%20physical%20activity%2C%20preferably%20daily">Suggestions</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       
                        <a class="dropdown-item" href="https://www.linkedin.com/in/narlakanti-akshith-62944826a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" ><p class="drpdwn">Akshith</p></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Talk to Doctor ?</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" onclick="#" >Search</button>
            </form>
        </div>
    </nav>
    <div id="bdy" class="xyz">
        <div id="topcont">
            <img id="img" class="abc" src="https://static.vecteezy.com/system/resources/previews/013/489/218/original/choosing-lifestyle-and-diet-concept-young-frustrated-man-standing-trying-to-choose-between-healthy-balanced-vegetarian-foods-and-fast-food-illustration-free-vector.jpg" width="300px" height="400px">
            <div id="info">
                <h1 id="head" style="color:black; font-weight:bold; font: size 50px;" b><i>Harmony on Your Plate</i></b></h1>
                <h2><i>Symphony of Nutrients for a Happy Body.</i></h2>
                <p id="para"><i>🌿 Nourish & Thrive</i></p>
                <p id="para1"><i>Elevate your well-being with us! Explore vibrant, nutrient-packed meals that fuel your journey. Dive into fitness routines designed for joy. Craft a story of health and vitality. Welcome to a world where staying fit is an art—your masterpiece in the making.</i></p>
                <p id="para2"><i>--Your Wellness Companion 🌟💪</i></p>
                <center>
                <form method="post" action="connect.php">
                    <label id="hght" style="color:rgb(1, 1, 1);font-weight:bolder;">Enter your height (cm): </label><input id="hghtinpt" type="text" placeholder="Enter your height" name="heightofperson" style="background-color:rgb(221, 218, 203)"><br>
                    <label id="wght" style="color:rgb(0, 3, 10);font-weight:bolder;">Enter your weight (kg): </label><input id="hghtinpt" type="text" placeholder="Enter your weight" name="weightofperson" style="background-color:rgb(221, 218, 203)"><br><br>
                     <button id="sbmt" type="submit" style="font-style:serif;">Calculate</button> 
                </form>
                
                </center>
            </div>
        </div>
    </div>
   

</body>
</html>