@extends('layouts.app_front')
@section('content')
<div class="banner_mu">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="banner_head">ABOUT<span class="aboutus_head">US</span></h2>
                <p class="bannerabout_para">Frequent Deliver is a trusted community for people to be able to shop from anywhere in the world. Travelers help shoppers from all around the world to get their items delivered and shop conveniently like there are no borders. </p>
                <button class="btn-shop">SHOP NOW </button>
            </div>
            <div class="col-md-6">
                <img class="banimg_mu" src="{{asset('/front')}}/images/banimg.png" alt="">
            </div>
        </div>
    </div>
</div>


<div class="worksection_mu">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="ab_para">With our new mobile application “Fredel” or our website <a href="http://www.frequentdeliver.com">frequentdeliver.com</a>, everyone can shop online from more than 20 countries in the world and receive their items with affordable and trusted delivery after our travelers accept and receive their packages regardless of where they live.<br><br>
                People can dive into shopping action in USA to catch Black Friday deals or Christmas specials, they can buy a classy watch from Switzerland or handmade rug from Turkey with Fredel, they can buy an elegant souvenir from Egypt.
                <br><br>
                Frequent Deliver helps connecting people to shop from various countries, at great prices, in more than 20 countries. And with world-class customer service and a growing community of users, Fredel is the easiest way for people to monetize their extra space and open it to an audience of millions.
                </p>
            </div>
            <div class="col-md-5 offset-1 abcol_mu">
                <img class="ab_img" src="{{asset('/front')}}/images/v.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- how it works end -->


<!-- our team section -->
<section class="ourteam">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5>PROFESSIONAL EXPERIENCES</h5>
                <h3>Our Team</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('/front')}}/images/t1.png" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('/front')}}/images/t2.png" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('/front')}}/images/t3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection