@extends('client.layout.main')

@section('content')
<div class="content">
  <div class="content-container">
    <div class="content-title">
        <h3 class="content-title-content-box">{{__('content.title-content')}}</h3>
        <div class="content-title-select">
          <select name="" class="content-title-form-select" id="">
            @if (!empty($categoryList))
        @foreach ($categoryList as $key => $item)
        <option value="">{{ $item->title }}</option>
        @endforeach
      @else
        <tr>
            <td solspan="4">{{ __('msg.msg-no-data') }}</td>
        </tr>
      @endif

          </select>
        </div>
    </div>
    <ul class="content-list">
      @if (!empty($blogsList))
        @foreach ($blogsList as $key => $item)
        <li class="content-blog">
          <a href="" class="content-category_thumb">
            <img src="{{$item->image}}" alt="">
          </a>
        <div class="content-content_category">
          <div class="content-info">
            <div class="content-info-icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>              
            </div>
            <div class="content-info-name">   </div>
            <div class="content-info-icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div class="content-info-time">3 mins ago</div>
          </div>
          <div class="content-info-content">
            <div class="content-info-title-content">{{$item->title}}</div>
            <div class="content-info-describe">{{$item->content}}</div>
            <div class="content-info-button">
              <button class="content-info-read-more">
                <div>{{__('button.read-more')}}</div>
                <div class="content-info-icon-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                  </svg>  
              </button>
            </div>
          </div>
        </div>
        </li>
        @endforeach
      @else
        <tr>
            <td solspan="4">Không có dữ liệu</td>
        </tr>
      @endif
    </ul>
    <div class="content-navigation-bar">
      <ul class="content-navigation-bar">
        <li><a href=""> 
          <div >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
          </div>
         </a></li>
        <li><a href=""><div>1</div></a></li>
        <li><a href=""><div>2</div></a></li>
        <li><a href="" class="content-navigation-bar-three">3</a></li>
        <li><a href=""><div>4</div></a></li>
        <li><a href=""><div>5</div></a></li>
        <li><a href=""><div>6</div></a></li>
        <li><a href=""> 
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
          </div>
         </a></li>
      </ul>
    </div>
  </div>
</div>
@endsection
