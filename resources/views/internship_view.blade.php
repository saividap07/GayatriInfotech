@extends('header')
@section('content')

            
                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Course Details <a class="btn btn-primary" style="margin-left:5%;" href="/internship/create">Add New</a></h6>
                            
                            <div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Course Name</th>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">End Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        ?>
                                        @foreach($internship as $int)
                                        <tr>
                                            <th scope="row"><php echo $i;?></th>
                                            <td>{{$int->course}}</td>
                                            <td>{{$int->start_date}}</td>
                                            <td>{{$int->end_date}}</td>
                                            <td><span style="float:left;margin-right:3%;">
                                            <form action="{{route('internship.destroy',$int->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form></span>
                                            <span><a href="{{route('internship.edit',$int->id)}}" class="btn btn-success">Edit</a></span>
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