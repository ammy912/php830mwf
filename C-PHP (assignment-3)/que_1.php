<?php

if(isset($_POST["sub"]))
{
    $s1=$_POST["s1"];
    $s2=$_POST["s2"];
    $s3=$_POST["s3"];
    $s4=$_POST["s4"];
    $s5=$_POST["s5"];

    $total = $s1 + $s2 + $s3 + $s4 + $s5;
    echo "<h1 align='center'> The Total marks = $total</h1>";

    if($s1>=33 && $s2>=33 && $s3>=33 && $s4>=33 && $s5>=33)
    {
        $pr = $total / 5.0;
        echo "<h1 align='center'> The Percentage = $pr % </h1>";

        {
            if($pr>=90)
            {
                echo "<h1 align='center'>Grade A</h1>";
            }
            else if($pr>=80 && $pr<90)
            {
                echo "<h1 align='center'>Grade B</h1>";
            }
            else if($pr>=70 && $pr<80)
            {
                echo "<h1 align='center'>Grade C</h1>";
            }
            else if($pr>=60 && $pr<70)
            {
                echo "<h1 align='center'>Grade D</h1>";
            }   
            else if($pr>=35 && $pr<60)
            {
                echo "<h1 align='center'>Grade E</h1>";
            }
            else
            {
                echo "<h1 align='center'>You Are Fail</h1>";
            }
        }
    }
    else
    {
        echo "<h1 align='center'>You Are Fail</h1>";
    }

}
?>



<html>
    <body>
        <form method="post">
            Enter the marks of physics : <input type="text" name="s1" placeholder="Enter marks of physics *">
            <br><br>
            enter the mark of chemistry : <input type="text" name="s2" placeholder="Enter marks of chemistry *">
        </form>

    </body>

</html>            