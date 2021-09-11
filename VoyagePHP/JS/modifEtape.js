<<<<<<< HEAD
const ville2 = document.getElementById("ville2");
const typeTransport = document.getElementById("typeTransport");
const coutBillet = document.getElementById("coutBillet");
const activitee = document.getElementById("activitee");
const visa = document.getElementById("visa");
const detailBillet = document.getElementById("detailBillet");
const transport = document.getElementById("transport");
const ville1 = document.getElementById("ville1");
const duree = document.getElementById("duree");
const coutPays = document.getElementById("coutPays");
const pays = document.getElementById("pays");
const detailEtape = document.getElementById("detailEtape");
const modifier = document.getElementById("MiseAJour");
const iconeFleche = document.getElementById("iconeTrajet");


  
transport.onclick = () => transportForm();
ville.onclick = () => villeForm();


	if (document.getElementById("transport").checked == true)
	{
		transportForm();
	}

    if (document.getElementById("ville").checked == true)
	{
		villeForm();
	}


    function transportForm()
    {
        ville2.style.display = 'flex'
        typeTransport.style.display = 'flex'
        coutBillet.style.display = 'flex'
        visa.style.display = 'flex'
        detailBillet.style.display = 'flex'
        ville1.style.display = 'flex'
        duree.style.display = 'flex'
        coutPays.style.display = 'flex'
        pays.style.display = 'flex'
        detailEtape.style.display = 'flex'
        ajouter.style.display = 'flex'
        iconeFleche.style.display = 'flex'
        activitee.style.display = 'none'

    }


    function villeForm()
    {
        activitee.style.display = 'flex'
        ville2.style.display = 'none'
        typeTransport.style.display = 'none'
        coutBillet.style.display = 'none'
        visa.style.display = 'none'
        detailBillet.style.display = 'none'
        iconeFleche.style.display = 'none'
        ville1.style.display = 'flex'
        duree.style.display = 'flex'
        coutPays.style.display = 'flex'
        pays.style.display = 'flex'
        detailEtape.style.display = 'flex'
        modifier.style.display = 'flex'
    }

    
=======

var bouttonModif = document.getElementsByClassName('bouttonModif');
var ville1 = document.getElementsByClassName('ville1');
var TEST = document.getElementById('TEST');




bouttonModif.onclick = () => depart();

function depart()
{

    TEST.innerHTML = ville1.value 
    console.log(TEST)
    
}





  

    



>>>>>>> 92177550351f31c403cefbaf44f314f07cdb4905
