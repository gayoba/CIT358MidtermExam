<?php


if(ISSET($_POST['submit'])){
  
     $title = $_POST['title'];
     $pages = $_POST['pages'];
     $author = $_POST['author'];
     $year = $_POST['year'];

  
    
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'library') or die(mysqli_error());
 
        
        $conn->query ("INSERT INTO `book` (`title`, `pages`, `author`, `year`, `book_id`) VALUES ('$title', '$pages', '$author', '$year', '')") or die(mysqli_error());
        
       
      
    

}
echo "<script>document.location='addbook.php'</script>"
?>