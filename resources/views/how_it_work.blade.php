@extends('layouts.app_front')

@section('content')
<div class="banner_mu">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="banner_head_how">HOW IT <span class="how_head">WORK</span></h2>
            <p class="bannerhow_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore commodo viverra maecenas. </p>
            <button class="btn-shop">SHOP NOW </button>
        </div>
        <div class="col-md-6">
            <img class="howban_mu" src="{{asset('/front')}}/images/howban_img.png" alt="">
        </div>
    </div>
</div>

</div>


<!-- bannersectionend -->

<section class="howitwork_mu">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="how_head pb-5">HOW IT<span class="work_head">WORKS ?</span></h4>
            
            <div class="works_content pb-5">
                <img src="/images/newadd1.png" alt="">
                <span class="info_tilemu">GET AN ADDRESS</span><br>
                <p class="info_paramu">Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard</p>
            </div>
            <div class="works_content1 pb-5">
                <img src="/images/newadd2.png" alt="">
                <span class="info_tilemu1">SHOP FORM ANY STORE</span><br>
                <p class="info_paramu1">Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard</p>
            </div>
            <div class="works_content1">
                <img src="/images/newadd3.png" alt="">
                <span class="info_tilemu2">RECEIVE YOUR ITEMS</span><br>
                <p class="info_paramu2">Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard</p>
            </div>

        </div>
        <div class="col-md-5 offset-1">
            <img class="howshow_img" src="{{asset('/front')}}/images/work_imgmu.png" alt="">
        </div>
    </div>
</div>
</section>

<!-- footer -->

 <div>
 <div>
    @endsection