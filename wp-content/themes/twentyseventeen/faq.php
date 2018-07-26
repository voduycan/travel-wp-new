<?php
/**
 * Template Name: faq
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
?>
<?php  get_header(); ?>

<div class="page-faq">
    <section class="hero-banner bg-primary text-light">
    <div class="container text-center">
        <h1 class="text-light  mt-5 pt-5 pb-4">
            <strong><?php the_field('fp-title', $post->ID); ?></strong>
        </h1>
        
        <div class="row text-center justify-content-center">
            <div class="col-12 pb-5">
                <a href="#" class="btn btn-outline-light btn-lg btn-customer-support"><?php the_field('n-btn', 424); ?></a>
                <div class="mt-3"><small><?php the_field('n-or', 424); ?></small></div>
                <h2><?php the_field('n-number', 424); ?></h2>
                <div><small><?php the_field('n-time', 424); ?></small></div>
            </div>
            <a href="#" id="scroll-down"><img src="<?php bloginfo('template_url'); ?>/travel/assets/icons/arrow-down.png"/></a>
        </div>
    </div>
        
    </div>
    <div class="divider">
        <img src="<?php bloginfo('template_url'); ?>/travel/assets/divider-3.jpg" />
    </div>
</section>    <section class="faq mt-5 mt-lg-4 pb-3" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs nav-tabs-faq" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true"><?php the_field('ff-about', $post->ID); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false"><?php the_field('ff-contact', $post->ID); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><?php the_field('ff-sign', $post->ID); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="booking-tab" data-toggle="tab" href="#booking" role="tab" aria-controls="booking" aria-selected="false"><?php the_field('ff-booking', $post->ID); ?></a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <ul class="list-group list-group-faq">
                            <li class="list-group-item" data-toggle="collapse" href="#question1">
                               <?php the_field('ab-q1', $post->ID); ?>
                            </li>
                            <li class="collapse" id="question1">
                                <div class="card card-body mb-4">
                                    <?php the_field('ab-a1', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question2"> <?php the_field('ab-q2', $post->ID); ?></li>
                            <li class="collapse" id="question2">
                                <div class="card card-body mb-4">
                                     <?php the_field('ab-a2', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question3"> <?php the_field('ab-q3', $post->ID); ?></li>
                            <li class="collapse" id="question3">
                                <div class="card card-body mb-4">
                                     <?php the_field('ab-a3', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question4"> <?php the_field('ab-q4', $post->ID); ?></li>
                            <li class="collapse" id="question4">
                                <div class="card card-body mb-4">
                                     <?php the_field('ab-a4', $post->ID); ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                    <ul class="list-group list-group-faq">
                            <li class="list-group-item" data-toggle="collapse" href="#question5">
                                <?php the_field('ct-q1', $post->ID); ?>
                            </li>
                            <li class="collapse" id="question5">
                                <div class="card card-body mb-4">
                                   <?php the_field('ct-a1', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question6"><?php the_field('ct-q2', $post->ID); ?></li>
                            <li class="collapse" id="question6">
                                <div class="card card-body mb-4">
                                    <?php the_field('ct-a2', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question7"><?php the_field('ct-q3', $post->ID); ?></li>
                            <li class="collapse" id="question7">
                                <div class="card card-body mb-4">
                                    <?php the_field('ct-a3', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question8"><?php the_field('ct-q4', $post->ID); ?></li>
                            <li class="collapse" id="question8">
                                <div class="card card-body mb-4">
                                    <?php the_field('ct-a4', $post->ID); ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <ul class="list-group list-group-faq">
                            <li class="list-group-item" data-toggle="collapse" href="#question9">
                                <?php the_field('sg-q1', $post->ID); ?>
                            </li>
                            <li class="collapse" id="question9">
                                <div class="card card-body mb-4">
                                    <?php the_field('sg-a1', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question10"><?php the_field('sg-q2', $post->ID); ?></li>
                            <li class="collapse" id="question10">
                                <div class="card card-body mb-4">
                                   <?php the_field('sg-a2', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question11"><?php the_field('sg-q3', $post->ID); ?></li>
                            <li class="collapse" id="question11">
                                <div class="card card-body mb-4">
                                    <?php the_field('sg-a3', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question12"><?php the_field('sg-q4', $post->ID); ?></li>
                            <li class="collapse" id="question12">
                                <div class="card card-body mb-4">
                                    <?php the_field('sg-a4', $post->ID); ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="booking" role="tabpanel" aria-labelledby="booking-tab">
                    <ul class="list-group list-group-faq">
                            <li class="list-group-item" data-toggle="collapse" href="#question13">
                                <?php the_field('bk-q1', $post->ID); ?>
                            </li>
                            <li class="collapse" id="question13">
                                <div class="card card-body mb-4">
                                     <?php the_field('bk-a1', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question14"> <?php the_field('bk-q2', $post->ID); ?></lior call>
                            <li class="collapse" id="question14">
                                <div class="card card-body mb-4">
                                     <?php the_field('bk-a2', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question15"> <?php the_field('bk-q3', $post->ID); ?></li>
                            <li class="collapse" id="question15">
                                <div class="card card-body mb-4">
                                     <?php the_field('bk-a3', $post->ID); ?>
                                </div>
                            </li>
                            <li class="list-group-item" data-toggle="collapse" href="#question16"> <?php the_field('bk-q4', $post->ID); ?></li>
                            <li class="collapse" id="question16">
                                <div class="card card-body mb-4">
                                     <?php the_field('bk-a4', $post->ID); ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>    <section class="assistant mt-5 mt-lg-4 pb-3">
    <div class="container">
        <h1 class="section-title text-center mb-4"
            <strong><?php the_field('n-title', 424); ?></strong>
        </h1>
        <div class="row">
            <div class="col-12 text-center pb-5">
                <a href="#" class="btn btn-outline-primary btn-lg btn-customer-support"><?php the_field('n-btn', 424); ?></a>
                <div class="mt-3"><small><?php the_field('n-or', 424); ?></small></div>
                <h2><?php the_field('n-number', 424); ?></h2>
                <div><small><?php the_field('n-time', 424); ?></small></div>
            </div>
        </div>
    </div>
</section></div>

<?php  get_footer(); ?>
<script>
    $(document).ready(function (){
        $("#scroll-down").click(function() {
            $('html, body').animate({
                scrollTop: $("#faq").offset().top
            }, 1000);
        });
        $('.hero-banner').height( $(window).height() - $('.navbar').height() - 250);
        
    });
</script>