<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];
    $select_query="Select * from category where category_title='$category_title'";
    $result_select=mysqli_query($con, $select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('This category is present inside the database')</script>";
    }else{
    $inser_query="insert into category (category_title) 
    values ('$category_title')";
    $result=mysqli_query($con, $inser_query);
    if($result){
        echo "<script>alert('Категория была вставлена')</script>";
    }
}}
?>
<h2 class="text-center">Ввести категорию</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" name="cat_title" 
        placeholder="Вести категорию" aria-label="Categories" 
        aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat"
        value="Подтвердить">
        <!--<button class="bg-info p-2 my-3 border-0">Ввести категорию</button>-->
    </div>
</form>