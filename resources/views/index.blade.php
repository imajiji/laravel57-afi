@extends('layouts.app')

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>トップ</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/Article-List.css">
    <link rel="stylesheet" href="/assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
@endsection

@section('content')
<div class="article-list">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">List</h2>
        </div>
    </div>
</div>
<div class="article-list">
    <div class="container">
        <div class="intro"></div>
        <div class="row articles">
            @foreach($posts as $post)
            <div class="col-sm-6 col-md-4 item"><a href="/detail/{{$post->id}}"><img class="img-fluid" src="/assets/img/ITM0013552_1.jpg"></a>
                <h3 class="name"><strong>{{$post->title}}</strong><br></h3>
                <p class="description">{{str_limit($post->detail, $limit=150, $end='...')}}</p>
                <a href="/detail/{{$post->id}}" class="action"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
            @endforeach
            <!-- <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="/assets/img/ITM0021136_1.jpg"></a>
                <h3 class="name"><strong>お手軽Touchげー ほもびめ</strong></h3>
                <p class="description">キャラクターの快感度の変化に注意しながら体を触ったり、脱衣や視点・ポーズ変更で、&nbsp;<br>Hビデオ撮影のシチュエーションを楽しんでください。&nbsp;<br>快感度が0になるとゲームオーバー、100でゲームクリアとなります。&nbsp;<br>また、プレイ内容によってエンディングが若干変化し、条件によって&nbsp;<br>エンディングイラストも表示されます。&nbsp;<br>ゲーム性は著しく乏しいですが、感性だけでプレイできるハードルの低いゲームです。</p>
                <a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="/assets/img/ITM0016789_1.jpg"></a>
                <h3 class="name"><strong>お手軽クイズげー 特別補習</strong></h3>
                <p class="description">エリート校に裏口入学したあなたは、当然実力が伴わず成績は最悪。&nbsp;<br>理事長が提案するマンツーマン特別補習を受ける事に・・・&nbsp;<br>と、いう体(てい)で始まるクイズゲームです。&nbsp;<br>ジャンルは「一般常識」「ヲタク知識」「理科数学」「国語社会」の4科目。&nbsp;<br>妙に肉々しい講師陣が出す追試問題に回答し、合格すると&nbsp;<br>正解数に応じて、講師の体を○○出来ます。(教育の一環として)</p><a href="#"
                    class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="/assets/img/ITM0013552_1.jpg"></a>
                <h3 class="name"><strong>二人打ち麻雀 雀BOっ！なヤツ裸</strong><br></h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="/assets/img/ITM0013552_1.jpg"></a>
                <h3 class="name"><strong>二人打ち麻雀 雀BOっ！なヤツ裸</strong><br></h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="/assets/img/ITM0013552_1.jpg"></a>
                <h3 class="name"><strong>二人打ち麻雀 雀BOっ！なヤツ裸</strong><br></h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div> -->
        </div>
    </div>
</div>
@endsection
