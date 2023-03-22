@extends('layouts.app')

@section('content')

<div class="container">
      <div class="row">
            <div class="col-lg-12 text-center">
                  <h1 class="page-title">Add Student</h1>
            </div>

            <div class="col-lg-12 mt-4">

                  <form action="{{ route('studentList.add') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="row d-grid gap-3">
                              <div class="form-floating">
                                    <input name="name" type="text" class="form-control" id="floatingPassword" placeholder="Student Name">
                                    <label class="label" for="floatingPassword">Name</label>
                              </div>
                              <div class="form-floating">
                                    <input name="age" type="text" class="form-control" id="floatingPassword" placeholder="Age">
                                    <label class="label" for="floatingPassword">Age</label>
                              </div>
                              <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Upload Image</label>
                                    <input name="image" class="form-control form-control-sm" id="formFileSm" type="file">
                              </div>
      
                              <div class="col-lg-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                        </div>

                  </form>

            </div>


            {{-- ==================================student List========================= --}}

            <div class="col-lg-12">
                  <h1 class="mt-4">Student List</h1>
                  <table class="table table-bordered mt-4">
                        <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>

                            <tbody>

                              @foreach ($students as $key => $student)
                                  
                              <tr>
                                    <th scope="row">{{$student->id}}</th>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td>{{ $student->image }}</td>
                                    <td>
                                          @if ($student->status == 'active')
                                                <span><div class="activestatus"></div></span>
                                          @else
                                                <span><div class="deactivestatus"></div></span>
                                          @endif
                                    </td>
                                    <td>
                                          <a href="{{ route('student.delete',$student->id) }}"><i class="fas fa-trash-alt ms-3" style="color: #db0000;"></i></a>
                                          
                                          @if ($student->status == 'active')
                                          <a href="{{ route('student.statusUpdate',$student->id) }}"><i class="fas fa-user-slash ms-3" style="color: #d60000;"></i></a>
                                          @else
                                          <a href="{{ route('student.statusUpdateactive',$student->id) }}"><i class="fas fa-user-alt ms-3" style="color: #03b300;"></i></i></a>
                                          @endif
                                    </td>
                              </tr>

                              @endforeach

                            </tbody>
                  </table>
            </div>


            {{-- ==================================student List========================= --}}



      </div>
</div>

@endsection




@push('css')

<style>
      .page-title{
            padding-top: 10vh;
      }

      .label{
            padding-left: 20px !important;
      }
      .activestatus{
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: rgb(0, 174, 0);
      }
      .deactivestatus{
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: rgb(216, 2, 2);
      }
</style>
      
@endpush