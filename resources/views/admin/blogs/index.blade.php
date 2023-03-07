@extends('admin.layout.main')
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
                                                <th>User_id</th>
                                                <th>Category_id</th>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Created_at</th>
                                                <th>Updated_at</th>
                                                <th>Actact</th>
                                      
                                            </tr>
                                        </thead>

                                        <tbody>
                                          @if (!empty($blogsList))
                                            @foreach ($blogsList as $key => $item)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->user_id}}</td>
                                                <td>{{$item->category_id}}</td>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->content}}</td>
                                                <td>{{$item->image}}</td>
                                                <td>{{$item->status}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>{{$item->updated_at}}</td>
                                                <td>
                                                    <a href="" class="btn-warning btn-sm mb-md-1">Update</a></div>
                                                    <a onclick="return confirm('Bạn có chắc muốn xóa người dùng này')" href="" class="btn-danger btn-sm ">Delete</a></div>
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
