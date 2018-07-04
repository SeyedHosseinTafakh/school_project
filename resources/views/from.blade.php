<!DOCTYPE HTML>
<html lang="fa">

<head>
    <title>فرم پیش ثبت نام</title>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" >
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" />
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
            <div class="title"><span>پیش ثبت نام</span></div>
        </div>
    </div>
</div>
<section>
    <div class="container form">
        <div class="row">
            <form action="{{url('from')}}" method="POST" style="width: 100%;">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-6 box">
                        <label>اطلاعات فردی دانش آموز</label>
                        <label>نام<input type="text" name="name"/></label>
                        <label>نام خانوادگی<input type="text" name="family"/></label>
                        <label>تاریخ تولد
                            <input type="text" style="width: 47px;" placeholder="سال" name="year"/>

                            <select name="month" style="float: left;margin: 0 1px;">
                                <option value="فروردین">فروردین</option>
                                <option value="اردیبهشت">اردیبهشت</option>
                                <option value="خرداد">خرداد</option>
                                <option value="تیر">تیر</option>
                                <option value="مرداد">مرداد</option>
                                <option value="شهرویور">شهرویور</option>
                                <option value="مهر">مهر</option>
                                <option value="آبان">آبان</option>
                                <option value="آذر">آذر</option>
                                <option value="دی">دی</option>
                                <option value="بهمن">بهمن</option>
                                <option value="اسفند">اسفند</option>
                            </select>
                            <select name="day" style="float: left;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="1">12</option>
                                <option value="3">13</option>
                                <option value="4">14</option>
                                <option value="5">15</option>
                                <option value="6">16</option>
                                <option value="7">17</option>
                                <option value="8">18</option>
                                <option value="9">19</option>
                                <option value="10">20</option>
                                <option value="11">21</option>
                                <option value="2">22</option>
                                <option value="3">23</option>
                                <option value="4">24</option>
                                <option value="5">25</option>
                                <option value="6">26</option>
                                <option value="7">27</option>
                                <option value="8">28</option>
                                <option value="9">29</option>
                                <option value="9">30</option>
                                <option value="9">31</option>
                            </select>
                        </label>
                        <label>کد ملی<input type="number" minlength="10" name="codemeli"/></label>
                        <label>دین<input type="text" name="din"/></label>
                        <label>مذهب<input type="text" name="mazhab"/></label>
                        <label>دانش آموز چندمین فرزند خانواده است<input type="number" placeholder="1" name="count-childern"/></label>
                    </div>
                    <div class="col-6 box">
                        <label>شماره سریال شناسنامه</label>
                        <label>سری حرفی<input type="text" minlength="1" name="shenasname-harf"/></label>
                        <label>عدد<input type="number" minlength="2" name="shenasname-adad"/></label>
                        <label>شماره چند رقمی<input type="text" minlength="6" name="shenasname-raghami"/></label>
                    </div>
                    <div class="col-6 box">
                        <label>محل تولد دانش آموز</label>
                        <label>استان<input type="text" name="ostan"/></label>
                        <label>شهرستان<input type="text" name="shahrestan"/></label>
                        <label>روستا/بخش<input type="text" name="rosta"/></label>
                    </div>
                    <div class="col-6 box">
                        <label>محل صدور شناسنامه</label>
                        <label>استان<input type="text" name="sodoreshansame-ostan"/></label>
                        <label>شهرستان<input type="text" name="sodoreshansame-shahrestan"/></label>
                        <label>روستا/بخش<input type="text" name="sodoreshansame-rosta"/></label>
                    </div>
                    <div class="col-6 box">
                        <label>آیا پدر و مادر با هم زندگی می کنند</label>
                        <label><input type="radio" name="vaziyate-tahol-pedarmadar" value="با هم زندگی می کنند"/> با هم زندگی می کنند </label>
                        <label><input type="radio" name="vaziyate-tahol-pedarmadar" value="پدر و مادر از هم جدا شده اند"/> پدر و مادر از هم جدا شده اند </label>
                        <label><input type="radio" name="vaziyate-tahol-pedarmadar" value="پدر و مادر فوت شده اند "/> پدر و مادر فوت شده اند </label>
                        <label><input type="radio" name="vaziyate-tahol-pedarmadar" value="فوت پدر "/> فوت پدر </label>
                        <label><input type="radio" name="vaziyate-tahol-pedarmadar" value="فوت مادر"/> فوت مادر </label>
                    </div>

                    <div class="col-6 box">
                        <label>وضعیت جسمانی دانش آموز</label>
                        <input type="checkbox" name="vaziyate-jesmaniye-student" value="سالم">سالم<br>
                        <input type="checkbox" name="vaziyate-jesmaniye-student" value="معلول جسمی حرکتی">معلول جسمی حرکتی<br>
                        <input type="checkbox" name="vaziyate-jesmaniye-student" value="ناشنوا">ناشنوا<br>
                        <input type="checkbox" name="vaziyate-jesmaniye-student" value="نیمه شنوا">نیمه شنوا<br>
                        <input type="checkbox" name="vaziyate-jesmaniye-student" value="نیمه بینا">نیمه بینا<br>
                        <input type="checkbox" name="vaziyate-jesmaniye-student" value="نابینا">نابینا<br>
                    </div>
                    <div class="col-6 box">
                        <label>وضعیت مسکن</label>
                        <label><input type="radio" name="vaziyate-maskan" value="منزل شخصی"/> منزل شخصی</label>
                        <label><input type="radio" name="vaziyate-maskan" value=" منزل استیجاری"/> منزل استیجاری</label>
                        <label><input type="radio" name="vaziyate-maskan" value="منزل سازمانی"/> منزل سازمانی</label>
                        <label><input type="radio" name="vaziyate-maskan" value="سایر"/> سایر</label>
                    </div>
                    <div class="col-6 box">
                        <label>آدرس منزل*</label>
                        <label>استان<input type="text" name="adress-ostan"/></label>
                        <textarea type="text" placeholder="کرج،مهرویلا،..." name="adress-address"></textarea>
                        <label>کدپستی<input type="number" minlength="10" name="adress-codposti"/></label>
                        <label>تلفن منزل<input type="number" placeholder="11" name="adress-phone-home"/></label>
                    </div>

                    <div class="col-6 box">
                        <label>تلفن ضروری*</label>
                        <label>نام و نام خانوادگی<input type="text" name="phone-necessary-name"/></label>
                        <label>تلفن ثابت<input type="tel" placeholder="02633552279" name="phone-necessary-tel"/></label>
                        <label>تلفن همراه<input type="phone" placeholder="0912999999" name="phone-necessary-phone"/></label>
                        <label>نسبت با دانش آموز<input type="text" name="phone-necessary-nesbat"/></label>
                    </div>
                    <div class="col-6 box">
                        <label>اطلاعات پدر دانش آموز*</label>
                        <label>نام<input type="text" name="father-name"/></label>
                        <label>نام خانوادگی<input type="text" name="father-fammily"/></label>
                        <label>تلفن همراه<input type="text" name="father-phone"/></label>
                        <label>کد ملی <input type="text" name="father-codemelli"/></label>
                        <label>شغل<input type="text" name="father-job"/></label>
                        <label>میزان تحصیلات<input type="text" name="father-education"/></label>
                        <label>آدرس محل کار<input type="text" name="father-adress-job"/></label>
                        <label>تلفن محل کار<input type="text" name="father-adress-phone"/></label>
                    </div>
                    <div class="col-6 box">
                        <label>اطلاعات مادر دانش آموز*</label>
                        <label>نام<input type="text" name="mother-name"/></label>
                        <label>نام خانوادگی<input type="text" name="mother-fammily"/></label>
                        <label>تلفن همراه<input type="text" name="mother-phone"/></label>
                        <label>کد ملی<input type="text" name="mother-codemelli"/></label>
                        <label>شغل<input type="text" name="mother-job"/></label>
                        <label>میزان تحصیلات<input type="text" name="mother-education"/></label>
                        <label>آدرس محل کار<input type="text" name="mother-adress-job"/></label>
                        <label>تلفن محل کار<input type="text" name="mother-adress-phone"/></label>
                    </div>
                    <div class="col-12 box sibli">
                        <label>اطلاعات افراد خانواده (خواهر/برادر)*</label>
                        <div class="col-12">
                            <ul class="row dec">
                                <li class="col">نام </li>
                                <li class="col">نام خانوادگی </li>
                                <li class="col">جسنیت</li>
                                <li class="col">وضعیت تاهل </li>
                                <li class="col">میزان تحصیلات</li>
                                <li class="col">شغل</li>
                                <li class="col">کد ملی</li>
                            </ul>
                            <div class=" row" >
                                <input type="text" class="col" name="sibling-name"/>
                                <input type="text" class="col" name="sibling-family"/>
                                <input type="text" class="col" name="sibling-gender"/>
                                <input type="text" class="col" name="sibling-vaziyate-tahol"/>
                                <input type="text" class="col" name="sibling-edu"/>
                                <input type="text" class="col" name="sibling-job"/>
                                <input type="text" class="col" name="sibling-codemeli"/>
                            </div>
                            <div class="col-12" style="text-align: center">
                                <span style="padding: 2px 25px;background: #eee;margin: 5px 0;display: inline-block;border-radius: 4px;color: #333;cursor: pointer;">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">

                        <div class="pay">
                            <span>پیش پرداخت</span>
                            <label>قیمت :10,000,000 ریال</label>
                        </div>
                        <!--- <select name="carlist">
                           <option value="volvo">Volvo</option>
                           <option value="saab">Saab</option>
                           <option value="opel">Opel</option>
                           <option value="audi">Audi</option>
                       </select> -->
                        <div class="typepay">
                            <label>نوع پرداخت را انتخاب نمایید</label>
                            <label for="zarinpal"><input type="radio" id="zarinpal" name="online" />انلاین</label>
                            <label for="huey"><input type="radio" id="huey" name="online" />پرداخت نقدی (چک یا کارت به کارت و ...)</label>
                        </div>
                        <label>ایمیل (برای ارسال اطلاعات پرداخت) <input type="text" name="email" style="float: none"/></label>
                        <input type="submit" value="ثبت نام">
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>
<script type="text/javascript">
    $(function () {
        $('.datepicker').datetimepicker();
    });
</script>

</body>

</html>