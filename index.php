<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

<?php 
        echo '<img class="head" src="headerImage.jpg" alt="">';

        echo '<div class="title">';
        echo '<div class="text">';
        echo "<h2>Who is Elon Musk?</h2>";

        echo "<p>Elon Musk is a South African-born American entrepreneur
        and businessman who founded X.com in 1999 (which later became 
        PayPal), SpaceX in 2002 and Tesla Motors in 2003. Musk became 
        a multimillionaire in his late 20s when he sold his start-up 
        company, Zip2, to a division of Compaq Computers. 
        Musk made headlines in May 2012, when SpaceX launched a rocket
        that would send the first commercial vehicle to the International
        Space Station. He bolstered his portfolio with the purchase of 
        SolarCity in 2016, and cemented his standing as a leader of 
        industry by taking on an advisory role in the early days of 
        President Donald Trump's administration.</p>";
        echo '</div>';
        echo '<div class="elon">';
        echo '<img src="musk.png" alt="">';
        echo '</div>';
        echo '</div>';
        echo '<hr>';

        ?>
        <br>
        <div class="selection">
        <form action="index.php" method="post">

            <p><span>Select one to get the Information of</span></p>

        Tesla S: <input type="checkbox" name="fruits" class="pro" value="Tesla, Inc. is a US company that manufactures and sells electric cars, electricity storage and photovoltaic systems. The company's goal is to accelerate the transition to sustainable energy. The company name is based on the physicist and inventor Nikola Tesla."><br>

        Paypal: <input type="checkbox" name="fruits" class="pro" value="PayPal is a listed operator of an online payment service that can be used to settle medium and small amounts, for example when buying and selling online."><br>

        space X: <input type="checkbox" name="fruits" class="pro" value="SpaceX is a privately held US aerospace and telecommunications company. The company was founded with the aim of developing technologies that would enable humanity to colonize Mars and spread life to other planets."><br>
        
        <input class="submit" type="submit">
        </form>
        </div>  
        <?php
        
        $fruits = $_POST["fruits"];
        echo '<div class="pro">';
        echo $fruits; //shows which one you select second "but it doesnt"
        echo '</div>'
        ?>
        <?php include "footer.html" ?>  

</body>
</html>