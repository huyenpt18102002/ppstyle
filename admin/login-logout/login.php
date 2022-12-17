
<title>Login admin PPSTYLE</title>
<!------------------style------------------>
<script src="https://kit.fontawesome.com/6c91a38875.js" crossorigin="anonymous"></script>
<style>
    body{
    background: url(../../interface/image/bg-login.jpg);
    background-size: cover;
    background-position-y:-80px;
    font-size: 16px;
}
#wrapper{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
#form-login{
    max-width: 400px;
    background: rgba(0, 0, 0, 0.8);
    flex-grow: 1;
    padding: 30px 30px 40px ;
    box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
}
.form-heading{
    font-size: 25px;
    color:#f5f5f5;
    text-align: center;
    margin-top: 30px;
}
.form-group{
    border-bottom: 1px solid #fff;
    margin-top: 15px;
    margin-bottom: 20px;
    display: flex;
}
.form-group i{
    color:#f5f5f5;
    font-size: 14px;
    padding: 5px 10px 0 0;
}
.form-input{
    background: transparent;
    border: 0;
    outline: 0;
    color:#f5f5f5;
    flex-grow: 1;
}
.form-input::placeholder{
    color:#f5f5f5;
}
#eye i{
    padding-right: 0;
    cursor: pointer;
}
.form-submit{
    background: transparent;
    border: 1px solid #f5f5f5;
    color:#fff;
    width: 100%;
    text-transform: uppercase;
    padding: 6px 10px;
    transition: 0.25s ease-in-out;
    margin-top: 25px;
}
.form-submit:hover{
    border: 1px solid #54a0ff;
}
</style>
<!------------------form------------------>
<body>
    <div id="wrapper">
        <form method="post" action="login-process.php" id="form-login">
            <h1 class="form-heading">Admin đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input required type="text" name="admin_name" class="form-input" placeholder="Tên đăng nhập" >
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input required type="password" name="password" class="form-input" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" class="form-submit" value="Đăng nhập" >
        </form>
    </div>
</body>
<!------------------script------------------>
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