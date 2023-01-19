<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setup profile</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/admin/dist/css/adminlte.min.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet"
        media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
        integrity="sha512-XJ3ntWHl40opEiE+6dGhfK9NAKOCELrpjiBRQKtu6uJf9Pli8XY+Hikp7rlFzY4ElLSFtzjx9GGgHql7PLSeog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset("css/profile_form.css") }}">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('setup_profile.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <h2 class="fs-title">Profile Information: </h2>
                        @if(Session::has('success'))
                            @if(Session::get('success') == true)
                              <div class="alert alert-success" role="alert">
                                {{Session::get('message')}}
                              </div>
                              @elseif(Session::get('success') == false)
                              <div class="alert alert-success" role="alert">
                                {{Session::get('message')}}
                              </div>
                            @endif
                        @endif
                    </div>
                    <div class="col-md-12">
                        <div class="profile-pic">
                            @if(!empty(auth::user()->profile_image))
                            <img alt="User Pic" src="{{ auth::user()->profile_image_url."/".auth::user()->profile_image }}"
                                id="profile-image1" height="200">
                            @else
                            <img alt="User Pic" src="https://d30y9cdsu7xlg0.cloudfront.net/png/138926-200.png"
                                id="profile-image1" height="200">
                             @endif

                            <input id="profile-image-upload" class="hidden" type="file" name="profile_pic" onchange="previewFile()">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name: *</label>
                            <input type="text" id="exampleInputEmail1" class="form-control" name="F_name"
                                value="{{ Auth::user()->f_name }}" placeholder="First Name" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail2">Last Name: *</label>
                            <input type="text" id="exampleInputEmail2" class="form-control" name="l_name"
                                value="{{ Auth::user()->l_name }}" placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email: *</label>
                            <input type="email" id="exampleInputEmail3" disabled class="form-control" name="email"
                                value="{{ Auth::user()->email }}" placeholder="Email Id" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail4">Phone Number: *</label>
                            <input type="tel" id="exampleInputEmail4" class="form-control" name="phone"
                                value="{{ Auth::user()->phone }}" placeholder="phone" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail5">Occupation</label>
                            <input type="text" id="exampleInputEmail5" value="{{  auth::user()->occupation }}" class="form-control" name="occupation"
                                placeholder="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail6">Birthday</label>
                            <input type="date" id="exampleInputEmail6" class="form-control" name="dob"
                              placeholder="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="fieldlabels">Gender</label>  <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input @if(Auth::user()->gender == "male") checked @endif type="radio" value="male" id="customRadioInline1" name="gender" class="custom-control-input">
                            <label  class="custom-control-label" for="customRadioInline1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input @if(Auth::user()->gender == "female") checked @endif type="radio" value="female" id="customRadioInline2" name="gender" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Female</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input  @if(Auth::user()->gender == "other") checked @endif type="radio" value="other" id="customRadioInline3" name="gender" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">Other</label>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <label class="fieldlabels">Newsletter Membership </label>  <br>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" value="Yes" name="customRadioInline1" class="custom-control-input">
                        </div>
                    </div> --}}
                    <div class="col-md-7 mt-5">
                        <div class="form-group">
                            <label for="exampleInputEmail7">Facebook</label>
                            <input type="url" id="exampleInputEmail7" value="{{  auth::user()->facebook }}"  class="form-control" name="facebook"
                                 placeholder="" />
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="exampleInputEmail8">Tweeter</label>
                            <input type="url" id="exampleInputEmail8" value="{{  auth::user()->tweeter }}"  class="form-control" name="tweeter"
                             placeholder=" " />
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="exampleInputEmail9">Instagram</label>
                            <input type="url" id="exampleInputEmail9" value="{{  auth::user()->insta }}" class="form-control" name="insta"
                                 placeholder="" />
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="exampleInputEmail10">linkdin</label>
                            <input type="url" id="exampleInputEmail10" value="{{  auth::user()->linkdin }}" class="form-control" name="linkdin"
                             placeholder="" />
                        </div>
                    </div>
                    <div class="col-md-7">
                       <button class="btn btn-default btn-lg">Save</button>
                    </div>
                </div>
            </form>
        </div>
        
</body>
<script src="{{asset('/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script>
    function previewFile() {
        var preview = document.querySelector('img');
        var file = document.querySelector('input[type=file]').files[0];
        var reader = new FileReader();

        reader.addEventListener("load", function () {
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }
    $(function () {
        $('#profile-image1').on('click', function () {
            $('#profile-image-upload').click();
        });
    });


</script>

</html>