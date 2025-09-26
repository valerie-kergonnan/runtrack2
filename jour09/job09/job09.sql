select *
from etudiants
WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR);