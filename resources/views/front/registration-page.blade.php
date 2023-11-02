@extends('front.header')
@section('content')

<div class="register-page">
      <div class="container p-5">
        <div class="title">Registration</div>
        <form action="/registeruser" method="post" ecntype="multipart/form-data">
            @csrf
            <div class="user_details row">
                <div class="input_pox col-md-7 mt-4" style="margin:auto">
                    <span class="datails">Full Name</span>
                    <input type="text" name="name" placeholder="enter your Full name" value="{{old('name')}}" class="name">
                   
                    @error('name')
                        <span class="text-danger">
                         {{$message}}                    
                         </span>
                    @enderror
                   
                </div>
                <div class="input_pox col-md-7 mt-4" style="margin:auto">
                    <span class="datails">Mobile Number</span>
                    <input type="text" name="number" id="number" class="number" placeholder="enter your Mobile Number" value="{{old('number')}}">
                   
                    @error('number')
                    <span class="text-danger">
                        {{$message}}                    
                    </span>
                    @enderror
                   
                </div>
                <div class="input_pox col-md-7 mt-4" style="margin:auto">
                    <span class="datails">Email</span>
                    <input type="text" name="email" class="email" placeholder="enter your Email" value="{{old('email')}}">
                   
                    @error('email')
                        <span class="text-danger">
                            {{$message}}                    
                         </span>
                        @enderror
                   
                </div>
                <div class="input_pox col-md-7 mt-4" style="margin:auto">
                    <span class="datails">Profile</span>
                    <input type="file" name="profile" class="form-control profile">
                   
                    @error('profile')
                        <span class="text-danger">
                            {{$message}}                   
                         </span>
                    @enderror
                   
                </div>
                <div class="input_pox col-md-7 mt-4" style="margin:auto">
                    <form action="">
                        <span class="datails">Degree</span>
                        <select id="degree" name="degree" class="degree">
                          <option value="Diploma">Diploma</option>
                          <option value="Engineering">Engineering</option>
                          <option value="BCA">BCA</option>
                          <option value="MCA">MCA</option>
                          <option value="B.Sc">B.Sc</option>
                        </select>
                       
                    @error('degree')
                        <span class="text-danger">   
                            {{$message}}                    
                         </span>
                    @enderror
                   
                    </form>  
                </div>
                <div class="input_pox col-md-7 mt-4 bran" id="bran" style="margin:auto;">
                    <form action="">
                        <span class="datails">Branch</span>
                        <select id="branch" name="branch" class="branch">
                          <option value="CS">Computer Science</option>
                          <option value="IT">IT</option>
                          <option value="Civil">Civil</option>
                          <option value="Mech">Mechanical</option>
                          <option value="EE">Electrical</option>
                          <option value="ENTC">ENTC</option>
                        </select>
                       
                    @error('branch')
                        <span class="text-danger">   
                            {{$message}}                    
                         </span>
                    @enderror
                   
                    </form>  
                </div>
                <div class="input_pox col-md-7 mt-4" style="margin:auto">
                    <form action="">
                        <span class="datails">Year</span>
                        <select id="year" name="year" class="year">
                          <option value="1">1st Year</option>
                          <option value="2">2nd Year</option>
                          <option value="3">3rd Year</option>
                          <option value="4">4th Year</option>
                          <option value="passout">Passout</option>
                        </select>
                       
                    @error('grad')
                        <span class="text-danger">   
                            {{$message}}                    
                         </span>
                    @enderror
                   
                    </form>  
                </div>
               
            </div>
            <div class="input_pox col-md-7 mt-4" style="margin:auto">
                <span class="datails" style="margin-top: 17px;">Gender</span><br>
                <input type="radio" name="gender" value="male" class="gender">
                <label for="male">Male</label>

                <input type="radio" name="gender" value="female" class="gender">
                <label for="female">Female</label>      
            </div><br>
            <div class="mb-5 mt-2 col-md-7" style="margin:auto">

                    <div id="recaptcha-container"></div>

            </div>

            <!-- <div class="button mt-4"> -->
                <input type="button" id="sendCode" class="btn btn-primary" style="margin-left:235px;margin-top:-50px" value="Register">
              <!-- </div> -->
              <div id="error" class="text-danger"></div>
        <div id="sentMessage" class="text-success"></div>


        <div class="mb-5 mt-5 col-md-7" style="margin:auto">
        <label for="verify">Add Verification Code</label>
            <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
           
                <input type="text" id="verification" class="form-control" placeholder="Verification code">
                <button type="button" class="btn btn-danger mt-3" id="verifycode">Verify code</button>
            
        </div>
        </form>

        
    </div>
    
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){

        $("#degree").on("change", function(){

            var degree = $(".degree").val();

                if(degree=="Diploma" || degree=="Engineering"){
                        $(".bran").css("display","block");
                }

                else if(degree=="BCA" || degree=="MCA" || degree="B.Sc") {
                    $(".bran").css("display","none");
                    }
        });
       


        $("#sendCode").on("click",function(){
            console.log("testing");
            var num = $('#number').val();
            var number = '+91'+ num;

            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult){

                window.confirmationResult = confirmationResult;

                coderesult = confirmationResult;

                $('#sentMessage').text('Otp Sent Successfully');
                $('#sentMessage').show();

            }).catch(function(error){
                $('#error').text(error.message);
                $('#error').show();
            });
        });

        $("#verifycode").on("click",function(){
            var code = $("#verification").val();
            coderesult.confirm(code).then(function (result) {
                var user = result.user;
                // console.log(user);
                $("#successOtpAuth").text("Auth is successful");
                $("#successOtpAuth").show();
                var name=$(".name").val();
                console.log(name);
               
                var number=$(".number").val();
    
                var email=$(".email").val();

                var degree=$(".degree").val();

                var year=$(".year").val();

                var gender=$(".gender").val();               

                var formData = new FormData();

                var profile = $("input[type=file]")[0].files[0];

                formData.append('name',name);
                formData.append('number',number);
                formData.append('email',email);
                formData.append('profile',profile);
                formData.append('degree',degree);
                formData.append('year',year);
                formData.append('gender',gender);


                // data={
                //     "name":name,
                //     "email":email,
                //     "number":number,
                //     "grad":grad,
                //     "year":year,
                //     "gender":gender,
                //     "profile":profile
                // };

                $.ajax({
                    method:"post",
                    url:"/registeruser",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                                                                                                                                                                                                
                    },
                    data:formData,
                    processData: false,
                    contentType: false,
                    success:function(data){
                        console.log(data);
                    },
                    error:function(data){
                        console.log(data);
                    }
                })
                
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
                console.log("error");
            });
        });
    });
</script>

@endsection 