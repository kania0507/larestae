<template>
<div>
    <div class="hero-container centered ">
        
        <div class="gray-background">
            <h1 class=" hero-header  ">It's a Food Adventure</h1>
            <span class="spaner  "> - - - - - - - </span>
            <p class="lead ">You'll Never Put A B</p>
            <button class="btn btn-gray white">Our menu</button>
        </div>
    </div>
    <div class="about-container ">
        <div class="about-book about-book-left "></div>
        <div class="about-book about-book-right">
            <h3 class="about-header">Story of Us</h3>
           
            <p>Quisque velit nisi, 
            Quisque velit nisi Quisque velit nisi
            Quisque velit nisi Quisque velit nisi
            Quisque velit nisi </p>
            <button class="btn btn-gray white">More</button>

        </div>
    </div>
    <div class="quote-container"><div class="layer"></div>
        <div class="quote-text">
            <h3 class="quote-header">"The most romantic restaurant out there"</h3>
            <p class="quote-author">John Doe</p>
        </div>
    </div>
    <div class="menu-container">
     <h3 class="menu-header draw-pizza">We Present You Our Menu</h3>
        <div class="menu-grid">
            <div class=" menu-img"></div>
            <div class="a2 menu-grid-text">
                <h3 class=" menu-h">Pizza Margerita</h3>
                <p class="pa2 menu-p"> Quisque velit nisi Quisque velit nisi </p>
                <p class="ppa2 menu-pp">29.99</p>
            </div>
            <div class="a3 menu-img"></div>
            <div class="a4 menu-grid-text">
                <h3 class=" menu-h">Pizza Pepperoni</h3>
                <p class="pa2 menu-p"> Quisque velit nisi Quisque velit nisi </p>
                <p class="ppa2 menu-pp">29.99</p>
            </div>
            <div class="b1 menu-grid-text">
                <h3 class=" menu-h">Pizza Margerita</h3>
                <p class=" menu-p"> Quisque velit nisi Quisque velit nisi </p>
                <p class=" menu-pp">29.99</p>
            </div>
            <div class="b2 menu-img"></div>
            <div class="b3 menu-grid-text">
                <h3 class=" menu-h">Pizza Margerita</h3>
                <p class=" menu-p"> Quisque velit nisi Quisque velit nisi </p>
                <p class=" menu-pp">29.99</p>
            </div>
            <div class="b4 menu-img"></div>
            <div class="c1 menu-img"></div>
            <div class="c2 menu-grid-text">
                <h3 class=" menu-h">Pizza Margerita</h3>
                <p class=" menu-p"> Quisque velit nisi Quisque velit nisi </p>
                <p class=" menu-pp">29.99</p>
            </div>
            <div class="c3 menu-img"></div>
            <div class="c4 menu-grid-text">
                <h3 class=" menu-h">Pizza Margerita</h3>
                <p class=" menu-p"> Quisque velit nisi Quisque velit nisi </p>
                <p class=" menu-pp">29.99</p>
            </div>
        </div>
        <h3 class="menu-header">Show me more </h3>
        <p><i class="fas fa-chevron-circle-down"></i></p>
    </div>
    <div class="video-container">
    
        <video autoplay muted loop id="myVideo">
        <source src="/images/Seasoning Pizza at Italian Restaurant.mp4" type="video/mp4">
        </video>
        <div class="video-container-content">
            <h1>Heading</h1>
            <p>Lorem ipsum...</p>
            <!-- Use a button to pause/play the video with JavaScript -->
            <button id="myBtn" onclick="myFunction()">Pause</button>
        </div>
    </div>
    <div class="newsletter-container">
        <h3 class="newsletter-header draw-pizza">Stay up to date</h3>
        <p class="newsletter-p">Quisque velit nisi, pretium it latina</p>
        <div class="input-group">
            <input type="email" class="form-control" placeholder="Enter your email">
            <span class="input-group-btn">
            <button class="btn btn-gray " type="submit">Subscribe Now</button>
            </span>
        </div>
    </div>
    
    
    </div>
</div>
</template>
<script> 
export default {
  name: 'hello' , 
  components: {   }/*
  data () {
    return { 
    }}
    */
}
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');

