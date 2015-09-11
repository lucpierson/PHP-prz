<?php
/**
 * Multiple file upload with progress bar php and jQuery
 * 
 * @author Resalat Haque
 * @link http://www.w3bees.com
 */

?>

<!doctype html>
<html lang="en">
<head>

      <title>My presentation on Openshift</title>
        <link rel="icon" href="http://people.redhat.com/icons/shadowman-16.png" type="image/png"/>
      <meta charset="utf-8" />
      <!-- styles -->

      <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
 
<body bgcolor="#FFFFFF" text="#000000" link="#000066" vlink="#333399" alink="#FF0000">

      <br/>
      <div align="center" class="container">
            <h2>Hybrid Platform as a Service by the open source leader</h2>


      <p>Red Hat® is the world's leading provider of open source solutions, using a community-powered approach to provide reliable and high-performing cloud, virtualization, storage, Linux&reg;, and middleware technologies. <br/><br/><br/><a href="https://www.redhat.com/about/">Learn More about Red Hat&reg;</a></p>
    </section>

      <h1>Openshift - your presentation hosted on PaaS</h1>
      <p></p>



      <!-- status message will be appear here -->

      
      <!-- multiple file upload form -->
      <form action="upload.php" method="post" enctype="multipart/form-data" class="pure-form">
            <input type="file" name="files[]" multiple="multiple" id="files">
            <input type="submit" value="Upload" class="pure-button pure-button-primary">
      </form>
      
      <!-- progress bar -->
      <div class="progress">
            <div class="bar"></div >
            <div class="percent">0%</div >
      </div>

   <!-- status message will be appear here -->
      <div align="center" class="status">

      
      </div> 
      <h2><a href="./uploads" data-label="presentation">Launch uploaded presentation</a></h2>


      </div><!-- end .container -->

      <!-- javascript dependencies -->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/jquery.form.min.js"></script>
      
      <!-- main script -->
      <script type="text/javascript" src="js/script.js"></script>

      <p></p><p></p>


   

</body>
</html>
