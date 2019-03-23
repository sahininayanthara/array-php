<?php

$myarray = array("Amali", "Kasuni", "Nishan", "Chamu");

echo $myarray[0] . "<br>";
?>
<h3>Before</h3>
<pre>
<?php print_r($myarray); ?>
</pre>

<?php $myarray[4] = "Nethmi"; ?>
<?php $myarray[ ] = "Tharu"; ?>
<?php $myarray[2] = "Dilini"; ?>

<h3>After</h3>
<pre>
<?php print_r($myarray); ?>
</pre>



<?php

$myarray2 = array(20, 40, 60, 80, "Amali", "Kasuni", array("Mango", "Orange", "Apple", "Grapes"), "Nishan", "Chamu");
?>

<h3>Before</h3>
<pre>
<?php print_r($myarray2); ?>
</pre>

<?php $myarray2[6][4] = "Rmbutan"; ?>
<?php $myarray2[ 6][] = "Banana"; ?>
<?php $myarray2[6][0] = "Guava" ; ?>

<h3>After</h3>
<pre>
<?php print_r($myarray2); ?>
</pre>


<hr>
<?php
$number = array(52, 36, 47, 82, 61, 20, 19, 35, 12);
?>

<pre>
<?php print_r($number); ?>
</pre>


<h3>How to find the Maximum Value</h3>
Maximum value: <?php echo max($number) . "<br>";?>


<h3>How to find the Minimum Value</h3>
Minimum value: <?php echo min($number) . "<br>";?>

<h3>How to find the count of the array</h3>
Count: <?php echo count($number) . "<br>";?>

<h3>Ascending order</h3>
Sort: 
<?php sort($number) ;?>
<pre>
<?php print_r($number) ;?>
</pre>

<h3>Discending order</h3>
Reverse Sort: 
<?php rsort($number) ;?>
<pre>
<?php print_r($number) ;?>
</pre>

<h3>Implode</h3>
Implode: <?php    
$string = implode(" | ", $number);
echo $string;
  ?>

<h3>Explode</h3>
Explode: <?php    
$new = explode(" | ", $string);
  ?>
<pre>
<?php  print_r ($new); ?>
</pre>

<h3>Search a number</h3>
search number 36: <?php echo  in_array(36, $number) . "<br>"; ?>

search number 26: <?php echo  in_array(26, $number) ; ?>
