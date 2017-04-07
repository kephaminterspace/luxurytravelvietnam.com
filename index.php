<?php
$message = '';
if(isset($_POST['first_name'])) {

	function gen_uuid() {
		return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
			// 32 bits for "time_low"
			mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

			// 16 bits for "time_mid"
			mt_rand( 0, 0xffff ),

			// 16 bits for "time_hi_and_version",
			// four most significant bits holds version number 4
			mt_rand( 0, 0x0fff ) | 0x4000,

			// 16 bits, 8 bits for "clk_seq_hi_res",
			// 8 bits for "clk_seq_low",
			// two most significant bits holds zero and one for variant DCE1.1
			mt_rand( 0, 0x3fff ) | 0x8000,

			// 48 bits for "node"
			mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
		);
	}

	$arr = array(
		'properties' => array(
			array(
				'property' => 'lastname',
				'value' => $_POST['last_name']
			),
			array(
				'property' => 'firstname',
				'value' => $_POST['first_name']
			),
			array(
				'property' => 'new_email',
				'value' => $_POST['email']
			),
			array(
				'property' => 'phone',
				'value' => $_POST['telephone']
			),
			array(
				'property' => 'destinations',
				'value' => implode(', ', $_POST['destinations'])
			),
			array(
				'property' => 'duration',
				'value' => $_POST['duration']
			),
			array(
				'property' => 'date',
				'value' => $_POST['date']
			),
			array(
				'property' => 'flexible',
				'value' => $_POST['flexible']
			),
			array(
				'property' => 'adult',
				'value' => $_POST['adult']
			),
			array(
				'property' => 'children_above',
				'value' => $_POST["children_above"]
			),
			array(
				'property' => 'children_below',
				'value' => $_POST['children_below']
			),
			array(
				'property' => 'travel_style',
				'value' => implode(', ', $_POST['travel_style'])
			),
			array(
				'property' => 'start',
				'value' => $_POST['start']
			),
			array(
				'property' => 'budget',
				'value' => $_POST['budget']
			),
			array(
				'property' => 'holiday',
				'value' => $_POST["holiday"]
			)
		)
	);
	$post_json = json_encode($arr);

	$endpoint = "https://api.hubapi.com/contacts/v1/contact/?hapikey=79fe912a-8818-4f9d-b171-accc12bf4ec0";
	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
	@curl_setopt($ch, CURLOPT_URL, $endpoint);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = @curl_exec($ch);
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
	$curl_errors = curl_error($ch);
	@curl_close($ch);
	if ($status_code == 200) {

		require("class.phpmailer.php");
		require("class.smtp.php");
		$mail = new PHPMailer();
		$mail->IsSMTP(); // send via SMTP
//		$mail->CharSet  = "utf-8";
		$mail->Host = "smtp.sendgrid.net"; // SMTP servers
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Username = "busviet"; // SMTP username
		$mail->Password = "123@123a"; // SMTP password
		$mail->From = "sales@luxurytravelvietnam.com";
		$mail->FromName = "Luxury Travel ";
		$mail->AddAddress("tranphucntt@gmail.com","Thanh vien"); //$email là địa chỉ email mà bạn muốn gởi
//		$mail->addCC('marketing3@luxurytravelvietnam.com');
		$mail->AddReplyTo("sales@luxurytravelvietnam.com");
		$mail->WordWrap = 50; // set word wrap
		$mail->IsHTML(true); // send as HTML

		ob_start();
		?>

		<div id=":li" class="ii gt adP adO"><div id=":lj" class="a3s aXjCH m15b23cc711639dd5"><u></u>

				<div marginwidth="0" marginheight="0" style="margin:0;padding:0;font-family:Arial,sans-serif;line-height:1.3em">

					<table class="m_8382415399398585989wrapper" style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323;font-size:14px;background-color:#dcd8d4;width:100%;margin:0;padding:50px 0 50px 0" height="100%" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
							<td style="font-family:Arial,sans-serif;line-height:1.3em" valign="top" align="center">


								<table class="m_8382415399398585989main-body" style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323;border-radius:5px!important;overflow:hidden;background-color:#ffffff;border:1px solid #c6c2bf;width:700px" cellspacing="0" cellpadding="0" border="0">
									<tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
										<td style="font-family:Arial,sans-serif;line-height:1.3em" valign="top" align="center">


											<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
													<td class="m_8382415399398585989template_header" style="font-family:Arial;line-height:1.3em;background-color:#ffffff;color:#737373;border-top-left-radius:2px!important;border-top-right-radius:2px!important;border-bottom:1px solid #f2f2f2;font-weight:bold;vertical-align:middle;text-align:center;padding:16.666666666667px 23.076923076923px">
														<a href="http://www.dyoss.com" border="0" style="color:#737373!important;text-decoration:none;font-weight:normal;font-size:13px;margin:0 0 0 12px" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=vi&amp;q=http://www.dyoss.com&amp;source=gmail&amp;ust=1491158404926000&amp;usg=AFQjCNGxXIcb9SNjiOVi0-ucLYrT3_IdXg">
															<img src="https://ci4.googleusercontent.com/proxy/SUCfr7JauHBBXyruSovIonukC40wBMHNAO4fFTL7o-gjNWix7TjCRzecaRVjH5Ix9GD4B4PAYRweQvt9KYufBTRrV2rsKiSbSJDmnDAC=s0-d-e1-ft#http://www.dyoss.com/wp-content/uploads/2016/07/logo.png" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize" class="CToWUd"></a>

													</td>
												</tr></tbody></table>

										</td>
									</tr>
									<tr style="font-family:Arial,sans-serif;line-height:1.3em">
										<td style="font-family:Arial,sans-serif;line-height:1.3em" valign="top" align="left">



											<table id="m_8382415399398585989template_body" style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
													<td class="m_8382415399398585989body_content" style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323;background-color:#ffffff" valign="top">



														<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																<td class="m_8382415399398585989body_content_inner" style="font-family:Arial;line-height:1.3em;text-align:left;padding-left:55px;padding-right:55px;padding-top:30px;padding-bottom:30px" valign="top">
																	<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																			<td class="m_8382415399398585989top_content_container" style="font-family:Arial,sans-serif;line-height:1.3em;padding:22px 0 22px 0" valign="top">


																				<div class="m_8382415399398585989top_heading" style="font-family:Arial,sans-serif;font-size:22px;text-align:left;font-weight:bold">
																					<p style="margin:.6em 0">Đơn hàng của <span class="m_8382415399398585989ec_shortcode m_8382415399398585989ec_firstname">Pham van Ke</span> đang được
																						xử lý</p>
																				</div>

																				<div class="m_8382415399398585989top_paragraph" style="font-family:Arial,sans-serif;text-align:left;margin:9px 0">
																					<p style="margin:.6em 0">Cảm ơn <span class="m_8382415399398585989ec_shortcode m_8382415399398585989ec_firstname">Pham van Ke</span> đã đặt hàng
																						tại Dyoss.com. Chúng tôi đã nhận được đơn hàng <span class="m_8382415399398585989ec_shortcode m_8382415399398585989ec_order"><a href="http://www.dyoss.com/my-account/view-order/9327" style="color:#232323;text-decoration:underline;font-weight:normal" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=vi&amp;q=http://www.dyoss.com/my-account/view-order/9327&amp;source=gmail&amp;ust=1491158404926000&amp;usg=AFQjCNHZUITGDBnaCSaaIYEUer0LlkMe2A">#9327</a>
<span class="m_8382415399398585989ec_datetime">(<time datetime="2017-03-31T16:56:16+00:00">31/03/2017</time>)</span></span>
																						của <span class="m_8382415399398585989ec_shortcode m_8382415399398585989ec_firstname">Pham van Ke</span> và
																						sẽ xử lý trong thời gian sớm nhất.</p>
																					<p style="margin:.6em 0">Xin cảm ơn một lần nữa,<br>
																						Dyoss team,</p>
																				</div>

																				<div class="m_8382415399398585989top_paragraph" style="font-family:Arial,sans-serif;text-align:left;margin:9px 0">
																					<p style="margin:.6em 0">Thanh toán khi nhận
																						hàng</p>

																				</div>

																			</td>
																		</tr></tbody></table>
																	<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																			<td class="m_8382415399398585989top_content_container" style="font-family:Arial,sans-serif;line-height:1.3em;padding:22px 0 22px 0">

																				<table class="m_8382415399398585989special-title-holder" style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																						<td style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px">

																							<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																									<td class="m_8382415399398585989header_content_h2_space_before" style="height:3px;font-size:0px;font-family:Arial,sans-serif;line-height:1.3em">s</td>
																								</tr></tbody></table>
																							<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																									<td style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px" width="50%">
																										<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" height="100%" cellspacing="0" cellpadding="0" width="100%" border="0">
																											<tbody><tr style="height:50%;font-family:Arial,sans-serif;line-height:1.3em" height="50%">
																												<td style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px">&nbsp;</td>
																											</tr>
																											<tr style="height:50%;font-family:Arial,sans-serif;line-height:1.3em" height="50%">
																												<td class="m_8382415399398585989header_content_h2_border" style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px;border-top:2px solid #282828"></td>
																											</tr>
																											</tbody></table>
																									</td>
																									<td style="padding-right:6px;padding-left:6px;font-family:Arial,sans-serif;line-height:1.3em;font-size:14px;font-weight:bold;color:#232323;text-decoration:none;text-transform:uppercase;margin:0;padding:0px 5px;white-space:nowrap" class="m_8382415399398585989header_content_h2" width="1%">
																										Chi&nbsp;tiết&nbsp;đơn&nbsp;hàng								</td>
																									<td style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px" width="50%">
																										<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" height="100%" cellspacing="0" cellpadding="0" width="100%" border="0">
																											<tbody><tr style="height:50%;font-family:Arial,sans-serif;line-height:1.3em" height="50%">
																												<td style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px">&nbsp;</td>
																											</tr>
																											<tr style="height:50%;font-family:Arial,sans-serif;line-height:1.3em" height="50%">
																												<td class="m_8382415399398585989header_content_h2_border" style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px;border-top:2px solid #282828"></td>
																											</tr>
																											</tbody></table>
																									</td>
																								</tr></tbody></table>
																							<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																									<td class="m_8382415399398585989header_content_h2_space_after" style="height:3px;font-family:Arial,sans-serif;line-height:1.3em;font-size:1px"></td>
																								</tr></tbody></table>
																						</td>
																					</tr></tbody></table>
																				<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																						<td class="m_8382415399398585989order-table-heading" style="text-align:left;padding:12px 0 6px;font-family:Arial,sans-serif;line-height:1.3em">
						<span class="m_8382415399398585989highlight" style="color:#988255;text-decoration:none">
    Số Đơn Hàng:						</span>
																							9327					</td>
																						<td class="m_8382415399398585989order-table-heading" style="text-align:right;padding:12px 0 6px;font-family:Arial,sans-serif;line-height:1.3em">
						<span class="m_8382415399398585989highlight" style="color:#988255;text-decoration:none">
    Ngày đặt:						</span>
																							<time datetime="2017-03-31T16:56:16+00:00">31/03/2017</time>
																						</td>
																					</tr></tbody></table>
																				<table class="m_8382415399398585989order_items_table" style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323;margin:15px 0;overflow:hidden;width:100%;background:none;border-bottom:1px dotted #c9c9c9" cellspacing="0" cellpadding="0" border="0">
																					<thead><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																						<th scope="col" class="m_8382415399398585989order_items_table_th_style m_8382415399398585989order_items_table_td
order_items_table_td_left m_8382415399398585989order_items_table_th_bg_color
order_items_table_td_top" style="font-family:Arial,sans-serif;text-align:left;text-transform:uppercase;font-size:10px;font-weight:normal;padding:9px 11.7px 8px 13.5px;margin:0;line-height:.8em;background-color:none;border-top:1px dotted #c9c9c9;padding-left:0px">Sản phẩm</th>
																						<th scope="col" class="m_8382415399398585989order_items_table_th_style
order_items_table_td m_8382415399398585989order_items_table_th_bg_color
order_items_table_td_top" style="font-family:Arial,sans-serif;text-align:left;text-transform:uppercase;font-size:10px;font-weight:normal;padding:9px 11.7px 8px 13.5px;margin:0;line-height:.8em;background-color:none;border-top:1px dotted #c9c9c9">Số lượng</th>
																						<th scope="col" class="m_8382415399398585989order_items_table_th_style
order_items_table_td m_8382415399398585989order_items_table_td_right
order_items_table_th_bg_color m_8382415399398585989order_items_table_td_top" style="text-align:right;font-family:Arial,sans-serif;text-transform:uppercase;font-size:10px;font-weight:normal;padding:9px 11.7px 8px 13.5px;margin:0;line-height:.8em;background-color:none;border-top:1px dotted #c9c9c9;padding-right:0px">Giá</th>
																					</tr></thead>
																					<tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																						<td class="m_8382415399398585989order_items_table_td_style m_8382415399398585989order_items_table_td
order_items_table_td_left m_8382415399398585989order_items_table_td_product" style="font-family:Arial,sans-serif;line-height:1.3em;text-align:left;vertical-align:middle;word-wrap:break-word;font-size:14px;padding:9px 11.7px 8px 13.5px;border-top:1px dotted #c9c9c9;padding-top:17.1px;padding-bottom:17.1px;padding-left:0px">
																							Gemini - Song Tử<br><small>Mã Thiết kế:
																								TKA16568,</small><br><small>Size: 36mm, <br>
																								Màu Dây: Marine, <br>
																								Kim: Kim bạc</small>
																						</td>
																						<td class="m_8382415399398585989order_items_table_td_style m_8382415399398585989order_items_table_td
order_items_table_td m_8382415399398585989order_items_table_td_product" style="font-family:Arial,sans-serif;line-height:1.3em;text-align:left;vertical-align:middle;word-wrap:break-word;font-size:14px;padding:9px 11.7px 8px 13.5px;border-top:1px dotted #c9c9c9;padding-top:17.1px;padding-bottom:17.1px">
																							1			</td>
																						<td class="m_8382415399398585989order_items_table_td_style m_8382415399398585989order_items_table_td
order_items_table_td_right m_8382415399398585989order_items_table_td_product" style="text-align:right;font-family:Arial,sans-serif;line-height:1.3em;vertical-align:middle;word-wrap:break-word;font-size:14px;padding:9px 11.7px 8px 13.5px;border-top:1px dotted #c9c9c9;padding-top:17.1px;padding-bottom:17.1px;padding-right:0px">
																							<span class="m_8382415399398585989amount">1.520.000đ</span>			</td>
																					</tr></tbody>
																					<tfoot>
																					<tr style="font-family:Arial,sans-serif;line-height:1.3em">
																						<th scope="row" colspan="2" class="m_8382415399398585989order_items_table_totals_style
order_items_table_td m_8382415399398585989order_items_table_td_left
order_items_table_th_bg_color" style="background-color:none;font-family:Arial,sans-serif;text-align:left;text-transform:uppercase;font-size:14px;line-height:1em;padding:9px 11.7px 8px 13.5px;border-top:1px dotted #c9c9c9;padding-left:0px">
																							Tạm tính:								</th>
																						<td class="m_8382415399398585989order_items_table_totals_style m_8382415399398585989order_items_table_td
order_items_table_td_right m_8382415399398585989order_items_table_th_bg_color" style="text-align:right;font-family:Arial,sans-serif;line-height:1em;background-color:none;text-transform:uppercase;font-size:14px;padding:9px 11.7px 8px 13.5px;border-top:1px dotted #c9c9c9;padding-right:0px">
																							<span class="m_8382415399398585989amount">1.520.000đ</span>								</td>
																					</tr>
																					<tr style="font-family:Arial,sans-serif;line-height:1.3em">
																						<th scope="row" colspan="2" class="m_8382415399398585989order_items_table_totals_style
order_items_table_td m_8382415399398585989order_items_table_td_left
order_items_table_th_bg_color" style="background-color:none;font-family:Arial,sans-serif;text-align:left;text-transform:uppercase;font-size:14px;line-height:1em;padding:9px 11.7px 8px 13.5px;border-top:1px dotted #c9c9c9;padding-left:0px">
																							Phí giao:								</th>
																						<td class="m_8382415399398585989order_items_table_totals_style m_8382415399398585989order_items_table_td
order_items_table_td_right m_8382415399398585989order_items_table_th_bg_color" style="text-align:right;font-family:Arial,sans-serif;line-height:1em;background-color:none;text-transform:uppercase;font-size:14px;padding:9px 11.7px 8px 13.5px;border-top:1px dotted #c9c9c9;padding-right:0px">
																							<span class="m_8382415399398585989amount">35.000đ</span>&nbsp;<small class="m_8382415399398585989shipped_via">qua Khu vực 3 Miền Bắc</small>								</td>
																					</tr>
																					<tr style="font-family:Arial,sans-serif;line-height:1.3em">
																						<th scope="row" colspan="2" class="m_8382415399398585989order_items_table_totals_style
order_items_table_td m_8382415399398585989order_items_table_td_left
order_items_table_th_bg_color" style="background-color:none;font-family:Arial,sans-serif;text-align:left;text-transform:uppercase;font-size:14px;line-height:1em;padding:9px 11.7px 8px 13.5px;border-top:1px dotted #c9c9c9;padding-left:0px">
																							Phương thức thanh toán:								</th>
																						<td class="m_8382415399398585989order_items_table_totals_style m_8382415399398585989order_items_table_td
order_items_table_td_right m_8382415399398585989order_items_table_th_bg_color" style="text-align:right;font-family:Arial,sans-serif;line-height:1em;background-color:none;text-transform:uppercase;font-size:14px;padding:9px 11.7px 8px 13.5px;border-top:1px dotted #c9c9c9;padding-right:0px">
																							Thanh toán tận nơi								</td>
																					</tr>
																					<tr style="font-family:Arial,sans-serif;line-height:1.3em">
																						<th scope="row" colspan="2" class="m_8382415399398585989order_items_table_totals_style
order_items_table_td m_8382415399398585989order_items_table_td_left
order_items_table_th_bg_color" style="background-color:none;font-family:Arial,sans-serif;text-align:left;text-transform:uppercase;font-size:14px;line-height:1em;padding:9px 11.7px 8px 13.5px;border-top:1px dotted #c9c9c9;padding-left:0px">
																							Tổng cộng:								</th>
																						<td class="m_8382415399398585989order_items_table_totals_style m_8382415399398585989order_items_table_td
order_items_table_td_right m_8382415399398585989order_items_table_th_bg_color" style="text-align:right;font-family:Arial,sans-serif;line-height:1em;background-color:none;text-transform:uppercase;font-size:14px;padding:9px 11.7px 8px 13.5px;border-top:1px dotted #c9c9c9;padding-right:0px">
																							<span class="m_8382415399398585989amount">1.555.000đ</span>								</td>
																					</tr>
																					</tfoot>
																				</table>
																			</td>
																		</tr></tbody></table>
																	<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																			<td class="m_8382415399398585989top_content_container" style="font-family:Arial,sans-serif;line-height:1.3em;padding:22px 0 22px 0">

																				<table class="m_8382415399398585989special-title-holder" style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																						<td style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px">

																							<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																									<td class="m_8382415399398585989header_content_h2_space_before" style="font-size:0px;font-family:Arial,sans-serif;line-height:1.3em;height:6px">s</td>
																								</tr></tbody></table>
																							<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																									<td style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px" width="50%">
																										<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" height="100%" cellspacing="0" cellpadding="0" width="100%" border="0">
																											<tbody><tr style="height:50%;font-family:Arial,sans-serif;line-height:1.3em" height="50%">
																												<td style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px">&nbsp;</td>
																											</tr>
																											<tr style="height:50%;font-family:Arial,sans-serif;line-height:1.3em" height="50%">
																												<td class="m_8382415399398585989header_content_h2_border" style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px;border-top:2px solid #282828"></td>
																											</tr>
																											</tbody></table>
																									</td>
																									<td style="padding-right:6px;padding-left:6px;font-family:Arial,sans-serif;line-height:1.3em;font-size:14px;font-weight:bold;color:#232323;text-decoration:none;text-transform:uppercase;margin:0;padding:0px 5px;white-space:nowrap" class="m_8382415399398585989header_content_h2" width="1%">
																										Thông&nbsp;tin&nbsp;khách&nbsp;hàng								</td>
																									<td style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px" width="50%">
																										<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" height="100%" cellspacing="0" cellpadding="0" width="100%" border="0">
																											<tbody><tr style="height:50%;font-family:Arial,sans-serif;line-height:1.3em" height="50%">
																												<td style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px">&nbsp;</td>
																											</tr>
																											<tr style="height:50%;font-family:Arial,sans-serif;line-height:1.3em" height="50%">
																												<td class="m_8382415399398585989header_content_h2_border" style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px;border-top:2px solid #282828"></td>
																											</tr>
																											</tbody></table>
																									</td>
																								</tr></tbody></table>
																							<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																									<td class="m_8382415399398585989header_content_h2_space_after" style="font-family:Arial,sans-serif;line-height:1.3em;font-size:1px;height:18px"></td>
																								</tr></tbody></table>
																						</td>
																					</tr></tbody></table>
																				<p style="margin:.6em 0"><strong>Email:</strong>
																					<a href="mailto:tranphucntt@gmail.com" target="_blank">tranphucntt@gmail.com</a></p>
																				<p style="margin:.6em 0"><strong>Điện thoại:</strong>
																					1635243892</p>


																				<table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
																						<td class="m_8382415399398585989order_items_table_column_pading_first" style="font-family:Arial,sans-serif;line-height:1.3em;padding-left:0px;padding-right:27.5px" valign="top" width="50%">

																							<p style="margin:.6em 0"><strong>Địa chỉ thanh
																									toán:</strong></p>
																							<p style="margin:.6em 0">Pham van Ke<br>159 phao dai lang<br>P.
																								Láng Hạ<br>Đống Đa<br>Hà Nội</p>

																						</td>
																						<td class="m_8382415399398585989order_items_table_column_pading_last" style="font-family:Arial,sans-serif;line-height:1.3em;padding-left:27.5px;padding-right:0px" valign="top" width="50%">

																							<p style="margin:.6em 0"><strong>Địa chỉ giao
																									hàng:</strong></p>
																							<p style="margin:.6em 0">Pham van Ke<br>159 phao dai lang<br>P.
																								Láng Hạ<br>Đống Đa<br>Hà Nội</p>

																						</td>
																					</tr></tbody></table>
																			</td>
																		</tr></tbody></table>
																</td>
															</tr></tbody></table>

													</td>
												</tr></tbody></table>

										</td>
									</tr>
									</tbody></table>
							</td>
						</tr></tbody></table><div class="yj6qo"></div><div class="adL">
					</div></div><div class="adL">


				</div></div></div>

		<?php
		$message = ob_get_clean();
		$subject = 'Your inquiry into ailor-made holidays with Luxury Travel is well received';
		$mail->Subject = $subject;
		$mail->Body = "123";
		$mail->AltBody = "";
		if(!$mail->Send())
		{
			echo "Message was not sent";
			echo "Mailer Error: " . $mail->ErrorInfo;
		}else{
			header('Location: thank.php');
			die();
		}
	}else{
		$message = 'Email đã tồn tại';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Luxury</title>
	<link type="image/x-icon" href="favicon.ico" rel="shortcut icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/resource/custom/roboto.css"/>
	<link rel="stylesheet" type="text/css" href="resources/national/dist/css/bootstrap-formhelpers.css"/>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap-select-1.12.2/dist/css/bootstrap-select.css"/>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap-3.3.7/dist/css/bootstrap.css"/>
	<!--layout-->
	<link rel="stylesheet" type="text/css" href="css/layout/0.body.css"/>
	<link rel="stylesheet" type="text/css" href="css/layout/1.header_banner.css"/>
	<link rel="stylesheet" type="text/css" href="css/layout/2.introduction.css"/>
	<link rel="stylesheet" type="text/css" href="css/layout/3.customer.css"/>
	<link rel="stylesheet" type="text/css" href="css/layout/4.tour.css"/>
	<link rel="stylesheet" type="text/css" href="css/layout/5.benefit.css"/>
	<link rel="stylesheet" type="text/css" href="css/layout/6.procedure.css"/>
	<link rel="stylesheet" type="text/css" href="css/layout/7.form.css"/>
	<link rel="stylesheet" type="text/css" href="css/layout/8.contact.css"/>
	<link rel="stylesheet" type="text/css" href="css/layout/9.footer.css"/>

	<!--element-->
	<!--button-->
	<link rel="stylesheet" type="text/css" href="css/element/button/btn-radius.css"/>
	<link rel="stylesheet" type="text/css" href="css/element/button/btn-circle.css"/>
	<link rel="stylesheet" type="text/css" href="css/element/button/btn-arrow.css"/>
	<link rel="stylesheet" type="text/css" href="css/element/button/btn-rectangle.css"/>
	<!--box-->
	<link rel="stylesheet" type="text/css" href="css/element/box/box-introduction.css"/>
	<link rel="stylesheet" type="text/css" href="css/element/box/box-customer.css"/>
	<link rel="stylesheet" type="text/css" href="css/element/box/box-tour.css"/>
	<link rel="stylesheet" type="text/css" href="css/element/box/box-benefit.css"/>
	<link rel="stylesheet" type="text/css" href="css/element/box/box-procedure.css"/>
	<!--line-->
	<link rel="stylesheet" type="text/css" href="css/element/line/line-vertical.css"/>

	<!--form-->
	<link rel="stylesheet" type="text/css" href="css/element/form/input.css"/>
	<link rel="stylesheet" type="text/css" href="css/element/form/input_checkbox.css"/>
	<!--map-->
	<link rel="stylesheet" type="text/css" href="css/element/map/map.css"/>

	<!--customize-->
	<!--1.header_banner-->
	<link rel="stylesheet" type="text/css" href="css/customize/1.header_banner/2.banner/button-circle_c.css"/>
	<link rel="stylesheet" type="text/css" href="css/customize/1.header_banner/2.banner/button-radius_c.css"/>
	<link rel="stylesheet" type="text/css" href="css/customize/1.header_banner/1.header/logo.css"/>
	<link rel="stylesheet" type="text/css" href="css/customize/1.header_banner/1.header/menu.css"/>
	<!--2.introduction-->
	<link rel="stylesheet" type="text/css" href="css/customize/2.introduction/box-introduction_c.css"/>
	<!--4.tour-->
	<link rel="stylesheet" type="text/css" href="css/customize/4.tour/box-customer_c.css"/>
	<!--5.benefit-->
	<link rel="stylesheet" type="text/css" href="css/customize/5.benefit/btn-arrow_c.css"/>
	<!--6.procedure-->
	<link rel="stylesheet" type="text/css" href="css/customize/6.procedure/box-procedure_c.css"/>

	<!--modul-->
	<link rel="stylesheet" href="module/phone_country/build/css/intlTelInput.css">

	<!--resource-->
	<link rel="stylesheet" href="css/resource/font_awesome/css/font-awesome.min.css">

	<!--config-->
	<link rel="stylesheet" type="text/css" href="css/config/style.css"/>

	<!--custom-->
	<link rel="stylesheet" type="text/css" href="css/resource/custom/style.css"/>
</head>
<body>
<!--1.header_banner-->
<div id="header-banner">
	<div class="container">
		<!--top 1.header_banner-->
		<div class="top">
			<!--logo luxury-->
			<div class="logo">
				<img src="img/1.header_banner/1.header/luxury_travel_logo.png" alt="luxury_travel_logo">
			</div>
			<!--menu-->
			<div class="menu">
				<div>
					<i class="material-icons">menu</i>
				</div>
			</div>
		</div>

		<!--heading-->
		<div class="heading">
			<h2>We're not a tour guide</h2>
			<h1>We create unique experiences</h1>
		</div>

		<!--button-->
		<div class="button">
			<a class="btn-radius">Design my trip</a>

		</div>

		<!--button circle-->
		<div class="button-circle">
			<div class="button-circle2">
				<a class="btn-circle" href="#form">
					<i class="material-icons">keyboard_arrow_down</i>
				</a>
			</div>
		</div>
	</div>
</div>

<!--2.introduction-->
<div id="introduction">
	<div class="container">
		<!--welcome-->
		<div class="welcome">
			<h2>Welcome to Luxury Travel</h2>
			<p>We, a local travel agency, offer travel exclusively to Southeast Asia, one of the world’s most diverse and compelling region.</p>
			<p>We are proud to report that we have 99% sastification rate with much of our business</p>
			<p>coming from referral and recommendations.</p>
			<hr>
		</div>

		<!--group introduction-->
		<div class="group-introduction">
			<div class="row">
				<!--1-->
				<div class="col-md-4 box-introduction">
					<div class="icon">
						<img src="img/custom/2.introduction/search-on-map-ultrathin-sign.png" alt="search_icon"/>
					</div>
					<div class="content">
						<h3>We are local tour operator</h3>
						<p>We are pleased to bring to you and your loved ones the best holidays at best prices without any middleman cost.</p>
					</div>
				</div>

				<!--2-->
				<div class="col-md-4 box-introduction">
					<div class="icon">
						<img src="img/custom/2.introduction/global-geolocalization-ultrathin-interface-sign.png" alt="global_icon"/>
					</div>
					<div class="content">
						<h3>We are travel expert</h3>
						<p>With more than 12 years of experiences, our knowledgeable staffs will advise you the most suitable and wonderful itineraries.</p>
					</div>
				</div>

				<!--3-->
				<div class="col-md-4 box-introduction">
					<div class="icon">
						<img src="img/custom/2.introduction/logistics-international-service-by-airplane.png" alt="airplane_icon"/>
					</div>
					<div class="content">
						<h3>We create unique experiences</h3>
						<p>We understand that you are unique and we try our best to help you have unique journey.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--3.customer-->
<div id="customer">
	<div class="container">
		<div class="box-customer">
			<div  id="content_customer" >
			</div>
			<div class="slide_topic">
				<div id="li_1" onclick="showSlide(1, '#li_1');" class="li"></div>
				<div id="li_2"  onclick="showSlide(2, '#li_2');" class="li active"></div>
				<div id="li_3"  onclick="showSlide(3, '#li_3');" class="li"></div>
			</div>
		</div>
	</div>
</div>

<!--4.tour-->
<div id="tour" >
	<div class="container">
		<div class=" heading">
			<h2>Hot Summer Deals</h2>
			<div class="hr"></div>
			<p>It’s time to discover this compelling regions. We ensure to offer the best services with our extensive local knowledge and passionate.</p>
		</div>
		<!--box-tour-->

		<div class="group-tour">
			<div class="row">
				<div class="col-lg-6">
					<!--1-->
					<div class="box-tour">
						<div class="cover">
							<div class="left">
								<img src="img/4.tour/img4.jpg" alt="tour_escape_hot_time_to_vietnam"/>
							</div>
							<div class="right">
								<h3>Escape hot time to Vietnam</h3>
								<div class="time">
									<div class="icon">
										<img src="img/custom/4.tour/calendar-page-empty.png" alt="calenda"/>
									</div>
									<p>18 days</p>
									<p>17 nights</p>
								</div>
								<p>Discover the best of Vietnam and enjoy wonderful time relaxing on Nha Trang beach</p>
								<div class="price">
									<p>from 2293$</p>
								</div>
								<div class="button">
									<a class="btn-arrow">Discover  >></a>
								</div>
							</div>
							<div class="clear-fix"></div>
						</div>
					</div>

					<!--2-->
					<div class="box-tour">
						<div class="cover">
							<div class="left">
								<img src="img/4.tour/img2.jpg" alt="tour_best_of_vietnam_cambodia"/>
							</div>
							<div class="right">
								<h3>Best of Vietnam Cambodia </h3>
								<div class="time">
									<div class="icon">
										<img src="img/custom/4.tour/calendar-page-empty.png" alt="calenda"/>
									</div>
									<p>14 days</p>
									<p>13 nights</p>
								</div>
								<p>Best way to see two countries’ treasures and immerse in local cultures and history </p>
								<div class="price">
									<p>from 2092$</p>
								</div>
								<div class="button">
									<a class="btn-arrow">Discover  >></a>
								</div>
							</div>
							<div class="clear-fix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<!--3-->
					<div class="box-tour">
						<div class="cover">
							<div class="left">
								<img src="img/4.tour/img1.jpg" alt="tour_vietnam_authentic_18_days"/>
							</div>
							<div class="right">
								<h3>Explore Vietnam from authentic experiences to relaxation </h3>
								<div class="time">
									<div class="icon">
										<img src="img/custom/4.tour/calendar-page-empty.png" alt="calenda"/>
									</div>
									<p>18 days</p>
									<p>17 nights</p>
								</div>
								<p>Experience the true sights of Vietnam and have wonderful time your way </p>
								<div class="price">
									<p>from 2579$</p>
								</div>
								<div class="button">
									<a class="btn-arrow">Discover  >></a>
								</div>
							</div>
							<div class="clear-fix"></div>
						</div>

					</div>

					<!--4-->
					<div class="box-tour">
						<div class="cover">
							<div class="left">
								<img src="img/4.tour/img2.jpg" alt="tour_highlights_of_vietnam"/>
							</div>
							<div class="right">
								<h3>Highlights of Vietnam </h3>
								<div class="time">
									<div class="icon">
										<img src="img/custom/4.tour/calendar-page-empty.png" alt="calenda"/>
									</div>
									<p>14 days</p>
									<p>13 nights</p>
								</div>
								<p>Discover Vietnam from North to South for an exciting and enriching trip</p>
								<div class="price">
									<p>from 2161$</p>
								</div>
								<div class="button">
									<a class="btn-arrow">Discover  >></a>
								</div>
							</div>
							<div class="clear-fix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--5.benefit-->
<div id="benefit" class="container">
	<div class="row">
		<!--image-->
		<div class="col-lg-6 left">
			<img src="img/5.benefit/100_private tailormade.jpg" alt="car"/>
		</div>

		<!--benefit-->
		<div class="col-lg-6 right">
			<h2>100% private tailor-made holidays</h2>
			<!--box-benefit-->
			<div class="box-benefit">
				<!--1-->
				<div class="item">
					<div class="left">
						<div class="number">
							1
						</div>
					</div>
					<div class="text">
						<p>Flexible itinerary: The holiday is designed around your interest, time, need and budget. You are the one who decide when and where to go, where to stay.</p>
					</div>
				</div>

				<!--2-->
				<div class="item">
					<div class="left">
						<div class="number">
							2
						</div>
					</div>
					<div class="text">
						<p>Personal services: You are more comfortable with private car and guides as well as support services 24 hours per day.</p>
					</div>
				</div>

				<!--3-->
				<div class="item">
					<div class="left">
						<div class="number">
							3
						</div>
					</div>
					<div class="text">
						<p>Unique Experiences: You have more chance to discover the destination your way, avoid shopping stops and take part in your favorite activities.</p>
					</div>
				</div>
			</div>

			<div class="button">
				<a class="btn-arrow">Tailor-make my holiday>></a>
			</div>
		</div>
	</div>
</div>

<!--6.procedure-->
<div id="procedure">
	<div class="heading">
		<h2>"Always reliable and trustful"</h2>
		<p>Begin your dream holiday with very simple steps. We keep improving our processes to reduce your time and cost but bring back the highest value.</p>
	</div>
	<!--group-procedure-->
	<div class="container group-procedure">
		<div class="row">
			<!--box-procedure-->
			<!--1-->
			<div class="xcot-five box-procedure">
				<div class="image">
					<div class="circle">
						<img src="img/6.procedure/logistics-verification-square-ultrathin-outline.png" alt="logistics"/>
						<div class="number">1</div>
					</div>
					<p>Send us your inquiry</p>
				</div>
			</div>

			<!--line-vertical-->
			<div class="line-vertical"></div>


			<!--2-->
			<div class="xcot-five box-procedure">
				<div class="image">
					<div class="circle">
						<img src="img/6.procedure/delivery-time.png" alt="delivery"/>
						<div class="number">2</div>
					</div>
					<p>Get the first draft
						within 24 hours</p>
				</div>
			</div>

			<!--line-vertical-->
			<div class="line-vertical"></div>


			<!--3-->
			<div class="xcot-five box-procedure active">
				<div class="image">
					<div class="circle">
						<img src="img/6.procedure/settings.png" alt="settings"/>
						<div class="number">3</div>
					</div>
					<p>Customize your holiday</p>
				</div>
			</div>

			<!--line-vertical-->
			<div class="line-vertical"></div>
			<!--line-horizontal-->


			<!--4-->
			<div class="xcot-five box-procedure">
				<div class="image">
					<div class="circle">
						<img src="img/6.procedure/profits.png" alt="profits"/>
						<div class="number">4</div>
					</div>
					<p>Make payment through secure system</p>
				</div>
			</div>

			<!--line-vertical-->
			<div class="line-vertical"></div>
			<!--line-horizontal-->


			<!--5-->
			<div class="xcot-five box-procedure">
				<div class="image">
					<div class="circle">
						<img src="img/6.procedure/sunbed.png" alt="sunbed"/>
						<div class="number">5</div>
					</div>
					<p>Get ready for your dream trips</p>
				</div>
			</div>
		</div>

		<div class="row">
			<!--line-horizontal-->
			<div class="xcot-five">
				<div class="line-horizontal">
				</div>
			</div>
			<!--line-horizontal-->
			<div class="xcot-five">
				<div class="line-horizontal">
				</div>
			</div>
			<!--line-horizontal-->
			<div class="xcot-five">
				<div class="line-horizontal">
				</div>
			</div>
			<!--line-horizontal-->
			<div class="xcot-five">
				<div class="line-horizontal">
				</div>
			</div>
			<!--line-gia-->
			<div class="xcot-five">
			</div>
		</div>

	</div>
</div>
</div>


<!--7.form-->
<div id="form">
	<div class="background"></div>
	<div class="recommendation">
		<div class="head">
			<img src="img/7.form/avatar.png" alt="avatar"/>
			<p>﻿Hi, my name is Duong!</p>
		</div>
	</div>
	<div class="text">
		<p>I am Travel Consultant of Luxury Travel. Southeast Asia is the charming land, full of surprises and I believe you will never regret visitng here. Let's make your journey be a blockbuster, you are the main character and create your own story.</p>
		<p>Please fill out the form below and we will reply you within 24 hours.</p>
	</div>
	<!--group-form-->
	<form class="container" method="post" action="index.php#form" id="submit_form" >

		<?php if(isset($message)){ ?>
			<p style="color: red; "> <?php echo $message; ?></p>
		<?php } ?>

		<div class="row">
			<div class="col-md-4">
				<!--last_name-->
				<div class="label">
					<label for="last_name">Last Name</label>
					<p class="red">(*)</p>
				</div>
				<div class="input">
					<input type="text" id="last_name" name="last_name" required oninvalid="setCustomValidity('Last Name is mandatory')" oninput="setCustomValidity('')">
				</div>
			</div>
			<div class="col-md-4">
				<!--first_name-->
				<div class="label">
					<label for="first_name">First Name</label>
					<p class="red">(*)</p>
				</div>
				<div class="input">
					<input type="text" id="first_name" name="first_name" required oninvalid="setCustomValidity('First Name is mandatory')" oninput="setCustomValidity('')">
				</div>
			</div>
			<div class="clear-fix"></div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<!--email-->
				<div class="label">
					<label for="email">Email</label>
					<p class="red">(*)</p>
				</div>
				<div class="input">
					<input type="email" id="email" name="email" required  required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="setCustomValidity('Email not in right format')" oninput="setCustomValidity('')">
				</div>
			</div>
			<div class="col-md-4">
				<!--telephone-->
				<div class="label">
					<label for="phone">Telephone</label>
					<p class="red">(We will call you back for free)</p>
				</div>
				<div class="input">
					<input type="tel" id="phone" name="telephone" >

				</div>
			</div>
			<div class="col-md-4">

				<!--nationality-->
				<!--chua_lam-->
				<div class="label">
					<label for="nationality">Nationality</label>

				</div>
				<div class="input">
					<select  class="form-control bfh-countries custom_input" data-country="US" name="countries"></select>
				</div>
			</div>
			<div class="clear-fix"></div>
		</div>
		<div class="margin15"></div>
		<div class=" row">

			<div class="input">
				<!--destinations-->
				<div class="item label">
					<label for="destinations" required oninvalid="setCustomValidity('Destinations is mandatory')" oninput="setCustomValidity('')">Destinations </label>
					<p class="red">(*)</p>
				</div>
				<!--1.vn-->
				<div class="item">
					<input type="checkbox" id="vietnam" name="destinations[]" value="Vietnam" >
					<label for="vietnam">Vietnam</label>
				</div>

				<!--2.cam-->
				<div class="item">
					<input type="checkbox" id="cambodia" name="destinations[]" value="cambodia" >
					<label for="cambodia">Cambodia</label>

				</div>
				<!--3.lao-->
				<div class="item">
					<input type="checkbox" id="laos" name="destinations[]" value="laos" >
					<label for="laos">Laos</label>

				</div>
				<!--4.mya-->
				<div class="item">
					<input type="checkbox" id="myanmar" name="destinations[]" value="myanmar" >
					<label for="myanmar">Myanmar</label>

				</div>
				<!--5.thai-->
				<div class="item">
					<input type="checkbox" id="thailand" name="destinations[]" value="thailand" >
					<label for="thailand">Thailand</label>

				</div>
			</div>
			<div class="clear-fix"></div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<!--email-->
				<div class="label">
					<label for="duration">Duration of the strip</label>
					<p class="red">(*)</p>
				</div>
				<div class="input">
					<input type="text" id="duration" name="duration" placeholder="14 nights" required oninvalid="setCustomValidity('Duration of the strip is mandatory')" oninput="setCustomValidity('')">
				</div>
			</div>
			<div class="col-md-4">
				<!--email-->
				<div class="label">
					<label for="departure">Departure date</label>
					<p class="red">(*)</p>
				</div>
				<div class="input">
					<div id="date_input" data-name="date" class="bfh-datepicker " data-format="y-m-d" data-date="today" required oninvalid="setCustomValidity('Departure date is mandatory')" oninput="setCustomValidity('')">
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<!--email-->
				<div class="label">
					<label for="flexible">I'm flexible on the date </label>
					<p class="red">(*)</p>
				</div>
				<div class="input">
					<select class="selectpicker" name="flexible">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
			</div>
			<div class="clear-fix"></div>
		</div>
		<div class="row">
			<div class="col-md-8 ">
				<div class="row">
					<div class="col-md-4">
						<!--email-->
						<div class="label">
							<label for="people">The number of people</label>
							<p class="red"></p>
						</div>
						<div class="input">
							<input type="number" placeholder="Adult" id="people" name="adult">
						</div>
					</div>
					<div class="col-md-4">
						<!--email-->
						<div class="label">
							<label >&nbsp;</label>
							<p class="red"></p>
						</div>
						<div class="input">
							<input type="number" placeholder="Children above 12 years old" name="children_above">
						</div>
					</div>
					<div class="col-md-4">
						<!--email-->
						<div class="label">
							<label>&nbsp;</label>
							<p class="red"></p>
						</div>
						<div class="input">
							<input type="number" placeholder="Children below 12 years old" name="children_below">
						</div>
					</div>
				</div>
			</div>
			<div class="clear-fix"></div>
		</div>
		<div class="row ">
			<div class="col-md-4">
				<!--email-->
				<div class="label">
					<label for="travel">Travel Style</label>
					<p class="red">(*)</p>
				</div>
				<div class="input">
					<select class="selectpicker"name="travel_style[]" multiple required oninvalid="setCustomValidity('Travel Style is mandatory')" oninput="setCustomValidity('')">
						<option selected>Beach vacation</option>
						<option selected>Culture</option>
						<option>space 1</option>
						<option>space 2</option>
						<option>space 3</option>
					</select>

				</div>
			</div>
			<div class="col-md-4">
				<!--email-->
				<div class="label">
					<label for="accommodation">Accommodation category</label>
					<p class="red">(*)</p>
				</div>
				<div class="input">
					<select class="selectpicker" name="start">
						<option>1 star</option>
						<option>2 start</option>
						<option>3 start</option>
						<option selected>4 start</option>
						<option>5 start</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<!--email-->
				<div class="label">
					<label for="budget">Budget</label>
					<p class="red"></p>
				</div>
				<div class="input">
					<input type="text" name="budget" placeholder="USD per person" >
				</div>
			</div>
			<div class="clear-fix"></div>
		</div>
		<div class="row ">
			<div class="col-md-12">
				<!--email-->
				<div class="label">
					<label for="holiday">Please let us know your favorite holiday</label>
					<p class="red"></p>
				</div>
				<div class="input">
					<textarea rows="6" id='holiday' name="holiday"></textarea>
				</div>
			</div>
		</div>
		<div class="clear-fix"></div>
		<div class="button inquiry" style="width: 170px;">
			<button  class="btn-rectangle">Send inquiry</button>
		</div>
	</form>
	<!--group-form_chua_xong-->
<!--	<div class="button inquiry">-->
<!--		<a class="btn-rectangle" id="submit_form">Send inquiry</a>-->
<!--	</div>-->

</div>

<!--8.contact-->
<div id="contact">
	<div class="container"><div id="foot_contact"></div></div>
	<div class="wrap">
		<!--contact-->
		<div class="col-lg-6 contact">
			<div id="contact_left">
				<h2>Contact Us</h2>
				<p>Founded in 2004, Luxury Travel specializes in high quality  Vacation Packages with an emphasis on the authentic travel experiences. Luxury Travel advisors follow a specially devised training program to develop their expertise in all aspects of travel, as well perfect their customer care skills.</p>
				<div class="address">
					<p><strong>Address:</strong>#5, Nguyen Truong To str, Ba Dinh Dist, Hanoi, Vietnam</p>
					<p><strong>Phone:</strong>+84 4 3927 4120</p>
					<p><strong>Email:</strong>sales@luxurytravelvietnam.com</p>
					<p><strong>Fax:</strong>+84 4 3927 4120</p>
				</div>
			</div>
		</div>
		<!--map-->
		<div class="col-lg-6" id="map">
		</div>
	</div>
</div>

<!--9.footer-->
<div id="footer">
	<div class="wrap">
		<div class="container">
			<!--copyright-->
			<div class="col-lg-6 copyright">
				<p>Copyright 2017 © www.luxurytravel.co - All rights reserved</p>
			</div>
			<!--icon-->
			<div class="col-lg-6 icon">
				<a class="fa fa-facebook-square"></a>
				<a class="fa fa-twitter-square"></a>
				<a class="fa fa-linkedin-square"></a>
				<a class="fa fa-google-plus-square"></a>
			</div>
		</div>
	</div>

</div>


<!--slide-->
<div class="hidden">
	<div  id="slide_customer_1">
		<div class="row">
			<div class="col-md-2 left">
				<div class="cover">
					<img src="img/3.customer/girl.png" alt="girl"/>
				</div>



			</div>
			<div class="col-md-8 center">
				<h3>
					﻿"Vietnam in luxury with Luxury"
				</h3>
				<p>We have completed our visit to Vietnam and Cambodia and it is only right that we thank you for all your services throughout our trip. Your services were superb, on time and all the people you used were highly professional, friendly and knowledgeable. Guides and drivers were superb.</p>
				<p>Mr. John, United Kingdom</p>
			</div>
			<div class="col-md-2 right">
				<div class="image">
					<img src="img/3.customer/chip_ad.png"/>
				</div>
			</div>


		</div>
	</div>
	<div id="slide_customer_2">
		<div class="row" >
			<div class="col-md-2 left">
				<div class="cover">
					<img src="img/3.customer/girl2.jpg" alt="girl"/>
				</div>



			</div>
			<div class="col-md-8 center">
				<h3>
					﻿"Been a crossroads for millennia"
				</h3>
				<p>been a crossroads for millennia for Vietnamese, Chinese, and a diverse array of minority groups, all of whom have left the stamp of their cultures. Many minority groups retain their traditional ways of life in earthen or wooden houses in the valleys from which they tend animals and farm .</p>
				<p>Mr. John, United Kingdom</p>
			</div>
			<div class="col-md-2 right">
				<div class="image">
					<img src="img/3.customer/chip_ad.png"/>
				</div>
			</div>


		</div>
	</div>
	<div id="slide_customer_3">
		<div class="row" >
			<div class="col-md-2 left">
				<div class="cover">
					<img src="img/3.customer/girl3.jpg" alt="girl"/>
				</div>
			</div>
			<div class="col-md-8 center">
				<h3>
					﻿"Bives this area a great combination"
				</h3>
				<p>gives this area a great combination of nature and culture and is definitely a place for adventurers. Join us on this trip to experience a great trekking tour through village settings and learn about the fascinating cultures of the locals..</p>
				<p>Mr. John, United Kingdom</p>
			</div>
			<div class="col-md-2 right">
				<div class="image">
					<img src="img/3.customer/chip_ad.png"/>
				</div>
			</div>


		</div>
	</div>
</div>
<script src="module/phone_country/source/jquery.min.js"></script>
<!--bootstrap-->
<script src="resources/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<script src="resources/bootstrap-select-1.12.2/dist/js/bootstrap-select.js"></script>
<script src="resources/national/dist/js/bootstrap-formhelpers.js"></script>

<script src="module/phone_country/build/js/intlTelInput.js"></script>
<script>
	//contact and window resize
	$("#contact_left").css({"paddingLeft": ($("#foot_contact").offset().left - 30) + "px"});
	$(window).resize(function () {
		$("#contact_left").css({"paddingLeft": ($("#foot_contact").offset().left - 30) + "px"});
	});
	$("#phone").intlTelInput({
		placeholderNumberType: "MOBILE",
		utilsScript: "module/phone_country/build/js/utils.js"
	});
	//set interval timeout
	var sl = 0;
	//slide
	$(".slide_topic .li").removeClass("active");
	$("#li_1").addClass("active");
	$("#content_customer").html($("#slide_customer_1").html());
	function showSlide(ld, selector) {
		sl = ld - 1;
		var html = "";
		switch (ld) {
			case 1:
				html = $("#slide_customer_1").html();

				break;
			case 2:
				html = $("#slide_customer_2").html();
				break;
			case 3:
				html = $("#slide_customer_3").html();
				break;
			default :
				html = $("#slide_customer_1").html();
				break;
		}
		$(".slide_topic .li").removeClass("active");
		$(selector).addClass("active");
		$("#content_customer").html(html);

	}

	setInterval(function () {
		$(".slide_topic .li").removeClass("active");
		$("#li_" + (sl + 1)).addClass("active");
		$("#content_customer").html($("#slide_customer_" + (sl + 1)).html());
		sl++;
		sl = sl % 3;
	}, 3000);


</script>

<script>

	function initMap() {
		var myLatLng = {lat: 21.002695, lng: 105.820349};

		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 16,
			center: myLatLng
		});

		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'Hello World!'
		});
	}
</script>
<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2Z1V0qCzUiKVxMRUYgBnR9tPiw4UaY94&callback=initMap">
</script>

</body>
</html>
