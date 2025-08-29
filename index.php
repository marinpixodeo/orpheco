<?php get_header(); ?>
<div id="content" class="site-content">
    <section class="section-mv relative">
        <div class="relative z-[1] h-[206px] bg-[var(--color-blue)]
            md:h-[306px]
        ">
            <div class="relative h-full w-full flex items-end justify-center" data-aos="fade-up">
                <h1 class="my-0 text-white text-[100px] font-bold leading-[64px] !font-(family-name:--font-cormorant) whitespace-nowrap md:text-[170px]
                    md:text-[170px] md:leading-[109px]
                    ">SHINE CAR CONCIERGE</h1>
                <span class="absolute bg-[var(--color-white)] text-[25px] tracking-[5.4px] leading-[25px] pl-[2.5%] pr-[2.5%] py-[5px] font-bold bottom-[13px] text-left
                    md:text-[35px] md:tracking-[10.4px] md:leading-[45px] md:pl-[90px] md:pr-[80px] md:py-[10px] md:bottom-[23px]
                    ">新車の感動をいつまでも</span>
            </div>
        </div>
        <div class="relative flex justify-center bg-[#060606]">
            <p  data-aos="fade-up" data-aos-delay="200" class="absolute top-[44px] z-10 my-0 font-bold text-[20px] tracking-[1px] leading-[26px] text-white text-center
            md:text-[28px] md:tracking-[2.8px] md:leading-[36px]
