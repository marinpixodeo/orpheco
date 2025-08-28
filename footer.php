    <footer id="colophon" class="site-footer footer-section mb-[60px] md:mb-[0px]">
        <div class="bg-[var(--color-blue)] overflow-hidden">
            <div class="text-white text-xs font-medium leading-3 w-full text-center py-[12px] tracking-[1.2px]">Copyright © 愛車の輝きコンシェルジュ All rights Reserved.</div>
        </div>
    </footer>
    <a href="#" class="hidden md:inline-flex fixed bottom-[19.4%] right-0 py-[17px] pl-[21px] pr-[29px] bg-[var(--color-blue-50)] rounded-tl-lg rounded-bl-lg justify-start items-center gap-[14px]">
        <img class="size-8" src="<?= THEME_URL ?>images/icon-line.svg" />
        <div class="justify-start"><span class="text-white text-base font-bold font-['Zen_Old_Mincho'] leading-tight">即日のご依頼可能<br/></span><span class="text-white text-lg font-bold font-['Zen_Old_Mincho'] leading-normal">無料相談実施中</span></div>
    </a>
</div>

<script>
window.addEventListener("scroll", function() {
    const header = document.getElementById("header");
    if (window.scrollY > 0) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
</script>

<?php wp_footer(); ?>

</body>
</html>
