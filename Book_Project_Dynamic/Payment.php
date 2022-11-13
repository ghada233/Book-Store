<?php
require 'auth.php';

if(isset($_POST['logout'])){
	unset($_SESSION['username']);
	header("Location: login.php");
	exit();
}


?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
          <!-- Bootstrap 4 CSS -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
          <!-- css custom  -->
          <link rel="stylesheet" href="style.css">
          <!-- font icon  -->
          <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" integrity="sha384-haqrlim99xjfMxRP6EWtafs0sB1WKcMdynwZleuUSwJR0mDeRYbhtY+KPMr+JL6f" crossorigin="anonymous"></script>
          <!-- google font  -->
          <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    
        <title> Book Store </title>
    
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
 
                      <li class="nav-item">
                        <a class="nav-link text-white" href="OrderT.php">تتبع الطلبات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">الدفع <span class="sr-only">(current)</span></a>
                    </li>
                    
                        </ul>
                    </div>
                </nav>
            </section>

            <form method="post">

<input type="submit" name="logout" class="btn" value=" تسجيل الخروج" onclick="window.location.href='IndexShope.php';" />

</form>

            <br>
            <br>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
 <div class="padding">
        <div class="row">
            <div class="container-fluid d-flex justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <div class="card">
                        <div class="card-header">

                        <div class="row">
                            <div class="col-md-6">
                                <span>CREDIT/DEBIT CARD PAYMENT</span>
                                
                            </div>

                            <div class="col-md-6 text-right" style="margin-top: -5px;">

                                  <img src="https://img.icons8.com/color/36/000000/visa.png">
                                  <img src="https://img.icons8.com/color/36/000000/mastercard.png">
                                  <img src="https://img.icons8.com/color/36/000000/amex.png">
                                           
                            </div>      

                        </div>    
  
                        </div>
                        <div class="card-body" style="height: 350px">
                            <div class="form-group">
                            <label for="cc-number" class="control-label">CARD NUMBER</label>
                            <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="&bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull;" required>
                          </div>

                          <div class="row">

                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="cc-exp" class="control-label">CARD EXPIRY</label>
                                    <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="&bull;&bull; / &bull;&bull;" required>
                                  </div>

                                
                            </div>

                             <div class="col-md-6">
                               <div class="form-group">
                                <label for="cc-cvc" class="control-label">CARD CVC</label>
                                <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="&bull;&bull;&bull;&bull;" required>
                              </div>
                            </div>
                              
                          </div>

      
                          <div class="form-group">
                            <label for="numeric" class="control-label">CARD HOLDER NAME</label>
                            <input  type="text" class="input-lg form-control">
                          </div>

                           <div class="form-group">
                            
                            <input  value="MAKE PAYMENT" type="button" class="btn btn-success btn-lg form-control" style="font-size: .8rem;">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

<br>
<br>

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










