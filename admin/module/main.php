<div class="main">
    <?php
        if(isset($_GET['action']) && isset($_GET['query'])){
            $temp = $_GET['action'];
            $query = $_GET['query'];
        }
        else {
            $temp = '';
            $query = '';
        }
        if($temp =='danhmucsanpham' && $query == 'them'){
            include('quanlidanhmuc/them.php');
            include('quanlidanhmuc/lietke.php');

        }else if($temp =='danhmucsanpham' && $query == 'sua'){
            include('quanlidanhmuc/sua.php');
            include('quanlidanhmuc/lietke.php');
        }
        else if($temp =='quanlisanpham' && $query == 'them'){
            include('quanlisanpham/them.php');
            include('quanlisanpham/lietke.php');
        }
        else if($temp =='quanlisanpham' && $query == 'sua'){
            include('quanlisanpham/sua.php');
            include('quanlisanpham/lietke.php');
        }
        
        else{
            header("Location:../admin/index.php?action=danhmucsanpham&query=them");
        }
    ?>
</div>
