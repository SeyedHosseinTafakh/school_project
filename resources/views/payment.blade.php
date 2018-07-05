<!DOCTYPE HTML>
<html lang="fa">

<head>
    <title>پرداخت شهریه</title>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" >
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<div class="toolbar">
    <div class="container">
        <div class="row">
            <span> راه ارتباطی ما : </span>
            <span> 33552279 – 026 </span>
            <span><a href="">کانال تلگرام ما</a></span>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="logo"><img src="http://mr4.ir/wp-content/uploads/2018/02/logo-2.png"/></div>
            <div class="title"><span>پرداخت شهریه</span></div>
        </div>
    </div>
</div>
<section>
    <div class="container form">
        <div class="row">
            <form action=" {{url('/pardakht')}} " method="post" style="width: 100%;">
                {{@csrf_field()}}
                <div class="row">
                    <div class="col-6 box">
                        <label></label>
                        <label>کدملی : <input type="text" name="student_code_meli" /></label>
                        <label>مبلغ : <input type="number" name="student_amount" /></label>
                    </div>
                    <div class="col-6 box"></div>
                    <div class="col-6 box">
                        <div class="typepay">
                            <label>درگاه پرداخت را انتخاب نمایید</label>
                            <label for="zarinpal"><input type="radio" id="zarinpal" name="payement" value="زرین پال" />درگاه پرداخت زرین پال</label>
                        </div>
                        <label>ایمیل (برای ارسال اطلاعات پرداخت) <input type="text" name="email"  style="float: none"/></label>
                        <label>تلفن همراه (برای ارسال اطلاعات پرداخت) <input type="text"  name="phone" style="float: none"/></label>
                        <input type="submit" value="ثبت نام">
                    </div>
            </form>


        </div>
    </div>
</section>

</body>

</html>