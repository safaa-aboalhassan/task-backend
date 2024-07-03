<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="container">
       <form name="form" action="" method="GET">
           <label for="subject">Enter your age</label>
           <input type="text" name="age" id="subject">
           <button type="submit">Submit</button>
       </form>
   </div>

   <?php
   
   if ( $_GET['age'] >= 18) {
       echo "Yes, you can access this site.";
   } else {
       echo "No, you can't access this site.";
   }
   ?>
</body>
</html>
