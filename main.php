<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjb5tO48K7uAhWFtYsKHQfxBdYQwqsBMAB6BAgKEAM&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DO090SlcSgqQ&usg=AOvVaw3INz5Tvg4kfGBN2uVflllK"><?php  echo $hello  ?></a> </h1>

            <div class="data">

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
					<p> Чуток покурили CSS </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                   <?php  include 'knowledge.inc.php'; ?>
                     <p><?php   echo $a, ' ', $b, ' ', $c; ?>  </p>
                                      
                    <p><?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
						echo '10+20=';
                        echo $c;
                    ?>   </p>              
                   <p>  <?php
                       echo $d;
                    ?> </p>

            </div>

            <div class="article">
                
					<p class="text">Какойто текст</p>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
