<div id="form" class="form <?=($thanksPage) ? "formGracias":"";?>">
    <!--[if lte IE 8]>
	<script
	charset="utf-8" type="text/javascript"
	src="//js.hsforms.net/forms/v2-legacy.js"></script>
	<![endif]-->
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
    <script>
    hbspt.forms.create({
        region: "na1",
        portalId: "2578504",
        formId: "<?=$formID;?>",
        onFormSubmit: function($form) {
			setTimeout( function() {
				var formData = $form.serialize();
				window.location = "gracias.php?" + formData;
			}, 250 );
		}
    });
    </script>
</div>