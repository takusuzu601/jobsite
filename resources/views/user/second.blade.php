@extends('user.layouts.master')

@section('contents')
    <div x-data="checkboxList()" class="mt-14">
        <!-- サイドバー -->
        @include('user.parts.sidebar')
        <!-- Main Content -->
        <main class="flex-1 p-6 lg:ml-64 main-content">
            <div class="flex">
                <p>{{ config("pref.$pref") }}</p>
                <p class="ml-4">{{ config("occupation.$occupation") }}</p>
                <p class="ml-8">お店で検索する</p>
            </div>

            <div class="flex mb-4">
                <p class="mr-4">選択中</p>

                <div id="selected-items">
                    @if (session('selectedItems'))
                        @foreach (session('selectedItems') as $value)
                            @php
                                $types = array_merge(config('genre.bust_types'), config('genre.body_types'));
                                $text = $types[$value] ?? '不明なタイプ';
                            @endphp
                            <div class="selected-item">
                                {{ $text }} <span class="remove-btn"
                                    onclick="removeItem(this, '{{ $value }}')">x</span>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="clear-all ml-4" @click="resetAll">Clear All</div>
            </div>

            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5">
                @foreach ($casts as $cast)
                    <div class="bg-gray-300 h-auto flex flex-col items-center justify-center">
                        <a href="{{ route('castshow', $cast->id) }}">
                            @foreach ($cast->castImgs as $castImg)
                                @if ($loop->first)
                                    <img src=" {{ $castImg->cast_img }}" alt="Image"
                                        class="w-full h-32 object-cover mb-2">
                                    {{-- {{ $castImg->cast_img }} --}}
                                @endif
                            @endforeach

                            <div class="text-center p-2 bg-white w-full">
                                <h2 class="text-lg font-semibold mb-1"> {{ $cast->name }}</h2>
                                <span>{{ $cast->age }}</span>
                                <span class="text-xs">店名({{ $cast->shop->shop_name }})</span>
                                <span class="text-xs">カテゴリー:
                                    @foreach ($cast->genres as $cast_genre)
                                        {{ $cast_genre->name }}
                                    @endforeach
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="mt-12 block">
                {{ $casts->appends(request()->query())->links() }}
            </div>
        </main>

    </div>
@endsection

@push('scripts')
    <script>
        // ページが完全に読み込まれた後にモーダルを表示させない
        window.onload = function() {
            var modal = document.querySelector('.modal-hidden');
            if (modal) {
                modal.style.display = 'none';
            }
        };

        const bustTypes = @json(config('genre.bust_types'));
        const bodyTypes = @json(config('genre.body_types'));

        const itemLabels = Object.assign({}, bustTypes, bodyTypes);

        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', (e) => {
                const value = e.target.value;
                const text = itemLabels[value];
                const selectedItemsDiv = document.getElementById('selected-items');
                if (e.target.checked) {
                    const div = document.createElement('div');
                    div.classList.add('selected-item');
                    div.innerHTML =
                        `${text} <span class="remove-btn" onclick="removeItem(this, '${value}')">x</span>`;
                    selectedItemsDiv.appendChild(div);
                } else {
                    const items = Array.from(selectedItemsDiv.querySelectorAll('.selected-item'));
                    items.forEach(item => {
                        if (item.textContent.includes(text)) {
                            item.remove();
                        }
                    });
                }
            });
        });

        function removeItem(element, value) {
            document.querySelector(`input[value="${value}"]`).checked = false;
            element.parentElement.remove();
        }
    </script>
@endpush
