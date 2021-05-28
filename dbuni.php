<html>
    <body>
        <form action="books.php" method="post">
            <pre><a>ehat are you searching for ?</a></pre>
            <input type="text" name="keyword">
            <input type="submit" name="submit" value="filter">
        </form>
  

<?php
  $keyword="";
  //if there is a submitted keyword,use id
  //otherwise, keep empty
  if(isset($_POST['keyword'])) {
      $keyword = $_POST['keyword'];
  }

  //connect to database:
  $con = mysqli_connect("localhost","root","","usg");
  if(!$con)
    die('<p> general error occurence</p>');
  //  $query = "select * from books WHERE BTitle like '%" .$keyword. "%'";
  $query="select uid, uname, usymbol, uaddress, uphone,uemail from uni WHERE  uname like '%" .$keyword. "%'  order by BTitle";
 
  $result = mysqli_query($con,$query);
    if(!$result){
        die("something went wrong");
    }
?>
<!--  add a link to add a new book -->
<!--  start the code of table -->
<table border="1px">
    <tr>
        <th width='100px'>uni name</th>
        <th width='200px'>symbol</th>
        <th width='20px'>address</th>
        <th width='100px'>phone</th>
        <th width='50px'>email</th>
    </tr>


</body>
</html>