import React from 'react'
import { storiesOf } from '@storybook/react'
import { withDocsCustom } from '.storybook/utils/readme'
import { makeStory } from '.storybook/utils/story'

import ELineChart from 'elements/chart/examples/line.html'
import EAreaChart from 'elements/chart/examples/area.html'
import EBarChart from 'elements/chart/examples/bar.html'
import EBarHorizontalChart from 'elements/chart/examples/bar-horizontal.html'
import EDonutChart from 'elements/chart/examples/donut.html'
import EPieChart from 'elements/chart/examples/pie.html'
import ERadarChart from 'elements/chart/examples/radar.html'
import EMixedChart from 'elements/chart/examples/mixed.html'
import EBubbleChart from 'elements/chart/examples/bubble.html'

import baseDocs from './README.md'
import lineDocs from './line.md'
import barDocs from './bar.md'
import horizontalBarDocs from './barHorizontal.md'
import areaDocs from './area.md'
import donutDocs from './donut.md'
import pieDocs from './pie.md'
import radarDocs from './radar.md'
import bubbleDocs from './bubble.md'
import mixedDocs from './mixed.md'

storiesOf('Components/Chart', module)
  .addDecorator(withDocsCustom(baseDocs))
  .add('Base', () => (
    <div>
      <div className="row">
        <div className="col-md-4 mb-3">
          <div className="card">
            <div className="card-body">
              <h6 className="card-title">Line Chart</h6>
              {makeStory(ELineChart, () => {
                new Chart(document.getElementById("line-chart"), {
                  type: 'line',
                  data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu'],
                    datasets: [
                      {
                        label: 'Line',
                        borderColor: 'rgba(87, 228, 198, 0.8)',
                        backgroundColor: 'transparent',
                        data: [3, 12, 3, 12]
                      }
                    ]
                  },
                  options: {
                    maintainAspectRatio: false,
                    scales: {
                      yAxes: [
                        {
                          ticks: {
                            beginAtZero: true
                          }
                        }
                      ],
                    },
                  }
                })
              })()}
            </div>
          </div>
        </div>
        <div className="col-md-4 mb-3">
          <div className="card">
            <div className="card-body">
              <h6 className="card-title">Bar Chart</h6>
              {makeStory(EBarChart, () => {
                new Chart(document.getElementById("bar-chart"), {
                  type: 'bar',
                  data: {
                    labels: ['Mon', 'Tue', 'Wed'],
                    datasets: [
                      {
                        label: 'Bar',
                        backgroundColor: 'rgba(87, 228, 198, 0.8)',
                        borderColor: '#ffffff',
                        data: [7, 10, 13]
                      }
                    ]
                  },
                  options: {
                    maintainAspectRatio: false,
                    scales: {
                      yAxes: [
                        {
                          ticks: {
                            beginAtZero: true
                          }
                        }
                      ],
                      xAxes: [
                        {
                          categoryPercentage: 0.6,
                          barPercentage: 0.4,
                        }
                      ]
                    },
                  }
                })
              })()}
            </div>
          </div>
        </div>
        <div className="col-md-4 mb-3">
          <div className="card">
          <div className="card-body">
            <h6 className="card-title">Donut Chart</h6>
            {makeStory(EDonutChart, () => {
              const donut = new Chart(document.getElementById("donut-chart"), {
                type: 'doughnut',
                data: {
                  labels: ['Mon', 'Tue', 'Wed'],
                  datasets: [
                    {
                      label: 'Donut',
                      backgroundColor: [
                        'rgba(255, 146, 139, 0.8)',
                        'rgba(87, 228, 198, 0.8)',
                        'rgba(60, 145, 218, 0.7)'
                      ],
                      hoverBorderColor: '#fff',
                      data: [5, 10, 8]
                    }
                  ]
                },
                options: {
                  maintainAspectRatio: false,
                  legend: {
                    position: 'bottom',
                    labels: {
                      usePointStyle: true,
                      padding: 20
                    }
                  }
                }
              })
              donut.canvas.parentNode.style.height = '180px';
            })()}
          </div>
          </div>
        </div>
      </div>
      <div className="row">
        <div className="col-md-4 mb-3">
          <div className="card">
            <div className="card-body">
              <h6 className="card-title">Pie Chart</h6>
              {makeStory(EPieChart, () => {
                new Chart(document.getElementById("pie-chart"), {
                  type: 'pie',
                  data: {
                    labels: ['Mon', 'Tue', 'Wed'],
                    datasets: [
                      {
                        label: 'Pie',
                        backgroundColor: [
                          'rgba(255, 146, 139, 0.8)',
                          'rgba(87, 228, 198, 0.8)',
                          'rgba(60, 145, 218, 0.7)'
                        ],
                        hoverBorderColor: '#fff',
                        data: [5, 10, 8]
                      }
                    ]
                  },
                  options: {
                    maintainAspectRatio: false,
                    legend: {
                      position: 'bottom',
                      labels: {
                        usePointStyle: true,
                        padding: 20
                      }
                    }
                  }
                })
              })()}
            </div>
          </div>
        </div>
        <div className="col-md-4 mb-3">
          <div className="card">
            <div className="card-body">
              <h6 className="card-title">Radar Chart</h6>
              {makeStory(ERadarChart, () => {
                new Chart(document.getElementById("radar-chart"), {
                  type: 'radar',
                  data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                    datasets: [
                      {
                        label: 'Radar',
                        borderColor: 'rgba(87, 228, 198, 0.8)',
                        backgroundColor: 'rgba(87, 228, 198, 0.5)',
                        data: [12.5, 12.5, 12.5, 12.5, 12.5, 12.5]
                      }
                    ]
                  },
                  options: {
                    maintainAspectRatio: false,
                    legend: {
                      display: false
                    },
                    scale: {
                      ticks: {
                        beginAtZero: true
                      }
                    }
                  }
                })
              })()}
            </div>
          </div>
        </div>
        <div className="col-md-4 mb-3">
          <div className="card">
            <div className="card-body">
              <h6 className="card-title">Horizontal Bar</h6>
              {makeStory(EBarHorizontalChart, () => {
                new Chart(document.getElementById("bar-horizontal-chart"), {
                  type: 'horizontalBar',
                  data: {
                    labels: ['Mon', 'Tue', 'Wed'],
                    datasets: [
                      {
                        label: 'Horizontal Bar',
                        backgroundColor: 'rgba(87, 228, 198, 0.8)',
                        borderColor: '#ffffff',
                        data: [13, 9, 5]
                      }
                    ]
                  },
                  options: {
                    maintainAspectRatio: false,
                    scales: {
                      xAxes: [
                        {
                          ticks: {
                            beginAtZero: true
                          }
                        }
                      ],
                      yAxes: [
                        {
                          categoryPercentage: 0.6,
                          barPercentage: 0.4,
                        }
                      ]
                    },
                  }
                })
              })()}
            </div>
          </div>
        </div>
      </div>
      <div className="row">
        <div className="col-md-4">
          <div className="card">
            <div className="card-body">
              <h6 className="card-title">Mixed Chart</h6>
              {makeStory(EMixedChart, () => {
                new Chart(document.getElementById("mixed-chart"), {
                  type: 'bar',
                  data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu'],
                    datasets: [
                      {
                        type: 'line',
                        label: 'Line',
                        borderColor: 'rgba(255, 146, 139, 0.8)',
                        backgroundColor: 'transparent',
                        data: [3, 12, 3, 12]
                      },
                      {
                        type: 'bar',
                        label: 'Bar',
                        backgroundColor: 'rgba(87, 228, 198, 0.8)',
                        borderColor: '#ffffff',
                        data: [11, 8, 13, 6]
                      }
                    ]
                  },
                  options: {
                    maintainAspectRatio: false,
                    scales: {
                      yAxes: [
                        {
                          ticks: {
                            beginAtZero: true
                          }
                        }
                      ],
                      xAxes: [
                        {
                          categoryPercentage: 0.6,
                          barPercentage: 0.4,
                        }
                      ]
                    },
                  }
                })
              })()}
            </div>
          </div>
        </div>
        <div className="col-md-4">
          <div className="card">
            <div className="card-body">
              <h6 className="card-title">Area Chart</h6>
              {makeStory(EAreaChart, () => {
                new Chart(document.getElementById("area-chart"), {
                  type: 'line',
                  data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu'],
                    datasets: [
                      {
                        label: 'Area',
                        borderColor: '#ffffff',
                        borderWidth: 2,
                        backgroundColor: 'rgba(87, 228, 198, 0.6)',
                        pointRadius: 3,
                        data: [3, 12, 3, 12]
                      },
                    ]
                  },
                  options: {
                    maintainAspectRatio: false,
                    scales: {
                      yAxes: [
                        {
                          ticks: {
                            beginAtZero: true
                          }
                        }
                      ],
                    },
                  }
                })
              })()}
            </div>
          </div>
        </div>
        <div className="col-md-4">
          <div className="card">
            <div className="card-body">
              <h6 className="card-title">Bubble Chart</h6>
              {makeStory(EBubbleChart, () => {
                new Chart(document.getElementById("bubble-chart"), {
                  type: 'bubble',
                  data: {
                    datasets: [
                      {
                        label: 'Bubble',
                        backgroundColor: 'rgba(87, 228, 198, 0.8)',
                        borderColor: '#ffffff',
                        data: [
                          { x: 3, y: 6, r: 5 },
                          { x: 8, y: 4, r: 10 },
                          { x: 4, y: 8, r: 3 },
                          { x: 1, y: 5, r: 8 },
                          { x: 2, y: 1, r: 12 },
                          { x: 5, y: 3, r: 6 },
                          { x: 3, y: 3, r: 5 },
                          { x: 6, y: 6, r: 7 },
                        ]
                      }
                    ]
                  },
                  options: {
                    maintainAspectRatio: false,
                    scales: {
                      yAxes: [
                        {
                          ticks: {
                            beginAtZero: true
                          }
                        }
                      ],
                      xAxes: [
                        {
                          ticks: {
                            beginAtZero: true
                          }
                        }
                      ]
                    },
                  }
                })
              })()}
            </div>
          </div>
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Chart', module)
  .addDecorator(withDocsCustom(lineDocs))
  .add('Line', () => (
    <div className="row">
      <div className="col-md-4">
        <div className="card p-3">
          {makeStory(ELineChart, () => {
            new Chart(document.getElementById("line-chart"), {
              type: 'line',
              data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu'],
                datasets: [
                  {
                    label: 'Line',
                    borderColor: 'rgba(87, 228, 198, 0.8)',
                    backgroundColor: 'transparent',
                    data: [3, 12, 3, 12]
                  }
                ]
              },
              options: {
                maintainAspectRatio: false,
                scales: {
                  yAxes: [
                    {
                      ticks: {
                        beginAtZero: true
                      }
                    }
                  ],
                },
              }
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Chart', module)
  .addDecorator(withDocsCustom(areaDocs))
  .add('Area', () => (
    <div className="row">
      <div className="col-md-4">
        <div className="card p-3">
          {makeStory(EAreaChart, () => {
            new Chart(document.getElementById("area-chart"), {
              type: 'line',
              data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu'],
                datasets: [
                  {
                    label: 'Area',
                    borderColor: '#ffffff',
                    borderWidth: 2,
                    backgroundColor: 'rgba(87, 228, 198, 0.6)',
                    pointRadius: 3,
                    data: [3, 12, 3, 12]
                  },
                ]
              },
              options: {
                maintainAspectRatio: false,
                scales: {
                  yAxes: [
                    {
                      ticks: {
                        beginAtZero: true
                      }
                    }
                  ],
                },
              }
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Chart', module)
  .addDecorator(withDocsCustom(barDocs))
  .add('Bar', () => (
    <div className="row">
      <div className="col-md-4">
        <div className="card p-3">
          {makeStory(EBarChart, () => {
            new Chart(document.getElementById("bar-chart"), {
              type: 'bar',
              data: {
                labels: ['Mon', 'Tue', 'Wed'],
                datasets: [
                  {
                    label: 'Bar',
                    backgroundColor: 'rgba(87, 228, 198, 0.8)',
                    borderColor: '#ffffff',
                    data: [7, 10, 13]
                  }
                ]
              },
              options: {
                maintainAspectRatio: false,
                scales: {
                  yAxes: [
                    {
                      ticks: {
                        beginAtZero: true
                      }
                    }
                  ],
                  xAxes: [
                    {
                      categoryPercentage: 0.6,
                      barPercentage: 0.4,
                    }
                  ]
                },
              }
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Chart', module)
  .addDecorator(withDocsCustom(horizontalBarDocs))
  .add('Horizontal Bar', () => (
    <div className="row">
      <div className="col-md-4">
        <div className="card p-3">
          {makeStory(EBarHorizontalChart, () => {
            new Chart(document.getElementById("bar-horizontal-chart"), {
              type: 'horizontalBar',
              data: {
                labels: ['Mon', 'Tue', 'Wed'],
                datasets: [
                  {
                    label: 'Horizontal Bar',
                    backgroundColor: 'rgba(87, 228, 198, 0.8)',
                    borderColor: '#ffffff',
                    data: [13, 9, 5]
                  }
                ]
              },
              options: {
                maintainAspectRatio: false,
                scales: {
                  xAxes: [
                    {
                      ticks: {
                        beginAtZero: true
                      }
                    }
                  ],
                  yAxes: [
                    {
                      categoryPercentage: 0.6,
                      barPercentage: 0.4,
                    }
                  ]
                },
              }
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Chart', module)
  .addDecorator(withDocsCustom(donutDocs))
  .add('Donut', () => (
    <div className="row">
      <div className="col-md-4">
        <div className="card p-3">
          {makeStory(EDonutChart, () => {
            const donut = new Chart(document.getElementById("donut-chart"), {
              type: 'doughnut',
              data: {
                labels: ['Mon', 'Tue', 'Wed'],
                datasets: [
                  {
                    label: 'Donut',
                    backgroundColor: [
                      'rgba(255, 146, 139, 0.8)',
                      'rgba(87, 228, 198, 0.8)',
                      'rgba(60, 145, 218, 0.7)'
                    ],
                    hoverBorderColor: '#fff',
                    data: [5, 10, 8]
                  }
                ]
              },
              options: {
                maintainAspectRatio: false,
                legend: {
                  position: 'bottom',
                  labels: {
                    usePointStyle: true,
                    padding: 20
                  }
                }
              }
            })
            donut.canvas.parentNode.style.height = '180px';
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Chart', module)
  .addDecorator(withDocsCustom(pieDocs))
  .add('Pie', () => (
    <div className="row">
      <div className="col-md-4">
        <div className="card p-3">
          {makeStory(EPieChart, () => {
            new Chart(document.getElementById("pie-chart"), {
              type: 'pie',
              data: {
                labels: ['Mon', 'Tue', 'Wed'],
                datasets: [
                  {
                    label: 'Pie',
                    backgroundColor: [
                      'rgba(255, 146, 139, 0.8)',
                      'rgba(87, 228, 198, 0.8)',
                      'rgba(60, 145, 218, 0.7)'
                    ],
                    hoverBorderColor: '#fff',
                    data: [5, 10, 8]
                  }
                ]
              },
              options: {
                maintainAspectRatio: false,
                legend: {
                  position: 'bottom',
                  labels: {
                    usePointStyle: true,
                    padding: 20
                  }
                }
              }
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Chart', module)
  .addDecorator(withDocsCustom(radarDocs))
  .add('Radar', () => (
    <div className="row">
      <div className="col-md-4">
        <div className="card p-3">
          {makeStory(ERadarChart, () => {
            new Chart(document.getElementById("radar-chart"), {
              type: 'radar',
              data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                datasets: [
                  {
                    label: 'Radar',
                    borderColor: 'rgba(87, 228, 198, 0.8)',
                    backgroundColor: 'rgba(87, 228, 198, 0.5)',
                    data: [12.5, 12.5, 12.5, 12.5, 12.5, 12.5]
                  }
                ]
              },
              options: {
                maintainAspectRatio: false,
                legend: {
                  display: false
                },
                scale: {
                  ticks: {
                    beginAtZero: true
                  }
                }
              }
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Chart', module)
  .addDecorator(withDocsCustom(bubbleDocs))
  .add('Bubble', () => (
    <div className="row">
      <div className="col-md-4">
        <div className="card p-3">
          {makeStory(EBubbleChart, () => {
            new Chart(document.getElementById("bubble-chart"), {
              type: 'bubble',
              data: {
                datasets: [
                  {
                    label: 'Bubble',
                    backgroundColor: 'rgba(87, 228, 198, 0.8)',
                    borderColor: '#ffffff',
                    data: [
                      { x: 3, y: 6, r: 5 },
                      { x: 8, y: 4, r: 10 },
                      { x: 4, y: 8, r: 3 },
                      { x: 1, y: 5, r: 8 },
                      { x: 2, y: 1, r: 12 },
                      { x: 5, y: 3, r: 6 },
                      { x: 3, y: 3, r: 5 },
                      { x: 6, y: 6, r: 7 },
                    ]
                  }
                ]
              },
              options: {
                maintainAspectRatio: false,
                scales: {
                  yAxes: [
                    {
                      ticks: {
                        beginAtZero: true
                      }
                    }
                  ],
                  xAxes: [
                    {
                      ticks: {
                        beginAtZero: true
                      }
                    }
                  ]
                },
              }
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Chart', module)
  .addDecorator(withDocsCustom(mixedDocs))
  .add('Mixed', () => (
    <div className="row">
      <div className="col-md-4">
        <div className="card p-3">
          {makeStory(EMixedChart, () => {
            new Chart(document.getElementById("mixed-chart"), {
              type: 'bar',
              data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu'],
                datasets: [
                  {
                    type: 'line',
                    label: 'Line',
                    borderColor: 'rgba(255, 146, 139, 0.8)',
                    backgroundColor: 'transparent',
                    data: [3, 12, 3, 12]
                  },
                  {
                    type: 'bar',
                    label: 'Bar',
                    backgroundColor: 'rgba(87, 228, 198, 0.8)',
                    borderColor: '#ffffff',
                    data: [11, 8, 13, 6]
                  }
                ]
              },
              options: {
                maintainAspectRatio: false,
                scales: {
                  yAxes: [
                    {
                      ticks: {
                        beginAtZero: true
                      }
                    }
                  ],
                  xAxes: [
                    {
                      categoryPercentage: 0.6,
                      barPercentage: 0.4,
                    }
                  ]
                },
              }
            })
          })()}
        </div>
      </div>
    </div>
  ))
