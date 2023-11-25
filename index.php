<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
	<head>
	<title></title>
	</head>
	<body>
	<div>
	<form action="" method="POST">
	<input type="varchar" name="book_name"placeholder="book_name"><br><br>
	<input type="varchar" name="Author_name"placeholder="Author_name"><br><br>
	<input type="varchar" name="publisher"placeholder="publisher"><br><br>
	<input type="submit" name="submit" value="submit"><br><br>
	<button><a href="view.php">Display</a></button>
            </form>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            $book_name=$_POST['book_name'];
            $Author_name=$_POST['Author_name'];
            $publisher=$_POST['publisher'];
            $query="INSERT INTO books(book_name,Author_name,publisher) VALUES('$book_name','$Author_name','$publisher')";
            $data=mysqli_query($con,$query);
        }
if($data)	
 	 {
         ?>
         <script type="text/javascript">
            alert("Data Saved Successfully")
         </script>
         <?php
         }
         else
         {
            ?>
            <script type="text/javascript">
            alert("Please try again later")
         </script>
         <?php
         }
         ?>
    </body>
</html>