<?php 
##########################################################
# DATOS DE ENVIO
##########################################################
$Config["EnviarSii"]="0";				// Enviar al SII 1=si 0=no
$Config["EnviarMail"]="1";				// Enviar mail de respaldo 1=Si 0=No
$Config["MailDestino"]="contacto@factronica.cl";	// Mail respaldo libro compras
$Archivos["XMLLIBRO"]="milibritodecompras.xml";		// Nombre Archivo Salida con Xml

##########################################################
# CARATULA DEL LIBRO
##########################################################
$Caratula["RutEmisorLibro"]="76436563-1";		// Rut Empresa
$Caratula["RutEnvia"]="13725303-8";			// Rut Rep. Legal
$Caratula["PeriodoTributario"]="2016-02";		// Periodo Tributario
$Caratula["FchResol"]="2014-08-22";			// Fecha Resolución
$Caratula["NroResol"]="80";				// Número Resolución
$Caratula["TipoOperacion"]="COMPRA";			// Tipo de Operación
$Caratula["TipoLibro"]="MENSUAL";			// Tipo de Libro
$Caratula["TipoEnvio"]="TOTAL"; 			// Tipo de Envio de Libro
$Caratula["FolioNotificacion"]="";			// Folio Notificación

##########################################################
# DETALLE DEL LIBRO
##########################################################
$Detalle["TpoDoc"]["1"]="33";				// Tipo de Documento
$Detalle["NroDoc"]["1"]="194";				// Folio del Documento
$Detalle["TpoImp"]["1"]="1";				// Tipo de Impuesto
$Detalle["TasaImp"]["1"]="19";				// Tasa de Impuesto
$Detalle["FchDoc"]["1"]="2016-02-09";			// Fecha del Documento
$Detalle["CdgSIISucur"]["1"]="12312";			// Codigo Sucursal sii del proveedor
$Detalle["RUTDoc"]["1"]="77777777-7";			// Rut del Proveedor
$Detalle["RznSoc"]["1"]="SUPER S.A.";			// Razón Social Proveedor
$Detalle["TpoDocRef"]["1"]="";				// Tipo Documento Referencia
$Detalle["FolioDocRef"]["1"]="";			// Folio Documento Referencia
$Detalle["MntExe"]["1"]=""; 				// Monto Exento
$Detalle["MntNeto"]["1"]="110000"; 			// Monto Neto
$Detalle["MntIVA"]["1"]="20900"; 			// Monto de Iva 19%
$Detalle["IVARetTotal"]["1"]="";			// Iva con retención total
$Detalle["CodIVANoRec"]["1"]="";			// Codigo de Iva no Recuperable
$Detalle["MntIVANoRec"]["1"]="";			// Monto de Iva no Recuperable
$Detalle["IVAUsoComun"]["1"]="";			// Monto de Iva de Uso Comun
$Detalle["MntSinCred"]["1"]="";				// Monto de Iva sin Derecho a Crédito Fiscal
$OtrosImp["CodImp"]["1"]["1"]="27"; 			// Codigo del Impuesto adicional: Ej. Cod.26 Iva Cervezas 
$OtrosImp["TasaImp"]["1"]["1"]="20.5"; 			// Tasa de impuesto Ej. 20.5%
$OtrosImp["MntImp"]["1"]["1"]="2050"; 			// Monto del impuesto Ej. 2050 ( Calculado en base a un neto de $10.000 )
$OtrosImp["CodImp"]["1"]["2"]="19"; 			// Codigo del Impuesto adicional: Ej. Cod.19 Iva Anticipado Harina
$OtrosImp["TasaImp"]["1"]["2"]="12"; 			// Tasa de impuesto por ej. 12%
$OtrosImp["MntImp"]["1"]["2"]="12000"; 			// Monto del impuesto por ej. 12000 ( Calculado en base a un neto de $100.000 )
$Detalle["MntTotal"]["1"]="144950";			// Total bruto del Documento

##########################################################
# TOTALES DEL LIBRO
##########################################################
$TotalesPeriodo["TpoDoc"]["33"]="33";			// Tipo de Documento
$TotalesPeriodo["TpoImp"]["33"]="1";			// Tipo de Impuesto
$TotalesPeriodo["TotDoc"]["33"]="1";			// Cantidad de Documentos del Tipo
$TotalesPeriodo["TotMntExe"]["33"]="0";			// Total Monto Exento
$TotalesPeriodo["TotMntNeto"]["33"]="110000";		// Total Monto Neto
$TotalesPeriodo["TotMntIVA"]["33"]="20900";		// Total Iva
$TotalesPeriodo["TotIVAFueraPlazo"]["33"]="0";		//
$TotOtrosImp["CodImp"]["33"]["1"]="27"; 		// codigo tipo de impuesto
$TotOtrosImp["TotMntImp"]["33"]["1"]="2050"; 		// monto total del impuesto
$TotOtrosImp["FctImpAdic"]["33"]["1"]="20.5"; 		// codigo tipo de impuesto
$TotOtrosImp["TotCredImp"]["33"]["1"]="2050"; 		// monto total del impuesto
$TotOtrosImp["CodImp"]["33"]["2"]="19"; 		// codigo tipo de impuesto
$TotOtrosImp["TotMntImp"]["33"]["2"]="12000"; 		// monto total del impuesto
$TotOtrosImp["FctImpAdic"]["33"]["2"]="12"; 		// codigo tipo de impuesto
$TotOtrosImp["TotCredImp"]["33"]["2"]="12000"; 		// monto total del impuesto
$TotalesPeriodo["TotMntTotal"]["33"]="144950";		// Monto total bruto 

########################################################## 
#######	DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##########################################################
$certificado["Modulus"]="modulo del certificado"; 	// MODULO DEL CERTIFICADO
$certificado["Exponent"]="exponente del certificado"; 	// EXPONENTE DEL CERTIFICADO
$certificado["X509Certificate"]="certificado x509";	// CERTIFICADO X509
$certificado["PrivKey"]="llave privada";		// LLAVE PRIVADA SIN CLAVE
?>