

<!DOCTYPE HTML>
<html lang="bg">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>FitnessXZone</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="Fitness Tutorials and exercises " />
      <meta name="author" content="Nikolay Zhelyazkov" />
      <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/styles/base.css" type="text/css" />
      <link rel="stylesheet" href="assets/styles/layouts.css" type="text/css" />
      <link rel="stylesheet" href="assets/styles/home_page.css" type="text/css" />
      <link rel="stylesheet" media="screen and (max-width: 660px)" href="assets/styles/style660px.css" type="text/css" />
   </head>
   <body>
      <?php include "inc/header.php"; ?>
      <main>
         <div id="img" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
               <li data-target="#img" data-slide-to="0" class="active"></li>
               <li data-target="#img" data-slide-to="1"></li>
               <li data-target="#img" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="assets/images/welcome.jpg" alt="Welcome" width="1100" height="500">
                  <div class="carousel-caption">
                     <h3>Fitness X ZONE</h3>
                     <p class="text-danger">Добре дошли!</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="assets/images/home1.jpg" alt="Training" width="1100" height="500">
                  <div class="carousel-caption">
                     <h3 class="text-danger">Упражнения</h3>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="assets/images/home2.jpg" alt="Warm Up" width="1100" height="500">
                  <div class="carousel-caption">
                     <h3 class="text-danger">Загрявка</h3>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#img" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#img" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
         </div>
         <div class="row mt-1">
            <div id="First_section" class="col-12 col-sm-6">
               <a href="exercises/exercises.php" title="упражнения"><img src="assets/images/exercise.jpg" style="width:100%;"
                  alt="Упражнения" /></a>
               <p>В секция <mark><b><a href="exercises/exercises.php">Упражнения</a></b></mark> може да откриете различни упражнения,
                  които да използвате във вашите тренировки.
               </p>
            </div>
            <div id="Final_section" class="col-12 col-sm-6">
               <a href="#" title="ЗАГРЯВКА"><img src="assets/images/warmup.jpg" style="width:100%;"
                  alt="Загрявка" /></a>
               <p> В секция <mark><b><a href="#">Загрявка</a></b></mark> може да намерите начини за
                  загряване на тялото преди тренировка, за да не се контузите.
               </p>
            </div>
         </div>
         <aside>
                <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button>
         </aside>
      </main>
     <?php include "inc/footer.html";  ?>
     
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	   crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
         integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
         crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
         integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
         crossorigin="anonymous"></script>
      <script src="assets/scripts/header.js"></script>
      <script>
        $(function() {
            $("#scrollTop").click(function(e){
                e.preventDefault();
                $('html, body').animate({ scrollTop: 0 }, 'slow');
              
            });
        });
    </script>
    <script src="assets/scripts/scrollTop.js"></script>
   </body>
</html>

