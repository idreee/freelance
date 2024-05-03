<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<style>
   .skills {
    text-align: center;
    margin-top: 3rem;
    background: linear-gradient(to right, red, blue);
}

.heading {
    font-size: 3rem;
    color: green;
    text-transform: uppercase; 
    margin-bottom: 2rem;
    position: relative; 
}

.progress {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.bar {
    width: 70%;
    margin-bottom: 1rem;
    text-align: left;
    padding: 0.5rem;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    background-color: #f0f0f0;
}

.bar h3 {
    margin-bottom: 0.5rem;
}

.bar span {
    display: inline-block;
    font-weight: bold;
}

.progress-bar {
    height: 20px;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    line-height: 20px;
}

.progress-bar {
    transition: width 0.8s ease;
}

.bar:hover .progress-bar {
    width: 100%;
}


#nav-wrap {
    background-color: #333; 
    padding: 20px 0; 
    text-align: center; 
}

#nav {
    list-style: none; 
    margin: 0;
    padding: 0;
}

#nav li {
    display: inline-block; 
    margin-right: 20px; 
}

#nav li a {
    color: #fff; 
    text-decoration: none; 
    font-size: 16px; 
    padding: 10px 15px; 
    transition: color 0.3s ease;
}

#nav li a:hover {
    color: #4CAF50; 
}

/* Header Styles */
header {
    background-color: #f0f0f0; 
    padding: 50px 0; 
    text-align: center; 
}

h1 {
    font-size: 36px; 
    color: #333;
    margin-bottom: 20px; 
}

p {
    font-size: 18px; 
    color: #666; 
    margin-bottom: 30px; 
}

/* About Section Styles */

#about {
    background-color: #f9f9f9; 
    padding: 80px 0; 
    text-align: center; 
}

.profile-pic {
    border-radius: 50%;
    width: 200px;
    height: 200px; 
    margin-bottom: 30px; 
}

h2 {
    font-size: 36px; 
    color: #333; 
    margin-bottom: 20px; 
}

#about_me p {
    font-size: 18px; 
    color: #666;
    line-height: 1.6; 
    margin-bottom: 30px; 
}

.contact-details {
    margin-bottom: 30px; 
}

.contact-details h2 {
    font-size: 24px;
    color: #333; 
    margin-bottom: 20px; 
}

.address span {
    display: block; 
    margin-bottom: 10px; 
    color: #7A7A7A; 
}

.download {
    margin-top: 30px; 
}
.download .button {
    background-color: #4CAF50; 
    color: #fff; 
    padding: 15px 30px; 
    font-size: 16px;
    text-decoration: none; 
    border-radius: 5px; 
    transition: background-color 0.3s ease; 
}

.download .button:hover {
    background-color: #45a049; 
}

/* Education Section Styles */

.education {
    padding: 80px 0; 
}

.header-col h1 {
    font-size: 36px; 
    color: #333;
    margin-bottom: 40px; 
}

.item {
    margin-bottom: 40px; 
    border-left: 5px solid #4CAF50; 
    padding-left: 20px; 
}

.item h3 {
    font-size: 24px; 
    color: #333; 
    margin-bottom: 10px; 
}

.item .info {
    font-size: 16px; 
    color: #666; 
    margin-bottom: 10px; 
}

.item .description {
    font-size: 16px;
    color: #666; 
}

/* Hover effect on education items */
.item:hover {
    background-color: #f0f0f0; 
}

/* About section styles */
.about {
  text-align: center;
  padding: 4rem;
  background-color: #f8f9fa; 
  border-radius: 10px;
  animation: bounceFrame 1s ease infinite alternate;
}

@keyframes bounceFrame {
  0% {
    transform: translateY(-5px);
  }
  100% {
    transform: translateY(5px);
  }
}

/* Heading styles */
.heading {
  margin-bottom: 3rem;
}

.heading span {
  text-transform: uppercase;
  font-size: 4rem;
  border-bottom: var(--border-bold); 
}

/* Biography paragraph styles */
.biography p {
  margin: 1rem auto;
  max-width: 70rem;
  line-height: 1.5;
  font-size: 1.7rem;
}

/* Bio details styles */
.bio {
  margin: 1rem 0;
}

.bio h3 {
  padding: 1rem 1.5rem;
  display: inline-block;
  margin: 1rem;
  background-color: white;
  border: var(--border-light); 
  word-break: break-all;
  font-size: 2.5rem;
  font-weight: normal;
  text-transform: none;
}

.bio h3 span {
  font-weight: lighter;
}

