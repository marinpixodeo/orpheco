<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Zen+Old+Mincho:wght@400;500;600;700;900&display=swap" rel="stylesheet">

</head>

<body  class="w-full md:min-w-[1280px]">
<div id="page" class="site overflow-x-hidden">
    <header id="header" class="site-header fixed top-0 left-0 w-full z-50">
        <div class="flex items-start justify-center duration-300 ease-in-out py-[10px] bg-[var(--color-blue)] md:bg-transparent md:justify-between md:py-[17px] md:px-[30px]">
            <div class="logo w-full max-auto max-w-[200px] md:max-w-[280px] lg:mt-[3px]">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-start group w-full">
                     <img src="<?= THEME_URL; ?>images/logo.webp" alt="">
                </a>
            </div>

            <div class="
            fixed bg-white left-0 bottom-0 w-full head-cta flex items-center gap-0 duration-300 ease-in-out
            md:gap-3 md:w-auto md:relative md:bg-transparent md:mt-[10px] md:items-start
            lg:gap-5
">
                <div class="flex items-center justify-center mt-[-1px] w-[50%] md:w-auto">
                    <a class="
                    flex items-center flex-col justify-center !no-underline text-[24px] font-bold text-[var(--color-blue-50)] tracking-[0.2px]
                    md:text-[var(--color-white)] md:items-end md:tracking-[1.7px]
                    lg:text-[32px]" href="tel:090-4324-0225">
                        <span class="flex items-center justify-center w-full md:justify-start">
                            <span class="hidden md:inline-block mt-2 leading-1 mr-[6px]"><img src="<?= THEME_URL ?>/images/icon-tel.webp"></span>090-4324-0225
                        </span>
                        <span class="block text-[11px] text-[var(--color-blue-50)] font-medium leading-1 tracking-[0] md:tracking-[0.2px] mt-[3px] md:text-[12px]">営業時間│9 : 00～19 : 00(不定休)</span>
                    </a>
                </div>

                <a href="#inquiry" class="
                flex btn bg-[var(--color-blue-50)] h-[60px] flex items-center justify-center text-white gap-2 w-[50%]
                md:w-[260px] md:rounded-[8px] md:gap-3

                ">
                    <img class="hidden md:block w-[22px]" src="<?= THEME_URL;?>/images/icon-line.svg" alt="">
                    <span>LINEで簡単問い合わせ</span>
                </a>
            </div>
        </div>
    </header>

