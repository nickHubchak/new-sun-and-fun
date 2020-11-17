/* globals Chart:false, feather:false */

(function ()
{
  'use strict'

  feather.replace()

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx,
    {
    type: 'line',
    data:
    {
      labels:
      [
        'Fulilled Orders',
        'Unfulfilled Orders',
        'Pending Orders',
        'Return Requests',
        'Total Transactions'
      ],
      datasets:
      [
        {
        data:
        [
          30,
          0,
          30,
          20,
          50,
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }
    ]
    },
    options:
    {
      scales:
      {
        yAxes:
        [
        {
          ticks:
          {
            beginAtZero: false
          }
        }
        ]
      },
      legend:
      {
        display: false
      }
    }
  }
)
}
)
()