/* Button styles */
.btn {
  display: inline-block;
  padding: 1rem 2rem;
  margin-top: 2rem;
  font-size: 1.5rem;
  text-decoration: none;
  background-color: #007bff; 
  color: white;
  border: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #0056b3; 
}

/* Biography paragraph styles */
.biography p {
  margin: 1rem auto;
  max-width: 70rem;
  line-height: 1.8;
  font-size: 1.6rem;
  color: #555; 
  padding: 2rem; 
  background-color: #f4f4f4; 
  border-radius: 10px; 
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  transition: transform 0.3s ease; 
}

.biography p:hover {
  transform: translateY(-5px);
}

/* Optional: Add a border */
.biography p::before {
  content: "";
  position: absolute;
  top: -10px;
  left: -10px;
  right: -10px;
  bottom: -10px;
  border: 2px solid #007bff; 
  border-radius: 12px; 
  opacity: 0; 
  transition: opacity 0.3s ease;
}

.biography p:hover::before {
  opacity: 1; 
}

.services {
  padding: 50px 0;
  background-color: #f8f9fa;
}

/* Style the heading */
.heading {
  text-align: center;
  margin-bottom: 40px; 
}

.heading span {
  font-size: 32px;
  font-weight: 700;
  color: #333; 
}


.box-container {
  text-align: center;
  white-space: nowrap; 
  overflow-x: auto; 
}


.box {
  display: inline-block; 
  text-align: center;
  background-color: #fff; 
  padding: 20px; 
  border-radius: 8px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); 
  transition: all 0.3s ease;
  width: 250px; 
  margin: 0 10px;
}

.box:hover {
  transform: translateY(-5px);
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
}


.box i {
  font-size: 36px;
  color: #007bff; 
  margin-bottom: 15px; 
}


.box h3 {
  font-size: 20px; 
  font-weight: 700;
  color: #333; 
  margin-bottom: 10px;
}


.box p {
  font-size: 14px; 
  color: #666; 
}

.services {
  padding: 50px 0;
  background-color: #f8f9fa; 
}


.heading {
  text-align: center;
  margin-bottom: 40px; 
}

.heading span {
  font-size: 32px;
  font-weight: 700;
  color: green; 
}


.box-container {
  text-align: center;
  white-space: nowrap; 
  overflow-x: auto; 
}


.box {
  display: inline-block; 
  text-align: center;
  background-color: #fff; 
  padding: 20px; 
  border-radius: 8px; 
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); 
  transition: all 0.3s ease;
  width: 250px; 
  margin: 0 10px; 
}


.box:hover {
  transform: translateY(-5px);
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
}


.box i {
  font-size: 36px; 
  color: #007bff; 
  margin-bottom: 15px; 
}


.box h3 {
  font-size: 20px; 
  font-weight: 700;
  color: #333; 
  margin-bottom: 10px;
}


.box p {
  font-size: 14px; 
  color: #666; 
}
/* About Section Styles */
#about {
    padding: 50px 0;
    background-color: #f9f9f9; 
    border: 2px solid #ccc; 
    border-radius: 10px; 
}

.profile-pic {
    width: 200px;
    height: 200px;
    border-radius: 50%; 
    border: 2px solid #ccc; 
}

/* Main Column Styles */
.main-col {
    padding-left: 20px; 
}


#about_me {
    margin-top: 20px; 
}


.contact-details {
    margin-bottom: 20px; 
}

/* Download Button Styles */
.download a.button {
    background-color: #007bff; 
    color: #fff; 
    padding: 10px 20px; 
    border-radius: 5px; 
    text-decoration: none;
    display: inline-block; 
}

.download a.button:hover {
    background-color: #0056b3; 
}
.banner-text {
  padding: 50px;
  background-color: gray;
  border: 2px solid #007bff; 
  border-radius: 10px; 
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
  animation: moveBannerText 2s ease-in-out infinite alternate; 
}


@keyframes moveBannerText {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(10px); 
  }
}
.home {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 50px;
    background: linear-gradient(to right, red, blue);
}

.image {
    max-width: 50%;
    margin-right: 50px;
    animation: slideInLeft 2s ease-in-out;
}

.image img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

.content {
    max-width: 50%;
    animation: fadeInRight 2s ease-in-out;
    border: 2px solid #007bff; /* Add border */
    border-radius: 10px; /* Add border radius */
    padding: 20px; /* Add padding */
    background-color: #f8f9fa; /* Add background color */
}

.content h3 {
    font-size: 2.5rem;
    color: #333;
    animation: fadeInLeft 2s ease-in-out;
}

.content span {
    font-size: 1.2rem;
    color: #007bff;
    animation: fadeInLeft 2s ease-in-out;
}

