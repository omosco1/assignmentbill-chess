<!DOCTYPE html>
<html> 
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Oluwafemi ChessBoard</title>
  </head>
  <body>
  <div style = "position:relative; left:300px; top:5px;">
  <h2><i>My ChessBoard</i></h2>
   <table width="270px" cellspacing="1px" cellpadding="1px" border="1px">
   <!--Dimension for the cell 270px wide (8 columns x 60px) -->
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $summation=$row+$col;
          if($summation%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#F8F8FF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
          </div>
  </table>
  </body>
  </html>

