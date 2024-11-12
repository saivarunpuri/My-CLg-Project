<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<?php 
  
  $conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed'); 
   
  if(isset($_POST['submit'])){ 
   
     $name = mysqli_real_escape_string($conn, $_POST['name']); 
     $email = mysqli_real_escape_string($conn, $_POST['email']); 
     $number = $_POST['number']; 
     $date = $_POST['date']; 
   
     $insert = mysqli_query($conn, "INSERT INTO contact_form(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed'); 
   
     if($insert){ 
        $message[] = 'appointment made successfully!'; 
     }else{ 
        $message[] = 'appointment failed'; 
     } 
   
  } 
  ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    <link rel="stylesheet" href="/myproject.css"> 
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Home</title>
</head>
<body>
<header class="header"> 
  
  <a href="#" class="logo"><strong>MEDICAL</strong>EXPERT </a> 

  <nav class="navbar"> 
      <a href="#home">home</a> 
      <a href="#about">about</a> 
      <a href="/services.html">services</a> 
      <a href="/edoc-echanneling-main/index.html">appointment</a> 
      <a href="#contactus">Contact Us</a> 
      <a href="/myteam.html">Myteam</a> 
      <a href="#faqs">FAQ's</a> 
      <a href="/chatbot.html">AI Chat Bot</a>

       
  </nav> 

  <div id="menu-btn" class="fas fa-bars"></div> 

</header> 

<!-- header section ends --> 

<!-- home section starts  --> 

<section class="home" id="home"> 

  <div class="image"> 
      <img src="/image/img1.png" alt=""> 
  </div> 

  <div class="content"> 
      <h3>we take care of your healthy life</h3> 
      <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p> 
      <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a> 
  </div> 

</section> 

<!-- home section ends --> 

<!-- icons section starts  --> 

<section class="icons-container"> 

  

  <div class="icons"> 
      <i class="fas fa-users"></i> 
      <h3>1030+</h3> 
      <p>satisfied patients</p> 
  </div> 

  

  <div class="icons"> 
      <i class="fas fa-hospital"></i> 
      <h3>70+</h3> 
      <p>available hospitals</p> 
  </div> 

</section> 

<!-- icons section ends --> 

<!-- about section starts  --> 

<section class="about" id="about"> 

  <h1 class="heading"> <span>about</span> us </h1> 

  <div class="row"> 

      <div class="image"> 
          <img src="/image/5219863-removebg-preview.png" alt=""> 
      </div> 

      <div class="content"> 
          <h3>take the world's best quality treatment</h3> 
          <p>This Website selects the best expierence ,and to use our collest bot feautre</p> 
          <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> 
      </div> 

  </div> 

</section> 

<!-- about section ends --> 



<!-- appointmenting section starts   --> 

<section class="appointment" id="appointment"> 

  <h1 class="heading"> <span>appointment</span> now </h1>     

  <div class="row"> 

      <div class="image"> 
          <img src="/image/3896559-removebg-preview.png" alt=""> 
      </div> 

      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
      <?php 
          if(isset($message)) { 
              foreach($message as $message) { 
              echo'<p class ="message">'.$message.'</p>'; 
          } 
          } 
      ?> 

          <a href="/edoc-echanneling-main/index.html"><h3>make appointment</h3></a>
          
      </form> 

  </div> 

</section> 
<section class="about" id="contactus"> 
  <h1 class="heading"> <span>Contact</span> US </h1> 

  <div class="row"> 
      <div class="content"> 
          <h3>Contact US</h3> 
          <p>Get In touch We would love to hear you</p>
          <p>Check out Some FAqs for answers to some to the most questions</p>
          <p> <i class="fas fa-phone col"></i> +8801782546978  </p>
         <p> <i class="fas fa-envelope col "></i>saivarun.puri@gmail.com </p>


      </div> 

      <div class="image"> 
          <img src="/image/5114855.jpg" alt=""> 
      </div>

  </div> 

</section>

<!-- appointmenting section ends --> 

<!-- footer section starts  --> 

<section class="footer"> 

  <div class="box-container"> 

      <div class="box"> 
          <h3>quick links</h3> 
          <a href="#home"> <i class="fas fa-chevron-right"></i> home </a> 
          <a href="#about"> <i class="fas fa-chevron-right"></i> about </a> 
          <a href="/services.html"> <i class="fas fa-chevron-right"></i> services </a> 
          <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a> 
      </div> 

      <div class="box"> 
          <h3>our services</h3> 
          <a href="#"> <i class="fas fa-chevron-right"></i> Online Pharmacy </a> 
          <a href="#"> <i class="fas fa-chevron-right"></i> Consultattion </a> 
          <a href="#"> <i class="fas fa-chevron-right"></i> Tracking </a> 
      </div> 

      <div class="box"> 
          <h3>appointment info</h3> 
          <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a> 
          <a href="#"> <i class="fas fa-envelope"></i>saivarun.puri@gmail.com </a> 
          <a href="#"> <i class="fas fa-map-marker-alt"></i> saidabad, hyderbad </a> 
      </div> 

      <div class="box"> 
          <h3>follow us</h3> 
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a> 
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a> 
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a> 
           
      </div> 

  </div> 



  <div class="credit"> created by <span>VASANTH and team</span> | all rights reserved </div> 

</section> 

<!-- footer section ends --> 
<section id="faqs">
<div class="wrapper">
      <h1 class="heading">Frequently Asked Questions</h1>

      <div class="faq">
        <button class="accordion">
          What is cardilogy?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Krushi is a Public Charitable Trust designed to carry out farming on
            extensive scale Natural & Sustainable methods.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        When should you go to the Hospital?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
          A person should rush or go to the nearest hospital when he has a medical emergency, for eg. difficulty in breathing, shortness of breath, pain or pressure in the chest or upper abdominal region, fainting, sudden dizziness or weakness. You can also visit a doctor or seek online consultations for medical issues that do not require immediate medical attention.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        How to find best hospital in Hyderabad location?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
          To find the best hospital in Hyderabad you should first determine the care you need and the hospitals present around you. Think about your personal and financial constraints if any. Discuss your hospital options, and choose a hospital that fits your criteria wholistically.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        What is multi super speciality hospital?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
          A Multi-speciality Hospital has facilities for most conditions and diseases to be taken care of by an expert team of doctors and specialists. The patients are entirely taken care of in air-conditioned rooms and canteens inside with personalized care.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        Which is the best multi speciality hospitals in Hyderabad?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
          Yashoda Hospitals is one of the most well known Hospitals Groups in Hyderabad. They provide quality healthcare for people with diverse medical needs. They have four independent hospitals, 4000 beds, four Cancer Institutes, four Heart Institutes, and more than 700 specialist doctors. It is a NABH Nursing Excellence Certified Hospital.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How can I contact?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>
    </div>
</section>



<!-- js file link  --> 
<script src="/myproject.js"></script> 

</body>

</html>