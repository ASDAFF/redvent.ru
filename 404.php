<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle('404 страница не найдена');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");
?>

	<div class="error">
		<img class="img-responsive error-img" src="/local/templates/redvent/html/img/404.png" alt="">
		<p class="error-title">Ошибка</p>
		<p class="error-descr">данная страница не найдена</p>
		<p class="error-text">Перейдите на <a href="/">главную страницу</a>
			сайта или в <a href="/catalog/">каталог решеток</a></p>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>