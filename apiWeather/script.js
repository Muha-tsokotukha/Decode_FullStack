let guessingCity
let api_data
let day_ 
let myChart
let curCity
let city = "Almaty"
let cities = ["Almaty", "Astana", "Karaganda", "Aktau", "Semey",
"Shymkent", "Taraz"]
draw_chart(0, city)  // рисуем граф 1го дня по умолчанию



if(  localStorage.getItem("cities")){ 
  cities = JSON.parse(localStorage.getItem("cities"))
}else {
  setStorage()
}



function guessCity(){
    guessingCity = document.getElementById("choosing-guess")
    let typing = document.getElementById("city-typing")
    let filteredCities = cities.filter(item => item.includes(typing.value))
    
    guessingCity.innerHTML = filteredCities.map((elem) => 
      `
      <div class="guessTheCity" " >${elem}</div>`
      ).join("")
    
    let elements = document.getElementsByClassName("guessTheCity");
    
    Array.from(elements).forEach(function(element) {
      element.addEventListener('click', getCity2);
    });
}



function getCity() {
  city = document.querySelector('input').value
  if( cities.includes(city) === false ){  
    cities.push(city)
    setStorage()
  }
  document.querySelector('input').value = ""
  destroyChart(0)
}

function getCity2() {
  // console.log(this)
  city = this.innerHTML
  guessingCity.innerHTML = ""
  document.querySelector('input').value = ""
  destroyChart(0)
}


function draw_chart(x, city){
    
  day_ = x
  
  axios.get(`http://api.weatherapi.com/v1/forecast.json?key=9a949dba0bdc4ec7a16113246210712&q=${city}&days=7&aqi=no&alerts=no`)
  .then(function(res) {
    let labels = [ // 8 hours 3 days
      '00:00',
      '03:00',
      '06:00',
      '09:00',
      '12:00',
      '15:00',
      '18:00',
      '21:00',
    ];
    
    
    let data = {
      labels: labels,
      datasets: [{
        label: 'Temperatures in Celcius',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
    
        data: []
      }]
    
    };


      api_data = res.data

      for(let i = 0; i < 24; i += 3){
        data.datasets[0].data.push(Math.round(api_data.forecast.forecastday[day_].hour[i].temp_c))  
      }       
      

      let config = {
        type: 'line',
        data: data,
        options: {}
      };
    
    myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

    

  })
  .catch(function(err) {
      console.log(err)
  })
}



function destroyChart(x) {  // Если пользователь выбрал день
  myChart.destroy()
  curCity = document.getElementById("choose-curCity")
  curCity.innerHTML = city
  draw_chart(x, city)
}


function setStorage(){
  localStorage.setItem("cities",JSON.stringify( cities))
}