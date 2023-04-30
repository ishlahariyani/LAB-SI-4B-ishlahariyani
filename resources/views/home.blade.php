<!DOCTYPE html>
<html>
<head>
  <meta charset="utp-8">
  <meta name="viewport" content="width=device-width, intial-scale=1">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');
    
    *{
      margin : 0;
      padding : 0;
      box-sizing : border-box;
      text-decoration :none;
      border : none;
      scroll-behavior: smooth;
      font-family : 'Poppins', sans-serif;
    }

    html{
        font-size :60%;
        overflow-x : hidden;
    }

    body{
      background :#F1F6F9;
      color : #212A3E;
      scroll-behavior: smooth;
      min-height :100vh;
    }

    section{
      min-height :100vh;
      padding : 10rem 9% 10rem;
    }

    header{
      position : fixed;
      top : 0;
      left : 0;
      width : 100%;
      padding : 2rem 9%;
      background :#F1F6F9;
      display : flex;
      justify-content : space-between;
      align-items : center;
      z-index : 100;
    }

    .logo {
      font-size : 3rem;
      color :#212A3E;
      font-weight : 400;
      cursor :default;
      font-family : 'Poppins';
    }

    .navbar a{
      font-size : 1.5rem;
      color : #212A3E;
      margin-left :4rem;
      transition : .3s;
    }

    .navbar a:hover,
    .navbar a.active{
      color :#3F72AF;
    }

    #menu-icon{
      font-size :3.5rem;
      color: #394867;
      display : none;
    }

    .home{
      display : flex;
      justify-content : center;
      align-items : center;
    }

    .img-home img {
      width : 400px; 
      margin-right :0px;
      margin-left :10px;
    }
    
    .isihome h3{
      font-size :3.5rem;
      font-weight :600;
    }

    .isihome h1{
        font-size :5.6rem;
        font-weight :600;
        line-height :1.3;
        font-family : 'Poppins';
    }

    .isihome p{
      font-size: 1.6rem;

    }

    .sosial-media a {
      display :inline-flex;
      justify-content :center;
      align-items : center;
      width : 4rem;
      height : 4rem;
      background :transparent;
      border : .2rem solid #394867;
      border-radius : 50%;
      font-size :2rem;
      color : #394867;
      margin : 3rem 1.5rem 3rem 0;
      transition :.4s ease;
    }    

    .sosial-media a:hover{
      background :#3F72AF;
      color :#212A3E;
      box-shadow : 0 0 1rem #3F72AF;
    }

    .about{
      display : flex;
      justify-content : center;
      align-items : center;
      gap :2rem;
      background :#9BA4B5;
      margin-bottom : 0px;
      margin-top :0px;
    }

    .img-about img {
      width :455px;
      margin-left : 0px;
      margin-right :5px;
    }

    .heading {
      text-align :center;
      font-size : 4.0rem;
      Color : #F1F6F9;
    }

    .isiabout h2{
      text-align :left;
      line-height :1.2;
    }

    span{
        color :#3F72AF;
    }
      
    .isiabout h3{
      font-size :2.6rem;
    }

    .isiabout p{
      font-size :1.6rem;
      margin : 2rem 0 3rem;
      text-align :justify;
    }

    .button {
      display : inline-block;
      padding : 1rem 2.8rem;
      background : #3F72AF;
      border-radius :4rem;
      box-shadow :0 0 1rem #3F72AF;
      font-size : 1.2rem;
      color :white;
      letter-spacing : 0.3rem;
      font-weight : 550;
    }
      
    .portofolio {
      background :#F1F6F9;
    }

    .portofolio h2{
      text-align :center;
      font-size : 4.0rem;
      color : #112D4E;
    }

    .portofolio h3{
      text-align :center;
      font-size : 2.5rem;
      color : #394867;
      font-family : 'poppins'
    }
      
    .portofolio-container{
      display : grid;
      grid-template-columns : repeat(2,1fr);
      align-items :center;
      gap: 2.5rem;
      margin-top : 0px;
      margin-bottom : 0px;
    }

    .portofolio-box{
      position :relative;
      border-radius :1rem;
      box-shadow : 0 0 1rem #3F72AF;
      overflow : hidden;
      display :flex;
      margin : 25px;
    }

    .portofolio-box img{
      width :100%;
    }

    .lainnya{
      font-size :1.6rem;
      position :relative;
      float :right;
      color : #394867;
      letter-spacing : 0.2rem;
    }

    .footer{
      display : flex;
      justify-content :space-between;
      align-items : center;
      flex-wrap : wrap ;
      padding : 2rem 9%;
      background : #9BA4B5;
    }

    .footer.text p{
      font-size :1.6rem;
      color : #212A3E;
    }

    .footer-iconTop a{
      display : inline-text;
      justify-content :center;
      align-items :center;
      padding :.8rem;
      background : #9BA4B5;
      border-radius : .8rem;
    }

    .footer-iconTop a i{
      font-size : 2.4rem;
      color : #212A3E;
    }
  </style>
  <title>Ishlah Putri Ariyani</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
  
<body>
  <header class="header">
    <a href="#" class="logo"><b>Portofolio.</b></a>

    <i class='bx bx-menu' id="menu-icon"></i>

    <nav class="navbar">
      <a href="/" class="active">Home</a>
      <a href="/about">About</a>
      <a href="#">Portofolio</a>
      <a href="/contact">Contact</a>
    </nav>
  </header>

  <section class="home" id="home">
    <div class="isihome">
      <h3>Hello, It's Me</h3>
      <h1><b>Ishlah Putri Ariyani</b></h1>
      <p>Seorang Mahasiswa Jurusan Sistem Informasi Fakultas Ilmu Komputer
          Universitas Sriwijaya. </p>
      <div class="sosial-media">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
        <a href="#"><i class='bx bxl-linkedin'></i></a>
      </div>     
      <a href="/contact" class="button">Contact Me.</a>
      
    </div>
    </div>

    <div class="img-home">
      <img src="gambar/foto1.PNG" alt="">
    </div>
  </section>    

  <section class="about" id="about">
    <div class="img-about">
      <img src ="gambar/foto2.PNG" alt="">
    </div>

    <div class="isiabout">
      <h2 class="heading">About <span>Me</span></h2>
      <h3> Ishlah Putri Ariyani</h3>
      <p>Akrab di sapa Ishlah. Merupakan mahasiswa jurusan Sistem Informasi Fakultas Ilmu Komputer Universitas Sriwijaya tahun 2021. Saya mampu beradaptasi dengan lingkungan sekitar dan menyukai hal-hal yang baru. </p>
      <a href="/portofolio" class="button">Resume CV</a>
  </section>

  <section class="portofolio" id="portofolio">
    <h2 class="heading2">- Ishlah's <span>Project-</span></h2>

    <div class="portofolio-container">
      <div class="portofolio-box">
        <img src="gambar/foto3.PNG" alt="">
      </div>

      <div class="portofolio-box">
        <img src="gambar/foto4.PNG" alt="">
      </div>

      <div class="portofolio-box">
        <img src="gambar/foto5.PNG" alt="">
      </div>

      <div class="portofolio-box">
        <img src="gambar/foto6.PNG" alt="">
      </div>
    </div>
    
    <a href="#portofolio" class="lainnya"><b>Lainnya....<b></b></a>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-text">
      <p>Copyright &copy; 2023 by Ishlah Putri Ariyani (09031282126101).</p>
    </div>

    <div class="footer-iconTop">
      <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
      
    
</body>
</html>