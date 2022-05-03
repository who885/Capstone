<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <?php
    require 'Classes\Music.php';
    require 'Classes\Lyrics.php';
    require 'Classes\Translated.php';
    require 'Classes\Dates.php';
    require 'Classes\Database.php';
    $conn = require  'includes\db.php';
    $articles = Music::getByID($conn, 1);
    $articles2 = Music::getByID($conn, 2);
  //  $lyrics = Lyrics::getByID($conn, 1);
  $dates = Dates::getByID($conn, 1);
  $dates4 = Dates::getByID($conn, 21);
  $dates5 = Dates::getByID($conn, 22);
  $dates7 = Dates::getByID($conn, 27);
  //  $translated = Translated::getByID($conn, 1);
$articles3 = Music::getByID($conn, 3);
$articles4 = Music::getByID($conn, 4);
$articles5 = Music::getByID($conn, 5);
$articles6 = Music::getByID($conn, 6);
$articles7 = Music::getByID($conn, 7);
     ?>
    <meta charset="utf-8">
    <title>Website title</title>
  </head>
  <body>
    <nav class="topnav">
      <ul>
        <li class="website_name">Website Name</li>
        <li><a href="index.php">Home</a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#">page4</a></li>
        <li><a href="#">Page3</a></li>
      </ul>
      <div class="Shadow">
        <img class="head_img" src="https://www.magix.com/fileadmin/user_upload/SEO/Music/Organize-music/i_562531/organize-music-header-mobile-int.jpg" alt="">
        </div>
    </nav>


<div class="row">

<div class="column">
<div class="article_1">
  <a href="#">  <img class="art_1_img" src="<?php echo $articles2->thumb_link; ?>" alt="">
    <div class="center">
    <h2>Article_1</h2>
    <div class="content1">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Cras sed nulla pretium, placerat nisl sed, ornare ipsum. Ut et eros eu telluLorem ipsum dolor sit amet, consectetur adipiscing elit.Cras sed nulla pretium, placerat nisl sed, ornare ipsum. Ut et eros eu tellus </p>
    </div>
    </div>
    </a>
</div></div>



<div class="column">
<div class="article_1">
  <a href="#">  <img class="art_1_img" src="<?php echo $articles5->thumb_link; ?>" alt="">
    <div class="center">
    <h2>Article_2</h2>
    <div class="content2">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Cras sed nulla pretium, placerat nisl sed, ornare ipsum. Ut et eros eu tellus </p>
    </div>
    </div>
    </a>
</div></div>
<div class="column">


<div class="article_2">
  <a href="#">  <img class="art_2_img" src="<?php echo $articles3->thumb_link; ?>" alt="">
    <div class="center">
    <h2>Article_3</h2>
    <div class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Cras sed nulla pretium, placerat nisl sed, ornare ipsum. Ut et eros eu tellus </p>
    </div>
    </div>
    </a>
</div>
</div>
</div>

<div class="row2">

<div class="column2">
<div class="article_3">
  <!--this is how you link your article page!-->
  <a href="article.php">  <img class="art_3_img" src="<?php echo $articles4->thumb_link; ?>" alt="">
    <div class="center3">
    <h2>Article_3</h2>
    <div class="content3">
      <p> Sed quis sem et ex dapibus volutpat vitae consequat eros. Aenean euismod odio nec orci rutrum vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec consequat orci et semper posuere. Duis posuere massa at feugiat tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel turpis quis ex pretium accumsan vitae dictum quam. Sed iaculis elit
       </p>
    </div>
    </div>
    </a>
</div></div>


</div>





<div class="calendar">

     <div class="col leftCol">
       <div class="content">
         <h1 class="date">Friday<span>September 12th</span></h1>
         <div class="notes">
           <p>
             <input type="text" value="" placeholder="Cool Dates in Music History!"/>
             <a href="#" title="Add note" class="addNote animate">+</a>
           </p>
           <ul class="noteList">
             <li><?php echo $dates->name; ?><a href="#" title="Remove note" class="removeNote animate">x</a></li>
             <p> Mariah Carey's All I Want For Christmas Is You song is released.</p>
             <li><?php echo $dates4->name; ?><a href="#" title="Remove note" class="removeNote animate">x</a></li>
             <p>On this day, Beyonce's sister attacked Jay-Z on the way to the Met Gala at The Standard hotel in New York.</p>
             <li><?php echo $dates5->name; ?><a href="#" title="Remove note" class="removeNote animate">x</a></li>
             <p>On this day, the Beatles set a recording industry record that may never be equaled.</p>
             <li><?php echo $dates7->name; ?><a href="#" title="Remove note" class="removeNote animate">x</a></li>
            <p> Led Zeppelin II was released in the UK. </p>
           </ul>
         </div>
       </div>
     </div>

     <div class="col rightCol">
       <div class="content">
         <h2 class="year">2022</h2>
         <ul class="months">
           <li><a href="#" title="Jan" data-value="1">Jan</a></li>
           <li><a href="#" title="Feb" data-value="2">Feb</a></li>
           <li><a href="#" title="Mar" data-value="3">Mar</a></li>
           <li><a href="#" title="Apr" data-value="4">Apr</a></li>
           <li><a href="#" title="May" data-value="5">May</a></li>
           <li><a href="#" title="Jun" data-value="6">Jun</a></li>
           <li><a href="#" title="Jul" data-value="7">Jul</a></li>
           <li><a href="#" title="Aug" data-value="8">Aug</a></li>
           <li><a href="#" title="Sep" data-value="9" class="selected">Sep</a></li>
           <li><a href="#" title="Oct" data-value="10">Oct</a></li>
           <li><a href="#" title="Nov" data-value="11">Nov</a></li>
           <li><a href="#" title="Dec" data-value="12">Dec</a></li>
         </ul>
         <div class="clearfix"></div>
         <ul class="weekday">
           <li><a href="#" title="Mon" data-value="1">Mon</a></li>
           <li><a href="#" title="Tue" data-value="2">Tue</a></li>
           <li><a href="#" title="Wed" data-value="3">Wed</a></li>
           <li><a href="#" title="Thu" data-value="4">Thu</a></li>
           <li><a href="#" title="Fri" data-value="5">Fri</a></li>
           <li><a href="#" title="Say" data-value="6">Sat</a></li>
           <li><a href="#" title="Sun" data-value="7">Sun</a></li>
         </ul>
         <div class="clearfix"></div>
         <ul class="days">
           <script>
             for( var _i = 1; _i <= 30; _i += 1 ){
               var _addClass = '';
               if( _i === 12 ){ _addClass = ' class="selected"'; }
               //else if( _i === 11 ){ _addClass = ' class="selected"'; }

               switch( _i ){
                 case 8:
                 case 10:
                 case 27:
                   _addClass = ' class="event"';
                 break;
               }

               document.write( '<li><a href="#" title="'+_i+'" data-value="'+_i+'"'+_addClass+'>'+_i+'</a></li>' );
             }
           </script>
         </ul>
         <div class="clearfix"></div>
       </div>
     </div>
     <div class="clearfix"></div>
   </div>



   <div class="con2">


   <div class="container">
     <div class="image_1">
       <img   src="<?php echo $articles5->thumb_link; ?>" alt=""/>
     </div>
     <div class="image_2" >
      <img  src="<?php echo $articles6->thumb_link; ?>" alt=""/>
     </div>
     <div class="image_3" >
       <img src="<?php echo $articles7->thumb_link; ?>" alt=""/>
     </div>
     <div class="image_4">
       <img src="<?php echo $articles->thumb_link; ?>" alt=""/>
     </div>
   </div>
</div>
  </body>
</html>
