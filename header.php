<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>style.css">
    <style>
        
.navbar-logo {
    height: 30px;
    filter: invert(1); /* Convierte el logo a blanco */
    transition: all 0.3s ease;
  }
  
  .navbar-brand:hover .navbar-logo {
    filter: invert(65%) sepia(90%) saturate(2593%) hue-rotate(359deg) brightness(102%) contrast(105%); /* Color naranja */
  }
  
  .nav-link {
    position: relative;
    color: rgba(255,255,255,0.8) !important;
    margin: 0 15px;
    transition: all 0.3s ease;
  }
  
  .nav-link:hover,
  .nav-link.active {
    color: #ff6b00 !important;
  }
  
  .nav-link::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background: #ff6b00;
    transition: width 0.3s ease;
  }
  
  .nav-link:hover::after,
  .nav-link.active::after {
    width: 100%;
  }
  
  .navbar-toggler {
    border-color: rgba(255,255,255,0.5);
  }
  
  .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  }

.subscribe {
    background: linear-gradient(
        135deg,
        #212529 0%,
        #153c65 50%,
        #376a9b 100%
        );
    box-shadow: inset 0 20px 30px rgba(0,0,0,0.2);
    background-blend-mode: multiply;
    padding: 20px;
    overflow: hidden;
    height: 550px;
}

.subscribe-form {
    max-width: 400px;
    width: 100%;
  }
  
  /* Estilos para los inputs */
  .form-control-custom {
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: #ffffff;
    transition: all 0.3s ease;
  }
  
  .form-control-custom:focus {
    background-color: rgba(255, 255, 255, 0.2);
    border-color: #ff7b00;
    box-shadow: 0 0 0 0.25rem rgba(255, 123, 0, 0.25);
  }
  
  /* Estilos para el botón naranja */
  .btn-custom {
    background-color: #ff7b00;
    border: 2px solid #ff7b00;
    color: #fff;
    font-weight: 500;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
  }
  
  .btn-custom:hover {
    background-color: #cc6200;
    border-color: #cc6200;
    transform: translateY(-1px);
  }
  
  /* Placeholder personalizado */
  .form-control-custom::placeholder {
    color: rgba(255, 255, 255, 0.7);
  }
  
  @media (max-width: 576px) {
    .subscribe-form {
      padding: 0 1.5rem;
    }
  }


  /* cards */

  .btn-custom {
    background-color: #FF6B00;
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    transition: all 0.3s ease;
  }
  
  .btn-custom:hover {
    background-color: #151515;
    color: white;
    transform: translateY(-2px);
  }
  
  .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 0.75rem;
  }
  
  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }
  
  .text-muted {
    color: #6c757d !important;
    font-size: 0.85rem;
  }



  /* footer */

  .footer-logo img {
    transition: transform 0.3s ease;
  }
  
  .footer-logo:hover img {
    transform: scale(1.05);
  }
  
  .nav-link {
    position: relative;
    transition: color 0.3s ease;
  }
  
  .nav-link:hover {
    color: #FF6B00 !important;
  }
  
  .nav-link::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 1px;
    background: #FF6B00;
    transition: width 0.3s ease;
  }
  
  .nav-link:hover::after {
    width: 100%;
  }
  
  .social-links i {
    font-size: 1.2rem;
    transition: all 0.3s ease;
  }
  
  .social-links a:hover i {
    color: #FF6B00 !important;
    transform: translateY(-2px);
  }


  /* page.php */

  .title-divider {
    width: 80px;
    height: 3px;
    background: #0d6efd;
    margin: 1.5rem auto;
    border-radius: 2px;
  }
  
  .divider-line {
    border-top: 1px solid rgba(0,0,0,0.1);
    position: relative;
  }
  
  .divider-line::after {
    content: "◆";
    position: absolute;
    left: 50%;
    top: -12px;
    transform: translateX(-50%);
    color: #0d6efd;
    background: white;
    padding: 0 10px;
    font-size: 1.2rem;
  }
  
  .text-content {
    line-height: 1.8;
    color: #444;
  }
  
  .highlight-box {
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
  }


  /* single */

  .article-content {
    line-height: 1.7;
    font-size: 1.1rem;
    color: #444;
  }
  
  .article-content h2,
  .article-content h3 {
    margin-top: 2.5rem;
    margin-bottom: 1.5rem;
  }
  
  .main-text p {
    margin-bottom: 1.5rem;
  }
  
  .divider {
    border-top: 1px solid #eee;
    position: relative;
    margin: 3rem 0;
  }
  
  .blockquote {
    font-size: 1.2rem;
  }
  
  @media (max-width: 768px) {
    .article-content {
      font-size: 1rem;
    }
    
    .article-image img {
      max-height: 300px;
    }
  }



  /* aside */

  .sidebar {
    position: sticky;
    top: 100px;
  }
  
  .author-card {
    border: 1px solid rgba(0,0,0,0.1);
  }
  
  .sidebar-widget {
    border: 1px solid rgba(0,0,0,0.1);
    font-size: 0.95rem;
  }
  
  .sidebar-widget h3 {
    border-bottom: 2px solid #0d6efd;
    padding-bottom: 0.5rem;
  }

  
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img src="<?php bloginfo('template_url' ); ?>/images/logo-ipsum.svg" alt="Logo" class="navbar-logo">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
              wp_nav_menu(array(
                  'theme_location'  => 'superior-izquierda',
                  'depth'           => 2,
                  'container'       => false,
                  'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              ));
              ?>

              <?php
              wp_nav_menu(array(
                  'theme_location'  => 'superior-derecha',
                  'depth'           => 2,
                  'container'       => false,
                  'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              ));
              ?>
          </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- subscribe -->
    <div class="container-fluid subscribe pt-5 d-flex flex-column justify-content-center align-items-center">
      <div class="text-center text-white mb-5 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 mb-4">Lorem ipsum dolor sit amet</h1>
        
        <!-- Formulario -->
        <div class="subscribe-form">
          <form action="" class="needs-validation" novalidate>
            <div class="form-group mb-3">
              <input type="text" placeholder="Nombre" class="form-control form-control-custom p-3 mb-3" required>
            </div>
            <div class="form-group mb-4">
              <input type="email" placeholder="Email" class="form-control form-control-custom p-3 mb-3" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-custom w-100 p-3">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- subscribe -->