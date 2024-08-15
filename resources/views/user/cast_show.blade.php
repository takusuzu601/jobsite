@extends('user.layouts.master')

@section('contents')

    <div class="p-4 flex">

        {{-- slider --}}
        <div class="container px-4" style="width: 300px;">
            <!-- Alpine.js を使用したスライダー -->
            <div x-data="{ activeSlide: 0, totalSlides: {{ count($cast->castImgs) }} }" class="relative">
                <!-- スライダーコンテナ -->
                <div class="overflow-hidden w-full md:w-96  relative">
                    <!-- スライド表示 -->
                    <div class="flex transition-transform duration-300" :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                        @foreach($cast->castImgs as $index =>$castImg)
                            <div class="w-full flex-shrink-0">
                                <img src="{{ $castImg->cast_img }}" alt="Slide image" class="w-full h-64 object-cover md:h-80 lg:h-96">
                            </div>
                        @endforeach
                    </div>

                    <!-- 前のスライドボタン -->
                    <button @click="activeSlide = (activeSlide > 0 ? activeSlide - 1 : totalSlides - 1)"
                            class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        &lt;
                    </button>

                    <!-- 次のスライドボタン -->
                    <button @click="activeSlide = (activeSlide < totalSlides - 1 ? activeSlide + 1 : 0)"
                            class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        &gt;
                    </button>
                </div>
            </div>
        </div>
        {{-- sliderend --}}

        <div class="">
            <div class="px-44">
                <p>{{ $cast->name }}({{ $cast->age }})</p>
                <p>{{ $cast->size_b}}cm({{ $cast->age }})</p>
                <p class="text-xs">{{ $cast->shop->shop_name }}</p>
                <p><i class="fa-regular fa-heart w-12"></i></p>
            </div>
        </div>

    </div>
    {{ $cast }}
@endsection

@push('scripts')

@endpush
