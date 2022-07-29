<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP SQL Injection</title>
</head>
<body>
   <form action="sql.php" method="post">
      <div>
         <label for="name">name</label>
         <input type="text" name="random" id="random">
         <input type="submit" value="Submit">
      </div>
   </form>
</body>
</html>