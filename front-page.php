<?php
/**
 * フロントページ用テンプレート (子テーマ用)
 * 
 * @package WordPress
 */

get_header(); // ヘッダーを呼び出し
?>

<main id="primary" class="site-main front-page-content">
    <?php
    // 固定ページ「ホーム」の本文（ブロックエディターの内容）を表示
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>

    <!-- 子テーマ独自で追加したいカスタムエリア（必要に応じて） -->
    <section class="custom-front-section">
        <div class="container">
            
            <!-- ここにオリジナルの要素や固定パーツを追加できます -->
        </div>
    </section>
</main>

<?php
get_footer(); // フッターを呼び出し