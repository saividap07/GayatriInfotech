@extends('front.header')
@section('content')
<div class="wrapper">
      <div class="back-img">
        <h2>Gallery</h2>
        <h6>HOME /  <span>GALLERY</span></h6>

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
     <div class="container">
        <div class="image-gallery">
          <div class="row justify-content-center" style="margin-top:50px;">
            <div class="col-xl-7">
              
              <div class="section-tittle text-center mb-70 mt-5">
                <p class="colorblue"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Awesome Memories</p>
                <div class="multicolor-text">
                  <h2><h2 class="section_header highlight">
                    Photo<span>  Gallery</span>
                  </h2></h2>
                </div>  
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{asset('front/img/10285826_375138179345296_4321182143208464565_o.jpg')}}" /></div>
            <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{asset('front/img/11034924_375137959345318_8731757590720311374_o.jpg')}}" /></div>
            <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{asset('front/img/307381011_1942098559315909_490427741649887028_n.jpg')}}"/></div>
            <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{asset('front/img/310750651_1946006678925097_4539892189070358173_n.jpg')}}"/></div>
          <!-- </div>
          <div class="row"> -->
              <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{asset('front/img/310872769_1946004808925284_2973131407462770650_n.jpg')}}"/></div>
              <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{asset('front/img/311155686_1947903588735406_173433534257904070_n.jpg')}}"/></div>
              <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{asset('front/img/891833_125460494313067_108241951_o.jpg')}}"/></div>
              <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{asset('front/img/891833_125460500979733_1649273982_o.jpg')}}"/></div>
          </div>
      </div>
    </div>

@endsection