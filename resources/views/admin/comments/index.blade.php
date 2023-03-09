@extends('admin.layout.main')
@section('content')
<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">{{__('admin.title-comment')}}</h4>
                                    
                                       <div class="mb-3 ">
                                       <a href="">
                                        <button type="submit" class="btn-primary btn mt-3 mb-1 ">{{__('admin.more-acount')}}</button>
                                        </a>
                                        @if (session('msg'))
                                        <div class="alert alert-success text-center">{{session('msg')}}</div>
                                        @endif
                                       </div>
                                       
                                    
 
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                            <tr class="text-center">
                                                <th>{{__('column_name.sst')}}</th>
                                                <th>{{__('column_name.id')}}</th>
                                                <th>{{__('column_name.user_id')}}</th>
                                                <th>{{__('column_name.blog_id')}}</th>
                                                <th>{{__('column_name.content')}}</th>
                                                <th>{{__('column_name.created_at')}}</th>
                                                <th>{{__('column_name.updated_at')}}</th>
                                                <th>{{__('column_name.actact')}}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          @if (!empty($commentsList))
                                            @foreach ($commentsList as $key => $item)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->user_id}}</td>
                                                <td>{{$item->blog_id}}</td>
                                                <td>{{$item->content}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>{{$item->updated_at}}</td>
                                                <td>
                                                    <a href="" class="btn-warning btn-sm mb-md-1">{{__('button.update')}}</a></div>
                                                    <a onclick="return confirm('Bạn có chắc muốn xóa người dùng này')" href="" class="btn-danger btn-sm ">{{__('button.delete')}}</a></div>
                                                 </td>
                                                
                                            </tr>
                                           @endforeach
                                           @else
                                           <tr>
                                            <td solspan="4">{{ __('msg.msg-no-data') }}</td>
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