">カーコーティング・洗車のことなら<br>愛車の輝きコンシェルジュ</p>
            <img data-aos="fade-up" data-aos-delay="300" class="
            w-auto aspect-[1.6] mt-[40px] object-cover object-center
            md:!h-[610px] md:aspect-auto md:mt-[-16px]
            " src="<?= THEME_URL ?>/images/hd_bg.webp" alt="">
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="relative bg-white py-[50px] md:py-[100px] md:pb-[91px]">
        <img class="!h-full object-cover object-[-70vw_center] sm:object-[-60vw_center] left-0 top-0 absolute z-0 md:object-center" src="<?= THEME_URL ?>/images/greeting_img.webp ?>" />
        <div class="contents_box relative z-10">
            <div class="flex justify-between flex-col md:flex-row">
                <div data-aos="fade-up" data-aos-delay="200" class="flex flex-col">
                    <h3 class="section-title">GREETING</h3>
                    <div class="highlight-text  bg-[#fff] !text-[var(--color-blue)] pl-[12px] py-[8px]">『新車のような輝き』を取り戻しませんか？</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="justify-start w-full text-center mt-[30px] tracking-[1px] md:w-[411px] md:text-left md:mt-0 md:tracking-[1.6px]">
                    <span class="block text-base font-medium leading-loose mb-[31px]">当窓口は、<br/>石川県金沢を拠点にカーコーティングや、<br/>洗車のご相談を承っております。<br/></span>
                    <span class="inline bg-[linear-gradient(180deg,transparent_10%,var(--color-blue-50)_0)] box-decoration-clone leading-[1.5] md:leading-[2] text-[18px] text-white font-medium tracking-[1.8]">当窓口からのご依頼には、<br/><span class="block mb-[15px] md:hidden"></span>全車AIMS製の<br class="md:hidden"/>最先端コーティング剤を使用。<br/></span>
                    <span class="block text-base font-medium leading-loose mt-[3px]"><br/>新車・中古車、国産・輸入車を問わず、<br/>どんな車種でも柔軟に対応いたします。<br/>皆さまの愛車の美観や耐久性を守り、<br/>安心できるカーライフをお届けいたしますので、<br/>コーティングや洗車のご依頼先にお困りの方は、<br/>ぜひお気軽にご相談ください。</span>
                </div>
            </div>
        </div>

    </section>

    <section class="relative bg-[var(--color-blue)] py-[50px] md:pt-[100px] md:pb-[100px]">
        <div class="contents_box">
            <div data-aos="fade-up" class="flex flex-col items-center w-full">
                <h3 class="section-title !text-white">TROUBLE</h3>
                <div class="highlight-text mt-[-3px] !text-white">こんなお悩みありませんか？</div>
            </div>
            <div class="flex justify-center min-[480px]:justify-between md:justify-center items-start gap-x-0 gap-y-7 md:gap-x-7 flex-wrap mt-[48px]">
                <div data-aos="fade-up" data-aos-delay="100" class="w-[340px] min-[480px]:w-[calc(50%-15px)] flex flex-col justify-start items-start gap-3.5 md:w-[340px]">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-01.webp" />
                    <div class="self-stretch text-center justify-center text-white text-[16px] font-bold tracking-normal leading-[20px] md:leading-[27px] md:tracking-widest md:text-xl">納車日にあわせてコーティング<br/>してくれるところを探している</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="w-[340px] min-[480px]:w-[calc(50%-15px)] flex flex-col justify-start items-start gap-3.5 md:w-[340px]">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-02.webp" />
                    <div class="self-stretch text-center justify-center text-white text-[16px] font-bold tracking-normal leading-[20px] md:leading-[27px] md:tracking-widest md:text-xl">コーティングの種類が多くて、<br/>どれが合うのか分からない</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="w-[340px] min-[480px]:w-[calc(50%-15px)] flex flex-col justify-start items-start gap-3.5 md:w-[340px]">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-03.webp" />
                    <div class="self-stretch text-center justify-center text-white text-[16px] font-bold tracking-normal leading-[20px] md:leading-[27px] md:tracking-widest md:text-xl">車がない時間があると困るため<br/>車を預けることに抵抗がある</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="400" class="w-[340px] min-[480px]:w-[calc(50%-15px)] flex flex-col justify-start items-start gap-3.5 md:w-[340px]">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-04.webp" />
                    <div class="self-stretch text-center justify-center text-white text-[16px] font-bold tracking-normal leading-[20px] md:leading-[27px] md:tracking-widest md:text-xl">施工後すぐに艶が消えないか心配</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="500" class="w-[340px] min-[480px]:w-[calc(50%-15px)] flex flex-col justify-start items-start gap-3.5 md:w-[340px]">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-05.webp" />
                    <div class="self-stretch text-center justify-center text-white text-[16px] font-bold tracking-normal leading-[20px] md:leading-[27px] md:tracking-widest md:text-xl">洗車したいけど、<br class="md:hidden"/>機械でやるのは傷がつかないか心配</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="600" class="w-[340px] min-[480px]:w-[calc(50%-15px)] flex flex-col justify-start items-start gap-3.5 md:w-[340px]">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-06.webp" />
                    <div class="self-stretch text-center justify-center text-white text-[16px] font-bold tracking-normal leading-[20px] md:leading-[27px] md:tracking-widest md:text-xl">愛車を丁寧に扱ってもらえる<br/>ところに頼みたい</div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative overflow-hidden pt-[80px] pb-[50px] md:py-[100px] bg-[#E3E7E9]">
        <div class="absolute top-[12px] left-[50%] transform -translate-3/6 w-0 h-0
            border-l-[146px] border-l-transparent
            border-r-[146px] border-r-transparent
            border-t-[50px] border-t-[var(--color-blue)]">
        </div>
        <div class="contents_box">
            <div data-aos="fade-up" class="flex flex-col items-center w-full">
                <h3 class="section-title ">COMIC</h3>
                <div class="highlight-text mt-[-3px] md:pl-[32px]">マンガで分かる愛車の輝きコンシェルジュ？</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="w-full md:w-[760px] mx-auto mt-[47px] aspect-[760/427] object-cover object-center bg-[#C7C7C7]"></div>
        </div>
    </section>
    <section class="relative py-[50px] md:pt-[100px] md:pb-[99px]">
        <img class="absolute top-0 right-0 !h-full object-cover object-center" src="<?= THEME_URL ?>/images/reason_img.webp" alt="">
        <div class="contents_box relative !w-full max-w-[1280px] px-[20px] min-[1320px]:!max-w-[1320px]">
            <div data-aos="fade-up" class="flex flex-col items-center w-full">
                <div class="section-title ">REASON</div>
                <div class="highlight-text mt-[-3px]">愛車の輝きコンシェルジュが選ばれる理由3選</div>
            </div>
            <div class="flex  gap-[25px] flex-col mt-[48px] items-center md:flex-row md:justify-between md:items-stretch">
                <div data-aos="fade-up" data-aos-delay="200" class="w-full max-w-[410px] pt-[21px] px-[10px] pb-[30px] bg-white inline-flex flex-col justify-start items-center gap-5">
                    <div class="flex flex-col justify-start items-center w-full border-b-[1px] border-[#C7C7C7] pb-[14px]">
                        <span class="text-slate-500 text-3xl font-bold leading-10 tracking-[4px]">01</span>
                        <span class="block leading-[26px] tracking-[2px] text-xl font-bold mt-[-1px] text-center">業界最高峰のコーティング剤<br/>『AIMS』を使用</span>
                    </div>
                    <div class="px-[25px]">
                        <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/reason_list_img-01.webp" />
                        <div class="mx-auto text-justify justify-start text-[14px] md:text-[16px] font-medium leading-relaxed mt-[15px] tracking-[1.6px]">5年以上の耐久実験と1,000台以上の実車テストを経て商品化された、商用コーティング剤を使用しております。</div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="w-full max-w-[410px] pt-[21px] px-[10px] pb-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.10)] inline-flex flex-col justify-start items-center gap-5">
                    <div class="flex flex-col justify-start items-center w-full border-b-[1px] border-[#C7C7C7] pb-[14px]">
                        <span class="text-slate-500 text-3xl font-bold leading-10 tracking-[4px]">02</span>
                        <span class="block leading-[26px] tracking-[2px] text-xl font-bold mt-[-1px] text-center">急な依頼もOK！<br/>即日依頼可能</span>
                    </div>
                    <div class="px-[25px]">
                        <img class="max-w-[340px] aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/reason_list_img-02.webp" />
                        <div class="mx-auto text-justify justify-start text-[14px] md:text-[16px] font-medium leading-relaxed mt-[15px] tracking-[1.6px]">納車に合わせて依頼できる業者をお探しの方はぜひ当窓口にお任せください。</div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="400" class="w-full max-w-[410px] pt-[21px] px-[10px] pb-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.10)] inline-flex flex-col justify-start items-center gap-5">
                    <div class="flex flex-col justify-start items-center w-full border-b-[1px] border-[#C7C7C7] pb-[14px]">
                        <span class="text-slate-500 text-3xl font-bold leading-10 tracking-[4px]">03</span>
                        <span class="block leading-[26px] tracking-[2px] text-xl font-bold mt-[-1px] text-center">無料の<br/>代車サービス</span>
                    </div>
                    <div class="px-[25px]">
                        <img class="max-w-[340px] aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/reason_list_img-03.webp" />
                        <div class="mx-auto text-justify justify-start text-[14px] md:text-[16px] font-medium leading-relaxed mt-[15px] tracking-[1.6px]">お仕事やお出かけのご予定があっても無理なくご依頼いただけるよう、無料で代車を貸し出しております。お気軽にお申し付けください。</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-white overflow-hidden">
        <div class="relative py-[50px] md:pt-[90px] md:pb-[101px]">
            <img class="w-full !h-full left-0 top-0 absolute object-center object-cover" src="<?= THEME_URL ?>/images/point_list-bg-01.webp" />
            <div class="contents_box relative z-[1]">
                <div class="flex justify-end ">
                    <div class="max-w-[710px] flex flex-col-reverse md:flex-row justify-between gap-[35px]">
                        <div data-aos="fade-up" class="flex flex-col mt-[14px] pl-0 tracking-[1.7px] md:pl-[10px]">
                            <p class="my-0 text-white font-medium leading-[27px]"><span class="mr-[-10px]">当窓口が採用するAIMSのコーティング剤は、</span><span class="inline bg-[linear-gradient(180deg,transparent_20%,var(--color-blue-50)_0)] box-decoration-clone leading-[20px] text-[18px] text-white font-medium tracking-[1.8px]">  5年以上にわたる耐久性実験</span>と、実際の路上環境で行われ<span class="inline bg-[linear-gradient(180deg,transparent_21%,var(--color-blue-50)_0)] box-decoration-clone leading-[20px] text-[18px] text-white font-medium tracking-[1.8px]">た1,000台以上の実車テスト</span>をクリアし、さらに全国のショップによる評価を経て商品化された“選ばれし高性能溶剤”です。</p>
                            <div class="bg-white px-[20px] pt-[19px] pb-[19px] mt-[28px]">
                                <p class="my-0 text-[16px] md:text-[18px] font-bold border-b-[1px] border-[#C7C7C7] pb-[8px] w-full max-w-[475px] mb-[15px]">ここが違う！AIMSの溶剤</p>
                                <ul class="my-0 text-[16px] md:text-[18px] font-medium leading-[27px] list-none pl-0 text-[16px] tracking-[-0.4px] leading-[32px] ml-[-2px]">
                                    <li>・高純度ガラス皮膜でキズ・酸性雨・汚れを強力ブロック</li>
                                    <li>・深みと透明感のある鏡面仕上げの艶を実現</li>
                                    <li>・防汚性に優れ、軽い洗車だけで美しさを維持</li>
                                </ul>
                            </div>
                            <a class="w-full max-w-[350px] h-[60px] mt-[20px] bg-[var(--color-blue-50)] rounded-lg inline-flex justify-center items-center gap-2.5 overflow-hidden">
                                <img class="size-5 mt-[2px]" src="<?= THEME_URL ?>/images/icon-ins.webp ?>" />
                                <span class="justify-start text-white text-base font-bold tracking-normal ">詳しく知りたい方は実績一覧へ</span>
                            </a>
                        </div>
                        <div data-aos="fade-up" class="flex gap-0 md:gap-[10px] flex-col-reverse md:flex-row text-white">
                            <p class="md:w-7 font-bold text-[24px] md:text-[28px] text-center md:text-left my-0 pt-[6px] tracking-[4px] md:tracking-[8px] leading-[26px] md:[writing-mode:vertical-lr]">最高水準のコーティング</p>
                            <p class="md:w-7 font-bold text-[24px] md:text-[28px] text-center my-0 leading-[36px] break-all">AIMSで叶える</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative py-[50px] md:pt-[134px] md:pb-[140px]">
            <img class="w-full !h-full right-0 left-auto md:left-0 top-0 absolute object-center object-cover" src="<?= THEME_URL ?>/images/point_list-bg-02.webp" />
            <div class="contents_box relative z-[1]">
                <div data-aos="fade-up" class="flex justify-start">
                    <div class="max-w-[701px] flex flex-col-reverse md:flex-row justify-between gap-[35px]">
                        <div class="flex flex-col mt-[14px] tracking-[1.7px]">
                            <p class="my-0 text-white font-medium leading-[26.4px] tracking-[1.6px]">「納車が明日に迫っている」「急に時間ができたから今日中に頼みたい」<br/><br/>そんなお急ぎのご依頼にも、当窓口では柔軟にお応えしております。<br/>
                                <span class="inline pl-[3px] bg-[linear-gradient(180deg,transparent_20%,var(--color-blue-50)_0)] box-decoration-clone leading-[26.4px] text-[18px] text-white font-medium mr-[-10px]">スケジュールに空きがあれば即日のご依頼も対応可能。</span><br/><br/>
                                急ぎのご依頼でもクオリティを落とすことなく、短時間でも最大限の仕上がりを補償いたします。皆さまの愛車の状態に合わせた最適なプランをご提案いたしますので、まずはお気軽にご相談ください。</p>
                        </div>
                        <div class="flex gap-0 md:gap-[10px] flex-col-reverse md:flex-row text-white mt-[6px]">
                            <p class="md:w-7 font-bold text-[24px] md:text-[28px] text-center my-0 leading-[36px] tracking-[2px] md:tracking-normal">プロの仕上げを</p>
                            <p class="md:w-7 font-bold text-[24px] md:text-[28px] text-center my-0 leading-[36px] tracking-[2px] md:tracking-normal break-all">思い立ったその日に</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative py-[50px] md:pt-[116px] md:pb-[117px]">
            <img class="w-full !h-full left-0 top-0 absolute object-center object-cover" src="<?= THEME_URL ?>/images/point_list-bg-03.webp" />
            <div class="contents_box relative z-[1]">
                <div data-aos="fade-up" class="flex justify-end">
                    <div class="max-w-[701px] flex flex-col-reverse md:flex-row justify-between gap-[35px]">
                        <div class="flex flex-col mt-[14px] tracking-[1.7px]">
                            <p class="my-0 text-white font-medium leading-[26.7px] tracking-[1.6px]">当窓口では、施工期間中にご利用いただける無料代車サービスをご用意しております。清潔かつ整備済みの車両をすぐにお貸しできるので、「車がないと困る」という方も安心してご依頼いただけます。<br/><br/>さらに、コーティングメインでありながらボディメンテナンスや洗車、カーディテイリングなど様々なサービスを提供しておりますので、どんなご依頼でも安心してお任せください。<br/><br/><span class="inline bg-[linear-gradient(180deg,transparent_20%,var(--color-blue-50)_0)] box-decoration-clone leading-[20px] text-[18px] text-white font-medium tracking-[2px]">手洗い洗車・鉄粉除去・艶出し磨きなど、愛車を美しく保つためのケアはもちろん、冬季のメンテナンスや経年車の塗装リフレッシュにも対応。</span>施工後も継続的にお付き合いいただけるよう、しっかりサポートさせていただきます。</p>
                        </div>
                        <div class="flex gap-0 md:gap-[10px] flex-col-reverse md:flex-row text-white mt-[5px]">
                            <p class="md:w-7 font-bold text-[24px] md:text-[28px] text-center my-0 pt-[6px] tracking-[2px] md:tracking-[8px] leading-[26px] md:[writing-mode:vertical-lr]">充実した施工メニュー</p>
                            <p class="md:w-7 font-bold text-[24px] md:text-[28px] text-center my-0 pt-[6px] tracking-[2px] md:tracking-[8px] leading-[26px] md:[writing-mode:vertical-lr]">無料の代車サービス＆</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-white overflow-hidden py-[50px] md:pt-[98px] md:pb-[100px]">
        <div class="contents_box">
            <div data-aos="fade-up" class="flex flex-col items-center w-full">
                <div class="section-title ">REVIEW</div>
                <div class="highlight-text mt-[-3px]">ご依頼いただいたお客様のお声</div>
            </div>
            <div class="max-w-[963px] mx-auto flex flex-col items-center mt-[48px] gap-7.5">
                <div data-aos="fade-up" data-aos-delay="100" class="flex items-end gap-3 md:gap-7">
                    <img class="w-[60px] md:w-[103px]" src="<?= THEME_URL ?>/images/review_icon.webp" />
                    <div class="flex px-[20px] pr-[20px] py-[20px] md:px-[42px] md:pr-[35px] md:py-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.20)] flex justify-center items-center gap-2.5">
                        <div class="text-[14px] md:text-[16px] font-medium leading-[24px] md:leading-relaxed tracking-normal md:tracking-[1.9px]">MASERATIの磨きやコーティングや洗車でお世話になりました。とても技術力が高くプロの仕事をして頂きました。綺麗な仕上がりと良心的な価格に大満足です。スタッフさんもとても誠実な方なので安心して大事な愛車を依頼出来ます。国産も外車もお勧めです！！</div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="flex items-end gap-3 md:gap-7">
                    <img class="w-[60px] md:w-[103px]" src="<?= THEME_URL ?>/images/review_icon.webp" />
                    <div class="flex px-[20px] pr-[20px] py-[20px] md:px-[42px] md:pr-[35px] md:py-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.20)] flex justify-center items-center gap-2.5">
                        <div class="text-[14px] md:text-[16px] font-medium leading-[24px] md:leading-relaxed tracking-normal md:tracking-[1.9px]">本日コーティングメンテナンスを時間をかけてしっかりとしてもらいました。自分で洗車したのと違って納車時の輝きを取り戻した感じです。以前もデントリペアしてもらい今回も洗車のいい話しを聞けました。次回もよろしくお願いします。</div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="flex items-end gap-3 md:gap-7">
                    <img class="w-[60px] md:w-[103px]" src="<?= THEME_URL ?>/images/review_icon.webp" />
                    <div class="flex px-[20px] pr-[20px] py-[20px] md:px-[42px] md:pr-[35px] md:py-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.20)] flex justify-center items-center gap-2.5">
                        <div class="text-[14px] md:text-[16px] font-medium leading-[24px] md:leading-relaxed tracking-normal md:tracking-[1.9px]">ボディのコーティングと窓ガラスコーティングをしてもらいました。とても満足のいく仕上がりで嬉しかったです。スタッフさんの対応もすごく良かったです。今度はメンテナンスで依頼すると思うのでよろしくお願いします。</div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="400" class="flex items-end gap-3 md:gap-7">
                    <img class="w-[60px] md:w-[103px]" src="<?= THEME_URL ?>/images/review_icon.webp" />
                    <div class="flex px-[20px] pr-[20px] py-[20px] md:px-[42px] md:pr-[35px] md:py-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.20)] flex justify-center items-center gap-2.5">
                        <div class="text-[14px] md:text-[16px] font-medium leading-[24px] md:leading-relaxed tracking-normal md:tracking-[1.9px]">3～4年洗車や手入れしておらず放ったらかしにしていたので長年の汚れが蓄積していて、、自分で軽く手洗いしても全く綺麗にならず諦めてましたが、知り合いに紹介して貰い今回初めてプロに洗車をお願いしてみました！スタンドでして貰う洗車よりは少しお値段しますが、この状態からこんなにも綺麗にして貰えるクオリティや1日かけて丁寧に磨いてくれることを加味しても納得のお値段かなと思いました。コーティングしてもらったことで自分でも綺麗を維持しやすくなると教えていただけたので、これからのお手入れも楽しみです！私は軽自動車/SSサイズ、24,200円でした！(リセット洗車+艶出し磨き)参考までに！ほんまに綺麗！またお願いしたいです^_^</div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="500" class="flex items-end gap-3 md:gap-7">
                    <img class="w-[60px] md:w-[103px]" src="<?= THEME_URL ?>/images/review_icon.webp" />
                    <div class="flex px-[20px] pr-[20px] py-[20px] md:px-[42px] md:pr-[35px] md:py-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.20)] flex justify-center items-center gap-2.5">
                        <div class="text-[14px] md:text-[16px] font-medium leading-[24px] md:leading-relaxed tracking-normal md:tracking-[1.9px]">当日に洗車予約しましたが、快く受けていただきました。丁寧な対応で仕上がりも良かったです。またお願いします。</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-[50px] md:pt-[80px] md:pb-[78px] overflow-hidden">
        <img class="w-full !h-full left-auto right-0 md:left-0 top-0 absolute object-[0%_center] md:object-center object-cover" src="<?= THEME_URL ?>/images/cta_bg.webp" alt="">
        <div class="contents_box relative !w-full !max-w-[1320px] px-[20px] min-[1320px]:!max-w-[1320px] relative z-[1]">
            <div class="flex justify-between items-center flex-col gap-5 md:flex-row md:gap-0">
                <div data-aos="fade-up" class="w-full md:w-[calc(50%-30px)]">
                    <div class="section-title !text-white">CONTACT</div>
                    <div class="highlight-text !text-white mt-[-4px]">お問い合わせはこちら</div>
                </div>
                <div data-aos="fade-up" class="w-[350px] md:w-[calc(50%-1px)] bg-white flex items-center justify-between px-[20px] py-[20px] md:px-[30px] md:py-[42px] gap-[20px] md:gap-[10px] mt-[-2px] duration-300 ease-in-out flex-col md:flex-row min-[1320px]:gap-[30px]">
                    <div class="flex items-center mt-[-1px]">
                        <a class="flex items-end flex-col justify-center !no-underline text-[30px] md:text-[36px] font-bold tracking-[0px] text-[var(--color-blue)] mt-[-16px]" href="tel:090-4324-0225">
                            <span class="flex items-center">
                                <span class="mr-[10px] mt-2 leading-1 inline-block"><img src="<?= THEME_URL ?>/images/icon-tel.webp" ></span>090-4324-0225
                            </span>
                            <span class="block text-[14px] text-[var(--color-blue-50)] font-medium leading-1 tracking-[0.2px] mt-[6px]">営業時間│9 : 00～19 : 00(不定休)</span>
                        </a>
                    </div>
                    <a href="https://line.me/R/ti/p/@564totjb" target="_blank" class="flex btn bg-[var(--color-blue-50)] rounded-[8px] w-full md:w-[260px] h-[50px] md:h-[70px] flex items-center justify-center text-white gap-3">
                        <img class="w-[22px]" src="<?= THEME_URL;?>/images/icon-line.svg" alt="">
                        <span>LINEで簡単問い合わせ</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php
        $table_company = [
            '窓口名' => '愛車の輝きコンシェルジュ',
            '所在地' => '〒920-0003<br>石川県金沢市疋田３丁目67番地',
            '電話番号' => '090-4324-0225',
            'FAX番号' => '0503-488-7083',
            '営業時間' => '9:00～19:00',
            '定休日' => '不定休',
        ];
    ?>

    <section class="relative bg-white overflow-hidden bg-[#FEEEE9] py-[50px] md:pt-[100px] md:pb-[95px]">
        <div class="contents_box">
            <div class="w-full flex justify-between gap-15 md:gap-8 items-center md:items-start flex-col md:flex-row">
                <div data-aos="fade-up" class="flex flex-col items-center md:items-start">
                    <div class="section-title ">INFO</div>
                    <div class="highlight-text text-left mt-[-3px]">窓口概要</div>
                </div>
                <div class="w-full lg:max-w-[800px]">
                    <div data-aos="fade-up" data-aos-delay="200" class="bg-white w-full rounded-[8px] mx-0 md:px-[38px] mt-[-20px] pb-[30px]">
                        <table class="w-full">
                            <tbody>
                            <?php foreach ($table_company as $key => $value) :  ?>
                                <tr>
                                    <td class="w-[100px] sm:w-[201px] text-sm md:text-[16px] align-middle font-bold tracking-[1.5px] border-b border-[#C7C7C7]">
                                        <?= $key ?>
                                    </td>
                                    <td class="px-5 py-[15px] sm:pt-[20px] sm:pb-[24px] leading-[20px] md:leading-[24px] text-sm md:text-[16px] tracking-[1.6px] border-b border-[#C7C7C7]">
                                        <?= nl2br($value); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="300" class=" max-w-ful pl-0 md:pl-[38px] lg:max-w-[800px]">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3202.8964305692284!2d136.6708967771786!3d36.604803378687436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff832cbafc6af23%3A0xd64577175e43706e!2zMy1jaMWNbWUtNjcgSGlraWRhLCBLYW5hemF3YSwgSXNoaWthd2EgOTIwLTAwMDMsIE5o4bqtdCBC4bqjbg!5e0!3m2!1sjs!2s!4v1756389559592!5m2!1sja!2s" height="250" width="100%" height="250" style="border: 0; border-top: 1px solid #000" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
