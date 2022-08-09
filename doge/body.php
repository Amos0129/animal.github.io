
<body>
<link rel="stylesheet" href="css/picture.css">      
  <br>

  <div class="slideshow-container">
    <div class="Slides">
      <img class="center" src="pic/pic1.png" >
    </div>
    
    <div class="Slides">
      <img class="center" src="pic/pic2.png">
    </div>

    <div class="Slides">
      <img class="center" src="pic/pic3.png">
    </div>
 
  </div>

  <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    
  <script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("Slides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 3000); 
    }
    </script>      
    <h2 style="text-align: center; font-size: 26.985px; line-height: 40.478px;"
     data-inline-fontsize="true" data-inline-lineheight="true" data-fontsize="29" data-lineheight="44">
    <span style="color: #f7b9a1;">浪我來養</span> 寵物領養平台</h2> 
   
<p style="text-align: center;">
  成立於2022年的夏天，喜歡與寵物相處，更因為熱愛動物決心投入領養平台，希望能讓所有浪小孩有一個溫馨溫暖的家。
</p>
<div>
  &nbsp
</div>
<h2 style="text-align: center; font-size: 26.985px; line-height: 40.478px;"
data-inline-fontsize="true" data-inline-lineheight="true" data-fontsize="29" data-lineheight="44">
<span style="color: #f7b9a1;">為什麼領養大於購買？</span></h2> 
<div style="text-align: center; font-size: 26.985px; line-height: 40.478px;">
  <iframe width="900" height="450" src="https://www.youtube.com/embed/BBzF_Jksfq0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
    
    
<h2 style="text-align: center; font-size: 26.985px; "
    data-inline-fontsize="true" data-inline-lineheight="true" data-fontsize="29" data-lineheight="44">
   <span style="color: #f7b9a1;">往下看，浪你來養~</span></h2> 

    <div class="container">
      <div class="card">
        <img src="pic/runningcat.png" alt="">
        <div class="info">
          
          <p><input type="button" onclick="location.href='cat.php';" value="找貓咪" /></p>
        </div>
      </div>
      
      <div class="card">
        <img src="pic/runningdog.png" alt="">
        <div class="info">
          
          <p><input type="button" onclick="location.href='dog.php';" value="找狗狗" /></p>
        </div>
      </div>
      </div>
      

    </body>