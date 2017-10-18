<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"REGISTER_URL" => "/login/registration.php",
		"FORGOT_PASSWORD_URL" => "/login/",
		"PROFILE_URL" => "/login/user.php",
		"SHOW_ERRORS" => "Y"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>