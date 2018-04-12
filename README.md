-# EduBerLycAdr

+Projecte Transversal 2 VOTA!


- Desplegament del projecte

1) Crear la base de dades

2) Clonar el projecte al teu directori web

3) Donar els permisos als directoris pel servidor web

4) Seguir els passos de la guia de desplegament a producció:
[Production Deploy] (https://symfony.com/doc/3.4/deployment.html)

5) Enrecordar-se de netejar cau: php bin/console cache:clear --no-warmup --env=prod

6) Si no en tenim, crear un fitxer .htaccess, a l'arrel del projecte, amb el següent continut:

RewriteEngine on
RewriteRule ^(.*)$ /web/$1 [L,QSA]

7) Si no tenim les taules creades, doctrine les crearé per nosaltres amb la següents comandes:

php bin/console doctrine:database:create
php bin/console doctrine:generate:entities AppBundle
php bin/console doctrine:schema:update --force

8) Entrar a la base de dades i crear la segúent vista al esquema de vota (o el nom que s'hagi creat):

CREATE VIEW vota.v_destacats AS
SELECT e.id,e.pregunta, e.data_inici, e.data_final, e.destacada, SUM(IF(r.valor=1,1,0)) AS SI, SUM(IF(r.valor=0,1,0)) AS NO
FROM enquesta e
LEFT JOIN resposta r
ON e.id=r.id_enquesta
GROUP BY e.id,e.pregunta,e.data_inici,e.data_final,e.destacada
HAVING e.destacada = 1;

