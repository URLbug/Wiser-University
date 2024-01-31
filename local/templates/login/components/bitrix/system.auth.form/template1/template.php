<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <div class="login-wrap p-0">
                <?
                if ($arResult['SHOW_ERRORS'] === 'Y' && $arResult['ERROR'] && !empty($arResult['ERROR_MESSAGE']))
                {
                    ShowMessage($arResult['ERROR_MESSAGE']);
                }
                ?>


                <h3 class="mb-4 text-center">Have an account?</h3>

                <?if($arResult["FORM_TYPE"] == "login"):?>
                    <form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" class="signin-form">
                        <?if($arResult["BACKURL"] <> ''):?>
                            <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                        <?endif?>
                        <?foreach ($arResult["POST"] as $key => $value):?>
                            <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                        <?endforeach?>
                        <input type="hidden" name="AUTH_FORM" value="Y" />
                        <input type="hidden" name="TYPE" value="AUTH" />

                        <div class="form-group">
                            <input type="text" class="form-control" name="USER_LOGIN" placeholder="Username" required>
                        </div>
                    <div class="form-group">
                        <input id="password-field" type="password" class="form-control" name="USER_PASSWORD" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary">Remember Me
                                <?if ($arResult["STORE_PASSWORD"] == "Y"):?>
                                    <input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y"  checked>
                                    <span class="checkmark"></span>
                                <?endif;?>
                            </label>
                        </div>
                        <?if ($arResult["CAPTCHA_CODE"]):?>
                            <tr>
                                <td colspan="2">
                                    <?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
                                    <input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
                                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
                                    <input type="text" name="captcha_word" maxlength="50" value="" /></td>
                            </tr>
                        <?endif?>
                        <div class="w-50 text-md-right">
                            <a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" style="color: #fff">Forgot Password</a>
                        </div>
                    </div>
                </form>

                <?endif?>
                <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>

                <?if($arResult["AUTH_SERVICES"]):?>
<!--                    <div class="social d-flex text-center">-->
                        <?
                        $APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "icons",
                            array(
                                "AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
                                "SUFFIX"=>"form",
                            ),
                            $component,
                            array("HIDE_ICONS"=>"Y")
                        );
                        ?>
<!--                        <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>-->
<!--                        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>-->
<!--                    </div>-->
                <?endif;?>
            </div>
        </div>
    </div>
</div>
</section>

