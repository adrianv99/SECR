var ctx= document.getElementById("polarChart").getContext("2d");
var polarChart= new Chart(ctx,{
    type:"polarArea",
    data:{
        labels:['col1','col2','col3','col4','col2','col3','col4'],
        datasets:[{
                label:'Num datos',
                data:[23,91,125,233,122,44,67],
                backgroundColor:[
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(229, 89, 50,0.5)'
                ]
        }]
    },
    options:{
        scales:{
            yAxes:[{
                    ticks:{
                        beginAtZero:true
                    }
            }]
        }
    }
});