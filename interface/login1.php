<link rel="stylesheet" href="css/login.css" class="css">
    <script src="https://kit.fontawesome.com/6c91a38875.js" crossorigin="anonymous"></script>
    <title>Login PPSTYLE</title>
</head>
<body>
    <div id="wrapper">
        <form method="post" action="login-process1.php" id="form-login">
            <h1 class="form-heading">Đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input required ="text" class="form-input" placeholder="Tên đăng nhập" name="username">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input required type="password" class="form-input" placeholder="Mật khẩu" name="password">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" class="form-submit" value="Đăng nhập" >
            <p class="signup-already">
                <span>Bạn chưa có tài khoản?</span>
                <a href="signup.php" class="signup-login-link">Đăng ký</a>
            </p>
            <p class="signup-already">
                <span></span>
                <a href="logout.php" class="signup-login-link">Đăng xuất</a>
            </p>
        </form>
        
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
 $(document).ready(function() {
    $('#eye').click(function() {
       $(this).toggleClass('open');
       $(this).children('i').toggleClass('fa-eye-slash fa-eye');
       if($(this).hasClass('open')){
           alert('Type text');
           $(this).prev().attr('type', 'text');
       }else{
           $(this).prev().attr('type', 'password');
       }
    });

});
</script>
</html>