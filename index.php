
<?php
require("class.phpmailer.php");
require("class.smtp.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
$mail->CharSet  = "utf-8";
$mail->Host = "smtp.sendgrid.net"; // SMTP servers
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "busviet"; // SMTP username
$mail->Password = "123@123a"; // SMTP password
$mail->From = "tranphucntt@gmail.com";
$mail->FromName = "Phạm văn Kế ";
$mail->AddAddress("tranphucntt@gmail.com","Thanh vien"); //$email là địa chỉ email mà bạn muốn gởi
$mail->addCC('kepham@interspace.vn');
$mail->AddReplyTo("tranphucntt@gmail.com","Information");
$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML
$subject = 'subject';
ob_start();
//include '/inc/email/templates/account_created.php';
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

$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = "";
if(!$mail->Send())
{
echo "Message was not sent

";
echo "Mailer Error: " . $mail->ErrorInfo;

}
?>




