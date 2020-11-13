<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assignment 1</title>
    <style media="screen">
    h1{
      position: relative; left:70px; top:150px;
      color: black;
    }
    #form1{
      position: relative; left: 500px;
    }
    #form2{
      position: relative; left: 800px; top:-200px;
    }
    </style>
  </head>
  <body>
    <h1>Meriel Necole T. Manuel</h1>

    <form action="assign_one.php" id="form1" method="post">

    <h2>Calculator</h2>
  <label for="fnum">Input First Number:</label><br>
  <input type="text" name="fnum" value=""><br><br>

  <label for="snum">Input Second Number:</label><br>
  <input type="text" name="snum" value=""><br><br>

  <input type="submit" name="add" value="+">
  <input type="submit" name="sub" value="-">
  <input type="submit" name="mul" value="*">
  <input type="submit" name="div" value="/"> 
 



 
  <br>
      <!-- <p id="total" ></p> -->
		
 
    <?php
    //addition
      if(isset ($_POST['add']))
      {
        if (!empty($_POST['fnum']) && !empty($_POST['snum']))
        {
          $fnum= $_POST['fnum'];
          $snum= $_POST['snum'];
          $add= $fnum + $snum ;
          echo "<br>";
          echo $fnum . " + " . $snum . " = " . $add ;
          
        }
        elseif(empty($_POST['snum']) && empty($_POST['fnum']))
        {
          echo "There is no inputted number. Please input.";
        }
        elseif (empty($_POST['snum']))
        {
          echo "There is no inputted number. Please input.";
        }
        elseif (empty($_POST['fnum']))
        {
          echo "There is no inputted number. Please input.";
        }
      }
      //substraction
      if(isset($_POST['sub']))
      {
        if (!empty($_POST['fnum']) && !empty($_POST['snum']))
        {
          $fnum= $_POST['fnum'];
          $snum= $_POST['snum'];
          $add= $fnum - $snum;
          echo "<br>";
          echo $fnum . " - " . $snum . " = " . $add ;
        }
        elseif(empty($_POST['snum']) && empty($_POST['fnum']))
        {
          echo "There is no inputted number. Please input.";
        }
        elseif (empty($_POST['snum']))
        {
          echo "There is no inputted number. Please input.";
        }
        elseif (empty($_POST['fnum']))
        {
          echo "There is no inputted number. Please input.";
        }
      }
      //multiplication
      if(isset ($_POST['mul']))
      {
        if (!empty($_POST['fnum']) && !empty($_POST['snum']))
        {
          $fnum= $_POST['fnum'];
          $snum= $_POST['snum'];
          $add= $fnum * $snum;
          echo "<br>";
          echo $fnum . "*" . $snum . "=" . $add ;
        }
        elseif(empty($_POST['snum']) && empty($_POST['fnum']))
        {
          echo "There is no inputted number. Please input.";
        }
        elseif (empty($_POST['snum']))
        {
          echo "There is no inputted number. Please input.";
        }
        elseif (empty($_POST['fnum']))
        {
          echo "There is no inputted number. Please input.";
        }
      }
      //division
      if(isset ($_POST['div']))
      {
        if (!empty($_POST['fnum']) && !empty($_POST['snum']))
        {
          $fnum= $_POST['fnum'];
          $snum= $_POST['snum'];
          $add= $fnum / $snum;
          echo "<br>";
          echo $fnum . "/" . $snum . "=" . $add ;
        }
        elseif(empty($_POST['snum']) && empty($_POST['fnum']))
        {
          echo "There is no inputted number. Please input.";
        }
        elseif (empty($_POST['snum']))
        {
          echo "There is no inputted number. Please input.";
        }
        elseif (empty($_POST['fnum']))
        {
          echo "There is no inputted number. Please input.";
        }
      }
    ?>
       
          </form>
    <!--getting gcd-->


    <form action="#" id="form2" method="post">

    <h2>Finding GCD</h2>
  <label for="fnum2">Input First Integer:</label><br>
  <input type="text" name="fnum2" value=""><br><br>

  <label for="snum2">Input Second Integer:</label><br>
  <input type="text" name="snum2" value=""><br><br>
  <input type="submit" name="gcd" value="Submit"><br><br>


      

        <?php
        if(isset($_POST['gcd'])){
            $fnum2 = $_POST['fnum2'];
            $snum2 = $_POST['snum2'];
            $gcd = $_POST['gcd'];
            if($fnum2 > $snum2){
                $temp = $fnum2;
                $fnum2 = $snum2;
                $fnum2 = $temp;
            }
            for($i = 1; $i < ($fnum2+1); $i++ ){
                if ($fnum2%$i == 0 and $snum2%$i == 0)
                   $gcd = $i;
            }
            echo "The GCD of $fnum2 and $snum2 is $gcd";
        }
         ?>
    
    </form>
    </body>
    </html>
