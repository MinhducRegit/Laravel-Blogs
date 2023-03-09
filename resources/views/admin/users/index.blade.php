@extends('admin.layout.main')
@section('css')
<link href="{{asset('assets/plugins/datatables.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">{{__('admin.title-user')}}</h4>
                                    
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
                                                <th>{{__('column_name.name')}}</th>
                                                <th>{{__('column_name.email')}}</th>
                                                <th>{{__('column_name.password')}}</th>
                                                <th>{{__('column_name.avatar')}}</th>
                                                <th>{{__('column_name.role')}}</th>
                                                <th>{{__('column_name.status')}}</th>
                                                <th>{{__('column_name.created_at')}}</th>
                                                <th>{{__('column_name.updated_at')}}</th>
                                                <th>{{__('column_name.actact')}}</th>
                                      
                                            </tr>
                                        </thead>

                                        <tbody>
                                          @if (!empty($usersList))
                                            @foreach ($usersList as $key => $item)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->username}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->password}}</td>
                                                <td>{{$item->avatar}}</td>
                                                <td>{{$item->role}}</td>
                                                <td>{{$item->status}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>{{$item->updated_at}}</td>
                                                <td class="text-center">
                                                    <a onclick="return confirm({{ __('msg.msg-delete') }})" href="" class="btn-danger btn-sm ">{{__('button.delete')}}</a>
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
