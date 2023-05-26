<?php include('templates/header.php'); ?>
<div id="main" style="margin-bottom:2%">
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
        
            <div>
            <img
                class="logo-sign"
                src="assets/img/logo.png"
                alt="Luxtravel"
            />
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign in to your account</h2>
            
            </div>
            <form id="sign-in-form"  class="mt-8 space-y-6" action="#" method="POST">
            <input type="hidden" name="remember" Value="true" />
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                <label htmlFor="email-address" class="sr-only">
                    Email address
                </label>
                <input
                    id="email-address"
                    name="email"
                    autoComplete="email"
                    required
                    class="appearance-none rounded-none relative block w-25 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    placeholder="Username"
                />
                </div>
                <div>
                <label htmlFor="password" class="sr-only">
                    Password
                </label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    autoComplete="current-password"
                    required
                    class="appearance-none rounded-none relative block w-25 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    placeholder="Password"
                />
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                <input
                    id="remember-me"
                    name="remember-me"
                    type="checkbox"
                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
                />
                <label htmlFor="remember-me" class="ml-2 block text-sm text-gray-900">
                    Remember me
                </label>
                </div>

                <div class="text-sm">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Forgot your password?
                </a>
                </div>
            </div>

            <div class="btn" >
            <button type="submit" name="btnDangnhap" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Đăng nhập</button>
                <!-- <a href="admin/Adindex.php" style="color:#000; text-decoration:none; font-weight:400; font-size:18px"> -->
                <!-- Sign in
                </a> -->
            </div>
            </form>
        </div>
    </div>
</div>
<?php
            include('admin/DB/connection.ini');
            $error = [];
            if(isset($_POST['btnDangnhap']))
            {
                $user = $_POST['email'];
                $password = $_POST['password'];
                
                $_SESSION['username']= $user;
                if($user == "" || $password == "" )
                {
                    $error['Lỗi! '] = 'Nhập đầy đủ tài khoản và mật khẩu.';
                }
                else
                {
                    $sql_login = "SELECT * FROM user  
                    WHERE Username = '".$user."' AND Pass = '".$password."' ";
                    $result = mysqli_query($conn, $sql_login);
                    
                    if(mysqli_num_rows($result)>0)
                    {   
                    
                        ?>
                            <script>
                                location.href = '/Luxtravel/admin/Adindex.php'
                            </script>
                        <?php
                    }
                    else
                    {
                        echo '<h3 style = "text-align:center" >Tài khoản hoặc mật khẩu không đúng!!!</h3>';
                        
                        
                    }
                    
                }
            }

            include('admin/DB/close.ini');
        ?>
<?php include('templates/footer.php'); ?>
