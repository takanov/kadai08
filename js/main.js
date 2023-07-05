let map;
let geocoder;
let selectedLatLng;  // ユーザーが選択した緯度と経度を保存する変数
let address;  // ユーザーが選択した場所の住所を保存する変数
let marker;  // 現在のマーカーを保存する変数
    
async function initMap() {
    const { Map, Geocoder } = await google.maps.importLibrary("maps");
    geocoder = new google.maps.Geocoder();
    map = new Map(document.getElementById("map"), {
        center: { lat: 35.717, lng: 139.731 },
        zoom: 8,
    });

    // マップがクリックされた場合のイベントリスナーを設定
    map.addListener("click", (e) => {
        // クリックした場所の緯度経度を取得
        selectedLatLng = e.latLng.toJSON();
    
        // 緯度経度をフォームにセット
        document.getElementById('lat').value = selectedLatLng.lat;
        document.getElementById('lng').value = selectedLatLng.lng;
    
        // 逆ジオコーディングを実行
        geocoder.geocode({ location: selectedLatLng }, (results, status) => {
            if (status === "OK") {
                if (results[0]) {
                    // 最も詳細な住所情報を取得して保存
                    address = results[0].formatted_address;
    
                    // 住所をフォームにセット
                    document.getElementById('address').value = address;
                } else {
                    window.alert("No results found");
                }
            } else {
                window.alert("Geocoder failed due to: " + status);
            }
        });

        // 新たなマーカーを作成
        marker = new google.maps.Marker({
            position: e.latLng,
            map,
        });
    });
}
initMap();

// フォームが送信されたときのイベントリスナーを設定
$("#myForm").on("submit", function(e) {
    e.preventDefault();  // フォームのデフォルトの送信をキャンセル

    // 非同期通信でPHPにデータを送信
    $.ajax({
        type: "POST",
        url: "insert.php",
        data: {
            "name": $("#name").val(),
            "email": $("#email").val(),
            "content": $("#content").val(),
            "lat": selectedLatLng.lat,
            "lng": selectedLatLng.lng,
            "address": address
        }
    });
});