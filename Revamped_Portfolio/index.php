   <?php
    require('sections/header.php');
        
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
            if(file_exists("php/$page.php")){
                include("php/$page.php");
            }
            else {
                echo "<h1>404: Page Doesn't Exist!</h1>";
            }
        } else {
    include("php/home.php");
}

  
require('sections/footer.php');

?>