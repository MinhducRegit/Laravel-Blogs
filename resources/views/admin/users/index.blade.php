@extends('admin.layout.main')
@section('css')
<link href="{{asset('assets/plugins/datatables.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">{{$title}}</h4>
                                    
                                       <div class="mb-3 ">
                                       <a href="">
                                            <input type="submit" value="Thêm tài Khoản" class="btn-primary btn mt-3 mb-1 ">
                                        </a>
                                        @if (session('msg'))
                                        <div class="alert alert-success text-center">{{session('msg')}}</div>
                                        @endif
                                       </div>
                                       
                                    
 
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                            <tr class="text-center">
                                                <th>Mã số</th>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Avatar</th>
                                                <th>Gender</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Created_at</th>
                                                <th>Updated_at</th>
                                                <th>Actact</th>
                                      
                                            </tr>
                                        </thead>

                                        <tbody>
                                          @if (!empty($usersList))
                                            @foreach ($usersList as $key => $item)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->password}}</td>
                                                <td>{{$item->avatar}}</td>
                                                <td>{{$item->gender}}</td>
                                                <td>{{$item->role}}</td>
                                                <td>{{$item->status}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>{{$item->updated_at}}</td>
                                                <td class="text-center">
                                                    <a onclick="return confirm('Bạn có chắc muốn xóa người dùng này')" href="" class="btn-danger btn-sm ">Xóa</a>
                                                </td>
                                                
                                            </tr>
                                           @endforeach
                                           @else
                                           <tr>
                                            <td solspan="4">Không có dữ liệu</td>
                                           </tr>
                                          @endif
                                        </tbody>
                                      
                                    </table>
                                    <div class="d-flex justify-content-end mt-3">
                                        {{-- {{$adminList->links()}} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
@endsection
