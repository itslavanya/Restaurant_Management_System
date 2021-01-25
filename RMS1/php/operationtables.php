<?php
require_once("tdb.php");

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
     $tableno = textboxValue("table_no");
    $id = textboxValue("id");
    $status = textboxValue("status");
   
    if($tableno && $id  && $status){

        $sql ="INSERT INTO tables (id,status)
               VALUES('$id','$status')";

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
    $sql = "SELECT * FROM tables";

    $result = mysqli_query($GLOBALS['con'],$sql);

    if(mysqli_num_rows($result) > 0){
      return $result;

        }
    }


    function UpdateData(){
        $id = textboxValue("id");
        $tableno = textboxValue("table_no");
        $status = textboxValue("status");

    
        if($tableno && $status){
            $sql = "
            UPDATE tables SET id='$id',status='$status' WHERE id='$id'
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
    $tableno = (int)textboxValue("table_no");

    $sql = "DELETE FROM tables WHERE table_no=$tableno";

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
    $sql = "DROP TABLE tables";


    if(mysqli_query($GLOBALS['con'],$sql)){
        TextNode("success","All Record deleted Successfully...!");
        Createdb();

    }
    else{
        TextNode("error","Something Went Wrong Record cannot be deleted...!");
    }
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

