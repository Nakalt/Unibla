<?php
$servername = "localhost";
$username = "root";  // Veritabanı kullanıcı adı
$password = "";  // Veritabanı şifresi
$dbname = "konum_db";  // Veritabanı adı

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $sql = "INSERT INTO users (user_id, latitude, longitude) 
            VALUES ('$user_id', '$latitude', '$longitude')
            ON DUPLICATE KEY UPDATE latitude='$latitude', longitude='$longitude', last_update=NOW()";

    if ($conn->query($sql) === TRUE) {
        echo "Konum başarıyla kaydedildi.";
    } else {
        echo "Hata: " . $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canlı Konum Takibi</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        #map { height: 400px; width: 100%; }
    </style>
</head>
<body>

    <h2>Canlı Konum Takibi</h2>
    <div id="map"></div>

    <script>
        let map = L.map('map').setView([39.92077, 32.85411], 10); // Varsayılan: Ankara
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap Katkıda Bulunanlar'
        }).addTo(map);

        let markers = {};

        function updateMarkers() {
            fetch("get_locations.php")
            .then(response => response.json())
            .then(data => {
                data.forEach(user => {
                    const userId = user.user_id;
                    const lat = parseFloat(user.latitude);
                    const lng = parseFloat(user.longitude);

                    if (markers[userId]) {
                        markers[userId].setLatLng([lat, lng]);
                    } else {
                        markers[userId] = L.marker([lat, lng]).addTo(map)
                            .bindPopup(`Kullanıcı: ${userId}`);
                    }
                });
            })
            .catch(error => console.error("Hata:", error));
        }

        setInterval(updateMarkers, 5000); // 5 saniyede bir güncelle
    </script>

</body>
</html>
    <!-- HTMLE EKLENEBİLİR

function sendLocation() {
    if ("geolocation" in navigator) {
        navigator.geolocation.watchPosition((position) => {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            const userId = "user_" + Math.random().toString(36).substr(2, 9);

            const formData = new FormData();
            formData.append("user_id", userId);
            formData.append("latitude", latitude);
            formData.append("longitude", longitude);

            fetch("save_location.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => console.log(data))
            .catch(error => console.error("Hata:", error));
        });
    } else {
        alert("Tarayıcınız konum hizmetini desteklemiyor.");
    }
}

// Sayfa yüklendiğinde konumu göndermeye başla
sendLocation();
    -->