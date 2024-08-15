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
                    <ul class="flex">
                        <template x-for="item in selectedItems" :key="item">
                            <li class="py-1 flex items-center align-middle">
                                <span x-text="item" class="flex-grow"></span>
                                <span @click="removeItem(item)" class="delete-icon">x</span>
                            </li>
                        </template>
                    </ul>

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
                                <h2 class="text-lg font-semibold mb-1"> {{ $cast->name}}</h2>
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

        function checkboxList() {
            return {
                selectedItems: [],

                updateSelected(event, item) {
                    const checkbox = event.target;
                    const label = document.querySelector(`label[for=${checkbox.id}]`);

                    if (checkbox.checked) {
                        this.selectedItems.push(item);
                        label.classList.add('bg-pink-300');
                    } else {
                        this.selectedItems = this.selectedItems.filter(i => i !== item);
                        label.classList.remove('bg-pink-300');
                    }
                },

                removeItem(item) {
                    // チェックボックスの状態をリセット
                    const checkboxId = item;
                    const checkbox = document.getElementById(checkboxId);
                    const label = document.querySelector(`label[for=${checkboxId}]`);

                    if (checkbox) {
                        checkbox.checked = false;
                        label.classList.remove('bg-pink-300');
                    }

                    // 選択項目から削除する
                    this.selectedItems = this.selectedItems.filter(i => i !== item);
                },

                resetAll() {
                    // 全てのチェックボックスをリセット
                    this.selectedItems.forEach(item => {
                        const checkboxId = item;
                        const checkbox = document.getElementById(checkboxId);
                        const label = document.querySelector(`label[for=${checkboxId}]`);

                        if (checkbox) {
                            checkbox.checked = false;
                            label.classList.remove('bg-pink-300');
                        }
                    });

                    // 選択項目リストを空にする
                    this.selectedItems = [];
                }
            };
        }
    </script>
@endpush
