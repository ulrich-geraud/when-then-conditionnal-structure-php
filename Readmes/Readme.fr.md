# Exemple d'implémentation de la structure conditionnelle When-Then

Ceci n'est qu'un exemple d'implémentation et sera bien évidemment différent dans votre contexte.

## Contexte

Imaginez que vous travaillez pour une entreprise de commerce électronique en plein essor qui vend une
large gamme de produits en ligne, notamment des vêtements, des électroniques, des produits ménagers, et
bien plus encore. L'entreprise souhaite améliorer l'expérience d'achat en ligne de ses clients en proposant
des promotions et des réductions spéciales sur certains produits.

## Défi

Le défi auquel l'entreprise est confrontée est le suivant :

* comment mettre en œuvre de manière efficace et
évolutive les règles de tarification pour appliquer des réductions ou des promotions spécifiques aux produits dans
le panier des clients ?

* De plus, comment s'assurer que ces règles sont flexibles et faciles à gérer, permettant ainsi
à l'entreprise de réagir rapidement aux besoins changeants du marché tout en maintenant une base de code propre et
maintenable ?

Dans ce scénario, nous aurons différentes règles qui s'appliquent aux articles dans le panier en fonction de certaines
conditions. Ci-dessous les différentes règles:

1 - Appliquer une réduction de 20% sur un produit en promotion avec une quantité commandé égale à 1.

2 - Appliquer une réduction de 55% sur un produit en promotion avec une quantité commandée supérieure à 5

3 - Appliquer une réduction de 80% sur un produit de type « Pents » avec une quantité commandée supérieure à 5

4 - Appliquer une réduction de 40% sur un produit de type « Shoes » avec une quantité commandée supérieure à 1


## Proposition de solution

Pour résoudre cette problématique, nous allons explorer l'utilisation du pattern "`When-Then`". Nous allons créer un
système de tarification flexible où chaque règle de tarification sera représentée par une classe distincte avec des
méthodes `when()` et `then()`. Ces règles pourront être ajoutées, modifiées ou supprimées facilement sans altérer la
logique principale du système.

Cette approche aidera l'entreprise à gérer efficacement les promotions et les réductions, et à maintenir un code propre
et maintenable pour son système e-commerce en constante évolution.

## Requirements

Pour tester ce programme, il vous faut avoir minimum PHP 8.2 et composer installé.

## Instructions

Pour exécuter ce programme, exécuter les commandes suivantes:

```
> git clone https://github.com/ulrich-geraud/when-then-conditionnal-structure-php.git
> cd when-then-conditionnal-structure-php
> composer install
> cd src/Application
> php Application.php
```

Des questions, n'hésitez pas à me contacter sur [linkedin](https://www.linkedin.com/in/ulrich-geraud-ahogla/) ou réserver
un créneau sur mon [site](https://cleancoders.fr)