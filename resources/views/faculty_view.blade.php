@extends('header')
@section('content')

            
                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Faculty Details <a class="btn btn-primary" style="margin-left:5%;" href="/faculties/create">Add New</a></h6>
                            
                            <div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Education</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        ?>
                                        @foreach($faculty as $fac)
                                        <tr>
                                            <th scope="row"><php echo $i;?></th>
                                            <td>{{$fac->name}}</td>
                                            <td><img  style="height:100px;width:100px" src="/image/{{$fac->profile}}" alt=""></td>
                                            <td>{{$fac->course}}</td>
                                            <td>{{$fac->contact}}</td>
                                            <td>{{$fac->email}}</td>
                                            <td>{{$fac->education}}</td>
                                            <td><span style="float:left;margin-right:3%;">
                                            <form action="{{route('faculty.destroy',$fac->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form></span>
                                            <span><a href="{{route('faculty.edit',$fac->id)}}" class="btn btn-success">Edit</a></span>
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