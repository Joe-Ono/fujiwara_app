<?php

namespace App\Http\Controllers;

// Groupuseクラスを読み込む
use App\Models\Groupuse;
use App\Http\Requests\GroupuseRequest;

class GroupuseController extends Controller
{    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $groupuses = Groupuse::all();
        // groupusesディレクトリーの中のindexページを指定し、groupusesの連想配列を代入
        return view('groupuses.index', ['groupuses' => $groupuses]);
    }

    public function create()
    {
        return view('groupuses.create');
    }
    public function store(GroupuseRequest $request)
    {
        // インスタンスの作成
        $groupuse = new Groupuse;

        // 値の用意
        $groupuse->group_name = $request->group_name;
        $groupuse->representative_name = $request->representative_name;
        $groupuse->email = $request->email;
        $groupuse->post_code = $request->post_code;
        $groupuse->adrress = $request->adrress;
        $groupuse->phone_number = $request->phone_number;
        $groupuse->workplace = $request->workplace;
        $groupuse->workplace_phone_number = $request->workplace_phone_number;
        $groupuse->date_of_use = $request->date_of_use;
        $groupuse->time_of_use = $request->time_of_use;
        $groupuse->facilities_to_use = $request->facilities_to_use;
        $groupuse->equipment_to_use = $request->equipment_to_use;
        $groupuse->activity_contents = $request->activity_contents;
        $groupuse->member1_name = $request->member1_name;
        $groupuse->member1_adress = $request->member1_adress;
        $groupuse->member2_name = $request->member2_name;
        $groupuse->member2_adress = $request->member2_adress;
        $groupuse->member3_name = $request->member3_name;
        $groupuse->member3_adress = $request->member3_adress;
        $groupuse->member4_name = $request->member4_name;
        $groupuse->member4_adress = $request->member4_adress;
        $groupuse->member5_name = $request->member5_name;
        $groupuse->member5_adress = $request->member5_adress;
        $groupuse->member6_name = $request->member6_name;
        $groupuse->member6_adress = $request->member6_adress;
        $groupuse->member7_name = $request->member7_name;
        $groupuse->member7_adress = $request->member7_adress;
        $groupuse->member8_name = $request->member8_name;
        $groupuse->member8_adress = $request->member8_adress;
        $groupuse->member9_name = $request->member9_name;
        $groupuse->member9_adress = $request->member9_adress;
        $groupuse->member10_name = $request->member10_name;
        $groupuse->member10_adress = $request->member10_adress;
        $groupuse->member11_name = $request->member11_name;
        $groupuse->member11_adress = $request->member11_adress;
        $groupuse->member12_name = $request->member12_name;
        $groupuse->member12_adress = $request->member12_adress;
        $groupuse->member13_name = $request->member13_name;
        $groupuse->member13_adress = $request->member13_adress;
        $groupuse->member14_name = $request->member14_name;
        $groupuse->member14_adress = $request->member14_adress;
        $groupuse->member15_name = $request->member15_name;
        $groupuse->member15_adress = $request->member15_adress;
        $groupuse->member16_name = $request->member16_name;
        $groupuse->member16_adress = $request->member16_adress;
        $groupuse->member17_name = $request->member17_name;
        $groupuse->member17_adress = $request->member17_adress;
        $groupuse->member18_name = $request->member18_name;
        $groupuse->member18_adress = $request->member18_adress;
        $groupuse->member19_name = $request->member19_name;
        $groupuse->member19_adress = $request->member19_adress;
        $groupuse->member20_name = $request->member20_name;
        $groupuse->member20_adress = $request->member20_adress;
        // インスタンスに値を設定して保存
        $groupuse->save();
    
        // 登録したらindexに戻る
        return redirect('/groupuses');
    
    }

    // showページへ移動
    public function show($id)
    {
        $groupuse = Groupuse::find($id);
        return view('groupuses.show', ['groupuse' => $groupuse]);
    }

    public function edit($id)
    {
        $groupuse = Groupuse::find($id);
        // idを見つけたらedit.blade.phpに飛ばす
        return view('groupuses.edit', ['groupuse' => $groupuse]);
    }

    public function update(GroupuseRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $groupuse = Groupuse::find($id);

        // 値の用意
        $groupuse->title = $request->title;
        $groupuse->body = $request->body;

        // 保存
        $groupuse->save();

        // 登録したらindexに戻る
        return redirect('/groupuses');
    }
    public function destroy($id)
    {
        $groupuse = Groupuse::find($id);
        $groupuse->delete();

        return redirect('/groupuses');
    }    
}    
