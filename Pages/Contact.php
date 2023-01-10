<?php 
 $page = "Contact";

require 'header.php';
?>

<!-- Contact section -->

<section id="Contact">
  <div class="container">
    <h2 class="title text-uppercase">CONTACT</h2>
    <div class="content">
      <div class="row gy-5">
        <div class="col-lg-5">
          <div class="info">
           <div class="py-5 text-center">
           <h3 class=" text-capilatize text-white fw-bold fs-1">Get In Touch</h3>
           <span class="hr"></span>
           <p class="pt-3 text-white info_text">For more information on my of our services or to talk about how we may be able help you, please get in touch with using the form opposite. Or you can call and follow our soccial media.</p>
           </div>
           
           <div class="row">
            <div class="col-sm-6">
            <div class="phone py-3 text-center">
            <h3 class="text-white fw-bold">Phone</h3>
            <span class="hr"></span>
            <p><a class="text-white text-dacaration-none"  href="tel:+880 01858598775" target="_blank">+880 01858598775</a></p>
           </div>
            </div>
            <div class="col-sm-6">
            <div class="Email py-3 text-center">
            <h3 class="text-white fw-bold">E-mail</h3>
            <span class="hr"></span>
            <p><a class="text-white text-dacaration-none" href="mailto:mdmnla033@gmail.com" target="_blank">mdmnla033@gmail.com</a></p>
           </div>
           
            </div>
            <div class="row">
              <div class="col-sm-6">
              <div class="address py-3 text-center">
            <h3 class="text-white fw-bold">Address</h3>
            <span class="hr"></span>
            <p><a class="text-white text-dacaration-none text-capitalize" href="https://goo.gl/maps/D6pbGTxgNqzwN72g6" target="_blank">gupalpur, taradanda, mymensingh, Bangladash</a></p>
           </div>
              </div>
              <div class="col-sm-6">
              <h3 class="text-white fw-bold text-center">Follow</h3>
            <span class="hr"></span>
            <div class="market_place my-3">
            <a href="https://www.fiverr.com/md_nazmulislam5?up_rollout=true" target="_blank">
              <img src="../images/icons/fiverr_icon.png" alt="fiverr" />
            </a>
            <a href="https://www.upwork.com/freelancers/~0137b021acc4dcfd80" target="_blank">
              <img src="../images/icons/upwork-icon.png" alt="upwork" />
            </a>
            <a href="https://www.freelancer.com.bd/u/MdNazmulIslam500" target="_blank">
              <img src="../images/icons/freelancer.jpg" alt="freelancer" />
            </a>
          </div>
              </div>
            </div>
           </div>
          </div>
         

          <div class="d-flex justify-content-center flex-wrap social_icons">
            <a href="https://www.facebook.com/freelancernazmul.islam.9" target="_blank">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="https://www.linkedin.com/in/md-nazmul-islam28656651/" target="_blank">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://join.skype.com/invite/u6k9ZVqFhxKX" target="_blank">
              <i class="bi bi-skype"></i>
            </a>
            <a href="https://www.instagram.com/md_nazmul_islam888/" target="_blank">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="https://www.behance.net/mdmnla" target="_blank">
              <i class="bi bi-behance"></i>
            </a>
            <a href="https://twitter.com/MdBabuI28531095" target="_blank">
              <i class="bi bi-twitter"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="form">
            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" class="needs-validation min_from" method="post">
              <h2 class="text-white py-5">
                Please Conact me if you have any questions.
              </h2>
              <div class="row g-3">
                <div class="col-sm-6">
                  <input type="text" name="name" class="form-control name" placeholder="Name" aria-label="name" />
                  <div class="valid-feedback"> Looks good! </div>
                </div>
                <div class="col-sm-6">
                  <input type="email" name="email" class="form-control email" placeholder="Email" aria-label="Last name" />
                  <div class="valid-feedback"> Looks good! </div>
                </div>
                <div class="col-12">
                  <select name="select" class="form-select" required>
                    <option value="0" selected>Select one</option>
                    <option value="1">Website Desgin</option>
                    <option value="2">Web Development</option>
                    <option value="3">Font-end Development</option>
                    <option value="4">WordPress Website design</option>
                    <option value="5">Email Template Design</option>
                  </select>
                  <div class="valid-feedback"> Please select a valid subject. </div>
                </div>
                <div class="col-12">
                  <div class="form-floating textarea">
                    <textarea class="form-control message" name="message" placeholder="Type a Message" id="Message"
                      style="height: 120px"></textarea>
                  </div>
                  <div class="valid-feedback"> Please write some deatils </div>
                </div>
              </div>
              <div class="text-center Submit-btn">
                <button type="submit" name="esubmit" class="btn-small px-5 rounded">
                  <span>SEND</span>
                </button>
              </div>
  <?php  
  if(isset($_POST['esubmit'])){
   $to = "freelancer@fnazmul.com";
   $name = $_POST['name'];
   
   $subject= $_POST['select'];
   switch ($subject){
    case "1";
    $sub = "website desgin";
    break;
    case "2";
    $sub = "web Development";
    break;
    case "3";
    $sub = "Font-end Development";
    break;
    case "4";
    $sub = "WordPress website design";
    break;
    case "5";
    $sub = "Email Template Design";
    break;
    default:
    $sub = "Select one";
   }
   $email= $_POST['email'];
   $msg= $_POST['message'];
   $message= "Name : $name <br> Email: $email <br> $msg ";
   $header = [
    "MIME-Version: 1.0",
    "Content-type: text/plain; charset=utf-8",
    "From: mdmnla033@gmail.com",
    "Cc : mdnazmulkhan4398@gmail.com"
   ];

  $header = implode("\r\n",$header);
  if( mail($to,   $sub, $message, $header)){

    echo "  <h3 class='text-center' style='color: #3fa9f5; '> Email Send successfully</h3>";
  }else{
    echo "  <h3 class='text-center text-danger'> Email Send failed</h3>";
  }
  }

  ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- #Contact section -->

      
      <?php require 'footer.php';?>
