<?php 
/**
 * Template name: homepage
 *  
 * 
 */
?>

<!---------------------------------------------------------------------------->
<!-- HOMEPAGE -->
<!------------------------------------->
<!-- Hero Block -->
<!---------------------------------------------------------------------------->
<div class="container bg-dark text-center justify-content-center align-self-center" style="position:absolute">
<!---------------------------------------------------------------------------->
    <div class="row">
        <!------------------------------------->
        <div class="col-md-6 text-center">
            <h1 class="text-uppercase bf">
            Un mouvement citoyen<br/>au service de tous ceux<br/>qui s'engagent pour<br/>un futur souhaitable.
            </h1>
        </div>
        <!------------------------------------->
        <div class="col-md-6 text-center">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-bascule.svg" alt="logo"/>
        </div>
        <!------------------------------------->
    </div>
    <!------------------------------------->
</div>
<!------------------------------------->
<video width="100%" height="auto" controls="controls" preload="auto" style="position:relative">
    <source src="https://www.youtube.com/embed/f9RVZTDy7tQ"/>
</video>
<!------------------------------------->

<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/f9RVZTDy7tQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

<!---------------------------------------------------------------------------->
<!-- Programmes d'actions -->
<!------------------------------------->
<div class="container">
    <div class="row">
        <!------------------------------------->
        <div class="col-xl text-center justify-content-center align-self-center">
            <img class="prog_bascule w-75 mt-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/prog_bascule.png" alt="prog_bascule"/>
        </div>
        <!------------------------------------->
    </div>
</div>
<!------------------------------------->
<div class="container my-5">
    <div class="row">
    <!------------------------------------->
        <div class="col-3 border-right card-body text-center">
            <div class="bg-white mt-0">
                <h3 class="text-uppercase text-center success">Service de<br />La Transition</h3>
                <p class="text-center mb-5 position-relative">Pour permettre à chacun de vivre une expérience de Transition fondatrice <br />dans un de nos lieux de bascule.</p>
                <button type="button" class="btn btn-success">En lire +</button>
            </div>
        </div>
        <!------------------------------------->
        <div class="col-3 border-right card-body text-center">
            <div class="bg-white mt-0">
                <h3 class="text-uppercase text-center warning">Coopération<br />& événements</h3>
                <p class="text-center mb-5 position-relative">Pour faciliter le passage à l’action <br />collective via du suivi, de la mise en <br />réseau et l’animation de temps fort.</p>
                <button type="button" class="btn btn-warning">En lire +</button>
            </div>
        </div>
        <!------------------------------------->
        <div class="col-3 border-right card-body text-center">
            <div class="bg-white mt-0">
                <h3 class="text-uppercase text-center primary">Lobbying<br />& citoyen</h3>
                <p class="text-center mb-5 position-relative">Pour nous donner les moyens<br />d'interpeller nos proches, nos <br />organisations et nos élus.</p>
                <button type="button" class="btn btn-primary">En lire +</button>
            </div>
        </div>
        <!------------------------------------->
        <div class="col-3 border-right card-body text-center">
            <div class="bg-white mt-0">
                <h3 class="text-uppercase text-center danger">Soutien aux<br />Mobilisations</h3>
                <p class="text-center mb-5 position-relative">Pour en faire de véritables leviers de <br />Transition à travers un appui humain,<br /> logistique et de communication.</p>
                <button type="button" class="btn btn-danger">En lire +</button>
            </div>
        </div>
    <!------------------------------------->
    </div>
