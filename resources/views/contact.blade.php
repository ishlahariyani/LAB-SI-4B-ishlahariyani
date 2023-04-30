<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
          background :#212A3E;
          color : #F1F6F9;
          scroll-behavior: smooth;
          min-height :100vh;
        }
    
        section{
          min-height :100vh;
          padding : 10rem 10% 10rem;
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
        
        .button {
          display : inline-block;
          padding : 1rem 2.8rem;
          background : #DBE2EF;
          border-radius :4rem;
          box-shadow :0 0 1rem #DBE2EF;
          font-size : 1.2rem;
          color :white;
          letter-spacing : 0.3rem;
          font-weight : 550;
        }
          
        .heading{
          margin-bottom :3rem;
          text-align :center;
          font-size : 25px
        }
    
        span{
          color :#3F72AF;
        }
    
        .contact form{
          max-width : 70rem;
          margin :1rem auto;
          text-align :center;
          margin-bottom :1rem;
        }
    
        .contact form .input-box{
          display :flex;
          justify-content :space-between;
          flex-wrap : wrap;
        }
    
        .contact form .input-box input,
        .contact form textarea{
          width :100%;
          padding : 1.5rem;
          font-size :1.6rem;
          color : #3F72AF;
          background :#F1F6F9;
          border-radius : .8rem;
          margin : 1rem 0;
          }

          
        input[type=submit]{
          background-color :#3F72AF;
          color :#ffffff;
          padding : 12px 20px;
          border : none;
          border-radius : 4px;
          cursor: pointer;
        }

        input[type=submit]:hover {
          background-color:#7895B2;
        }
    </style>   
    <title>Ishlah Putri Ariyani</title>  
    </head>
    <body>
      <header class="header">
        <a href="#" class="logo"><b>Portofolio.</b></a>
    
        <i class='bx bx-menu' id="menu-icon"></i>
    
        <nav class="navbar">
          <a href="/" >Home</a>
          <a href="/about">About</a>
          <a href="/portofolio">Portofolio</a>
          <a href="/home" class="active">Contact</a>
        </nav>
      </header>

      <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>

        <form action="#">
          <div class="input-box">
            <input type="text" placeholder="Nama Depan">
            <input type="text" placeholder="Nama Belakang">
          </div>
          <div class="input-box">
            <input type="email" placeholder="Email">
            <input type="number" placeholder="Nomor Hp">
          </div>
          <textarea name="" id="" cols="30" row="10" placeholder="Your Message" style="height:200px"></textarea>
          <input type="submit" value="Submit">
        </form>
      </section>
  </body>
</html>