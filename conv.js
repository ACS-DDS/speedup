
function check(nb){
	if (isNaN(parseInt(nb,10))) {
		console.log("Choisir un nombre");
	} else if (nb === 0) {
		console.log("zero");
		} 	else {
				var units = ["","un","deux","trois","quatre","cinq","six","sept","huit","neuf"];
				var diz = ["","","vingt","trente","quarante","cinquante","soixante","soixante-dix","quatre-vingt","quatre-vingt-dix"];
				var ten = ["dix","onze","douze","treize","quatorze","quinze","seize",diz[1]+"-"+units[7],diz[1]+"-"+units[8],diz[1]+"-"+units[9]];

				var unite = nb%10;
				var dizaine = (nb-unite)%100;
				var centaine = (nb-(dizaine+unite))%1000;

				if (dizaine/10 !==1) {
					if  (centaine/100 >1) {
						console.log(units[centaine/100]+"-cent-"+diz[dizaine/10]+"-"+units[unite]);
					}	else if (centaine/100 === 1) {
							console.log("cent-"+diz[dizaine/10]+"-"+units[unite]);
						}	else {
								console.log(diz[dizaine/10]+"-"+units[unite]);
							}
				}	else if (dizaine/10 === 1) {
						if (centaine/100 >1) {
							console.log(units[centaine/100]+"-cent-"+ten[unite]);
						}	else if (centaine/100 === 1) {
								console.log("cent-"+ten[unite]);
							}	else {
									console.log(ten[unite]);
								}
					}
			}
}