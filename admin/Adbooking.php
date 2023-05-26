
<?php include('templates/nav.php'); ?>
    <section class="page-content">
<?php include('templates/header.php'); ?>
    <ul class="admin-menu">
        <li >
            <a href="addbooking.php" class="fa fa-plus-circle">
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
            
            $sql="SELECT * FROM booking";  
				
            $result=mysqli_query($conn,$sql); 
            $search=isset($_GET['name'])? $_GET['name']: "";
				if ($search){
					$sqls="SELECT * FROM booking WHERE RoomName LIKE '%".$search."%'";  
					$result=mysqli_query($conn,$sqls);    
                    if(mysqli_num_rows($result)>0){                           
                        echo"<table class = 'min-w-full divide-y divide-gray-200'>";      
                        echo"<thead id='table-detail' class='bg-gray-50'>" ; 
                        echo "<tr style='text-align: center'>
                        <th scope='col' class='' style='width :10%'>ID</th>
                        <th scope='col' class='' style='width :10%'>Room-name</th>
                        <th scope='col' class='' style='width :10%'>Guest-name</th>
                        <th scope='col' class='' style='width :5%'>Code</th>
                        <th scope='col' class='' style='width :15%'>Price</th>
                        <th scope='col' class='' style='width :10%'>Date-in</th>
                        <th scope='col' class='' style='width :10%'>Date-out</th>
                        <th scope='col' class='' style='width :10%'>Guests</th>
                        <th scope='col' class='' style='width :10%'>Rooms</th>
                        <th scope='col' class='' style='width :10%'>Total</th>
                        <th scope='col' class='relative px-6 py-3'>
                            <span class='sr-only'>Edit</span>
                        </th>
                        </tr>
                        </thead>";
                        while($row=mysqli_fetch_assoc($result)){
                            echo "<tr>";        
                                    echo "<td class='text-center'>".$row["BookingID"]."</td>";                  
                                    echo "<td class='text-center'>".$row["RoomName"]."</td>";                  
                                    echo "<td class='text-center'>".$row["Hoten"]."</td>";                  
                                    echo "<td class='text-center'>".$row["Code"]."</td>";                  
                                    echo "<td class='text-center'>".number_format($row["Price"], 0, '.', '.')."VND</td>";
                                    echo "<td class='text-center'>".$row["Datein"]."</td>";    
                                    echo "<td class='text-center'>".$row["Dateout"]."</td>";  
                                    echo "<td class='text-center'>".$row["People"]."</td>";  
                                    echo "<td class='text-center'>".$row["Nrooms"]."</td>";  
                                    echo "<td class='text-center'>".number_format($row["Total"], 0, '.', '.')."VND</td>";  
                                    echo "<td class='text-center'><a class='text-dark border rounded  bg-info' href=\"updatebooking.php?BookingID=".$row['BookingID']."\"><i  class='fa fa-edit text-danger text-center' style='margin:15px;width:50px'>Sửa</i></td>";  
                                    echo "<td class='text-center'><a class='text-dark border rounded bg-danger' href=\"includes/deletebooking.php?BookingID=".$row['BookingID']."\"><i  class='fa fa-trash text-white text-center' style='margin:15px; width:50px'> Xóa</i></a></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }    
                    else {
                        echo "không có kết quả tìm kiếm phù hợp";
                    }
                }
				else{  
				
                $result = mysqli_query($conn, 'select * from booking');
					$row = mysqli_fetch_assoc($result);
					$total_records = mysqli_num_rows($result);
					$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
					$limit = 5;
					$total_page = ceil($total_records / $limit);
					
					if ($current_page > $total_page){
						$current_page = $total_page;
					}
					else if ($current_page < 1){
						$current_page = 1;
					}
					$start = ($current_page - 1) * $limit;
                    $result = mysqli_query($conn, "SELECT * FROM booking LIMIT $start, $limit");  
				           
				
				if(mysqli_num_rows($result)>0){                           
					echo"<table class = 'min-w-full divide-y divide-gray-200'>";      
                    echo"<thead id='table-detail' class='bg-gray-50'>" ; 
					echo "<tr style='text-align: center'>
                        <th scope='col' class='' style='width :10%'>ID</th>
                        <th scope='col' class='' style='width :10%'>Room-name</th>
                        <th scope='col' class='' style='width :10%'>Guest-name</th>
                        <th scope='col' class='' style='width :5%'>Code</th>
                        <th scope='col' class='' style='width :15%'>Price</th>
                        <th scope='col' class='' style='width :10%'>Date-in</th>
                        <th scope='col' class='' style='width :10%'>Date-out</th>
                        <th scope='col' class='' style='width :10%'>Guests</th>
                        <th scope='col' class='' style='width :10%'>Rooms</th>
                        <th scope='col' class='' style='width :10%'>Total</th>
                    <th scope='col' class='relative px-6 py-3'>
                        <span class='sr-only'>Edit</span>
                    </th>
                    </tr>
                    </thead>";
					while($row=mysqli_fetch_assoc($result)){
						echo "<tr>";        
								echo "<td class='text-center'>".$row["BookingID"]."</td>";                  
								echo "<td class='text-center'>".$row["RoomName"]."</td>";                 
                                echo "<td class='text-center'>".$row["Hoten"]."</td>";                  
                                echo "<td class='text-center'>".$row["Code"]."</td>";                   
								echo "<td class='text-center'>".number_format($row["Price"], 0, '.', '.')."VND</td>";
								echo "<td class='text-center'>".$row["Datein"]."</td>";    
								echo "<td class='text-center'>".$row["Dateout"]."</td>";   
                                echo "<td class='text-center'>".$row["People"]."</td>";  
                                echo "<td class='text-center'>".$row["Nrooms"]."</td>";  
								echo "<td class='text-center'>".number_format($row["Total"], 0, '.', '.')."VND</td>";  
								echo "<td class='text-center'><a class='text-dark border rounded  bg-info' href=\"updatebooking.php?BookingID=".$row['BookingID']."\"><i  class='fa fa-edit text-danger text-center' style='margin:15px;width:50px'>Sửa</i></td>";  
								echo "<td class='text-center'><a class='text-dark border rounded bg-danger' href=\"includes/deletebooking.php?BookingID=".$row['BookingID']."\"><i  class='fa fa-trash text-white text-center' style='margin:15px; width:50px'> Xóa</i></a></td>";
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
                    // phần hiển thi phân trang 
                    // nếu current_page > 1 và total_page > 1 thì mới hiển thị nút prev
                    if ($current_page> 1 && $total_page > 1) 
                    {      
                        echo '<a class="page-link" href="?page='.($current_page-1).'"><i class="fa fa-chevron-left menu-icon"></i></a> ';
                    }
                    // lap khoang giua
                    for($i =1; $i <= $total_page; $i++) 
                    {
                        // neu la trang hiện tại thì hiển thị thẻ span
                        // nguoc lại hiển thị thẻ a 

                        if($i == $current_page) 
                        {
                            echo '<span class="page-link text-danger">'.$i.'</span>';
                        }
                        
                        else 
                        {
                            echo '<a class="page-link" href="?page='.$i.'">'.$i.'</a> ';
                        }
                    }
                    // nếu current_page < total_page >1 mới hiển thị nút prev 
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
                <!-- <table class="min-w-full divide-y divide-gray-200">
                <thead id="table-detail" class="bg-gray-50">
                    <tr style="text-align: center">
                    <th scope="col" class="" style="width :10%">ID</th>
                    <th scope="col" class="" style="width :10%">Name</th>
                    <th scope="col" class="" style="width :20%">Price</th>
                    <th scope="col" class="" style="width :20%">Date-in</th>
                    <th scope="col" class="" style="width :20%">Date-out</th>
                    <th scope="col" class="" style="width :20%">Total</th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr style="text-align: center;">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> BK1 </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Neo-Hotel </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">1.990.000VND </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">12/11/2021</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">15/11/2021</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"> 5.890.000VND </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 fa fa-file">Edit</a>
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 fa fa-times-circle">Delete</a>
                    </td>
                    </tr>

                </tbody>
                </table> -->
                
            </div>
            </div>
        </div>
    </div>
</section>
<?php include('templates/footer.php'); ?>