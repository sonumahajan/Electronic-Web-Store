<?php
function viewfun($proid,$proname,$proprice,$rate,$mrp,$proimg,$li1,$li2,$li3,$li4,$li5){
    $proprice = number_format($proprice);
    $mrp = number_format($mrp);
    $result="<div class=\"img\"><img src=\"$proimg\">
    </div>
    <div class=\"content\">
    <h1>$proname</h1>
    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star\"></span>
                    <span class=\"fa fa-star\"></span><span>($rate)</span>
    <h3 class=\"p\"><b>&#8377;$proprice  </b><strike>&#8377;$mrp</strike></h3>
    <br>
    <h4>Highlights</h4>
    <ul>
    <li>$li1</li><br>
    <li>$li2</li><br>
    <li>$li3</li><br>
    <li>$li4</li><br>
    <li>$li5</li>
    </ul><br>
    <form action=\"insertcart.php\" method=\"post\">
    <input type=\"hidden\" name=\"hi_id\" value=\"$proid\">
    <button type=\"submit\" name=\"addtocart\">Add to Cart <i class=\"fa fa-shopping-cart\"></i></button>
    </form>
    </div>";
    echo $result;
}

function viewfun1($proid,$proname,$proprice,$rate,$mrp,$proimg,$li1,$li2,$li3,$li4,$li5){
    $proprice = number_format($proprice);
    $mrp = number_format($mrp);
    $result="<div class=\"img1\"><img src=\"$proimg\">
    </div>
    <div class=\"content\">
    <h1>$proname</h1>
    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star\"></span>
                    <span class=\"fa fa-star\"></span><span>($rate)</span>
    <h3 class=\"p\"><b>&#8377;$proprice  </b><strike>&#8377;$mrp</strike></h3>
    <h4>Highlights</h4>
    <ul>
    <li>$li1</li><br>
    <li>$li2</li><br>
    <li>$li3</li><br>
    <li>$li4</li><br>
    <li>$li5</li>
    </ul><br>
    <form action=\"insertcart.php\" method=\"post\">
    <input type=\"hidden\" name=\"hi_id\" value=\"$proid\">
    <button type=\"submit\" name=\"addtocart\">Add to Cart <i class=\"fa fa-shopping-cart\"></i></button>
    </form>
    </div>";
    echo $result;
}
function viewfun2($proid,$proname,$proprice,$rate,$mrp,$proimg,$li1,$li2,$li3,$li4,$li5){
    $proprice = number_format($proprice);
    $mrp = number_format($mrp);
    $result="<div class=\"img2\"><img src=\"$proimg\">
    </div>
    <div class=\"content\">
    <h1>$proname</h1>
    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star\"></span>
                    <span class=\"fa fa-star\"></span><span>($rate)</span>
    <h3 class=\"p\"><b>&#8377;$proprice  </b><strike>&#8377;$mrp</strike></h3>
    <h4>Highlights</h4>
    <ul>
    <li>$li1</li><br>
    <li>$li2</li><br>
    <li>$li3</li><br>
    <li>$li4</li><br>
    <li>$li5</li>
    </ul><br>
    <form action=\"insertcart.php\" method=\"post\">
    <input type=\"hidden\" name=\"hi_id\" value=\"$proid\">
    <button type=\"submit\" name=\"addtocart\">Add to Cart <i class=\"fa fa-shopping-cart\"></i></button>
    </form>
    </div>";
    echo $result;
}
function viewfun3($proid,$proname,$proprice,$rate,$mrp,$proimg,$li1,$li2,$li3,$li4,$li5){
    $proprice = number_format($proprice);
    $mrp = number_format($mrp);
    $result="<div class=\"img3\"><img src=\"$proimg\">
    </div>
    <div class=\"content\">
    <h1>$proname</h1>
    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star checked\"></span>
                    <span class=\"fa fa-star\"></span>
                    <span class=\"fa fa-star\"></span><span>($rate)</span>
    <h3 class=\"p\"><b>&#8377;$proprice  </b><strike>&#8377;$mrp</strike></h3>
    <h4>Highlights</h4>
    <ul>
    <li>$li1</li><br>
    <li>$li2</li><br>
    <li>$li3</li><br>
    <li>$li4</li><br>
    <li>$li5</li>
    </ul><br>
    <form action=\"insertcart.php\" method=\"post\">
    <input type=\"hidden\" name=\"hi_id\" value=\"$proid\">
    <button type=\"submit\" name=\"addtocart\">Add to Cart <i class=\"fa fa-shopping-cart\"></i></button>
    </form>
    </div>";
    echo $result;
}
?>