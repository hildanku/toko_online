<?php
require('conf.php');
require('lib/header.php');
?>
  <!--              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Daftar Produk</li>
                </ol>
              </nav>
               Page-Title 
                <div class="row">
                    <div class="col-md-12">
                        <br />
                    </div>
                </div>-->
<?php
session_start();

if (!$_SESSION["is_login"] === TRUE) {
    header("location: login.php");
    exit;
}
?>

                <main>

<div id="myCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
<!---   <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="bd-placeholder-img bg-dark" src="<?= $config['web']['url']; ?>assets/img/project1.png" width="100%" height="100%"></img>
    </div>
    <div class="carousel-item">
    <img class="bd-placeholder-img bg-dark" src="https://images.tokopedia.net/img/NsjrJu/2020/9/25/b1d2ed1e-ef80-4d7a-869f-a0394f0629be.jpg?ect=3g" width="100%" height="100%"></img>
    </div>
<!--  <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
      <div class="container">
      </div>
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<hr class="featurette-divider">
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://fimgs.net/mdimg/dizajneri/o.1979.jpg" \>

      <h2>Lattafa Perfumes</h2>
      <p>Designer Lattafa Perfumes has 117 perfumes in our fragrance base. Lattafa Perfumes is a new fragrance brand. The earliest edition was created in 2014 and the newest is from 2022. </p>
      <p><a class="btn btn-secondary" href="https://www.fragrantica.com/noses/Francis_Kurkdjian.html" target="_blank">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://fimgs.net/mdimg/dizajneri/o.56.jpg" \>

      <h2>Dolce&Gabbana</h2>
      <p>Dolce&Gabanna is an Italian luxury fashion house founded in 1985 by Domenico Dolce and Stefano Gabbana. Making an immediate impact with their flashy, sexy clothing—for example, their signature "corset dresses"—and provocative advertising, the house quickly gained fame and the loyalty of high-profile celebrity customers such as Madonna, who wears their fashions offstage and has hired the house to design costumes for her performances.</p>
      <p><a class="btn btn-secondary" href="https://www.fragrantica.com/designers/Dolce-Gabbana.html" target="_blank">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://fimgs.net/mdimg/dizajneri/o.65.jpg" \>

      <h2>Giorgio Armani</h2>
      <p>Giorgio Armani is an Italian fashion designer particularly noted for his menswear. Armani started his career as designer of shop-windows in a department store and worked his way up to menswear buyer. From 1960 to 1972 he worked as a designer for the well-known house of Nino Cerutti and then worked as an independent designer for a number of fashion houses before founding his own brand.</p>
      <p><a class="btn btn-secondary" href="https://www.fragrantica.com/designers/Giorgio-Armani.html" target="_blank">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES 

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
      <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
    </div>
    <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
      <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
    </div>
    <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

    </div>
  </div>

  <hr class="featurette-divider">

/END THE FEATURETTES -->

</div><!-- /.container -->

<br />
</main>
<?php
require('lib/footer.php');
?>