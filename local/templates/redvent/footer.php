<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</div>
</div>
</div>
</div>
<div style="clear:both;"></div>
<footer>
	<div class="footer-top"></div>
	<div class="footer-body">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "redvent_bottom_menu",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N"
                        )
                    );?>
					<div class="footer-copyright">
						Информация на сайте не является публичной афертой.<br>
						2015 Интернет-магазин вентиляционных решеток "Редвент.ру"
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="footer-contacts">
						<div class="footer-contacts-field time">
							Работаем ежедневно<br>
							с 9.00 до 18.00
						</div>
						<div class="footer-contacts-field phone">
							<div class="footer-contacts-phone">
								8(495)795-23-04<br>
								<a class="footer-contacts-field__link" href="mailto:zakaz@redvent.ru">zakaz@redvent.ru</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.js"></script>-->

<?
//$APPLICATION->AddHeadScript("/local/templates/redvent/html/js/main.min.js");
?>
<script src="/local/templates/redvent/html/js/main.min.js"></script>
<script src="/local/templates/redvent/html/js/calc.js"></script>
</body>
</html>