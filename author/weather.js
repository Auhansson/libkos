const weatherBlock = document.querySelector('#weather');
let templates = [];

async function loadWeather(e) {
    const server = "http://api.weatherapi.com/v1/forecast.json?key=2bc9ca29f34446e9adc211524230705&q=07112&days=7";

    try {
        const response = await fetch(server, {
          method: 'GET',
          timeout: 5000
        });
      
        if (!response.ok) {
          throw new Error('Network response was not ok');
        } 
      
        const responseResult = await response.json();
        getWeather(responseResult);
    
      } catch (error) {
        console.error('There was a problem fetching the data:', error.message);
        if (error.name === 'AbortError') {
            console.log('Request aborted');
          } else if (error.name === 'TimeoutError') {
            console.log('Request timed out');
          } else {
            console.log('Request failed', error);
          }
      }
}


function plotWeather(time, weatherStatus, weatherIcon, condition, temp){
    const template = `
    <div>
        <div >
            <div >${time}</div>
            <br>
            <div >${weatherStatus}</div>
        </div>
            <div >
                <img src='${weatherIcon}'" />                
            </div>
        <div >${temp} km/h</div>
        <div >${condition} °C</div>
        <br>
        <hr>
        <br>
    <div />
    `
    templates.push(template);

}


function getWeather(data){
    console.log(data)
    
    const nameCity = data.location.name; 
    const nameState = data.location.region;
    const t = `<div><b>${nameCity}, ${nameState}<hr><br></b></div>`
    templates.push(t);

    for(var i=0; i<3; i ++){
        const time = data.forecast.forecastday[i].date;
        const temp = Math.round(data.forecast.forecastday[i].day.avgtemp_c);
        const condition = data.forecast.forecastday[i].day.condition.text;
        const weatherStatus = Math.round(data.forecast.forecastday[i].day.avgvis_km);
        const weatherIcon = data.forecast.forecastday[i].day.condition.icon;

        plotWeather(time, condition, weatherIcon, temp, weatherStatus)
    }

    let template = templates.join('');
    weatherBlock.innerHTML = template;


}


if (weatherBlock){
    loadWeather();
}



