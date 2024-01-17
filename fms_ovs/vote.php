<?php 
    session_start();

       if (!isset($_SESSION['std_id'])) {
        header("Location: index.php");
       } 
    // $_SESSION['std_id'] = "6210513061";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Vote | FMS Online Voting System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="css/vote-button.css">

    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
    <style>
        li, input, .title, .title-desc, .btn, .button-choice, .modal-title, .modal-body {font-family: 'Prompt';}
        .fa-circle-o {
            color: yellow; 
            top: 50%; 
            left: 50%; 
            position: absolute; 
            transform: translate(-50%, -50%);
            font-size: 165px;
        }

    </style>
</head><!--/head-->

<body>
	<header id="header">
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <h1><img src="images/logo_fms.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">หน้าแรก</a></li>
                        <li class="dropdown"><a href="#"><?php echo $_SESSION['std_id']; ?> <i class="fas fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="php/sign-out.php">Sign Out</a></li>
                            </ul>
                        </li>                 
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 style="color :white" class="title">ลงคะแนนโหวต/Cast Your Vote</h1>
                            <p  style="color :yellow" class="title-desc" style="color:Red;" >ขณะนี้เวลา 
                                <span id="clock"></span>
                                <!-- เหลือเวลาลงคะแนนโหวต 8.00 ชม. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <center><div class="textbox" ><br>
                    <h1 style="background-color : #cc99ff; color : white;" >FMS UTOPIA</h1>
                </div></center>
                <div class="portfolio-items padding-top">
                    <div class="col-sm-12 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb logo-image">
                                    <img src="./images/group/samo46/samo_46.png" width="700px" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ข้อมูลพรรค -->
                    <div class="button-choice" align="center">
                        <button type="button" class="btn-1" data-toggle="modal" data-target="#exampleModalLong">
                        ข้อมูลพรรค
                        </button>
                        <button type="button" class="btn-1" data-toggle="modal" data-target="#exampleModal">
                        สมาชิกพรรค
                        </button>
                    </div>

                    <!-- Dailog ข้อมูลพรรค -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color : #cc99ff;" align="center">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                        <h1 class="modal-title" id="exampleModalLongTitle" style="color : white;">นโยบายของพรรค</h1>
                                </div>
                                <div align="center">
                                    <img src="./images/group/samo46/samo_46.png" width="250px" height="250px">
                                </div>
                                <div class="modal-body">
                                    <div align="left">
                                        <label style="font-size: 18px;">ความหมายสัญลักษณ์</label>
                                        <div style="font-size: 16px;">
                                            <p>FMS &nbsp;:&nbsp; เป็นตัวอักษรย่อของชื่อคณะวิทยาการจัดการในภาษาอังกฤษ โดยย่อมาจาก Faculty of Management Sciences</p>
                                            <p>FMS UTOPIA &nbsp;:&nbsp; คือ เมืองที่มีแต่ความดีงาม ความยุติธรรม เป็นระเบียบเรียบร้อย มีประชากรที่เป็นมิตร เป็นเสมือนสังคมในอุดมคติของใครหลายๆคน ทั้งด้านการปกครอง กฎหมาย การจัดระเบียบทางสังคม</p>
                                            <p>1. ดาวสิงโต 9 ดวง สื่อถึงการรวมตัวกันของชาวคณะวิทยาการจักการทั้งเก้าสาขา ทั้งยังประกอบด้วยดาวเหนือซึ่งเปรียบเสมืนเข็มทิศที่ใช้นำทางชาวคณะวิทยาการจักการไปสู่เป้าหมาย</p> 
                                            <p>2. พังงาเรือ สื่อถึงสโมสรนักศึกษาที่คอยควบคมหางเสือของเรือ ซึ่งเป็นการนำพาไปสู่เป้าหมาย</p>
                                            <p>3. สิงห์หน้าตรง หมายถึง การมองการณ์ไกลและการก้าวไปข้างหน้า ทั้งยังสี่อถึงความตั้งใจอย่างแน่วแน่ที่จะทำเป้าหมายให้สำเร็จลุล่วง</p>
                                            <p>4. เกลียวคลื่น สื่อถึงอุปสรรคในการทำงานที่ต้องพบเจอ เพื่อเป็นสิ่งเตือนใจว่าการทำงานย่อมมีอุปสรรคเสมอ แต่สุดท้ายก็ผ่านอุปสรรคเหล่านั้นมาได้</p>
                                            <p>5. วงกลมซ้อนทับ สี่อถึงการที่บุคคลหลากหลายเข้ามาอยู่ร่วมกันและทุกคนให้ความเครพในความแตกต่าง ทำให้เราอยู่ร่วมกันภายให้สังคมเดียวกันได้อย่างมีความสุข</p>
                                        </div>
                                        
                                        <label style="font-size: 18px;">วิสัยทัศน์ของพรรค</label>
                                        <div style="font-size: 16px;">
                                            <p>ใช้หลักการทำงานของ STE CO (Support, Together, Equity,Challenges,Opportunity) คือ ช่วยเหลือเกื้อกูล ร่วมทุกข์ร่วมสุข เท่าเทียมอย่างให้เกียรติ ท้าทายความสามารถให้โอกาสพัฒนา มุ่งเน้นไปสู่สังคมอันดีงาม มีความเป็นระเบียบเรียบร้อย มีนักศึกษาที่เป็นมิตร เสมือนสังคมในอุดมคติ ทั้งด้านศาสตร์การบริหารและการมีระเบียบทางสังคมของคณะวิทยาการจัดการ</p>
                                        </div>

                                        <label style="font-size: 18px;">พันธกิจของพรรค</label>
                                        <div style="font-size: 16px;">
                                            <p>1. ส่งเสริมการมีส่วนร่วมในการทำกิจกรรมของนักศึกษาคณะวิทยาการจักการ</p>
                                            <p>2. มั่งเน้นการแก้ปัญหาอย่างเป็นระบบเพื่อส่งเสริมให้การทำงานมีประสิทธิภาพมากยิ่งขึ้น</p>
                                            <p>3. เปิดพื้นที่ให้นักศึกษาได้แสดงความคิดเห็น เพื่อนำความคิดเห็นที่ได้มาสร้างสรรค์กิจกรรม เพื่อตอบสนองความต้องการของนักศึกษาคณะวิทยาการจักการ</p>
                                        </div>
                                        
                                        <label style="font-size: 18px;">นโยบายของพรรค</label>
                                        <div style="font-size: 16px;">
                                            <p>1. นโยบาย Talk Tak With Samo: การรับฟังถึงปัญหาและความคิดเห็นต่างๆ เพื่อนำมาแก้ไขผ่านรูปแบบกิจกรรม โดยการปฏิบัติงานของสโมสรนักศึกษาคณะวิทยาการจักการ</p>
                                            <p>2. พี่ว่าไง ห้องว่างั้น : สานต่อกิจกรรมเดิมเพื่อให้นักศึกษามีส่วนร่วมในการทำกิจกรรม รวมทั้งต่อยอดและปรับเปลี่ยนรูปแบบกิจกรรมให้มีความโมเดิร์นกับความเป็นเอกลักษณ์ของนักศึกษาคณะวิทยาการจักการ</p>
                                            <p>3. Striking FMS : ร่วมกันออกแบบกิจกรรมเพื่อมุ่งเน้นไปทางด้านสังคมแห่งความสุขภายในคณะวิทยาการจัดการ โดยตั้งอยู่บนพื้นฐานความเป็นเอกลักษณ์และคิดสร้างสรรค์</p>
                                            <p>4. SAMO NEWS : ส่งสริมการประชาสัมพันธ์ กระจายข่าวสารที่เข้าถึงนักศึกษาทุกคน ทั้งภายนอกและภายในคณะ โดยมีการนำเสนอในรูปแบบใหม่</p>
                                        </div>

 
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color : #ff5757; color : white; font-size : 20px; width:100px; height:50px">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dailog สมาชิกพรรค -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content " >
                                <div class="modal-header" style="background-color : #cc99ff;" align="center">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h1 class="modal-title" id="exampleModalLongTitle" style="color : white;">สมาชิกของพรรค</h1>
                                </div>
                                <div class="modal-body" align="center" style="font-size: 18px;">
                                    <div>
                                        <img src="./images/group/samo46_h/1) นายก.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>ซีล</p>
                                        <p>ชโนดม เหมทานนท์ </p>
                                        <p>ผู้ลงสมัครตำแหน่งนายกสโมสรนักศึกษา</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/2) อุปใน.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>แตงโม</p>
                                        <p>ปวีณ์สุดา อำพะนะ </p>
                                        <p>ผู้ลงสมัครตำแหน่งอุปนายกฝ่ายกิจการภายใน</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/3) อุปนอก.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>ภูมิ</p>
                                        <p>ภูริวัจน์ ติเสส </p>
                                        <p>ผู้ลงสมัครตำแหน่งอุปนายกฝ่ายกิจการภายนอก</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/4) เลขานุการ.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>ถุงแป้ง</p>
                                        <p>วณิดา อินทรนิมิต</p>
                                        <p>ผู้ลงสมัครตำแหน่งเลขานุการ</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/5) เหรัญญิก.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>แพรว</p>
                                        <p>ปฐมาวดี สุวรรณสิงห์ </p>
                                        <p>ผู้ลงสมัครตำแหน่งเหรัญญิก</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/7) สวัสดิการ.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>เอ้</p>
                                        <p>ไกรวิชญ์ สาโส๊ะ  </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายสวัสดิการ</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/6) ประชาสัมพันธ์.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>โดนัท</p>
                                        <p>ปุณยนุช ประดิษฐ์วิริยะกุล </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายประชาสัมพันธ์</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/14) ประเมินผล.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>แนน</p>
                                        <p>บุญธิตา ปานนุ่ม </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายประเมินผล</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/10) วิชาการ.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>วิลา</p>
                                        <p>วิลาสินี ทิพย์ยอและ </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายวิชาการ</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/12) ข้อมูลกิจกรรม .JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>ปอย</p>
                                        <p>วริสา รัตนพันธ์ </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายข้อมูลกิจกรรมนักศึกษา</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/11) ศิลปวัฒนธรรม.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>แตงกวา</p>
                                        <p>ณัฐกฤตา ดอกคําใต้  </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายศิลปวัฒนธรรม</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/9) กีฬา.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>นะนาย</p>
                                        <p>เรืองยศ รังษีโกศัย </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายกีฬา</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/13) เทคโนโลยีสารสนเทศ.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>อิม</p>
                                        <p>อติวัณณ์ อนุมณี </p>
                                        <p>ผู้ลงสมัครตำแหน่งฝ่ายงานเทคโนโลยีสารสนเทศ</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/8) พัสดุ.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>แพม</p>
                                        <p>ปิยรัตน์ ยังแก้ว </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายพัสดุ</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/16) สถานที่.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>ณัฐ</p>
                                        <p>ณัฐิฎา พิทักษ์จินดา </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายสถานที่</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/17) สาธารธสุข.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>จีจี้</p>
                                        <p>อัจสมีดา พ่อศรีชา </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายสาธารณสุข</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/15) สันทนาการ.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>จ๊อบ</p>
                                        <p>ธนภัทร บัวมาก </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายสันทนาการ</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/19) จัดซื้อจัดจ้าง.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>ขิง</p>
                                        <p>ณชฎา จันทวี </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายจัดซื้อจัดจ้าง</p>
                                    </div>
                                    <br>
                                    <!-- <div>
                                        <img src="images/group/19.jpg" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>เอิง</p>
                                        <p>ปภาวรินทร์ ศรีทอง</p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายกราฟิกและดีไซน์</p>
                                    </div>
                                    <br> -->
                                    <div>
                                        <img src="images/group/samo46_h/18) ธุรการ.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>ไอซ์</p>
                                        <p>ชนิศา ทิพย์มณเฑียร </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายธุรการ</p>
                                    </div>
                                    <br>
                                    <div>
                                        <img src="images/group/samo46_h/20) ครีเอทีฟ.JPG" class="img-fluid" style="max-width: 45%; max-height: 50%;" alt="">
                                        <p>ใบหยก</p>
                                        <p>เขมิสรา พิรุณ </p>
                                        <p>ผู้ลงสมัครตำแหน่งประธานฝ่ายครีเอทีฟ</p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color : #ff5757; color : white; font-size : 20px; width:100px; height:50px">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb logo-image">
                                    <i class="fa fa-circle-o" id="check-candidate-1"></i>
                                    <img href="#"  id="btn-vote-1" src="images/candidate/1.png" class="img-responsive" alt="">
                                </div>
                            </div>
                            <div class="portfolio-info text-center">
           
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 portfolio-item mockup folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb logo-image">
                                    <i class="fa fa-circle-o" id="check-candidate-2"></i>
                                    <img href="#" src="images/candidate/2.png" class="img-responsive"  id="btn-vote-2" alt="">
                                </div>
                            </div>
                            <div class="portfolio-info text-center">
               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 portfolio-item mockup folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb logo-image">
                                    <i class="fa fa-circle-o" id="check-candidate-3"></i>
                                    <img href="#" src="images/candidate/3.png" class="img-responsive" id="select-none" alt="">
                                </div>
                            </div>
                            <div class="portfolio-info text-center">
                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-->

    <section id="submit-vote">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 text-center">
                    <form id="submit-vote-form" name="submit-vote-form" method="post" action="vote_op.php">
                        <input type="hidden" id="txt-vote" name="txt-vote">                   
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="ยืนยันการลงคะแนน">
                        </div>
                    </form>
                   
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </section>

    <footer id="footer2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; <a href="https://www.fms.psu.ac.th/">FMS@PSU</a> 2020. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script>
        var myVar = setInterval(function() {
            myTimer();
        }, 1000);

        function myTimer() {
            var d = new Date();
            document.getElementById("clock").innerHTML = d.toLocaleTimeString();
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#check-candidate-1').hide();
            $('#check-candidate-2').hide();
            $('#check-candidate-3').hide();
            $('#txt-vote').val("");
            $('input[type="submit"]').prop("disabled", true);
        });
        $("#btn-vote-1").click(function(){
            $('#check-candidate-1').show();
            $('#check-candidate-2').hide();
            $('#check-candidate-3').hide();
            $('#txt-vote').val("1");
            $('input[type="submit"]').prop("disabled", false);
        });
        $("#btn-vote-2").click(function(){
            $('#check-candidate-2').show();
            $('#check-candidate-1').hide();
            $('#check-candidate-3').hide();
            $('#txt-vote').val("2");
            $('input[type="submit"]').prop("disabled", false);
        });
        $('#select-none').click(function(){
            $('#check-candidate-3').show();
            $('#check-candidate-1').hide();
            $('#check-candidate-2').hide();
            $('#txt-vote').val("0");
            $('input[type="submit"]').prop("disabled", false);
        });
    </script>
</body>
</html>
