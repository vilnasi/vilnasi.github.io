<?php
include('./includes/connect.php');
function getproducts(){
    global $con;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    
    $select_query="Select * from products order
    by rand() LIMIT 0,9";
    $result_query=mysqli_query($con,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo "<div class='col-md-4'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1'
            class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Добавить в корзину</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>Посмотреть больше</a>
            </div>
        </div>
    </div>";
} 
}
}
}
function get_all_products(){
    global $con;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    
    $select_query="Select * from products order
    by rand()";
    $result_query=mysqli_query($con,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo "<div class='col-md-4'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1'
            class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Добавить в корзину</a>                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>Посмотреть больше</a>            </div>
        </div>
    </div>";
} 
}
}
}
function get_uniquecate(){
    global $con;
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
    $select_query="Select * from products where category_id=$category_id";
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if ($num_of_rows==0){
        echo "<h2 class='text-center text-danger'>нет в наличии в этой категории</h2>";
    }
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo "<div class='col-md-4'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1'
            class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Добавить в корзину</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>Посмотреть больше</a>            </div>
        </div>
    </div>";
} 
}
}
function get_unique_brands(){
    global $con;
    if(isset($_GET['brand'])){
        $brand_id=$_GET['brand'];
    $select_query="Select * from products where brand_id=$brand_id";
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if ($num_of_rows==0){
        echo "<h2 class='text-center text-danger'>нету данных брендов</h2>";
    }
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo "<div class='col-md-4'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1'
            class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Добавить в корзину</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>Посмотреть больше</a>            </div>
        </div>
    </div>";
} 
}
}
function getbrands(){
    global $con;
    $select_brands="Select * from brands";
        $result_brands=mysqli_query($con, $select_brands);
        while($row_data=mysqli_fetch_assoc($result_brands)){
            $brand_title=$row_data['brand_title'];
            $brand_id=$row_data['brand_id'];
            echo "<li class='nav-item'>
            <a href='index.php?brand=$brand_id' class='nav-link text-ligth'>$brand_title</a>
            </li>";
}}
function getcategories(){
    global $con;
    $select_category="Select * from category";
$result_category=mysqli_query($con, $select_category);
while($row_data=mysqli_fetch_assoc($result_category)){
    $category_title=$row_data['category_title'];
    $category_id=$row_data['category_id'];
    echo "<li class='nav-item'>
    <a href='index.php?category=$category_id' class='nav-link text-ligth'>$category_title</a>
</li>";
}}

function search_product(){
    global $con;
    if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
    $search_query="Select * from products where product_keywords like '%$search_data_value%'";
    $result_query=mysqli_query($con,$search_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if ($num_of_rows==0){
        echo "<h2 class='text-center text-danger'>нет в наличии</h2>";
    }
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo "<div class='col-md-4'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1'
            class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Добавить в корзину</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>Посмотреть больше</a>            </div>
        </div>
    </div>";
} 
}}
function view_details(){
    global $con;
    if(isset($_GET['product_id'])){
        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
                $product_id=$_GET['product_id'];
    
    $select_query="Select * from products where product_id=$product_id";
    $result_query=mysqli_query($con,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_image2=$row['product_image2'];
        $product_image3=$row['product_image3'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo "<div class='col-md-4'>
        <div class='card'>
        <img src='./admin_area/product_images/$product_image1'
            class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Добавить в корзину</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>Посмотреть больше</a>
            </div>
        </div>
    </div>
    <div class='col-md-8'>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <h4 class='text-center text-info mb-5'>
                                    сопутствующие товары
                                    </h4>
                                </div>
                                <div class='col-md-6'>
                                <img src='./admin_area/product_images/$product_image2' class='card-img-top'
                                alt='$product_title'>
                                </div>
                                <div class='col-md-6'>
                                <img src='./admin_area/product_images/$product_image3 class='card-img-top'
                                alt='$product_title'>
                                </div>
                            </div>
                        </div>";
} 
}
}
}}

function getIPAddress(){  
    //whether ip is from the share internet  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
//whether ip is from the remote address  
    else{  
            $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  

function cart(){
    if(isset($_GET['add_to_cart'])){
        global $con;
        $get_ip_add = getIP;
    }
}






?>