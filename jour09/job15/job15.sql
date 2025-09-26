SELECT salle.nom AS salles, etage.nom AS etage
 FROM salles salle
LEFT JOIN etage etage ON salle.id_etage = etage.id