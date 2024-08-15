@extends('user.layouts.master')

@section('contents')
    <section class="hero-section flex max-w-screen-2xl mx-auto mt-20">
        <div class="w-2/3">
            <h2>herosection</h2>
        </div>
        <div class="search-box w-1/3 flex flex-col">
            <div class="search-title">
                <h2> search-title</h2>
            </div>
            <div class="search-form-box justify-center ">
                <form action="{{ route('second') }}" method="GET" class="search-form">
                    @csrf
                    <div class="flex flex-col">
                        <label for="pref">地域を選択</label>
                        <select name="pref" id="pref">
                            <option value="">地域を選択</option>
                            @foreach ($prefs as $pref=> $capital)
                                <option value="{{ $pref }}">{{ $capital }}</option>
                            @endforeach
                        </select>

                        <label for="occupation">業種</label>
                        <select name="occupation" id="occupation ">
                            <option value="">業種を選択</option>
                            <option value="1">デリヘル</option>
                            <option value="2">ホテヘル</option>
                            <option value="3">ソープ</option>
                            <option value="4">ヘルス</option>
                        </select>

                        <label for="genre">ジャンル</label>
                        <select name="genre" id="genre">
                            <option value="">ジャンルを選択</option>
                              <optgroup label="体系">
                                <option value="1">巨乳</option>
                                <option value="2">貧乳</option>
                              </optgroup>
                              <optgroup label="年齢">
                                <option value="3">18~20代</option>
                                <option value="4">30代</option>
                                <option value="5">40代</option>
                                <option value="6">50代</option>
                              </optgroup>
                              <optgroup label="タイプ">
                                <option value="7">ギャル</option>
                                <option value="8">お姉さん</option>
                                <option value="9">人妻</option>
                              </optgroup>
                        </select>

                        <button type="submit" class="bg-sky-600 text-white mt-4 p-4">検索する</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
