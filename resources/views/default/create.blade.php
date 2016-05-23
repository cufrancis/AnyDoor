
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
<body class="submit">
    <div class="top-wrap">
        <div class="top-banner"></div>
        <div class="top">
            <a href="http://gate.guokr.com/"><h1 class="top-logo">果壳任意门</h1></a>
        </div>
    </div>
    <div class="main-wrap">
        <div class="main">
            <h2>添加网站</h2>
            <div class='hide'>
                <div class="item_template">
                    <p>
                        <label>网站名：</label>
                        <input name="name" type="text" maxlength="20"/>
                        <span class="hide errorMess">请填写</span>
                    </p>
                    <p>
                        <label>链&nbsp;&nbsp;&nbsp;接：</label>
                        <input name="link" type="text" class="link"/>
                        <span class="hide errorMess">请填写</span>
                    </p>
                    <p>
                        <label>分&nbsp;&nbsp;&nbsp;类：</label>
                        <select name="interest_id">

                            <option
                            value="1"

                            selected='true'

                            >爱智慧</option>

                            <option
                            value="2"

                            >有知识</option>

                            <option
                            value="3"

                            >乐生活</option>

                            <option
                            value="4"

                            >很能打</option>

                            <option
                            value="5"

                            >极客范</option>

                            <option
                            value="6"

                            >文艺腔</option>

                            <option
                            value="7"

                            >孤岛客</option>

                        </select>
                        <select name="taxonomy_id">

                            <option value="1">数学</option>

                            <option value="2">物理</option>

                            <option value="3">天文</option>

                            <option value="4">生物</option>

                            <option value="5">医学</option>

                            <option value="6">心理学</option>

                            <option value="7">语言学</option>

                            <option value="8">人类学</option>

                            <option value="9">考古学</option>

                            <option value="10">经济学</option>

                            <option value="11">地质</option>

                            <option value="12">化学</option>

                            <option value="13">学术</option>

                        </select>
                    </p>
                    <p>
                        <label>描&nbsp;&nbsp;&nbsp;述：</label>
                        <textarea maxlength="50" placeholder="请用一句话描述你提交的网站" name="description"></textarea>
                        <span class="hide errorMess">请填写 请不要超过50字符</span>
                    </p>
                    <a id="del" class="item-del" href="javascript:void(0);"><span></span></a>
                </div>
            </div>
            <form class="submit-form" id="submit-form" action="http://gate.guokr.com/submit/interest/1/" method="POST">
                <input id="csrf_token" name="csrf_token" type="hidden" value="1464011991.73##2d9488de0b5e5d35d2950b633d64d4a234fa6338">

                <div id='add'>
                    <a class="item-add" href="javascript:void(0);"><span></span>继续添加</a>
                </div>
                <input type="submit" value="提交" id='submit_button'/>
            </form>
        </div>
    </div>
    <script>
        var ukey = '',
            g_page_name = 'anywhereSubmitPage',
            GJS_VERSION = 'v2',
            GJS_PRELOAD = ['jQuery', 'ga', 'GUtils'];

        var selectDict = {"1": [{"id": 1, "name": "\u6570\u5b66"}, {"id": 2, "name": "\u7269\u7406"}, {"id": 3, "name": "\u5929\u6587"}, {"id": 4, "name": "\u751f\u7269"}, {"id": 5, "name": "\u533b\u5b66"}, {"id": 6, "name": "\u5fc3\u7406\u5b66"}, {"id": 7, "name": "\u8bed\u8a00\u5b66"}, {"id": 8, "name": "\u4eba\u7c7b\u5b66"}, {"id": 9, "name": "\u8003\u53e4\u5b66"}, {"id": 10, "name": "\u7ecf\u6d4e\u5b66"}, {"id": 11, "name": "\u5730\u8d28"}, {"id": 12, "name": "\u5316\u5b66"}, {"id": 13, "name": "\u5b66\u672f"}], "3": [{"id": 26, "name": "\u751f\u6d3b"}, {"id": 27, "name": "\u5403\u8d27"}, {"id": 28, "name": "\u5065\u5eb7"}, {"id": 29, "name": "\u7f8e\u5bb9"}, {"id": 30, "name": "\u604b\u7269"}, {"id": 31, "name": "\u4e24\u6027"}, {"id": 32, "name": "\u65f6\u5c1a"}, {"id": 33, "name": "\u80b2\u513f"}, {"id": 34, "name": "\u5ba0\u7269"}, {"id": 35, "name": "\u65b0\u9c9c\u4e8b"}, {"id": 36, "name": "\u56fe\u7247"}, {"id": 37, "name": "\u56ed\u827a"}, {"id": 38, "name": "\u624b\u5de5"}, {"id": 39, "name": "\u4f20\u7edf\u827a\u672f"}], "2": [{"id": 14, "name": "\u7f16\u7a0b\u8bed\u8a00"}, {"id": 15, "name": "\u4e92\u8054\u7f51\u6280\u672f"}, {"id": 16, "name": "\u79fb\u52a8\u5f00\u53d1"}, {"id": 17, "name": "\u901a\u4fe1\u6280\u672f"}, {"id": 18, "name": "\u7535\u5b50\u6280\u672f"}, {"id": 19, "name": "\u4eba\u5de5\u667a\u80fd"}, {"id": 20, "name": "\u56fe\u50cf\u5904\u7406"}, {"id": 21, "name": "\u52a8\u753b\u6280\u672f"}, {"id": 22, "name": "\u6570\u636e\u5206\u6790"}, {"id": 23, "name": "\u516c\u5f00\u8bfe"}, {"id": 24, "name": "\u5728\u7ebf\u8bfe\u7a0b"}, {"id": 25, "name": "\u5916\u8bed\u5b66\u4e60"}], "5": [{"id": 50, "name": "\u79d1\u6280"}, {"id": 51, "name": "IT"}, {"id": 52, "name": "\u6570\u7801"}, {"id": 53, "name": "\u786c\u4ef6"}, {"id": 54, "name": "\u8f6f\u4ef6"}, {"id": 55, "name": "APP"}, {"id": 56, "name": "\u52a8\u6f2b"}, {"id": 57, "name": "\u7535\u73a9"}, {"id": 58, "name": "\u667a\u529b"}, {"id": 59, "name": "\u7b11\u70b9\u4f4e"}, {"id": 60, "name": "\u79d1\u5e7b"}, {"id": 61, "name": "\u5947\u5e7b"}, {"id": 62, "name": "\u63a8\u7406"}, {"id": 63, "name": "DIY"}, {"id": 64, "name": "\u6a21\u578b"}, {"id": 65, "name": "\u4e50\u9ad8"}, {"id": 66, "name": "\u68cb\u724c"}, {"id": 67, "name": "\u805a\u5408"}], "4": [{"id": 40, "name": "\u65c5\u884c"}, {"id": 41, "name": "\u6237\u5916"}, {"id": 42, "name": "\u5065\u8eab"}, {"id": 43, "name": "\u8dd1\u6b65"}, {"id": 44, "name": "\u8db3\u7bee"}, {"id": 45, "name": "\u7f51\u7fbd"}, {"id": 46, "name": "\u9a91\u884c"}, {"id": 47, "name": "\u683c\u6597"}, {"id": 48, "name": "\u6781\u9650\u8fd0\u52a8"}, {"id": 49, "name": "\u88c5\u5907"}], "7": [{"id": 78, "name": "\u9605\u8bfb"}, {"id": 79, "name": "\u5b85"}, {"id": 80, "name": "\u521b\u4e1a"}, {"id": 81, "name": "\u6548\u7387"}, {"id": 82, "name": "\u95ee\u7b54"}, {"id": 83, "name": "\u6d1e\u5bdf"}, {"id": 84, "name": "\u5fc3\u60c5"}, {"id": 85, "name": "\u79c1\u5bc6"}, {"id": 86, "name": "\u793e\u4ea4"}, {"id": 87, "name": "\u4e16\u754c"}], "6": [{"id": 68, "name": "\u7535\u5f71"}, {"id": 69, "name": "\u97f3\u4e50"}, {"id": 70, "name": "\u7f8e\u672f"}, {"id": 71, "name": "\u6444\u5f71"}, {"id": 72, "name": "\u827a\u672f"}, {"id": 73, "name": "\u8bbe\u8ba1"}, {"id": 74, "name": "\u89c6\u89c9"}, {"id": 75, "name": "\u521b\u610f"}, {"id": 76, "name": "\u8da3\u5473"}, {"id": 77, "name": "\u6587\u827a"}]}
    </script>
    <script src="http://static.guokr.com/js/I.js?v=0805ef457a30"></script>
    <script src="http://static.guokr.com/js/anywhere.js?v=a5a8324163d2?v2"></script>
</body>
</html>
