
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/6c91a38875.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Trang chủ</title>
</head>
<body>
   <?php include_once "header.php"; ?>
<!-- ----------------slide-------------------> 
   <section class="slide">
       <div class="aspect-ratio-169">
           <img src="image/slide1.jpg" >
           <img src="image/slide2.jpg" >
           <img src="image/slide3.jpg" >
           <img src="image/slide4.jpg" >
           <img src="image/slide5.jpg" >
       </div>
       <div class="dot-container">
           <div class="dot"></div>
           <div class="dot"></div>
           <div class="dot"></div>
           <div class="dot"></div>
           <div class="dot"></div>
       </div>
   </section>
   <section class="app-container">
       <p>Tải ứng dụng PPSTYLE</p>
       <div class="app-google">
           <img src="image/app-store.png" alt="">
           <img src="image/google-play.png" alt="">
       </div>
       <p>Nhận bản tin của PPSTYLE</p>
       <input type="text" placeholder="Nhập email của bạn...">
   </section>
   <!--------------------Footer----------------------->
   <?php include_once "footer.php"; ?>
</body>
<script>
    /*----------------------slide----------------------------*/ 
const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
const imgContainer = document.querySelector('.aspect-ratio-169')
const dotItem = document.querySelectorAll(".dot")
let index=0
let imgNumber = imgPosition.length
imgPosition.forEach(function(image,index){
image.style.left = index*100 +"%"
dotItem[index].addEventListener("click", function(){
        slide(index)
    })
})
function imgSlide(){
    index++
    if(index>=imgNumber) {index=0}
    slide(index)
}
function slide(index){
    imgContainer.style.left = "-" +index*100 +"%"
    const dotActive = document.querySelector('.active')
    dotActive.classList.remove('active')
    dotItem[index].classList.add('active')
}
setInterval(imgSlide,5000)
</script>
<link rel="stylesheet" href="js/script.js" class="js">
</html>