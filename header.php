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

<body <?php body_class(); ?>>
<div id="page" class="site overflow-x-hidden">
    <header id="header" class="site-header fixed top-0 left-0 w-full z-50">
        <div class="flex items-start justify-between py-[17px] px-[30px] duration-300 ease-in-out">
            <!-- Logo Section -->
            <div class="logo w-full max-w-[200px] md:max-w-[280px] lg:mt-[3px]">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-start group w-full">
                     <img src="<?= THEME_URL; ?>images/logo.webp" alt="">
                </a>
            </div>

            <!-- Contact Info & CTA -->
            <div class="head-cta flex items-start gap-5 mt-[10px] md:gap-3 lg:gap-5 duration-300 ease-in-out">
                <!-- Phone Number -->
                <div class="flex items-center mt-[-1px]">
<!--                    Mobile-->
                    <a href="tel:090-4324-0225" class="block md:hidden w-[37px]"><img src="<?= THEME_URL ?>/images/icon-phone.webp" alt=""></a>

<!--                    Desktop-->
                    <a class="
                    hidden md:flex items-end flex-col justify-center !no-underline text-[35px] text-[var(--color-white)] font-bold tracking-[1.7px]
                    lg:text-[32px]" href="tel:090-4324-0225">
                        <span class="flex items-center">
                            <span class="mr-[6px] mt-2 leading-1 inline-block"><img src="<?= THEME_URL ?>/images/icon-tel.webp" ></span>090-4324-0225
                        </span>
                        <span class="block text-[12px] text-[var(--color-blue-50)] font-medium leading-1 tracking-[0.2px] mt-[3px]">営業時間│9 : 00～19 : 00(不定休)</span>
                    </a>
                </div>


                <a href="#" class="block md:hidden"><img src="<?= THEME_URL ?>/images/icon-line.webp" alt=""></a>
                <!-- Inquiry Button -->
                <a href="#inquiry" class="hidden md:flex btn bg-[var(--color-blue-50)] rounded-[8px] w-[260px] h-[60px] flex items-center justify-center text-white gap-3">
                    <img src="<?= THEME_URL;?>/images/icon-line.webp" alt="">
                    <span>LINEで簡単問い合わせ</span>
                </a>
            </div>
        </div>
    </header>

