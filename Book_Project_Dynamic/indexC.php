<!DOCTYPE html>
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
                                    <a class="nav-link text-white" href="Untitled-1.php">الصفحة الرئيسية  </a>
                                </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="index.php"> من نحن </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="IndexShope.php" >خدماتنا</a>
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link  text-white" href="indexcart.php" >   السلة    </a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">اتصل بنا<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="indexFAQs.php">الأسئلة الشائعة</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link  text-white" href="login.php" > التسجيل /تسجيل الدخول  
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

                <!-------------- banner  ----------->
                <section id="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="promo-title">
                                    إذا شعرت وأنت تُقلّب الصفحة الأخيرة في الكتاب الذي تقرأه أنّك فقدت صديقاً عزيزاً، فأعلم أنك قد قرأت كتاباً رائعاً.
                                </p>

                                <p class="text-muted">اليوم قارئ، غداً قائد  </p>
                            </div>
                            <div class="col-md-6 text-center">
                                <img src="img/email.png" class="img-fluid bannerimg">
                            </div>
                        </div>
                    </div>
 <!----------- waves ---------->
                    <div id="waves">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#ffff" fill-opacity="1" d="M0,128L40,112C80,96,160,64,240,69.3C320,75,400,117,480,112C560,107,640,53,720,42.7C800,32,880,64,960,90.7C1040,117,1120,139,1200,138.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
                        </svg>
                    </div>
                </section>
  
<!---->
<!---------text and more sentense----------------->


  <!--------- Form --------->
  <section id="call-us">
    <div class="container text-right ">
        <h3 class= "title mb-5">تواصل معنا</h3>
        <form id="main-contact-form">
            <div class="row flex-row-reverse">
                <div class="col-md-6">
                    <div class="form-group">
                        <h6> :الأسم الأول</h6>
                        <input class="form-control text-right" type="text" id="fname"
                            name="fname" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h6> :أسم العائلة</h6>
                        <input class="form-control text-right" type="text"  id="lname"
                            name="lname" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h6> :البريد الالكتروني</h6>
                        <input class="form-control text-right" type="text" placeholder="Book.Store@BookStore.com" id="email"
                            name="email " required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h6> :تأكيد البريد الالكتروني</h6>
                        <input class="form-control text-right"  type="text" placeholder="Book.Store@BookStore.com"
                            id="email" name="email " required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h6> :رقم الهاتف </h6>
                        <input class="form-control text-right" type="text" placeholder="(+966) 55 4241 083" id="mobile"
                            name="mobile" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h6> :العنوان</h6>
                        <input class="form-control text-right" type="text"  id="subject"
                            name="subject" placeholder="الشارع-الحي-المدينة">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <h6> :الرسالة</h6>
                        <textarea class="form-control text-right" rows="5" placeholder="شاركنا ملاحظاتك" id="message"
                            name="message" required></textarea>
                    </div>
                </div>
            </div>
            <label class="customcheck">طلب إعادة اتصال
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <p id="status"></p>
            <div class="form-group text-center">
                <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-paper-plane"></i> إرسال
                </button>
            </div>
    </div>
    </div>
    </form>
    <br>
 
</section>




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