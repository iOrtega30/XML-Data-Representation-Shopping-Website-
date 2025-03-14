
<!DOCTYPE html>
<html>

<body>

<?php 
    
    //get the selected animal 
    $merchType = $_GET["merchKey"];

    
    $merchTypeArray =  array(
        array("Shoes","Brown","Alfani - Men Andrew Plain Toe Derbys – was $56   Now $36","8 – 15","40","36","black_shoe.png"),
        array("Shoes","Black","Alfani – Women Gayle Loafers – was $80 Now $48","9 – 14","50","48","brown_shoe.png"),
        array("Dress","Blue","Petal and Pup - Women Flourish Maxi Dress – was $98 Now $89.00","4 – 12","15","89","blue_dress.png"),
        array("Dress","Green","Phoenix Embroidery Modern Cheongsam Chinese Dress with Pleated Skirt – was $95 Now $80.00","3 – 16","25","80","green_dress.png"),
        array("Shirt","White","Club Room Men's 100% Linen Shirt – was $70   Now $42","XL","10","42","white_xl_shirt.png"),
        array("Shirt","White","Levi's – Men Classic 1 Pocket Regular-Fit Long Sleeve Shirt – was $65   Now $39","L","38","39","white_l_shirt.png"),
        array("Shirt","White","Club Room - Men Solid Stretch Oxford Cotton Shirt – was $55   Now $33.00","S","30","33","white_s_shirt.png"),
    );

    $totalCost = 0;
    $savings = 0;

    for ($i=0; $i < count ($merchTypeArray);$i++)
    {
        if(strcmp($merchTypeArray[$i][6],$merchType) == 0) 
        {
            $merch = $merchTypeArray[$i][0];
            $color = $merchTypeArray[$i][1];
            $description = $merchTypeArray[$i][2];
            $numRange = $merchTypeArray[$i][3];
            $quantity = $merchTypeArray[$i][4];
            $price = $merchTypeArray[$i][5];
            $photo = $merchTypeArray[$i][6];

            print("<h3>Image</h3> </br> <img src='$photo' width='150' />");
            print("<h3>Description:</h3>");
            print("$description</br>");
            print("<p></p>");
          
            //embed the showTotal function with the correct parameter directly in the HTML
            echo "<button id='showTotal' onclick=\"showTotal($price)\">Show Total </button>";
            
          
        }
        
    }

?>


    <script>
      
</script>



  <!-- SHOW TOTAL BUTTTON -->


  <!-- CONTINUE SHOP BUTTON -->
  <button onclick="window.location.reload()">Continue Shop</button>



</body>
</html>