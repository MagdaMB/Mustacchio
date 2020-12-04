<!DOCTYPE html>
<html>

<head>
  <title>Contact</title>
  <link href="style-contact.css" type="text/css" rel="stylesheet">
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
        <h1>LET'S KEEP IN TOUCH</h1>
      </div>

      <section class="section">
        <form class="section__form">
          <input type="text" placeholder="Name" name="name" />
          <input type="text" placeholder="Address" name="address" />
          <input type="email" placeholder="Email" name="email" />
          <input type="tel" placeholder="Phone Number" name="phone" />
          <textarea name="comment" cols="30" rows="10" placeholder="Message"></textarea>
          <input type="submit" value="Send" name="button" />
        </form>
      </section>

    </main>

    <?php
    include('./components/footer.php');
    ?>
  </div>

  <script type="text/javascript" src="script.js"></script>
</body>

</html>