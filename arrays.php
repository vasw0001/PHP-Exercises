<?php 
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/
$food = ["Mac and Cheese", "Kale", "Pizza", "Donuts"];
echo $food[0] . "<br>";
echo $food[1] . "<br>";
echo $food[2] . "<br>";
echo $food[3] . "<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
echo "<li>" . $food[0] . "</li>"; 
echo "<li>" . $food[1] . "</li>"; 
echo "<li>" . $food[2] . "</li>"; 
echo "<li>" . $food[3] . "</li>"; 
echo "</ul>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
    "Kale" => "salad" ,
    "Mac and Cheese" => "main course", 
    "Pizza" => "main course",
    "Donuts" => "dessert"
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
foreach($food_assoc as $x => $y) {
  echo  $x . " | " . $y;
  echo "<br>";
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = [
  "Pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "Donuts" => [
    "type" => "desert",
    "origin" => "Greece"
  ],
   "Kale" => [
    "type" => "salad",
    "origin" => "Canada"
  ],
     "Mac and Cheese" => [
    "type" => "main course",
    "origin" => "America"
  ]
];

    
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
foreach ($food_assoc as $k => $v)
{   
    echo $k ;
    foreach($v as $key => $value)
    {
        echo " |  $value" ;
    }
    echo "<br>";   
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table border=2 width=50%>";
echo "<tr> <th> FOOD </th> <th> TYPE </th> <th> ORIGIN </th> <tr>";

foreach ($food_assoc as $k => $v)
{ 
    echo "<tr>";
    echo "<th>" . $k . "</th>";

    foreach($v as $key => $value)
    {
        echo "<th>" . $value . "</th>";
        
    }
    echo "</tr>";
}
echo "</table>";


?>