.content p {
    font-size: 1rem;
    color: #555;
    margin-top: 20px;
    animation: fadeInLeft 2s ease-in-out;
}

.btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

@keyframes slideInLeft {
    from {
        transform: translateX(-50%);
    }
    to {
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(50%);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-50%);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

#testimonials {
  margin: 0;
  padding: 0;
  font-family: "montserrat", sans-serif;
}

.testimonials {
  padding: 40px 0;
  background: linear-gradient(to right, red, blue);
  color: #434343;
  text-align: center;
}

.inner {
  max-width: 1200px;
  margin: auto;
  overflow: hidden;
  padding: 0 20px;
}

.border {
  width: 160px;
  height: 10px;
  background: #6ab04c;
  margin: 26px auto;
}

.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.col {
  flex: 0 0 33.33%;
  max-width: 33.33%;
  box-sizing: border-box;
  padding: 15px;
}

.testimonial {
  background: #fff;
  padding: 30px;
}

.testimonial img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin: 0 auto 20px; /* Center the image */
}

.name {
  font-size: 20px;
  text-transform: uppercase;
  margin: 20px 0;
}

.stars {
  display: flex;
  flex-direction: row-reverse;
  justify-content: center; /* Center stars horizontally */
}

.star-icon {
  color: #FFD700;
  font-size: 30px;
  margin: 0 5px; /* Add space between stars */
}
@keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

.testimonial {
  animation: slideInFromLeft 0.5s ease-in-out forwards;
}
@keyframes moveFrame {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(50px); /* Adjust the distance the frame moves */
  }
  100% {
    transform: translateX(0);
  }
}

.border {
  width: 160px;
  height: 5px;
  background: #6ab04c;
  margin: 26px auto;
  animation: moveFrame 4s ease infinite; /* Adjust duration and timing function */
}

</style>
<?php require_once('config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
  <body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Навигацыг харуулах</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Навигацыг нуух</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">нүүр</a></li>
            <li><a class="smoothscroll" href="#about">тухай</a></li>
           <li><a class="smoothscroll" href="#resume">Үргэлжлэл</a></li>
            <li><a class="smoothscroll" href="#portfolio">Ажилладаг</a></li>
            <li><a class="smoothscroll" href="#testimonials">Гэрчлэл</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->
<?php 
$u_qry = $conn->query("SELECT * FROM users where id = 1");
foreach($u_qry->fetch_array() as $k => $v){
  if(!is_numeric($k)){
    $user[$k] = $v;
  }
}
$c_qry = $conn->query("SELECT * FROM contacts");
while($row = $c_qry->fetch_assoc()){
    $contact[$row['meta_field']] = $row['meta_value'];
}
// var_dump($contact['facebook']);
?>
      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">Миний нэр <?php echo isset($user) ? ucwords($user['firstname'].' '.$user['lastname']) : ""; ?>.</h1>
            <h3><?php echo stripslashes($_settings->info('welcome_message')) ?></h3>
            <hr />
            <ul class="social">
               <li><a target="_blank" href="<?php echo $contact['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
               <li><a target="_blank" href="<?php echo $contact['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
               <li><a target="_blank" href="mailto:<?php echo $contact['email'] ?>"><i class="fa fa-google-plus"></i></a></li>
            </ul>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->

   <section class="home" id="home">
    <div class="image">
        <img src="mi.jpg" alt="">
    </div>
    <div class="content">
        <h3>Сайн уу, намайг Идэрмөнх гэдэг</h3>
        <span>Вэб дизайнер ба хөгжүүлэгч</span>
        <p>Намайг Сарангэрэл Идэрмөнх гэдэг. 2003 оны 9 сарын 25 төрсөн 2021 онд би ахлах сургуулиа төгссөн Оюутан байх хугацаандаа IT чиглэлээр олон сонирхолтой төслүүдэд гар бие оролцож илүү ихийг мэдэж авсан нь аз завшаан юм.
        </p>
    </div>
</section>

   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

      <div class="three columns">

<img class="profile-pic" src="<?php echo validate_image("mi.jpg"); ?>" alt="Profile Picture" />


</div> 

         <div class="nine columns main-col">

            <h2>Миний тухай</h2>
            <style>
              #about_me *{
                color:#7A7A7A !important;
              }
            </style>
            <div id="about_me"><?php include "about.html"; ?></div>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Холбоо барих мэдээлэл</h2>
                  <p class="address">
               <span><?php echo $contact['address'] ?></span><br>
               <span><?php echo $contact['mobile'] ?></span><br>
                     <span><?php echo $contact['email'] ?></span>
             </p>

               </div>

               <div class="columns download">
                  <p>
                     <!-- <a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a> -->
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->

   <div class="skills">
   <h1 class="heading">Ур чадвар</h1>

   <div class="progress">
      <div class="bar">
         <h3><span>HTML</span> <span>95%</span></h3>
         <div class="progress-bar" style="width: 95%;"></div>
      </div>
      <div class="bar">
         <h3><span>CSS</span> <span>80%</span></h3>
         <div class="progress-bar" style="width: 80%;"></div>
      </div>
      <div class="bar">
         <h3><span>JavaScript</span> <span>65%</span></h3>
         <div class="progress-bar" style="width: 65%;"></div>
      </div>
      <div class="bar">
         <h3><span>PHP</span> <span>80%</span></h3>
         <div class="progress-bar" style="width: 80%;"></div>
      </div>
   </div>
