
<!doctype html>
<html lang="en">
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title><?= $config['web']['name']; ?></title>
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
            <link type="text/css" href="<?= $config['web']['url']; ?>assets/css/bootstrap.css" rel="stylesheet">
            <link type="text/css" href="<?= $config['web']['url']; ?>assets/css/bootstrap.min.css" rel="stylesheet">
            <link type="text/css" href="<?= $config['web']['url']; ?>assets/css/carousel.css" rel="stylesheet">
          </head>
      <body>
         <nav class="navbar navbar-expand-lg shadow-sm"style="background-color: #F4F4F4;">
              <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-family: 'Montserrat', sans-serif;"><?= $config['web']['name']; ?></a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                   </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                     <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="<?= $config['web']['url']; ?>">Home</a>
                        <a class="nav-link" href="<?= $config['web']['url']; ?>produk">Produk</a>
                        <a class="nav-link" href="<?= $config['web']['url']; ?>artikel">Artikel</a>
                                             </div>

                  </div>
              </div>
          </nav>
          <style type="text/css">
    .dropdown-toggle,
    .dropdown-menu {
        border-radius: 0px !important;
    }
    .dropdown-item:hover {
        color: white;
        background-color: #34d5eb;
    }
    .btn-info {
        width: 55%;
    }
    .dropdown:hover>.dropdown-menu,
    .dropdown-submenu:hover>.dropdown-menu {
      display: block;
    }
    .dropdown-1 {
        left: 158px !important;
        top: 70px;
    }
</style>
          <div class="wrapper">
            <div class="container-fluid">
              <br />