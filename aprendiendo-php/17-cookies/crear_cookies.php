<?php

/*
 * URL: 
 * localhost/PHP/MASTER-PHP/aprendiendo-php/17-cookies/index.php
 * 
 * Cookies
 * DEF: Es un fichero que almacena en el ordenador del usuario que visita la
 * pagina web, con el fin de recordad datos.
 */


/*
 * setcookie(name, value, expire, path, domain, secure, httponly);
 * name     = Required. Specifies the name of the cookie
 * value    = Optional. Specifies the value of the cookie
 * expire   = Optional. Specifies when the cookie expires. 
 *              The value: time()+86400*30, will set the cookie to expire in 
 *              30 days. If this parameter is omitted or set to 0, the cookie
 *              will expire at the end of the session 
 *              (when the browser closes). Default is 0
 * path     = Optional. Specifies the server path of the cookie. 
 *              If set to "/", the cookie will be available within the 
 *              entire domain. 
 *              If set to "/php/", the cookie will only be available within
 *              the php directory and all sub-directories of php. 
 *              The default value is the current directory that the cookie 
 *              is being set in
 * domain   = Optional. Specifies the domain name of the cookie. 
 *              To make the cookie available on all subdomains of 
 *              example.com, set domain to "example.com". 
 *              Setting it to www.example.com will make the cookie only 
 *              available in the www subdomain
 * secure   = Optional. Specifies whether or not the cookie should only be
 *              transmitted over a secure HTTPS connection. 
 *              TRUE indicates that the cookie will only be set if a secure
 *              connection exists. Default is FALSE
 * httponly = Optional. If set to TRUE the cookie will be accessible only
 *              through the HTTP protocol (the cookie will not be accessible
 *              by scripting languages). This setting can help to reduce
 *              identity theft through XSS attacks. Default is FALSE
 * 
 * DOCUMENTACION: https://www.php.net/manual/es/function.setcookie.php
 */

// Cookie basica
setcookie("micookie", "Valor de mi galleta");

// Cookie con expiración
setcookie("unyear", "Valor de mi cookie de 365 dias", time() + (86400 * 365));

?>


<a href="crear_cookies.php">Crear las Cookies</a>
<a href="ver_cookies.php">Carga las Cookies</a>
<a href="borrar_cookies.php">Borrar las Cookies</a>