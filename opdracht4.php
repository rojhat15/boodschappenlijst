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
        <title>Demo</title>
    </head>
    <body>
	        <form method="post">
            <input type="text" name="item" />
            <input type="submit" value="Voeg toe" />
        <?php if($items): ?>
            
                <?php foreach($items as $item): ?>
                    <li><?php echo $item; ?></li>
                <?php endforeach; ?>
            
        <?php endif; ?>

            <?php if($items): ?>
                <?php foreach($items as $item): ?>
                    <input type="hidden" name="items[]" value="<?php echo $item; ?>" />
                <?php endforeach; ?>
            <?php endif; ?>
        </form>
			<li><?php echo $boodschappen[0]; ?><br> <img src="https://dejuistekooktijd.nl/wp-content/uploads/2019/05/aardappelen.jpg" width="100" height="100" align="">
	<li><?php echo $boodschappen[1];	?> <br> <img src="https://di4emboswtgin.cloudfront.net/800x0/plants/2700.jpg" width="100" height="100" align="">
	<li><?php echo $boodschappen[2]; ?> <br> <img src="https://www.wievultuwbroodtrommel.nl/207-large_default/halfvolle-melk-1l.jpg" width="100" height="100">
	<li><?php echo $boodschappen[3]; ?> <br> <img src="https://supercostablanca.es/12132-thickbox_default/zuivel-meester-yoghurt-griekse-naturel-0-vet-1kg--yogur-griego.jpg" width="100" height="100">
	</li>
    </body>
</html>
