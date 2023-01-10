<?php 
$page_host = basename($_SERVER['PHP_SELF']);
switch($page_host){
  case "index.php";
  $page_title = "Home";
  break;
  case "About.php";
  $page_title = "About";
  break;
  case "Services.php";
  $page_title = "Services";
  break;
  case "Portfolio.php";
  $page_title = "Portfolio";
  break;
  case "Contact.php";
  $page_title = "Contact";
  break;
  case "Website_Design.php";
  $page_title = "Website Design";
  break;
  case "Web_Development.php";
  $page_title = "Web Development";
  break;
  case "Email_Template_Design.php";
  $page_title = "Email Template Design";
  break;
  case "Font_End_development.php";
  $page_title = "Font End development";
  break;
  case "WordPress_Website_Design.php";
  $page_title = "WordPress Website Design";
  break;
  default :
  $page_title = "Freelancer Nazmul";
      break;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   
    <meta name="description" content="Freelancer Nazmul is a professional Website Design and Developer. and also an expert in HTML, CSS, javascript, PHP, MySQL, and WordPress. I have two years of work experience in web design, web development, font-end development, WordPress website design, and  Email template design. I live in Mymensingh Bangladesh." />
    <meta name="keywords" content="Freelancer, web Design, web developer, font-end development, PHP developer, Freelancer Nazmul, Fnazmul,Freelancer Bangladesh, Email template design,professional Website" />
    <meta name="author" content="Freelancer Nazmul" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?php echo $page_title; ?>
    </title>
    <!-- fontasome -->
    <script
      src="https://kit.fontawesome.com/02184d1027.js"
      crossorigin="anonymous"
    ></script>
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
    />

    <!-- min css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RLM2C0DFNR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RLM2C0DFNR');
</script>

  </head>

  <body>

    <!-- header -->
    <header>
      <nav class="navbar navbar-expand-lg position-relative">
        <div class="container">
          <div class="navbar-brand logo">
            <a href="https://fnazmul.com/" target="_top">
              <img src="images/Logo.png" alt="Logo" />
            </a>
          </div>
          <button class="navbar-toggler" type="button">
            <span class="colse d-none"><i class="bi bi-x-lg"></i></span>
            <span class="open"><i class="bi bi-list"></i></span>
            <br />
          </button>
          <div class=" navbar-collapse d-none d-lg-block justify-content-end ">
            <ul class="navbar-nav text-center">
              <li class="nav-item <?php if( $page == "Home"){ echo "active";}  ?>">
                <a href="../index.php" class="nav-link ">HOME</a>
              </li>
              <li class="nav-item <?php if( $page == "About"){ echo "active";}  ?>">
                <a href="Pages/About.php" class="nav-link">ABOUT</a>
              </li>
              <li class="nav-item position-relative services <?php if( $page == "Services" || $subpage == true){ echo "active";} ?>">
                <a href="Pages/Services.php" class="nav-link">SERVICES</a>
                <ul class="nav sub_menu <?php if( $page == "Services" ){ echo "sub_menu_a";} ?>">
                  <li class="nav-item text-center w-100 text-uppercase <?php if( $subpage == "Website_Design"){ echo "active_s";}  ?>">
                    <a href="Pages/Website_Design.php" class="nav-link">Website design</a>
                  </li>
                  <li class="nav-item text-center w-100 text-uppercase <?php if( $subpage == "Web_Development"){ echo "active_s";} ?>">
                    <a href="paegs/Web_Development.php" class="nav-link">Web development</a>
                  </li>
                  <li class="nav-item text-center w-100 text-uppercase  <?php if( $subpage == "Email_Template_Design"){ echo "active_s";} ?>">
                    <a href="Pages/Email_Template_Design.php" class="nav-link">Email Template Design</a>
                  </li>
                  <li class="nav-item text-center w-100 text-uppercase <?php if( $subpage == "Font_End_Development"){ echo "active_s";} ?>">
                    <a href="Pages/Font_End_development.php" class="nav-link">Font-End Development</a>
                  </li>
                  
                  <li class="nav-item text-center w-100 text-uppercase  <?php if( $subpage == "WordPress_Website_Design"){ echo "active_s";} ?>">
                    <a href="Pages/WordPress_Website_Design.php" class="nav-link">WordPress Website Design</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item <?php if( $page == "Portfolio"){ echo "active";}  ?>">
                <a href="Pages/Portfolio.php" class="nav-link ">PORTFOLIO</a>
              </li>
              <li class="nav-item <?php if( $page == "Contact"){ echo "active";}  ?>">
                <a href="Pages/Contact.php" class="nav-link">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- #header -->
