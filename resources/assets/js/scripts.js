var map = L.map('mapcontainer').setView([61.30337, 23.797609], 13);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'rikstam.n42kjn41',
    accessToken: 'pk.eyJ1Ijoicmlrc3RhbSIsImEiOiI5M2U1ZTlkNDgyMWNiNWZjYzE4MTFkZTVmOTQ1NTYwNyJ9.16ObwAWWFLVeNCX_a9Dkfg'
}).addTo(map);

var circle = L.circle([61.30337, 23.797609], 500, {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5
}).addTo(map);


var marker = L.marker([61.30337, 23.797609]).addTo(map);

//springs.forEach(spring => console.log(spring.title));