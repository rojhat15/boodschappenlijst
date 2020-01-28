<?php
$items = array();
if('POST' === $_SERVER['REQUEST_METHOD']) {
    if( ! empty($_POST['item'])) {
        $items[] = $_POST['item'];
    }
    if(isset($_POST['items']) && is_array($_POST['items'])) {
        foreach($_POST['items'] as $item) {
            $items[] = $item;
        }
    }
}
$boodschappen = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];


?>
<html>
    <head>

    </head>
    <body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
	window.onload=function() {
  var button = document.getElementById("submitButton");
  button.onclick = addItem;
}   

function addItem() {
  var textInput = document.getElementById("item");  //getting text input
  var text = textInput.value;   //getting value of text input element
  var ul = document.getElementById("ul");  //getting element <ul> to add element to
  var li = document.createElement("li");  //creating li element to add
  li.innerHTML = text;    //inserting text into newly created <li> element
  li.onclick = function() {
    this.parentNode.removeChild(this);
    // or this.remove(); if supported
  }
  if (ul.childElementCount == 0) {  //using if/else statement to add items to top of list
    ul.appendChild(li); // will add if count of ul children is 0 otherwise add before first item
  }
  else {
    ul.insertBefore(li, ul.firstChild);
  }
}

   function show(){
      document.getElementById('close').style.display = ''; //shows the X button when text is entered;
   }

   function clean(){
      document.getElementById('close').style.display = 'none'; //hides the X button
      document.getElementById('text').value = ""; //clears the field
   }

$(document).ready(function(){
  $("li").click(function(){
    $("li").hide();
  });
});
</script>

	    <form>
        
          <input id="item" type="text" size="20">
         <input id="submitButton" type="button" value="Voeg toe!">
     </form>
     <ul id="ul">
     </ul>

		
	<ul id="ul">
		<li><?php echo $boodschappen[0]; ?><br> <img src="https://dejuistekooktijd.nl/wp-content/uploads/2019/05/aardappelen.jpg" width="100" height="100" align=""></li>
		<li><?php echo $boodschappen[1];	?> <br> <img src="https://di4emboswtgin.cloudfront.net/800x0/plants/2700.jpg" width="100" height="100" align=""></li>
		<li><?php echo $boodschappen[2]; ?> <br> <img src="https://www.wievultuwbroodtrommel.nl/207-large_default/halfvolle-melk-1l.jpg" width="100" height="100"></li>
		<li><?php echo $boodschappen[3]; ?> <br> <img src="https://supercostablanca.es/12132-thickbox_default/zuivel-meester-yoghurt-griekse-naturel-0-vet-1kg--yogur-griego.jpg" width="100" height="100"></li>
	</ul>
	

    </body>
</html>
