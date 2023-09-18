<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>groupuse edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="/groupuses/{{ $groupuse->id }}">戻る</a>
    <h1>更新</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <!-- 更新先はgroupusesのidにしないと増える php artisan rote:listで確認① -->
    <form action="/groupuses/{{ $groupuse->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="group_name">団体名</label>
            <input type="text" name="group_name" value="{{ old('group_name',$groupuse->group_name) }}">
        </p>
        <p>
            <label for="representative_name">代表者氏名</label>
            <input type="text" name="representative_name" value="{{ old('representative_name', $groupuse->representative_name) }}">
        </p>
        <p>
            <label for="email">E-mail</label>
            <input type="text" name="email" value="{{ old('email', $groupuse->email) }}">
        </p>
        <p>
            <label for="post_code">郵便番号</label>
            <input type="text" name="post_code" value="{{ old('post_code', $groupuse->post_code) }}">
        </p>
        <p>
            <label for="adrress">住所</label>
            <input type="text" name="adrress" value="{{ old('adrress', $groupuse->adrress) }}">
        </p>
        <p>
            <label for="phone_number">電話番号</label>
            <input type="text" name="phone_number" value="{{ old('phone_number', $groupuse->phone_number) }}">
        </p>
        <p>
            <label for="workplace">勤務先</label>
            <input type="text" name="workplace" value="{{ old('workplace', $groupuse->workplace) }}">
        </p>
        <p>
            <label for="workplace_phone_number">電話番号</label>
            <input type="text" name="workplace_phone_number" value="{{ old('workplace_phone_number', $groupuse->workplace_phone_number) }}">
        </p>
        <p>
            <label for="date_of_use">使用日</label>
            <input type="text" name="date_of_use" value="{{ old('date_of_use', $groupuse->date_of_use) }}">
        </p>
        <p>
            <label for="time_of_use">使用時間</label>
            <input type="text" name="time_of_use" value="{{ old('time_of_use', $groupuse->time_of_use) }}">
        </p>
        <p>
            <label for="facilities_to_use">使用施設</label>
            <input type="text" name="facilities_to_use" value="{{ old('facilities_to_use', $groupuse->facilities_to_use) }}">
        </p>
        <p>
            <label for="equipment_to_use">使用備品</label>
            <input type="text" name="equipment_to_use" value="{{ old('equipment_to_use', $groupuse->equipment_to_use) }}">
        </p>
        <p>
            <label for="activity_contents">活動内容/label><br>
            <textarea name="activity_contents" class="activity_contents">{{ $groupuse->activity_contents }}</textarea>
        </p>
        <p>
            <label for="member1_name">会員名簿</label><br>
        <table id="member's_list">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>氏名</th>
                    <th>住所</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><input type="text" name="member1_name" value="{{ old('member1_name', $groupuse->member1_name) }}"></td>
                    <td><input type="text" name="member1_adress" value="{{ old('member1_adress', $groupuse->member1_adress) }}"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="text" name="member2_name" value="{{ old('member2_name', $groupuse->member2_name) }}"></td>
                    <td><input type="text" name="member2_adress" value="{{ old('member2_adress', $groupuse->member2_adress) }}"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input type="text" name="member3_name" value="{{ old('member3_name', $groupuse->member3_name) }}"></td>
                    <td><input type="text" name="member3_adress" value="{{ old('member3_adress', $groupuse->member3_adress) }}"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><input type="text" name="member4_name" value="{{ old('member4_name', $groupuse->member4_name) }}"></td>
                    <td><input type="text" name="member4_adress" value="{{ old('member4_adress', $groupuse->member4_adress) }}"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><input type="text" name="member5_name" value="{{ old('member5_name', $groupuse->member5_name) }}"></td>
                    <td><input type="text" name="member5_adress" value="{{ old('member5_adress', $groupuse->member5_adress) }}"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><input type="text" name="member6_name" value="{{ old('member6_name', $groupuse->member6_name) }}"></td>
                    <td><input type="text" name="member6_adress" value="{{ old('member6_adress', $groupuse->member6_adress) }}"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><input type="text" name="member7_name" value="{{ old('member7_name', $groupuse->member7_name) }}"></td>
                    <td><input type="text" name="member7_adress" value="{{ old('member7_adress', $groupuse->member7_adress) }}"></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><input type="text" name="member8_name" value="{{ old('member8_name', $groupuse->member8_name) }}"></td>
                    <td><input type="text" name="member8_adress" value="{{ old('member8_adress', $groupuse->member8_adress) }}"></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><input type="text" name="member9_name" value="{{ old('member9_name', $groupuse->member9_name) }}"></td>
                    <td><input type="text" name="member9_adress" value="{{ old('member9_adress', $groupuse->member9_adress) }}"></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><input type="text" name="member10_name" value="{{ old('member10_name', $groupuse->member10_name) }}"></td>
                    <td><input type="text" name="member10_adress" value="{{ old('member10_adress', $groupuse->member10_adress) }}"></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td><input type="text" name="member11_name" value="{{ old('member11_name', $groupuse->member11_name) }}"></td>
                    <td><input type="text" name="member11_adress" value="{{ old('member11_adress', $groupuse->member11_adress) }}"></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td><input type="text" name="member12_name" value="{{ old('member12_name', $groupuse->member12_name) }}"></td>
                    <td><input type="text" name="member12_adress" value="{{ old('member12_adress', $groupuse->member12_adress) }}"></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td><input type="text" name="member13_name" value="{{ old('member13_name', $groupuse->member13_name) }}"></td>
                    <td><input type="text" name="member13_adress" value="{{ old('member13_adress', $groupuse->member13_adress) }}"></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td><input type="text" name="member14_name" value="{{ old('member14_name', $groupuse->member14_name) }}"></td>
                    <td><input type="text" name="member14_adress" value="{{ old('member14_adress', $groupuse->member14_adress) }}"></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td><input type="text" name="member15_name" value="{{ old('member15_name', $groupuse->member15_name) }}"></td>
                    <td><input type="text" name="member15_adress" value="{{ old('member15_adres', $groupuse->member15_adres) }}"></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td><input type="text" name="member16_name" value="{{ old('member16_name', $groupuse->member16_name) }}"></td>
                    <td><input type="text" name="member16_adress" value="{{ old('member16_adres', $groupuse->member16_adres) }}"></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td><input type="text" name="member17_name" value="{{ old('member17_name', $groupuse->member17_name) }}"></td>
                    <td><input type="text" name="member17_adress" value="{{ old('', $groupuse->) }}"></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td><input type="text" name="member18_name" value="{{ old('member18_name', $groupuse->member18_name) }}"></td>
                    <td><input type="text" name="member18_adress" value="{{ old('member18_adres', $groupuse->member18_adres) }}"></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td><input type="text" name="member19_name" value="{{ old('member19_name', $groupuse->member19_name) }}"></td>
                    <td><input type="text" name="member19_adress" value="{{ old('member19_adress', $groupuse->member19_adress) }}"></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td><input type="text" name="member20_name" value="{{ old('member20_name', $groupuse->member20_name) }}"></td>
                    <td><input type="text" name="member20_adress" value="{{ old('member20_adress', $groupuse->member20_adress) }}"></td>
                </tr>
            </thead>
        </table>
        <input type="submit" value="更新">
    </form>
</body>

</html>

