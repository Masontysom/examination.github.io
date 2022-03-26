<?php 
session_start();
if(!isset($_SESSION['username'])){
header('Location:login.php');
}

$con = mysqli_connect('localhost','root','Meeth242004');

mysqli_select_db($con, 'examdbase');
?>
<!doctype html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family Montserrat Open+Sans" rel="stylesheet">
</head>

<body>
    <div class="container">
<h1 class="text-center text-primary"> <Center>Online Examination Center</Center> </h1>
    <h2 class="text-center text-success"><center> Welcome <?php echo $_SESSION['username']; ?> </center> </h2>

 <div class="col-lg-8 m-auto d-block">   
    <div class="card">
    <h3 class="text-center card-header"> Welcome <?php echo $_SESSION['username']; ?>, you have to select only one out of 4. Best of Luck :) </h3>
</div><br>

<form action="check.php" method="post">

 <?php
for($i=1;$i<6;$i++) {

    $q = "select * from questions where qid = $i";
    $query = mysqli_query($con, $q);
    while ($rows = mysqli_fetch_array($query) ) {
        ?>
        <div class="card"> 
            <h4 class="card-header"> 
                <?php echo $rows['question'] ?> 
            </h4>
        <?php 
        $q = "select * from answer where ans_id = $i";
        $query = mysqli_query($con, $q);
        while ($rows = mysqli_fetch_array($query) ) {
            ?>
            <div class="card-body">
            <input type="radio" name="quizcheck[<?php echo $rows ['ans_id']; ?>]"
             value="<?php echo $rows['aid']; ?>">
            <?php echo $rows['answer'] ;?>
            </div>

        <?php
    }
}
}
?>

<input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" />
<br>
</form>
</div>
</div>

<br> <br>
<div class="d-block m-auto">
    <a class="btn btn-primary  text-white" href="logout.php">LOGOUT </a>
</div><br><br><br>
    </div>
</body>

</html>