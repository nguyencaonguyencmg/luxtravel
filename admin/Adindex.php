<?php include('templates/nav.php'); ?>
<section class="page-content">
    <?php include('templates/header.php'); ?>
    <ul class="admin-menu">
        <li >
            <a href="addroom.php" class="fa fa-plus-circle">
                <i> Add New</i>
            </a>
        </li>
    </ul>
    <section class="search-and-user">
        <form role="search" id="search" style="width:50%">
            <input type="text" class="form-control" placeholder="Search name" value="<?php echo isset($_GET['name']) ? $_GET['name'] : "" ?>" name="name">
            <button type="submit" class="fa fa-search" aria-label="submit form">
            </button>
        </form>
    </section> 
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <?php
                include('DB/connection.ini');
                $sql="SELECT * FROM room";  
                $result=mysqli_query($conn,$sql); 
                $search=isset($_GET['name'])? $_GET['name']: "";
                    if ($search){
                        $sqls="SELECT * FROM room WHERE roomname LIKE '%".$search."%'";  
                        $result=mysqli_query($conn,$sqls);    
                        if(mysqli_num_rows($result)>0){                           
                            echo"<table class = 'min-w-full divide-y divide-gray-200'>";      
                            echo"<thead id='table-detail' class='bg-gray-50'>" ; 
                            echo "<tr style='text-align:center'>
                            <th scope='col' class='' style='width :7%'>ID</th>
                            <th scope='col' class='' style='width :8%'>Name</th>
                            <th scope='col' class='' style='width :35%'>Img</th>
                            <th scope='col' class='' style='width :30%'>Title</th>
                            <th scope='col' class='' style='width :10%'>Price</th>
                            <th scope='col' class='' style='width :10%'>Location</th>
                                <span class='sr-only'>Edit</span>
                            </th>
                            </tr>
                            </thead>";
                            while($row=mysqli_fetch_assoc($result)){
                                $anh = $row['img'];
                                echo "<tr>";      
                                echo "<td class='text-center'>".$row["roomid"]."</td>";  
								echo "<td class='text-center'>".$row["roomname"]."</td>";                  
								echo "<td class='text-center'>"."<img width='30%' src='../uploads/$anh'>"."</td>";                  
								echo "<td class='text-center'>".$row["title"]."</td>";    
								echo "<td class='text-center'>".number_format($row["price"], 0, '.', '.')."VND</td>";
								echo "<td class='text-center'>".$row["locations"]."</td>";  
								echo "<td class='text-center'><a class='text-dark border rounded  bg-info' href=\"updateroom.php?roomid=".$row['roomid']."\"><i  class='fa fa-edit text-danger text-center' style='margin:15px;width:50px'>Sửa</i></td>";  
								echo "<td class='text-center'><a class='text-dark border rounded bg-danger' href=\"includes/deleteroom.php?roomid=".$row['roomid']."\"><i  class='fa fa-trash text-white text-center' style='margin:15px; width:50px'> Xóa</i></a></td>";
						echo "</tr>";
                            }
                            echo "</table>";
                        }    
                        else {
                            echo "không có kết quả tìm kiếm phù hợp";
                        }
                    }
                    else{  
                    
                    $result = mysqli_query($conn, 'select * FROM room');
                        $row = mysqli_fetch_assoc($result);
                        $total_records = mysqli_num_rows($result);
                        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $limit = 8;
                        $total_page = ceil($total_records / $limit);
                        
                        if ($current_page > $total_page){
                            $current_page = $total_page;
                        }
                        else if ($current_page < 1){
                            $current_page = 1;
                        }
                        $start = ($current_page - 1) * $limit;
                        $result = mysqli_query($conn, "SELECT * FROM room LIMIT $start, $limit");  
                               
                    
                    if(mysqli_num_rows($result)>0){                           
                        echo"<table class = 'min-w-full divide-y divide-gray-200'>";      
                        echo"<thead id='table-detail' class='bg-gray-50'>" ; 
                        echo "<tr style='text-align:center'>
                        <th scope='col' class='' style='width :7%'>ID</th>
                        <th scope='col' class='' style='width :8%'>Name</th>
                        <th scope='col' class='' style='width :35%'>Img</th>
                        <th scope='col' class='' style='width :30%'>Title</th>
                        <th scope='col' class='' style='width :10%'>Price</th>
                        <th scope='col' class='' style='width :10%'>Location</th>
                            <span class='sr-only'>Edit</span>
                        </th>
                        </tr>
                        </thead>";
                        while($row=mysqli_fetch_assoc($result)){
                            $anh = $row['img'];
                            echo "<tr>"; 
                            echo "<td class='text-center'>".$row["roomid"]."</td>";       
                            echo "<td class='text-center'>".$row["roomname"]."</td>";                  
                            echo "<td class='text-center'>"."<img width='30%' src='../uploads/$anh'>"."</td>";                  
                            echo "<td class='text-center'>".$row["title"]."</td>";    
                            echo "<td class='text-center'>".number_format($row["price"], 0, '.', '.')."VND</td>";
                            echo "<td class='text-center'>".$row["locations"]."</td>";  
                            echo "<td class='text-center'><a class='text-dark border rounded  bg-info' href=\"updateroom.php?roomid=".$row['roomid']."\"><i  class='fa fa-edit text-danger text-center' style='margin:15px;width:50px'>Sửa</i></td>";  
								echo "<td class='text-center'><a class='text-dark border rounded bg-danger' href=\"includes/deleteroom.php?roomid=".$row['roomid']."\"><i  class='fa fa-trash text-white text-center' style='margin:15px; width:50px'> Xóa</i></a></td>";
                    echo "</tr>";
                        }
                        echo "</table>";
                    }
                    else {
                        echo "không có đơn đặt phòng nào";
                    }
                    ?>
                    <div class="pagination float-right mt-3">
                    <?php 
                        if ($current_page> 1 && $total_page > 1) 
                        {      
                            echo '<a class="page-link" href="?page='.($current_page-1).'"><i class="fa fa-chevron-left menu-icon"></i></a> ';
                        }
                        for($i =1; $i <= $total_page; $i++) 
                        {
    
                            if($i == $current_page) 
                            {
                                echo '<span class="page-link text-danger">'.$i.'</span>';
                            }
                            
                            else 
                            {
                                echo '<a class="page-link" href="?page='.$i.'">'.$i.'</a> ';
                            }
                        }
                        if ($current_page < $total_page && $total_page > 1) 
                        {
                            echo '<a class="page-link" href="?page='.($current_page+1).'"><i class="fa fa-chevron-right menu-icon"></i></a> ';
                        }
                    ?>
                </div>
                <?php
                    }
                        mysqli_close($conn);
                ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('templates/footer.php'); ?>
