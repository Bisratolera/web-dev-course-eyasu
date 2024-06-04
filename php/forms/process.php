<?php
if(isset($_POST['txtName'])&& isset($_POST['gender'])&& isset($_POST['civilStatus']) && isset($_POST['btnSubmit'])
){



if ($_POST['btnSubmit']!==NULL) {
    $_SESSION['FName'] = $_POST['txtName'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['status'] = $_POST['civilStatus'];
    header('location:display.php');
}
else{
    $_SESSION['alert']="NULL value entered";
    header('location:form.php');
}
if(isset($_POST['clear'])){
    if($_POST['clear']!==NULL){
        $_SESSION['FName'] = "";
        $_SESSION['gender'] = "";
        $_SESSION['status'] = "";
        header('location:form.php');
    }

}
}
?> 