</div>

<section class="about" id="about">

    <h1 class="heading"> <span>НАМТАР</span> </h1>

    <div class="biography">
      <p>Би дунд сургуульд суралцаж байхдаа мэдээлэл зүй алгоритмын хичээлд их дуртай байсан. 
         Тийм учраас програм хангамжийн чиглэлээр суралцахаар шийдвэрлэсэн.</p> 
           
      <div class="bio">

      <h3> <span>нэр : </span> Идэрмөнх </h3>
      <h3> <span>Имэйл : </span> Domoggg0925@gmail.com </h3>
      <h3> <span>хаяг : </span> Улаанбаатар ханеуул </h3>
      <h3> <span>утас : </span> 88680072 </h3>
      <h3> <span>нас : </span> 20 настай </h3>
      <h3> <span>туршлага : </span> 3+ жил сурсан туршлагатай </h3>

      </div>
    </div>

   </section>

   <section class="services" id="services">

<h1 class="heading"> <span>үйлчилгээ</span></h1>

<div class="box-container">

  <div class="box">

    <i class="fas fa-code"></i> 
  <h3>Веб хөгжүүлэлт</h3>
  <p>веб хуудас хөгжүүлэх үйлчилгээ...</p>
  </div>

  <div class="box">

    <i class="fas fa-paint-brush"></i> 
  <h3>график дизайн</h3>
  <p>график дизайн ажил хийнэ...</p>
  </div>


  <div class="box">

    <i class="fas fa-chart-line"></i> 
  <h3>Маркетинг</h3>
  <p>Веб Маркетинг хийх үйлчилгээ...</p>
  </div>

  <div class="box">

    <i class="fas fa-bullhorn"></i> 
  <h3>дижитал маркетинг</h3>
  <p>дижитал маркетинг хийх...</p>
  </div>
