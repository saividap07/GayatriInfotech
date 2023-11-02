@extends('header')
@section('content')
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   <form action="{{route('internship.update',$internship->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-sm-12 col-xl-8 m-auto" >
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Course</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="" name="name" value="{{$internship->course}}">
                                <label for="floatingInput"> Internship Course Name</label>
                                @error('name')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingPassword"
                                    placeholder="Password" name="start"  value="{{$internship->start_date}}">
                                <label for="floatingPassword">Start Date</label>
                                @error('start')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingPassword"
                                    placeholder="Password" name="end"  value="{{$internship->end_date}}">
                                <label for="floatingPassword">End Date</label>
                                @error('end')
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