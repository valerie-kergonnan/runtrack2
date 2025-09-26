SELECT salles.nom AS "biggest room", salles.capacite, etage.nom AS nom_etage FROM salles 
JOIN etage ON salles.id_etage = id_etage ORDER by salles.capacite DESC
limit 1;