.hero-container {
    
    max-width: 100%;
    background-image: url('/images/pizza-to.jpg');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: bottom left;
    min-height: 95vh;
    position: relative; 
    padding-left: 35%;
    padding-right: 35%;
    padding-top: 10%;
    padding-bottom: auto;
    z-index:0;
}
    .hero-header {
        font-size: 5.31em;
        color: #ffffff;
        font-weight: 400; 
        font-family: 'Lobster', cursive;
        
    }
    .lead {
        
        font-size: 1.25em;
        letter-spacing: 4px;
        line-height: 1.875em;
        color: #ffffff;
        font-weight: 400;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
    }
    .centered {
        padding-left: auto;
        padding-right: auto;
        
        text-align: center;
    }
    .gray-background {
        background-color: #333;
        opacity: 0.9;
        padding: 5%;
    }
    .spaner {
        color: white;
        padding: 1%;
    }
    .white {
        color: white;
    }
    .btn-gray {
        background-color: #151d25;
        font-size: 0.94em;
        color: #ffffff;
        font-weight: 400;
        font-family: "Montserrat";
        text-align: center;
        text-transform: uppercase;
        border-radius: 0;
        min-width: 12vw; 
    }
    .btn-gray:hover {
        background-color: green;
        color: white;
    }

    /* ABOUT CONTAINER*/
    .about-container { 
         min-height: 40vh;
         width: 100%;
        z-index: 10;
        position: relative; 
        padding-left: 25%;
        padding-right: 25%;
        text-align:center;
        margin-top: -5vh;
        
        display: flex;
        
    }
    .about-book {
        width: 25vw;
        height : 100%;
        min-height: 40vh;
       
        text-align:center; 
        padding: 5%;
        
    }
    .about-book-left {
        background-image: url('/images/baker.jpg');
         background-size: cover;
         float: left; 
         height: 100%;
         width: 50%;

         background-repeat: no-repeat; background-color: black;
    }
    .about-book-right {
         
        float: left; 
        width: 50%;
        height: 100%;
        background-color: white;

         background-image: url('/images/pizza-draw.png');
         background-size: 10%;
         background-position: center 5%;
         background-repeat: no-repeat;
          
    }
    .about-header {
        font-size: 2.1875em;
        color: #28374b;
        font-weight: 400;
        font-family: "Lobster";
        margin-top: 2%;
    }

    /* QUOTE CONTAINER*/
    .quote-container {
        min-height: 60vh;
        width: 100%;
        z-index: 1;
        background-color: #999;
        margin-top: -5vh;
        background-image: url('/images/bar.jpg') ;
        background-size: cover;
        background-position: right bottom;
    position: relative;
        
    }
    .layer {
        background-color: rgba(230, 232, 230, 0.3);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }
    .quote-text {
        padding-left: 30%;
        padding-right: 30%;
        padding-top: 20%;
        z-index: 2;
        text-align:center;

    }
    .quote-header {
        text-transform: uppercase;
        font-size: 1.25em;
        letter-spacing: 4px;
        color: #ffffff;
        font-weight: 400;
        font-family: "Montserrat";
        text-align: center;
    }
    .quote-author {
        font-size: 1.25em;
        color: #ffffff;
        font-weight: 400;
        font-family: "Lobster";

    }

    .draw-pizza {
        background-image: url('/images/pizza-draw.png');
         background-size: 6%;
         background-position: center 5%;
         background-repeat: no-repeat;
    }

    /* MENU CONTAINER*/
    .menu-container {
        min-height: 90vh;
        width: 100%;
        background-color: white;
        padding-left: 20%;
        padding-right: 20%;
        padding-top: 5%;
        padding-bottom: 5%;
        text-align: center;
    }
    .menu-header {
        font-size: 2.1875em;
        color: #28374b;
        font-weight: 400;
        font-family: "Lobster";
        padding-top: 5%;
        padding-bottom: 5%;
         
    }
    .menu-grid {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr;
        gap: 0px 0px;
  
        grid-template-areas:
            "a1 a2 a3 a4"
            "b1 b2 b3 b4"
            "c1 c2 c3 c4";
            padding-bottom: 5%;
            
    }
    .menu-grid div {
        min-width: 100px;
        min-height: 20vh;
        padding: 5%;
    }
    .a1, .menu-img {
        background-image: url('/images/product_images/011520211839026001e14689d3a.jpg') ;
        background-size: cover;
        background-position: center center;
    }
     .menu-bg, .menu-grid-text {
        background-color: #9fb0a5;
    }
    .menu-h{
        font-size: 1.4375em;
        color: #ffffff;
        font-weight: 400;
        font-family: "Lobster";
        text-align: center;
        padding: 5%;
    }
     .menu-p {
        
        font-size: 0.8125em;
        letter-spacing: 1px;
        line-height: 1.5625em;
        color: #ffffff;
        font-weight: 400;
        font-family: "Montserrat";
        text-align: center;
    }
     .menu-pp {
        font-size: 1.4375em;
        color: #ffffff;
        font-weight: 400;
        font-family: "Lobster";
        text-align: center;
    }
    .a3 {
        background-image: url('/images/product_images/011520211840066001e186baf43.jpg') ; 
        
    }

    /* VIDEO CONTAINER Seasoning Pizza at Italian Restaurant.mp4 */
    .video-container {
        max-width: 100vw;
        height: 60vh;
    }

    #myVideo {
        position: relative;
    object-fit: cover;
    width: 100%;
    height: 100%;
  
 

}

    /* Add some content at the bottom of the video/page */