<?//if($arResult["FORM_TYPE"] == "login"):?>
<!---->
<!--<form name="system_auth_form--><?php //=$arResult["RND"]?><!--" method="post" target="_top" action="--><?php //=$arResult["AUTH_URL"]?><!--">-->
<?//if($arResult["BACKURL"] <> ''):?>
<!--	<input type="hidden" name="backurl" value="--><?php //=$arResult["BACKURL"]?><!--" />-->
<?//endif?>
<?//foreach ($arResult["POST"] as $key => $value):?>
<!--	<input type="hidden" name="--><?php //=$key?><!--" value="--><?php //=$value?><!--" />-->
<?//endforeach?>
<!--	<input type="hidden" name="AUTH_FORM" value="Y" />-->
<!--	<input type="hidden" name="TYPE" value="AUTH" />-->
<!--	<table width="95%">-->
<!--		<tr>-->
<!--			<td colspan="2">-->
<!--			--><?php //=GetMessage("AUTH_LOGIN")?><!--:<br />-->
<!--			<input type="text" name="USER_LOGIN" maxlength="50" value="" size="17" />-->
<!--			<script>-->
<!--				BX.ready(function() {-->
<!--					var loginCookie = BX.getCookie("--><?php //=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>
<!--//					if (loginCookie)-->
<!--//					{-->
<!--//						var form = document.forms["system_auth_form--><?php ////=$arResult["RND"]?><!--//"];-->
<!--//						var loginInput = form.elements["USER_LOGIN"];-->
<!--//						loginInput.value = loginCookie;-->
<!--//					}-->
<!--//				});-->
<!--//			</script>-->
<!--//			</td>-->
<!--//		</tr>-->
<!--//		<tr>-->
<!--//			<td colspan="2">-->
			<?php //=GetMessage("AUTH_PASSWORD")?><!--:<br />-->
<!--			<input type="password" name="USER_PASSWORD" maxlength="255" size="17" autocomplete="off" />-->
<?//if($arResult["SECURE_AUTH"]):?>
<!--				<span class="bx-auth-secure" id="bx_auth_secure--><?php //=$arResult["RND"]?><!--" title="--><?//echo GetMessage("AUTH_SECURE_NOTE")?><!--" style="display:none">-->
<!--					<div class="bx-auth-secure-icon"></div>-->
<!--				</span>-->
<!--				<noscript>-->
<!--				<span class="bx-auth-secure" title="--><?//echo GetMessage("AUTH_NONSECURE_NOTE")?><!--">-->
<!--					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>-->
<!--				</span>-->
<!--				</noscript>-->
<!--<script type="text/javascript">-->
<!--document.getElementById('bx_auth_secure--><?php //=$arResult["RND"]?>
<!--//').style.display = 'inline-block';-->
<!--//</script>-->
<?//endif?>
<!--			</td>-->
<!--		</tr>-->
<?//if ($arResult["STORE_PASSWORD"] == "Y"):?>
<!--		<tr>-->
<!--			<td valign="top"><input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" /></td>-->
<!--			<td width="100%"><label for="USER_REMEMBER_frm" title="--><?php //=GetMessage("AUTH_REMEMBER_ME")?><!--">--><?//echo GetMessage("AUTH_REMEMBER_SHORT")?><!--</label></td>-->
<!--		</tr>-->
<?//endif?>
<?//if ($arResult["CAPTCHA_CODE"]):?>
<!--		<tr>-->
<!--			<td colspan="2">-->
<!--			--><?//echo GetMessage("AUTH_CAPTCHA_PROMT")?><!--:<br />-->
<!--			<input type="hidden" name="captcha_sid" value="--><?//echo $arResult["CAPTCHA_CODE"]?><!--" />-->
<!--			<img src="/bitrix/tools/captcha.php?captcha_sid=--><?//echo $arResult["CAPTCHA_CODE"]?><!--" width="180" height="40" alt="CAPTCHA" /><br /><br />-->
<!--			<input type="text" name="captcha_word" maxlength="50" value="" /></td>-->
<!--		</tr>-->
<?//endif?>
<!--		<tr>-->
<!--			<td colspan="2"><input type="submit" name="Login" value="--><?php //=GetMessage("AUTH_LOGIN_BUTTON")?><!--" /></td>-->
<!--		</tr>-->
<?//if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
<!--		<tr>-->
<!--			<td colspan="2"><noindex><a href="--><?php //=$arResult["AUTH_REGISTER_URL"]?><!--" rel="nofollow">--><?php //=GetMessage("AUTH_REGISTER")?><!--</a></noindex><br /></td>-->
<!--		</tr>-->
<?//endif?>
<!---->
<!--		<tr>-->
<!--			<td colspan="2"><noindex><a href="--><?php //=$arResult["AUTH_FORGOT_PASSWORD_URL"]?><!--" rel="nofollow">--><?php //=GetMessage("AUTH_FORGOT_PASSWORD_2")?><!--</a></noindex></td>-->
<!--		</tr>-->
<?//if($arResult["AUTH_SERVICES"]):?>
<!--		<tr>-->
<!--			<td colspan="2">-->
<!--				<div class="bx-auth-lbl">--><?php //=GetMessage("socserv_as_user_form")?><!--</div>-->
<?//
//$APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "icons",
//	array(
//		"AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
//		"SUFFIX"=>"form",
//	),
//	$component,
//	array("HIDE_ICONS"=>"Y")
//);
//?>
<!--			</td>-->
<!--		</tr>-->
<?//endif?>
<!--	</table>-->
<!--</form>-->
<!---->
<?//if($arResult["AUTH_SERVICES"]):?>
<?//
//$APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "",
//	array(
//		"AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
//		"AUTH_URL"=>$arResult["AUTH_URL"],
//		"POST"=>$arResult["POST"],
//		"POPUP"=>"Y",
//		"SUFFIX"=>"form",
//	),
//	$component,
//	array("HIDE_ICONS"=>"Y")
//);
//?>
<?//endif?>
<!---->
<?//
//elseif($arResult["FORM_TYPE"] == "otp"):
//?>
<!---->
<!--<form name="system_auth_form--><?php //=$arResult["RND"]?><!--" method="post" target="_top" action="--><?php //=$arResult["AUTH_URL"]?><!--">-->
<?//if($arResult["BACKURL"] <> ''):?>
<!--	<input type="hidden" name="backurl" value="--><?php //=$arResult["BACKURL"]?><!--" />-->
<?//endif?>
<!--	<input type="hidden" name="AUTH_FORM" value="Y" />-->
<!--	<input type="hidden" name="TYPE" value="OTP" />-->
<!--	<table width="95%">-->
<!--		<tr>-->
<!--			<td colspan="2">-->
<!--			--><?//echo GetMessage("auth_form_comp_otp")?><!--<br />-->
<!--			<input type="text" name="USER_OTP" maxlength="50" value="" size="17" autocomplete="off" /></td>-->
<!--		</tr>-->
<?//if ($arResult["CAPTCHA_CODE"]):?>
<!--		<tr>-->
<!--			<td colspan="2">-->
<!--			--><?//echo GetMessage("AUTH_CAPTCHA_PROMT")?><!--:<br />-->
<!--			<input type="hidden" name="captcha_sid" value="--><?//echo $arResult["CAPTCHA_CODE"]?><!--" />-->
<!--			<img src="/bitrix/tools/captcha.php?captcha_sid=--><?//echo $arResult["CAPTCHA_CODE"]?><!--" width="180" height="40" alt="CAPTCHA" /><br /><br />-->
<!--			<input type="text" name="captcha_word" maxlength="50" value="" /></td>-->
<!--		</tr>-->
<?//endif?>
<?//if ($arResult["REMEMBER_OTP"] == "Y"):?>
<!--		<tr>-->
<!--			<td valign="top"><input type="checkbox" id="OTP_REMEMBER_frm" name="OTP_REMEMBER" value="Y" /></td>-->
<!--			<td width="100%"><label for="OTP_REMEMBER_frm" title="--><?//echo GetMessage("auth_form_comp_otp_remember_title")?><!--">--><?//echo GetMessage("auth_form_comp_otp_remember")?><!--</label></td>-->
<!--		</tr>-->
<?//endif?>
<!--		<tr>-->
<!--			<td colspan="2"><input type="submit" name="Login" value="--><?php //=GetMessage("AUTH_LOGIN_BUTTON")?><!--" /></td>-->
<!--		</tr>-->
<!--		<tr>-->
<!--			<td colspan="2"><noindex><a href="--><?php //=$arResult["AUTH_LOGIN_URL"]?><!--" rel="nofollow">--><?//echo GetMessage("auth_form_comp_auth")?><!--</a></noindex><br /></td>-->
<!--		</tr>-->
<!--	</table>-->
<!--</form>-->
<!---->
<?//
//else:
//?>
<!---->
<!--<form action="--><?php //=$arResult["AUTH_URL"]?><!--">-->
<!--	<table width="95%">-->
<!--		<tr>-->
<!--			<td align="center">-->
<!--				--><?php //=$arResult["USER_NAME"]?><!--<br />-->
<!--				[--><?php //=$arResult["USER_LOGIN"]?><!--]<br />-->
<!--				<a href="--><?php //=$arResult["PROFILE_URL"]?><!--" title="--><?php //=GetMessage("AUTH_PROFILE")?><!--">--><?php //=GetMessage("AUTH_PROFILE")?><!--</a><br />-->
<!--			</td>-->
<!--		</tr>-->
<!--		<tr>-->
<!--			<td align="center">-->
<!--			--><?//foreach ($arResult["GET"] as $key => $value):?>
<!--				<input type="hidden" name="--><?php //=$key?><!--" value="--><?php //=$value?><!--" />-->
<!--			--><?//endforeach?>
<!--			--><?php //=bitrix_sessid_post()?>
<!--			<input type="hidden" name="logout" value="yes" />-->
<!--			<input type="submit" name="logout_butt" value="--><?php //=GetMessage("AUTH_LOGOUT_BUTTON")?><!--" />-->
<!--			</td>-->
<!--		</tr>-->
<!--	</table>-->
<!--</form>-->
<?//endif?>
<!--</div>-->
