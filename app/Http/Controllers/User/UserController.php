<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cast;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{

    function sch(Request $request)
    {
               // フォームから送信された選択されたアイテムの配列を取得
               $selectedItems = $request->input('items', []);

               // セッションに選択されたアイテムを保存
               $request->session()->flash('selectedItems', $selectedItems);

               // ビューにリダイレクト
               return redirect()->route('test');
    }

    function test(Request $request){

               return view('user.test');
    }


    public function top()
    {
        $prefs = config('pref');
        return view('user.top', compact('prefs'));
    }

    // 検索結果ページ
    public function second(Request $request)
    {
        // トップページの検索パラメータ
        $pref = $request->input('pref');
        $occupation = $request->input('occupation');
        $genre = $request->input('genre');

        $cast_types = $request->input('cast_type', []);
        $bastTypes = config('genre.bust_types');
        $bodyTypes = config('genre.body_types');
        $looks = config('genre.looks');
        $persons = config('genre.persons');

        // 詳細検索のパラメータ
        $age = $request->input('age');
        $bodyType = $request->input('body_type');

        $perPage = 40; // 1ページあたりのアイテム数

        // 基本クエリビルダ
        $query = Cast::query();

        // 'pref'、'occupation'、'genre'パラメータに基づくフィルタリング
        if ($pref) {
            $query->whereHas('shop', function ($subQuery) use ($pref) {
                $subQuery->where('pref', $pref);
            });
        }

        if ($occupation) {
            $query->whereHas('shop', function ($subQuery) use ($occupation) {
                $subQuery->where('occupation', $occupation);
            });
        }

        if ($genre) {
            $query->whereHas('genres', function ($subQuery) use ($genre) {
                $subQuery->where('genre_id', $genre);
            });
        }

        // 詳細検索（年齢とbody_type）
        if ($age) {
            $age = intval($age);
            $ageRanges = [
                1 => [18,20],
                2 => [21, 25],
                3 => [26, 30],
                4 => [31,35],
                5 => [36,40],
                6 => [41, 45],
               7 => [46,200],
                // 必要に応じて他の範囲も追加
            ];

            if (isset($ageRanges[$age])) {
                $ageRangeValues = $ageRanges[$age];
                $query->whereBetween('age', $ageRangeValues);
            }
        }

        if ($bodyType) {
            $query->where('body_type', $bodyType);
        }

        // クエリを実行し、ページネーションを適用
        $casts = $query->with('shop')->paginate($perPage);

        // ビューに渡すデータ
        return view('user.second', [
            'casts' => $casts,
            'pref' => $pref,
            'occupation' => $occupation,
            'genre' => $genre,
            'age' => $age,
            'bodyType' => $bodyType,
            'bastTypes' => $bastTypes,
            'bodyTypes' => $bodyTypes,
            'looks' => $looks,
            'persons' => $persons
        ]);


    }

    //キャスト詳細ページ
    public function show($id)
    {
        // ID に基づいて Cast モデルを取得
        $cast = Cast::findOrFail($id);

        // 詳細ページのビューを返す
        return view('user.cast_show', compact('cast'));
    }
}
