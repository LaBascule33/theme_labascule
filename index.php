<?php get_header();?>


<!-- HOMEPAGE -->
<!----------------------------------------------------------------------------------------------->
<!-- VIDEO PRESENTATION -->
<!------------------------------------->

<div class="container text-center justify-content-center align-self-center" style="position:absolute">
    <div class="row">
        <div class="col-md-6 text-center">
            <h2 class="text-uppercase bf">
            Un mouvement citoyen<br>au service de tous ceux<br>qui s'engagent pour<br>un futur souhaitable.
            </h2>
        </div>
        <div class="col-md-6 text-center">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-bascule.svg" alt="image placeholder"/>
        </div>
    </div>
</div>

<!--<video width="100%" height="auto" controls="controls" preload="auto" style="position:relative">
    <source src="<?php echo get_template_directory_uri(); ?>/img/Kesako_La_Bascule_Vf.mp4"/>
</video>-->


<!----------------------------------------------------------------------------------------------->
<!-- PROGRAMME D'ACTION -->
<!------------------------------------->
<div class="container">
    <div class="row">

        <div class="col-xl text-center justify-content-center align-self-center">
            <img class="prog_bascule w-75 mt-0" src="<?php echo get_template_directory_uri(); ?>/img/prog_bascule.png" alt="prog_bascule"/>
        </div>

    </div>
</div>
<!------------------------------------->
<div class="container my-5">
    <div class="row">

        <div class="col-3 card-body text-center">
            <div class="bg-white mt-0">
            <h3 class="text-uppercase text-center success">Service de<br>La Transition</h3>
            <p class="text-center mb-5 position-relative">
            Pour permettre à chacun de vivre une expérience de Transition fondatrice <br>dans un de nos lieux de bascule.
            </p>
            <button type="button" class="btn btn-success">En lire +</button>
            </div>
        </div>
<!------------------------------------->
        <div class="col-3 card-body text-center">
            <div class="bg-white mt-0">
            <h3 class="text-uppercase text-center warning">Coopération<br>& événements</h3>
            <p class="text-center mb-5 position-relative">
            Pour faciliter le passage à l’action <br>collective via du suivi, de la mise en <br>réseau et l’animation de temps fort.
            </p>
            <button type="button" class="btn btn-warning">En lire +</button>
            </div>
        </div>
<!------------------------------------->
        <div class="col-3 card-body text-center">
            <div class="bg-white mt-0">
            <h3 class="text-uppercase text-center primary">Lobbying<br>& citoyen</h3>
            <p class="text-center mb-5 position-relative">
            Pour nous donner les moyens<br>d'interpeller nos proches, nos <br>organisations et nos élus.
            </p>
            <button type="button" class="btn btn-primary">En lire +</button>
            </div>
        </div>
<!------------------------------------->
        <div class="col-3 card-body text-center">
            <div class="bg-white mt-0">
            <h3 class="text-uppercase text-center danger">Soutien aux<br>Mobilisations</h3>
            <p class="text-center mb-5 position-relative">
            Pour en faire de véritables leviers de <br>Transition à travers un appui humain,<br> logistique et de communication.
            </p>
            <button type="button" class="btn btn-danger">En lire +</button>
            </div>
        </div>

    </div>
</div>


<!----------------------------------------------------------------------------------------------->
<!-- MODAL FAQ -->
<!------------------------------------->
<div class="container my-5">
    <div class="row">

        <div class="col-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/faq/FAQ.jpg" alt="FAQ"/>
        </div>

        <div class="col-9">
        <div class="block-faq">
        <div class="row">
<!------------------------------------->
            <div class="col-md-4 mb-3">
                <button class="btn-block text-center" data-toggle="modal" data-target="#modal-faq-cquoi">
                    <span class="faq">La Bascule,<br>c'est quoi?</span>
                </button>
            </div>
