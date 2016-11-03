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
$Detalle["TpoDocRef"]["1"]="";
$Detalle["FolioDocRef"]["1"]="";
$Detalle["MntExe"]["1"]="";
$Detalle["MntNeto"]["1"]="25629";
$Detalle["MntIVA"]["1"]="4870";
$Detalle["IVARetTotal"]["1"]="";
$Detalle["CodIVANoRec"]["1"]="";
$Detalle["MntIVANoRec"]["1"]="";
$Detalle["IVAUsoComun"]["1"]="";
$Detalle["MntSinCred"]["1"]="";
$Detalle["CodImp"]["1"]["27"]="27"; // Codigo del Impuesto por ej. 27
$Detalle["TasaImp"]["1"]["27"]="20.5"; // Tasa de impuesto 20.5
$Detalle["MntImp"]["1"]["27"]="2000"; // MOnto del impuestopor ej. 2000
$Detalle["MntTotal"]["1"]="30499";
#
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
$Detalle["IVARetTotal"]["2"]="";
$Detalle["CodIVANoRec"]["2"]="";
$Detalle["MntIVANoRec"]["2"]="";
$Detalle["IVAUsoComun"]["2"]="";
$Detalle["MntSinCred"]["2"]="";
$Detalle["CodImp"]["2"]["27"]="27"; // Codigo del Impuesto por ej. 27
$Detalle["TasaImp"]["2"]["27"]="20.5"; // Tasa de impuesto 20.5
$Detalle["MntImp"]["2"]["27"]="2000"; // MOnto del impuestopor ej. 2000
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
$TotalesPeriodo["CodImp"]["33"]["27"]=""; // codigo tipo de impuesto
$TotalesPeriodo["TotMntImp"]["33"]["27"]=""; // monto total del impuesto
$TotalesPeriodo["TotMntTotal"]["33"]="574632";
#
#  
$TotalesPeriodo["TpoDoc"]["34"]="34";
$TotalesPeriodo["TotDoc"]["34"]="1";
$TotalesPeriodo["TotMntExe"]["34"]="30000";
$TotalesPeriodo["TotMntNeto"]["34"]="0";
$TotalesPeriodo["TotMntIVA"]["34"]="0";
$TotalesPeriodo["TotIVAFueraPlazo"]["34"]="0";
$TotalesPeriodo["CodImp"]["34"]["27"]=""; // codigo tipo de impuesto
$TotalesPeriodo["TotMntImp"]["34"]["27"]=""; // monto total del impuesto
$TotalesPeriodo["TotMntTotal"]["34"]="30000";
############################################################# 
#######	DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##############################################################
#
#
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="modulo del certificado"; 
#
#
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="exponente del certificado"; 
#
#
# CERTIFICADO X509
$certificado["X509Certificate"]="certificado x509";
#
#
# LLAVE PRIVADA SIN CLAVE
$certificado["PrivKey"]="llave privada"
?>
