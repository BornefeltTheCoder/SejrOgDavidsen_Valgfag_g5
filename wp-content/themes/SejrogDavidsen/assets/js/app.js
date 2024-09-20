// filter
// choose cat or dog
function selectAnimal(animal) {
  // get classes for filter buttons kat and hund by id
  const dogBtn = document.getElementById('dogBtn');
  const catBtn = document.getElementById('catBtn');

  // if dog selected add active to dog, remove active from cat
  if (animal === 'dog') {
    dogBtn.classList.add('active');
    catBtn.classList.remove('active');
    // opposite, if cat then not dog :) 
  } else if (animal === 'cat') {
    catBtn.classList.add('active');
    dogBtn.classList.remove('active');
  }
}

// gem api nøgle i const for sikkerhedsskyld
const apiKey = 'AIzaSyCk5V1VPE9pnXjh1Z5pPm2kHveTvK_HPsw';

// define source url
src = "https://maps.googleapis.com/maps/api/js?key=" + apiKey + "&callback=initMap"

// definer funktion for at kalde senere
function loadGoogleMapsScript() {
  // opret script element
  const script = document.createElement('script');
  // angiver script source url
  script.src = "https://maps.googleapis.com/maps/api/js?key=" + apiKey + "&callback=initMap";
  // lav scriptet asynkront
  script.async = true;
  // sørg for at det først udførers når hele html dokumentet er loadet
  script.defer = true;
  // sæt script element til body element som et child element
  document.body.appendChild(script);
}

// definer funktion med instruktioner til hvordan map skal laves og vises
function initMap() {
  // skab map object og DOM element med id map, der skal vises med hjælp af google api
  var map = new google.maps.Map(document.getElementById('map'), {
    // lokation i form af koordinater til map center
    center: { lat: 57.124940, lng: 10.024012 },
    // definer default zoom niveau
    zoom: 13
  });
}

// kald funktionen til at loade map
loadGoogleMapsScript();