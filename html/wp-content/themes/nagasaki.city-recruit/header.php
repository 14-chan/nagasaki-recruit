<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, height=device-height ,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<title><?php echo bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>
<body class="l-pagebody">
    <!--ヘッダ-->
    <header class="g-header">
        <h1 class="c-header__ttl">長崎市職員採用サイト</h1>
        <ul class="c-header__list include-accordion scroll-control">
            <li class="c-header__list__item">
                <button class="c-btn__accordion" type="button">募集要項</button>
                <ul>
                    <li>試験案内・合格発表</li>
                    <li>給与・待遇・福利厚生</li>
                    <li>インターンシップ</li>
                    <li>よくある質問</li>
                </ul>
            </li>
            <li class="c-header__list__item">
                <button class="c-btn__accordion" type="button">長崎市役所の仕事について知る</button>
                <ul>
                    <li>長崎市のスゴイ採用（仮）</li>
                    <li>図解で解明！長崎市役所職種図鑑</li>
                    <li>データで見る長崎市役所</li>
                    <li>市長＆人事課からのメッセージ</li>
                    <li>キャリアイメージ・研修制度</li>
                </ul>
                </li>
            <li class="c-header__list__item">
                <button class="c-btn__accordion" type="button">職員インタビュー</button>

                </li>
            <li class="c-header__list__item">
                <button class="c-btn__accordion" type="button">動画で見る長崎市役所の仕事</button>

                </li>
            <li class="c-header__list__item">
                <button class="c-btn__accordion" type="button">なるほどわからん特集</button>

                </li>
            <li class="c-header__list__item">
                <button class="c-btn__accordion" type="button">お知らせ</button>

                </li>
        </ul>
    </header>

