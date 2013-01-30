EmilyBoutik
===========

Site vitrine de bijoux


Code Utile
===========
php app/console doctrine:generate:entities emily --no-backup
php app/console doctrine:schema:create
php app/console doctrine:schema:update --force
php app/console doctrine:fixtures:load --fixtures="src\emily\BoutikBundle\DataFixtures"
php app/console cache:clear