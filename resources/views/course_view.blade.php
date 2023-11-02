@extends('header')
@section('content')

            
                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Course Details <a class="btn btn-primary" style="margin-left:5%;" href="/course/create">Add New</a></h6>
                            
                            <div class="table table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Course Name</th>
                                            <th scope="col">Duration</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Fees</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Document</th>
                                            <th scope="col">Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        ?>
                                        @foreach($course as $cr)
                                        <tr>
                                            <th scope="row">{{$i}}</th>
                                            <td>{{$cr->name}}</td>
                                            
                                            <td>{{$cr->duration}}</td>
                                            <td>{!! $cr->description !!}</td>
                                            <td>{{$cr->fees}}</td>
                                            <td><img src="{{asset('image')}}/{{$cr->course_img}}" style="height:100px;width:100px;"></td>
                                            <td><a href="{{asset('image')}}/{{$cr->document}}">Download PDF</a></td>
                                            <td>{{$cr->status}}</td>
                                            <td><span style="float:left;margin-right:3%;">
                                            <form action="{{route('course.destroy',$cr->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form></span>
                                            <span><a href="{{route('course.edit',$cr->id)}}" class="btn btn-success">Edit</a></span>
                                        </td>
                                        </tr>
                                        <?php
                                        $i++;
                                        ?>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
               @endsection