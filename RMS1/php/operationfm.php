<?php

require_once("fmdb.php");
require_once("component.php");

$con = Createdb();


if(isset($_POST['add'])){
   createData();
}

if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}

if(isset($_POST['deleteall'])){
    deleteAll();

}



function createData(){
    $menuitem = textboxValue("menu_item");
    $category  = textboxValue("category");
    $price = textboxValue("price");
    $status = textboxValue("status");
   
    if($menuitem && $category && $price && $status){

        $sql ="INSERT INTO foodmenu(menu_item,category,price,status)
               VALUES('$menuitem','$category','$price','$status')";

        if(mysqli_query($GLOBALS['con'],$sql)){
            TextNode("success","Record Successfully Inserted...!");
        }
        else{
            echo "Error";
        }

    }
    else{
        TextNode("error","Provide Data in the Textbox"); 

    }

}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }
    else{
        return $textbox;
    }
}



//messages
function TextNode($classname,$msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}

//get data from mysql database
function getData(){
    $sql = "SELECT * FROM foodmenu";

    $result = mysqli_query($GLOBALS['con'],$sql);

    if(mysqli_num_rows($result) > 0){
      return $result;

        }
    }


    function UpdateData(){
        $id = textboxValue("id");
        $menuitem = textboxValue("menu_item");
        $category = textboxValue("category");
        $price = textboxValue("price");
        $status = textboxValue("status");
        
    
        if( $menuitem && $category && $price && $status){
            $sql = "
            UPDATE foodmenu SET menu_item='$menuitem',category='$category',price='$price',status='$status' WHERE id='$id'
            ";
    
            if(mysqli_query($GLOBALS['con'],$sql)){
                TextNode("success","Data Successfully Updated");
            }
            else{
                TextNode("error","Unable to Update Data");
    
    
            }
    
        }
        else{
            TextNode("error","Select Data Using Edit Icon");
    
        }
    
    }

    function deleteRecord(){
        $id = (int)textboxValue("id");
    
        $sql = "DELETE FROM foodmenu WHERE id=$id";
    
        if(mysqli_query($GLOBALS['con'],$sql)){
            TextNode("success","Record Deleted Successfully...!");
        }
        else{
            TextNode("error","Unable to Delete Record...!");
        }
    
    }


    function deleteBtn(){
        $result = getData();
        $i= 0;
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $i++;
                if($i > 3){
                    buttonElement("btn-deleteall","btn btn-danger","<i class='fas fa-trash'></i> Delete All","deleteall","");
                    return;
                }
            }
        }
    }
    
    function deleteAll(){
        $sql = "DROP TABLE foodmenu";
    
    
        if(mysqli_query($GLOBALS['con'],$sql)){
            TextNode("success","All Record deleted Successfully...!");
            Createdb();
    
        }
        else{
            TextNode("error","Something Went Wrong Record cannot be deleted...!");
        }
    }
    
    function setID(){
        $getid = getData();
        $id = 0;
        if($getid){
            while($row = mysqli_fetch_assoc($getid)){
                $id = $row['id'];
            }
        }
        return($id+1);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<style>
.success{
    background-color: lightgreen;
    padding: 1em;
}

.error{
    background-color: tomato;
    padding: 1em;
}

</style>
    
</body>
</html>