</div>
<!---------------------------------------------------------------------------->
<!-- Modal FAQ -->
<!------------------------------------->
<div id="section-faq">
    <div class="container my-5">
        <div class="row">
            <!------------------------------------->
            <div class="col-md-3">
                <img class="block-img-faq" src="<?php echo get_template_directory_uri(); ?>/assets/img/faq/FAQ.jpg" alt="FAQ"/>
            </div>
            <!------------------------------------->
            <div class="col-md-9">
                <div class="block-faq">
                    <div class="row">
                        <!------------------------------------->
                        <div class="col-md-4 mb-3">
                            <a href="#carousel" class="faq btn-block text-center js-modal">
                                La Bascule,<br /><span class="FAQsize1" href="#carousel">c'est quoi ?</span>
                            </a>
                        </div>
                        <!------------------------------------->
                        <div class="col-md-4 mb-3">
                            <a href="#carousel" class="faq btn-block text-center js-modal">
                                La Bascule,<br /><span class="FAQsize1" href="#carousel">c'est qui ?</span>
                            </a>
                        </div>
                        <!------------------------------------->
                        <div class="col-md-4 mb-3">
                            <a href="#carousel" class="faq btn-block text-center js-modal">
                                La Bascule,<br /><span class="FAQsize1" href="#carousel">pourquoi ?</span>
                            </a>
                        </div>
                        <!------------------------------------->
                        <div class="col-md-4 mb-3">
                            <a href="#carousel" class="faq btn-block text-center js-modal">
                                La Bascule,<br /><span class="FAQsize1" href="#carousel">pour quoi ?</span>
                            </a>
                        </div>
                        <!------------------------------------->
                        <div class="col-md-4 mb-3">
                            <a href="#carousel" class="faq btn-block text-center js-modal">
                                <span class="FAQsize2" href="#carousel">Comment vous comptez faire ?</span>
                            </a>
                        </div>
                        <!------------------------------------->
                        <div class="col-md-4 mb-3">
                            <a href="#carousel" class="faq btn-block text-center js-modal">
                                <span class="FAQsize2" href="#carousel">Oui mais concrètement ?</span>
                            </a>
                        </div>
                        <!------------------------------------->
                        <div class="col-md-4 mb-3">
                            <a href="#carousel" class="faq btn-block text-center js-modal">
                                <span class="FAQsize2" href="#carousel">Avec quels<br />moyens ?</span>
                            </a>
                        </div>
                        <!------------------------------------->
                        <div class="col-md-4 mb-3">
                            <a href="#carousel" class="faq btn-block text-center js-modal">
                                <span class="FAQsize2" href="#carousel">Depuis<br />quand ?</span>
                            </a>
                        </div>
                        <!------------------------------------->
                        <div class="col-md-4 mb-3">
                            <a href="#carousel" class="faq btn-block text-center js-modal">
                                <span class="FAQsize2" href="#carousel">Ça se passe<br />ou ?</span>
                            </a>
                        </div>
                        <!------------------------------------->
                    </div>
                </div>
            </div>
            <!------------------------------------->
            <?php // include 'inc/modal-faq.php' ?>
            <?php get_template_part('inc/modal-faq.php'); ?>
            <!------------------------------------->
        </div>
    </div>
