@extends('front.header')
@section('content')
<div class="wrapper">
    <div class="back-img">
      <h2>Faculty</h2>
      <h6>HOME /  <span> FACULTY</span></h6>


    </div>
      <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div> 
        <div></div>
        <div></div>
        <div></div> 
       
      </div>
   </div>
     <div class="profile-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            
            <div class="section-tittle text-center mb-70">
              <p class="colorblue"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Faculty</p>
                <div class="multicolor-text">
                    <h2 class="section_header highlight">
                   Our Skilled Lecturers
                  </h2>
                </div>  
            </div>
          </div>  
        </div>
        <div class="row">
            <div class="col-md-4 mt-5">
                <div class="card">
                      <img src="{{asset('front/img/narendra_sir.jpeg')}}" alt="logo" class="img-thumbnail">
                      <h4 class="mt-3">Narendra Mergu</h4>
                      <h5>Director</h5>
                      <div class="icon">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-google"></i>
                        <i class="fa fa-linkedin"></i>
                    </div> 
                </div>
            </div>
            <div class="col-md-4 mt-5">
              <div class="card">
                <img src="{{asset('front/img/IMG_20200218_122825.jpg')}}" alt="logo" class="img-thumbnail">
                <h4 class="mt-3">Rajeshwari Ganji</h4>
                <h5>Web Developer</h5>
                <div class="icon">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-google"></i>
                    <i class="fa fa-linkedin"></i>
                </div>    
              </div>
            </div>
            <div class="col-md-4 mt-5">
               <div class="card">
                <img src="{{asset('front/img/narendra_sir.jpeg')}}" alt="logo" class="img-thumbnail">
                <h4 class="mt-3">Nitin Kodam</h4>
                <h5>Director</h5>  
                <div class="icon">
                  <i class="fa fa-facebook"></i>
                  <i class="fa fa-twitter"></i>
                  <i class="fa fa-google"></i>
                  <i class="fa fa-linkedin"></i>
              </div> 
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection