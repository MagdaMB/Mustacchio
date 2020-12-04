<!DOCTYPE html>
<html>

<head>
  <title>Mustacchio</title>
  <link href="style.css" type="text/css" rel="stylesheet">
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
    <main>
      <section class="sectionOne">
        <div class="sectionOne__img">
          <img src="images/the-beacon.jpg">
        </div>

        <div class="sectionOne__text">
          <div class="sectionOne__text--h1">
            <h1>THE BEACON TO ALL MANKIND</h1>
          </div>
          <div>
            <p class="sectionOne__text--p">Our website templates are created with</p>
            <p class="sectionOne__text--p">inspiration, checked for quality and originality</p>
            <p class="sectionOne__text--p">and meticulously sliced and coded.</p>
          </div>
          <button class="sectionOne__text--button" type="button"><a href="">Read More</a></button>
        </div>
      </section>

      <section class="sectionTwo">
        <div class="sectionTwo__box">
          <img src="images/the-father.jpg">
          <p>The father</p>
        </div>
        <div class="sectionTwo__box">
          <img src="images/the-actor.jpg">
          <p>The actor</p>
        </div>
        <div class="sectionTwo__box">
          <img src="images/the-nerd.jpg">
          <p>The nerd</p>
        </div>
      </section>
    </main>
    <?php
    include('./components/footer.php');
    ?>
  </div>

  <script src="script.js"></script>
</body>

</html>