<!DOCTYPE html>
<hmtl>
    <html lang="th">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <head>
        <style>
          body{
            text-align: center;
    }
    </style>
    </head>

        <h2 style="background-color: #212f3c; padding:10px; color: #FFFFFF;">Register</h2>

    <form action="/test_index.php">
        Username :
        <input type="text" name="username" placeholder="Username">
        <br><br> 
        Password :
        <input type="text" name="password" placeholder="Password"><br><br>
        Email :
        <input type="text" name="email" placeholder="xxxx@yyyy.com"><br><br>
        Age : 
        <input type="text" name="age" placeholder="Age"><br><br>
        Type : 
        <select name="type" >
             <option value="10">10KM.</option>
             <option value="15">15KM.</option>
             <option value="20">20KM.</option>
             <option value="30">30KM</option>
        </select> 
              <br><br>
        Size :
        <select name="size" >
             <option value="S">S</option>
             <option value="M">M</option>
             <option value="L">L</option>
             <option value="XL">XL</option>
        </select> 
        <br><br>

              <input type="radio" name="gender" value="male" checked> Male
        <input type="radio" name="gender" value="female"> Female
        <br>     <br>
        <input style="height:40px ; width : 100% ; font-size:20px; background-color: #212f3c; color: #FFFFFF;" type="submit" value="Submit">
       
        
    </form>
</body>
</hmtl>