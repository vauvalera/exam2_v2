<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="review-block">
		<div class="review-text">
				<div class="review-text-cont">
					<?if(strlen($arResult["DETAIL_TEXT"])>0):?>
						<?echo $arResult["DETAIL_TEXT"];?>
					<?else:?>
						<?echo $arResult["PREVIEW_TEXT"];?>
					<?endif?>
				</div>
				<div class="review-autor">
					<?=$arResult["NAME"]?>, 
					<?=$arResult["DISPLAY_ACTIVE_FROM"]?>г., 
					<?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?>, 
					<?=$arResult["PROPERTIES"]["COMPANY"]["VALUE"]?>.
				</div>
		</div>
		<div style="clear: both;" class="review-img-wrap">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			/>
	<?else:?>
		<img
			src="<?=SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg"
			/>
	<?endif?>
		</div>
	</div>
<?if(!empty($arResult["PROPERTIES"]["FILE"]["VALUE"])):?>
	<div class="exam-review-doc">
			<p>Документы:</p>
	<?foreach($arResult["PROPERTIES"]["FILE"]["VALUE"] as $File):?>
	<?$f = CFile::GetFileArray($File);?>
					<div  class="exam-review-item-doc">
						<img
							class="rew-doc-ico"
							src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png"
							>
						<a href="<?=$f["SRC"]?>"><?=$f["ORIGINAL_NAME"]?>
						</a>
					</div>
	<?endforeach;?>
	</div>
<?endif;?>