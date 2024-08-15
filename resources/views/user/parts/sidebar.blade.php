<aside class="fixed top-0 left-0 w-64 h-screen bg-white text-gray-800 p-4 shadow-md sidebar flex flex-col z-40">

    <div class="flex-1 overflow-y-auto mt-16">
        <h2 class="text-lg font-semibold">Sidebar</h2>

        <form action="{{ route('second') }}" method="GET">
            @csrf


        {{-- <p><button @click="resetAll" class="btn-reset">Reset All</button></p> --}}
        <ul>
            <!--  Menu 1 -->
            <li>
                <div x-data="{ open: true }">
                    <button type="button" @click="open = !open"
                        class="w-full text-left py-2 px-4 hover:bg-gray-100 focus:outline-none flex items-center justify-between">
                        <span>地域で選ぶ</span>
                        <span x-text="open ? '-' : '+'"></span>
                    </button>

                        <select name="pref" id="" class="w-full">
                            <option value="{{ $pref }}">{{ $pref }}</option>
                        </select>
                </div>
            </li>

            <!--  Menu 2 -->
            <li>
                <div x-data="{ open: true }">
                    <button @click="open = !open"
                        class="w-full text-left py-2 px-4 hover:bg-gray-100 focus:outline-none flex items-center justify-between">
                        <span>業種で選ぶ</span>
                        <span x-text="open ? '-' : '+'"></span>
                    </button>
                        <select name="occupation" id="" class="w-full">
                            <option value="">業種を選択</option>
                            <option {{ $occupation == '1' ? 'selected' : '' }} value="1">デリヘル</option>
                            <option {{ $occupation == '2' ? 'selected' : '' }} value="2">ホテヘル</option>
                            <option {{ $occupation == '3' ? 'selected' : '' }} value="3">ソープ</option>
                            <option {{ $occupation == '4' ? 'selected' : '' }} value="4">ヘルス</option>
                        </select>

                </div>
            </li>

            <!-- Menu ３-->
            <li>
                <div x-data="{ open: true }">
                    <button @click="open = !open"
                        class="w-full text-left py-2 px-4 hover:bg-gray-100 focus:outline-none flex items-center justify-between">
                        <span>年齢で選ぶ</span>
                        <span x-text="open ? '-' : '+'"></span>
                    </button>

                        <select name="age" id="" class="w-full">
                            <option value="">年齢を選択</option>
                            <option {{ $age == '1' ? 'selected' : '' }} value="1">18~20歳</option>
                            <option {{ $age == '2' ? 'selected' : '' }} value="2">21~25歳</option>
                            <option {{ $age == '3' ? 'selected' : '' }} value="3">26~30歳</option>
                            <option {{ $age == '4' ? 'selected' : '' }} value="4">31~35歳</option>
                            <option {{ $age == '5' ? 'selected' : '' }} value="5">36~40歳</option>
                            <option {{ $age == '6' ? 'selected' : '' }} value="6">41~45歳</option>
                            <option {{ $age == '7' ? 'selected' : '' }} value="7">45歳~</option>
                        </select>

                </div>
            </li>

            <!-- Menu 4 -->
            <li x-data="{ open: false }" x-init="$nextTick(() => { if (open) { document.body.classList.add('modal-open'); } else { document.body.classList.remove('modal-open'); } })">
                <button type="button" @click="open = true; document.body.classList.add('modal-open')"
                    class="w-full text-left py-2 px-4 hover:bg-gray-100 focus:outline-none flex items-center justify-between">
                    <span>タイプで選ぶ</span>
                </button>
                <!-- モーダル本体 -->
                <div x-show="open" @click="open = false; document.body.classList.remove('modal-open')"
                    class="modal-hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 transition-opacity duration-300 ease-in-out"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <div @click.stop class="bg-white w-1/2 h-1/2 p-5 rounded relative">
                        <h2 class="text-xl">タイプで選ぶ</h2>
                        <div class="">
                            <h2 class="mt-2">バストタイプ</h2>

                            @foreach ($bastTypes as $index => $value)
                                <!-- チェックボックス -->
                                <input name="cast_type[]" type="checkbox" value="{{ $index }}" :id="'{{ $value }}'" class="hidden-checkbox"
                                    @change="updateSelected($event, '{{ $value }}')" >

                                <!-- ラベル -->
                                <label :for="'{{ $value }}'" class="checkbox-label">{{ $value }}</label>
                            @endforeach
                            <div class="">
                                <h2 class="mt-2">バストタイプ</h2>
                                @foreach ($bodyTypes as $index => $value)
                                    <!-- チェックボックス -->
                                    <input name="cast_type[]" type="checkbox" value="{{ $index }}" :id="'{{ $value }}'" class="hidden-checkbox"
                                        @change="updateSelected($event, '{{ $value }}')">

                                    <!-- ラベル -->
                                    <label :for="'{{ $value }}'"
                                        class="checkbox-label">{{ $value }}</label>
                                @endforeach
                            </div>
                            <div class="div">
                                <!-- チェックボックスリスト -->
                                {{-- <input type="checkbox" id="checkbox-item1" class="hidden-checkbox"
                                                                @change="updateSelected($event, 'Item 1')">
                                                            <label :for="'checkbox-item1'" class="checkbox-label">Item 1</label>

                                                            <input type="checkbox" id="checkbox-item2" class="hidden-checkbox"
                                                                @change="updateSelected($event, 'Item 2')">
                                                            <label :for="'checkbox-item2'" class="checkbox-label">Item 2</label>

                                                            <input type="checkbox" id="checkbox-item3" class="hidden-checkbox"
                                                                @change="updateSelected($event, 'Item 3')">
                                                            <label :for="'checkbox-item3'" class="checkbox-label">Item 3</label>

                                                            <input type="checkbox" id="checkbox-item4" class="hidden-checkbox"
                                                                @change="updateSelected($event, 'Item 4')">
                                                            <label :for="'checkbox-item4'" class="checkbox-label">Item 4</label>

                                                            <input type="checkbox" id="checkbox-item5" class="hidden-checkbox"
                                                                @change="updateSelected($event, 'Item 5')">
                                                            <label :for="'checkbox-item5'" class="checkbox-label">Item 5</label> --}}
                            </div>

                        </div>

                        {{--  --}}
                        <button type="button" @click="open = false; document.body.classList.remove('modal-open')"
                            class="mt-4 bg-red-500 text-white px-4 py-2 rounded absolute top-2 right-2">閉じる</button>
                    </div>
                </div>
            </li>


            <!-- Menu 5-->

            <li x-data="{ open: false }" x-init="$nextTick(() => { if (open) { document.body.classList.add('modal-open'); } else { document.body.classList.remove('modal-open'); } })">
                <button type="button" @click="open = true; document.body.classList.add('modal-open')"
                    class="w-full text-left py-2 px-4 hover:bg-gray-100 focus:outline-none flex items-center justify-between">
                    <span>ルックスで選ぶ</span>
                </button>
                <!-- モーダル本体 -->
                <div x-show="open" @click="open = false; document.body.classList.remove('modal-open')"
                    class="modal-hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 transition-opacity duration-300 ease-in-out"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <div @click.stop class="bg-white w-3/4 h-1/2 p-5 rounded relative">
                        <h2 class="text-xl">ルックスで選ぶ</h2>
                        <div class="">
                            <h2 class="mt-2">ルックス見た目</h2>

                            @foreach ($looks as $index => $value)
                                <!-- チェックボックス -->
                                <input name="cast_type[]" type="checkbox" value="{{ $index }}" :id="'{{ $value }}'" class="hidden-checkbox"
                                    @change="updateSelected($event, '{{ $value }}')">

                                <!-- ラベル -->
                                <label :for="'{{ $value }}'" class="checkbox-label">{{ $value }}</label>
                            @endforeach
                        </div>

                        <div class="">
                            <h2 class="mt-2">性格</h2>

                            @foreach ($persons as $index => $value)
                                <!-- チェックボックス -->
                                <input name="cast_type[]" type="checkbox" value="{{ $index }}" :id="'{{ $value }}'" class="hidden-checkbox"
                                    @change="updateSelected($event, '{{ $value }}')">

                                <!-- ラベル -->
                                <label :for="'{{ $value }}'" class="checkbox-label">{{ $value }}</label>
                            @endforeach
                        </div>
                        {{--  --}}
                        <button type="button" @click="open = false; document.body.classList.remove('modal-open')"
                            class="mt-4 bg-red-500 text-white px-4 py-2 rounded absolute top-2 right-2">閉じる</button>
                    </div>
                </div>
            </li>
            <!-- Menu 6 -->
            <li x-data="{ open: false }" x-init="$nextTick(() => { if (open) { document.body.classList.add('modal-open'); } else { document.body.classList.remove('modal-open'); } })">
                <button type="button" @click="open = true; document.body.classList.add('modal-open')"
                    class="w-full text-left py-2 px-4 hover:bg-gray-100 focus:outline-none flex items-center justify-between">
                    <span>プレイ内容で選ぶ</span>
                </button>
                <!-- モーダル本体 -->
                <div x-show="open" @click="open = false; document.body.classList.remove('modal-open')"
                    class="modal-hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 transition-opacity duration-300 ease-in-out"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <div @click.stop class="bg-white w-3/4 h-1/2 p-5 rounded relative">
                        <h2 class="text-xl">ルックスで選ぶ</h2>
                        <div class="">
                            <p class="mt-2">バストタイプ</p>
                            <!-- チェックボックスリスト -->

                        </div>

                        <div class="">
                            <h2 class="mt-2">ボディータイププ</h2>
                            @foreach ($bodyTypes as $index => $value)
                                <!-- チェックボックス -->
                                <input name="cast_play[]" type="checkbox" value="{{ $index }}" :id="'{{ $value }}'" class="hidden-checkbox"
                                    @change="updateSelected($event, '{{ $value }}')">

                                <!-- ラベル -->
                                <label :for="'{{ $value }}'"
                                    class="checkbox-label">{{ $value }}</label>
                            @endforeach
                        </div>
                        {{--  --}}
                        <button type="button" @click="open = false; document.body.classList.remove('modal-open')"
                            class="mt-4 bg-red-500 text-white px-4 py-2 rounded absolute top-2 right-2">閉じる</button>
                    </div>
                </div>
            </li>

        </ul>


        <button type="submit"
            class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
            検索する
        </button>
</form>

    </div>

</aside>