<!------------------------------------->
<!---- C'est quoi ---->
<!------------------------------------->
            <div class="modal fade" id="modal-faq-cquoi" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!------------------------------------->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!------------------------------------->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <img class="img-faq" src="<?php echo get_template_directory_uri(); ?>/img/faq/Cest_Quoi.jpg" alt="CestQuoi"/>
                                    </div>
                                    <!------------------------------------->
                                    <div class="col-6">
                                        <div class="text-faq">
                                            <h1 class="heading text-center bf pt-4 pb-4">La <span class="text-uppercase">BASCULE,</span> <span class="bc">c'est quoi ?</span></h1>
                                            <p>La Bascule est un mouvement citoyen lancé en <span class="bf-under">février 2019</span>.</p>
                                            <p>Il a pour objectif, face à la <span class="bf-under">gravité  de la situation</span>, de pousser notre société vers un modèle viable et respectueux de la nature et de l'Homme.</p>
                                            <p><span class="bf-under">Fonctionnant en gouvernance partagée</span>
                                            , et constitué d'<span class="bf-under">une équipe
                                            </span> de citoyens engagés à temps plein autour desquels gravitent
                                            <span class="bf-under">de nombreux acteurs</span> des transitions écologique, sociale et démocratique, la Bascule déploie un
                                            <span class="bf-under">programme d'actions</span> ambitieux au service de l'évolution des consciences, l'amplification des solutions existantes, la protection du vivant et la réappropriation par le citoyen du pouvoir d'agir et de décider.</p>

                                            <div class="pt-4 text-center">
                                                <a href="" class="btn btn-primary">En lire +</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn-faq" data-toggle="modal" data-target="#modal-faq-qui"><span class="bf">La <span class="text-uppercase">Bascule</span>, pourquoi ?</span></button>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pictos/suivant.svg" alt="next">
                        </div>
                    </div>
                </div>
            </div>
<!------------------------------------->
<!---- C'est qui ---->
<!------------------------------------->
            <div class="col-md-4 mb-3">
                <button class="btn-block text-center" data-toggle="modal" data-target="#modal-faq-qui">
                    <span class="faq">La Bascule,<br>c'est qui ?</span>
                </button>
            </div>
<!------------------------------------->
            <div class="modal fade" id="modal-faq-qui" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!------------------------------------->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!------------------------------------->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-faq" src="<?php echo get_template_directory_uri(); ?>/img/faq/CestQui.jpg" alt="CestQui"/>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-faq">
                                            <h1 class="heading text-center bf pt-4 pb-4">La <span class="text-uppercase">BASCULE,</span> <span class="bc">c'est qui ?</span></h1>
                                            <p>Composé de plusieurs dizaines de volontaires à temps plein dans des lieux de bascule et secondés par des citoyens engagés sur leur territoire, l’équipe de La Bascule est aujourd’hui entièrement bénévole.
                                            Majoritairement portée par la jeunesse (étudiants et jeunes actifs entre 20 et 30 ans), le groupe se compose aussi d’une dizaine de volontaires plus expérimentés (entre 30 et 60 ans).
                                            L’équipe est ouverte à tous les profils, expériences et âges. Pour la rejoindre, il suffit de partager sincèrement cette détermination profonde à transformer notre 
                                            modèle de société et vouloir s’épanouir dans une posture de coopération et mise au service des solutions existantes.</p>
                                            
                                            <div class="pt-4 text-center">
                                            <a href="" class="btn btn-primary">En lire +</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------->
                                </div>
                            </div>
                        </div>
                        <!------------------------------------->
                        <div class="modal-footer">
                            <button class="btn-faq" data-toggle="modal" data-target="#modal-faq-pourquoi"><span class="bf">La <span class="text-uppercase">Bascule</span>, pourquoi ?</span></button>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pictos/suivant.svg" alt="next">
                        </div>
                        <!------------------------------------->
                    </div>
                </div>
            </div>
