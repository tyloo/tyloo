<?php

return [

    'by'               => 'Par',
    'name'             => 'Nom',
    'email'            => 'Email',
    'password'         => 'Mot de passe',
    'password-confirm' => 'Confirmez',
    'message'          => 'Message',
    'information'      => 'Information',
    'phone'            => 'Tel',
    'btn-submit'       => 'Envoyer',
    'btn-read-more'    => 'Lire la suite',
    'all'              => 'Tout',

    'menu' => [
        'home'    => 'Accueil',
        'resume'  => 'CV',
        'works'   => 'Projets',
        'blog'    => 'Blog',
        'contact' => 'Contact',
    ],

    'auth' => [
        'login-page-title'     => 'Authentification',
        'login-title'          => 'Authentifiez-vous pour démarrer votre session',
        'remember-me'          => 'Se rappeler de moi',
        'btn-sign-in'          => 'Authentifier',
        'forgot-password'      => "J'ai perdu mon mot de passe !",
        'profile'              => 'Profil',
        'welcome'              => 'Bienvenue, :user_name !',
        'reset-password-title' => 'Récuppérer mon mot de passe',
    ],

    'emails' => [
        'contact'  => [
            'contact-message'    => 'Demande de contact',
            'contact-heading'    => 'Bonjour Maître,',
            'contact-info-text'  => 'Un formulaire de contact a été renseigné sur le site <a href=":website_url">:website_url</a> !',
            'here-are-the-infos' => 'Voici les informations :',
            'bottom-message'     => 'Cordialement,<br>BB8',
        ],
        'password' => [
            'password-reset'    => 'Réinitialisation de votre mot de passe',
            'password-heading'  => 'Bonjour,',
            'password-content1' => 'Vous avez demandé à réinitialiser votre mot de passe, et parce que je suis bon, je vais vous en fournir un nouveau !',
            'password-content2' => 'Voici le lien pour pouvoir générer un nouveau mot de passe : :reset_url',
            'bottom-message'    => 'Cordialement,<br>BB8',
        ],
    ],

    'errors' => [
        '404'        => 'Quatre Cent Quatre !',
        '503'        => 'En maintenance.',
        'formErrors' => [
            'heading'      => '<strong>Whoops!</strong> Houston, nous avons un problème !',
            'fix-mistakes' => 'Veuillez corriger ces erreurs :',
        ],
    ],

    'backend' => [

    ],

    'frontend' => [
        'contact' => [
            'page-title'       => 'Contactez-moi !',
            'breadcrumb-title' => 'Contact',
            'form-heading'     => 'Mettons-nous en contact !',
            'form-text'        => "Veuillez remplir ce formulaire afin d'entrer en contact avec moi. Je vais essayer de vous répondre le plus rapidement possible !",
            'confirmMailSent'  => '<strong>Votre demande a bien été reçue !</strong><p>Votre demande a bien été reçue. Je vais essayer de vous répondre le plus rapidement possible !<br>Merci ;)</p>',
        ],
        'home'    => [
            'carousel'      => [
                1 => [
                    'title'   => 'Passionné &  Flexible',
                    'content' => "Vous ne l'avez peut-être pas encore vu, mais j'adore mon métier ! En effet, j'ai toujours voulu travailler dans l'informatique et j'ai commencé à apprendre les ficelles du code depuis ma tendre enfance. Depuis cette révélation, j'essaie de m'adapter aux nouvelles tendances et techniques...",
                    'link'    => 'Consultez mon CV pour en savoir plus',
                ],
                2 => [
                    'title'   => 'Fan de Laravel',
                    'content' => "Durant mes études, j'ai découvert ce Framework PHP et je dois bien l'avouer : ÇA DÉCHIRE !<br>Pour faire court, cette boîte à outils vous permet de créer des sites web et des applications ultra rapidement ! Plus important et je pense que c'est une bonne fonctionnalité : vous codez comme vous parlez et c'est très intuitif ! ;)",
                    'link'    => 'Consultez mon Blog pour en savoir plus',
                ],
                3 => [
                    'title'   => 'Aimer partager',
                    'content' => "J'ai toujours voulu être professeur un moment dans ma vie. Pour être franc, si vous êtes capable d'enseigner, vous pouvez valider le fait que vous maîtrisez entièrement votre sujet. Plus généralement, avec la puissance d'Internent, si vous vous trompez dans votre explication, les Gardiens du web (des trolls en quelque sorte) vont vous ridiculiser et vous serez forcé de changer votre jugement. Finalement, vous commencerez à vous corriger et donc à vous améliorer...",
                ],
            ],
            'three-reasons' => [
                1 => [
                    'title'   => 'Tout pour le  Code.',
                    'content' => "Quand j'étais petit, je voulais travailler dans l'informatique. C'est pourquoi je suis devenu ingénieur et développeur Web !",
                ],
                2 => [
                    'title'   => "Ne jamais cesser d'apprendre.",
                    'content' => "Malgrès le fait d'avoir terminé mes études depuis plusieurs années, je continue d'en apprendre tous les jours. Je suis le genre de personne à aimer découvrir les nouvelles technologies et techniques.",
                ],
                3 => [
                    'title'   => 'Le Rugby est ma passion.',
                    'content' => "J'ai commencé le Rugby il y a 3 ans. Depuis ce jour, j'ai commencé à penser comme une équipe et non pour moi-même. Cette capacité m'aide énormémnt dans ma vie professionnelle et en particularité dans ma relation avec mes collègues.",
                ],
            ],
            'about-me'      => [
                'title' => 'A propos de moi',
                'link'  => 'Vous voulez en savoir plus ? Consultez mon CV',
                1       => [
                    'title'   => 'Hisser haut le drapeau PHP !',
                    'content' => "<p>Depuis que je suis enfant (j'ai commencé les \"trucs de Geek\" à 14 ans en fait), je développe des applications en PHP.</p>
                                  <p>Ceci étant dit, j'ai pu voir l'évolution de ce langage depuis la version 4. A l'époque (et parce que j'étais débutant), rien n'étant très structué pour moi. Vous n'aviez pas tout l'echosystème de Framework et je dois l'admettre, c'était très compliqué...</p>
                                  <p>De nos jours, avec des outils comme Laravel, Carbon, PHPUnit et d'autres, c'est devenu une suite solide et vous n'entendez plus beaucoup des phrases comme : \"Aucun gros site web ne tourne sur PHP. C'est un fait. Fin de la discussion. (insérer une Trollface ici)\"</p>",
                ],
                2       => [
                    'title'   => 'Préparez vous. Laravel arrive !',
                    'content' => '<p>Récemment (en fait, depuis déjà 2 ans), j\'ai découvert le Framework Laravel et je suis tombé amoureux ! En effet, ce Framework basé sur Symfony et d\'autres librairies utiles est prévu pour une utilisation "simple" et vous permet de développer et de déployer des projets très rapidement et proprement !</p>
                                  <p>Si vous consultez mon <a href=":blog_url">Blog</a>, vous pourrez y trouver des astuces, idées et autres articles liés à Laravel... N\'hésitez pas à les lire et à me faire des retours ;)</p>',
                ],
                3       => [
                    'title'   => "Coder n'est pas une finalité en soit.",
                    'content' => "<p>Bon, maintenant arrive la partie sympa, du moins je l'espère. Comme vous pouvez vous l'imaginer, je ne suis pas un robot et je n'ai pas que des activités de Geek dans ma vie !</p>
                                  <p>En effet, j'adore sortir avec mes amis (je vis à Paris, la meilleure ville au monde ! N'est-ce pas ? :)), joue au Rugby (parce que je me déchaîne sur le terrain...), regarde beaucoup de séries et d'autres choses sympa !</p>",
                ],
            ],
            'recent-work'   => [
                'title'         => 'Projets récents',
                'no-work-found' => "Il n'y a aucun Projet en base de données.",
            ],
            'customers'     => [
                'title'             => 'Clients',
                'no-customer-found' => "Il n'y a aucun Client en base de données.",
            ],
        ],
        'resume'  => [
            'page-title'       => 'Mon CV',
            'breadcrumb-title' => 'CV',
            'work-experience'  => [
                'title' => 'Espérience professionnelle',
                1       => [
                    'job-title' => "Ingénieur d'étude @ <strong>CarvingLabs</strong>",
                    'dates'     => "Septembre 2015 - Aujourd'hui",
                    'details'   => '<ul class="list-arrow-color no-margin">
                                        <li>Développement d\'applications web sur le Framework Laravel.</li>
                                        <li>Création de librairies et packages Open Source.</li>
                                    </ul>',
                ],
                2       => [
                    'job-title' => 'Google Deployment Specialist @ <strong>NRX</strong>',
                    'dates'     => 'Octobre 2012 - Septembre 2015',
                    'details'   => '<ul class="list-arrow-color no-margin">
                                        <li>Développement d\'applications web sur le Framework Laravel, Symfony 2 et Zend Framework 3.</li>
                                        <li>Développement d\'applications natives en Java.</li>
                                        <li>Obtention des certifications Google suivantes :
                                            <ul class="list-arrow-color no-margin">
                                                <li>Google Deployment Specialist (Google Search Appliance)</li>
                                                <li>Google Apps 100</li>
                                                <li>Google Cloud Platform 300</li>
                                            </ul>
                                        </li>
                                        <li>Déploiement de projets Google Search Appliance (GSA) pour différents clients.</li>
                                        <li>Recherche & Développement de solutions liées à Google for Work.</li>
                                        <li>Création de librairies dynamiques en PHP pour pouvoir administrer et monitorer une GSA.</li>
                                    </ul>',
                ],
                3       => [
                    'job-title' => 'Developpeur Web & Mobile @ <strong>Lemonway</strong>',
                    'dates'     => 'Septembre 2011 - Septembre 2012',
                    'details'   => '<ul class="list-arrow-color no-margin">
                                        <li>Développement du site web de l\'entreprise.</li>
                                        <li>Développement du site web modible de l\'entreprise.</li>
                                        <li>Développement d\'applications iPhone et Android pour différents clients.</li>
                                    </ul>',
                ],
                4       => [
                    'job-title' => 'Administrateur Réseaux @ <strong>Autoscout24 France</strong>',
                    'dates'     => 'Janvier 2010 - Août 2011',
                    'details'   => '<ul class="list-arrow-color no-margin">
                                        <li>Administration de logiciels d\'interfaçage pour des clients.</li>
                                        <li>Gestion du parc informatique de l\'entreprise.</li>
                                        <li>Assistance auprès de la clientèle.</li>
                                        <li>Développement d\'outils en PHP afin d\'automatiser certaines tâches.</li>
                                    </ul>',
                ],
                5       => [
                    'job-title' => 'Développeur Web @ <strong>Call Assurances</strong>',
                    'dates'     => 'Septembre 2008 - Décembre 2009',
                    'details'   => '<ul class="list-arrow-color no-margin">
                                        <li>Développement et refonte complète du site web de l\'entreprise.</li>
                                        <li>Création d\'outils et de techniques permettant d\'améliorer le référencement naturel de l\'entreprise.</li>
                                    </ul>',
                ],
            ],
            'education'        => [
                'title' => 'Formation',
                1       => [
                    'title' => 'Master Web & e-Business @ <strong>ESGI</strong>',
                    'dates' => '2012 - 2014',
                ],
                2       => [
                    'title' => 'Bachelor Web & Mobile @ <strong>ECTEI</strong>',
                    'dates' => '2011 - 2012',
                ],
                3       => [
                    'title' => 'BTS Administrateur Réseaux @ <strong>ISEFAC Paris</strong>',
                    'dates' => '2008 - August 2010',
                ],
            ],
            'skills'           => [
                'title' => 'Compétences techniques',
                1       => [
                    'label' => 'PHP',
                    'level' => 'Expert',
                ],
                2       => [
                    'label' => 'Laravel',
                    'level' => 'Expert',
                ],
                3       => [
                    'label' => 'Symfony 2',
                    'level' => "J'y travaille",
                ],
                4       => [
                    'label' => 'Mobile (iOS &amp; Android)',
                    'level' => "J'ai fait des choses sympa !",
                ],
                5       => [
                    'label' => 'HTML &amp; CSS (Bootstrap et autres outils)',
                    'level' => 'Expert',
                ],
                6       => [
                    'label' => 'Versioning (Git) et méthode Agile',
                    'level' => 'On commence à être au point...',
                ],
                7       => [
                    'label' => 'Design',
                    'level' => 'Licornes et arcs-en-ciel !',
                ],
            ],
        ],
        'blog'    => [
            'index' => [
                'page-title'       => 'Blog',
                'breadcrumb-title' => 'Blog',
                'no-post-found'    => "Il n'y a aucun Billet en base de données.",
            ],
            'show'  => [
                'page-title'       => 'Blog',
                'breadcrumb-title' => 'Blog',
            ],
            'tag'   => [
                'page-title'       => 'Blog - Tous les billets comportant le tag ":tag_name"',
                'breadcrumb-title' => 'Blog',
                'no-post-found'    => "Il n'y a aucun Billet en base de données.",
            ],
        ],
        'works'   => [
            'index' => [
                'page-title'       => 'Projets réalisés',
                'breadcrumb-title' => 'Projets',
                'no-work-found'    => "Il n'y a aucun Projet en base de données.",
            ],
            'show'  => [
                'page-title'       => 'Projets réalisés',
                'breadcrumb-title' => 'Projets',
                'recent-work'      => 'Projets récents',
            ],
            'tag'   => [
                'page-title'       => 'Projets réalisés - Tous les projets comportant le tag ":tag_name"',
                'breadcrumb-title' => 'Projets',
                'no-work-found'    => "Il n'y a aucun Projet en base de données.",
            ],
        ],
    ],
    'blocks'   => [
        'blog'   => [
            'sidebar'    => [
                'title' => 'Le laboratoire',
                'text'  => "Dans cette section, je vais essayer de vous partager des sujets intéressants, des outils et techniques que j'ai appris. Je pense qu'il est important de partager mes connaissances avec vous et j'espèreque ça vous sera utile. J'ai eu la chance de trouver des gens comme moi auparavant, prenant du temps et de la patience pour m'apprendre des choses. Je pense donc que c'est à mon tout d'en faire de même ;)",
            ],
            'last-posts' => [
                'title'         => 'Derniers billets',
                'no-post-found' => "Il n'y a aucun Billet en base de données.",
            ],
            'tags'       => [
                'title' => 'Tags',
            ],
        ],
        'common' => [
            'about'      => [
                'title' => 'A propos',
                'text'  => "Je m'appelle Julien 'Tyloo' Bonvarlet et je suis un ingénieur spécialisé en développement Web. Je travaille principalement sur des applications PHP et en particulier sur le Framework Laravel.",
                'link'  => 'Vous voulez en savoir plus ?',
            ],
            'contact'    => [
                'title' => 'Entrer en contact !',
            ],
            'copyright'  => 'Copyright &copy; 1988-:this_year (et ça continue...) <strong>Julien \'Tyloo\' Bonvarlet</strong>. Tous droits réservés. Site web réalisé avec <i class="fa fa-heart"></i> (et du café...) en Laravel et beaucoup de magie noire.',
            'last-posts' => [
                'title'         => 'Depuis le Blog',
                'no-post-found' => "Il n'y a aucun Billet en base de données.",
            ],
            'social'     => [
                'title' => 'Réseaux sociaux',
            ],
        ],
    ],

];
