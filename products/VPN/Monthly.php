<!DOCTYPE html>
<!-- Substantial portion of software no credit taken -->
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LPHS PP - Digital Services Made Easy</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
    <link href="../../css/landing-page.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
  </head>

  <body>
<!-- Navigation -->
<nav class="main-navigation">
        <div class="navbar-header animated fadeInUp">
            <a class="navbar-brand" href="#">Personal Project</a>
        </div>
        <ul class="nav-list">
            <li class="nav-list-item">
                <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-list-item">
                <a href="servers.html" class="nav-link">Servers</a>
            </li>
            <li class="nav-list-item">
                <a href="VPN.html" class="nav-link">VPN</a>
            </li>
            <li class="nav-list-item">
                <a href="WH.html" class="nav-link">Web Hosting</a>
            </li>
            <li class="nav-list-item">
                <a href="about.html" class="nav-link">About Us</a>
            </li>
            <li class="nav-list-item">
                <a href="tos.html" class="nav-link">ToS</a>
            </li>
            <li class="nav-list-item">
                <a href="contact.html" class="nav-link">Contact</a>
            </li>
        </ul>

</nav>

<div class="Product-Info">
      <div class="text-center">
            <h3>VPN Monthly Plan</h3>
                <p>This plan is paid on a monthly basis, no commitment cancel anytime.</p>
                <p>Features</p>
                    <ul>
                        <li>Over 5000 servers located throughout the world</li>
                        <li>In 62+ countries</li>
                        <li>Military Grade Encryption</li>
                        <li>No Logs</li>
                        <li>Many platforms, 6 sessions at once</li>
                        <li>24/7 support</li>
                    </ul>
                <p>15$ Per Month</p>
          
<?php require_once('./config.php'); ?>
<form action="monthlycharge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="VPN Access for a Month"
          data-amount="1500"
          data-locale="auto"></script>
</form>
          
</div>     
</div>
