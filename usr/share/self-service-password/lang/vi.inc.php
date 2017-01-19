<?php
#==============================================================================
# LTB Self Service Password
#
# Copyright (C) 2009 Clement OUDOT
# Copyright (C) 2009 LTB-project.org
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# GPL License: http://www.gnu.org/licenses/gpl.txt
#
#==============================================================================

#==============================================================================
# English
#==============================================================================
$messages['nophpldap'] = "Bạn nên cài đặt PHP LDAP để sử dụng công cụ này";
$messages['nophpmhash'] = "Bạn phải cài đặt PHP mhash để sử dụng chế độ Samba";
$messages['ldaperror'] = "Không thể truy cập thư mục LDAP";
$messages['loginrequired'] = "Tên đăng nhập không được để trống";
$messages['oldpasswordrequired'] = "Mật khẩu cũ không được để trống";
$messages['newpasswordrequired'] = "Mật khẩu mới không được để trống";
$messages['confirmpasswordrequired'] = "Hãy xác nhận lại mật khẩu mới";
$messages['passwordchanged'] = "Mật khẩu của bạn đã được thay đổi";
$messages['nomatch'] = "Mật khẩu không phù hợp";
$messages['badcredentials'] = "Tên đăng nhập hoặc mật khẩu không đúng";
$messages['passworderror'] = "Mật khẩu bị từ chối từ thư mục LDAP";
$messages['title'] = "Self service password";
$messages['login'] = "Tên đăng nhập";
$messages['oldpassword'] = "Mật khẩu hiện tại";
$messages['newpassword'] = "Mật khẩu mới";
$messages['confirmpassword'] = "Xác nhận mật khẩu mới";
$messages['submit'] = "Lưu";
$messages['getuser'] = "Lấy người dùng";
$messages['tooshort'] = "Mật khẩu của bạn quá ngắn";
$messages['toobig'] = "Mật khẩu của bạn quá dài";
$messages['minlower'] = "Mật khẩu của bạn không có kí tự in thường";
$messages['minupper'] = "Mật khẩu của bạn không có kí tự in hoa";
$messages['mindigit'] = "Mật khẩu của bạn không có chữ số";
$messages['minspecial'] = "Mật khẩu của bạn không có các kí tự đặc biệt";
$messages['sameasold'] = "Mật khẩu mới của bạn giống với mật khẩu cũ";
$messages['policy'] = "Mật khẩu của bạn phải phù hợp với những điều kiện sau:";
$messages['policyminlength'] = "Độ dài nhỏ nhất:";
$messages['policymaxlength'] = "Độ dài lớn nhất:";
$messages['policyminlower'] = "Số lượng tối thiểu của các kí tự thường:";
$messages['policyminupper'] = "Số lượng tối thiểu của các kí tự in hoa:";
$messages['policymindigit'] = "Số lượng tối thiểu của các chữ số:";
$messages['policyminspecial'] = "Số lượng tối thiểu của các ký tự đặc biệt:";
$messages['forbiddenchars'] = "Mật khẩu của bạn chứa các ký tự không được phép";
$messages['policyforbiddenchars'] = "Các ký tự không được phép:";
$messages['policynoreuse'] = "Mật khẩu mới của bạn phải khác mật khẩu hiện tại";
$messages['questions']['birthday'] = "Ngày sinh của bạn?";
$messages['questions']['color'] = "Màu bạn thích?";
$messages['password'] = "Mật khẩu";
$messages['question'] = "Câu hỏi";
$messages['answer'] = "Đáp án";
$messages['setquestionshelp'] = "Tạo mới hoặc thiết lập lại Câu hỏi/Đáp án thay đổi mật khẩu . Sau đó bạn có thể thiết lập mật khẩu của bạn <a href=\"?action=resetbyquestions\">here</a>.";
$messages['answerrequired'] = "Không có câu đáp án nào được chọn";
$messages['questionrequired'] = "Không có câu hỏi được chọn";
$messages['passwordrequired'] = "Mật khẩu của bạn không được để trống";
$messages['answermoderror'] = "Đáp án của bạn đã không được đăng ký";
$messages['answerchanged'] = "Đáp án của bạn đã được đăng ký";
$messages['answernomatch'] = "Đáp án của bạn sai";
$messages['resetbyquestionshelp'] = "Chọn một câu hỏi và trả lời nó để thiết lập mật khẩu. Điều này đòi hỏi bạn đã phải  <a href=\"?action=setquestions\">đăng ký một đáp án rồi</a>.";
$messages['changehelp'] = "Nhập mật khẩu hiện tại và chọn một mật khẩu mới.";
$messages['changehelpreset'] = "Quên mật khẩu?";
$messages['changehelpquestions'] = "<a href=\"?action=resetbyquestions\">Đặt lại mật khẩu bằng cách trả lời các câu hỏi</a>";
$messages['changehelptoken'] = "<a href=\"?action=sendtoken\">Gửi đường link đổi mật khẩu qua email</a>";
$messages['changehelpsms'] = "<a href=\"?action=sendsms\">Đặt lại mật khẩu của bạn với một tin nhắn SMS</a>";
$messages['resetmessage'] = "Xin chào {login},\n\nClick vào đây để đổi mật khẩu:\n{url}\n\nNếu bạn không muốn đổi mật khẩu,vui lòng bỏ qua email này.";
$messages['resetsubject'] = "Đổi mật khẩu";
$messages['sendtokenhelp'] = "Nhập tên đăng nhập và địa chỉ email để đổi mật khẩu. Khi bạn nhận được email, click vào đường link trong đó để hoàn thành đổi mật khẩu.";
$messages['mail'] = "Mail";
$messages['mailrequired'] = "Địa chỉ email của bạn không được để trống";
$messages['mailnomatch'] = "Địa chỉ email của bạn không đúng với tên đăng nhập";
$messages['tokensent'] = "Một email xác nhận đã được gửi";
$messages['tokennotsent'] = "Lỗi khi gửi email xác nhận";
$messages['tokenrequired'] = "Token is required";
$messages['tokennotvalid'] = "Token is not valid";
$messages['resetbytokenhelp'] = "Đường link gửi email để đổi mật khẩu. Yêu cầu một đường link mới thông qua email, <a href=\"?action=sendtoken\">Click vào đây</a>.";
$messages['resetbysmshelp'] = "Các mã thông báo gửi sms cho phép bạn thiết lập lại mật khẩu của bạn. Lấy một mã mới, <a href=\"?action=sendsms\">click vào đây</a>.";
$messages['changemessage'] = "Xin chào {login},\n\nMật khẩu của bạn đã được thay đổi.\n\nNếu bạn không muốn đổi mật khẩu, xin vui lòng liên hệ với quản trị viên ngay lập tức.";
$messages['changesubject'] = "Mật khẩu của bạn đã được thay đổi";
$messages['badcaptcha'] = "reCAPTCHA nhập không đúng. Thử lại.";
$messages['notcomplex'] = "Mật khẩu của bạn không đủ các loại kí tự";
$messages['policycomplex'] = "Số lượng các loại kí tự:";
$messages['nophpmcrypt'] = "Bạn phải cài đặt PHP mcrypt để sử dụng chức năng mã hóa";
$messages['sms'] = "Số điện thoại";
$messages['smsresetmessage'] = "Mật mã để thay đổi mật khẩu của bạn:";
$messages['sendsmshelp'] = "Nhập tên đăng nhập để lấy mật mã thay đổi mật khẩu. Sau đó loại mật mã gửi qua SMS.";
$messages['smssent'] = "Một mã xác nhận đã được gửi qua SMS";
$messages['smsnotsent'] = "Lỗi khi gửi SMS";
$messages['smsnonumber'] = "Không thể tìm thấy số điện thoại";
$messages['userfullname'] = "Tên đầy đủ";
$messages['username'] = "Tên đăng nhập";
$messages['smscrypttokensrequired'] = "Bạn không thể thiết lập bằng SMS với thiết lập crypt_tokens";
$messages['smsuserfound'] = "Thông tin người sử dụng là chính xác và nhấn Gửi để nhận được SMS Token";
$messages['smstoken'] = "SMS token";
$messages['nophpmbstring'] = "Bạn phải cài đặt PHP mbstring";
$messages['menuquestions'] = "Câu hỏi";
$messages['menutoken'] = "Email";
$messages['menusms'] = "SMS";
$messages['nophpxml'] = "Bạn phải cài đặt PHP XML để sử dụng công cụ này";
$messages['tokenattempts'] = "Lỗi mã xác nhận, thử lại";
$messages['emptychangeform'] = "Đổi mật khẩu của bạn";
$messages['emptysendtokenform'] = "Đường link thiết lập lại mật khẩu qua SMS";
$messages['emptyresetbyquestionsform'] = "Đổi mật khẩu";
$messages['emptysetquestionsform'] = "Thiết lập câu hỏi đổi mật khẩu";
$messages['emptysendsmsform'] = "Thiết lập lại mã";
$messages['sameaslogin'] = "Mật khẩu mới của bạn giống như đăng nhập của bạn";
$messages['policydifflogin'] = "Mật khẩu mới của bạn không giống như đăng nhập của bạn";

?>
