<!DOCTYPE html>
<html>

<head>
  <title>Gallery</title>
  <link href="style-gallery.css" type="text/css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
  <div class="container">
    <?php
    include('./components/header.php');
    ?>

    <main class="main">
      <div class="main__title">
        <h1>GALLERY</h1>
      </div>

      <ul class="main__img">
        <li class="main__img--border"><a href="index-post.html"><img src="images/mustache1.jpg"></a></li>
        <li class="main__img--border"><a href="index-post.html"><img src="images/mustache2.jpg"></a></li>
        <li class="main__img--border"><a href="index-post.html"><img src="images/mustache3.jpg"></a></li>
        <li class="main__img--border"><a href="index-post.html"><img src="images/mustache4.jpg"></a></li>
        <li class="main__img--border"><a href="index-post.html"><img src="images/mustache5.jpg"></a></li>
        <li class="main__img--border"><a href="index-post.html"><img src="images/mustache6.jpg"></a></li>
        <li class="main__img--border"><a href="index-post.html"><img src="images/mustache7.jpg"></a></li>
        <li class="main__img--border"><a href="index-post.html"><img src="images/mustache8.jpg"></a></li>
        <li class="main__img--border"><a href="index-post.html"><img src="images/mustache9.jpg"></a></li>
      </ul>
    </main>

    <?php
    include('./components/footer.php');
    ?>
  </div>

  <script type="text/javascript" src="script.js"></script>
</body>

</html>