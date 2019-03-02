<?php

use Faker\Generator as Faker;

use Illuminate\Support\Arr;

$factory->define(App\Movie::class, function (Faker $faker) {
    // Liste des films
    $a_movies = [
        'Baby Driver',
        'Apocalypse Now',
        'The Thing',
        'Django Unchained',
        'John Wick 2',
        'Kill Bill',
        'Pulp Fiction',
        'The dark knight',
        'Le Roi Lion',
        'Fight Club'
    ];
    // Liste des descriptions
    $a_descriptions = [
        'Baby Driver' => "Chauffeur pour des braqueurs de banque, Baby a un truc pour être le meilleur dans sa partie : il roule au rythme de sa propre playlist. Lorsqu’il rencontre la fille de ses rêves, Baby cherche à mettre fin à ses activités criminelles pour revenir dans le droit chemin. Mais il est forcé de travailler pour un grand patron du crime et le braquage tourne mal… Désormais, sa liberté, son avenir avec la fille qu’il aime et sa vie sont en jeu.",
        'Apocalypse Now' => "Cloîtré dans une chambre d'hôtel de Saïgon, le jeune capitaine Willard, mal rasé et imbibé d'alcool, est sorti de sa prostration par une convocation de l'état-major américain. Le général Corman lui confie une mission qui doit rester secrète : éliminer le colonel Kurtz, un militaire aux méthodes quelque peu expéditives et qui sévit au-delà de la frontière cambodgienne.",
        'The Thing' => "Hiver 1982 au cœur de l’Antarctique. Une équipe de chercheurs composée de 12 hommes, découvre un corps enfoui sous la neige depuis plus de 100 000 ans. Décongelée, la créature retourne à la vie en prenant la forme de celui qu’elle veut ; dès lors, le soupçon s’installe entre les hommes de l’équipe. Où se cache la créature ? Qui habite-t-elle ? Un véritable combat s’engage.",
        'Django Unchained' => "Dans le sud des États-Unis, deux ans avant la guerre de Sécession, le Dr King Schultz, un chasseur de primes allemand, fait l’acquisition de Django, un esclave qui peut l’aider à traquer les frères Brittle, les meurtriers qu’il recherche. Schultz promet à Django de lui rendre sa liberté lorsqu’il aura capturé les Brittle – morts ou vifs.",
        'John Wick 2' => "John Wick est forcé de sortir de sa retraite volontaire par un de ses ex-associés qui cherche à prendre le contrôle d’une mystérieuse confrérie de tueurs internationaux. Parce qu’il est lié à cet homme par un serment, John se rend à Rome, où il va devoir affronter certains des tueurs les plus dangereux du monde.",
        'Kill Bill' => "Au cours d'une cérémonie de mariage en plein désert, un commando fait irruption dans la chapelle et tire sur les convives. Laissée pour morte, la Mariée enceinte retrouve ses esprits après un coma de quatre ans.",
        'Pulp Fiction' => "L'odyssée sanglante et burlesque de petits malfrats dans la jungle de Hollywood à travers trois histoires qui s'entremêlent.",
        'The dark knight' => "Dans ce nouveau volet, Batman augmente les mises dans sa guerre contre le crime. Avec l'appui du lieutenant de police Jim Gordon et du procureur de Gotham, Harvey Dent, Batman vise à éradiquer le crime organisé qui pullule dans la ville. Leur association est très efficace mais elle sera bientôt bouleversée par le chaos déclenché par un criminel extraordinaire que les citoyens de Gotham connaissent sous le nom de Joker.",
        'Le Roi Lion' => "Sur les Hautes terres d’Afrique règne un lion tout-puissant, le roi Mufasa, que tous les hôtes de la jungle respectent et admirent pour sa sagesse et sa générosité. Son jeune fils Simba sait qu’un jour il lui succèdera, conformément aux lois universelles du cycle de la vie, mais il est loin de deviner les épreuves et les sacrifices que lui imposera l’exercice du pouvoir. Espiègle, naïf et turbulent, le lionceau passe le plus clair de son temps à jouer avec sa petite copine Nala et à taquiner Zazu, son digne précepteur. ",
        'Fight Club' => "Le narrateur, sans identité précise, vit seul, travaille seul, dort seul, mange seul ses plateaux-repas pour une personne comme beaucoup d'autres personnes seules qui connaissent la misère humaine, morale et sexuelle. C'est pourquoi il va devenir membre du Fight club, un lieu clandestin ou il va pouvoir retrouver sa virilité, l'échange et la communication. Ce club est dirigé par Tyler Durden, une sorte d'anarchiste entre gourou et philosophe qui prêche l'amour de son prochain."
    ];
    // ID de l'élément
    static $i_id = 1;
    // Nom du film
    $s_movie = $a_movies[$i_id-1];
    // Donnée à génerer
    return [
        'movie_id'          => $i_id++,
        'movie_title'       => $s_movie,
        'movie_year'        => rand(1950, (int)date('Y')+1),
        'movie_time'        => rand(70, 250),
        'movie_description' => $a_descriptions[$s_movie]
    ];
});
