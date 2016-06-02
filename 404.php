<?asdasdas
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>

<div class="rt-page-container rt-container rt-dark">
	<div class="rt-hidden">
		<div id="rt-mainbody-surround">

			<div id="rt-main" class="sa4-mb8">
				<div class="rt-main-wrapper rt-grid-8 rt-push-4">
					<div id="rt-content-bottom" class="rt-dark">
						<div class="rt-grid-8 rt-alpha rt-omega">
							<div class="rt-block box1">
								<div class="module-surround">
									<div class="module-content">
										<div class="custombox1"  >
											<h1><?$APPLICATION->ShowTitle('h1')?></h1>
											<?$APPLICATION->IncludeComponent(
	"bitrix:main.map", 
	".default", 
	array(
		"LEVEL" => "3",
		"COL_NUM" => "2",
		"SHOW_DESCRIPTION" => "Y",
		"SET_TITLE" => "N",
		"CACHE_TIME" => "3600",
		"COMPONENT_TEMPLATE" => ".default",
		"CACHE_TYPE" => "A"
	),
	false
);?>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rt-pages"></div>
				</div>
				<div class="rt-grid-4 rt-pull-8">
					<div id="rt-sidebar-a">
						<div class="rt-block ">
							<div class="module-surround">
								<div class="module-content">
									<div class="custom"  >
										<a href="/zakazat/" target="_blank">
											<img src="/images/knopka.png" title="Заказать" />
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="rt-block ">
							<div class="module-surround">
								<div class="module-content">
									<div class="iceverticalmenu">
										<?$APPLICATION->IncludeComponent("bitrix:menu", "left-menu", Array(
											"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
												"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
												"COMPONENT_TEMPLATE" => ".default",
												"DELAY" => "N",	// Откладывать выполнение шаблона меню
												"MAX_LEVEL" => "1",	// Уровень вложенности меню
												"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
												"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
												"MENU_CACHE_TYPE" => "N",	// Тип кеширования
												"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
												"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
												"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
											),
											false
										);?>
									</div>  
								</div>
							</div>
						</div>
						<div class="rt-block ">
							<div class="module-surround">
								<div class="module-content">
									<div class="custom"  >
										<a href="javascript:void(0)" target="_blank" class="st">
											Статьи
										</a>
										<?$APPLICATION->IncludeComponent(
											"bitrix:news.list",
											"news.main11",
											Array(
												"ACTIVE_DATE_FORMAT" => "d.m.Y",
												"ADD_SECTIONS_CHAIN" => "Y",
												"AJAX_MODE" => "N",
												"AJAX_OPTION_ADDITIONAL" => "",
												"AJAX_OPTION_HISTORY" => "N",
												"AJAX_OPTION_JUMP" => "N",
												"AJAX_OPTION_STYLE" => "Y",
												"CACHE_FILTER" => "N",
												"CACHE_GROUPS" => "Y",
												"CACHE_TIME" => "36000000",
												"CACHE_TYPE" => "A",
												"CHECK_DATES" => "Y",
												"COMPONENT_TEMPLATE" => ".default",
												"DETAIL_URL" => "",
												"DISPLAY_BOTTOM_PAGER" => "Y",
												"DISPLAY_DATE" => "Y",
												"DISPLAY_NAME" => "Y",
												"DISPLAY_PICTURE" => "Y",
												"DISPLAY_PREVIEW_TEXT" => "Y",
												"DISPLAY_TOP_PAGER" => "N",
												"FIELD_CODE" => array("",""),
												"FILTER_NAME" => "",
												"HIDE_LINK_WHEN_NO_DETAIL" => "N",
												"IBLOCK_ID" => "2",
												"IBLOCK_TYPE" => "articles",
												"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
												"INCLUDE_SUBSECTIONS" => "Y",
												"MESSAGE_404" => "",
												"NEWS_COUNT" => "20",
												"PAGER_BASE_LINK_ENABLE" => "N",
												"PAGER_DESC_NUMBERING" => "N",
												"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
												"PAGER_SHOW_ALL" => "N",
												"PAGER_SHOW_ALWAYS" => "N",
												"PAGER_TEMPLATE" => ".default",
												"PAGER_TITLE" => "Новости",
												"PARENT_SECTION" => "",
												"PARENT_SECTION_CODE" => "",
												"PREVIEW_TRUNCATE_LEN" => "",
												"PROPERTY_CODE" => array("",""),
												"SET_BROWSER_TITLE" => "N",
												"SET_LAST_MODIFIED" => "N",
												"SET_META_DESCRIPTION" => "N",
												"SET_META_KEYWORDS" => "N",
												"SET_STATUS_404" => "N",
												"SET_TITLE" => "N",
												"SHOW_404" => "N",
												"SORT_BY1" => "ACTIVE_FROM",
												"SORT_BY2" => "SORT",
												"SORT_ORDER1" => "DESC",
												"SORT_ORDER2" => "ASC"
											)
										);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>