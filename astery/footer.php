<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<footer class="footer">
            <div class="footer-wrapper">
                <div class="footer-wrapper__item">
                    <div class="footer-item-top">
                        <div class="footer-item-top-item1">
                            <div class="logo-white">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/logo__white.svg" alt="">
                            </div>
                            <div class="all-rights-reserved">
                                <p>© 2021. Все права защищены.</p>
                            </div>
                        </div>
                        <div class="footer-item-top-item2">
                            <a class="footer-item-top-item2__title">Меню:</a>
                            <a href="#" class="footer-item-top-item2__link">Главная</a>
                            <a href="#" class="footer-item-top-item2__link">Продукция</a>
                            <a href="#" class="footer-item-top-item2__link">О нас</a>
                            <a href="#" class="footer-item-top-item2__link">Новости</a>
                        </div>
                        <div class="footer-item-top-item3">
                            <a class="pseudo-title">Псевдо тайтл</a>
                            <a href="#">Контакты</a>
                            <a href="#">Оплата и доставка</a>
                        </div>
                        <div class="footer-item-top-item4">
                            <a class="footer-item-top-item2__title">
                                Продукция:
                            </a>
                            <a href="#" class="footer-item-top-item2__link">
                                Оливковое масло
                            </a>
                            <a href="#" class="footer-item-top-item2__link">
                                Сыр
                            </a>
                            <a href="#" class="footer-item-top-item2__link">
                                Оливки
                            </a>
                            <a href="#" class="footer-item-top-item2__link">
                                Оливковое мыло
                            </a>
                        </div>
                        <div class="footer-item-top-item5">
                            <div class="footer-item-top-item5__title">
                                <a>Контакты:</a>
                            </div>
                            <div class="footer-item-top-item5__contacts">
                                <a href="tel:+74957556983" class="footer-item-top-item5__phone">+ 7(495) 755 69 83</a>
                                <a href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/telegram (1) 1.svg" alt="">
                                </a>
                                <a href="#">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/whatsapp (2) 1.svg" alt="">
                                </a>
                            </div>
                            <div class="footer-item-top-item5__call-back">
                                <a href="#" class="footer-item-top-item5__call-back-button">
                                    Заказать звонок
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-item-bot">
                        <div class="footer-item-bot__item1">
                            <p>Политика конфиденциальности</p>
                        </div>
                        <div class="footer-item-bot__item2">
                            <a href="#" class="footer-instagram">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/instagram (1) 1.svg" alt="">
                            </a>
                            <a href="#" class="footer-facebook">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/facebook (1) 1.svg" alt="">
                            </a>
                            <a href="#" class="footer-youtube">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/youtube 1.svg" alt="">
                            </a>
                        </div>
                        <div class="footer-item-bot__item3">
                            <a href="#">Разработка сайта</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

		<? echo '</div>'; ?>

		


    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/script.js"></script>
</body>
</html>
























<!-- <script>
	BX.ready(function(){
		var upButton = document.querySelector('[data-role="eshopUpButton"]');
		BX.bind(upButton, "click", function(){
			var windowScroll = BX.GetWindowScrollPos();
			(new BX.easing({
				duration : 500,
				start : { scroll : windowScroll.scrollTop },
				finish : { scroll : 0 },
				transition : BX.easing.makeEaseOut(BX.easing.transitions.quart),
				step : function(state){
					window.scrollTo(0, state.scroll);
				},
				complete: function() {
				}
			})).animate();
		})
	});
</script>
</body>
</html> -->