<!------------------------------------->
<!---- Pourquoi ---->
<!------------------------------------->
            <div class="col-md-4 mb-3">
                <button class="btn-block text-center" data-toggle="modal" data-target="#modal-faq-pourquoi">
                    <span class="faq">La Bascule,<br>pourquoi ?</span>
                </button>
            </div>
<!------------------------------------->
            <div class="modal fade" id="modal-faq-pourquoi" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!------------------------------------->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!------------------------------------->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-faq" src="<?php echo get_template_directory_uri(); ?>/img/faq/Pourquoi.jpg" alt="Pourquoi"/>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="heading text-center bf pt-4 pb-4">La <span class="text-uppercase">BASCULE,</span> <span class="bc">pourquoi ?</span></h1>
                                        <p>Parce que nous n’avons plus le choix. Parce qu’il n’est pas question de laisser le dernier mot au “business as usual” ni aux effondrements qu’il cause.
                                        Malgré les cris d’alarme des scientifiques sur les catastrophes écologiques et le soulèvement des peuples face à des mesures inéquitables et éloignées des réels enjeux,
                                        <span class="bf">l’immense majorité des entreprises et des politiques continue de nous propulser vers le ravin.</span>
                                        La Bascule naît d’une d’une <span class="bf">détermination sincère et profonde à changer de cap chez des milliers de citoyens.</span> Elle s’est formé sur les principes suivants:</p>
                                        
                                        <div class="pt-4 text-center">
                                        <a href="" class="btn btn-primary">En lire +</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------->
                        <div class="modal-footer">
                            <button class="btn-faq" data-toggle="modal" data-target="#modal-faq-quoi"><span class="bf">La <span class="text-uppercase">Bascule</span>, pour quoi ?</span></button>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pictos/suivant.svg" alt="next">
                        </div>
                        <!------------------------------------->
                    </div>
                </div>
            </div>
<!------------------------------------->
<!---- Pour quoi ---->
<!------------------------------------->
            <div class="col-md-4 mb-3">
                <button class="btn-block text-center" data-toggle="modal" data-target="#modal-faq-quoi">
                    <span class="faq">La Bascule,<br>pour quoi ?</span>
                </button>
            </div>
<!------------------------------------->
            <div class="modal fade" id="modal-faq-quoi" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!------------------------------------->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!------------------------------------->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-faq" src="<?php echo get_template_directory_uri(); ?>/img/faq/Pour_Quoi.jpg" alt="Quoi"/>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="heading text-center bf pt-4 pb-4">La <span class="text-uppercase">BASCULE,</span> <span class="bc">pour quoi ?</span></h1>
                                        <p>Pour être au service de tous ceux qui s’engagent pour un futur souhaitable.
                                        Pour réveiller et outiller le citoyen qui sommeille en chacun d’entre nous.
                                        Pour faire partie de la solution plutôt que de la dénonciation.</p>
                                        <p>La Bascule a pour ambition de <span class="bf">pousser notre société vers un modèle viable et respectueux de la nature et de l'humain.</span>
                                        Nous agissons pour:</p>
                                        
                                        <div class="pt-4 text-center">
                                        <a href="" class="btn btn-primary">En lire +</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------->
                        <div class="modal-footer">
                            <button class="btn-faq" data-toggle="modal" data-target="#modal-faq-faire"><span class="bf">La <span class="text-uppercase">Bascule</span>, comment faites-vous ?</span></button>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pictos/suivant.svg" alt="next">
                        </div>
                        <!------------------------------------->
                    </div>
                </div>
            </div>
<!------------------------------------->
<!---- Faire ---->
<!------------------------------------->
            <div class="col-md-4 mb-3">
                <button class="btn-block text-center" data-toggle="modal" data-target="#modal-faq-faire">
                    <span class="faq">Comment vous comptez faire ?</span>
                </button>
            </div>
