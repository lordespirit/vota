-# EduBerLycAdr

+Projecte Transversal 2

- Integrants del Grup

. Bernat Parpal
. Adrian Caballero
. Eduard vallès
. Amier Lycka

- Objectiu 'breu' del projecte

La idea principal del projecte es crear una aplicaciÃ³ web, per a poder crear enquestes, i consultar-ne els resultats


- Estat 'breu' del projecte

Projecte finalitzat, només caldria corretgit detalls si fes falta.


- Full de seguiment

 https://docs.google.com/spreadsheets/d/1VswRGfCBAyCkW9mf2ca3mgHj2WNFR3WaATODLr1xiD0/edit?usp=sharing

 
 
- Adreça web de la documentació phpdoc (labs.iam.cat)

Pendent

+


- Adreça web del projecte desplegat (labs.iam.cat)

[Enllaç al projecte desplegat a producció](http://a15eduvalcal.tk/ "Vota! Website")




- Carpeta pels css, img, i js

#JS#

/web/template/freelancer/vendor/ajax

#CSS#

/web/template/freelancer/css

#img#

/web/bundles/app/img

Excepte fons que es troba al CSS



- Enllaç al moqup del projecte

. https://app.moqups.com/a15berparart@iam.cat/BOrxRCOyLe/view


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

