<?php
    require_once("./src/header.inc.php");
?>

<body>
<header>
   <section id="colorblack"> 
    <section class="toggle-container">
        <input type="checkbox" id="switch" name="theme" /><label for="switch">Toggle</label>
    </section>

    <section class="logo">
     <img src="./asset/Edomiyas_logo.PNG" width="120px" alt="logo" loading="lazy">
    </section>

    <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fa fa-bars"></i>
        </span>

        <ul class="main-nav" id="js-menu">
            <li>
                <a href="#" class="nav-links">ACCUEIL</a>
            </li>
            <li>
                <a href="#cv" class="nav-links">CIRRICULUM VITAE</a>
            </li>
            <li>
                <a href="#ccc" class="nav-links">CCC</a>
            </li>
            <li>
              <a href="#portfolio" class="nav-links">PORTFOLIO</a>
            </li>
            <li>
                <a href="#contactez_moi" class="nav-links">CONTACT</a>
            </li>
        </ul>
    </nav>
   </section> 
  </header>

      
        <?php
           include_once("./src/main.inc.php");
        ?>
    

<?php
    include_once('./src/footer.inc.php');
?>

      <script src="./js/app.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
</body>
</html>