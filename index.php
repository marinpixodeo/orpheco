<?php get_header(); ?>
<div id="content" class="site-content">
    <section class="section-mv relative">
        <div class="h-[306px] bg-[var(--color-blue)]">
            <div class="relative h-full w-full flex items-end justify-center">
                <h1 class="my-0 text-white text-[170px] font-bold leading-[109px] !font-(family-name:--font-cormorant) whitespace-nowrap">SHINE CAR CONCIERGE</h1>
                <span class="absolute bg-[var(--color-white)] text-[35px] tracking-[9.5px] leading-[45px] px-[90px] py-[10px] font-bold bottom-[23px] text-left">新車の感動をいつまでも</span>
            </div>
        </div>
        <div class="relative flex justify-center">
            <p class="absolute top-[44px] my-0 font-bold text-[28px] tracking-[2.8px] leading-[36px] text-white text-center">カーコーティング・洗車のことなら<br>愛車の輝きコンシェルジュ</p>
            <img class="w-full aspect-[1920/610] mt-[-16px] object-cover object-center duration-300 ease-in-out" src="<?= THEME_URL ?>/images/hd_bg.webp" alt="">
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="relative bg-white py-[100px] pb-[91px]">
        <img class="left-0 top-0 absolute z-0" src="<?= THEME_URL ?>/images/greeting_img.webp ?>" />
        <div class="container-responsive relative z-10">
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h3 class="section-title">GREETING</h3>
                    <div class="highlight-text  bg-[#fff] !text-[var(--color-blue)] pl-[12px] py-[8px]">『新車のような輝き』を取り戻しませんか？</div>
                </div>
                <div class="justify-start w-[411px] tracking-[1.6px]">
                    <span class="block text-base font-medium leading-loose mb-[41px]">当窓口は、<br/>石川県金沢を拠点にカーコーティングや、<br/>洗車のご相談を承っております。<br/></span>
                    <span class="inline-block bg-[var(--color-blue-50)] box-decoration-clone leading-[20px] text-[18px] text-white font-medium tracking-[1.8]">当窓口からのご依頼には、<br/></span>
                    <span class="inline-block bg-[var(--color-blue-50)] box-decoration-clone leading-[20px] text-[18px] text-white font-medium tracking-[1.8] mt-[13px]">全車AIMS製の最先端コーティング剤を使用。<br/></span>
                    <span class="block text-base font-medium leading-loose mt-[3px]"><br/>新車・中古車、国産・輸入車を問わず、<br/>どんな車種でも柔軟に対応いたします。<br/>皆さまの愛車の美観や耐久性を守り、<br/>安心できるカーライフをお届けいたしますので、<br/>コーティングや洗車のご依頼先にお困りの方は、<br/>ぜひお気軽にご相談ください。</span>
                </div>
            </div>
        </div>

    </section>

    <section class="relative bg-[var(--color-blue)] pt-[100px] pb-[100px]">
        <div class="container-responsive">
            <div class="flex flex-col items-center w-full">
                <h3 class="section-title !text-white">TROUBLE</h3>
                <div class="highlight-text mt-[-3px] !text-white">こんなお悩みありませんか？</div>
            </div>
            <div class="flex justify-center items-start gap-x-7 gap-y-7 flex-wrap mt-[48px]">
                <div class="w-[340px] flex flex-col justify-start items-start gap-3.5">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-01.webp" />
                    <div class="self-stretch text-center justify-center text-white text-xl font-bold leading-[27px] tracking-widest">納車日にあわせてコーティング<br/>してくれるところを探している</div>
                </div>
                <div class="w-[340px] flex flex-col justify-start items-start gap-3.5">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-02.webp" />
                    <div class="self-stretch text-center justify-center text-white text-xl font-bold leading-[27px] tracking-widest">コーティングの種類が多くて、<br/>どれが合うのか分からない</div>
                </div>
                <div class="w-[340px] flex flex-col justify-start items-start gap-3.5">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-03.webp" />
                    <div class="self-stretch text-center justify-center text-white text-xl font-bold leading-[27px] tracking-widest">車がない時間があると困るため<br/>車を預けることに抵抗がある</div>
                </div>
                <div class="w-[340px] flex flex-col justify-start items-start gap-3.5">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-04.webp" />
                    <div class="self-stretch text-center justify-center text-white text-xl font-bold leading-[27px] tracking-widest">施工後すぐに艶が消えないか心配</div>
                </div>
                <div class="w-[340px] flex flex-col justify-start items-start gap-3.5">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-05.webp" />
                    <div class="self-stretch text-center justify-center text-white text-xl font-bold leading-[27px] tracking-widest">洗車したいけど、機械でやるのは傷がつかないか心配</div>
                </div>
                <div class="w-[340px] flex flex-col justify-start items-start gap-3.5">
                    <img class="aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/trouble_list_img-06.webp" />
                    <div class="self-stretch text-center justify-center text-white text-xl font-bold leading-[27px] tracking-widest">愛車を丁寧に扱ってもらえる<br/>ところに頼みたい</div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative overflow-hidden py-[100px] bg-[#E3E7E9]">
        <div class="absolute top-[12px] left-[50%] transform -translate-3/6 w-0 h-0
            border-l-[146px] border-l-transparent
            border-r-[146px] border-r-transparent
            border-t-[50px] border-t-[var(--color-blue)]">
        </div>
        <div class="container-responsive">
            <div class="flex flex-col items-center w-full">
                <h3 class="section-title ">COMIC</h3>
                <div class="highlight-text mt-[-3px] pl-[32px]">マンガで分かる愛車の輝きコンシェルジュ？</div>
            </div>
            <div class="w-[760px] mx-auto mt-[47px] aspect-[760/427] object-cover object-center bg-[#C7C7C7]"></div>
        </div>
    </section>
    <section class="relative pt-[100px] pb-[99px]">
        <img class="absolute top-0 right-0" src="<?= THEME_URL ?>/images/reason_img.webp" alt="">
        <div class="container-responsive relative !max-w-[1320px]">
            <div class="flex flex-col items-center w-full">
                <div class="section-title ">REASON</div>
                <div class="highlight-text mt-[-3px]">愛車の輝きコンシェルジュが選ばれる理由3選</div>
            </div>
            <div class="flex justify-between gap-[25px] flex-wrap mt-[48px]">
                <div class="w-[410px] pt-[21px] px-[10px] pb-[30px] bg-white inline-flex flex-col justify-start items-center gap-5">
                    <div class="flex flex-col justify-start items-center w-full border-b-[1px] border-[#C7C7C7] pb-[14px]">
                        <span class="text-slate-500 text-3xl font-bold leading-10 tracking-[4px]">01</span>
                        <span class="block leading-[26px] tracking-[2px] text-xl font-bold mt-[-1px] text-center">業界最高峰のコーティング剤<br/>『AIMS』を使用</span>
                    </div>
                    <img class="max-w-[340px] aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/reason_list_img-01.webp" />
                    <div class="max-w-[340px] mx-auto text-justify justify-start text-base font-medium leading-relaxed tracking-[1.6px]">5年以上の耐久実験と1,000台以上の実車テストを経て商品化された、商用コーティング剤を使用しております。</div>
                </div>
                <div class="w-[410px] pt-[21px] px-[10px] pb-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.10)] inline-flex flex-col justify-start items-center gap-5">
                    <div class="flex flex-col justify-start items-center w-full border-b-[1px] border-[#C7C7C7] pb-[14px]">
                        <span class="text-slate-500 text-3xl font-bold leading-10 tracking-[4px]">02</span>
                        <span class="block leading-[26px] tracking-[2px] text-xl font-bold mt-[-1px] text-center">急な依頼もOK！<br/>即日依頼可能</span>
                    </div>
                    <img class="max-w-[340px] aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/reason_list_img-02.webp" />
                    <div class="max-w-[340px] mx-auto text-justify justify-start text-base font-medium leading-relaxed tracking-[1.6px]">納車に合わせて依頼できる業者をお探しの方はぜひ当窓口にお任せください。</div>
                </div>
                <div class="w-[410px] pt-[21px] px-[10px] pb-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.10)] inline-flex flex-col justify-start items-center gap-5">
                    <div class="flex flex-col justify-start items-center w-full border-b-[1px] border-[#C7C7C7] pb-[14px]">
                        <span class="text-slate-500 text-3xl font-bold leading-10 tracking-[4px]">03</span>
                        <span class="block leading-[26px] tracking-[2px] text-xl font-bold mt-[-1px] text-center">無料の<br/>代車サービス</span>
                    </div>
                    <img class="max-w-[340px] aspect-[340/210] object-cover object-center" src="<?= THEME_URL ?>/images/reason_list_img-03.webp" />
                    <div class="max-w-[340px] mx-auto text-justify justify-start text-base font-medium leading-relaxed tracking-[1.6px]">お仕事やお出かけのご予定があっても無理なくご依頼いただけるよう、無料で代車を貸し出しております。お気軽にお申し付けください。</div>
                </div>
            </div>
        </div>
    </section>

    <div class="h-[1814px] relative bg-white overflow-hidden">
        <div class="relative pt-[90px] pb-[101px]">
            <img class="w-full !h-full left-0 top-0 absolute object-center object-cover" src="<?= THEME_URL ?>/images/point_list-bg-01.webp" />
            <div class="container-responsive relative z-[1]">
                <div class="flex justify-end ">
                    <div class="max-w-[710px] flex justify-between gap-[35px]">
                        <div class="flex flex-col mt-[14px] pl-[10px] tracking-[1.7px]">
                            <p class="my-0 text-white font-medium leading-[27px]">当窓口が採用するAIMSのコーティング剤は、<span class="inline ml-[-10px] pl-[10px] bg-[var(--color-blue-50)] box-decoration-clone leading-[20px] text-[18px] text-white font-medium tracking-[1.8px]">5年以上にわたる耐久性実験</span>と、実際の路上環境で行われ<span class="inline bg-[var(--color-blue-50)] box-decoration-clone leading-[20px] text-[18px] text-white font-medium tracking-[1.8px]">た1,000台以上の実車テスト</span>をクリアし、さらに全国のショップによる評価を経て商品化された“選ばれし高性能溶剤”です。</p>
                            <div class="bg-white px-[20px] pt-[19px] pb-[19px] mt-[28px]">
                                <p class="my-0 text-[18px] font-bold border-b-[1px] border-[#C7C7C7] pb-[8px] w-[475px] mb-[15px]">ここが違う！AIMSの溶剤</p>
                                <ul class="my-0 text-[18px] font-medium leading-[27px] list-none pl-0 text-[16px] tracking-[-0.4px] leading-[32px] ml-[-2px]">
                                    <li>・高純度ガラス皮膜でキズ・酸性雨・汚れを強力ブロック</li>
                                    <li>・深みと透明感のある鏡面仕上げの艶を実現</li>
                                    <li>・防汚性に優れ、軽い洗車だけで美しさを維持</li>
                                </ul>
                            </div>
                            <a class="w-[350px] h-[60px] mt-[20px] bg-[var(--color-blue-50)] rounded-lg inline-flex justify-center items-center gap-2.5 overflow-hidden">
                                <img class="size-5 mt-[2px]" src="<?= THEME_URL ?>/images/icon-ins.webp ?>" />
                                <span class="justify-start text-white text-base font-bold tracking-normal">詳しく知りたい方は実績一覧へ</span>
                            </a>
                        </div>
                        <div class="flex gap-[10px] text-white">
                            <p class="w-7 font-bold text-[28px] text-center my-0 leading-[36px]">最高水準のコーティング</p>
                            <p class="w-7 font-bold text-[28px] text-center my-0 leading-[36px] break-all">AIMSで叶える</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative pt-[134px] pb-[140px]">
            <img class="w-full left-0 top-0 absolute" src="<?= THEME_URL ?>/images/point_list-bg-02.webp" />
            <div class="container-responsive relative z-[1]">
                <div class="flex justify-start">
                    <div class="max-w-[701px] flex justify-between gap-[35px]">
                        <div class="flex flex-col mt-[14px] tracking-[1.7px]">
                            <p class="my-0 text-white font-medium leading-[26.4px] tracking-[1.6px]">「納車が明日に迫っている」「急に時間ができたから今日中に頼みたい」<br/><br/>そんなお急ぎのご依頼にも、当窓口では柔軟にお応えしております。<br/>
                                <span class="inline pl-[3px] bg-[var(--color-blue-50)] box-decoration-clone leading-[26.4px] text-[18px] text-white font-medium ">スケジュールに空きがあれば即日のご依頼も対応可能。</span><br/><br/>
                                急ぎのご依頼でもクオリティを落とすことなく、短時間でも最大限の仕上がりを補償いたします。皆さまの愛車の状態に合わせた最適なプランをご提案いたしますので、まずはお気軽にご相談ください。</p>
                        </div>
                        <div class="flex gap-[10px] text-white mt-[6px]">
                            <p class="w-7 font-bold text-[28px] text-center my-0 leading-[36px]">プロの仕上げを</p>
                            <p class="w-7 font-bold text-[28px] text-center my-0 leading-[36px] break-all">思い立ったその日に</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative pt-[116px] pb-[101px]">
            <img class="w-full left-0 top-0 absolute" src="<?= THEME_URL ?>/images/point_list-bg-03.webp" />
            <div class="container-responsive relative z-[1]">
                <div class="flex justify-end">
                    <div class="max-w-[701px] flex justify-between gap-[35px]">
                        <div class="flex flex-col mt-[14px] tracking-[1.7px]">
                            <p class="my-0 text-white font-medium leading-[26.4px] tracking-[1.6px]">当窓口では、施工期間中にご利用いただける無料代車サービスをご用意しております。清潔かつ整備済みの車両をすぐにお貸しできるので、「車がないと困る」という方も安心してご依頼いただけます。<br/><br/>さらに、コーティングメインでありながらボディメンテナンスや洗車、カーディテイリングなど様々なサービスを提供しておりますので、どんなご依頼でも安心してお任せください。<br/><br/><span class="inline bg-[var(--color-blue-50)] box-decoration-clone leading-[20px] text-[18px] text-white font-medium tracking-[2px]">手洗い洗車・鉄粉除去・艶出し磨きなど、愛車を美しく保つためのケアはもちろん、冬季のメンテナンスや経年車の塗装リフレッシュにも対応。</span>施工後も継続的にお付き合いいただけるよう、しっかりサポートさせていただきます。</p>
                        </div>
                        <div class="flex gap-[10px] text-white mt-[5px]">
                            <p class="w-7 font-bold text-[28px] text-center my-0 leading-[36px]">充実した施工メニュー</p>
                            <p class="w-7 font-bold text-[28px] text-center my-0 leading-[36px] break-all">無料の代車サービス＆</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative bg-white overflow-hidden pt-[98px] pb-[100px]">
        <div class="container-responsive">
            <div class="flex flex-col items-center w-full">
                <div class="section-title ">REVIEW</div>
                <div class="highlight-text mt-[-3px]">ご依頼いただいたお客様のお声</div>
            </div>
            <div class="max-w-[963px] mx-auto flex flex-col items-center mt-[48px] gap-7.5">
                <div class="flex items-end gap-7">
                    <img class="w-[103px]" src="<?= THEME_URL ?>/images/review_icon.webp" />
                    <div class="flex px-[42px] pr-[35px] py-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.20)] flex justify-center items-center gap-2.5">
                        <div class="text-base font-medium leading-relaxed tracking-[1.9px]">MASERATIの磨きやコーティングや洗車でお世話になりました。とても技術力が高くプロの仕事をして頂きました。綺麗な仕上がりと良心的な価格に大満足です。スタッフさんもとても誠実な方なので安心して大事な愛車を依頼出来ます。国産も外車もお勧めです！！</div>
                    </div>
                </div>
                <div class="flex items-end gap-7">
                    <img class="w-[103px]" src="<?= THEME_URL ?>/images/review_icon.webp" />
                    <div class="flex px-[42px] pr-[35px] py-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.20)] flex justify-center items-center gap-2.5">
                        <div class="text-base font-medium leading-relaxed tracking-[1.9px]">本日コーティングメンテナンスを時間をかけてしっかりとしてもらいました。自分で洗車したのと違って納車時の輝きを取り戻した感じです。以前もデントリペアしてもらい今回も洗車のいい話しを聞けました。次回もよろしくお願いします。</div>
                    </div>
                </div>
                <div class="flex items-end gap-7">
                    <img class="w-[103px]" src="<?= THEME_URL ?>/images/review_icon.webp" />
                    <div class="flex px-[42px] pr-[35px] py-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.20)] flex justify-center items-center gap-2.5">
                        <div class="text-base font-medium leading-relaxed tracking-[1.9px]">ボディのコーティングと窓ガラスコーティングをしてもらいました。とても満足のいく仕上がりで嬉しかったです。スタッフさんの対応もすごく良かったです。今度はメンテナンスで依頼すると思うのでよろしくお願いします。</div>
                    </div>
                </div>
                <div class="flex items-end gap-7">
                    <img class="w-[103px]" src="<?= THEME_URL ?>/images/review_icon.webp" />
                    <div class="flex px-[42px] pr-[35px] py-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.20)] flex justify-center items-center gap-2.5">
                        <div class="text-base font-medium leading-relaxed tracking-[1.9px]">3～4年洗車や手入れしておらず放ったらかしにしていたので長年の汚れが蓄積していて、、自分で軽く手洗いしても全く綺麗にならず諦めてましたが、知り合いに紹介して貰い今回初めてプロに洗車をお願いしてみました！スタンドでして貰う洗車よりは少しお値段しますが、この状態からこんなにも綺麗にして貰えるクオリティや1日かけて丁寧に磨いてくれることを加味しても納得のお値段かなと思いました。コーティングしてもらったことで自分でも綺麗を維持しやすくなると教えていただけたので、これからのお手入れも楽しみです！私は軽自動車/SSサイズ、24,200円でした！(リセット洗車+艶出し磨き)参考までに！ほんまに綺麗！またお願いしたいです^_^</div>
                    </div>
                </div>
                <div class="flex items-end gap-7">
                    <img class="w-[103px]" src="<?= THEME_URL ?>/images/review_icon.webp" />
                    <div class="flex px-[42px] pr-[35px] py-[30px] bg-white shadow-[4px_4px_10px_0px_rgba(6,48,70,0.20)] flex justify-center items-center gap-2.5">
                        <div class="text-base font-medium leading-relaxed tracking-[1.9px]">当日に洗車予約しましたが、快く受けていただきました。丁寧な対応で仕上がりも良かったです。またお願いします。</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative pt-[80px] pb-[78px]">
        <img class="absolute top-0 left-0" src="<?= THEME_URL ?>/images/cta_bg.webp" alt="">
        <div class="container-responsive min-w-[1320px] relative z-[1]">
            <div class="flex justify-between items-center">
                <div class="w-[calc(50%-1px)]">
                    <div class="section-title !text-white">CONTACT</div>
                    <div class="highlight-text !text-white mt-[-4px]">お問い合わせはこちら</div>
                </div>
                <div class="w-[calc(50%-1px)] bg-white flex items-center justify-between px-[30px] py-[42px] gap-[30px] mt-[-2px] duration-300 ease-in-out">
                    <div class="flex items-center mt-[-1px]">
                        <a class="flex items-end flex-col justify-center !no-underline text-[36px] font-bold tracking-[0px] text-[var(--color-blue)] mt-[-16px]" href="tel:090-4324-0225">
                        <span class="flex items-center">
                            <span class="mr-[10px] mt-2 leading-1 inline-block"><img src="<?= THEME_URL ?>/images/icon-tel.webp" ></span>090-4324-0225
                        </span>
                            <span class="block text-[14px] text-[var(--color-blue-50)] font-medium leading-1 tracking-[0.2px] mt-[6px]">営業時間│9 : 00～19 : 00(不定休)</span>
                        </a>
                    </div>

                    <a href="#inquiry" class="hidden md:flex btn bg-[var(--color-blue-50)] rounded-[8px] w-[260px] h-[70px] flex items-center justify-center text-white gap-3">
                        <img src="<?= THEME_URL;?>/images/icon-line.webp" alt="">
                        <span>LINEで簡単問い合わせ</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

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

    <section class="relative bg-white overflow-hidden bg-[#FEEEE9] pt-[100px] pb-[100px]">
        <div class="container-responsive">
            <div class="w-full flex justify-between gap-8 items-start">
                <div class="flex flex-col items-start">
                    <div class="section-title ">INFO</div>
                    <div class="highlight-text text-left mt-[-3px]">窓口概要</div>
                </div>
                <div class="w-full lg:max-w-[800px]">
                    <div data-aos="fade-up" data-aos-delay="200" class="bg-white w-full rounded-[8px] px-[38px] mt-[-20px] pb-[40px]">
                        <table class="w-full">
                            <tbody>
                            <?php foreach ($table_company as $key => $value) :  ?>
                                <tr>
                                    <td class="w-[100px] sm:w-[201px] text-sm md:text-[16px] align-middle font-bold text-[var(--color-orange)] tracking-[1.5px] border-b border-[#C7C7C7]">
                                        <?= $key ?>
                                    </td>
                                    <td class="px-5 py-[15px] sm:pt-[20px] sm:pb-[24px] leading-[20px] md:leading-[24px] text-sm md:text-[16px] tracking-[1.6px]  <?php if($key == '所在地') echo '!tracking-[0.8px]'?> border-b border-[#C7C7C7]">
                                        <?= nl2br($value); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="400" class=" max-w-full lg:max-w-[800px]">
                        <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6000!2d136.98896710737566!3d35.203360104066476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60036fc5e7fcc54d%3A0x6d765d74cc68a93a!2z5pel5pys44CB44CSNDYzLTAwMjEg5oSb55-l55yM5ZCN5Y-k5bGL5biC5a6I5bGx5Yy65aSn5qOu77yR5LiB55uu77yS77yR77yR77yU!5e0!3m2!1sja!2sus!4v1755771893723!5m2!1sja!2sus"
                                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
