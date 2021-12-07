let api_data
let day_ 
let myChart
draw_chart(0)  // рисуем граф 1го дня по умолчанию

function draw_chart(x){
  
  day_ = x
  
  axios.get('http://api.weatherapi.com/v1/forecast.json?key=9a949dba0bdc4ec7a16113246210712&q=Almaty&days=7&aqi=no&alerts=no')
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
  draw_chart(x)
}