<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>自分の好きなもの図鑑</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
            key: ,
            v: "weekly",
            // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
            // Add other bootstrap parameters as needed, using camel case.
        });
    </script>
    <script src="js/main.js"></script><!-- Main[End] -->
</head>

<body onload="initMap()">
<div class=" layout">
    <div id="map"></div> <!-- 地図を表示する領域 -->
        <!-- Head[Start] -->
        <section class="form">
            
            <!-- Main[Start] -->
            <form method="post" action="insert.php" id="myForm">
                <div class="jumbotron">
                    <legend class="title">自分の好きなもの図鑑をつくろう</legend>
                    <label>タイトル：<input type="text" name="name" id="name"></label><br>
                    <label>種類：<select name="tag" id="tag">
                        <option value="noSelect">えらんでね</option>
                        <option value="dinosaur">恐竜の化石</option>
                        <option value="beetle">昆虫：カブトムシ、クワガタ</option>
                        <option value="butterflyBee">昆虫：ちょうちょ、はち</option>
                        <option value="flower">花</option>
                        <option value="tree">木</option>
                    </select></label><br>
                    <label>好きなことを書こう：<textArea name="content" rows="4" cols="40" id="content"></textArea></label><br>

                    <div class="mapinfo">
                        <P class="map-title">地図をクリックしよう</P>
                        <label>見つけた場所：<input type="text" name="address" id="address" readonly></label><br>
                        <label>緯度：<input type="text" name="lat" id="lat" readonly></label><br>
                        <label>経度：<input type="text" name="lng" id="lng" readonly></label><br>
                    </div>
                    <input type="submit" class="sendBtn" value="送信">
                </div>
            </form>

            <div class="navbar"><a class="navbar-brand" href="select.php">データ一覧</a></div>
        </section>
    
   
</div>
</body>


