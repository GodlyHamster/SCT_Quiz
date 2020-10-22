let activate1 = document.getElementById("activate1");
let activate2 = document.getElementById("activate2");
let activate3 = document.getElementById("activate3");
activate1.addEventListener("click", getWeather1);
activate2.addEventListener("click", getWeather2);
activate3.addEventListener("click", getWeather3);
let result = document.getElementById('result');

// weather API http://weerlive.nl/delen.php
let apiAddress = "http://weerlive.nl/api/json-data-10min.php?key=";
let key = "demo";
let locatie = "&locatie=";
let geoLocation = "Amsterdam";
let url = apiAdress + ley + locatie + geoLocation;

function getWeather1() {
  console.log(url);
  makeAjaxCall(url, "GET"). then (showWeather1, errorHandler);
}
function showWeather1(JSONresponseFromAjax){
  result.innerHTML = JSONresponseFromAjax;
}

function getWeather2(){
  makeAjaxCall(url, "GET"). then (showWeather, errorHandler);
}
function showWeather2(JSONresponseFromAjax){
  let weatherObject = JSON.parse(JSONresponseFromAjax);
  let completeData = "";
  for (const [key, value] of Object.entries(weatherObject.liveweer[0])){
    console.log(`${key}: ${value}`);
    completeData += key + " : " + value + "<br>";
    result.innerHTML = completeData;
  }
}
