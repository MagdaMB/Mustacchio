<!DOCTYPE html>
<html>

<head>
  <title>Blog</title>
  <link href="style-blog.css" type="text/css" rel="stylesheet">
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
        <h1>BLOG</h1>
      </div>

      <section class="section">
        <div class="section__box">
          <img src="images/cutting-mustache.jpg">
          <div class="section__box--flex">
            <h1>WHY I GREW A MUSTACHE</h1>
            <p>This website template has been designed by <a href="" class="section__box--article">Free Website
                Templates</a> for you, for free.
              You can replace all this text with your own text.</p>
            <a href="index-blog-post.html" class="section__box--button">READ THIS</a>
          </div>
        </div>

        <div class="section__box">
          <img src="images/in-the-country.jpg">
          <div class="section__box--flex">
            <h1>IN THE COUNTRY</h1>
            <p>Want an easier solution for a <a href="" class="section__box--article">Free Website</a>?
              Head straight to <a href="" class="section__box--article">Wix</a> and immediately start customizing your
              website!</p>
            <a href="index-blog-post.html" class="section__box--button">READ THIS</a>
          </div>
        </div>

        <div class="section__box">
          <img src="images/mustache-brothers.jpg">
          <div class="section__box--flex">
            <h1>THE MUSTACHE BROTHERS</h1>
            <p><a href="" class="section__box--article">Wix</a> is an online website builder with a simple drag & drop
              interface, meaning you do the
              work online and instantly publish to the web. Nothing to download, nothing to upload.</p>
            <a href="index-blog-post.html" class="section__box--button">READ THIS</a>
          </div>
        </div>
      </section>

    </main>

    <?php
    include('./components/footer.php');
    ?>
  </div>

  <script type="text/javascript" src="script.js"></script>
</body>

</html>