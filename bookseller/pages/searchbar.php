<?php include server.php;
global $db;
?>

<h1>Search page</h1>
<div class="article-container">
<?php 
if(isset($_POST['submit-search'])){
    $search = mysqli_real_escape_string($db, $_POST['search']);
    $sql = "SELECT * FROM article WHERE title LIKE '%$search%' OR author LIKE '%$search%' OR ISBN LIKE '%$search% OR price LIKE '%$search%' ";
   $result = mysqli_query($db, $sql);
    $queryResult = mysqli_num_rows($result);
    
   
    if($queryResult > 0){
        echo "There are ".$queryResult." results";
        while ($row = mysqli_fetch_assoc($result)){
            echo "<div>
                           <h3>" .$row['title']."</h3>
                           <p>" .$row['author']."</p>
                           <p>" .$row['ISBN']."</p>
                           <p>" .$row['price']."</p>
                          </div>";
        }
    } else {
            echo "there are no results matching search";
    }


}
?></div>