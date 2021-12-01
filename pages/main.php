<div class="main">
           <?php
           include("pages/sidebar.php")
           ?>
            <div class="content">
                <?php
                    if(isset($_GET['quanli'])){
                        $temp = $_GET['quanli'];
                    }
                    else {
                        $temp = '';
                    }
                    if($temp =='danhmucsanpham'){
                        include('pages/product.php');
                    }
                    else if($temp =='tintuc'){
                        include("pages/tintuc.php");
                    }
                    else if($temp =='lienhe'){
                        include("pages/lienhe.php");
                    }
                ?>
               
            </div>
            <div class="clear"></div>
        </div>