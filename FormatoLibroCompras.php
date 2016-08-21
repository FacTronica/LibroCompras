<?php 
##############################################################
# DATOS DE ENVIO
##############################################################
#
$Config["EnviarSii"]="0";
$Config["EnviarMail"]="1";
$Config["MailDestino"]="contacto@factronica.cl";
$Archivos["XMLLIBRO"]="milibritodecompras.xml";


##############################################################
# CARATULA DEL LIBRO
##############################################################
#
$Caratula["RutEmisorLibro"]="76436563-1";
$Caratula["RutEnvia"]="13725303-8";
$Caratula["PeriodoTributario"]="2016-02";
$Caratula["FchResol"]="2014-08-22";
$Caratula["NroResol"]="80";
$Caratula["TipoOperacion"]="COMPRA";
$Caratula["TipoLibro"]="MENSUAL";
$Caratula["TipoEnvio"]="TOTAL"; 
$Caratula["FolioNotificacion"]="";

##############################################################
# DETALLE DEL LIBRO
##############################################################
# DOCUMENTO Nº $i 
$Detalle["TpoDoc"]["1"]="33";
$Detalle["NroDoc"]["1"]="194";
$Detalle["TpoImp"]["1"]="1";
$Detalle["TasaImp"]["1"]="19";
$Detalle["FchDoc"]["1"]="2016-02-09";
$Detalle["CdgSIISucur"]["1"]="12312";
$Detalle["RUTDoc"]["1"]="76183109-7";
$Detalle["RznSoc"]["1"]="SERVICIOS GASTRONOMICOS FELIPE ALBERTO AGUAYO FIGUEROA";
# los 2 siguientes campos son solo obligatorios cuando es nc o nc manual que anula fv electronica
$Detalle["TpoDocRef"]["1"]="";
$Detalle["FolioDocRef"]["1"]="";
#	
$Detalle["MntExe"]["1"]="";
$Detalle["MntNeto"]["1"]="25629";
$Detalle["MntIVA"]["1"]="4870";
$Detalle["MntSinCred"]["1"]="0";
$Detalle["MntTotal"]["1"]="30499";
# DOCUMENTO Nº $i 
$Detalle["TpoDoc"]["2"]="33";
$Detalle["NroDoc"]["2"]="195";
$Detalle["TpoImp"]["2"]="1";
$Detalle["TasaImp"]["2"]="19";
$Detalle["FchDoc"]["2"]="2016-02-09";
$Detalle["CdgSIISucur"]["2"]="12312";
$Detalle["RUTDoc"]["2"]="76301137-2";
$Detalle["RznSoc"]["2"]="GASTRONOMICA E INVERSIONES AGUAYO LIMITADA";
$Detalle["MntExe"]["2"]="";
$Detalle["MntNeto"]["2"]="25629";
$Detalle["MntIVA"]["2"]="4870";
$Detalle["MntSinCred"]["2"]="0";
$Detalle["MntTotal"]["2"]="30499";