<!------------------------------------->
            <div class="modal fade" id="modal-faq-faire" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!------------------------------------->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!------------------------------------->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-faq" src="<?php echo get_template_directory_uri(); ?>/img/prog_bascule.png" alt="prog_bascule"/>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="heading text-center bf pt-4 pb-4">La <span class="text-uppercase">BASCULE,</span> <span class="bc">comment faites-vous ?</span></h1>
                                        <p>Proposer une démarche personnelle d’engagements que chacun peut s’approprier que ce soit avec ou sans La Bascule autour de 5 types d’actions:</p>
                                        <ul class="list-style-custom">
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i><span class="bf-under">Créer :</span> des lieux de bascule</li>
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i><span class="bf-under">Faciliter:</span> l’engagement citoyen l’entraide entre porteurs de projets</li>
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i><span class="bf-under">Amplifier:</span> la pression citoyenne les solutions existantes</li>
                                        </ul>
                                        <div class="pt-4 text-center">
                                        <a href="" class="btn btn-primary">En lire +</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------->
                        <div class="modal-footer">
                            <button class="btn-faq" data-toggle="modal" data-target="#modal-faq-concretement"><span class="bf">La <span class="text-uppercase">Bascule</span>, oui mais concrètement ?</span></button>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pictos/suivant.svg" alt="next">
                        </div>
                        <!------------------------------------->
                    </div>
                </div>
            </div>
<!------------------------------------->
<!---- Concrètement ---->
<!------------------------------------->
            <div class="col-md-4 mb-3">
                <button class="btn-block text-center" data-toggle="modal" data-target="#modal-faq-concretement">
                    <span class="faq">Oui mais concrètement ?</span>
                </button>
            </div>
<!------------------------------------->
            <div class="modal fade" id="modal-faq-concretement" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!------------------------------------->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!------------------------------------->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-faq" src="<?php echo get_template_directory_uri(); ?>/img/faq/Concretement.jpg" alt="Concretement"/>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="heading text-center bf pt-4 pb-4">La <span class="text-uppercase">BASCULE,</span> <span class="bc">oui mais concrètement ?</span></h1>
                                        <p>Nous agissons au travers de 4 programmes d’actions:</p>
                                        <ul class="list-style-custom">
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i><span class="bf-under">Service de la Transition:</span> pour former une communauté apprenante sur des sujets de Transition.</li>
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i><span class="bf-under">Coopération & Evénements:</span> pour permettre aux acteurs qui le souhaitent de coopérer via un suivi au long cours.</li>
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i><span class="bf-under">Lobbying Citoyen:</span> pour donner les moyens aux citoyens de comprendre, débattre et agir sur tous les sujets de Transition qui touchent notre société.</li>
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i><span class="bf-under">Soutien aux Mobilisations:</span> pour augmenter l’impact des mobilisations qui servent la même cause que La Bascule.</li>
                                        </ul>
                                        <div class="pt-4 text-center">
                                        <a href="" class="btn btn-primary">En lire +</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------->
                        <div class="modal-footer">
                            <button class="btn-faq" data-toggle="modal" data-target="#modal-faq-moyens"><span class="bf">La <span class="text-uppercase">Bascule</span>, avec quels moyen ?</span></button>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pictos/suivant.svg" alt="next">
                        </div>
                        <!------------------------------------->
                    </div>
                </div>
            </div>
<!------------------------------------->
<!---- Moyens ---->
<!------------------------------------->
            <div class="col-md-4 mb-3">
                <button class="btn-block text-center" data-toggle="modal" data-target="#modal-faq-moyens">
                    <span class="faq">Avec quels<br>moyens ?</span>
                </button>
            </div>
