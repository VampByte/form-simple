<main id="formulario" class="formulario">
    <div class="container">
        <?php if (!$thanksPage) { ?>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="formularioH2">
                        Registration form
                    </h2>
                </div><!-- col -->
            </div><!-- row -->
        <?php } ?>
        <div class="row justify-content-center <?=(!$thanksPage) ? "rowContent":"" ;?>">
            <div class="col-lg-12">
                <?php if ($thanksPage && $_msg) { ?>
                    <div class="alert alert-success boxAlert" role="alert">
                        <?php echo $_msg; ?>
                    </div>
				<?php } else {
                    include "template_parts/i_form_hubspot.php";
                } ?>
            </div>
        </div>
    </div>
</main>