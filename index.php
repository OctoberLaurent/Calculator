<?php

 ?>
 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <title>A simple calculator with Bootstrap</title>
   </head>
   <body>
       <header>
        <nav class="sticky-top navbar d-block navbar-expand-lg navbar-light bg-light">
            <h3 class = "text-center justify-content-center">A simple calculator with Bootstrap</h3>
        </nav>
       </header>
     </div>

       <!-- calculator -->
     <div class="container mt-5 w-50 bg-dark">
       <!-- result row -->
       <div class="row">
           <div class="py-1 m-1 col bg-light text-right result">
             <h3>0</h3>
           </div>
         </div>
         <!-- first row -->
         <div class="text-center row d-flex flex-nowrap">
            <div class="pt-2 col bg-light ac border border-dark">
              <p>AC</p>
            </div>
            <div class="pt-2 col bg-light ce border border-dark">
              <p>CE</p>
            </div>
            <div class="pt-2 col bg-light border border-dark">
              <p>%</p>
            </div>
            <div class="pt-2 col bg-light border border-dark operation">
              <p>/</p>
            </div>
        </div>
     <!-- second row -->
     <div class="text-center row">
        <div class="pt-2 col-3 bg-light border border-dark operation">
          <p>7</p>
        </div>
        <div class="pt-2 col-3 bg-light border border-dark operation">
          <p>8</p>
        </div>
        <div class="pt-2 col-3 bg-light border border-dark operation">
          <p>9</p>
        </div>
        <div class="pt-2 col-3 bg-light border border-dark operation">
          <p>*</p>
        </div>
      </div>
      <!-- third row -->
      <div class="text-center row">
         <div class="pt-2 col-3 bg-light border border-dark operation">
           <p>4</p>
         </div>
         <div class="pt-2 col-3 bg-light border border-dark operation">
           <p>5</p>
         </div>
         <div class="pt-2 col-3 bg-light border border-dark operation">
           <p>6</p>
         </div>
         <div class="pt-2 col-3 bg-light border border-dark operation">
           <p>-</p>
         </div>
       </div>
       <!-- fourth row -->
       <div class="text-center row">
          <div class="pt-2 col bg-light border border-dark operation">
            <p>1</p>
          </div>
          <div class="pt-2 col bg-light border border-dark operation">
            <p>2</p>
          </div>
          <div class="pt-2 col bg-light border border-dark operation">
            <p>3</p>
          </div>
          <div class="pt-2 col bg-light border border-dark operation">
            <p>+</p>
          </div>
        </div>
        <!-- fifth row -->
        <div class="text-center row">
           <div class="pt-2 col-6 bg-light border border-dark operation">
             <p>0</p>
           </div>
           <div class="pt-2 col-3 bg-light border border-dark operation">
             <p>.</p>
           </div>
           <div class="pt-2 col-3 bg-light border border-dark equal">
             <p>=</p>
           </div>
         </div>
</div>

    <footer>
        <div class="row fixed-bottom d-block navbar bg-dark text-white">
        <p class="d-flex justify-content-end mr-2">Laurent LEPLAT 2019</p>
      </div>
    </footer>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="./js/index.js"></script>
   </body>
 </html>
