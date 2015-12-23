<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
_show_array($arResult);
?>
<div class="contacts-feedback">
	<p class="contacts-feedback__title">Обратная связь</p>
	<form class="form col-lg-9 col-md-9 col-sm-9 col-xs-12" action="<?=POST_FORM_ACTION_URI?>" method="POST">
		<?=bitrix_sessid_post()?>
		<div class="row">
			<?if(!empty($arResult["ERROR_MESSAGE"]))
			{?>
				<div class="form-field col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?foreach($arResult["ERROR_MESSAGE"] as $v) {
						ShowError($v);
					}?>
				</div>
				<?
			}
			if(strlen($arResult["OK_MESSAGE"]) > 0)
			{?>
				<div class="form-field col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?=$arResult["OK_MESSAGE"]?>
				</div>
				<?
			}?>
			<div class="form-field-line col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<label class="form-field-line__name">
					Ваше имя*
				</label>
				<input class="form-field-line__text form-field__text" name="user_name" type="text" value="<?=$arResult["AUTHOR_NAME"]?>">
			</div>
			<div class="form-field-line col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<label class="form-field-line__name">
					Телефон*
				</label>
				<input class="form-field-line__text form-field__text" name="user_phone" type="text" value="<?=$arResult["AUTHOR_PHONE"]?>">
			</div>
			<div class="form-field-line col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<label class="form-field-line__name">
					Email*
				</label>
				<input class="form-field-line__text form-field__text" name="user_email" type="text" value="<?=$arResult["AUTHOR_EMAIL"]?>">
			</div>
			<div class="form-field col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<label class="form-field-line__name">
					Ваш вопрос*
				</label>
				<textarea name="MESSAGE" class="form-field__textarea contacts-feedback__textarea"></textarea>
			</div>
			<div class="form-field-line col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
				<input class="button button-first contacts-feedback__button" type="submit" name="submit" value="Отправить вопрос">
			</div>
		</div>
	</form>
	<p class="contacts-feedback__descr col-lg-3 col-md-3 col-sm-3 col-xs-12">
		Отправьте нам свой вопрос и наши менеджеры ответят на него в кратчайшие сроки
	</p>
	<div style="clear:both;"></div>
</div>