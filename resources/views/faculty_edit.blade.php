@extends('header')
@section('content')
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   <form action="{{route('faculty.update',$faculty->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-sm-12 col-xl-8 m-auto" >
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Faculty</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="" name="name" value="{{$faculty->name}}">
                                <label for="floatingInput">Name</label>
                                @error('name')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="Password" name="course" value="{{$faculty->course}}">
                                <label for="floatingPassword">Course</label>
                                @error('course')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" name="contact" value="{{$faculty->contact}}">
                                <label for="floatingTextarea">Contact</label>
                                @error('contact')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingPassword"
                                    placeholder="Password" name="email" value="{{$faculty->email}}">
                                <label for="floatingPassword">Email</label>
                                @error('email')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>

                            <p>Current Photo:</p>
                            <img style="height:150px;height:150px" src="/image/{{$faculty->profile}}" alt=""><br>
                            <p>Choose New Profile Photo:</p>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="profile"
                                    name="profile">
                                <label for="floatingPassword">Profile Photo</label>
                                @error('profile')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="Password" name="education" value="{{$faculty->education}}">
                                <label for="floatingPassword">Education</label>
                                @error('document')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            
                            <div class="form-floating mt-3">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- Form End -->


           @endsection