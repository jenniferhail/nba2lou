<?php 
    $inline_style = '';
    $margin_bottom = get_sub_field('margin_bottom');
    $margin_top = get_sub_field('margin_top');
    $padding_bottom = get_sub_field('padding_bottom');
    $padding_top = get_sub_field('padding_top');

    if($margin_bottom !== null || $margin_top !== null || $padding_bottom !== null || $padding_top !== null) {
        $inline_style = 'style="';
        if($margin_bottom !== null) {
            $inline_style .= 'margin-bottom: ' . $margin_bottom . 'px; ';
        }
        if($margin_top !== null) {
            $inline_style .= 'margin-top: ' . $margin_top . 'px; ';
        }
        if($padding_top !== null) {
            $inline_style .= 'padding-top: ' . $padding_top . 'px; ';
        }
        if($padding_bottom !== null) {
            $inline_style .= 'padding-bottom: ' . $padding_bottom . 'px; ';
        }
        $inline_style .= '"';
    }
    $layout_background = get_sub_field('layout_background');
    $enable_background = $layout_background['enable_background'];
    $background_image = $layout_background['background_image'];
    $background_position = $layout_background['background_position'];
    $the_background = '';
    if($enable_background) {
        $the_background = '<div class="bg-image ' . $background_position . '" style="background-image: url(' . esc_url($background_image['url']) . ');"></div>';
    }

?>