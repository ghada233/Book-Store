
<?php
 

if(isset($_POST['pay'])){
 
        header("Location: Payment.php");
		
	} 
 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- css custom  -->
    <link rel="stylesheet" href="style.css">
    <!-- font icon  -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"
        integrity="sha384-haqrlim99xjfMxRP6EWtafs0sB1WKcMdynwZleuUSwJR0mDeRYbhtY+KPMr+JL6f"
        crossorigin="anonymous"></script>
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
                            <a class="nav-link  text-white" href="#" > السلة <span class="sr-only">(current)</span></a>
                            
                           
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
                        <li class="nav-item ">
                            <a class="nav-link  text-white" href="login.php" > التسجيل /تسجيل الدخول  
                            </a>
                           
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
                        القارئ يعيش الف حياة قبل الموت الشخص الذي لا يقراء ابدا يعيش مرة واحدة
                    </p>

                    <p class="text-muted">اليوم قارئ، غداً قائد </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="img/book-stack.png" class="img-fluid bannerimg">
                </div>
            </div>
        </div>
        <!----------- waves ---------->
        <div id="waves">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffff" fill-opacity="1"
                    d="M0,128L40,112C80,96,160,64,240,69.3C320,75,400,117,480,112C560,107,640,53,720,42.7C800,32,880,64,960,90.7C1040,117,1120,139,1200,138.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    <section id="Cart" class="pt-5 mt-5 container" style="direction: rtl;">
        <h2 class="font-weight-bold pt-5" style="text-align: right;"> عربة التسوق</h2>
    </section>


    <!-- Cart detaiels -->
    <section id="cart-container" class="container my-5">
        <table width="100%">
            <thead>
                <tr>
                    <td>ازالة</td>
                    <td>المجموع</td>
                    <td>السعر</td>
                    <td>الكمية </td>
                    <td>الصوره</td>
                    <td>المنتج</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="fa fa-trash-alt"></i></a></td>
                    <td>
                        <h5>99.00SR</h5>
                    </td>
                    <td>9.00 SR</td>
                    <td><input class="w-25 pl-1" value="1" type="number"></td>
                    <td><img src="imgs/book20.jpg" alt=""></td>
                    <td>
                        <h5>Read it Yourself</h5>
                    </td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa fa-trash-alt"></i></a></td>
                    <td>
                        <h5>9.00SR</h5>
                    </td>
                    <td>95.00 SR</td>
                    <td><input class="w-25 pl-1" value="1" type="number"></td>
                    <td><img src="imgs/book18.jpg" alt=""></td>
                    <td>
                        <h5>Back in Time</h5>
                    </td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa fa-trash-alt"></i></a></td>
                    <td>
                        <h5>105.00SR</h5>
                    </td>
                    <td>105.00 SR</td>
                    <td><input class="w-25 pl-1" value="1" type="number"></td>
                    <td><img src="imgs/book6.jpg" alt=""></td>
                    <td>
                        <h5>Stive jobs</h5>
                    </td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa fa-trash-alt"></i></a></td>
                    <td>
                        <h5>70.25SR</h5>
                    </td>
                    <td>70.25 SR</td>
                    <td><input class="w-25 pl-1" value="1" type="number"></td>
                    <td><img src="imgs/book15.jpg" alt=""></td>
                    <td>
                        <h5>The Volcano of Fire</h5>
                    </td>
                </tr>
            </tbody>
        </table>

    </section>

    <section id="cart-bottom" class="container">
        <div class="row">
            <!-- Coupon -->
            <div class="Coupon col-lg-6 col-md-6 col-12 mb-4" style="text-align: right;">
                <div>
                    <h5 >كود الخصم </h5>
                    <p>ادخل الكود اذا كنت تملك واحد</p>
                    <button> استعمل الكود</button>
                    <input type="text" placeholder="Enter coupon" style="margin: 0 15px 0 0;">
                </div>
            </div>
            <!-- Cart total -->
            <div class="total col-lg-6 col-md-6 col-12 ">
                <div>
                    <h5 style="text-align: right;">الفاتوره </h5>
                    <div class="d-flex justify-content-between">
                        <p>273.25 SR</p>
                        <h6>القيمه</h6>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p>20.00 SR</p>
                        <h6>الضريبه</h6>
                    </div>
                    <hr class="second-hr">
                    <div class="d-flex justify-content-between">
                        <p>293.25 SR</p>
                        <h6>الاجمالي </h6>
                    </div>
                    <form method="POST">
                    <input type="submit" name="pay" button style="margin: 0 0 15px 15px;"> الدفع</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!---------------- footer  ------------>
    <section class="footer">
        <div class="card-body text-white">
            <div class="container-fluid text-end">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="footertitle">Book Store</h3>
                        <p class="text-muted text-justify">
                            هي مكتبة لبيع الكتب عبر الإنترنت نعتقد أن المكتبات ضرورية لثقافة صحية. إنها حيث يمكن
                            للمؤلفين التواصل مع القراء ، حيث نكتشف كتّابًا جددًا ، حيث ينجذب الأطفال إلى إثارة القراءة
                            التي يمكن أن تستمر مدى الحياة. هم أيضا مراسي لوسط البلد والمجتمعات. مع تزايد عدد الأشخاص
                            الذين يشترون كتبهم عبر الإنترنت ، أردنا إنشاء طريقة سهلة ومريحة لك للحصول على كتبك ودعم
                            المكتبات في نفس الوقت.
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
                        <p class="text-muted "> لتصلك مقالات اسبوعية من Book Store
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