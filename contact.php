<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Contact");
?><!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text">
					<h3>Contact</h3>
				</div>
			</div>
		</div>
	</div>
</div>
 <!-- bradcam_area_end  --> <!-- ================ contact section start ================= --> <section class="contact-section">
<div class="container">
	<div class="d-none d-sm-block mb-5 pb-4">
		<div id="map" style="height: 480px; position: relative; overflow: hidden;">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
                Array(
                    "API_KEY" => "",
                    "CONTROLS" => array("ZOOM","MINIMAP","TYPECONTROL","SCALELINE"),
                    "INIT_MAP_TYPE" => "PUBLIC",
                    "MAP_DATA" => "a:3:{s:10:\"yandex_lat\";s:7:\"55.7383\";s:10:\"yandex_lon\";s:7:\"37.5946\";s:12:\"yandex_scale\";i:10;}",
                    "MAP_HEIGHT" => "500",
                    "MAP_ID" => "",
                    "MAP_WIDTH" => "600",
                    "OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
                )
            );?>

            <script>
                $(".bx-yandex-map").css("width", "100%");
                $(".bx-yandex-map").css("height", "100%");
            </script>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<h2 class="contact-title">Get in Touch</h2>
		</div>
        <?$APPLICATION->IncludeComponent("contact:main.feedback", "template1", Array(
	"EMAIL_TO" => "gemslove2@gmail.com",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => "",	// Обязательные поля для заполнения
		"USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?>
		<div class="col-lg-3 offset-lg-1">
			<div class="media contact-info">
 <span class="contact-info__icon"><i class="ti-home"></i></span>
				<div class="media-body">
					<h3>Buttonwood, California.</h3>
					<p>
						 Rosemead, CA 91770
					</p>
				</div>
			</div>
			<div class="media contact-info">
 <span class="contact-info__icon"><i class="ti-tablet"></i></span>
				<div class="media-body">
					<h3>+1 253 565 2365</h3>
					<p>
						 Mon to Fri 9am to 6pm
					</p>
				</div>
			</div>
			<div class="media contact-info">
 <span class="contact-info__icon"><i class="ti-email"></i></span>
				<div class="media-body">
					<h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
					<p>
						 Send us your query anytime!
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
 </section>
<!-- ================ contact section end ================= --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>