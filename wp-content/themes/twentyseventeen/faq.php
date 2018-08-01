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
    <section class="hero-banner bg-primary text-light my-banner">
    <div class="container text-center">
        <h1 class="text-light  mt-5 pt-5 pb-4">
            <strong><?php the_field('fc-title', $post->ID); ?></strong>
        </h1>
        <?php the_field('faq-editor', $post->ID); ?>
        <div class="row text-center justify-content-center">
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
                        <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false"><?php the_field('fnew-contact', $post->ID); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><?php the_field('fnew-sign', $post->ID); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="booking-tab" data-toggle="tab" href="#booking" role="tab" aria-controls="booking" aria-selected="false"><?php the_field('fnew-booking', $post->ID); ?></a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                        
                        <?php $i = 0; ?>

                        <?php if( have_rows('about-qaa', $post->ID) ): ?>

                            <ul class="list-group list-group-faq">

                                <?php while( have_rows('about-qaa', $post->ID) ): the_row(); 

                                    // vars
                                    $i++;
                                    $question = get_sub_field('a-question');
                                    $answer = get_sub_field('a-answer');

                                ?>  
                                    <?php if( $question ): ?>  
                                        <li class="list-group-item" data-toggle="collapse" href="<?php echo '#question'.$i; ?>">
                                            <?php echo $question; ?>
                                        </li>

                                         <?php if( $answer ): ?>  
                                            <li class="collapse" id="<?php echo 'question'.$i; ?>">
                                                <div class="card card-body mb-4">
                                                    <?php echo $answer; ?>
                                                </div>
                                            </li>
                                        <?php endif; ?>

                                    <?php endif; ?>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>



                            
                    </div>
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">

                        <?php if( have_rows('contact-qaa', $post->ID) ): ?>

                            <ul class="list-group list-group-faq">

                                <?php while( have_rows('contact-qaa', $post->ID) ): the_row(); 

                                    // vars
                                    $i++;
                                    $question = get_sub_field('ct-question');
                                    $answer = get_sub_field('ct-answer');

                                ?>  
                                    <?php if( $question ): ?>  
                                        <li class="list-group-item" data-toggle="collapse" href="<?php echo '#question'.$i; ?>">
                                            <?php echo $question; ?>
                                        </li>

                                         <?php if( $answer ): ?>  
                                            <li class="collapse" id="<?php echo 'question'.$i; ?>">
                                                <div class="card card-body mb-4">
                                                    <?php echo $answer; ?>
                                                </div>
                                            </li>
                                        <?php endif; ?>

                                    <?php endif; ?>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>
                    
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <?php if( have_rows('sign-qaa', $post->ID) ): ?>

                            <ul class="list-group list-group-faq">

                                <?php while( have_rows('sign-qaa', $post->ID) ): the_row(); 

                                    // vars
                                    $i++;
                                    $question = get_sub_field('su-question');
                                    $answer = get_sub_field('su-answer');

                                ?>  
                                    <?php if( $question ): ?>  
                                        <li class="list-group-item" data-toggle="collapse" href="<?php echo '#question'.$i; ?>">
                                            <?php echo $question; ?>
                                        </li>

                                         <?php if( $answer ): ?>  
                                            <li class="collapse" id="<?php echo 'question'.$i; ?>">
                                                <div class="card card-body mb-4">
                                                    <?php echo $answer; ?>
                                                </div>
                                            </li>
                                        <?php endif; ?>

                                    <?php endif; ?>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>
                    </div>
                    <div class="tab-pane fade" id="booking" role="tabpanel" aria-labelledby="booking-tab">
                    <?php if( have_rows('book-qaa', $post->ID) ): ?>

                            <ul class="list-group list-group-faq">

                                <?php while( have_rows('book-qaa', $post->ID) ): the_row(); 

                                    // vars
                                    $i++;
                                    $question = get_sub_field('bk-question');
                                    $answer = get_sub_field('bk-answer');

                                ?>  
                                    <?php if( $question ): ?>  
                                        <li class="list-group-item" data-toggle="collapse" href="<?php echo '#question'.$i; ?>">
                                            <?php echo $question; ?>
                                        </li>

                                         <?php if( $answer ): ?>  
                                            <li class="collapse" id="<?php echo 'question'.$i; ?>">
                                                <div class="card card-body mb-4">
                                                    <?php echo $answer; ?>
                                                </div>
                                            </li>
                                        <?php endif; ?>

                                    <?php endif; ?>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>    <section class="assistant mt-5 mt-lg-4 pb-3">
    <div class="container">
        <?php the_field('faq-editor2', $post->ID); ?>
        
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