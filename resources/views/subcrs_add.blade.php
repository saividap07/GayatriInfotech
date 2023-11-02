@extends('header')
@section('content')
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   <form action="/subcrs_store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-12 col-xl-8 m-auto" >
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Course</h6>
                            <div class="form-floating mb-3">
                               <select name="main_id" id="main_id" class="form-control" value="{{old('main_id')}}">
                                    <option value="">Select Course for the sub-course</option>
                                    @foreach($main as $m)
                                    
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                    @endforeach
                               </select>
                                <label for="floatingInput">Course Name</label>
                                @error('name')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="" name="name" value="{{old('name')}}">
                                <label for="floatingInput">Sub-Course Name</label>
                                @error('name')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="Password" name="duration"  value="{{old('duration')}}">
                                <label for="floatingPassword">Duration</label>
                                @error('duration')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="Password" name="fees"  value="{{old('fees')}}">
                                <label for="floatingPassword">Fees</label>
                                @error('fees')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingPassword"
                                    placeholder="Password" name="file">
                                <label for="floatingPassword">Image</label>
                                @error('file')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="floatingPassword"
                                    placeholder="Password" name="document">
                                <label for="floatingPassword">Syallbus PDF</label>
                                @error('document')
                                <span style="color:red;font-size:14px;">{{$message}}</span>
                                @enderror
                            </div>
                            <h6>Description:</h6>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="summernote" style="height: 150px;" name="description">{{old('description')}}</textarea>
                                <label for="floatingTextarea"></label>
                                @error('description')
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