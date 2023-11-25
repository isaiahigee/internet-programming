<?php include 'connection.php'; 
$id=$_GET['id'];
$select="SELECT * FROM books WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
 <div>
            <form action="" method="POST">
                <input value="<?php echo $row['book_name'] ?>" type="text" name="book_name" placeholder="book_name"> <br><br>
                <input type="text" name="Author_name" placeholder="Author_name" value=<?php echo $row['Author_name'] ?>> <br><br>
                <input type="text" name="publisher" placeholder="publisher" value=<?php echo $row['publisher'] ?>> <br><br>
                <input type="submit" name="update_btn" value="Update"> <br><br>
                <button><a href="view.php">Back</a></button>
            </form>
        </div>
        <?php
        if (isset($_POST['update_btn'])) {
            $book_name = $_POST['book_name'];
            $Author_name = $_POST['Author_name'];
            $publisher = $_POST['publisher'];
            $update = "UPDATE books SET book_name='$book_name',Author_name='$Author_name',publisher ='$publisher' WHERE id ='$id'";    
            $data = mysqli_query($con, $update);
            if ($data) {
                ?>
                <script type="text/javascript">
                    alert("Data Updated Successfully");
                </script>
                <?php   
            }
            else {
                ?>
                <script type="text/javascript">
                    alert("Please try again");
                    window.open("http://localhost/library/view.php","_self");
                </script>
                <?php
            }
        }
        ?>