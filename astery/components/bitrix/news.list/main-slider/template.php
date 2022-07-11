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



<div class="swiper-image swiper-container">
                    <div class="swiper" id="swiper-image">
                        <div class="swiper-wrapper">
						<?foreach($arResult["ITEMS"] as $arItem):?>
							<?
							$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
							?>
                            <div class="swiper-slide">
                                <div class="olives" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                    <div class="olives-info">
                                        <div class="olives-info__container">
                                            <div class="olives-info__content">
                                                <h1><?= $arItem["NAME"]; ?></h1>
                                                <?echo $arItem["PREVIEW_TEXT"];?>
                                                <div class="olives-info__button">
                                                    <a href="<?= $arItem['PROPERTIES']['BUTTON_LINK']['VALUE'] ?>"><?= $arItem['PROPERTIES']['BUTTON_TEXT']['VALUE'] ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="olives-image">
                                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
										alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                                    </div>
                                </div>
                            </div>
							<?endforeach;?>
                        </div>
                        <div class="olives-slider-buttons">
                            <div class="olives-slider-buttons__container">
                                <div class="olives-slider-button-prev">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/olives__arrow__left.svg" alt="">
                                </div>
                                <div class="olives-slider-button-next">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/olives__arrow__right.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="olives-info-points">
                            <div class="slider-pagination">
                            </div>
                        </div>  
                    </div>
                </div>