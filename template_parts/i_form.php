<div id="form" class="form">
	<form id="form" action="proceso.php" method="post" role="form" class="needs-validation" enctype="multipart/form-data" novalidate>
		<?php csrfToken(); ?>
		<fieldset class="setup-content" id="fieldset-form">
			<div class="row justify-content-center">
				<div class="col-lg-5 col-11 mb-3">
					<input type="text" class="form-control" id="NOMBRES_PROSPECTO" name="NOMBRES_PROSPECTO" placeholder="Nombres" value="<?php echo $_data_nombre; ?>" required>
				</div>
				<div class="offset-lg-1 col-lg-5 col-11 mb-3">
					<input type="text" class="form-control" id="APATERNO_PROSPECTO" name="APATERNO_PROSPECTO" placeholder="Apellido Paterno" value="<?php echo $_data_apepat; ?>" required>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-5 col-11 mb-3">
					<input type="text" class="form-control" id="AMATERNO_PROSPECTO" name="AMATERNO_PROSPECTO" placeholder="Apellido Materno" value="<?php echo $_data_apemat; ?>" required>
				</div>
				<div class="offset-lg-1 col-lg-5 col-11 mb-3">
					<input type="email" class="form-control" id="CORREO_PROSPECTO" name="CORREO_PROSPECTO" placeholder="Correo" value="<?php echo $_data_correo; ?>" required>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-5 col-11 mb-3">
					<input type="tel" class="form-control" id="CELULAR_PROSPECTO" name="CELULAR_PROSPECTO" minlength="9" maxlength="9" pattern="^((9)[0-9]{8})|((9)[0-9]{2}[ ][0-9]{3}[ ][0-9]{3})|((9)[0-9]{2}[-][0-9]{3}[-][0-9]{3})|([1-9]{1}([0-9]{1}|[0-9]{2})(9)[0-9]{8})|([1-9]{1}([0-9]{1}|[0-9]{2})[ ](9)[0-9]{8})|([1-9]{1}([0-9]{1}|[0-9]{2})[ ](9)[0-9]{2}[ ][0-9]{3}[ ][0-9]{3})|([1-9]{1}([0-9]{1}|[0-9]{2})[-](9)[0-9]{2}[-][0-9]{3}[-][0-9]{3})|([1-9]{1}([0-9]{1}|[0-9]{2})[-](9)[0-9]{8})|([+][1-9]{1}([0-9]{1}|[0-9]{2})(9)[0-9]{8})|([+][1-9]{1}([0-9]{1}|[0-9]{2})[ ](9)[0-9]{8})|([+][1-9]{1}([0-9]{1}|[0-9]{2})[ ](9)[0-9]{2}[ ][0-9]{3}[ ][0-9]{3})|([+][1-9]{1}([0-9]{1}|[0-9]{2})[-](9)[0-9]{2}[-][0-9]{3}[-][0-9]{3})|([+][1-9]{1}([0-9]{1}|[0-9]{2})[-](9)[0-9]{8})|\(([1-9]{1}([0-9]{1}|[0-9]{2})\)(9)[0-9]{8})|\(([1-9]{1}([0-9]{1}|[0-9]{2})\)([ ]|[-])(9)[0-9]{8})|\(([1-9]{1}([0-9]{1}|[0-9]{2})\)[ ](9)[0-9]{2}[ ][0-9]{3}[ ][0-9]{3})|\(([1-9]{1}([0-9]{1}|[0-9]{2})\)[-](9)[0-9]{2}[-][0-9]{3}[-][0-9]{3})|\([+]([1-9]{1}([0-9]{1}|[0-9]{2})\)(9)[0-9]{8})|\([+]([1-9]{1}([0-9]{1}|[0-9]{2})\)([ ]|[-])(9)[0-9]{8})|\([+]([1-9]{1}([0-9]{1}|[0-9]{2})\)[ ](9)[0-9]{2}[ ][0-9]{3}[ ][0-9]{3})|\([+]([1-9]{1}([0-9]{1}|[0-9]{2})\)[-](9)[0-9]{2}[-][0-9]{3}[-][0-9]{3})|((9)[0-9]{2}([ ]|[-])[0-9]{6})" placeholder="Celular" value="<?php echo $_data_celula; ?>" required>
				</div>
				<div class="offset-lg-1 col-lg-5 col-11 mb-3">
					<input type="text" class="form-control" id="INSTITUCION_PROCEDENCIA" name="INSTITUCION_PROCEDENCIA" placeholder="Colegio" value="" required>
				</div>
				<?php /*
				<div class="offset-lg-1 col-lg-5 col-11 mb-3">
					<input type="tel" class="form-control" id="DNI_PROSPECTO" name="DNI_PROSPECTO" minlength="8" maxlength="8" oninput="if(this.value.length &gt; this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57" placeholder="DNI:" value="<?php echo $_data_numdni; ?>" required>
					<div class="tooltip-help valid-tooltip">OK</div>
					<div class="tooltip-help invalid-tooltip">ERROR</div>
				</div>
				*/?>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-5 col-11 mb-3 selectdiv">
					<select name="ANIO_ESTUDIOS" id="ANIO_ESTUDIOS" class="form-control" required>
						<option value="">Elige tu año de estudios</option>
						<?php foreach ($anios_estudio as $anio) { ?>
							<option value="<?=$anio?>"><?=$anio?></option>
						<?php } ?>
					</select>
				</div>
				<div class="offset-lg-1 col-lg-5 col-11 mb-3 selectdiv">
					<?php /*
					<select name="CARRERA_INTERES" id="CARRERA_INTERES" class="form-control">
						<option value="">Seleccionar carrera</option>
					</select>
					*/?>
					<select class="form-control" id="codigo_carrera" name="CODIGO_CARRERA" required="">
                		<option value="">Elige tu carrera USIL</option>
						<optgroup label="ADMINISTRACIÓN HOTELERA, TURISMO Y GASTRONOMÍA">
                            <option data-fecha="27 de setiembre" value="3">Administración Hotelera</option>
                            <option data-fecha="27 de setiembre" value="2">Administración en Turismo</option>
                            <option data-fecha="27 de setiembre" value="5744">Arte Culinario</option>
                            <option data-fecha="27 de setiembre" value="11185">Gestión e Innovación en Gastronomía</option>
                         </optgroup>
					</select>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12 col-11 mb-3 text-center">
					<div id="appdpdc"></div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center">
					<button class="btn-CTA cross-center" id="btn_submit" type="submit">
						¡QUIERO INSCRIBIRME! <svg class="svg-icon wow animate__infinite infinite animate__animated animate__fadeInLeft"><use href="images/icons.svg#arrow-right"/></svg>
					</button>
				</div>
			</div>
			<input type="hidden" id="utm_source" name="utm_source" value="<?php echo $_utm_source; ?>" required>
			<input type="hidden" id="utm_medium" name="utm_medium" value="<?php echo $_utm_medium; ?>" required>
			<input type="hidden" id="utm_term" name="utm_term" value="<?php echo $_utm_term; ?>" required>
			<input type="hidden" id="utm_campaign" name="utm_campaign" value="<?php echo $_utm_campaign; ?>" required>
			<input type="hidden" id="utm_content" name="utm_content" value="<?php echo $_utm_content; ?>" required>
			<?php // CRM 
            //$crmCodigoTurno = getFechaInscripcion($arrFechasInscripciones);
			?>

			<input type="hidden" name="campo_2" value="1203" />
			<input type="hidden" name="campo_3" value="TTalleres captación carrera de Administración Turismo-1">
			<?php /* <input type="hidden" name="campo_3" value="<?=$crmCodigoTurno['codigoTurno'];?>" */?>
			<input type="hidden" name="campo_4" value="Talleres de captación carrera de Administración Turismo" />
		</fieldset>
	</form>
</div>