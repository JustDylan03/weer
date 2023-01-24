<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>SlimWeer&trade;</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Add your site or application content here -->
  <div class="background">
    <header>
      <div class="container">
        <div class="logo">
          <img src="img/icon_cloud.png">
          <p>SlimWeer</p>
        </div>
          <div class="navbar">
              <nav>
                  <a href="">Dit Weekend</a>
                  <a href="">Volgende Week</a>
                  <a href="">14 dagen</a>
                  <a href="">Contact</a>
              </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="spacebetween">
    <div class="SlimWeerVak">
      <div class="SlimweerTekst">
        <div class="overslimweertitel">
            <p>Over SlimWeer</p>
        </div>    
            <div class="overslimweer">
              <p>SlimWeer is het weerbureau van Smart City. Onze voorspelling is iedere dag weer superslim, dankzij de supercomputers en onze weermannen en -vrouwen die nog ouderwets naar
                  buiten kijken! Check hieronder meteen de voorspelling voor vandaag.</p>
              <div class="iconcloud">
                <img src="img/icon_cloud.png">
              </div>
  </div>
    <div class="container">
            </div>
            <div class="slimweervandaag">
            <img src="img/arrow.png">
            <p>“Het is vandaag bewolkt met kans op regen. In de ochtend ligt de
                temperatuur nog rond het vriespunt, maar ‘s middags kan het tot vijf
                graden worden. In het noorden mogelijk natte sneeuw.”</p>
            </div>
        </div>
        <div class="contact">
          <div class="contacttitel">
            <p>Contact met SlimWeer</p>
          </div>
          <form action="backend/questionController.php" method="post">
            <div class="contactform">
              <div class="contactinputs">
                <label for="fullname">FULL NAME</label>
                <input type="text" name="fullname">
                <label for="telefoon_nmr">telefoon_nmr</label>
                <input type="text" name="telefoon_nmr">
                <label for="weervraag">Weervraag</label>
                <textarea name="weervraag" rows="10"></textarea>
                <input type="submit" class="sendbutton" value="MESSAGE">
              </div>
            </div>
        </div>
      </div>
    </div>

        



</body>

</html>