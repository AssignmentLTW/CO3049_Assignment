<?php

function component($productname, $productprice, $productimg, $productid, $detail){
    $element = "
    
    <div class=\"col-sm-6 col-xl-3\">
        <form action=\"laptop.php\" method=\"post\">
                <div class=\"box\">
                <a href=\"$detail\">
                    <div class=\"img-box\">
                    <img src=\"$productimg\" alt=\"Image1\">
                    </div>
                    <div class=\"detail-box row\">
                        <h6>$productname</h6>
                        <h6>
                            Giá:
                            <span class=\"price\">$productprice ₫</span>
                        </h6>
                    </div>
                    <div class=\"new\">
                        <span> Mới </span>
                    </div>
                </a>
                <button type=\"submit\" class=\"btn btn-success my-3\" name=\"add\"> Thêm vào giỏ hàng <i class=\"fa fa-cart-plus\"></i></button>
                <input type='hidden' name='product_id' value='$productid'>
            </div>
        </form>
    </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid, $detail){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                            <a href=\"$detail\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </a>
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: Teamups</small>
                                <h5 class=\"pt-2\">$productprice ₫</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Thêm vào yêu thích</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Xoá</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}