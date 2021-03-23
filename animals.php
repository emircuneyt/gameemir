<?php
$num_products_on_each_page = 25;


$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;



$stmt = $pdo->prepare('SELECT * FROM animals ORDER BY date_added DESC LIMIT ?,?');


$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of products
$total_products = $pdo->query('SELECT * FROM animals')->rowCount();
?>


<div class="products content-wrapper">
    <h1>jogo</h1>
    
    <style>
body {
  margin: 40px;
}

.box {
  background-color: lightgrey;
  color: rgb(0, 0, 0);
  border-radius: 5px;
  padding: 20px;
  font-size: 120%;
  text-align: center;
  }

.wrapper {
  width: 600px;
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(5, 150px);
  grid-template-rows: repeat(5, 150px);
  grid-auto-flow: column;
}
.selected_area
{

  margin-left: 30px;   
  width: 600px;
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(5, 150px);
  grid-auto-flow: column;

}
.selected_box
{

  background-color: lightgrey;
  color: rgb(0, 0, 0);
  border-radius: 5px;
  padding: 20px;
  font-size: 120%;
  text-align: center; 

}


.animal_draw
{
  background-color: orange;
  color: rgb(0, 0, 0);
  border-radius: 5px;
  padding: 20px;
  font-size: 120%;
  text-align: center; 

}

.draw_area
{
  margin-left: 30px;   
  width: 150px;
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(5, 150px);
  grid-auto-flow: column;

}

.button {
  background-color: #4CAF50; /* Green */
  border-radius: 4px;  
  color: white;
  border: 2px solid black;
  display:flex;
  height:90px;
  width:90px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


.button_area
{
    margin-top: 80px;
    margin-left: 80px;
    display: grid;
}


</style>
    <div class="products-wrapper">
    <div class="wrapper">
  <div class="box box1">
  <img src="imgs/1.svg" width="100" height="100">
  </div>
  <div class="box box1">
  <img src="imgs/2.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/3.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/4.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/5.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/6.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/7.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/8.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/9.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/10.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/11.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/12.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/13.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/14.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/15.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/16.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/17.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/18.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/19.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/20.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/21.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/22.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/23.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/24.svg" width="100" height="100">

  </div>
  <div class="box box1">
  <img src="imgs/25.svg" width="100" height="100">

  </div>

  <div class="selected_area">

  <div class="selected_box"> choosen animal 1  </div>

  <div class="selected_box"> choosen animal 2 </div>

  <div class="selected_box"> choosen animal 3 </div>

  <div class="selected_box"> choosen animal 4 </div>

  <div class="selected_box"> choosen animal 5 </div>
</div>
<div class="draw_area">

<div class="animal_draw"> first draw  </div>

<div class="animal_draw"> second draw </div>

<div class="animal_draw"> third draw </div>

<div class="animal_draw"> fourth  draw </div>

<div class="animal_draw"> fifth draw </div>
</div>


<div class="button_area">
<button class="button" type="button" onclick="alert('Hello world!')">Lock bets</button>
<br>
<button class="button" type="button" onclick="alert('Hello world!')">Play</button>
</div>