<!------------------------------------->
            <div class="modal fade" id="modal-faq-moyens" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!------------------------------------->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!------------------------------------->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-faq" src="<?php echo get_template_directory_uri(); ?>/img/faq/Avec_Quels_Moyens.jpg" alt="moyens"/>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="heading text-center bf pt-4 pb-4">La <span class="text-uppercase">BASCULE,</span> <span class="bc">avec quels moyens ?</span></h1>
                                        <span class="bf-under">Tout cela est rendu possible grâce:</span>
                                        <ul class="list-style-custom">
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i> au travail bénévole d’une cinquantaine de volontaires à temps plein investis depuis des mois</li>
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i> à l’allocation d’une partie des fonds levés pour mener les projets pour couvrir les frais de fonctionnement.</li>
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i> aux dons de centaines de citoyens</li>
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i> à l’échange de service avec des maraîchers et boulangers locaux</li>
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i> à la récupération d’invendus alimentaires</li>
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i> aux dons matériels de voisins et d’organisations</li>
                                            <li><i class="arrow-right-home fas fa-arrow-right bf mr-2"></i> au mécénat de compétences de nombreuses personnes et entreprises</li>
                                        
                                        <div class="pt-4 text-center">
                                            <a href="" class="btn btn-primary">En lire +</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------->
                        <div class="modal-footer">
                            <button class="btn-faq" data-toggle="modal" data-target="#modal-faq-quand"><span class="bf">La <span class="text-uppercase">Bascule</span>, depuis quand ?</span></button>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pictos/suivant.svg" alt="next">
                        </div>
                        <!------------------------------------->
                    </div>
                </div>
            </div>
<!------------------------------------->
<!---- Quand ---->
<!------------------------------------->
            <div class="col-md-4 mb-3">
                <button class="btn-block text-center" data-toggle="modal" data-target="#modal-faq-quand">
                    <span class="faq">Depuis<br>quand ?</span>
                </button>
            </div>
<!------------------------------------->
            <div class="modal fade" id="modal-faq-quand" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!------------------------------------->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!------------------------------------->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-faq" src="<?php echo get_template_directory_uri(); ?>/img/faq/Depuis_Quand.jpg" alt="Quand"/>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="heading text-center bf pt-4 pb-4">La <span class="text-uppercase">BASCULE,</span> <span class="bc">depuis quand ?</span></h1>
                                        <p><span class="bf-under">La Bascule s’est lancé en février 2019</span> à l’initiative de Maxime de Rostolan (entrepreneur fondateur de <span class="bf-under">Blue Bees</span> et <span class="bf-under">Fermes d’Avenirs</span>) et d’une dizaine d’étudiants.
                                        Durant les 6 premiers mois nous avons vécu une phase de structuration (mise en place de notre gouvernance partagée, 
                                        accompagné par <span class="bf-under">l’Université Du Nous</span>) de montée en compétences (diagnostic des solutions existantes, outils de gestion de projets, outils de facilitation, etc) et d’expérimentations marqués notamment par l’aventure de l’<span class="bf-under">An Zéro</span>.
                                        Ce rassemblement n’a finalement pas pu avoir lieu sous son format initial (ouvert au grand public) et s’est transformée en événement de coopération regroupant une centaine d’organisations de la Transition pendant 3 jours. 
                                        </p>

                                        <div class="pt-4 text-center">
                                            <a href="" class="btn btn-primary">En lire +</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------->
                        <div class="modal-footer">
                            <button class="btn-faq" data-toggle="modal" data-target="#modal-faq-ou"><span class="bf">Ça se passe ou ?</span></button>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pictos/suivant.svg" alt="next">
                        </div>
                        <!------------------------------------->
                    </div>
                </div>
            </div>
<!------------------------------------->
<!---- Passe ou ---->
<!------------------------------------->
            <div class="col-md-4 mb-3">
                <button class="btn-block text-center" data-toggle="modal" data-target="#modal-faq-ou">
                    <span class="faq">Ça se passe<br>ou ?</span>
                </button>
            </div>
