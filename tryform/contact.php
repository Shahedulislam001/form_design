<style>
    .list{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
ul{
    margin : 0;
    padding: 0;
}
ul li{
    list-style : none;
    color:black;
    border-left:5px solid salmon;
    position: relative;
    padding:8px;
    margin:0;
}
h3{
    font-family: 'poppins',sans-serif;
}
</style>
<?php
$name = $phone = $email = $message = " "; 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['name'])){
            $nameErr = "Name is required";
        } else {
            $name = validate($_POST['name']);
        }
        if(empty($_POST['phone'])){
            $phoneErr = "Phone number is required";
        } else {
            $phone = validate($_POST['phone']);
        }
        if(empty($_POST['email'])){
            $emailErr = "Email is required";
        } else {
            $email = validate($_POST['email']);
        }
        $message = validate($_POST['message']);
    }
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<div class="list">
    <h3>Your data is here</h3>
    <ul>
        <li>Name :<?php echo $name ?> </li>
        <li>Phone no : <?php echo $phone ?> </li>
        <li>Email : <?php echo $email ?> </li>
        <li>Message : <?php echo $message ?> </li>
    </ul>
</div>