<?php


function component($bookname,$authorname,$price,$bookimage,$productid){
	$element="
	<div class=\" col-md-3 col-sm-6 my-3 my-md-0 py-5\">
	  <form action=\"index.php\" method=\"post\" >
	    <div class=\"card carddiv\">
                <a href=\"details1.php?pid=$productid\"><img src=\"$bookimage \" class=\"card-img-top  imgs\" /></a>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$bookname</h5>
                    <p class=\"card-text\">$price Rs<br /> By:$authorname </p>
                     <button type=\"submit\" class=\"btn btn1 btn-primary\" name=\"add\">Add to Cart <i class=\"fa fa-shopping-cart\"></i></button>
					<input type='hidden' name='product_id' value='$productid'>
                </div>
            </div>
	  </form>

  </div>
  
 
	
	
	
	
	
	";
	
	echo $element;
	
}





function cartElement($bookimage, $bookname, $price,$authorname, $id){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$id\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$bookimage alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2 mt-3\">$bookname</h5>
                                
                                <h5 class=\"pt-2 mt-4\">$price Rs</h5>
								 <h5 class=\"pt-2 mt-4\">$authorname Rs</h5>
                               
                                <button type=\"submit\" class=\"btn  rebtn btn-danger mx-2 mt-3\" name=\"remove\">Remove</button>
								
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                   
                                  <button type=\"submit\"name=\"minus\"  class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-minus\"></i></button>
                                    <input type=\"number\" value=\"1\" class=\"form-control w-25 d-inline\" min=\"1\" max=\"5\">
                                     <button type=\"submit\" name=\"plus\" class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-plus\"></i></button>  
                       
									
									
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}



function productelement($bookname, $authorname, $price, $bookimage,$productid,$description){
    $element = "
    
    <form  method=\"post\"class=\"cart-items\">
        <div class=\"adiv\">
        <div class=\" bdiv \">
            <img src=\"$bookimage \" width=\"100%\" class=\"imgs\" />
        </div>
        <div class=\" cdiv col-md-2\">
            
            <h5>$bookname</h5>
            <p>$price Rs<br /> By: $authorname </p>
            <button type=\"submit\" class=\"btn btn1 btn-primary\" name=\"add\">Add to Cart <i class=\"fa fa-shopping-cart\"></i></button>
			<input type='hidden' name='product_id' value='$productid'>
        </div>
        <div class= \"col-md-6\" >
            <h3>Description</h3>
            <p>$description </p>
        </div>
        
        </div>
                   



        </form>
    
    ";
    echo  $element;
}

?>

