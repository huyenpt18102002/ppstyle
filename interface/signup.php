<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css" class="css">
    <script src="https://kit.fontawesome.com/6c91a38875.js" crossorigin="anonymous"></script>
    <title>Signup PPSTYLE</title>
    <script>
        function validate_demo(){
            //validate usename
            var regex_username = /^[a-zA-Z0-9~!@#$%^&*()_|+\-=?;:'",.<>]+$/;
            var username = document.getElementById('username').value;
            var dem = 0;
            var kq_username = regex_username.test(username);
            if(username.length == 0){
                document.getElementById('error-username').innerHTML = "Phải nhập username";
                dem++;
            }
            else if(kq_username == false){
                document.getElementById('error-username').innerHTML = "Username không được viết cách và viết có dấu";
                dem++;
            }
            else {
                document.getElementById('error-username').innerHTML = "";
            }
            //
            var regex_name = /^[a-zA-ZàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬđĐèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆìÌỉỈĩĨíÍịỊòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰỳỲỷỶỹỸýÝỵỴ\s]+$/;
            var name = document.getElementById('name').value;
            var dem = 0;
            var kq_name = regex_name.test(name);
            if(name.length == 0){
                document.getElementById('error-name').innerHTML = "Phải nhập họ tên";
                dem++;
            }
            else if(kq_name == false){
                document.getElementById('error-name').innerHTML = "Họ tên không được chứa chữ số và ký tự đặc biệt";
                dem++;
            }
            else {
                document.getElementById('error-name').innerHTML = "";
            }
            //
            var regex_phonenumber = /^0[0-9]{9,10}$/;
            var phonenumber = document.getElementById('phonenumber').value;
            var kq_phonenumber = regex_phonenumber.test(phonenumber);
            if(phonenumber.length == 0){
                document.getElementById('error-phonenumber').innerHTML = "Phải nhập số điện thoại";
                dem++;
            }
            else if(kq_phonenumber == false){
                document.getElementById('error-phonenumber').innerHTML = "Phải nhập đúng định dạng số điện thoại";
                dem++;
            }
            else {
                document.getElementById('error-phonenumber').innerHTML = "";
            }
            // 
            var regex_email = /^[a-zA-Z0-9]+[.a-zA-Z0-9]*@[a-z]{3,8}.[a-z]{2,4}[.a-zA-Z0-9]*$/;
            var email = document.getElementById('email').value;
            var kq_email = regex_email.test(email);
            if(email.length == 0){
                document.getElementById('error-email').innerHTML = "Phải nhập email";
                dem++;
            }
            else if(kq_email == false){
                document.getElementById('error-email').innerHTML = "Phải nhập đúng định dạng email";
                dem++;
            }
            else {
                document.getElementById('error-email').innerHTML = "";
            }
            if(dem != 0){
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div id="wrapper">
        <form action="signup-process.php" id="form-login" method="post">
            <h1 class="form-heading">Đăng ký</h1>
            <div class="form-group">
                <input type="hidden" name="used_id"><br>
                <i class="far fa-user"></i>
                <input required type="text" class="form-input" placeholder="Nhập tên tài khoản" name="username"id="username"> 
            </div>
            <div>
            <span id="error-username"></span>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input required type="password" class="form-input" placeholder="Nhập mật khẩu" name="password">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <div class="form-group">
                <i class="fas fa-hand-point-right" id="hand"></i>
                <input required type="text" class="form-input" placeholder="Nhập tên của bạn" name="name"id="name">
            </div>
            <div>
            <span id="error-name"></span>
            </div>
            <p>Chọn ngày sinh:</p>
            <div class="form-group">
                <i class="fas fa-hand-point-right" id="hand"></i>
                <input type="date" class="form-input" name="birthday">
            </div>
            <div>
            <span id="error-date"></span>
            </div>
            <div class="form-group">
                <i class="fas fa-hand-point-right" id="hand"></i>
                <input required type="text" class="form-input" placeholder="Nhập số điện thoại" name="phonenumber"id="phonenumber"> 
            </div>
            <div>
            <span id="error-phonenumber"></span>
            </div>
            <div class="form-group">
                <i class="fas fa-hand-point-right" id="hand"></i>
                <input type="email" class="form-input" placeholder="Nhập email" name="email"id="email">
            </div>
            <div>
            <span id="error-email"></span>
            </div>
            <input onclick="return validate_demo()" type="submit" class="form-submit" value="Đăng ký" >
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