<!------------------------------------->
            <div class="modal fade" id="modal-faq-ou" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!------------------------------------->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!------------------------------------->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-faq" src="<?php echo get_template_directory_uri(); ?>/img/faq/Ile_Archipel.jpg" alt="Ou"/>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="heading text-center bf pt-4 pb-4">La <span class="text-uppercase">BASCULE,</span> <span class="bc">ça se passe ou ?</span></h1>
                                        <p>Dans sa volonté de jouer un rôle moteur dans l’amplification des solutions existantes et l’entraide entre porteurs de projets, La Bascule s’inscrit totalement dans <span class="bf">la philosophie de coopération de l’Archipel</span>, prôné par le collectif <span class="bf-under">Archipel Citoyen “Osons Les Jours Heureux”.</span>
                                        Nous coopérons avec d’autres sans pour autant être d’accord sur tout. Nous choisissons nos actions en conscience qu’il existe de nombreuses autres îles (organisations) ayant toute une histoire, des valeurs, un fonctionnement qui leurs sont propres et respectables.
                                        Et plus nous prenons part à la “vie de l’Archipel” (les projets en cours et à venir des autres), plus nous “bonifions” notre positionnement et notre singularité (autrement appelé “identité racine”) au sein de celui-ci.</p>
                                        
                                        <div class="pt-4 text-center">
                                            <a href="" class="btn btn-primary">En lire +</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------->
                        <div class="modal-footer">
                            <button class="btn-faq" data-toggle="modal" data-target="#modal-faq-cquoi"><span class="bf">La <span class="text-uppercase">Bascule</span>, c'est qui ?</span></button>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pictos/suivant.svg" alt="next">
                        </div>
                        <!------------------------------------->
                    </div>
                </div>
            </div>

        </div>
        </div>

    </div>
</div>