##############################################################
# TOTALES DEL LIBRO
##############################################################
#  
$TotalesPeriodo["TpoDoc"]["33"]="33";
$TotalesPeriodo["TotDoc"]["33"]="16";
$TotalesPeriodo["TotMntExe"]["33"]="0";
$TotalesPeriodo["TotMntNeto"]["33"]="482880";
$TotalesPeriodo["TotMntIVA"]["33"]="91752";
$TotalesPeriodo["TotIVAFueraPlazo"]["33"]="0";
$TotalesPeriodo["TotMntTotal"]["33"]="574632";
#  
$TotalesPeriodo["TpoDoc"]["34"]="34";
$TotalesPeriodo["TotDoc"]["34"]="1";
$TotalesPeriodo["TotMntExe"]["34"]="30000";
$TotalesPeriodo["TotMntNeto"]["34"]="0";
$TotalesPeriodo["TotMntIVA"]["34"]="0";
$TotalesPeriodo["TotIVAFueraPlazo"]["34"]="0";
$TotalesPeriodo["TotMntTotal"]["34"]="30000";
############################################################# 
#######	DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##############################################################
#
#
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="w61tmFW8A2ttWcTdz/9IlhhsXISAO+4M9EiVEGzzQ93v7E9Pwj6820Qn2gyBHz34
Gtga5udEbJv+k0cqUIs1kujtC8kdw8B7BFETURJpwLDvWMeWLhhGWZWpnRQ2bxzJ
7gxUBb9VpZEUVlO2osSq1xG0M14ewhp67QzcFIhrlPs="; 
#
#
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="AQAB"; 
#
#
# CERTIFICADO X509
$certificado["X509Certificate"]="MIIGZDCCBUygAwIBAgIKfQYwyAAAAALebTANBgkqhkiG9w0BAQUFADCB0jELMAkG
A1UEBhMCQ0wxHTAbBgNVBAgTFFJlZ2lvbiBNZXRyb3BvbGl0YW5hMREwDwYDVQQH
EwhTYW50aWFnbzEUMBIGA1UEChMLRS1DRVJUQ0hJTEUxIDAeBgNVBAsTF0F1dG9y
aWRhZCBDZXJ0aWZpY2Fkb3JhMTAwLgYDVQQDEydFLUNFUlRDSElMRSBDQSBGSVJN
QSBFTEVDVFJPTklDQSBTSU1QTEUxJzAlBgkqhkiG9w0BCQEWGHNjbGllbnRlc0Bl
LWNlcnRjaGlsZS5jbDAeFw0xNTEwMDQwNDUxNTRaFw0xNjEwMDMwNDUxNTRaMIHn
MQswCQYDVQQGEwJDTDEVMBMGA1UECAwMREVMIEJJT0LDjU8gMRMwEQYDVQQHEwpD
b25jZXBjaW9uMUYwRAYDVQQKEz1TRVJWSUNJT1MgSU5GT1JNQVRJQ09TIFBBVFJJ
Q0lPIEFORFJFUyBFU1BJTk9aQSBGSUdVRVJPQSBFSVJMMRQwEgYDVQQLEwtJTkZP
Uk1BVElDQTEqMCgGA1UEAxMhUGF0cmljaW8gRXNwaW5vemEgZmlndWVyb2EgQW5k
cmVzMSIwIAYJKoZIhvcNAQkBFhNwZXNwaW5vemFAYXNpc21hLmNsMIGfMA0GCSqG
SIb3DQEBAQUAA4GNADCBiQKBgQDDrW2YVbwDa21ZxN3P/0iWGGxchIA77gz0SJUQ
bPND3e/sT0/CPrzbRCfaDIEfPfga2Brm50Rsm/6TRypQizWS6O0LyR3DwHsEURNR
EmnAsO9Yx5YuGEZZlamdFDZvHMnuDFQFv1WlkRRWU7aixKrXEbQzXh7CGnrtDNwU
iGuU+wIDAQABo4ICpzCCAqMwPQYJKwYBBAGCNxUHBDAwLgYmKwYBBAGCNxUIgtyD
L4WTjGaF1Z0XguLcJ4Hv7Dxhg+a1E4OjvSECAWQCAQQwHQYDVR0OBBYEFN6b90sU
Q1JLnUO5SP8eio4k/7+vMAsGA1UdDwQEAwIE8DAfBgNVHSMEGDAWgBR44T6f0hKz
ejyNzTAOU7NDKQezVTA+BgNVHR8ENzA1MDOgMaAvhi1odHRwOi8vY3JsLmUtY2Vy
dGNoaWxlLmNsL2VjZXJ0Y2hpbGVjYUZFUy5jcmwwOgYIKwYBBQUHAQEELjAsMCoG
CCsGAQUFBzABhh5odHRwOi8vb2NzcC5lY2VydGNoaWxlLmNsL29jc3AwIwYDVR0R
BBwwGqAYBggrBgEEAcEBAaAMFgoxMzcyNTMwMy04MCMGA1UdEgQcMBqgGAYIKwYB
BAHBAQKgDBYKOTY5MjgxODAtNTCCAU0GA1UdIASCAUQwggFAMIIBPAYIKwYBBAHD
UgUwggEuMC0GCCsGAQUFBwIBFiFodHRwOi8vd3d3LmUtY2VydGNoaWxlLmNsL0NQ
Uy5odG0wgfwGCCsGAQUFBwICMIHvHoHsAEMAZQByAHQAaQBmAGkAYwBhAGQAbwAg
AEYAaQByAG0AYQAgAFMAaQBtAHAAbABlAC4AIABIAGEAIABzAGkAZABvACAAdgBh
AGwAaQBkAGEAZABvACAAZQBuACAAZgBvAHIAbQBhACAAcAByAGUAcwBlAG4AYwBp
AGEAbAAsACAAcQB1AGUAZABhAG4AZABvACAAaABhAGIAaQBsAGkAdABhAGQAbwAg
AGUAbAAgAEMAZQByAHQAaQBmAGkAYwBhAGQAbwAgAHAAYQByAGEAIAB1AHMAbwAg
AHQAcgBpAGIAdQB0AGEAcgBpAG8wDQYJKoZIhvcNAQEFBQADggEBAHJilMyQsEMK
EafID/ulCmIQJYXGIRpIRSLo7UKPjNm5F4msOO2amvlu+Ex40qrIsxHVDqwF/4iY
IawePIDJUe/Zow6Z9RLCEeGC5aIqA4SFcOXgn761sUbx4sgUPBjg292oOo2VpWzf
rw7BaLr9PeGfEqA2nRUp6fFoplTcJCls9HqRZUnjIGvYW/KHW2dz7fhS9IWmenvv
hKLyloPUsmsttgkRT6sU0Z8q2hjFu2ojxaOSo1mAKBrCjwi+Vgc//vtuCdVu22gf
kjrviJpJEdlWh0pfTqGnbTx2hmDNWtsk4NSkNErQHrEtBOlPCLknG0Th0tkCGAiB
K3o3H++ilZg=";
#
#
# LLAVE PRIVADA SIN CLAVE
$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIICWQIBAAKBgQDDrW2YVbwDa21ZxN3P/0iWGGxchIA77gz0SJUQbPND3e/sT0/C
PrzbRCfaDIEfPfga2Brm50Rsm/6TRypQizWS6O0LyR3DwHsEURNREmnAsO9Yx5Yu
GEZZlamdFDZvHMnuDFQFv1WlkRRWU7aixKrXEbQzXh7CGnrtDNwUiGuU+wIDAQAB
An8+zes0eaVeyPF6s9/TDUdpkBfiRKTj7K6RDrrJYC60GbJn+7dzIQUnWzjEmOmD
SDXZvS2P7v/cht+uuv4EhqnVbGmCpIyUDYekDk+zNtDmy7b3PEO+2WvrY/5qjyXv
AgUlVg+/dQybFOCmqdTHVT5Ygs2c+TSRpb2cEE43Ye4lAkEA/lP5FRTfuoJRDDtG
/ilXQslWQpAdg1fpYDHgpHmoPQ3DD61mZ4HMgsY6tKKkr/iNlWc8to9aSl3drMMg
ZVD7pQJBAMT2v3Lw1a9vh2IScEvDbTx0pK/srhW1hQutTaq7wsC5F7PTiXmxYTdh
HZIm3eTawKTb5S0PA4iHOpCnZk9N7B8CQDRtjx1fbjd+gcKpvZrLXuevpY6XMt5O
kxd3cL23Lo1XduyWbFPOGCClSJjQJm74KAeyfnuL1asa6oWgu97m8NkCQAg8GL0B
fK2dCBf9lVxVi1efuNLyHkUiFbHrSPf+aaINGwSVr4W6+MmL8eSOY3CSBMPfvbEo
k4k9viEWHpzqMRkCQCA5GWyFUgrcmB0oz57AlHKy/hpSOgOowWu7+tYi21A//tao
FlzOt/sYYB9NkMY5RM2wVUZOHDbxFzqY5SA3hTE=
-----END RSA PRIVATE KEY-----"
?>
