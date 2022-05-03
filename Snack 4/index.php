<?php

/*
Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/

$paragraph = 'Maecenas fringilla ipsum sem, venenatis accumsan augue feugiat sed. Integer vitae metus tellus.
Proin sit amet condimentum erat, in sagittis dui. Fusce maximus, ligula et maximus vestibulum, ex velit ullamcorper urna, nec mollis enim mauris at ligula. 
Cras nec auctor tortor. Nullam cursus ac neque id fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus.
Nam laoreet urna ligula. Nulla id lectus semper, auctor est at, luctus mauris. Cras quis metus non risus convallis dignissim ut a tellus. 
Fusce sed felis feugiat, maximus nunc in, elementum odio. Vestibulum ac ultricies dui. Cras sapien dolor, convallis quis magna imperdiet, dignissim luctus velit.';


$myArray = explode('.', $paragraph);

foreach($myArray as $key => $myArray) {
    if(!empty($myArray)) {
        echo 'paragraph n°' . $key . ' : ' . $myArray . '<br/>';
    }
}
?>