</div>
</div>
</div>
<!---------------------------------------------------------------------------->
<!-- Moi dans tout ça -->
<!------------------------------------->
<div id="section-etmoi"> 
    <div class="container my-5">
    <h1 class="text-center bf"><span class="text-uppercase">& moi</span> dans tout ça ?</span></h1>
    <!------------------------------------->
    <nav class="nav-home-moi">
        <div class="nav nav-tabs my-5 text-center" id="nav-tab" role="tablist">
            <!------------------------------------->
            <a class="px-5 mx-2 home-moi-item active" id="nav-informe-tab" data-toggle="tab" href="#nav-informe" role="tab" aria-controls="nav-informe" aria-selected="true">
                <div class="col-item mx-5">
                    <img class="pad-l-50" src="<?php echo get_template_directory_uri(); ?>/assets/img/traces/trace_1.svg" alt="trace_1">
                    <h3 class="bf pt-4">Je <br />m'<span class="text-uppercase">Informe</span></h3>
                </div>
            </a>
            <!------------------------------------->
            <a class="px-5 mx-2 home-moi-item" id="nav-action-tab" data-toggle="tab" href="#nav-action" role="tab" aria-controls="nav-action" aria-selected="false">
                <div class="col-item mx-5">
                    <img class="pad-l-40" src="<?php echo get_template_directory_uri(); ?>/assets/img/traces/trace_2.svg" alt="trace_2">
                    <h3 class="bf pt-4">Je passe<br />à l'<span class="text-uppercase">Action</span></h3>
                </div>
            </a>
            <!------------------------------------->
            <a class="px-5 mx-2 home-moi-item" id="nav-rejoins-tab" data-toggle="tab" href="#nav-rejoins" role="tab" aria-controls="nav-rejoins" aria-selected="false">
                <div class="col-item mx-5">
                    <img class="pad-l-30" src="<?php echo get_template_directory_uri(); ?>/assets/img/traces/trace_3.svg" alt="trace_3">
                    <h3 class="bf pt-4">Je vous<br /><span class="text-uppercase">Rejoins</span></h3>
                </div>
            </a>
            <!------------------------------------->
            <a class="px-5 mx-2 home-moi-item" id="nav-soutien-tab" data-toggle="tab" href="#nav-soutien" role="tab" aria-controls="nav-soutien-tab" aria-selected="false">
                <div class="col-item mx-5">
                    <img class="pad-l-20" src="<?php echo get_template_directory_uri(); ?>/assets/img/traces/trace_4.svg" alt="trace_4">
                    <h3 class="bf pt-4">Je vous<br /><span class="text-uppercase">Soutiens</span></h3>
                </div>
            </a>
            <!------------------------------------->
            <a class="px-5 mx-2 home-moi-item" id="nav-suis-tab" data-toggle="tab" href="#nav-suis" role="tab" aria-controls="nav-suis" aria-selected="false">
                <div class="col-item mx-5">
                    <img class="pad-l-10" src="<?php echo get_template_directory_uri(); ?>/assets/img/traces/trace_5.svg" alt="trace_5">
                    <h3 class="bf pt-4">Je vous<br /><span class="text-uppercase">Suis</span></h3>
                </div>
            </a>
            <!------------------------------------->
            <a class="px-5 mx-2 home-moi-item" id="nav-contacte-tab" data-toggle="tab" href="#nav-contacte" role="tab" aria-controls="nav-contacte" aria-selected="false">
                <div class="col-item mx-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/traces/trace_6.svg" alt="trace_6">
                    <h3 class="bf pt-4">Je vous<br /><span class="text-uppercase">Contacte</span></h3>
                </div>
            </a>
            <!------------------------------------->
        </div>
    </nav>
    <!------------------------------------->
    <?php //include 'inc/contenu-home-moi.php' ?>
    <?php get_template_part('inc/contenu-home-moi.php'); ?>
    <!------------------------------------->
    </div>
</div>
<!---------------------------------------------------------------------------->
<!-- Une paserelle-->
<!------------------------------------->
<div class="container my-5">
    <h1 class="text-center bf">Une <span class="text-uppercase">passerelle</span> vers des solutions existantes</h1>
        <!------------------------------------->
        <div class="row my-5">
            <!------------------------------------->
            <div class="col-md-4">
                <div class="card mb-3" style="max-height: 8rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan.png" class="card-img" alt="plan"  style="max-height: 8rem;">
                    <div class="card-img-overlay">
                        <h4 class="bf">Le lieu</h4>
                        <p>avec lequel te connecter</p>
                    </div>
                </div>
            </div>
            <!------------------------------------->
            <div class="col-md-4">
                <div class="card mb-3" style="max-height: 8rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/action.png" class="align-self-end" alt="action"  style="max-height: 8rem;">
                    <div class="card-img-overlay">
                        <h4 class="bf">L'action</h4>
                        <p>qui te convient</p>
                    </div>
                </div>
            </div>
            <!------------------------------------->
            <div class="col-md-4">
                <div class="card mb-3"  style="max-height: 8rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carto.png" class="card-img" alt="carto" style="max-height: 8rem;">
                    <div class="card-img-overlay">
                        <h4 class="bf">La communauté</h4>
                        <a href=""></a><i class="fas fa-download"></i> <span>Cartographie de la transition</span></a>
                    </div>
                </div>
            </div>
            <!------------------------------------->
            <div class="col-md-4">
                <div class="card mb-3" style="max-height: 8rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pacte.png" class="card-img" alt="pacte" style="max-height: 8rem;">
                    <div class="card-img-overlay">
                        <h4 class="bf">L'engagement'</h4>
                        <p>pour les municipales 2020</p>
                    </div>
                </div>
            </div>
            <!------------------------------------->
            <div class="col-md-8">
                <div class="card mb-3" style="max-height: 8rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan.png" class="card-img" alt="plan"  style="max-height: 8rem;">
                    <div class="card-img-overlay">
                        <h4 class="bf">Nos coups de coeurs</h4>
                    </div>
                </div>
            </div>
            <!------------------------------------->
        </div>
        <!------------------------------------->
</div>
</div>