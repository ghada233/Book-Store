<?php
 require 'connections.php';
 session_start();
  
 if(isset($_POST['login'])){
      
     $username = $_POST["username"];
     $password = $_POST["password"];
     
     
     $squ = "select * from users where username = '$username' && password = '$password'";
    
     $result = $conn->query($squ);
     while($Row = $result->fetch_assoc()){
     $count = $result->num_rows;
     }

     if($count > 0){
      $_SESSION['username'] = $username;
  
      header("Location: logout.php");
     }else{
      header("Location: login.php");
     }
        
 }
//

if(isset($_POST['signup'])){
	 
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
 
	$qu = "insert into users (username,password,email) value ('$username','$password','$email')";
	

	if(mysqli_query($conn, $qu)){      
        $_SESSION['username'] = $username;
        header("Location: login.php");
		
	} 
}  

 ?>
  

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="LOG.css" />
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <title>التسجيل </title>
</head>

<body>
 
 <!---------- nav bar --------------->
 <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white " href="#">
            <img src="img/Contact.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="Untitled-1.php">الصفحة الرئيسية</a>
                </li>
            <li class="nav-item ">
                <a class="nav-link text-white" href="index.php"> من نحن </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white" href="IndexShope.php" >خدماتنا</a>
                
            </li>
            <li class="nav-item ">
                <a class="nav-link  text-white" href="indexcart.php" > السلة    </a>
               
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="indexC.php">اتصل بنا</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="indexFAQs.php">الأسئلة الشائعة</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link  text-white" href="#" > التسجيل /تسجيل الدخول <span class="sr-only">(current)</span>
              </a>
             
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="OrderT.php">تتبع الطلبات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="Payment.php">الدفع </a>
      </li>
            </ul>
        </div>
    </nav>
</section>



  <div class=" pt-5 my-5 "></div>

  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <form method="POST" class="sign-in-form">
          <h2 class="title"> تسجيل الدخول</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" id="username" placeholder="اسم المستخدم" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="الرقم السري " />
          </div>
          <input type="submit" name="login" class="btn" value=" تسجيل الدخول" onclick="window.location.href='IndexShope.php';" />

        </form>

        <form method="POST" class="sign-up-form">
          <h2 class="title"> التسجيل</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            
            <input type="text" name="username" id="username" placeholder="اسم المستخدم" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="الايميل" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="الرقم السري" required />
          </div>
          <input type="submit" name="signup" class="btn" value=" التسجيل" onclick="window.location.href='login.php';" />

        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>اهلا يا اصدقاء</h3>
          <p>
            أدخل بياناتك الشخصية وابدأ رحلة معنا
          </p>
          <button class="btn transparent" id="sign-up-btn">
          التسجيل
          </button>
        </div>
        <img src="imgs/img2.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>اهلا مجددا</h3>
          <p>
            للبقاء على اتصال معنا ، يرجى تسجيل الدخول باستخدام معلوماتك الشخصية
          </p>
          <button class="btn transparent" id="sign-in-btn">
          التسجيل 
          </button>
        </div>
        <img src="imgs/img1.svg" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="https://use.fontawesome.com/24c81f8416.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="index.js"></script>




  

 <!---------------- footer  ------------>
 <section class="footer">
    <div class="card-body text-white">
        <div class="container-fluid text-end">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="footertitle">Book Store</h3>
                    <p class="text-muted text-justify">
                        هي مكتبة لبيع الكتب عبر الإنترنت  نعتقد أن المكتبات ضرورية لثقافة صحية. إنها حيث يمكن للمؤلفين التواصل مع القراء ، حيث نكتشف كتّابًا جددًا ، حيث ينجذب الأطفال إلى إثارة القراءة التي يمكن أن تستمر مدى الحياة. هم أيضا مراسي لوسط البلد والمجتمعات. مع تزايد عدد الأشخاص الذين يشترون كتبهم عبر الإنترنت ، أردنا إنشاء طريقة سهلة ومريحة لك للحصول على كتبك ودعم المكتبات في نفس الوقت.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="social-mun ">
                        <h4 class="footertitle pb-2 ">تابعنا على مواقع التواصل الاجتماعي</h4>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <h6 class="footertitle pt-5 text-muted">جميع الحقوق محفوظه &copy;BookStore</h6>
                </div>
                <div class="col-md-4">
                    <h4 class="footertitle ">النشرة البريدية</h4>
                    <p class="text-muted ">  لتصلك مقالات اسبوعية من Book Store
                     </p>
                    <input type="text" class="form-control w-75" id="email" placeholder="Book.Store@BookStore.com"
                        name="email">
                    <p class="text-muted"><small>لن نستخدم بريدك خارج نطاق النشرة إطلاقًا</small></p>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