</div>
   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Боловсрол</span></h1>
         </div>

         <div class="nine columns main-col">
          <?php 
          $e_qry = $conn->query("SELECT * FROM education order by year desc, month desc");
          while($row = $e_qry->fetch_assoc()):
          ?>
            <div class="row item">

               <div class="twelve columns">

                  <h3><?php echo $row['school'] ?></h3>
                  <p class="info"><?php echo $row['degree'] ?> <span>&bull;</span> <em class="date"><?php echo $row['month'].' '.$row['year'] ?></em></p>

                  <p>
                  <?php echo stripslashes(html_entity_decode($row['description'])) ?>
                  </p>

               </div>

            </div> <!-- item end -->
          <?php endwhile; ?>
           

         </div> <!-- main-col end -->

      </div> <!-- End Education -->


      <!-- Work
      ----------------------------------------------- -->
      <div class="row work">

         <div class="three columns header-col">
            <h1><span>Ажил</span></h1>
         </div>

         <div class="nine columns main-col">
          <?php 
          $w_qry = $conn->query("SELECT * FROM work ");
          while($row = $w_qry->fetch_assoc()):
          ?>
            <div class="row item">

               <div class="twelve columns">

                  <h3><?php echo $row['company'] ?></h3>
                  <p class="info"><?php echo $row['position'] ?> <span>&bull;</span> <em class="date"><?php echo str_replace("_"," ",$row['started']) ?> - <?php echo str_replace("_"," ",$row['ended']) ?></em></p>

                  
                  <p><?php echo stripslashes(html_entity_decode($row['description'])) ?></p>

               </div>

            </div> <!-- item end -->
          <?php endwhile; ?>
         </div> <!-- main-col end -->

      </div> <!-- End Work -->


      <!-- Skills
      ----------------------------------------------- -->
      <!-- <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
            voluptatem sequi nesciunt.
            </p>

        <div class="bars">

           <ul class="skills">
             <li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
                  <li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
            <li><span class="bar-expand wordpress"></span><em>Wordpress</em></li>
            <li><span class="bar-expand css"></span><em>CSS</em></li>
            <li><span class="bar-expand html5"></span><em>HTML5</em></li>
                  <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
          </ul>

        </div>

      </div> 

      </div> 

   </section>
 -->

   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Миний зарим бүтээлийг үзээрэй.</h1>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">
               <?php 
                  $p_qry = $conn->query("SELECT * FROM project ");
                  while($row = $p_qry->fetch_assoc()):
                  ?>
                 <div class="columns portfolio-item">
                    <div class="item-wrap">

                       <a href="#modal-<?php echo $row['id'] ?>" title="">
                          <img alt="" src="<?php echo validate_image($row['banner']) ?>">
                          <div class="overlay">
                             <div class="portfolio-item-meta">
                            <h5 class="truncate-1"><?php echo $row['name'] ?></h5>
                                <!-- <p>Illustrration</p> -->
                         </div>
                          </div>
                          <div class="link-icon"><i class="icon-plus"></i></div>
                       </a>
                    </div>
                </div> <!-- item end -->

              <?php endwhile; ?>

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


          <?php 
              $p_qry = $conn->query("SELECT * FROM project ");
              while($row = $p_qry->fetch_assoc()):
            ?>

         <!-- Modal Popup
        --------------------------------------------------------------- -->

         <div id="modal-<?php echo $row['id'] ?>" class="popup-modal mfp-hide">

          <img class="scale-with-grid" src="<?php echo validate_image($row['banner']) ?>" alt="" />

          <div class="description-box">
            <h4><?php echo $row['name'] ?></h4>
            <p><?php echo stripslashes(html_entity_decode($row['description'])) ?></p>
               <span class="categories"><i class="fa fa-tag"></i><?php echo $row['client'] ?></span>
          </div>

            <div class="link-box">
               <!-- <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a> -->
             <a class="popup-modal-dismiss">Хаах</a>
            </div>

        </div><!-- modal-01 End -->

      <?php endwhile; ?>


      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->




   <!-- Testimonials Section
   ================================================== -->

   <section id="testimonials">
    <div class="testimonials">
      <div class="inner">
        <h1>Гэрчлэл</h1>
        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="testimonial">
              <img src="st.jpg" alt="">
              <div class="name">Марк Цукерберг</div>
              <div class="stars">
              <div class="star-icon">&#9733;</div>
              <div class="star-icon">&#9733;</div>
              <div class="star-icon">&#9733;</div>
              <div class="star-icon">&#9733;</div>
              <div class="star-icon">&#9733;</div>

              </div>

              <p>
              "Миний өдөр бүр өөрөөсөө асуудаг зүйл бол "Би хийж чадах зүйлсээсээ хамгийн чухал зүйлийг хийж чадаж байна уу" гэх асуулт юм".орой орондоо орох бүртээ өдрийн хийж бүтээсэндээ сэтгэл хангалуун байх нь чухал.”
              </p>

            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="stj.jpg" alt="">
              <div class="name">Илон Маск</div>
              <div class="stars">
              <div class="star-icon">&#9733;</div>
              <div class="star-icon">&#9733;</div>
              <div class="star-icon">&#9733;</div>
              <div class="star-icon">&#9733;</div>

              </div>

              <p>
              "Энэ бол уучлах шалтгаан биш ээ. Миний урам үнэхээр хугарлаа. Чи юу нь чухал вэ гэдгийг мэдэж байх ёстой. Бид дэлхийд өөрчилж, түүхийг бүтээж байхад чи нэг бол бие сэтгэлээ бүрэн зориулах ёстой. Үгүй бол үгүй."
              </p>

            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="mas.jpg" alt="">
              <div class="name">Стив Жобс</div>
              <div class="stars">
              <div class="star-icon">&#9733;</div>
              <div class="star-icon">&#9733;</div>
              <div class="star-icon">&#9733;</div>
              <div class="star-icon">&#9733;</div>

              </div>

              <p>
              “Амьдралын чинь ихэнх хугацааг чиний ажил үйлс эзлэх тул сэтгэл хангалуун байх зөв зам нь дуртай ажлаа хийх. Дуртай ажлаа олоогүй бол тасралтгүй хай. Бүү зогс. Түүнийгээ олсон эсэхийг зүрх сэтгэл чинь хэлээд өгнө.
              </p>

            </div>
          </div>

          

        </div>
      </div>
</div>
</section>
  
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
  </body>
</html>
