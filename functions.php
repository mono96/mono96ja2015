<?php

//子テーマ 読み込み

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

if ( strtoupper( get_locale() ) == 'JA' ) {
		wp_enqueue_style( 'mono96_ja', get_template_directory_uri().'/css/ja.css' );
}

//管理画面  CSS 読み込み
add_editor_style('/csseditor-style.css');
