 <?php
  
  
// if(isset($_GET['num1'])){
//     $num1 = $_GET['num1'];
//     $sum = 10 + $num1;
//     echo $sum;
// }

/**if(isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $sum = 10 + $num1;
    echo $sum;
}
echo "<pre>";
print_r($_POST);
echo "<pre>";
**/

/**Array POST and get are global variables sent in associative arrays
 * output
*(
 *   [num1] => 55
*)
*/

/**session_start();
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $_SESSION['usernamee'] = $_POST['username'];  //session used to send variables from one page to another
    $_SESSION['passwordd'] = $_POST['password'];
    header("location.page2.php"); // go to page 2 when done
}**/





session_start();



$products = [
 [
        "id" => 1,
        "title"=> "Prod1",
        "price" => "100$"
  ],
   [
    "id" => 2,
    "title"=> "Prod2",
    "price" => "200$"
  ],
   [
    "id" => 3,
    "title"=> "Prod3",
    "price" => "600$"
  ]
];



if(isset($_POST['IDD'])){

$id = $_POST['IDD'];

          $_SESSION['id'] = $products[$id]['id'];
          $_SESSION['titlee'] = $products[$id]['title'];
          $_SESSION['pricee'] = $products[$id]['price'];

echo $id;

// for($index=0 ; $index < count($products); $index++){
//     $prod = $products[$index];
    
//     if($id == $prod['id']) { 
//       echo "This is Button1 that is selected"."<br>"; 
//           $_SESSION['id'] = $prod['id'];
//           $_SESSION['titlee'] = $prod['title'];
//           $_SESSION['pricee'] = $prod['price'];
//       }
//   }

}






//   for($i=0; $i<count($prod); $i++){
//     echo $prod[1]."----"."<br>";
//   }

  


//  $_SESSION['cart'] = array($products);

// echo "<pre>";
// print_r($_SESSION['cart'][0][1]['title']);
// echo "<pre>";


 ?>




 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

 </head>
 <body>
    <!-- Get will show you num1=value in url -->
    <!-- <form action="index.php" method="GET">
        <p> GET request</p>
        <input type="text" name="num1">
        <button type="submit">Calculate</button>
    </form> -->

    <!-- POST will not show you num1=value in url - SECURE (username/pass)-->
    <!-- <form action="index.php" method="POST">
        <p> POST request</p>
        <input type="text" name="num1">
        <button type="submit">Calculate</button>
    </form> -->

    <!-- <form action="index.php" method="POST">
        <p> POST request</p>
        <input type="text" name="username" placeholder="enter username">
        <input type="password" name="password" placeholder="enter passwrod">
        <button type="submit">Submit</button>
    </form> -->

<div class="container">    
 <?php foreach($products as $product): ?>  

   <form action="index.php" method="POST">
    <div class="card" style="width: 18rem;" >
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title" ><?= $product['title'] ?></h5>
    <p class="card-text" ><?= $product['price'] ?></p> 
    <a href="checkout.php/productid=<?= $product['id'] ?>" type="submit" class="btn btn-primary" id="<?= $product['id'] ?>"  name="IDD" value="<?= $product['id'] ?>" >checkout</a>
    <!-- <button  type="submit" class="btn btn-primary" id="<?= $product['id'] ?>"  name="IDD" value="<?= $product['id'] ?>" >checkout</a> -->

  </div>
  </form>
</div>

<?php endforeach; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

 </body>
 </html>