<?php

function checkEmail($email){
    return preg_match('/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',$email);
}

function sendHTMLmail($from_name, $from_email, $to_email, $subject, $text_message, $html_message){
    $html_message = wordwrap($html_message,75,"\n");
    $from = "$from_name <$from_email>";
    $main_boundary = "----=_NextPart_".md5(rand());
    $text_boundary = "----=_NextPart_".md5(rand());
    $html_boundary = "----=_NextPart_".md5(rand());
    
    $headers = "From: $from\n";
    $headers .= "X-Mailer: Mailer\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: multipart/mixed;\n\tboundary=\"$main_boundary\"\n";
    
    $message = "\n--$main_boundary\n";
    $message .= "Content-Type: multipart/alternative;\n\tboundary=\"$text_boundary\"\n";
    $message .= "\n--$text_boundary\n";
    $message .= "Content-Type: text/plain; charset=\"utf-8\"\n";
    $message .= "Content-Transfer-Encoding: quoted-printable\n\n";
    $message .= ($text_message!="")?"$text_message":"Text portion of HTML Email";
    $message .= "\n--$text_boundary\n";
    $message .= "Content-Type: multipart/related;\n\tboundary=\"$html_boundary\"\n";
    $message .= "\n--$html_boundary\n";
    $message .= "Content-Type: text/html; charset=\"utf-8\"\n";
    $message .= "Content-Transfer-Encoding: quoted-printable\n\n";
    $message .= str_replace ("=", "=3D", $html_message)."\n";
    $message .= "\n--$html_boundary--\n";
    $message .= "\n--$text_boundary--\n";
    $message .= "\n--$main_boundary--\n";
    
    $subject= utf8_decode($subject);
    @mail($to_email, $subject, $message, $headers);
}
    
?>