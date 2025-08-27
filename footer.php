    <footer id="colophon" class="site-footer footer-section">
        <div class="w-[1920px] h-9 relative bg-sky-950 overflow-hidden">
            <div class="left-[772px] top-[12px] absolute justify-start text-white text-xs font-medium font-['Zen_Old_Mincho'] leading-3 tracking-wide">Copyright © 愛車の輝きコンシェルジュ All rights Reserved.</div>
        </div>
    </footer>
<!--    <div class="size- pl-5 pr-7 py-5 bg-slate-500 rounded-tl-lg rounded-bl-lg inline-flex justify-start items-center gap-3.5">-->
<!--        <img class="size-8" src="https://placehold.co/31x31" />-->
<!--        <div class="justify-start"><span class="text-white text-base font-bold font-['Zen_Old_Mincho'] leading-tight">即日のご依頼可能<br/></span><span class="text-white text-lg font-bold font-['Zen_Old_Mincho'] leading-normal">無料相談実施中</span></div>-->
<!--    </div>-->
</div>

<script>
// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

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