<!----------------------------------------------------------------------------------------------->
<!-- MOI DANS TOUT ÇA -->
<!------------------------------------->
<div class="container my-5">
        <h1 class="heading text-center bf"><span class="text-uppercase">& moi</span> dans tout ça ?</span></h1>

    <nav>
        <div class="nav nav-tabs my-5 justify-content-center text-center" id="nav-tab" role="tablist">
            <a class="px-5 mx-2 home-moi-item active" id="nav-informe-tab" data-toggle="tab" href="#nav-informe" role="tab" aria-controls="nav-informe" aria-selected="true">
                <div class="col-item mx-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tracé_1.svg" alt="tracé_1">
                    <h2 class="bf pt-4">Je <br>m'<span class="text-uppercase">Informe</span></h2>
                </div>
            </a>
            <a class="px-5 mx-2 home-moi-item" id="nav-action-tab" data-toggle="tab" href="#nav-action" role="tab" aria-controls="nav-action" aria-selected="false">
                <div class="col-item mx-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tracé_2.svg" alt="tracé_2">
                    <h2 class="bf pt-4">Je passe<br>à l'<span class="text-uppercase">Action</span></h2>
                </div>
            </a>
            <a class="px-5 mx-2 home-moi-item" id="nav-rejoins-tab" data-toggle="tab" href="#nav-rejoins" role="tab" aria-controls="nav-rejoins" aria-selected="false">
                <div class="col-item mx-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tracé_3.svg" alt="tracé_3">
                    <h2 class="bf pt-4">Je vous<br><span class="text-uppercase">Rejoins</span></h2>
                </div>
            </a>
            <a class="px-5 mx-2 home-moi-item" id="nav-soutien-tab" data-toggle="tab" href="#nav-soutien" role="tab" aria-controls="nav-soutien-tab" aria-selected="false">
                <div class="col-item mx-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tracé_4.svg" alt="tracé_4">
                    <h2 class="bf pt-4">Je vous<br><span class="text-uppercase">Soutiens</span></h2>
                </div>
            </a>
            <a class="px-5 mx-2 home-moi-item" id="nav-suis-tab" data-toggle="tab" href="#nav-suis" role="tab" aria-controls="nav-suis" aria-selected="false">
                <div class="col-item mx-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tracé_5.svg" alt="tracé_5">
                    <h2 class="bf pt-4">Je vous<br><span class="text-uppercase">Suis</span></h2>
                </div>
            </a>
            <a class="px-5 mx-2 home-moi-item" id="nav-contacte-tab" data-toggle="tab" href="#nav-contacte" role="tab" aria-controls="nav-contacte" aria-selected="false">
                <div class="col-item mx-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tracé_6.svg" alt="tracé_6">
                    <h2 class="bf pt-4">Je vous<br><span class="text-uppercase">Contacte</span></h2>
                </div>
            </a>
        </div>
    </nav>

                <!-- Content & moi dans tout ça -->
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fane show active" id="nav-informe" role="tabpanel" aria-labelledby="nav-informe-tab">
                <div class="row row-home-moi">
                    <div class="col-4">
                        <p class="text-home-moi">Avoir les bons ordres de grandeur et liens de cause à effet est crucial pour agir efficacement.</p>
                    </div>
                    <div class="col-4 px-3">
                    <div class="py-4">
                        <div class="row m-auto">
                            <img class="img-home-moi m-1" src="<?php echo get_template_directory_uri(); ?>/img/png/imago2.png" alt="imago">
                            <img class="img-home-moi m-1" src="<?php echo get_template_directory_uri(); ?>/img/png/sidh2.png" alt="sidh">
                        </div>
                        <div class="row m-auto">
                            <img class="img-home-moi m-1" src="<?php echo get_template_directory_uri(); ?>/img/png/climat2.png" alt="climat">
                            <img class="img-home-moi m-1" src="<?php echo get_template_directory_uri(); ?>/img/png/osons2.png" alt="osons">
                        </div>
                    </div>
                    </div>
                    <div class="col-4">
                        <ul class="list-style-custom list-home-moi my-4">
                            <li class=" py-2"><i class="arrow-right-home fas fa-arrow-right bc mr-2"></i>" Le rapport du GIEC décrypter "</br> <span class="bf pl-4">CPLC</span> </li>
                            <li class=" py-2"><i class="arrow-right-home fas fa-arrow-right bc mr-2"></i>" Effondrement : seul scénario réaliste ? "</br> <span class="bf pl-4">Arthur Keller</span> </li>
                            <li class=" py-2"><i class="arrow-right-home fas fa-arrow-right bc mr-2"></i>" Le MOOC Energie & Climat "</br> <span class="bf pl-4">Avenir Climatique</span> </li>
                            <li class=" py-2"><i class="arrow-right-home fas fa-arrow-right bc mr-2"></i>" CO2 ou PIB il faut choisir "</br> <span class="bf pl-4">Jean-Marc Jancovici</span> </li>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="tab-pane fane" id="nav-action" role="tabpanel" aria-labelledby="nav-action-tab">
        
        </div>
        <div class="tab-pane fane" id="nav-rejoins" role="tabpanel" aria-labelledby="nav-rejoins-tab">
                <div class="row row-home-moi position-relative row-tab-rejoindre">
                    <div class="tab-rejoindre">
                        <p>"Nous sommes ceux que nous attendions."</p>
                        <p>La Bascule est un mouvement citoyen qui n’attend que toi pour grandir. Pour s’y investir, il suffit de partager sincèrement cette détermination à changer de cap.</p>
                        <a href="" class="btn btn-primary">Nous rejoindre</a>
                    </div>
                </div>
        </div>
        <div class="tab-pane fane" id="nav-soutien" role="tabpanel" aria-labelledby="nav-soutien-tab">
            <div class="row row-home-moi">
                <div class="col-6">
                    <p class="p-tab-soutien-left"><span class="bf pb-2">Faire un don</span></br> pour contribuer à l'indépendance financière du mouvement</p>
                </div>
                <div class="col-6">
                    <p class="p-tab-soutien-left"><span class="bf pb-2">Mettre un lieu à disposition</span></br>pour contribuer à grandir la communauté</p>
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                    <p class="p-tab-soutien-right"><span class="bf pb-2">Offrir ses compétences</span></br>pour contribuer à la qualité des actions</p>
                </div>
                <div class="col-6">
                    <p class="p-tab-soutien-right"><span class="bf pb-2">Relayer des actions</span></br>pour contribuer à leur diffusion au plus grand nombre</p>
                </div>
            </div>
        </div>
        <div class="tab-pane fane" id="nav-suis" role="tabpanel" aria-labelledby="nav-suis-tab">
            <div class="row row-home-moi">
                <div class="col-4">
                    <div class="tab-suivre text-center">
                        <h1>Réseaux sociaux</h1>
                        <div class="mt-5"><i class="fleche-tab-suivre fas fa-arrow-down bf"></i></div>
                        <ul class="nav justify-content-center mt-4">
                            <li><a href=""><img class="img-tab-suivre" src="<?php echo get_template_directory_uri(); ?>/img/pictos/twitter.svg" alt=""></a></li>
                            <li class="ml-3"><a href=""><img class="img-tab-suivre" src="<?php echo get_template_directory_uri(); ?>/img/pictos/facebook.svg" alt=""></a></li>
                            <li class="ml-3"><a href=""><img class="img-tab-suivre" src="<?php echo get_template_directory_uri(); ?>/img/pictos/instagram.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-suivre text-center">
                        <h1>Inscription Newsletter</h1>
                        <form class="form-inline" action="">
                            <div class="form-groupe">
                                <input type="email" class="form-control" id="" placeholder="votre email">
                                <button type="submit" class="btn btn-succes mb-2">Ok</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fane" id="nav-contacte" role="tabpanel" aria-labelledby="nav-contacte-tab">
            <div class="row row-home-moi">
                <div class="col-6">
                    <h4><span class="bf">Pour les organisations</span></br>ecosystem@la-bascule.org</h4>
                </div>
                <div class="col-6">
                    <h4><span class="bf">Pour les citoyens</span></br>richesses.humaine@la-bascule.org</h4>
                </div>
            </div>
        </div>
    </div>
