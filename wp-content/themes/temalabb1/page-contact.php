<?php
get_template_part('template-parts/header');
?>


<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <h1>
                        <?php
                        $form = get_post(36);
                        $title = $form->post_title;
                        echo $title;
                        ?>
                    </h1>
                    <?php echo do_shortcode('[contact-form-7 id="36" title="Kontaktform"]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>



<?php
get_template_part('template-parts/footer');
?>
