<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>groupuse show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="/groupuses">戻る</a>
    <h1>{{ $groupuse->group_name }}</h1>
    <p>{!! nl2br(e($groupuse->representative_name)) !!}</p>
    <p>{{ $groupuse->email }}</p>
    <p>{{ $groupuse->post_code }}  {{ $groupuse->adrress }}  {{ $groupuse->phone_number }}</p>
    <p>{{ $groupuse->workplace }}  {{ $groupuse->workplace_phone_number }}</p>
    <p>{{ $groupuse->date_of_use }}  {{ $groupuse->time_of_use }}</p>
    <p>{{ $groupuse->facilities_to_use }}</p>
    <p>{{ $groupuse->equipment_to_use }}</p>
    <p>{!! nl2br(e($groupuse->activity_contents)) !!}</p>
    <p>{{ $groupuse->member1_name }}  {{ $groupuse->member1_adress }}</p>
    <p>{{ $groupuse->member2_name }}  {{ $groupuse->member2_adress }}</p>
    <p>{{ $groupuse->member3_name }}  {{ $groupuse->member3_adress }}</p>
    <p>{{ $groupuse->member4_name }}  {{ $groupuse->member4_adress }}</p>
    <p>{{ $groupuse->member5_name }}  {{ $groupuse->member5_adress }}</p>
    <p>{{ $groupuse->member6_name }}  {{ $groupuse->member6_adress }}</p>
    <p>{{ $groupuse->member7_name }}  {{ $groupuse->member7_adress }}</p>
    <p>{{ $groupuse->member8_name }}  {{ $groupuse->member8_adress }}</p>
    <p>{{ $groupuse->member9_name }}  {{ $groupuse->member9_adress }}</p>
    <p>{{ $groupuse->member10_name }}  {{ $groupuse->member10_adress }}</p>
    <p>{{ $groupuse->member11_name }}  {{ $groupuse->member11_adress }}</p>
    <p>{{ $groupuse->member12_name }}  {{ $groupuse->member12_adress }}</p>
    <p>{{ $groupuse->member13_name }}  {{ $groupuse->member13_adress }}</p>
    <p>{{ $groupuse->member14_name }}  {{ $groupuse->member14_adress }}</p>
    <p>{{ $groupuse->member15_name }}  {{ $groupuse->member15_adress }}</p>
    <p>{{ $groupuse->member16_name }}  {{ $groupuse->member16_adress }}</p>
    <p>{{ $groupuse->member17_name }}  {{ $groupuse->member17_adress }}</p>
    <p>{{ $groupuse->member18_name }}  {{ $groupuse->member18_adress }}</p>
    <p>{{ $groupuse->member19_name }}  {{ $groupuse->member19_adress }}</p>
    <p>{{ $groupuse->member20_name }}  {{ $groupuse->member20_adress }}</p>

    <div class="button-group">
        <!-- $groupuseのidを元に編集ページへ遷移する -->
        <button onclick="location.href='/groupuses/{{ $groupuse->id }}/edit'">編集する</button>
        <form action="/groupuses/{{ $groupuse->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
</body>

</html>
