var cout1 = document.getElementsByClassName('cout1');
var cout3 = document.getElementsByClassName('cout3');
var cout2 = document.getElementsByClassName('cout2');
var coutJour = document.getElementsByClassName('coutJour');
var coutEtape = document.getElementsByClassName('coutEtape');
var cumul = document.getElementsByClassName('cumulDepense');
var nbTransport = document.getElementsByClassName('nbTransport');
var nbEtape = document.getElementsByClassName('nbEtape');
var etape = document.getElementsByClassName('etape');
var testCumul = 0;
var tempsCumul1 = 0;
var convertionTemps = 0;
var tempsEtape = document.getElementsByClassName('tempsEtape');
var tempsCumul = document.getElementsByClassName('tempsCumul');
var image = document.getElementsByClassName('imgTransport');



for (var i = 0; i < cumul.length; i++)
{

    if (tempsEtape[i].classList.contains('jour'))
    {
        var TestTemps = tempsEtape[i].value * 24
        cout2[i].value = parseInt(coutJour[i].value) * parseInt(tempsEtape[i].value)       
    }

    else if (tempsEtape[i].classList.contains('heure'))
    {
        tempsCumul[i].style.color = 'green'
        var TestTemps = tempsEtape[i].value 
        cout2[i].value = parseInt(coutJour[i].value) * ( parseInt(tempsEtape[i].value) / 24 )
    }

    cout2[i].value = (parseInt(cout2[i].value)).toFixed(0)
    cout2[i].innerHTML = cout2[i].value

    tempsCumul[i].value = parseInt(TestTemps) + tempsCumul1
    tempsCumul[i].innerHTML = (parseInt(tempsCumul[i].value) / 24).toFixed(1)
    
    var tempsCumul1 = parseInt(TestTemps) + parseInt(tempsCumul1)

    coutEtape[i].value = parseInt(cout1[i].value) + parseInt(cout2[i].value)  + parseInt(cout3[i].value)  
    coutEtape[i].innerHTML = parseInt(coutEtape[i].value)   
    
    cumul[i].value = parseInt(coutEtape[i].value) + testCumul
    cumul[i].innerHTML = parseInt(cumul[i].value)


    var testCumul = parseInt(coutEtape[i].value) + parseInt(testCumul)  

}


    for (var i = 0;  i< nbTransport.length; i++)
    {
    nbTransport[i].innerHTML = 1 + i 
    }



    for (var i = 0;  i< nbEtape.length; i++)
    {
    nbEtape[i].innerHTML = 1 + i 
    }
    


    for (var i = 0; i < image.length; i++)
    {
        image[i].onclick = () => { 

           
            console.log("click");
            image.style.width='200px' ;
            

            
          }

    }




    