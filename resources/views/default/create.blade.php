
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

    {{-- {{dd($types[1]->childTypes)}} --}}
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

                          @for($i=0; $i < count($topTypes); $i++)
                            <option value="{{$i}}" @if($i == 0)selected="true"@endif >{{ $topTypes[$i]->name }}</option>
                          @endfor

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
            <form class="submit-form" id="submit-form" action="{{ url('/add') }}" method="POST">
              {!! csrf_field() !!}

                <div id='add'>
                    <a class="item-add" href="javascript:void(0);"><span></span>继续添加</a>
                </div>
                <input type="submit" value="提交" id='submit_button'/>
            </form>
        </div>
    </div>
    {{-- {{dd($jsonData)}} --}}
    <script>
        var ukey = '',
            g_page_name = 'anywhereSubmitPage',
            GJS_VERSION = 'v2',
            GJS_PRELOAD = ['jQuery', 'ga', 'GUtils'];

        var selectDict = {!! $jsonData !!}


    </script>
    <script src="{!!asset(config('web.theme').'I.js')!!}"></script>
    <script src="{!!asset(config('web.theme').'anywhere.js')!!}"></script>
    {{-- <script src="http://static.guokr.com/js/I.js?v=0805ef457a30"></script>
    <script src="http://static.guokr.com/js/anywhere.js?v=a5a8324163d2?v2"></script> --}}
</body>
</html>
