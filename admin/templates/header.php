<section class="search-and-user">
<?php 
    session_start();
    include('DB/connection.ini');
    $sql="SELECT * FROM user WHERE Username='".$_SESSION['username']."'";
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
        $name = $row['FullName'];
        $img = $row['Img'];
        $id = $row['ID'];
    }
    
    $users = mysqli_query($conn, "select count(ID) as tonguser from user");
    if(mysqli_num_rows($users)> 0)
	{
            while($row = mysqli_fetch_array($users))
            {
                $tonguser = $row['tonguser'];
            }
	}
    $rooms = mysqli_query($conn, "select count(roomid) as tongroom from room");
    if(mysqli_num_rows($rooms)> 0)
	{
            while($row = mysqli_fetch_array($rooms))
            {
                $tongroom = $row['tongroom'];
            }
	}
    $diadiem = mysqli_query($conn, "select count(LocationID) as tonglocation from locations");
    if(mysqli_num_rows($diadiem)> 0)
	{
            while($row = mysqli_fetch_array($diadiem))
            {
                $tonglocation = $row['tonglocation'];
            }
	}
    $bookings = mysqli_query($conn, "select count(BookingID) as tongbook from booking");
    if(mysqli_num_rows($bookings)> 0)
	{
            while($row = mysqli_fetch_array($bookings))
            {
                $tongbook = $row['tongbook'];
            }
	}
    
?>
    <div class="admin-profile">
        <div class="notifications">
           <img style="width:50px; height:50px; border-radius:50%;" src='../uploads/<?php echo "$img" ?>'>
        </div>
    </div>
</section>
<section>
    <div class='site-info'>

        <div id="quick-info" class='all-quick-info'>

            <div class='info-icon'><i class="fa fa-bed"></i></div>

            <div class='text-right'>
                <div class='info-numbers'><span><?php echo "$tongroom" ?></span></div>
                <div>Rooms</div>
            </div>

            <div class='info-box-footer'>

                <a href='Adindex.php' class='user-href'><span class="pull-left">View Details</span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

        </div>

        <div id="quick-info2"  class='all-quick-info'>

        <div class='info-icon'> <i class="fa">&#xf0c0;</i></div>

        <div class='text-right'>
            <div class='info-numbers'><span><?php echo "$tonguser" ?></span></div>
            <div>Users</div>
        </div>

        <div class='info-box-footer'>

            <a href='Aduser.php' class='user-href' ><span class="pull-left">View Details</span>

            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

        </div>

        </div>

        <div  class='all-quick-info'>

        <div class='info-icon'> <i class="fa fa-building"></i></div>

        <div class='text-right'>
            <div class='info-numbers'><span><?php echo "$tonglocation" ?></span></div>
            <div>Location</div>
        </div>

        <div class='info-box-footer'>

            <a href='Adlocation.php' class='user-href' ><span class="pull-left">View Details</span>

            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

        </div>

        </div>

        <div class='all-quick-info'>

        <div class='info-icon'><i class="fa fa-calendar-check"></i></div>

        <div class='text-right'>
            <div class='info-numbers'><span><?php echo "$tongbook" ?></span></div>
            <div>Bookings</div>
        </div>

        <div class='info-box-footer'>

            <a href='Adbooking.php' class='user-href'><span class="pull-left">View Details</span>

            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

        </div>
        </div>
    </div>
    
</section>