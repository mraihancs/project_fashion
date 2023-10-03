<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECoM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a style="margin-left:30px" class="navbar-brand" href="#">FASHION</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div style="margin-left: 30%; padding: 10px;" class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">MAN</a>
        <a class="nav-link" href="#">WOMAN</a>
        <a class="nav-link" href="#">KIDS</a>
        <a class="nav-link" href="#">BECOME SELLER</a>
        
       
      </div>
      
    </div>
    <button style="color: aliceblue;" class="btn btn-info">LOGIN</button>
  </div>
</nav>



<div style="display: block;text-align: center;" class="con">

    <img class="himage" src="images/pica.jpg">
    <img class="himagea" src="images/pica.jpg">
    <img class="himageb" src="images/pica.jpg">
    <img class="himagec" src="images/pica.jpg">
    
</div>
<!-- <div class="t"> <h3 style="text-decoration: underline;">FASHION WORLD</h3>
    <section style="text-align: justify;width: 300px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, voluptate deleniti amet dignissimos praesentium tenetur, exercitationem provident ut pariatur deserunt quos, perspiciatis ducimus quidem. Molestiae repudiandae delectus quas recusandae tempora labore iure. Deleniti ipsum alias, consequatur delectus suscipit porro incidunt quidem animi atque voluptatem sapiente nisi asperiores vel voluptatibus aut.</section>
</div> -->

<div style="margin-left: 100px;margin-top: 90px;" class="row">
    <div class="col-sm-3"><img style="height: 300px; width: 300px; border-radius: 10px 70px ;" src="images/pica.jpg" alt="" srcset=""></div>
    <div class="col-sm-9"><h3>FASHION</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minima ut nemo aliquid aspernatur dolorum tempore impedit iusto consectetur debitis pariatur ab odio necessitatibus suscipit aperiam laudantium nisi culpa recusandae, velit at fugiat veritatis quos repellat? Adipisci ratione autem laudantium dolor possimus sunt ab, doloribus voluptatum placeat. Nisi, ipsam porro.


    </p></div>

  </div>
  <!-- Side Show -->

  <!-- Slideshow container -->
<div style="margin-top: 100px;" class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="images/img1.jpg" style="width:100%;height: 300px;">
      <div class="text">BABY FASHION</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="images/img7.png" style="width:100%;height: 300px;">
      <div class="text">BABY FASHION</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="images/img2.jpg" style="width:100%;height: 300px;">
      <div class="text">BABY FASHION</div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>




  <div class="container">
    <h3 style="text-align: center; font-family: 'Courier New', Courier, monospace;font-weight: bold; margin-top: 50px;">NEW COLLECTIONS</h3>
    <div class="row row-cols-4">
      <div class="col"><div class="card" style="width: 18rem;">
        <img style="height: 100px;" src="images/man.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="font-weight: bolder;" class="card-title">MAN COLLECTION</h5>
          <p style="text-align: justify; width: 200px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div> </div>
      <div class="col"><div class="card" style="width: 18rem;">
        <img src="images/img2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="font-weight: bolder;" class="card-title">WOMAN COLLECTION</h5>
          <p style="text-align: justify; width: 200px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div> </div>
      <div  class="col"><div class="card" style="width: 18rem;">
        <img  src="images/kids.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="font-weight: bolder;" class="card-title">KIDS COLLECTION</h5>
          <p style="text-align: justify; width: 200px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div> </div>
      <div class="col"><div class="card" style="width: 18rem;">
        <img  src="images/bride.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 style="font-weight: bolder;" class="card-title">BRIDE COLLECTION</h5>
          <p style="text-align: justify; width: 200px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div> </div>
    </div>
  </div>


<div class="mt-4 p-5 bg-secondary text-white rounded">
    <h1 style="text-align: center;">To Be Continued...</h1>
    
  </div> 

































  <script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
  </script>
</body>
</html>






<!-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->