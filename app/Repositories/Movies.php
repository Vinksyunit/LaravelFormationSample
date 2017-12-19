<?php

namespace FormationLaravel\Repositories;

class Movies {
    public $liste = [
        [
            'id' => 1,
            'title' => 'Pulp Fiction',
            'author' => [
                'firstname' => 'Quentin',
                'lastname' => 'Tarantino',
            ],
            'year' => 1994,
            'desc' => "Pulp Fiction, ou Fiction pulpeuse au Québec, est un film de gangsters américain réalisé par Quentin Tarantino et sorti en 1994. Le scénario est co-écrit par Tarantino et Roger Avary. Utilisant la technique de narration non linéaire, il entremêle plusieurs histoires ayant pour protagonistes des membres de la pègre de Los Angeles et se distingue par ses dialogues stylisés, son mélange de violence et d'humour et ses nombreuses références à la culture populaire. Sa distribution principale se compose notamment de John Travolta, dont la carrière a été relancée par ce film, Samuel L. Jackson, Bruce Willis et Uma Thurman.

            Il a été récompensé par la Palme d'or au Festival de Cannes 1994, ainsi que par l'Oscar du meilleur scénario original l'année suivante, et a été un succès aussi bien critique que commercial, établissant ainsi définitivement la réputation de Tarantino. Il est, selon le classement établi en 2007 par l'AFI, le 94e meilleur film américain de tous les temps. L'AFI le classe également à la 7e place de sa liste des meilleurs films de gangsters. En 2013, le film est sélectionné par le National Film Registry pour être conservé à la Bibliothèque du Congrès aux États-Unis pour son « importance culturelle, historique ou esthétique ».
            
            Le film revendique son artificialité et est considéré comme l'un des principaux représentants du cinéma postmoderne. Sa structure et son style non conventionnels en ont fait un film culte dont l'influence s'est ressentie sur de nombreux autres films mais aussi dans d'autres domaines culturels. Il tient son nom des pulp magazines, type de revues très populaires dans la première moitié du xxe siècle aux États-Unis et connues pour leur violence graphique et leurs dialogues incisifs."
        ],
        [
            'id' => 2,
            'title' => 'Kill Bill',
            'author' => [
                'firstname' => 'Quentin',
                'lastname' => 'Tarantino',
            ],
            'year' => 2003,
            'desc' => "Kill Bill (Tuer Bill au Québec) est un film d'action américain écrit et réalisé par Quentin Tarantino, sorti au cinéma en deux volets, respectivement en 2003 et 2004. Conçu à l'origine comme un seul film, il a été séparé en deux parties en raison de sa longueur (environ 4 heures pour les deux volets réunis). La vengeance est le thème principal de ce film, qui comporte de nombreux hommages au cinéma hongkongais d'arts martiaux, au chanbara japonais, aux films d'exploitation et au western spaghetti. L'histoire est présentée selon un style de narration non linéaire."

        ],
        [
            'id' => 3,
            'title' => 'Avatar',
            'author' => [
                'firstname' => 'James',
                'lastname' => 'Cameron',
            ],
            'year' => 2009,
            'desc' => "Avatar est un film de science-fiction américano-britannique réalisé par James Cameron, sorti en 2009.

            L’action se déroule en 21541 sur Pandora, une des lunes de Polyphème, une planète géante gazeuse en orbite autour d'Alpha Centauri A, le système solaire le plus proche de la Terre. L’exolune, recouverte d’une jungle luxuriante, est le théâtre du choc entre des humains, venus exploiter un minerai rare susceptible de résoudre la crise énergétique sur Terre, et la population autochtone, les Na’vis, qui vivent en parfaite symbiose avec leur environnement et tentent de se défendre face à l’invasion militarisée. Un programme est créé par les Terriens, le programme Avatar, qui va leur permettre de contrôler des corps Na’vi clonés associés aux gènes d'êtres humains, afin de s’insérer dans la population et de tenter de négocier avec elle. En effet, un clan Na'vi important, les Omaticaya, est installé dans un arbre-maison gigantesque situé sur un des principaux gisements de ce minerai convoité par les Terriens, l'unobtanium. Les militaires protégeant les équipes de recherche voient d'un mauvais œil le projet Avatar, beaucoup trop lent pour eux. Ils sont convaincus que la force brutale tirée de leur avance technologique leur permettrait de conquérir la planète en quelques jours. Le personnage central de l’histoire est Jake Sully, un Marine paraplégique qui, via son avatar, va devoir choisir son camp avec pour enjeu, le destin de la planète.
            
            La conception d’Avatar débute en 1994 lorsque Cameron (il avait alors 40 ans) écrit un script de 80 pages pour le film2. Le début de la réalisation devait commencer en 1997, après la sortie de Titanic3 mais, d’après Cameron, la technologie nécessaire pour réaliser son film n’était pas encore disponible4. Le travail reprend au cours de l’été 2005 et Cameron recommence à développer le script et son univers de fiction début 20065,6.
            
            Ce film est l’un des plus coûteux de toute l’histoire du cinéma, mais son succès public fulgurant lui a permis de dégager des bénéfices après seulement dix jours d’exploitation, puis de récolter plus de 2,7 milliards de dollars américains de recettes dans le monde7. Avatar était le cinquième film à passer la barre symbolique du milliard de dollars de recettes et le premier film à atteindre les 2 milliards. Il devient, après seulement six semaines d’exploitation, le plus gros succès de l’histoire du cinéma, battant Titanic, également réalisé par James Cameron."
        ],
    ];
}