</div>


<!----------------------------------------------------------------------------------------------->
<!-- UNE PASERELLE -->
<!------------------------------------->
<div class="container my-5">
        <h1 class="heading text-uppercase text-center bf">Une Paserelle</h1>
            <h1 class="heading text-center bf">vers des solutions existantes</h1>


        <div class="row my-5">
            <div class="col-md-4">
                <div class="card mb-3" style="max-height: 8rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/plan.png" class="card-img" alt="plan"  style="max-height: 8rem;">
                    <div class="card-img-overlay">
                        <h4 class="bf">Le lieu</h4>
                        <p>avec lequel te connecter</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3" style="max-height: 8rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/action.png" class="align-self-end" alt="action"  style="max-height: 8rem;">
                    <div class="card-img-overlay">
                        <h4 class="bf">L'action</h4>
                        <p>qui te convient</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3"  style="max-height: 8rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/carto.png" class="card-img" alt="carto" style="max-height: 8rem;">
                    <div class="card-img-overlay">
                        <h4 class="bf">La communauté</h4>
                        <a href=""></a><i class="fas fa-download"></i> <span>Cartographie de la transition</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3" style="max-height: 8rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pacte.png" class="card-img" alt="pacte" style="max-height: 8rem;">
                    <div class="card-img-overlay">
                        <h4 class="bf">L'engagement'</h4>
                        <p>pour les municipales 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3" style="max-height: 8rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/plan.png" class="card-img" alt="plan"  style="max-height: 8rem;">
                    <div class="card-img-overlay">
                        <h4 class="bf">Nos coups de coeurs</h4>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>








<?php get_footer();?>