.video-container-content {
  position: absolute;
  height: 50vh;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
  display: none;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

/* NEWSLETTER CONTAINER*/
.newsletter-container {
    background-color: white;
    
    padding: 5% 30% 10% 30%;
    text-align: center;
}

.newsletter-header {
    font-size: 2.1875em;
    color: #28374b;
    font-weight: 400;
    font-family: "Lobster";
    padding-top: 5%;
    padding-bottom: 5%;
}
.newsletter-p {
    font-size: 0.9375em;
    letter-spacing: 2px;
    line-height: 1.75em;
    color: #28374b;
    font-weight: 400;
    font-family: "Montserrat";
    text-align: center;
}
.newsletter {
padding: 80px 0;
background: #19beda;
}

.newsletter .content {
max-width: 650px;
margin: 0 auto;
text-align: center;
position: relative;
z-index: 2; }
.newsletter .content h2 {
color: #243c4f;
margin-bottom: 40px; }
.newsletter .content .form-control {
height: 50px;
border-color: #ffffff;
border-radius:0;
}
.newsletter .content.form-control:focus {
box-shadow: none;
border: 1px solid #243c4f;
}
.newsletter .content .btn {
min-height: 50px; 
border-radius:0;
background: #243c4f;
color: #fff;
font-weight:600;
}

/* FOOTER CONTAINER */
.footer-container {
    background-color: #27364a;
    min-height: 15vh;
    padding: 5% 20% 10% 20%;
    color: white;
    display: flex;
    justify-content: space-around;
}
.footer-container-h {
    font-size: 1.5625em;
    letter-spacing: 3px;
    line-height: 2.6875em;
    color: #ffffff;
    font-weight: 400;
    font-family: "Montserrat";
    text-align: left;
    text-transform: uppercase;
}
.footer-location-h {
    text-transform: uppercase;
    font-size: 1.5625em;
    letter-spacing: 3px;
    line-height: 2.6875em;
    color: #ffffff;
    font-weight: 400;
    font-family: "Montserrat";
    text-align: left;
}
.footer-location-p {
    display: flex;
    max-width: 25vw;
}


/* FOOTER BOTTOM CONTAINER */
.footer-bottom-container {
    background-color: #000;
    min-height: 10vh;
    display: flex;
    justify-content: space-between;
    color: white;
    padding: 2% 20% 2% 20%;
}
.footer-bottom-left {
    font-size: 0.9375em;
    letter-spacing: 2px;
    line-height: 1.875em;
    color: #ffffff;
    font-weight: 400;
    font-family: "Montserrat"; 
}
.footer-bottom-right {
    text-align: right;
    
}
</style>