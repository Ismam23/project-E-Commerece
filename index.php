<?php include_once '../model-class19/db_config.php' ?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
   $category_type =($_POST['CAT-TYPE']);
   $category_name =($_POST['CAT-NAME']);
   $sql = "INSERT INTO categories (category_type,category_name) VALUES (?, ?)";
   $sql_statement = mysqli_prepare($link,$sql);
   if($sql_statement){
   print_r()
    mysqli_stmt_bind_param($sql_statement,"ss",$var1,$var2);
    $var1= $category_type;
    $var2= $category_name;
    $execute = mysqli_stmt_execute($sql_statement);
    if($execute{
    header("location:index.php");
    }
    else{
        "opps! something went wrong.";
    }
   }
 }

?>

<!DOCTYPE html>
<html>

<?php include "../view/layout/header.php"; ?>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
      
        <?php include "../view/layout/side-Navbar.php"; ?>
        <!-- Page Content Holder -->
        <div id="content">

        <?php include "../view/layout/contentMenu.php"; ?>

        <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="mb-3">
                <h3>CATEGORIES</h3>
            </div>
          <form accept="" class="shadow p-4" action="index.php" method="POST">          
                <div class="mb-3">
                    <label for="CAT-TYPE">Category_type</label>
                    <input type="CAT-TYPE" class="form-control" name="CAT-TYPE" id="CAT-TYPE" placeholder="CAT-TYPE">
                </div>

                <div class="mb-3">
                    <label for="CAT-NAME">category_name</label>
                    <input type="CAT-NAME" class="form-control" name="CAT-NAME" id="CAT-NAME" placeholder="CAT-NAME">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">update</button>
                </div>

                <hr>
            </form>
        </div>
    </div>
</div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>