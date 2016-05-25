
<!DOCTYPE HTML>
<html>
<!--[if lt IE 7]><html class="ie6" lang="en"><![endif]-->
<!--[if IE 7]><html class="ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <title>果壳任意门 - 发现你最爱的网站</title>
  <link rel="stylesheet" href="http://static.guokr.com/skin/anywhere.css?v=c37cce982cb8" />
</head>
<body>
    <div class="container">
        <div class="top-wp">
            <div class="top">
                <a class="top-link" target="_blank" href="http://www.guokr.com/" title="果壳网">果壳网</a>
                <h1 class="element-invisible">果壳任意门</h1>
                <p class="element-invisible">发现你的兴趣</p>
                <div id="addFavorite"><a class="top-keep" href="javascript:void 0;" data-operation="addFavorite"></a></div>
                <div class="top-share" id="share"></div>
                <p class="element-invisible">开启一次未知之旅，发现你最爱的网站</p>
                <div class="top-doors-wp" id="doors">
                    <a id="doorsKey" href="javascript:void 0;" class="top-doors-key" data-operation="openDoor">+</a>
                    <ul class="top-doors">
                      {{-- 在blade模板中定义变量，供blade模板引擎使用 --}}
                      {{-- */$num = 1; /* --}}
                      @foreach($types as $type)
                      <li>
                        <a href="#{{$type->code}}" class="top-doors-{{$num++}}" data-operation="gotoDoor">
                            <strong class="top-doors-l">{{$type->name}}</strong>
                            <span class="top-doors-r">{{$type->code}}</span>
                        </a>
                      </li>
                      @endforeach

                    </ul>
                    <div class="top-doors-tip" id="doorTip">点击“+”你会跳转到一个随机的网站</div>
                </div>
            </div>
        </div>
        <div class="wrap">
            <div class="board fix">
                <div class="board-recommend" id="recommendBoard">
                    <ul>
                      {{-- 显示推荐链接 --}}
                      @foreach($links as $link)
                        @if($link->recommend == 1)
                          <li>
                            <img src="http://img1.guokr.com/gkimage/hf/9z/cy/hf9zcy.png" alt="" width="16" height="16"/>
                            <a target="_blank" href="{{ $link->url }}">{{ $link->name }}</a>
                          </li>
                        @endif
                      @endforeach
                    </ul>
                </div>
                <div class="board-search-b">
                    <div class="board-search">
                        <form action="http://www.wolframalpha.com/input/" type="get" target="_blank">
                            <label for="searchWolf" class="board-search-wolf">WolframAlpha</label>
                            <input  id="searchWolf" type="text" class="board-search-txt" name="i"/>
                            <input type="submit" value="提交" class="board-search-bt" />
                        </form>
                        <form action="http://zh.wikipedia.org/w/index.php" type="get" target="_blank">
                            <label for="searchWiki" class="board-search-wiki">Wikipedia</label>
                            <input  id="searchWiki" type="text" class="board-search-txt" name="search"/>
                            <input type="submit" value="提交" class="board-search-bt" />
                        </form>
                        <form action="http://zh.numberempire.com/primenumbers.php" type="post" target="_blank" class="board-search-last">
                            <label for="searchPai" class="board-search-pai">素数发生器</label>
                            <input  id="searchPai" type="text" class="board-search-txt" name="number"/>
                            <input type="submit" value="提交" class="board-search-bt" />
                        </form>
                    </div>
                </div>
            </div>
            <!--  mark   -->

              @for($c=0; $c < count($categories) ; $c++)

              <div id="{{ $categories[$c]->code }}" calss="title-b">
                <div class="title">
                  <h2>{{ $categories[$c]->name }}</h2>
                  <a href="" class="title-add" target="_blank"><span>+</span>添加网站</a>
                  <a href="javascript:void 0;" class="title-trigger" data-operation="closeBoard">收起</a>
                </div>
              </div>
              {{-- {{dd($categories)}} --}}
              <div class="categorys-hd fix">
                <div class="categorys">
                  @for($s=0; $s < count($sunTypes[$c]); $s++)
                    {{-- */$cnum = $c;$snum = $s;/* --}}
                    <div class="category">
                      <h3><b class="category-{!! ++$cnum !!}-{!! ++$snum !!}"></b>{{$sunTypes[$c][$s]->name}}<s></s></h3>


                      <ul class="list">
                          @for($z=0; $z < 10; $z++)
                            {{-- {{dd($links[$z]->type.",".$sunTypes[$c][$s]->id)}} --}}
                            @if(!empty($links[$z]) && $links[$z]->type == $sunTypes[$c][$s]->id)
                              <li><a data-desc="{{$links[$z]->desc}}" target="_blank" href="{{ $links[$z]->url }}">{{$links[$z]->name}}</a></li>
                            @endif
                          @endfor
                      </ul>

                    </div>
                  @endfor
                </div>
              </div>
            @endfor


            <div class="categorys-hd fix">
                <div class="categorys">

                    <div class="category">
                        <h3><b class="category-1-1"></b>数学<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="中文数学杂志《数学文化》网站" target="_blank" href="http://www.global-sci.org/mc/">数学文化</a></li>




                            <li

                            class='hide'

                            ><a data-desc="一个中文数学博客" target="_blank" href="http://xuefuzi.com/">学夫子</a></li>



                            <li

                            ><a data-desc="欧拉计划，一个解数学题的网站" target="_blank" href="http://projecteuler.net/">Project Euler</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个整理了很多整数数列的网站" target="_blank" href="http://oeis.org/">搜数列</a></li>



                            <li

                            ><a data-desc="国际最知名的数学问答网站" target="_blank" href="http://mathoverflow.net/">MathOverflow</a></li>



                            <li

                            class='hide'

                            ><a data-desc="Wolfram旗下的数学百科网站。" target="_blank" href="http://mathworld.wolfram.com/">MathWorld</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个95后数学爱好者的博客" target="_blank" href="http://exp618.com/">Exp618</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个数学趣题网站" target="_blank" href="http://www.mathpuzzle.com/">Mathpuzzle</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个关于数学、代码、艺术的网站" target="_blank" href="http://xahlee.org/index.html">李杀网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个由四位顶尖数学家联合建立的博客，致力于数学上的多领域合作研究" target="_blank" href="http://polymathprojects.org/">Polymathprojects</a></li>



                            <li

                            class='hide'

                            ><a data-desc="数学家陶哲轩的主页，提供了一些有价值的链接" target="_blank" href="http://www.math.ucla.edu/~tao/">陶泽轩的主页</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个数学问答网站，输入问题可以找寻匹配的答案" target="_blank" href="http://www.mathway.com/">Mathway</a></li>



                            <li

                            class='hide'

                            ><a data-desc="是人人网好友数量最多的心理学主页" target="_blank" href="http://page.renren.com/600098720/index">人人网“心理学”公共主页</a></li>






































































































































































































































































































































































































































































































































































































































































































































































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-2"></b>物理<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="物理门户网站" target="_blank" href="http://phys.org/">Phys.org</a></li>



                            <li

                            ><a data-desc="英国物理学会" target="_blank" href="http://www.iop.org/">物理学会</a></li>



                            <li

                            ><a data-desc="一个面向专业人士的英文物理论坛" target="_blank" href="http://www.physicsforums.com/">物理论坛</a></li>



                            <li

                            ><a data-desc="《物理评论快报》官网" target="_blank" href="http://physics.aps.org/">Physics</a></li>



                            <li

                            ><a data-desc="一个记录粒子物理界大事的博客" target="_blank" href="http://www.quantumdiaries.org/">物理博客</a></li>



                            <li

                            ><a data-desc="著名科普人卢昌海的博客" target="_blank" href="http://www.changhai.org/index.php">卢昌海的博客</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个比较全的物理百科" target="_blank" href="http://hyperphysics.phy-astr.gsu.edu/hbase/hph.html">HyperPhysics</a></li>


























                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-3"></b>天文<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="中国天文科普网论坛" target="_blank" href="http://www.astron.ac.cn/">天之文</a></li>



                            <li

                            ><a data-desc="一个天文相关领域爱好者维护的博客" target="_blank" href="http://astroleaks.lamost.org/">天文理科人</a></li>



                            <li

                            ><a data-desc="1996年建立的天文科普和爱好者网站，包含大量大量图片和文字" target="_blank" href="http://www.cosmoscape.com/">星空天文网</a></li>



                            <li

                            ><a data-desc="中国最早的天文论坛，偏重天文器材的交流" target="_blank" href="http://www.astronomy.com.cn/bbs/">牧夫天文论坛</a></li>



                            <li

                            ><a data-desc="美国国家航空航天局官网" target="_blank" href="http://www.nasa.gov/">NASA</a></li>



                            <li

                            ><a data-desc="国外一个比较有名的天文网站" target="_blank" href="http://www.universetoday.com/">Universe Today</a></li>



                            <li

                            class='hide'

                            ><a data-desc="美国天文学家Phil Plait开设的博客" target="_blank" href="http://www.slate.com/blogs/bad_astronomy.html">Bad Astronomy</a></li>



                            <li

                            class='hide'

                            ><a data-desc="在线观查星空的网站、提供交互的行星数据" target="_blank" href="http://www.wikisky.org/">wikisky</a></li>



                            <li

                            class='hide'

                            ><a data-desc="天象预报、天文新闻、天文科普" target="_blank" href="http://www.skylook.org">星友空间站</a></li>



                            <li

                            ><a data-desc="NASA每日一天文图中文镜像" target="_blank" href="http://www.skylook.org/apod">每日一天文图</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个词条很全的天文百科类网站。" target="_blank" href="http://wiki.skylook.org">维基天文</a></li>



                            <li

                            class='hide'

                            ><a data-desc="天文综合类网站，天象预报栏目较为不错。" target="_blank" href="http://www.skylook.org">星友空间站</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个有关天文的网站，分类栏目有“特别报道 星空写真 海外文摘 观测日志 天文人事”" target="_blank" href="http://bolide.lamost.org/">火流星</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个天文爱好者15年的耕耘，带给人们他自己写的星图软件、自己拍摄的星云和星系，还有各种精彩的星路历程" target="_blank" href="http://Lcsky.org">星星宇宙</a></li>



                            <li

                            class='hide'

                            ><a data-desc="每日推荐一幅中国星空摄影师的经典作品。" target="_blank" href="http://nightchina.net/">夜空中国</a></li>
















                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-4"></b>生物<s></s></h3>
                        <ul class="list">




                            <li

                            ><a data-desc="生物医药综合类网站，提供行业报告、人才招聘等服务" target="_blank" href="http://www.bioon.com/">生物谷</a></li>



                            <li

                            ><a data-desc="一个关于生物样本库的网站" target="_blank" href="http://www.cnbiobank.net/">生物银行</a></li>



                            <li

                            ><a data-desc="生物学生态多样性论坛" target="_blank" href="http://www.planta.cn/forum/index.php">普兰塔</a></li>



                            <li

                            ><a data-desc="中国动物学科普网" target="_blank" href="http://www.blueanimalbio.com/">蓝色动物学</a></li>



                            <li

                            ><a data-desc="台湾物种资料库" target="_blank" href="http://naturesys.com/">自然系图鉴</a></li>



                            <li

                            ><a data-desc="美国国家生物技术信息中心" target="_blank" href="http://www.ncbi.nlm.nih.gov/">NCBI</a></li>



                            <li

                            class='hide'

                            ><a data-desc="关注有商业价值的生物资讯网站" target="_blank" href="http://www.biodiscover.com/">生物探索</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个关于实验室、实验设备与社交的互动网络平台" target="_blank" href="http://www.everlab.net/">everlab实验室</a></li>



                            <li

                            class='hide'

                            ><a data-desc="生物医药综合类网站" target="_blank" href="http://www.bbioo.com/">生物秀</a></li>



                            <li

                            class='hide'

                            ><a data-desc="可以标记野生动植物，APP还提供地理位置的服务" target="_blank" href="http://www.projectnoah.org/">诺亚计划</a></li>



                            <li

                            class='hide'

                            ><a data-desc="汇集了9000多种鸟类的资料" target="_blank" href="http://niaolei.org.cn/">鸟类网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="植物数据库" target="_blank" href="http://www.efloras.org/">efloras</a></li>



                            <li

                            class='hide'

                            ><a data-desc="欧洲生物信息研究所" target="_blank" href="http://www.ebi.ac.uk/">EBI</a></li>



                            <li

                            class='hide'

                            ><a data-desc="蛋白质信息库" target="_blank" href="http://www.uniprot.org/">Uniprot</a></li>



                            <li

                            class='hide'

                            ><a data-desc="中国干细胞研究员交流论坛" target="_blank" href="http://www.stemcell8.cn/">干细胞之家论坛</a></li>



                            <li

                            ><a data-desc="实验室采购专家" target="_blank" href="http://www.biomart.cn/">丁香通</a></li>



                            <li

                            class='hide'

                            ><a data-desc="《自然》杂志中文版" target="_blank" href="http://www.natureasia.com/zh-cn/">自然（中文版）</a></li>



                            <li

                            class='hide'

                            ><a data-desc="用影音和文字记录自然" target="_blank" href="http://ziranzhi.com/">自然志</a></li>











                            <li

                            class='hide'

                            ><a data-desc="将古老的生物文献电子化，整理归类上传，致力于保护与共享全球范围内生物多样性相关的文献资源。" target="_blank" href="http://www.flickr.com/photos/biodivlibrary/sets">生物多样性插画</a></li>






































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-5"></b>医学<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="医学药学生命科学专业网站" target="_blank" href="http://www.dxy.cn/">丁香园</a></li>



                            <li

                            ><a data-desc="提供医学信息服务" target="_blank" href="http://www.i-md.com/">睿医</a></li>



                            <li

                            ><a data-desc="《柳叶刀》杂志官网" target="_blank" href="http://www.thelancet.com/home">柳叶刀</a></li>



                            <li

                            ><a data-desc="医学与健康资讯传播" target="_blank" href="http://www.bazhua.org/">八爪网</a></li>



                            <li

                            ><a data-desc="提供最新的医学资讯和在线临床解决方案" target="_blank" href="http://www.elseviermed.cn/">爱唯医学网</a></li>



                            <li

                            ><a data-desc="为医学生包含各种医学分支的思维导图" target="_blank" href="http://medmind.net/">医学思维导图</a></li>



                            <li

                            class='hide'

                            ><a data-desc="综合性医学期刊《新英格兰杂志》官网" target="_blank" href="http://www.nejm.org/">新英格兰杂志</a></li>



                            <li

                            class='hide'

                            ><a data-desc="美国食品和药物管理局官网" target="_blank" href="http://www.fda.gov/">FDA</a></li>



                            <li

                            class='hide'

                            ><a data-desc="《英国医学杂志》网站" target="_blank" href="http://www.bmj.com/">BMJ</a></li>



                            <li

                            class='hide'

                            ><a data-desc="在线医学百科全书" target="_blank" href="http://www.healthopedia.com/">医学百科</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供目前世界上最重要的医学论文信息及发展趋势" target="_blank" href="http://f1000.com/">f1000</a></li>


















































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-6"></b>心理学<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="脑科学工作者synge的博客" target="_blank" href="http://www.dixin.info/">Never</a></li>



                            <li

                            ><a data-desc="人人网的一个心理学小站" target="_blank" href="http://zhan.renren.com/yiqilaiaixinlixue/">心理享学习</a></li>



                            <li

                            ><a data-desc="中文脑科学论坛" target="_blank" href="http://52brain.com/">我爱脑科学</a></li>



                            <li

                            ><a data-desc="心理学者迟毓凯建立的心理学小站" target="_blank" href="http://www.xlxcn.net/">世纪心理沙龙</a></li>



                            <li

                            ><a data-desc="介绍最新的或者有价值的心理学成果" target="_blank" href="http://www.psyleaks.com/">心理科学流出版</a></li>



                            <li

                            class='hide'

                            ><a data-desc="搜索心理学家和流派的继承发展" target="_blank" href="http://academictree.org/psych/tree.php">心理族谱</a></li>



                            <li

                            class='hide'

                            ><a data-desc="关于心理学的一切，适合对心理学感兴趣的初学者" target="_blank" href="http://www.all-about-psychology.com/learn-psychology.html">关于心理学的一切</a></li>



                            <li

                            class='hide'

                            ><a data-desc="主要是关于行为心理学的博客" target="_blank" href="http://www.spring.org.uk">PsyBlog</a></li>



                            <li

                            class='hide'

                            ><a data-desc="摘录最新的心理学研究" target="_blank" href="http://www.bps.org.uk/publications/research-digest/research-digest">BPS</a></li>



                            <li

                            class='hide'

                            ><a data-desc="脑科学前沿资讯网站" target="_blank" href="http://www.brainfacts.org/">Brainfacts</a></li>



                            <li

                            class='hide'

                            ><a data-desc="社会心理学书籍整理推荐网站" target="_blank" href="http://www.socialpsychology.org/texts.htm">SocialPsychologyNet</a></li>





                            <li

                            class='hide'

                            ><a data-desc="一个提供心理学专业资讯和交流的网站" target="_blank" href="http://www.psychologist.org.cn">科学心理人</a></li>

























































































































                            <li

                            class='hide'

                            ><a data-desc="一个实用的心灵成长互联网平台，并有同名电子杂志。" target="_blank" href="http://www.xintansuo.com/">心探索</a></li>




























                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-7"></b>语言学<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="特色为中文信息处理的中文论坛" target="_blank" href="http://www.pkucn.com/">北大中文论坛</a></li>



                            <li

                            ><a data-desc="汇集了一些语言资料的英文网站" target="_blank" href="http://www.sil.org/linguistics/topical.html/">语言资源</a></li>



                            <li

                            ><a data-desc="提供所有语言的母语发音" target="_blank" href="http://zh.forvo.com/">Forvo</a></li>



                            <li

                            ><a data-desc="北京大学中国语言学研究中心官网" target="_blank" href="http://ccl.pku.edu.cn/">中国语言研究中心</a></li>



                            <li

                            class='hide'

                            ><a data-desc="旨在解释汉字的网络共同协作编写在线汉语辞典" target="_blank" href="http://www.zdic.net/">汉典</a></li>



                            <li

                            ><a data-desc="你我的乡音故事，描绘汉语方言全景" target="_blank" href="http://phonemica.net/">乡音苑</a></li>




















































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-8"></b>人类学<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="人类学普及网站" target="_blank" href="http://www.face21cn.cn">面向21世纪</a></li>



                            <li

                            ><a data-desc="一个人类学的英文博客" target="_blank" href="http://anthropology.net/">人类学网</a></li>



                            <li

                            ><a data-desc="一个专注分子人类学的中文论坛" target="_blank" href="http://www.ranhaer.com/">分子人类学论坛</a></li>



                            <li

                            ><a data-desc="整合了北大、清华、人大社会学系的网站" target="_blank" href="http://www.sachina.edu.cn/index.html">社会学人类学中国网</a></li>


























                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-9"></b>考古学<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="国内较早的历史爱好者讨论区" target="_blank" href="http://no1190.yjq.cc/">小隐在线</a></li>



                            <li

                            ><a data-desc="北大历史系往复论坛" target="_blank" href="http://www.wangf.net/">往复论坛</a></li>



                            <li

                            ><a data-desc="国内公众考古社区" target="_blank" href="http://www.kaoguwang.com/">考古网</a></li>



                            <li

                            ><a data-desc="汇集国内外考古资讯的人人小站" target="_blank" href="http://zhan.renren.com/archnews/">考古资讯</a></li>



                            <li

                            ><a data-desc="中国国家博物馆官网" target="_blank" href="http://www.chnmuseum.cn/">中国国家博物馆</a></li>
















                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-10"></b>经济学<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="国内最大的经济学论坛" target="_blank" href="http://bbs.pinggu.org">人大经济学论坛</a></li>



                            <li

                            ><a data-desc="一个提供经济数据和图标的网站" target="_blank" href="http://research.stlouisfed.org/fred2/">FRED</a></li>



                            <li

                            class='hide'

                            ><a data-desc="哈佛经济学博士郭凯的博客" target="_blank" href="http://www.kaieconblog.net/">人渣经济笔记</a></li>



                            <li

                            ><a data-desc="提供关于博弈论学习资料的英文网站" target="_blank" href="http://www.gametheory.net/">博弈论</a></li>



                            <li

                            ><a data-desc="米塞斯研究所官网" target="_blank" href="http://www.mises.org/">Mises</a></li>



                            <li

                            ><a data-desc="专注经济金融管理领域的词条库" target="_blank" href="http://wiki.mbalib.com/">MBA智库百科</a></li>



                            <li

                            ><a data-desc="经济学家周其仁的文集" target="_blank" href="http://zhouqiren.org/">真实世界的经济学</a></li>



                            <li

                            class='hide'

                            ><a data-desc="整合了很多国际经济的信息资源" target="_blank" href="http://altaplana.com/gate.html">Alta Plana</a></li>



                            <li

                            class='hide'

                            ><a data-desc="北大国家发展研究院论坛" target="_blank" href="http://forum.ccer.edu.cn/">国家发展研究院</a></li>



                            <li

                            class='hide'

                            ><a data-desc="经济数据信息图博客" target="_blank" href="http://visualeconomics.creditloan.com/">视觉经济学</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供经济学课程学习资料" target="_blank" href="http://www.chinaes.org.cn/">中国经济学堂</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个实践大规模协作，开放的维基经济学网站。" target="_blank" href="http://www.macrowikinomics.com/">大规模维基经济学</a></li>



                            <li

                            class='hide'

                            ><a data-desc="博弈论入门专用，很多理论资料里面都有" target="_blank" href="http://gametheory.net/">Game Theory</a></li>














































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-11"></b>地质<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="中国地学专业论坛" target="_blank" href="http://bbs.geonet.cn/">地学论坛</a></li>



                            <li

                            ><a data-desc="几个地学人建立的群博客" target="_blank" href="http://geome.org/">地学人</a></li>



                            <li

                            ><a data-desc="中国最大的古生物、化石科普网站" target="_blank" href="http://www.uua.cn/">化石网</a></li>



                            <li

                            ><a data-desc="地学门户类论坛" target="_blank" href="http://www.geology.com.cn/portal.php">地学探索</a></li>



                            <li

                            ><a data-desc="国外最权威的矿物网站" target="_blank" href="http://www.mindat.org/">Mindat</a></li>



                            <li

                            ><a data-desc="提供生态环境状况、自然灾害、自然资源、气候变化等有用的信息" target="_blank" href="http://www.usgs.gov/">美国地质勘探局</a></li>



                            <li

                            class='hide'

                            ><a data-desc="物探门户类网站" target="_blank" href="http://www.wutan.cn/">物探网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="快乐海洋论坛" target="_blank" href="http://www.joyocean.org/bbs/index.php">JoyOcean</a></li>



                            <li

                            class='hide'

                            ><a data-desc="关于地质、测绘、遥感系统、全球定位系统的综合性论坛" target="_blank" href="http://bbs.3s001.com/">地信论坛</a></li>



                            <li

                            class='hide'

                            ><a data-desc="中国地质行业馆藏最多的专业技术档案馆" target="_blank" href="http://new.ngac.cn/">全国地质资料信息网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="华夏地质资料分享平台主要提供基础地质、矿产地质、地球物理、地球化学、水工环地质及钻探、地质灾害治理、" target="_blank" href="http://www.hxgeo.com">华夏地质资料分享平台</a></li>




















                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-12"></b>化学<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="化学网址导航页" target="_blank" href="http://www.chemonline.net/chemdoor/default.asp">化学之门</a></li>



                            <li

                            ><a data-desc="英国皇家化学学会" target="_blank" href="http://www.rsc.org/">RSC</a></li>



                            <li

                            ><a data-desc="美国化学协会" target="_blank" href="http://portal.acs.org/portal/acs/corg/content">美国化学协会</a></li>



                            <li

                            ><a data-desc="提供包括元素周期表在内的元素特性查询" target="_blank" href="http://www.webelements.com/">元素周期表</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供毒理学数据查询" target="_blank" href="http://toxnet.nlm.nih.gov/">毒理学数据库</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供大约200万种的化合物性质查询" target="_blank" href="http://chemfinder.camsoft.com/chembiofinder/Forms/Home/ContentArea/Home.aspx">化合物性质</a></li>



                            <li

                            class='hide'

                            ><a data-desc="每个元素自己的相册" target="_blank" href="http://www.periodictable.com/">元素图解</a></li>



                            <li

                            class='hide'

                            ><a data-desc="化学改变生活，化学改变未来，了解化学让你的生活更加美好！" target="_blank" href="http://weibo.com/cheminlife">生活中的化学</a></li>








































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-1-13"></b>学术<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="知网学术搜索引擎" target="_blank" href="http://scholar.cnki.net/">知网</a></li>



                            <li

                            ><a data-desc="生物医学领域重要的论文库" target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed">PubMed</a></li>



                            <li

                            ><a data-desc="一个英文科技信息搜索引擎" target="_blank" href="http://www.scirus.com/">scirus</a></li>



                            <li

                            ><a data-desc="国内最大的学术论坛" target="_blank" href="http://emuch.net/bbs/index.php">小木虫</a></li>



                            <li

                            ><a data-desc="科研工作者的社交网络" target="_blank" href="http://www.academia.edu/">Academia</a></li>



                            <li

                            ><a data-desc="谷歌提供的学术论文搜索引擎" target="_blank" href="http://scholar.google.com.hk/schhp?hl=zh-CN">谷歌学术搜索</a></li>



                            <li

                            class='hide'

                            ><a data-desc="中国综合性文献数据库" target="_blank" href="http://oldweb.cqvip.com/">维普</a></li>



                            <li

                            class='hide'

                            ><a data-desc="万方数据知识服务平台" target="_blank" href="http://www.wanfangdata.com.cn">万方</a></li>



                            <li

                            class='hide'

                            ><a data-desc="收集数学、物理、计算机科学、生物学论文预印本的网站" target="_blank" href="http://arxiv.org/">arXiv</a></li>



                            <li

                            class='hide'

                            ><a data-desc="搜索全文免费的英语论文" target="_blank" href="http://www.doaj.org/">DOAJ</a></li>



                            <li

                            class='hide'

                            ><a data-desc="微软提供的学术论文搜索引擎" target="_blank" href="http://academic.research.microsoft.com/">微软学术搜索</a></li>









                            <li

                            class='hide'

                            ><a data-desc="斯坦福哲学百科全书网站是一个集合哲学名词解析的英文资料网站" target="_blank" href="http://plato.stanford.edu/">斯坦福哲学百科全书</a></li>







                            <li

                            class='hide'

                            ><a data-desc="综合性学术论坛" target="_blank" href="http://fxkz.net/forum.php">繁星客栈</a></li>



                            <li

                            class='hide'

                            ><a data-desc="专利搜索" target="_blank" href="http://www2.soopat.com/Home/Index">SooPAT</a></li>






















































































































































































































































                        </ul>
                    </div>

                </div>
            </div>

            <div id='skill' class="title-b">
                <div class="title">
                    <h2>有知识</h2>
                    <a href="http://gate.guokr.com/submit/interest/2/" class="title-add" target='_blank'><span>+</span>添加网站</a>
                    <a href="javascript:void 0;" class="title-trigger" data-operation="closeBoard">收起</a>
                </div>
            </div>
            <div class="categorys-hd fix">
                <div class="categorys">

                    <div class="category">
                        <h3><b class="category-2-1"></b>编程语言<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="用互动的方式教你学习如何编写网页、游戏和程序" target="_blank" href="http://www.codecademy.com/zh/">Codecademy</a></li>



                            <li

                            ><a data-desc="所有的网站建设教程。从基础的HTML到XHTML，到进阶的XML、SQL、数据库、多媒体和WAP" target="_blank" href="http://www.w3school.com.cn/index.html">W3school</a></li>



                            <li

                            ><a data-desc="面向程序员的的在线学习社区" target="_blank" href="http://www.cnblogs.com/">博客园</a></li>



                            <li

                            ><a data-desc="目前中国最大的开源技术社区" target="_blank" href="http://www.oschina.net/">开源中国</a></li>



                            <li

                            ><a data-desc="在线新闻/社区网站，促进软件开发领域知识的传播，为软件开发者提供帮助" target="_blank" href="http://www.infoq.com/cn/">InfoQ</a></li>



                            <li

                            class='hide'

                            ><a data-desc="目前最流行最受欢迎的代码托管网站" target="_blank" href="http://www.github.com">Github</a></li>



                            <li

                            ><a data-desc="最著名的程序员的问答平台" target="_blank" href="http://stackoverflow.com/">StackOverflow</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个用各种不同的编程语言解决同一个问题的网站。" target="_blank" href="http://rosettacode.org/wiki/Rosetta_Code">Rosetta Code</a></li>



                            <li

                            class='hide'

                            ><a data-desc="专业面向开发者的技术问答社区，提出与开发相关的问题，并得到同行的解答和评价" target="_blank" href="http://segmentfault.com/">segmentfault</a></li>



                            <li

                            ><a data-desc="一个提供高品质的编程教学的网站" target="_blank" href="http://www.udacity.com/">Udacity</a></li>



                            <li

                            class='hide'

                            ><a data-desc="业内知名的技术性BLOG。" target="_blank" href="http://coolshell.cn/">酷壳</a></li>



                            <li

                            class='hide'

                            ><a data-desc="解答各类编程问题，交流与扩展专业知识及技能" target="_blank" href="http://www.dewen.org/">德问</a></li>



                            <li

                            class='hide'

                            ><a data-desc="代码分享站" target="_blank" href="http://www.zuidaima.com/">最代码</a></li>



                            <li

                            class='hide'

                            ><a data-desc="专注于国内外PHP开源代码研究学习" target="_blank" href="http://xcodebox.com/">代码盒子</a></li>



                            <li

                            class='hide'

                            ><a data-desc="分享前端开发技术" target="_blank" href="http://www.tashare.com">前端分享</a></li>









                            <li

                            class='hide'

                            ><a data-desc="国内很好的 ruby 社区" target="_blank" href="http://ruby-china.org/">Ruby China</a></li>









                            <li

                            class='hide'

                            ><a data-desc="每天都有免费有趣的编程教学视频更新！" target="_blank" href="http://blog.fishc.com">鱼C工作室</a></li>




































































































































































































































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-2-2"></b>互联网技术<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="一家综合性的互联网技术网站" target="_blank" href="http://www.iteye.com/">ITeye</a></li>



                            <li

                            ><a data-desc="最大的中文IT社区" target="_blank" href="http://www.csdn.net/">CSDN</a></li>



                            <li

                            ><a data-desc="中国知名IT技术网络平台" target="_blank" href="http://www.51cto.com/">51CTO</a></li>



                            <li

                            ><a data-desc="思科网络技术论坛" target="_blank" href="http://bbs.net130.com/">Cisco论坛</a></li>



                            <li

                            ><a data-desc="前端技术分享网站，为前端技术人员提供资讯及资源" target="_blank" href="http://www.qianduan.net/">前端观察</a></li>



                            <li

                            ><a data-desc="最新前端技术新闻与分享" target="_blank" href="http://www.gbin1.com/">GBIN1</a></li>



                            <li

                            class='hide'

                            ><a data-desc="聚焦互联网前沿资讯，网络精华内容，交流产品心得" target="_blank" href="http://www.alibuybuy.com/">互联网的那点事</a></li>



                            <li

                            class='hide'

                            ><a data-desc="关于前端代码的教育及分享" target="_blank" href="http://codepen.io/">codepen</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一家正在尝试使用新的手法教授html/css/js的外国网站" target="_blank" href="http://cssdeck.com/">CSSdeck</a></li>



                            <li

                            class='hide'

                            ><a data-desc="讨论后端架构、互联网技术、分布式、大型网络应用、等的技术博客" target="_blank" href="http://timyang.net/">Tim后端技术</a></li>



                            <li

                            class='hide'

                            ><a data-desc="前端程序员张鑫旭的博客" target="_blank" href="http://www.zhangxinxu.com/wordpress/">鑫空间</a></li>



                            <li

                            class='hide'

                            ><a data-desc="网站设计与开放人员之家。" target="_blank" href="http://bbs.blueidea.com/forum.php">蓝色理想</a></li>









                            <li

                            class='hide'

                            ><a data-desc="一个偏重 IT 职业分享的博客" target="_blank" href="http://blog.jobbole.com/">伯乐在线博客</a></li>


























































































































































































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-2-3"></b>移动开发<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="苹果开发中文站" target="_blank" href="http://www.cocoachina.com/">Cocoa</a></li>



                            <li

                            ><a data-desc="移动开发者社区，专注主流平台的移动开发" target="_blank" href="http://www.devdiv.com/">DevDiv</a></li>



                            <li

                            ><a data-desc="专业面向Android开发者的门户网站" target="_blank" href="http://www.eoeandroid.com/">eoe社区</a></li>



                            <li

                            ><a data-desc="HTML5移动应用开发平台" target="_blank" href="http://www.appcan.cn/app/index.action">AppCan</a></li>



                            <li

                            ><a data-desc="国外知名移动设备驱动开发论坛" target="_blank" href="http://forum.xda-developers.com/">xda-developers</a></li>



                            <li

                            class='hide'

                            ><a data-desc="移动互联网相关资源分享" target="_blank" href="http://www.mobileawesomeness.com/">MobileAwesomeness</a></li>










































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-2-4"></b>通信技术<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="移动通信门户类网站" target="_blank" href="http://www.mscbsc.com/">移动通信网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="通信行业博客平台" target="_blank" href="http://blog.cnii.com.cn/">通信部落</a></li>



                            <li

                            ><a data-desc="中国电子元器件门户网站" target="_blank" href="http://comm.eccn.com/">中电网</a></li>



                            <li

                            ><a data-desc="国内知名通信社区" target="_blank" href="http://bbs.c114.net/forum.php">通信人家园</a></li>



                            <li

                            ><a data-desc="IEEE官方网站" target="_blank" href="http://www.ieee.org/index.html">IEEE</a></li>



                            <li

                            ><a data-desc="3GPP官网,了解最新的3G动态" target="_blank" href="http://www.3gpp.org/">3GPP</a></li>



                            <li

                            ><a data-desc="全球最大的通信行业门户网站" target="_blank" href="http://www.lightreading.com/">LightReading</a></li>




















                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-2-5"></b>电子技术<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="提供电子行业最新动态，分享设计经验及技术应用" target="_blank" href="http://www.elecfans.com/">电子发烧友</a></li>



                            <li

                            ><a data-desc="FlamingoEDA的官方技术博客" target="_blank" href="http://blog.flamingoeda.com/">FlamingoEDA</a></li>



                            <li

                            ><a data-desc="业余无线电爱好者的交流平台" target="_blank" href="http://www.hellocq.com/">业余无线电</a></li>



                            <li

                            ><a data-desc="基于网络共建模式的大型电子技术社区" target="_blank" href="http://www.eefocus.com/">与非网</a></li>



                            <li

                            ><a data-desc="国外知名电子工程师交流社区" target="_blank" href="http://www.eeweb.com/">EEWeb</a></li>



                            <li

                            ><a data-desc="国电子工程师的网上俱乐部" target="_blank" href="http://bbs.21ic.com/">21IC社区</a></li>



                            <li

                            class='hide'

                            ><a data-desc="电子工程师的交流平台" target="_blank" href="http://www.eehome.cn/forum.php">电子工程师之家</a></li>



                            <li

                            class='hide'

                            ><a data-desc="针对电子爱好者的互动社区" target="_blank" href="http://forum.eet-cn.com/?jumpto=view_welcomead_forum_1348220712490">电子工程专辑</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一家面向单片机及电子技术爱好者的综合性电子技术网站" target="_blank" href="http://www.ourmpu.com/">电子驿站</a></li>



                            <li

                            class='hide'

                            ><a data-desc="为中国电子工程师和电子设计主管提供电子技术开发应用资讯" target="_blank" href="http://www.eeworld.com.cn/">电子工程世界</a></li>



                            <li

                            class='hide'

                            ><a data-desc="关注中国电子设计领域，不断提供最新的设计技术和应用" target="_blank" href="http://www.ednchina.com/">电子设计技术</a></li>





                            <li

                            class='hide'

                            ><a data-desc="硬件与PCB设计论坛" target="_blank" href="http://www.eda365.com/">EDA365</a></li>



                            <li

                            class='hide'

                            ><a data-desc="中国科技核心媒体，电子工程设计技术网站。" target="_blank" href="http://www.eepw.com.cn">EEPW 电子产品世界</a></li>


























































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-2-6"></b>人工智能<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="关注脑科学、认知科学、人工智能等领域的网站" target="_blank" href="http://www.intsci.ac.cn/">智能科学</a></li>



                            <li

                            ><a data-desc="专注处理人类语言技术的网站" target="_blank" href="http://www.lt-world.org/">LT World</a></li>



                            <li

                            ><a data-desc="google研发主管Peter Norvig的个人网站" target="_blank" href="http://norvig.com/">Norvig</a></li>



                            <li

                            ><a data-desc="一个自然语言处理爱好者的群博" target="_blank" href="http://www.52nlp.cn/">我爱自然语言处理</a></li>



                            <li

                            ><a data-desc="中国人工智能门户类网站" target="_blank" href="http://www.ailab.cn/">人工智能实验室</a></li>



                            <li

                            ><a data-desc="由斯坦福大学开发的机器人软件开发框架" target="_blank" href="http://www.ros.org/wiki/">ROS.org</a></li>



                            <li

                            ><a data-desc="由中科院开发的中文分词系统" target="_blank" href="http://ictclas.org/">ICTCLAS</a></li>




























                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-2-7"></b>图像处理<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="报道计算机视觉，增强现实，机器学习，图像处理，机器视觉等最新进展" target="_blank" href="http://www.cvchina.info/">增强视觉</a></li>



                            <li

                            ><a data-desc="我爱Matlab论坛下的图像处理子版块" target="_blank" href="http://ilovematlab.cn/forum-8-1.html">我爱Matlab</a></li>



                            <li

                            ><a data-desc="清华大学图像处理组官方网站" target="_blank" href="http://cg.cs.tsinghua.edu.cn/">清华图像处理组</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一位台湾国立清华大学博士生分享心得的个人网站" target="_blank" href="http://kesen.realtimerendering.com/">Ke-Sen Huang</a></li>



                            <li

                            ><a data-desc="ACM图像处理组" target="_blank" href="http://www.siggraph.org/">siggraph</a></li>






































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-2-8"></b>动画技术<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="中国数字艺术门户类网站" target="_blank" href="http://www.hxsd.com/">火星网</a></li>



                            <li

                            ><a data-desc="提供CG周边内容" target="_blank" href="http://cgcloud.net/">CG筋斗云</a></li>



                            <li

                            ><a data-desc="提供主流应用软件的教学以及插件工具等资源下载" target="_blank" href="http://www.yiihuu.com/">翼虎网</a></li>



                            <li

                            ><a data-desc="CG艺术交流社区" target="_blank" href="http://www.cgebook.com/forum.php">CGeBook</a></li>



                            <li

                            ><a data-desc="一个面向世界的CG教学、交流网站" target="_blank" href="http://forums.cgsociety.org/">CGtalk</a></li>



                            <li

                            ><a data-desc="致力于服务动画产业发展和动画行业创作力量的发展" target="_blank" href="http://www.donghuake.com/">动画客</a></li>



                            <li

                            ><a data-desc="CG教学与交流论坛" target="_blank" href="http://www.cgdream.org/">CG织梦网</a></li>




























                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-2-9"></b>数据分析<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="中国最有影响力的统计学网站" target="_blank" href="http://cos.name/">统计之都</a></li>



                            <li

                            ><a data-desc="提供数据分析行业资讯和技能学习资料" target="_blank" href="http://www.itongji.cn/">中国统计网</a></li>



                            <li

                            ><a data-desc="国内专业科研数据共享服务平台" target="_blank" href="http://www.datatang.com/">数据堂</a></li>



                            <li

                            ><a data-desc="数据挖掘交流、学习论坛" target="_blank" href="http://www.businessanalysis.cn/portal.php">数据挖掘论坛</a></li>



                            <li

                            ><a data-desc="《谁说菜鸟不会数据分析》作者博客" target="_blank" href="http://blog.sina.com.cn/xiaowenzi22">小蚊子乐园</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个关于网站分析的博客" target="_blank" href="http://www.chinawebanalytics.cn/">网站分析在中国</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供数据挖掘相关信息" target="_blank" href="http://www.the-data-mine.com/">The Data Mine</a></li>


























































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-2-10"></b>公开课<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="由网易正式推出的“全球名校视频公开课项目”" target="_blank" href="http://open.163.com/">网易公开课</a></li>



                            <li

                            ><a data-desc="国家教育部主导推动的国家级精品课程集中展示平台" target="_blank" href="http://www.jingpinke.com/">国家精品课</a></li>



                            <li

                            ><a data-desc="来自全球顶尖大学的开放课程,并被全球志愿者翻译为中文" target="_blank" href="http://www.myoops.org/main.php">MyOOPS</a></li>



                            <li

                            ><a data-desc="TED官方网站" target="_blank" href="http://www.ted.com/">TED</a></li>



                            <li

                            ><a data-desc="由中国网络电视台(CNTV)整理的公开课" target="_blank" href="http://opencla.cntv.cn/">中国公开课</a></li>



                            <li

                            ><a data-desc="集中展示“中国大学视频公开课”和资源共享课" target="_blank" href="http://www.icourses.edu.cn/">爱课程</a></li>



                            <li

                            class='hide'

                            ><a data-desc="TED中文社区" target="_blank" href="http://www.tedtochina.com/">TEDtoChina</a></li>



                            <li

                            class='hide'

                            ><a data-desc="发布美国几所名校的公开课程" target="_blank" href="http://www.academicearth.org">Academic Earth</a></li>





                            <li

                            ><a data-desc="MIT和哈佛大学发布的网络在线教学计划" target="_blank" href="https://www.edx.org/">edX</a></li>







                            <li

                            class='hide'

                            ><a data-desc="提供心理学专业知识入门学习的网站" target="_blank" href="http://www.psybook.com">心理学之家</a></li>


























































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-2-11"></b>在线课程<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="MOOC知名网站" target="_blank" href="http://www.udacity.com/">Udacity</a></li>



                            <li

                            ><a data-desc="MOOC知名网站" target="_blank" href="https://www.coursera.org/">Coursera</a></li>



                            <li

                            ><a data-desc="以公开课直播为中心的知识分享社区，每个人都来分享自己的所知所感" target="_blank" href="http://www.duobei.com/">多贝网</a></li>



                            <li

                            ><a data-desc="与各个领域的名师在线交流学习" target="_blank" href="http://fenbi.com/">粉笔网</a></li>



                            <li

                            ><a data-desc="著名在线课程网站" target="_blank" href="http://www.khanacademy.org/">可汗学院</a></li>



                            <li

                            ><a data-desc="一个线上线下互动的、个人技能分享交易平台" target="_blank" href="http://www.dijiuke.com/">第9课堂</a></li>



                            <li

                            ><a data-desc="一个新型的知识分享平台，提倡人人皆师，知识共享" target="_blank" href="http://www.howzhi.com/">好知</a></li>



                            <li

                            class='hide'

                            ><a data-desc="中国教育领域新兴的在线教育平台" target="_blank" href="http://www.chuanke.com">传课网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供初高中各学科的在线教育微课程视频及互动答疑" target="_blank" href="http://www.vko.cn/">微课</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个在线学习互助社区" target="_blank" href="http://www.cicistudy.com">CICIstudy</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个全球化的技能分享平台" target="_blank" href="http://www.skillshare.com">SkillShare</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供中文电子书和一些讲座" target="_blank" href="http://www.chaoxing.com/">超星</a></li>



                            <li

                            class='hide'

                            ><a data-desc="整理了各大视频网站的教学视频" target="_blank" href="http://www.888jcw.com/search.asp">888教程网</a></li>
















































































































































































































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-2-12"></b>外语学习<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="国内最大的外语学习门户网站" target="_blank" href="http://www.hujiang.com/">沪江网</a></li>



                            <li

                            ><a data-desc="在扇贝背单词" target="_blank" href="http://www.shanbay.com/">扇贝网</a></li>



                            <li

                            ><a data-desc="目前中国最大的英语听力训练社区" target="_blank" href="http://www.putclub.com/">普特英语听力</a></li>



                            <li

                            ><a data-desc="由山东理工大学外国语学院学生设计维护的英语学习交流平台" target="_blank" href="http://www.qcenglish.com/">七彩英语</a></li>



                            <li

                            ><a data-desc="国内知名的背单词网站" target="_blank" href="http://www.towords.com/register.jsp">拓词</a></li>



                            <li

                            ><a data-desc="在线收听VOA练习听力" target="_blank" href="http://www.voa365.com/">VOA在线收听</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个有趣的背单词网站" target="_blank" href="http://www.jianbing.org/">滚去背单词</a></li>



                            <li

                            class='hide'

                            ><a data-desc="为小语种口语练习服务的网站" target="_blank" href="http://www.tukkk.com/">小语种口语网</a></li>



                            <li

                            ><a data-desc="小语种学习论坛" target="_blank" href="http://www.somdom.com/">声同小语种</a></li>



                            <li

                            class='hide'

                            ><a data-desc="看电影，学英语" target="_blank" href="http://www.mofunenglish.com">魔方英语</a></li>




























































































































































                        </ul>
                    </div>

                </div>
            </div>

            <div id='LOHAS' class="title-b">
                <div class="title">
                    <h2>乐生活</h2>
                    <a href="http://gate.guokr.com/submit/interest/3/" class="title-add" target='_blank'><span>+</span>添加网站</a>
                    <a href="javascript:void 0;" class="title-trigger" data-operation="closeBoard">收起</a>
                </div>
            </div>
            <div class="categorys-hd fix">
                <div class="categorys">

                    <div class="category">
                        <h3><b class="category-3-1"></b>生活<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="一个分享生活中美好事物的社会化网络社区" target="_blank" href="http://www.caimai.cc/">采麦</a></li>



                            <li

                            ><a data-desc="一个生活百科视频教程网站" target="_blank" href="http://www.jifenzhong.com/">几分钟</a></li>



                            <li

                            ><a data-desc="百度旗下一个生活指南类知识社区网站" target="_blank" href="http://jingyan.baidu.com/">百度经验</a></li>



                            <li

                            ><a data-desc="服务中国白领人群的创新网络生活服务平台" target="_blank" href="http://www.zabanne.com/">咋办呢</a></li>



                            <li

                            ><a data-desc="一个致力于通过文字、图片和视频等分享生活中的实用知识的网站" target="_blank" href="http://www.eidong.com/">意动网</a></li>



                            <li

                            ><a data-desc="定位于分享时尚和创意资讯的慢生活平台" target="_blank" href="http://www.manmatou.com/">慢码头</a></li>



                            <li

                            ><a data-desc="一个收集与分享有趣味的女生话题网站" target="_blank" href="http://www.mihuwa.com/">迷糊娃</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个品质生活消费指南网站" target="_blank" href="http://www.leho.com/">爱乐活</a></li>



                            <li

                            class='hide'

                            ><a data-desc="生活窍门和用品推荐" target="_blank" href="http://www.lohas.ly/category/1">乐活良品</a></li>



                            <li

                            class='hide'

                            ><a data-desc="教你系鞋带" target="_blank" href="http://www.jixiedai.com/">系鞋带</a></li>



                            <li

                            ><a data-desc="享受听觉的艺术" target="_blank" href="http://www.justing.com.cn/">静雅思听</a></li>
































































































































































































































































































































































































































































































































































































































































































































































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-2"></b>吃货<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="一个分享实用菜谱做法与饮食知识的平台" target="_blank" href="http://www.xiachufang.com/">下厨房</a></li>



                            <li

                            ><a data-desc="发现、分享、交流美食的互动社区网络" target="_blank" href="http://www.douguo.com/">豆果网</a></li>



                            <li

                            ><a data-desc="帮助用户发现城市或附近的美食分享社区" target="_blank" href="http://meishixing.com/">美食行</a></li>



                            <li

                            ><a data-desc="一个原创菜谱分享网站" target="_blank" href="http://meiwei.me/">美味工厂</a></li>



                            <li

                            ><a data-desc="一个中文美食网站与厨艺交流社区" target="_blank" href="http://www.meishichina.com/">美食天下</a></li>



                            <li

                            ><a data-desc="一个中文美食社区平台" target="_blank" href="http://www.haodou.com/">好豆网</a></li>



                            <li

                            ><a data-desc="一个分享美食菜谱，提供烹饪教程的博客" target="_blank" href="http://blog.sina.com.cn/wenyi">文怡欣厨房</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个家政生活博客" target="_blank" href="http://blog.sina.com.cn/wangxiaoxing">胖星儿的心幸福笔记</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个零食团购美食分享社区" target="_blank" href="http://www.lskong.com/">零食控</a></li>



                            <li

                            class='hide'

                            ><a data-desc="万维家电网旗下美食分享频道" target="_blank" href="http://meishi.ea3w.com/">美食圈</a></li>



                            <li

                            class='hide'

                            ><a data-desc="介绍的各地小吃和做法" target="_blank" href="http://www.meishij.net/">美食杰</a></li>


















































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-3"></b>健康<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="专业的健康资讯门户网站" target="_blank" href="http://www.39.net/">39健康网</a></li>



                            <li

                            ><a data-desc="营养学专家范志红的博客" target="_blank" href="http://snowheart19.blog.sohu.com/">原创营养信息</a></li>



                            <li

                            ><a data-desc="一个健康管理服务平台和健康评估系统网站" target="_blank" href="http://www.aijiankang.com/">爱健康</a></li>



                            <li

                            ><a data-desc="一个在线医疗网站" target="_blank" href="http://www.drmed.cn/">医博士</a></li>



                            <li

                            ><a data-desc="健康咨询及就医指导平台官方网站" target="_blank" href="http://guahao.com/">挂号网</a></li>



                            <li

                            ><a data-desc="一个医疗咨询和医患对接服务平台" target="_blank" href="http://www.120.net/">120健康网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="为患者就医提供参考信息的医疗网站" target="_blank" href="http://www.haodf.com/">好大夫</a></li>


































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-4"></b>美容<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="关于美容护肤的时尚论坛" target="_blank" href="http://bbs.trends.com.cn/forum.php?mod=forumdisplay&amp;fid=10">时尚论坛</a></li>



                            <li

                            ><a data-desc="一个交流美容方面的时尚生活平台" target="_blank" href="http://blog.onlylady.com/portal.php?mod=list&amp;catid=2&amp;blogcat=2">女人志</a></li>



                            <li

                            ><a data-desc="一个关于美容、化妆品的博客" target="_blank" href="http://agelesslove.i.sohu.com/blog/index.htm">Rox的博客</a></li>



                            <li

                            ><a data-desc="关于化妆品的点评网站" target="_blank" href="http://aoaola.com/">凹凹啦</a></li>



                            <li

                            class='hide'

                            ><a data-desc="专注于为中国女性打造的专业的订阅式美妆适用平台" target="_blank" href="http://www.1p1g.com/">一瓶一罐</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个基于话题和人并专注美妆领域的问答社区" target="_blank" href="http://www.skinpp.com/">漂漂网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个关于护肤的平台" target="_blank" href="http://www.hufu.com/">层层护肤网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="美国化妆品和个人护理产品行业的贸易协会网站" target="_blank" href="http://www.personalcarecouncil.org/">个人护理</a></li>




























































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-5"></b>恋物<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="分享收集有关时尚生活的各种图片的资讯平台" target="_blank" href="http://www.duitang.com/">堆糖</a></li>



                            <li

                            ><a data-desc="一个分享生活中的灵感的网站" target="_blank" href="http://iewei.com/">一味</a></li>



                            <li

                            ><a data-desc="一个精美家装和家居宝贝购物分享网站" target="_blank" href="http://jia.91.com/">分享家</a></li>



                            <li

                            ><a data-desc="生活导购网站" target="_blank" href="http://guang.com/">逛</a></li>



                            <li

                            ><a data-desc="手工、原创设计、艺术品、传统工艺品在线交易平台" target="_blank" href="http://www.wowsai.com/">哇噻网</a></li>



                            <li

                            ><a data-desc="花瓣网旗下一个创意类商品导购平台" target="_blank" href="http://huaban.com/shiji">花瓣市集</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个淘宝商品精选推荐平台" target="_blank" href="http://www.52souluo.com/">我爱搜罗网</a></li>



                            <li

                            ><a data-desc="生活家的良品分享，恋物癖的聚集地" target="_blank" href="http://www.iliangcang.com/">良仓</a></li>



                            <li

                            class='hide'

                            ><a data-desc="发现好物" target="_blank" href="http://www.guoku.com/">果库</a></li>


















































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-6"></b>两性<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="专注于两性科普知识的果壳网性情主题站" target="_blank" href="http://sex.guokr.com/">知性社区</a></li>



                            <li

                            ><a data-desc="为年轻人提供无偏见、科学的性知识的博客" target="_blank" href="http://www.sexualityzone.org/">性知天地</a></li>



                            <li

                            ><a data-desc="中国性科学杂志网刊" target="_blank" href="http://www.zgxkx.org/xingkexue/">中国性科学</a></li>



                            <li

                            ><a data-desc="提供科学的两性知识" target="_blank" href="http://www.scienceofrelationships.com/">科学两性</a></li>



                            <li

                            ><a data-desc="性医学科主任医师的关于两性知识的博客" target="_blank" href="http://blog.sina.com.cn/maxiaonian">马晓年的博客</a></li>



                            <li

                            class='hide'

                            ><a data-desc="性炫耀LBS网站" target="_blank" href="http://ijustmadelove.com/">ijustmadelove</a></li>


































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-7"></b>时尚<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="时尚杂志VOGUE旗下网站论坛" target="_blank" href="http://bbs.vogue.com.cn/">VOGUE论坛</a></li>



                            <li

                            ><a data-desc="国内时尚生活化社区" target="_blank" href="http://at.yoka.com/">at.YOKA</a></li>



                            <li

                            ><a data-desc="国内首家女性时尚顾问服务平台" target="_blank" href="http://sugarlady.com/">苏格</a></li>



                            <li

                            ><a data-desc="时尚集团旗下网站" target="_blank" href="http://trends.com.cn/">时尚网</a></li>



                            <li

                            ><a data-desc="儿童时尚信息传播和灵感分享的垂直媒体" target="_blank" href="http://meokid.com/">Meo</a></li>



                            <li

                            class='hide'

                            ><a data-desc="致力于搜集森女风格相关的资讯网站" target="_blank" href="http://www.morilady.com/">森女网</a></li>









                            <li

                            class='hide'

                            ><a data-desc="中文女性社区" target="_blank" href="http://www.hers.com.cn/">爱物网</a></li>
























































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-8"></b>育儿<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="提供准备怀孕到宝宝六周岁的实用资讯" target="_blank" href="http://cn.babycenter.com/">宝宝中心</a></li>



                            <li

                            ><a data-desc="一个让父母随时随地分享育儿经验，追踪宝宝成长记录的网络平台" target="_blank" href="http://www.danke365.com/">蛋壳</a></li>



                            <li

                            ><a data-desc="全国儿童教育综合平台" target="_blank" href="http://www.xiaojiaoshi.com/">小教室</a></li>



                            <li

                            ><a data-desc="一个为儿童成长提供丰富内容的平台" target="_blank" href="http://www.youban.com/">有伴网</a></li>



                            <li

                            ><a data-desc="大型育儿网站社区" target="_blank" href="http://www.babytree.com">宝宝树</a></li>



                            <li

                            ><a data-desc="专业的中国妈妈门户网站" target="_blank" href="http://www.mamacn.com/">妈妈网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个专业的育儿网站和母婴门户" target="_blank" href="http://www.yaolan.com">摇篮网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个全国性的育儿网站" target="_blank" href="http://beijing.iyaya.com/">丫丫网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="39健康网站育儿频道" target="_blank" href="http://baby.39.net/">39健康育儿</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个专注于儿童健康、行为和发展的网站" target="_blank" href="http://kidshealth.org/">KidsHealth</a></li>






















































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-9"></b>宠物<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="国内专业垂直门户宠物网站" target="_blank" href="http://bbs.chinapet.com/">宠物中国</a></li>



                            <li

                            ><a data-desc="一个分享猫狗照片的网站" target="_blank" href="http://umaogou.com/">有猫狗</a></li>



                            <li

                            ><a data-desc="一个致力于流浪猫救助的非赢利性志愿者团体网站" target="_blank" href="http://www.luckycats.net/">幸运土猫</a></li>



                            <li

                            ><a data-desc="一个原创宠物内容生活网站" target="_blank" href="http://www.abang.com/pets/">阿邦宠物频道</a></li>



                            <li

                            class='hide'

                            ><a data-desc="为宠物主人提供完美综合服务的交互平台" target="_blank" href="http://www.goumin.com/">狗民网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个猫咪资讯综合站点" target="_blank" href="http://www.movshow.com/">猫咪有约</a></li>



                            <li

                            ><a data-desc="以动物园为社交平台的宠物社区" target="_blank" href="http://www.ermiao.com/">鸸鹋动物园</a></li>
























































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-10"></b>新鲜事<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="翻译网络新鲜资讯的网站" target="_blank" href="http://jandan.net/">煎蛋</a></li>



                            <li

                            ><a data-desc="一个简单分享新鲜笑料的微型网站" target="_blank" href="http://danhuaer.com/">蛋花儿</a></li>



                            <li

                            ><a data-desc="真实糗事分享社区" target="_blank" href="http://www.qiushibaike.com">糗事百科</a></li>



                            <li

                            ><a data-desc="一个独特有趣的信息分享网站" target="_blank" href="http://www.caoegg.cn/">草蛋网</a></li>



                            <li

                            ><a data-desc="一个报道消费电子产品相关消息的流行科技网站" target="_blank" href="http://gizmodo.com/">Gizmodo</a></li>



                            <li

                            ><a data-desc="没品笑话网站" target="_blank" href="http://sickipedia.org/">Sickipedia</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个冷笑话幽默类网站" target="_blank" href="http://lengxiaohua.com/">我们爱讲冷笑话</a></li>






















































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-11"></b>图片<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="时尚、艺术、摄影、设计类图片分享社区" target="_blank" href="http://www.topit.me/">TOPIT.ME</a></li>



                            <li

                            ><a data-desc="分享高清大图" target="_blank" href="http://www.kdatu.com/">看大图</a></li>



                            <li

                            ><a data-desc="收集分享图片视频的网站" target="_blank" href="http://www.digu.com/">嘀咕</a></li>



                            <li

                            ><a data-desc="一个专注于信息视觉化的专业网站" target="_blank" href="http://www.tuyansuo.com/">图研所</a></li>



                            <li

                            ><a data-desc="一个数据可视化和信息图标社区平台" target="_blank" href="http://visual.ly/">信息可视化</a></li>



                            <li

                            ><a data-desc="一个网络图片挖掘站" target="_blank" href="http://ffffound.com/">ffffound</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个基于语意的图片搜索引擎" target="_blank" href="http://imeitu.com">爱美图</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个分享精美图片的私人网站" target="_blank" href="http://www.beautifulphoto.net">美图</a></li>



                            <li

                            class='hide'

                            ><a data-desc="著名的图片汇集网站" target="_blank" href="http://fffave.com/">fave</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个提供来自全球的优质创意图片和影视素材的网站" target="_blank" href="http://www.gettyimages.com/">getty</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个分享精美桌面壁纸的网站" target="_blank" href="http://simpledesktops.com/">Simple Desktops</a></li>



                            <li

                            class='hide'

                            ><a data-desc="专业摄影师高品质图片分享社区" target="_blank" href="http://500px.com/">500px</a></li>


































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-12"></b>园艺<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="非常好的植物百科网站" target="_blank" href="http://dashulin.com/">大树林</a></li>



                            <li

                            ><a data-desc="一个园艺花卉论坛" target="_blank" href="http://www.mshua.net/bbs/forum.php">陌上花</a></li>



                            <li

                            ><a data-desc="一个关于花卉植物的社区论坛" target="_blank" href="http://www.huatan.net/bbs/index-htm-m-bbs.html">花谈</a></li>



                            <li

                            ><a data-desc="中国植物数据库" target="_blank" href="http://frps.plantphoto.cn/dzb_list2.asp">中国植物志</a></li>



                            <li

                            ><a data-desc="一个关于花卉园艺的社区论坛" target="_blank" href="http://www.ihua.net/forum.php">爱花园艺</a></li>



                            <li

                            class='hide'

                            ><a data-desc="关于都市人种菜养鸡等务农讨论的网站" target="_blank" href="http://www.new-farmer.com/portal.php">都市农夫</a></li>
















































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-13"></b>手工<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="一个手工DIY资料学习网站" target="_blank" href="http://www.rouding.com/">肉丁网</a></li>



                            <li

                            ><a data-desc="一个贩卖个性化手工制品的网站" target="_blank" href="http://www.yipinpo.com/">一品泊</a></li>



                            <li

                            ><a data-desc="手工DIY制作" target="_blank" href="http://www.shougongke.com/">手工客</a></li>



                            <li

                            ><a data-desc="专业的手工编织技术交流论坛" target="_blank" href="http://bbs.bianzhirensheng.com/">编织人生</a></li>



                            <li

                            ><a data-desc="服务于广大布艺手工爱好者的社区网站" target="_blank" href="http://www.8liuxing.com/default.php">布流行</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个DIY手工爱好者的交流论坛" target="_blank" href="http://bbs.diy8.cn/forum.php">diy8</a></li>





                            <li

                            class='hide'

                            ><a data-desc="原创手工创意集市" target="_blank" href="http://www.sogoke.com/">手工客</a></li>



                            <li

                            class='hide'

                            ><a data-desc="分类纸艺作品合集，各式纸工教程。" target="_blank" href="http://www.zhidiy.com">纸艺网</a></li>








































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-3-14"></b>传统艺术<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="讨论对联、灯谜、古诗词的论坛" target="_blank" href="http://www.zhgc.com/">中国国粹</a></li>



                            <li

                            ><a data-desc="一个面向书法爱好者的论坛" target="_blank" href="http://bbs.china-shufajia.com/">书法家论坛</a></li>



                            <li

                            ><a data-desc="一个收集发布相声相关的资料、音频、视频的网站" target="_blank" href="http://600duan.com/">六百段</a></li>



                            <li

                            ><a data-desc="提供免费评书下载，在线评书，相声，有声小说的专业网站" target="_blank" href="http://www.pingshu8.com/">评书吧</a></li>



                            <li

                            ><a data-desc="一个相声小品视频网站" target="_blank" href="http://6pingm.com/">6平米</a></li>



                            <li

                            ><a data-desc="一个提供连环画小人书在线看的网站" target="_blank" href="http://www.52xrs.com/">我爱小人书</a></li>



                            <li

                            ><a data-desc="可以在线看的连环画站" target="_blank" href="http://www.28lu.com/">28lu</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个篆刻艺术门户网站" target="_blank" href="http://www.jinshizhuanke.com/">篆刻导航网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="中国结编织方法" target="_blank" href="http://www.zhongguojie.org/">中国结艺网</a></li>




































                        </ul>
                    </div>

                </div>
            </div>

            <div id='vatality' class="title-b">
                <div class="title">
                    <h2>很能打</h2>
                    <a href="http://gate.guokr.com/submit/interest/4/" class="title-add" target='_blank'><span>+</span>添加网站</a>
                    <a href="javascript:void 0;" class="title-trigger" data-operation="closeBoard">收起</a>
                </div>
            </div>
            <div class="categorys-hd fix">
                <div class="categorys">

                    <div class="category">
                        <h3><b class="category-4-1"></b>旅行<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="个性化在线旅游社交平台，发现旅途，一起走呗" target="_blank" href="http://www.zobei.com/">走呗</a></li>



                            <li

                            ><a data-desc="为旅行者提供原创实用的出境游旅行指南和旅游攻略并提供相应周边服务" target="_blank" href="http://www.qyer.com/">穷游网</a></li>



                            <li

                            ><a data-desc="一个聚集众多户外运动和自助旅行爱好者的交流平台" target="_blank" href="http://www.doyouhike.net/">磨房</a></li>



                            <li

                            ><a data-desc="交换资讯，分享旅行" target="_blank" href="http://www.mafengwo.cn/">蚂蜂窝</a></li>



                            <li

                            ><a data-desc="10分钟写游记" target="_blank" href="http://chanyouji.com/">蝉游记</a></li>



                            <li

                            ><a data-desc="大数据时代的旅游网站，通过科技改变人们的旅游习惯" target="_blank" href="http://www.zhiyoula.com/">智游啦</a></li>



                            <li

                            class='hide'

                            ><a data-desc="让游客更快更准的找到合适的线路" target="_blank" href="http://www.jiaoya.com/">脚丫旅游网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="用照片记录自己的旅途" target="_blank" href="http://www.hualvtu.com/">画旅途</a></li>



                            <li

                            class='hide'

                            ><a data-desc="发现美好旅游胜地" target="_blank" href="http://www.yuelvxing.com/">悦旅行</a></li>



                            <li

                            ><a data-desc="记录探索世界的轨迹" target="_blank" href="http://breadtrip.com/">面包旅行</a></li>






































































































































































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-4-2"></b>户外<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="背包客们的信息平台" target="_blank" href="http://www.bbkz.com/forum/">背包客栈</a></li>



                            <li

                            ><a data-desc="户外运动爱好者的交流、服务论坛" target="_blank" href="http://bbs.8264.com/">户外资料网</a></li>



                            <li

                            ><a data-desc="野外生存技巧与心得的交流" target="_blank" href="http://www.oipsk.com/portal.php">猎人基地</a></li>



                            <li

                            ><a data-desc="户外生存教学与分享" target="_blank" href="http://www.survivor001.com/portal.php">生存者户外</a></li>



                            <li

                            ><a data-desc="钓鱼、滑雪与户外生存的内容分享" target="_blank" href="http://www.ezlife.com.cn/">简单生活</a></li>



                            <li

                            ><a data-desc="钓鱼爱好者的交流平台" target="_blank" href="http://www.sihaidiaoyu.com/">四海钓鱼网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="国外的一家户外信息发布平台" target="_blank" href="http://www.wearesurvivalmachines.com/">WeAreSurvivalMachines</a></li>
















































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-4-3"></b>健身<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="健康门户网站39健康网的健康频道" target="_blank" href="http://sports.39.net/">39健身</a></li>



                            <li

                            ><a data-desc="关于瑜伽的一切" target="_blank" href="http://www.52yoga.net/">瑜伽中国</a></li>



                            <li

                            ><a data-desc="专业的健身健美论坛" target="_blank" href="http://www.jrgc.cn/forum.php">肌肉工程</a></li>


























































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-4-4"></b>跑步<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="跑步、马拉松爱好者的交流分享平台" target="_blank" href="http://bbs.running8.com/portal.php">跑吧</a></li>



                            <li

                            ><a data-desc="跑步、徒步爱好者的聚集地" target="_blank" href="http://bbs.runbible.cn/">跑步圣经</a></li>



                            <li

                            ><a data-desc="一款为跑步爱好者设计的app" target="_blank" href="http://www.paobukong.com/">跑步控</a></li>



                            <li

                            ><a data-desc="跑步、徒步爱好者的聚集地" target="_blank" href="http://bbs.ipaobu.com.cn/forum.php">爱跑步网</a></li>






















                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-4-5"></b>足篮<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="国内知名体育网站" target="_blank" href="http://bbs.hupu.com/">虎扑论坛</a></li>



                            <li

                            ><a data-desc="最快的赛事比分直播与统计" target="_blank" href="http://data2.7m.cn/database/index_gb.htm">赛事资料库</a></li>



                            <li

                            ><a data-desc="面向全国篮球迷们的服务平台" target="_blank" href="http://www.hoop8.com/">篮球播客</a></li>



                            <li

                            ><a data-desc="一个体育导航，所有直播和视频链接均由网友提供" target="_blank" href="http://www.zhibo8.cc/">直播吧</a></li>



                            <li

                            ><a data-desc="最专业的中文足球专业论坛" target="_blank" href="http://bbs.enjoyz.com/">足球装备</a></li>



                            <li

                            ><a data-desc="运动鞋信息和交易论坛" target="_blank" href="http://bbs.x-kicks.com/forum.php">新新球鞋</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个主要讨论德国足球的球迷论坛" target="_blank" href="http://bbs.gerfans.cn">德迷联盟</a></li>
































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-4-6"></b>网羽<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="网球门户类网站" target="_blank" href="http://www.6tennis.com/">乐网</a></li>



                            <li

                            ><a data-desc="羽毛球迷交流分享社区" target="_blank" href="http://bbs.badmintoncn.com/">中羽在线</a></li>



                            <li

                            ><a data-desc="羽毛球交流论坛" target="_blank" href="http://www.dono.com.cn/bbs/">动力基因</a></li>



                            <li

                            ><a data-desc="羽毛球赛事资源和网上交流" target="_blank" href="http://www.aiyuke.com/video/">爱羽客</a></li>



                            <li

                            ><a data-desc="网球爱好者的网上俱乐部" target="_blank" href="http://www.wangqiu.net/home.php">网球之家</a></li>


















                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-4-7"></b>骑行<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="汇集了骑行资料和装备技术的自行车专业网站" target="_blank" href="http://www.cyclist.cn/">骑行者</a></li>



                            <li

                            ><a data-desc="北京地区骑行论坛" target="_blank" href="http://www.dongfanghong.com.cn/bbs/">东方红论坛</a></li>



                            <li

                            ><a data-desc="单车信息分享平台" target="_blank" href="http://www.700bike.com/">骑摆客</a></li>



                            <li

                            ><a data-desc="国内自行车资讯门户网站" target="_blank" href="http://www.biketo.com/">自行车网</a></li>



                            <li

                            ><a data-desc="155天单车横跨亚欧行动全纪录" target="_blank" href="http://deray.org/">单车旅行日志</a></li>



                            <li

                            class='hide'

                            ><a data-desc="死飞爱好者论坛" target="_blank" href="http://www.sifeic.com/">死飞论坛</a></li>



                            <li

                            class='hide'

                            ><a data-desc="自行车分享交流网站" target="_blank" href="http://www.qixingquan.com">骑行圈</a></li>





                            <li

                            class='hide'

                            ><a data-desc="在长三角地区有一定影响力的单车论坛" target="_blank" href="http://bbs.bikehome.net/forum.php">起点单车</a></li>






































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-4-8"></b>格斗<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="格斗爱好者的网上集中地" target="_blank" href="http://www.gedoumi.com/">格斗迷</a></li>



                            <li

                            ><a data-desc="拳击运动论坛" target="_blank" href="http://www.qjhm.net/bbs/">拳击航母</a></li>



                            <li

                            ><a data-desc="各类武术在线教学" target="_blank" href="http://www.jktop.cn/index.html">武之道</a></li>



                            <li

                            ><a data-desc="摔角运动论坛和博客" target="_blank" href="http://u.shuaijiao.com/forum.php">摔角在线</a></li>



                            <li

                            ><a data-desc="综合格斗信息站" target="_blank" href="http://www.vs.cm/">VS网</a></li>



                            <li

                            ><a data-desc="国外的一家综合格斗新闻网" target="_blank" href="http://sherdog.com/">射狗</a></li>



                            <li

                            class='hide'

                            ><a data-desc="国外一家提供无限制综合格斗新闻资源的网站" target="_blank" href="http://mmajunkie.com/">MMAjunkie</a></li>




















                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-4-9"></b>极限运动<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="极限运动爱好者交流论坛" target="_blank" href="http://www.zgfun.com/forum.php">极限运动联盟</a></li>



                            <li

                            ><a data-desc="滑板运动文化推广普及" target="_blank" href="http://www.skatehere.com/">Skatehere</a></li>



                            <li

                            ><a data-desc="轮滑爱好者论坛" target="_blank" href="http://bbs.66club.cn/forum.php">急速轮滑网</a></li>



                            <li

                            ><a data-desc="单车运动爱好者的信息分享平台" target="_blank" href="http://www.nukebike.com/">极限单车</a></li>



                            <li

                            ><a data-desc="中国自行车越野爱好者的网络聚集地" target="_blank" href="http://www.cnbmx.com/">CNBMX</a></li>



                            <li

                            ><a data-desc="滑板运动爱好者的信息平台" target="_blank" href="http://www.kickerclub.com/">KickerClub</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一名极限运动爱好者的个人博客" target="_blank" href="http://hi.baidu.com/new/ttttiger">虎巢</a></li>




































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-4-10"></b>装备<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="刀文化交流站" target="_blank" href="http://www.knifriend.com/">刀友</a></li>



                            <li

                            ><a data-desc="手电爱好者交流论坛" target="_blank" href="http://www.shoudian.org/forum.php">手电大家谈</a></li>



                            <li

                            ><a data-desc="甩棍爱好者的交流论坛" target="_blank" href="http://www.shuaigun.com/">甩棍论坛</a></li>



                            <li

                            ><a data-desc="弹弓爱好者交流论坛" target="_blank" href="http://www.52dangong.com/forum.php">52弹弓网</a></li>



                            <li

                            ><a data-desc="中国射箭爱好者交流论坛" target="_blank" href="http://www.archerysalon.com/">射箭沙龙</a></li>




























                        </ul>
                    </div>

                </div>
            </div>

            <div id='geek' class="title-b">
                <div class="title">
                    <h2>极客范</h2>
                    <a href="http://gate.guokr.com/submit/interest/5/" class="title-add" target='_blank'><span>+</span>添加网站</a>
                    <a href="javascript:void 0;" class="title-trigger" data-operation="closeBoard">收起</a>
                </div>
            </div>
            <div class="categorys-hd fix">
                <div class="categorys">

                    <div class="category">
                        <h3><b class="category-5-1"></b>科技<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="中国科学门户、科研工作者社区" target="_blank" href="http://www.kexue.com/">科学网</a></li>



                            <li

                            ><a data-desc="提供最新的科技新闻" target="_blank" href="http://solidot.org/">奇客</a></li>



                            <li

                            ><a data-desc="报道最新的互联网科技新闻和创业信息" target="_blank" href="http://www.36kr.com/">36氪</a></li>



                            <li

                            ><a data-desc="移动互联网行业信息博客" target="_blank" href="http://www.leiphone.com">雷锋网</a></li>



                            <li

                            ><a data-desc="国外综合科技网站" target="_blank" href="http://www.wired.com/">连线</a></li>



                            <li

                            ><a data-desc="关注互联网产品和科技趋势" target="_blank" href="http://www.geekpark.net/">极客公园</a></li>



                            <li

                            ><a data-desc="传播最新的创业公司理念" target="_blank" href="http://www.kuailiyu.com/">快鲤鱼</a></li>



                            <li

                            class='hide'

                            ><a data-desc="专注科技创新的媒体平台" target="_blank" href="http://tech2ipo.com/">tech2ipo</a></li>



                            <li

                            class='hide'

                            ><a data-desc="IT产业新闻站" target="_blank" href="http://www.cnetnews.com.cn/">cnet中文网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="国外的一家科技博客" target="_blank" href="http://www.scilogs.com/">SciLogs</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一位科技从业人员的个人博客" target="_blank" href="http://swordi.com/">Swordi Meidia Lab</a></li>





                            <li

                            class='hide'

                            ><a data-desc="著名程序员刘未鹏的博客" target="_blank" href="http://mindhacks.cn/">思维改变生活</a></li>







                            <li

                            class='hide'

                            ><a data-desc="内容丰富的科技视频网站" target="_blank" href="http://www.bjscivid.org/">北京科技视频网</a></li>

















                            <li

                            class='hide'

                            ><a data-desc="分享手机应用精品、 经典游戏、新奇创意和各种酷的、有极客范的东西。" target="_blank" href="http://www.geekfan.net/">极客范</a></li>








































































































































































































































































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-2"></b>IT<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="各类IT新闻、资讯发布和汇总" target="_blank" href="http://www.techweb.com.cn/">TechWeb</a></li>



                            <li

                            ><a data-desc="一家面向IT业的商业资讯与交流平台" target="_blank" href="http://www.huxiu.com/">虎嗅</a></li>



                            <li

                            ><a data-desc="一家关注移动互联网、集中报道创业团队的科技网站" target="_blank" href="http://www.ifanr.com">爱范儿</a></li>



                            <li

                            ><a data-desc="及时传播互联网IT新闻" target="_blank" href="http://www.cnbeta.com/">cnBeta</a></li>



                            <li

                            ><a data-desc="一个专注于互联网和搜索引擎的IT科技博客" target="_blank" href="http://www.williamlong.info/">月光博客</a></li>



                            <li

                            ><a data-desc="以翻译外国IT方面的评论、访谈为主，偏重于软件方面" target="_blank" href="http://www.aqee.net">外刊IT评论</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个报道Google及其相关产品的资讯网站" target="_blank" href="http://www.guao.hk/">谷奥</a></li>



                            <li

                            ><a data-desc="关注国内外互联网创业的博客" target="_blank" href="http://www.web20share.com/">天涯海阁</a></li>



                            <li

                            class='hide'

                            ><a data-desc="国外著名关注IT产业的科技博客" target="_blank" href="http://www.businessinsider.com/">BusinessInsider</a></li>



                            <li

                            class='hide'

                            ><a data-desc="解读社会化商业价值" target="_blank" href="http://www.socialbeta.cn/">SocialBeta</a></li>




















































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-3"></b>数码<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="电子数码产品新闻博客" target="_blank" href="http://cn.engadget.com/">瘾科技</a></li>



                            <li

                            ><a data-desc="一个分享和体验的数码社区" target="_blank" href="http://www.dgtle.com/">数字尾巴</a></li>



                            <li

                            ><a data-desc="最新计算机软件、操作系统的新闻与资源" target="_blank" href="http://bbs.pcbeta.com/">远景论坛</a></li>



                            <li

                            ><a data-desc="老牌电子数码类论坛" target="_blank" href="http://www.hi-pda.com/forum/">电工论坛</a></li>



                            <li

                            ><a data-desc="苹果相关资讯和资源" target="_blank" href="http://mac.pcbeta.com/">MacIdea</a></li>






































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-4"></b>硬件<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="国内较为专业的耳机论坛" target="_blank" href="http://www.erji.net/">耳机大家坛</a></li>



                            <li

                            ><a data-desc="分享各类高科技生活方式" target="_blank" href="http://www.igeek.com.cn/">爱极客</a></li>



                            <li

                            ><a data-desc="二手数码产品交换论坛" target="_blank" href="http://we.pcinlife.com/">电脑新生代</a></li>



                            <li

                            ><a data-desc="电脑玩家互动社区" target="_blank" href="http://www.itocp.com/htmls/index.html">玩家堂</a></li>



                            <li

                            ><a data-desc="分享各类生活用品的使用体验" target="_blank" href="http://www.chiphell.com/">Chiphell</a></li>



                            <li

                            class='hide'

                            ><a data-desc="各类家电信息的分享和交流" target="_blank" href="http://bbs.headphoneclub.com/index.php">耳机俱乐部</a></li>



                            <li

                            ><a data-desc="耳机爱好者的交流论坛" target="_blank" href="http://www.jd-bbs.com/">家电论坛</a></li>


















































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-5"></b>软件<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="搜集分享一些有趣实用的小软件" target="_blank" href="http://www.appinn.com/">小众软件</a></li>



                            <li

                            ><a data-desc="提供免费软件使用心得和技巧" target="_blank" href="http://xbeta.info/">善用佳软</a></li>



                            <li

                            ><a data-desc="提供各种优秀软件资源的下载" target="_blank" href="http://www.itopdog.cn/">软件盒子</a></li>



                            <li

                            ><a data-desc="一个分享各种优秀实用软件、网络资源的个人博客" target="_blank" href="http://www.iplaysoft.com/">异次元软件世界</a></li>



                            <li

                            ><a data-desc="提供各种免费软件的下载" target="_blank" href="http://www.softjie.cn/">软件街</a></li>



                            <li

                            ><a data-desc="国外一家非常全面的软件站" target="_blank" href="http://alternativeto.net/">换软件</a></li>



                            <li

                            class='hide'

                            ><a data-desc="收集分享桌面和移动设备主题" target="_blank" href="http://www.ztkong.com/">主题控</a></li>



                            <li

                            ><a data-desc="汇集绿色版的大中小软件" target="_blank" href="http://www.portablesoft.org/">精品绿色便携软件</a></li>






















































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-6"></b>APP<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="国内知名Apple互动媒体" target="_blank" href="http://www.weiphone.com/">威锋网</a></li>



                            <li

                            ><a data-desc="与网友一起分享、讨论、探索各种让工作更轻松、舒适的新工具" target="_blank" href="http://xingongju.com/portal.php">新工具</a></li>





                            <li

                            ><a data-desc="各种安卓应用免费下载" target="_blank" href="http://www.yingyong.so/">应用搜</a></li>



                            <li

                            ><a data-desc="提供每日限时免费app资讯" target="_blank" href="http://www.gao7.com/">搞趣</a></li>



                            <li

                            ><a data-desc="大量安卓软件资讯和软件下载" target="_blank" href="http://www.mumayi.com/">木蚂蚁</a></li>







                            <li

                            class='hide'

                            ><a data-desc="简单有爱的 Android 应用中心" target="_blank" href="http://wandoujia.com">豌豆荚</a></li>





























                            <li

                            ><a data-desc="发现最新的好产品！" target="_blank" href="http://www.demo8.com/">DEMO8</a></li>






































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-7"></b>动漫<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="A站，国内著名网络弹幕视频平台" target="_blank" href="http://www.acfun.tv/">AcFun</a></li>



                            <li

                            ><a data-desc="土豆网豆泡(四声)弹幕" target="_blank" href="http://dp.tudou.com/">豆泡</a></li>



                            <li

                            ><a data-desc="B站，另一家视频弹幕平台" target="_blank" href="http://bilibili.kankanews.com/">bilibili</a></li>



                            <li

                            ><a data-desc="漫画内容的评论与资讯" target="_blank" href="http://mangatalk.net/">漫言</a></li>



                            <li

                            ><a data-desc="新兴的互联网原创漫画平台" target="_blank" href="http://www.u17.com/">有妖气</a></li>



                            <li

                            ><a data-desc="一个专注于动漫、音乐、游戏领域，分享、发现与结识同好的网站" target="_blank" href="http://bangumi.tv/">番组计划</a></li>



                            <li

                            ><a data-desc="一个面向都市青年的漫画品牌" target="_blank" href="http://ifenghui.cn/">锋绘</a></li>



                            <li

                            ><a data-desc="动漫图片分享社区" target="_blank" href="http://www.mshenghuo.com/">漫生活</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个面向网友的漫画分享平台" target="_blank" href="http://www.imanhua.com/">爱漫画</a></li>



                            <li

                            class='hide'

                            ><a data-desc="搜集全球漫画资源" target="_blank" href="http://fullcomic.net/">漫画库</a></li>



                            <li

                            class='hide'

                            ><a data-desc="纵横中文网旗下的原创漫画" target="_blank" href="http://tarsylia.zongheng.com/">塔希里亚</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供最新的动漫及漫展情报" target="_blank" href="http://acg.178.com/">178动漫频道</a></li>



                            <li

                            class='hide'

                            ><a data-desc="二次元弹幕视频网站" target="_blank" href="http://www.tucao.cc/">吐槽</a></li>









                            <li

                            class='hide'

                            ><a data-desc="一个动漫资讯网站" target="_blank" href="http://www.maxacg.com/">MAXACG</a></li>


























































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-8"></b>电玩<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="专注于游戏行业的综合性游戏门户网站" target="_blank" href="http://www.duowan.com/">多玩游戏</a></li>



                            <li

                            ><a data-desc="国内电视游戏门户网站" target="_blank" href="http://www.tgbus.com/">电玩巴士</a></li>



                            <li

                            ><a data-desc="游戏制作技术交流和分享" target="_blank" href="http://inpla.net/">in星球</a></li>



                            <li

                            ><a data-desc="游戏文化主题论坛" target="_blank" href="http://bbs.saraba1st.com/2b/">Stage1</a></li>



                            <li

                            ><a data-desc="各类游戏的交流分享平台" target="_blank" href="http://www.youxipai.com/">游戏派</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一家研究全球游戏产业的专业网站" target="_blank" href="http://www.gamelook.com.cn/">游戏大观</a></li>



                            <li

                            class='hide'

                            ><a data-desc="中国单机游戏门户网站" target="_blank" href="http://www.ali213.net/">游侠网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供单机游戏资讯、内容和服务" target="_blank" href="http://www.3dmgame.com/">3DM</a></li>



                            <li

                            ><a data-desc="提供社交游戏、手机游戏行业新闻资讯" target="_blank" href="http://gamerboom.com/">游戏邦</a></li>



                            <li

                            class='hide'

                            ><a data-desc="国内知名单机游戏资讯网站" target="_blank" href="http://www.gamersky.com/">游民星空</a></li>



                            <li

                            class='hide'

                            ><a data-desc="新锐游戏网站，包含许多游戏的资料" target="_blank" href="http://www.joyme.com">着迷网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="很专业的电视游戏论坛" target="_blank" href="http://bbs.a9vg.com/">A9VG电玩部落</a></li>



                            <li

                            ><a data-desc="最好玩的小游戏推荐网站" target="_blank" href="http://wanga.me/">拼命玩游戏</a></li>
















































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-9"></b>智力<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="果壳网死理性派主题站" target="_blank" href="http://www.guokr.com/site/logos/">死理性派</a></li>



                            <li

                            ><a data-desc="用理工科思维理解世界" target="_blank" href="http://www.geekonomics10000.com/">学而时嘻之</a></li>



                            <li

                            ><a data-desc="魔方爱好者网上俱乐部" target="_blank" href="http://bbs.mf8-china.com/forum.php">魔方吧</a></li>



                            <li

                            ><a data-desc="向魔方初学者介绍基本的魔方解法和魔方技巧" target="_blank" href="http://www.rubik.com.cn/">魔方小站</a></li>



                            <li

                            ><a data-desc="关于生命游戏的一个非常全面的维基网站" target="_blank" href="http://www.conwaylife.com/wiki/Main_Page">LifeWiki</a></li>



                            <li

                            ><a data-desc="跨学科问题的研究与交流" target="_blank" href="http://site.douban.com/swarmagents/">集智俱乐部</a></li>



                            <li

                            ><a data-desc="桌游爱好者交流平台" target="_blank" href="http://www.bger.org/">BGC桌游网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个益智类网站，拥有全球最大中文智力题库" target="_blank" href="http://www.33iq.com/">晒晒IQ</a></li>



                            <li

                            class='hide'

                            ><a data-desc="转笔爱好者的网上论坛" target="_blank" href="http://www.pserhome.com/">转笔者之家</a></li>



                            <li

                            class='hide'

                            ><a data-desc="万智牌网站" target="_blank" href="http://www.iplaymtg.com/">旅法师的营地</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个收集了很多谜题和智力游戏的英文网站" target="_blank" href="http://www.puzzles.com/">Puzzle</a></li>






















                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-10"></b>笑点低<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="简单、迅速的发现各种笑料" target="_blank" href="http://9gag.com/">9GAG</a></li>



                            <li

                            ><a data-desc="著名Geek漫画XKCD网站" target="_blank" href="http://xkcd.com/">xkcd</a></li>



                            <li

                            ><a data-desc="国外著名社区，提供大量好玩的内容" target="_blank" href="http://www.reddit.com/">reddit</a></li>



                            <li

                            class='hide'

                            ><a data-desc="关于博士生活的漫画" target="_blank" href="http://www.phdcomics.com/comics.php">PHD Comics</a></li>



                            <li

                            ><a data-desc="关于数学的有趣漫画" target="_blank" href="http://spikedmath.com/">SpikedMath</a></li>



                            <li

                            ><a data-desc="搞笑科学漫画网站" target="_blank" href="http://smbc-comics.com">SMBC</a></li>



                            <li

                            ><a data-desc="果壳网Geek笑点低小组" target="_blank" href="http://www.guokr.com/group/63/">Geek笑点低</a></li>



                            <li

                            class='hide'

                            ><a data-desc="搞笑趣图，一个容易得到快乐的地方" target="_blank" href="http://www.juyouqu.com/">巨有趣</a></li>










































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-11"></b>科幻<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="《科幻世界》杂志网上论坛" target="_blank" href="http://www.sfw.com.cn/">幻想在线</a></li>



                            <li

                            ><a data-desc="国内知名科幻论坛" target="_blank" href="http://bbs.flyine.net/">飞翔科幻网</a></li>



                            <li

                            ><a data-desc="国外知名的科幻文化网站" target="_blank" href="http://io9.com/">io9</a></li>



                            <li

                            ><a data-desc="国外为科幻爱好者服务的网站" target="_blank" href="http://www.tor.com/">Tor.com</a></li>



                            <li

                            ><a data-desc="高纯度科幻社区，与科幻阅读、科幻影音、科幻创作相关的线上和线下分享。" target="_blank" href="http://www.wcsfa.com/">科幻星云网</a></li>



                            <li

                            ><a data-desc="专注报道两百年后的世界" target="_blank" href="http://www.metnews.net/">大都会新闻</a></li>












                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-12"></b>奇幻<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="国内最知名的奇幻社区" target="_blank" href="http://www.cndkc.net/">龙骑士城堡</a></li>



                            <li

                            ><a data-desc="国内非常活跃的西方奇幻爱好者社区" target="_blank" href="http://www.odyguild.net/bbs/portal.php">奥德赛公会</a></li>



                            <li

                            ><a data-desc="龙与地下城论坛" target="_blank" href="http://www.goddessfantasy.net/bbs/index.php">纯美苹果园</a></li>



                            <li

                            ><a data-desc="奇幻小说、游戏的分享交流站" target="_blank" href="http://trow.cc/forum/">T.R.O.W</a></li>



                            <li

                            ><a data-desc="《辐射》游戏爱好者聚集地" target="_blank" href="http://www.bn13.com/bbs/">13号避难所</a></li>



                            <li

                            ><a data-desc="各类历史题材的奇幻小说" target="_blank" href="http://qiluo.net/">古国天使</a></li>



                            <li

                            ><a data-desc="关于奇幻文化的豆瓣小站" target="_blank" href="http://site.douban.com/122894/">史诗奇幻小酒馆</a></li>



                            <li

                            ><a data-desc="冰火书迷们为《冰与火之歌》建立的维基百科" target="_blank" href="http://asoiaf.huiji.wiki/">冰与火之歌中文维基</a></li>






                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-13"></b>推理<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="推理爱好者的交流论坛" target="_blank" href="http://www.ictruth.net/">未完全侦探</a></li>



                            <li

                            ><a data-desc="一家内容广泛的推理主题站" target="_blank" href="http://www.tuili.com/2010/index.asp">推理之门</a></li>



                            <li

                            ><a data-desc="一位推理爱好者的个人博客" target="_blank" href="http://www.douban.com/people/zhutong/">天蝎小猪</a></li>



                            <li

                            ><a data-desc="推理爱好者的交流论坛" target="_blank" href="http://tuiliclub.net/forum.php">推理协会</a></li>



                            <li

                            ><a data-desc="推理爱好者们的分享交流平台" target="_blank" href="http://www.tuilixy.net/">贝克街推理学院</a></li>



                            <li

                            ><a data-desc="中国阿加莎克里斯蒂迷的乐园" target="_blank" href="http://forum.cnajs.com/forum.php">阿迷推理论坛</a></li>






                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-14"></b>DIY<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="科技爱好者的交流平台" target="_blank" href="http://bbs.kechuang.org/">科创论坛</a></li>



                            <li

                            ><a data-desc="开放的DIY实验室，共享资源和知识" target="_blank" href="http://maker.eefocus.com/">创客空间</a></li>



                            <li

                            ><a data-desc="我们不生产创客，我们只是创客的搬运工！" target="_blank" href="http://www.chuangkoo.com">创酷网</a></li>



                            <li

                            ><a data-desc="内容全面的电子制作论坛" target="_blank" href="http://www.ndiy.cn/">中国电子DIY</a></li>



                            <li

                            ><a data-desc="机器人爱好者的交流平台" target="_blank" href="http://www.robotdiy.org/index.php">机器人创客联盟</a></li>



                            <li

                            ><a data-desc="自动化爱好者的聚集地" target="_blank" href="http://www.geek-workshop.com/forum.php">极客工坊</a></li>



                            <li

                            ><a data-desc="国外著名DIY网站" target="_blank" href="http://www.instructables.com/">instructables</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供前沿的机器人资讯、实用的设计资料和指导" target="_blank" href="http://www.robot360.cn/portal.php?mod=list&amp;catid=5">中国机器人网</a></li>































                            <li

                            class='hide'

                            ><a data-desc="DIY学习与分享社区" target="_blank" href="http://www.geekfans.com/">极客迷</a></li>














                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-15"></b>模型<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="老牌宅男论坛，其中的模型区内容很好" target="_blank" href="http://www.sbanzu.com/board_list.asp">上班族</a></li>



                            <li

                            ><a data-desc="老牌模型资讯站点" target="_blank" href="http://www.moxing.net/">模型网</a></li>



                            <li

                            ><a data-desc="内容全面的模型社区" target="_blank" href="http://bbs.actoys.net/">模玩网</a></li>



                            <li

                            ><a data-desc="用纸折出3D模型" target="_blank" href="http://www.3dzhimo.com/portal.php">3D纸模网</a></li>



                            <li

                            ><a data-desc="航模爱好者的交流站" target="_blank" href="http://bbs.5imx.com/bbs/forum.php">我爱模型</a></li>



                            <li

                            ><a data-desc="各类模型的交流分享" target="_blank" href="http://mxchn.com/forum.php">模友网</a></li>



                            <li

                            ><a data-desc="遥控车模型交流论坛" target="_blank" href="http://www.rcfans.com/portal.php">RCfans</a></li>



                            <li

                            class='hide'

                            ><a data-desc="变形金刚爱好者的聚集地" target="_blank" href="http://www.tfclub.com/">变形金刚中国联盟</a></li>



                            <li

                            class='hide'

                            ><a data-desc="折纸爱好者的交流分享平台" target="_blank" href="http://www.zhezhixueyuan.com/">折纸学院</a></li>



                            <li

                            class='hide'

                            ><a data-desc="折纸模型、资源下载站" target="_blank" href="http://www.lusiya.com/">纸天堂</a></li>
















                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-16"></b>乐高<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="乐高中国官方网站" target="_blank" href="http://www.lego.com/zh-cn/">乐高官网</a></li>



                            <li

                            ><a data-desc="让大家浏览各种不同系列的乐高人像" target="_blank" href="http://www.minifigs.net/webpage/">人仔仓</a></li>



                            <li

                            ><a data-desc="中文乐高论坛" target="_blank" href="http://bbs.cmnxt.com/">中文乐高</a></li>



                            <li

                            ><a data-desc="国外一家非常全面的乐高指导" target="_blank" href="http://guide.lugnet.com/set/">乐高搜索</a></li>



                            <li

                            ><a data-desc="乐高文化的传播和交流" target="_blank" href="http://legocn.net/">乐高中文爱好者</a></li>


                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-17"></b>棋牌<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="围棋的教学与研究" target="_blank" href="http://www.weiqiok.com">围棋学研网</a></li>



                            <li

                            ><a data-desc="提供象棋残局供象棋爱好者们研究" target="_blank" href="http://www.icanju.cn/">残局天下</a></li>



                            <li

                            ><a data-desc="一个个人搭建的国际象棋资讯、教学站" target="_blank" href="http://www.fishxx68.com/">大侠小鱼儿</a></li>



                            <li

                            ><a data-desc="扑克、纸牌爱好者的交流平台" target="_blank" href="http://bbs.dzpk.com/forum.php">中扑网论坛</a></li>



                            <li

                            ><a data-desc="五子棋爱好者的学习、交流平台" target="_blank" href="http://www.iwzq.com/">爱五子棋</a></li>



                            <li

                            class='hide'

                            ><a data-desc="Tom旗下围棋资讯、新闻、教学站" target="_blank" href="http://weiqi.tom.com/">棋圣道场</a></li>



                            <li

                            class='hide'

                            ><a data-desc="黑白棋技术学习交流，介绍国际国内黑白棋赛事。" target="_blank" href="http://hbqhome.com/forum.php">黑白棋乐园</a></li>






























                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-5-18"></b>聚合<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="高效、友好的提供有趣、热门内容" target="_blank" href="http://dig.chouti.com/">抽屉</a></li>



                            <li

                            ><a data-desc="采集互联网上内容，建立自己的网络收藏夹" target="_blank" href="http://huaban.com/">花瓣网</a></li>



                            <li

                            ><a data-desc="自动推荐可能感兴趣的文章" target="_blank" href="http://www.wumii.com/">无觅网</a></li>



                            <li

                            ><a data-desc="一个信息精选聚合网站" target="_blank" href="http://www.zoulang.com">走廊网</a></li>



                            <li

                            ><a data-desc="一个基于兴趣的资源分享社区" target="_blank" href="http://ikeepu.com/">爱库网</a></li>







                            <li

                            ><a data-desc="一个知识博客，分享有意思的冷知识和创意" target="_blank" href="http://www.geekwall.org/">GeekWall极客墙</a></li>






































                        </ul>
                    </div>

                </div>
            </div>

            <div id='artistic' class="title-b">
                <div class="title">
                    <h2>文艺腔</h2>
                    <a href="http://gate.guokr.com/submit/interest/6/" class="title-add" target='_blank'><span>+</span>添加网站</a>
                    <a href="javascript:void 0;" class="title-trigger" data-operation="closeBoard">收起</a>
                </div>
            </div>
            <div class="categorys-hd fix">
                <div class="categorys">

                    <div class="category">
                        <h3><b class="category-6-1"></b>电影<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="电影及电视剧在线数据库，中国最大的电影娱乐社区" target="_blank" href="http://www.mtime.com/">时光网</a></li>



                            <li

                            ><a data-desc="提供电影垂直领域的搜索、发现与推荐" target="_blank" href="http://www.jinwankansha.com">今晚看啥</a></li>



                            <li

                            ><a data-desc="提供最新的电影介绍及评论评分" target="_blank" href="http://movie.douban.com/">豆瓣电影</a></li>



                            <li

                            ><a data-desc="一个通过台词来猜电影的平台" target="_blank" href="http://iguess.me/movie">猜电影</a></li>



                            <li

                            ><a data-desc="以影评及电影相关文章为主,对中国内地院线电影进行打分和评论的网站" target="_blank" href="http://cinephilia.net/">迷影网</a></li>



                            <li

                            ><a data-desc="多角度解读音乐、电影和文学诸领域的网络刊物" target="_blank" href="http://digforfire.net/">掘火网刊</a></li>



                            <li

                            class='hide'

                            ><a data-desc="国内目前最大、最文艺的微电影分享交流平台" target="_blank" href="http://www.vmovier.com">v电影</a></li>



                            <li

                            class='hide'

                            ><a data-desc="聚合全网电影" target="_blank" href="http://dianying.fm/">电影FM</a></li>



                            <li

                            class='hide'

                            ><a data-desc="个性化影视推荐" target="_blank" href="http://www.sogougou.cn">搜狗狗网</a></li>




































































































































































































































































































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-6-2"></b>音乐<s></s></h3>
                        <ul class="list">


                            <li

                            class='hide'

                            ><a data-desc="发现和分享音乐" target="_blank" href="http://ex.fm/">ex.fm</a></li>



                            <li

                            ><a data-desc="豆瓣提供的音乐艺人和唱片公司数字音乐服务" target="_blank" href="http://music.douban.com/artists/">豆瓣音乐人</a></li>



                            <li

                            ><a data-desc="一个以提供音乐个性化推荐以及线下音乐活动的网站" target="_blank" href="http://www.xiami.com/">虾米音乐网</a></li>



                            <li

                            ><a data-desc="发现新的音乐" target="_blank" href="http://www.earbits.com/welcome">earbits</a></li>



                            <li

                            ><a data-desc="一个简单的音乐分享博客" target="_blank" href="http://www.rui123.com/">梵高的耳朵</a></li>



                            <li

                            class='hide'

                            ><a data-desc="专业的曲谱简谱共享平台" target="_blank" href="http://www.haoqupu.com/">好曲谱网</a></li>



                            <li

                            ><a data-desc="古典音乐专业网站" target="_blank" href="http://www.kuke.com/">库客</a></li>



                            <li

                            ><a data-desc="专注于美剧原声，独立音乐，小众音乐，睡前音乐的博客" target="_blank" href="http://www.mologer.cn/">音乐是岸</a></li>



                            <li

                            ><a data-desc="一个提供flac、ape、ogg、mp3，音频技术音乐交流与工具下载的音乐论坛" target="_blank" href="http://www.zasv.com/">杂碎音乐</a></li>



                            <li

                            class='hide'

                            ><a data-desc="通过关键词找音乐" target="_blank" href="http://8tracks.com/">8tracks</a></li>



                            <li

                            class='hide'

                            ><a data-desc="知名专业音乐社区" target="_blank" href="http://bbs.besgold.com/">百事高音乐论坛</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个免费的歌谱简谱网站" target="_blank" href="http://www.haoqupu.com/">好曲谱</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一款通过“描述”来找到自己喜欢的音乐的开创性音乐应用" target="_blank" href="http://jing.fm/">Jing+</a></li>



                            <li

                            class='hide'

                            ><a data-desc="以分享欧美音乐为主，小语种音乐为铺的音乐欣赏网站" target="_blank" href="http://www.erduoyinyue.com/">耳朵音乐</a></li>



                            <li

                            class='hide'

                            ><a data-desc="国内最大的高雅音乐，非流行音乐社区和资源库" target="_blank" href="http://www.musicyun.com/">音乐云</a></li>



                            <li

                            class='hide'

                            ><a data-desc="国内关于吉他的门户类网站" target="_blank" href="http://www.guitarchina.com/">吉他中国</a></li>



                            <li

                            class='hide'

                            ><a data-desc="用音乐倾听彼此" target="_blank" href="http://www.songtaste.com/">SongTaste</a></li>





















































































                            <li

                            class='hide'

                            ><a data-desc="国内口琴第一人张晓松发起的网站" target="_blank" href="http://www.tenholes.com/">蓝调口琴网</a></li>





                            <li

                            class='hide'

                            ><a data-desc="在这里找古典音乐的乐谱" target="_blank" href="http://www.imslp.org/">imslp</a></li>
































































































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-6-3"></b>美术<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="谷歌提供的博物馆在线浏览网站" target="_blank" href="http://www.googleartproject.com/">谷歌美术馆</a></li>



                            <li

                            ><a data-desc="网站里有16万多幅世界著名画家的画" target="_blank" href="http://gallerix.asia/">绘画</a></li>



                            <li

                            ><a data-desc="大型综合性设计网站，国内最活跃的原创设计交流平台" target="_blank" href="http://www.zcool.com.cn/">站酷</a></li>



                            <li

                            ><a data-desc="一个数字图形(CG)艺术社区" target="_blank" href="http://www.leewiart.com/">乐艺</a></li>



                            <li

                            ><a data-desc="一个可以浏览来自世界各地顶尖画廊、博物馆和私人收藏作品的艺术网站。需翻墙" target="_blank" href="http://art.sy/">art.sy</a></li>



                            <li

                            ><a data-desc="一个简略的美术网站，提供高品质复制画的网络画廊" target="_blank" href="http://www.ss.net.tw/">名画档案</a></li>



                            <li

                            ><a data-desc="中国美术馆官方网站" target="_blank" href="http://www.namoc.org/">中国美术馆</a></li>





                            <li

                            class='hide'

                            ><a data-desc="涂鸦王国，为梦想而画" target="_blank" href="http://poobbs.com/">涂鸦王国</a></li>
































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-6-4"></b>摄影<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="摄影爱好者分享摄影技巧和作品的网站" target="_blank" href="http://www.fengniao.com/">蜂鸟网</a></li>



                            <li

                            ><a data-desc="Strobist中文站，介绍闪光灯使用技巧" target="_blank" href="http://www.shanzhuoboshi.com/">闪卓博识</a></li>



                            <li

                            ><a data-desc="以原创摄影和数码后期内容为主的博客网站" target="_blank" href="http://www.dvpoo.com/">尘埃影像</a></li>



                            <li

                            ><a data-desc="中文摄影社区" target="_blank" href="http://tuchong.com/">图虫网</a></li>



                            <li

                            ><a data-desc="包括视觉、创意、艺术、交互界面设计等的网络视觉艺术杂志" target="_blank" href="http://www.padmag.cn/">PADMAG视觉杂志</a></li>



                            <li

                            ><a data-desc="一家专注摄影以及周边内容的资讯类网站" target="_blank" href="http://www.imgii.com/">IMGII</a></li>



                            <li

                            class='hide'

                            ><a data-desc="专注于莱卡以及人文摄影话题的中文摄影网站" target="_blank" href="http://www.leica.org.cn/">莱卡中文摄影</a></li>



                            <li

                            class='hide'

                            ><a data-desc="原创摄影作品与拍摄心得的分享，讲述照片背后故事的博客" target="_blank" href="http://imagene.me/">影像基因</a></li>



                            <li

                            class='hide'

                            ><a data-desc="旨在为全球华人摄影爱好者提供交流的网络平台的中文影像生活门户" target="_blank" href="http://ww.xitek.com/">色影无忌</a></li>



                            <li

                            ><a data-desc="最快的器材资讯，最有趣的摄影播报" target="_blank" href="http://xjrumo.com/">相机入魔</a></li>
























































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-6-5"></b>艺术<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="原创艺术社交电子商务平台" target="_blank" href="http://www.wakelook.com">Wakelook</a></li>



                            <li

                            ><a data-desc="一个全新的在线当代艺术社区" target="_blank" href="http://www.hoolay.cn/">胡来网</a></li>



                            <li

                            ><a data-desc="一个提供艺术新闻、艺术展览信息的多元化艺术资讯平台" target="_blank" href="http://www.798space.cn/">798艺术网</a></li>



                            <li

                            ><a data-desc="一个当代艺术交流平台" target="_blank" href="http://club.99ys.com/">99艺术社区</a></li>



                            <li

                            ><a data-desc="中国艺术理论及艺术品线上展览及交易的专业网站" target="_blank" href="http://www.zgyspp.com/">中国艺术批评</a></li>



                            <li

                            ><a data-desc="一个国外的艺术家社区" target="_blank" href="http://www.deviantart.com/">异常艺术</a></li>



                            <li

                            class='hide'

                            ><a data-desc="美国现代艺术博物馆官网" target="_blank" href="http://www.moma.org/">MoMA</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个展示分形艺术之美，学习交流分形艺术创作的平台" target="_blank" href="http://www.fxysw.com/forum.php">分形艺术网</a></li>










































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-6-6"></b>设计<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="著名的设计师作品展示平台" target="_blank" href="http://dribbble.com/">dribbble</a></li>



                            <li

                            ><a data-desc="腾讯旗下关于视觉设计、交互设计、前端开发的设计团队网站" target="_blank" href="http://cdc.tencent.com/">腾讯CDC</a></li>







                            <li

                            ><a data-desc="一个专注于WEB前端开发和设计资源收集的博客" target="_blank" href="http://www.kekaku.com/">可咔酷</a></li>



                            <li

                            ><a data-desc="人机界面设计门户类网站" target="_blank" href="http://chinaui.com/">优艾网</a></li>



                            <li

                            ><a data-desc="一个全面的Logo设计综合网站" target="_blank" href="http://www.rologo.com/">标志共和国</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个设计交流平台和室内设计师互动社区" target="_blank" href="http://www.shejiben.com/">设计本</a></li>



                            <li

                            class='hide'

                            ><a data-desc="Logo设计门户，提供标志设计作品欣赏" target="_blank" href="http://www.sharelogo.cn/">晒标网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="专业的设计素材资源网站" target="_blank" href="http://www.4kong.com/">设计是空</a></li>



                            <li

                            class='hide'

                            ><a data-desc="汇集全球高品质，好设计的购物社区" target="_blank" href="http://xiangqu.com/">想去</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个专门收集分享关于品牌的内容和信息的交流平台" target="_blank" href="http://www.bbbbrand.com/">绝对品牌</a></li>



                            <li

                            class='hide'

                            ><a data-desc="国内最活跃的原创新锐设计交流平台" target="_blank" href="http://www.design521.com/portal.php">设计青年</a></li>











                            <li

                            class='hide'

                            ><a data-desc="日本传统颜色的RGB值" target="_blank" href="http://nipponcolors.com/">NIPPON COLORS</a></li>














































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-6-7"></b>视觉<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="视觉图片分享社区及创意设计产品社会化电商平台" target="_blank" href="http://shijue.me/home">视觉中国</a></li>



                            <li

                            ><a data-desc="一个分享视觉、摄影、插画、设计、生活的博客" target="_blank" href="http://www.xxchixx.com/">视觉共享</a></li>



                            <li

                            ><a data-desc="一个关于设计，插画，摄影，素材，的综合性网站" target="_blank" href="http://sudasuta.com/">苏打苏塔</a></li>



                            <li

                            ><a data-desc="一个分享创意设计、摄影、娱乐的平台" target="_blank" href="http://www.poboo.com/">poboo创意视觉</a></li>



                            <li

                            ><a data-desc="创意人群分享生活之美、设计之美的平台" target="_blank" href="http://shengsequanma.com/">声色犬马</a></li>



                            <li

                            class='hide'

                            ><a data-desc="分享创意、艺术、设计、摄影的网络视觉艺术杂志" target="_blank" href="http://www.artfans.net/">artfans视觉杂志</a></li>



                            <li

                            ><a data-desc="高品质设计、艺术、摄影、教程、插画类的分享平台" target="_blank" href="http://aladd.net/">Aladd</a></li>







                            <li

                            ><a data-desc="专注于创意设计、风格时尚、映像美学与都市文化的在线杂志。" target="_blank" href="http://nonzen.com/">空白杂志</a></li>















                            <li

                            class='hide'

                            ><a data-desc="国外概念设计论坛" target="_blank" href="http://www.conceptart.org/forums/">概念设计</a></li>




















                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-6-8"></b>创意<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="关注新鲜创意资讯的新锐网络媒体" target="_blank" href="http://since1984.cn/">since1984</a></li>



                            <li

                            ><a data-desc="一个基于作品集的为创意人才和企业的搭建沟通桥梁的社交网站" target="_blank" href="http://www.ccihr.com/">创意人</a></li>



                            <li

                            ><a data-desc="一个新兴的创意孵化平台" target="_blank" href="http://jueso.diandian.com/">jue.so</a></li>



                            <li

                            ><a data-desc="专注于平面广告创意，以文案的视角来看待平面创意的资讯网站" target="_blank" href="http://www.topys.cn/">顶尖文案</a></li>



                            <li

                            ><a data-desc="一个分享简单质朴设计的博客网站" target="_blank" href="http://www.closhow.cn/">简约生活</a></li>



                            <li

                            ><a data-desc="一个收集分享创意、文字、技巧的地方" target="_blank" href="http://ideaest.com/">创意栖息</a></li>



                            <li

                            class='hide'

                            ><a data-desc="创意趣味的家居生活，小清新的氧气摄影美图，手工生活的视觉生活趣味博客" target="_blank" href="http://www.moonou.com/">木偶走天涯</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供创意产品信息的资讯网站" target="_blank" href="http://www.xiankankan.com/">先看看</a></li>



                            <li

                            class='hide'

                            ><a data-desc="分享生活、家居、产品创意设计，摄影作品的信息平台" target="_blank" href="http://www.ycy8.net/">有创意吧</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个提供国内外创意，有趣的东西的创意个人博客" target="_blank" href="http://www.ideasba.com/">创意吧</a></li>



                            <li

                            class='hide'

                            ><a data-desc="为设计师，创意爱好者提供家居，摄影，DIY等灵感来源" target="_blank" href="http://crege.net">Crege创意阁</a></li>












































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-6-9"></b>趣味<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="分享趣味生活用品的网站" target="_blank" href="http://mooogu.cn/">蘑菇爱家居</a></li>



                            <li

                            ><a data-desc="一个收集和分享新鲜创意的玩意，资讯和网站的博客" target="_blank" href="http://www.ixinxian.com/">爱新鲜</a></li>



                            <li

                            ><a data-desc="提供美好设计的灵感的精品内容分享网站" target="_blank" href="http://fishcan.net/">鱼罐头</a></li>



                            <li

                            ><a data-desc="一个分享被忽视的趣知识的网站" target="_blank" href="http://www.moorburn.com/">烧荒网</a></li>



                            <li

                            ><a data-desc="用自己的在线涂鸦作品跟他人交换" target="_blank" href="http://www.sketchswap.com/">一画换一画</a></li>



                            <li

                            ><a data-desc="一个包含影像、图片、文字、游戏等各方面内容的娱乐网站" target="_blank" href="http://www.u148.net/">有意思吧</a></li>



                            <li

                            ><a data-desc="发现美好事物，分享平凡生活中的小惊喜" target="_blank" href="http://www.mysenz.com/">想象家</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个分享新鲜玩意儿的博客" target="_blank" href="http://www.ixiqi.com/">爱稀奇</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个可以在线倾听细雨雷鸣的网站" target="_blank" href="http://www.rainymood.com/">听雨</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个以云彩为主题的交流网站" target="_blank" href="http://cloudappreciationsociety.org/">观云</a></li>



                            <li

                            class='hide'

                            ><a data-desc="设计师作品分享社区" target="_blank" href="http://www.choudou.com/">臭豆</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个分享用LED做成灯的博客网站" target="_blank" href="http://www.ledgood.com/">LED灯光之家</a></li>










































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-6-10"></b>文艺<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="提供当地线下活动的资讯平台" target="_blank" href="http://beijing.douban.com/">豆瓣同城</a></li>



                            <li

                            ><a data-desc="国内查询及参与活动的资讯平台" target="_blank" href="http://www.mosh.cn/">魔时网</a></li>



                            <li

                            ><a data-desc="提供戏剧推荐及大城市戏剧资讯" target="_blank" href="http://www.mask9.com/">好戏网</a></li>



                            <li

                            ><a data-desc="以时间为线索的上海玩乐资讯搜索平台" target="_blank" href="http://www.letiming.com/">乐时光</a></li>



                            <li

                            ><a data-desc="一本专注于书影音、当代艺术与设计等文艺领域的独立杂志" target="_blank" href="http://zhoukan.cc/">文艺生活周刊</a></li>



                            <li

                            ><a data-desc="老牌音乐剧论坛" target="_blank" href="http://bbs.chinamusical.net/">爱音客论坛</a></li>



























































































































































                            <li

                            ><a data-desc="微时光是一个分享文章、图片、音乐的网站，我们致力于推荐清新，有质感，美好的资源。" target="_blank" href="http://www.leavemealone.cn/">微时光</a></li>


























                        </ul>
                    </div>

                </div>
            </div>

            <div id='island' class="title-b">
                <div class="title">
                    <h2>孤岛客</h2>
                    <a href="http://gate.guokr.com/submit/interest/7/" class="title-add" target='_blank'><span>+</span>添加网站</a>
                    <a href="javascript:void 0;" class="title-trigger" data-operation="closeBoard">收起</a>
                </div>
            </div>
            <div class="categorys-hd fix">
                <div class="categorys">

                    <div class="category">
                        <h3><b class="category-7-1"></b>阅读<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="高质量阅读和写作社区" target="_blank" href="http://www.15yan.com/">十五言</a></li>



                            <li

                            ><a data-desc="由来自清华北邮的编辑们组建的一个非盈利泛科技类文章阅读网站" target="_blank" href="http://9yls.net/">第九阅览室</a></li>



                            <li

                            class='hide'

                            ><a data-desc="网络热门文摘" target="_blank" href="http://www.zreading.cn/">左岸读书</a></li>



                            <li

                            ><a data-desc="一个聚合了书评杂志、书评博客、中英文读书资源的读书网站" target="_blank" href="http://www.duxieren.com/">读写人</a></li>



                            <li

                            ><a data-desc="一个简单的中文阅读网站" target="_blank" href="http://meiriyiwen.com/">每日一文</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个收集优质文章，倡导碎片时间阅读的网站" target="_blank" href="http://www.dushumashang.com/">读书马上</a></li>



                            <li

                            ><a data-desc="阅读、发现和分享网络博客文摘的网站" target="_blank" href="http://www.dapenti.com/blog/index.asp">喷嚏网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供自编《中华诗词》程序免费下载，包含唐诗、宋词、散曲及个人作品" target="_blank" href="http://www.zhsc.com/indexgb.htm">分类词汇与古代诗词</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个在线免费阅读网站" target="_blank" href="http://ifanshu.com/">矮番薯</a></li>



                            <li

                            class='hide'

                            ><a data-desc="教育类的文摘博客" target="_blank" href="http://www.eduzx.net/">教育在线</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一家小而安静的在线阅读网站" target="_blank" href="http://aladd.me">浮生书店</a></li>





                            <li

                            class='hide'

                            ><a data-desc="黄集伟博客，每周一更新，最新时事评论。" target="_blank" href="http://www.huangjiwei.com/blog/">孤岛客</a></li>





                            <li

                            class='hide'

                            ><a data-desc="一个简单的随身阅读“电台”" target="_blank" href="http://yue.fm/">阅FM</a></li>



                            <li

                            class='hide'

                            ><a data-desc="像剪报那样收藏互联网内容" target="_blank" href="http://www.vjianke.com/">剪客</a></li>



                            <li

                            class='hide'

                            ><a data-desc="人文与社科综合讨论网站" target="_blank" href="http://wen.org.cn/">社会与人文</a></li>











                            <li

                            ><a data-desc="韩寒主编的电子刊物" target="_blank" href="http://hanhan.qq.com/hanhan/one/one305m.htm">一个</a></li>









































































































                            <li

                            ><a data-desc="有品格的数字古籍图书馆" target="_blank" href="http://shuge.org/">书格</a></li>




















































































































































































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-7-2"></b>宅<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="一个关于电影、科幻、奇想、怀古、动漫、GEEK、宅文化、怪趣事物等内容的群体博客" target="_blank" href="http://ethermetic.com/">Ethermetic</a></li>



                            <li

                            ><a data-desc="一个二次元技术社区" target="_blank" href="http://www.gn00.com/">技术宅社区</a></li>



                            <li

                            ><a data-desc="一个使用Wiki架构人人皆可编辑的ACG内容百科全书" target="_blank" href="http://zh.moegirl.org/">萌娘百科</a></li>



                            <li

                            ><a data-desc="一个泛ACG综合站点" target="_blank" href="http://www.hgamecn.com/">Hgamecn</a></li>



                            <li

                            ><a data-desc="一个专门针对科技宅而设计的老黄历" target="_blank" href="http://technet.tw/">宅民历</a></li>



                            <li

                            ><a data-desc="Vocaloid初音同好交流论坛" target="_blank" href="http://www.miku5.com/">萌葱窝</a></li>



                            <li

                            ><a data-desc="一个专注于发现、欣赏及分享动漫音乐的新世代社会化音乐平台" target="_blank" href="http://moe.fm/">萌否电台</a></li>






















































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-7-3"></b>创业<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="一个让你发起和支持创意项目的平台" target="_blank" href="http://www.demohour.com/">点名时间</a></li>



                            <li

                            ><a data-desc="一个创意计划众筹平台" target="_blank" href="http://www.dreamore.cn/">追梦网</a></li>



                            <li

                            ><a data-desc="一个面向中国TMT领域初创新公司新产品的数据库和点评社区" target="_blank" href="http://17startup.com/">17Startup</a></li>



                            <li

                            ><a data-desc="中国创业者的资讯门户和互动平台" target="_blank" href="http://cyzone.cn/">创业邦</a></li>



                            <li

                            ><a data-desc="MIT Technology Review中文站、提供有商业前景的前沿科技资讯" target="_blank" href="http://www.techreviewchina.com/">麻省理工科技创业</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一家专注于对社交网络的品牌口碑和舆情进行收集和分析的公司的官方网站" target="_blank" href="http://www.nowledgedata.com.cn/">识代运筹</a></li>



                            <li

                            class='hide'

                            ><a data-desc="搜集优秀的商业创意" target="_blank" href="http://www.bukop.com/">商业不靠谱</a></li>



                            <li

                            class='hide'

                            ><a data-desc="帮助创业者获得灵感的文章分享网站" target="_blank" href="http://www.iheima.com/">i黑马</a></li>



                            <li

                            class='hide'

                            ><a data-desc="专注青年公益和青年创业的非营利组织" target="_blank" href="http://www.heipingguo.org/index.php/index">黑苹果青年</a></li>




























































































































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-7-4"></b>效率<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="关注GTD和学习效率" target="_blank" href="http://www.productivelife.cn/">葡挞生活</a></li>



                            <li

                            ><a data-desc="一个致力于提高工作效率、分享实用技巧的博客" target="_blank" href="http://www.naadou.com/">纳豆</a></li>



                            <li

                            ><a data-desc="一个关于时间管理，和学习技巧的博客" target="_blank" href="http://www.mifengtd.cn/">褪墨</a></li>



                            <li

                            ><a data-desc="分享第一视角的战拖经验和拖延症知识的网站" target="_blank" href="http://www.zhantuo.com/">战拖会</a></li>



                            <li

                            ><a data-desc="全球最大的目标设定分享网站" target="_blank" href="http://www.43things.com/">43things</a></li>



                            <li

                            ><a data-desc="一个关注如何“更快、更有效的学习”的博客网站" target="_blank" href="http://www.read.org.cn/">战隼的学习探索</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个分享时间管理方法、案例、产品的博客" target="_blank" href="http://www.gtdlife.com/">时间管理行动家</a></li>



                            <li

                            class='hide'

                            ><a data-desc="提供一种简单的密码管理方法的应用" target="_blank" href="http://flowerpassword.com/">花密</a></li>


























































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-7-5"></b>问答<s></s></h3>
                        <ul class="list">


                            <li

                            class='hide'

                            ><a data-desc="中小学习题解答网站" target="_blank" href="http://www.prcedu.com/">答疑网</a></li>



                            <li

                            ><a data-desc="一个真实的网络问答社区" target="_blank" href="http://www.zhihu.com/">知乎</a></li>



                            <li

                            ><a data-desc="通过协作，以知识解决生活问题的地方" target="_blank" href="http://www.guokr.com/ask/">果壳问答</a></li>



                            <li

                            ><a data-desc="中国付费的问答社区" target="_blank" href="http://luexiao.com/">略晓</a></li>



                            <li

                            ><a data-desc="趣味性公益问答网站" target="_blank" href="http://www.dazuoxiaoti.com/">小题大作</a></li>



                            <li

                            ><a data-desc="世界知名的问答社区" target="_blank" href="http://www.quora.com/">Quora</a></li>



                            <li

                            ><a data-desc="一个免费实时问答在线英文平台" target="_blank" href="http://www.chacha.com/">ChaCha</a></li>



                            <li

                            class='hide'

                            ><a data-desc="中国大学生社交问答平台" target="_blank" href="http://www.shishuowang.com/">师说</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个专注于企业管理领域的开放问答社区" target="_blank" href="http://www.jiwenjida.com/">即问即答</a></li>




























































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-7-6"></b>洞察<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="美国探索频道的一个科普节目" target="_blank" href="http://dsc.discovery.com/tv/mythbusters/">流言终结者</a></li>



                            <li

                            ><a data-desc="台湾最完整的网络谣言与调查报告网站" target="_blank" href="http://rumor.nownews.com/">网路追追追</a></li>



                            <li

                            ><a data-desc="美国一家专门核查并揭穿谣言和传闻的网站" target="_blank" href="http://www.snopes.com/">Snopes</a></li>



                            <li

                            ><a data-desc="关于都市传说专题的社群网站" target="_blank" href="http://urbanlegends.about.com/">都市传说</a></li>



                            <li

                            ><a data-desc="揭露各种流传在网络间的流言" target="_blank" href="http://www.hoax-slayer.com/">Hoax Slayer</a></li>














                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-7-7"></b>心情<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="介绍欧美以及国内摇滚音乐，并提供试听的摇滚电台" target="_blank" href="http://www.luoo.net/">落网</a></li>



                            <li

                            ><a data-desc="一群在互联网音乐服务界的音乐青年们的群博" target="_blank" href="http://ear.duomi.com/">邻居的耳朵</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个句子分享社区" target="_blank" href="http://www.juzimi.com">句子迷</a></li>



                            <li

                            ><a data-desc="倾听文字的声音" target="_blank" href="http://www.yuedu.fm/">悦读</a></li>



                            <li

                            class='hide'

                            ><a data-desc="小清新网站" target="_blank" href="http://www.xftu.net/">小凡兔</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个分享心情的音乐电台" target="_blank" href="http://jia.fm/">假电台</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个治愈系的心理节目电台" target="_blank" href="http://fm.xinli001.com/">心理fm</a></li>



                            <li

                            class='hide'

                            ><a data-desc="将文字以声音的形式生动地表达给这个世界的电台站点" target="_blank" href="http://radio.seazor.com/">半岛网络电台</a></li>



                            <li

                            class='hide'

                            ><a data-desc="综合文学社区、网络电台和电子杂志的清新文艺网站" target="_blank" href="http://www.seazor.com">半岛</a></li>



                            <li

                            class='hide'

                            ><a data-desc="小清新的图片分享站点" target="_blank" href="http://missever.com">思念往昔</a></li>



                            <li

                            ><a data-desc="网络互动轻杂志" target="_blank" href="http://dangran.me/">当然</a></li>



                            <li

                            class='hide'

                            ><a data-desc="记录梦境的地方" target="_blank" href="http://www.bothbox.com">梦境社区</a></li>



                            <li

                            ><a data-desc="用文字交换世界" target="_blank" href="http://pianke.me/">片刻</a></li>



                            <li

                            class='hide'

                            ><a data-desc="生活从此简单而不平凡。" target="_blank" href="http://sebei.lofter.com/">拾贝</a></li>



                            <li

                            ><a data-desc="探讨爱情、理解爱情" target="_blank" href="http://www.nature-of-love.com/">论爱</a></li>
















































                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-7-8"></b>私密<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="私密分享网站" target="_blank" href="http://mm.moumentei.com/welcome">秘密</a></li>



                            <li

                            ><a data-desc="一个记录生活的网络日记本" target="_blank" href="http://www.timepill.net/">胶囊日记</a></li>



                            <li

                            ><a data-desc="一个注重隐私、简单轻快的日记本" target="_blank" href="http://5diary.com">吾志</a></li>



                            <li

                            ><a data-desc="一个以情感生活类为主的秘密分享社区" target="_blank" href="http://www.simijie.com/">私密街</a></li>



                            <li

                            ><a data-desc="程序员吐槽-宣泄你的负能量，每日一题，让我们共同见证你的成长。" target="_blank" href="http://www.devtucao.com">程序员吐槽</a></li>



                            <li

                            ><a data-desc="一个简单、温暖的小社区" target="_blank" href="http://youqu.de/">有趣的</a></li>



                            <li

                            ><a data-desc="一个分享秘密的网站" target="_blank" href="http://www.umimi.cn/">有秘密</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个供你发泄的倾诉平台、一个简洁的日记网站" target="_blank" href="http://www.faxieba.net/">发泄吧</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个简洁的日记网站" target="_blank" href="http://guokeriji.com/">果壳日记</a></li>




















                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-7-9"></b>社交<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="慢性病、罕见病病友提供交流和分享的垂直化社交网络" target="_blank" href="http://henizaiyiqi.com/">和你在一起</a></li>



                            <li

                            ><a data-desc="最贴近东方校园文化的社交网站" target="_blank" href="http://www.sxbbm.com/">师兄帮帮忙</a></li>



                            <li

                            ><a data-desc="中国最大的轻博客平台" target="_blank" href="http://www.diandian.com/">点点</a></li>





                            <li

                            ><a data-desc="同城创意线下活动社群" target="_blank" href="http://www.00base.com/">0号基地</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个有人情味的社区轻论坛" target="_blank" href="http://www.bling0.com/">博聆</a></li>



                            <li

                            class='hide'

                            ><a data-desc="一个关于分享和探索的地方" target="_blank" href="http://www.v2ex.com">V2EX</a></li>
                            <li class='hide'><a data-desc="一款微博排序、智能阅读、个性化筛选微博的应用" target="_blank" href="http://www.51youwei.com">优微</a></li>
                            <li class='hide'><a data-desc="豆瓣推出的虚拟城市社区" target="_blank" href="http://alphatown.com/">阿尔法城</a></li>
                        </ul>
                    </div>

                    <div class="category">
                        <h3><b class="category-7-10"></b>世界<s></s></h3>
                        <ul class="list">


                            <li

                            ><a data-desc="翻译中文之外的互联网精华" target="_blank" href="http://www.yeeyan.org/">译言网</a></li>



                            <li

                            ><a data-desc="传播有价值、有趣味的政治新闻的合作型媒体博客" target="_blank" href="http://www.zhengtan.me/">正谈</a></li>



                            <li

                            ><a data-desc="发掘海内外学者和智库，引进思想资源的独立网站" target="_blank" href="http://cnpolitics.org/">政见</a></li>



                            <li

                            ><a data-desc="一个尝试在中国实践公民记者的网站" target="_blank" href="http://www.my1510.cn/index.php">一五一十部落</a></li>



                            <li

                            class='hide'

                            ><a data-desc="中央编译局官方网站" target="_blank" href="http://www.cctb.net/qkzz.jsp?rootClassInfoId=143">中共中央编译局</a></li>



                            <li

                            class='hide'

                            ><a data-desc="在大变革时代寻找共识" target="_blank" href="http://www.21ccom.net/">共识网</a></li>



                            <li

                            class='hide'

                            ><a data-desc="旨在打造一个能够理性思考与公共论辩的空间的评论网站" target="_blank" href="http://opinion.cw.com.tw/">独立评论@天下</a></li>



                            <li

                            class='hide'

                            ><a data-desc="通过挖掘和整理社交媒体上的信息来解读现代中国的新兴英文网络杂志" target="_blank" href="http://tealeafnation.com/">Tea Leaf Nation</a></li>



                            <li

                            ><a data-desc="关注积极青年的社会实践与行动。" target="_blank" href="http://hicape.com/">CAPE</a></li>
                        </ul>
                    </div>

                </div>
            </div>


            <div class="logos">
                <a target="_blank" href="http://www.guokr.com/" class="logos-guokr" id="guokrLogo">果壳网</a>
            </div>
            <div class="bottom" id="bottom">
                <p>©2015果壳网 京ICP备09043258号-2 京公网安备1101052730</p>
            </div>
        </div>
    </div>
    <script>
    var ukey = '',
        g_page_name = 'anywhereIndexPage',
        GJS_VERSION = 'v2',
        GJS_PRELOAD = ['jQuery', 'ga', 'GUtils'];
    </script>
    <script>
        window["_BFD"] = window["_BFD"] || {};
            _BFD.client_id = "Cguoke";
            _BFD.BFD_INFO = {
                "user_id" : ""
            };
            _BFD.script = document.createElement("script");
            _BFD.script.type = "text/javascript";
            _BFD.script.async = true;
            _BFD.script.charset = "utf-8";
            _BFD.script.src = (('https:' == document.location.protocol?'https://ssl-static1':'http://static1')+'.bfdcdn.com/service/guokewang/guokewang.js');
            document.getElementsByTagName("head")[0].appendChild(_BFD.script);
    </script>
    <script src="http://static.guokr.com/js/I.js?v=0805ef457a30"></script>
    <script src="http://static.guokr.com/js/anywhere.js?v=a5a8324163d2?v2"></script>
</body>
</html>
