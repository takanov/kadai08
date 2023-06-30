<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
            key: "",
            v: "weekly",
            // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
            // Add other bootstrap parameters as needed, using camel case.
        });
    </script>
    <script src="js/main.js"></script>
</head>

<body onload="initMap()">
    <div style="height: 500px; width: 100%;">
        <div id="map" style="height: 500px; width: 100%;"></div> <!-- 地図を表示する領域 -->
    </div>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php" id="myForm">
        <div class="jumbotron">
            <legend>いろんなモノの居場所</legend>
            <label>タイトル：<input type="text" name="name" id="name"></label><br>
            <label>種類：<input type="text" name="email" id="email"></label><br>
            <label><textArea name="content" rows="4" cols="40" id="content"></textArea></label><br>
            <label>緯度：<input type="text" name="lat" id="lat" readonly></label><br>
            <label>経度：<input type="text" name="lng" id="lng" readonly></label><br>
            <label>住所：<input type="text" name="address" id="address" readonly></label><br>
            <input type="submit" value="送信">
        </div>
    </form>
    <!-- Main[End] -->
    

</body>


