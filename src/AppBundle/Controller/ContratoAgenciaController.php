<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of contrato_agencia_persona_juridicaAdminController
 *
 * @author Marlon
 */

namespace AppBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContratoAgenciaController extends CRUDController{
    public function EncabezamientoHeader(\FPDF $pdf,$contrato_agencia_persona_juridica){
        //Conectando con la BD y trayendo los datos pra presentar
//        $conection = $this->get('database_connection');
//        
//        $sql = "SELECT "
//                . "numero_contrato, "
//                . "momento_pago, "
//                . "fecha_firma, "
//                . "lugar_firma, "
//                . "id_empresa "
//                . "FROM "
//                . "contrato_agencia_persona_juridica "
//                . "WHERE numero_contrato = ".$contrato_agencia_persona_juridica->getNumeroContrato();
//        
//        $result = $conection->fetchAll($sql);
                
        $pdf->AddPage();
        
        $x = 15;
        $pdf->SetLeftMargin($x);
        $pdf->SetRightMargin($x);
        $pdf->SetFont('Arial','B',12);
        //$pdf->SetXY(25,7);
        $pdf->MultiCell(0,7,utf8_decode ('CONTRATO AGENCIA PERSONA JURÍDICA No.'.$contrato_agencia_persona_juridica->getNumeroContrato()),0,'C'); 
        $pdf->Ln(2);
        
        //$pdf->SetFillColor(238, 232, 170); //Amarillo oro pálido de celda
        //$pdf->SetTextColor(3, 3, 3); //Letra color blanco
        $pdf->SetFont('Arial', 'B', 12);
        //$pdf->SetXY(10,21);
        $pdf->MultiCell(0,7, utf8_decode ('DE UNA PARTE: La Empresa de Telecomunicaciones de Cuba S.A.(ETECSA), Empresa Mixta, con domicilio legal edificio Beijing, 5to piso, calle 3ra entre 76 y 78, Centro de Negocios Miramar, Playa, La Habana, Cuba, legalmente constituida a través de escritura '
                . 'pública No.1657 de fecha 28 de junio de 1994, otorgada ante la Licenciada Lurdes Lucía Díaz-Canel Navarro, Notaria de la Notaría Especial del Ministerio de Justicia; inscrita en el Registro Central de Compañía Anónimas en el Libro 135, Folio 159, Hoja 9405, Sección Primera; '
                . 'inscrita en el Registro Mercantil Primero de La Habana, en el Libro 1189, Folio 91, Hoja 16738, ambas inscripciones realizadas en fecha 29 de junio de 1994; e inscrita en el Registro de Inversiones Extranjeras, actualmente Registro Mercantil Central, a cargo del Ministerio de '
                . 'Justicia, en el Libro de Empresas Mixtas, Tomo ll, Folios 043 al 047, en fecha 21 de julio de 1994; con Número de Identificación Tributaria (NIT) 30000352932, la que a través de la División Territorial Las Tunas, con sede en Ángel Guardia No.117 % Francisco Varona y Adolfo '
                . 'Villamar, Teléfono 31371333, correo electrónico oce.dtlt@etecsa.cu, Cuenta Bancaria en USD No. 0300000017611131, en el Banco Financiero Internacional, Sucursal 7200, sita en Vicente García s/n Esq. 24 de Febrero y Cuenta Bancaria en CUP No. 0664421232710015 en el Banco BANDEC '
                . 'Sucursal 6441, sita en Vicente García No. 69, representada en este acto por _________________________________, en su carácter de ____________________________________________________ nombrado mediante _____________________________________________, de fecha _______________________________,'
                . ' dictada por _________________________________________________, con facultades para suscribir este contrato, según Resolución No. 60 dicatada por el Presidente Ejecutivo en fecha _________________________, que en lo adelante se denominará AGENTE.')
                , 0, 'J');
        
        ///Aqui tengo que poner los datos de las dos empresas
        $pdf->MultiCell(0,7, utf8_decode('AMBAS PARTES: Reconociéndose mutuamente la personalidad jurídica, capacidad y representación con que comparecen acuerdan suscribir el presente Contrato bajo los términos y condiciones siguientes:
1. OBJETO DEL CONTRATO.

1.1	Por el presente Contrato, el AGENTE se obliga a nombre y por cuenta de ETECSA a promover de forma continuada la comercialización de productos y servicios de telecomunicaciones, en la zona definida en el Anexo No. 5, del presente Contrato, mediante el pago de una retribución por su gestión. 
2. OBLIGACIONES DE LAS PARTES.

2.1 ETECSA se obliga a:

2.1.1 Entregar al AGENTE, cuando corresponda, de forma gratuita, el material publicitario o informativo, así como cualquier otro que sea necesario para la comercialización.
2.1.2 Entregar los productos solicitados por el AGENTE, en el lugar y tiempo pactados, en los volúmenes equivalentes a la cantidad y valor total de los mismos, definidos en las prefacturas. 
2.1.3 Atender y solucionar las solicitudes y quejas presentadas por el AGENTE, incluyendo las relacionadas con vicios o defectos ocultos de los productos.
2.1.4 Conservar los productos contratados en buen estado hasta el momento de su entrega al AGENTE. 
2.1.5 Establecer la “Asistencia en Línea” a los AGENTES que adquieran tarjetas prepagadas, durante las veinticuatro (24) horas todos los días del año, según lo establecido en el Anexo No. 3, del presente Contrato. 
2.1.6 Bloquear las tarjetas prepagadas que se informen por el AGENTE como extraviadas, averiadas, defectuosas o robadas, según lo establecido en el Anexo No. 3, del presente Contrato. 
2.1.7 Instruir adecuadamente al AGENTE, sobre el modo de empleo y venta de los productos que le entrega, incluyendo las referidas a los precios de venta al público, elementos de protección al consumidor y los indicadores de calidad establecidos y sobre la utilización de los soportes promocionales y de imagen comercial identificativa de ETECSA, procediendo además a su control, a través de la realización de inspecciones al AGENTE.
2.1.8 Informar, con un término de siete (7) días hábiles de antelación, los cambios de tarifas u otra información relacionada con la actividad de comercialización a realizar por el AGENTE. 
2.1.9 Pagar al AGENTE la retribución por su gestión, según los por cientos (%) sobre las ganancias obtenidas por sus actividades de comercialización y según lo pactado en el modelo que se adjunta como Anexo No. 1, al presente Contrato.
2.1.10 Brindar el servicio de Garantía, Asistencia Técnica y Postventa, entre otros, según lo contratado por el AGENTE.
2.1.11 Velar por la utilización adecuada de los soportes promocionales y de los elementos de identidad visual (marcas, lema comercial, símbolos, nombre de la Red Comercial, entre otros) que pertenezcan a ETECSA pudiendo exigirle al AGENTE la retirada de los mismos, en caso de que éstos no cumplan con los requerimientos necesarios.
2.1.12 Analizar, de resultar factible, la reposición sin costo de las Tarjetas Prepagadas, Cupones de Recarga, Cuentas, Saldos y Pines defectuosos, según lo regulado en el Anexo No. 3.
2.1.13 Analizar, de resultar factible, la reposición, de las Tarjetas Prepagadas, Cupones de Recarga, Cuentas, Saldos y Pines reportados por el AGENTE como robados, de acuerdo a las condiciones establecidas en el Anexo No. 3.
2.1.14 Tramitar las diligencias derivadas de la ejecución del presente Contrato, solamente con el AGENTE que suscribe este acto, o con su(s) representante(s) debidamente registrado(s) en el modelo que se adjunta como Anexo No. 2. 
2.1.15 Realizar con el AGENTE, de ser necesario, conciliaciones mensuales sobre las ventas realizadas y el estado del cumplimiento de los pagos efectuados, de acuerdo a lo pactado en el presente Contrato y conforme a lo establecido en el Anexo No. 6.

2.2 El AGENTE se obliga a:

2.2.1 Ejercer sus funciones con la diligencia debida de todo acto de comercio y actuar con arreglo a las indicaciones recibidas de ETECSA.
2.2.2 Designar, utilizando el modelo que se adjunta como Anexo No. 2, a su(s) representante(s) ante ETECSA para realizar las diligencias derivadas de la ejecución de este Contrato.
2.2.3 Solicitar a ETECSA, por escrito firmado por él mismo o por uno de sus representantes según modelo que se adjunta como Anexo No. 2, con setenta y dos (72) horas de antelación, la demanda de productos de telecomunicaciones, expresando las cantidades que desea y su descripción y precio, según lo establecido en el modelo que se adjunta como Anexo No. 1, del presente Contrato y recogerla puntualmente en el lugar pactado. 
2.2.4 No ceder a terceros las Tarjetas Prepagadas, Cupones de Recarga, Cuentas, Saldos y Pines, ni ningún otro producto, para su distribución o comercialización sin la aprobación de ETECSA.
2.2.5 Notificar a ETECSA en un plazo de hasta setenta y dos (72) horas a partir de su ocurrencia, la interrupción de la comercialización y las pérdidas, avería o declaración defectuosa de las tarjetas prepagadas. Si transcurre este plazo y el AGENTE no realiza la notificación con la celeridad pactada, ETECSA no asumirá los daños y perjuicios que se puedan derivar de esta situación.
2.2.6 No variar los precios indicados por ETECSA, para los productos o servicios que comercialice.
2.2.7 No realizar actos en sus relaciones con terceros, que perjudiquen la imagen comercial de ETECSA.
2.2.8 Preservar el valor comercial de las marcas, lemas comerciales, signos distintivos y símbolos de ETECSA, exponiéndolos, promocionándolos y vendiéndolos separados de otros de distinta procedencia, marcas y finalidades, de manera que no pueda ser entendida vinculación entre los mismos.
2.2.9 Instruir al cliente final, sobre la forma de uso de los productos y el modo de empleo de los servicios que comercializa. 
2.2.10 Declarar a ETECSA los lugares donde se comercialicen los productos y servicios, según modelo que se adjunta como Anexo No. 5.
2.2.11 Participar en toda reclamación o quejas formuladas por terceros a ETECSA, que se relacionen con un acto en el cual haya ejercido su intermediación como AGENTE, asumiendo su responsabilidad de ser imputable al mismo.
2.2.12 No revelar la información que conoce como resultado de la intermediación, ni explotar de otro modo esa información en su propio beneficio.
2.2.13 Conciliar, en caso de ser necesario, los estados de cuenta resultantes de la ejecución del presente Contrato, dentro de los primeros diez (10) días naturales de cada mes, según Anexo No. 6.
2.2.14 Recibir la retribución por su gestión, según los por cientos (%) sobre las ganancias obtenidas por sus actividades de comercialización y según lo pactado en el Anexo No. 1, del presente Contrato (PORCIENTO DE RETRIBUCIÓN POR VENTA), pagando el importe, por la compra realizada, deduciéndose de éste, dicha retribución.
2.2.15 Notificar a ETECSA de cualquier cambio con respecto a la información relacionada con este Contrato, dentro de los quince (15) días naturales posteriores a la realización del cambio. 
2.2.16 Devolver los recursos asignados por ETECSA para realizar sus obligaciones, una vez terminado el Contrato.
2.2.17 Asumir la liquidación de las obligaciones pendientes, en caso de decidir renunciar y terminar el Contrato, sin menoscabo para ETECSA.
2.2.18 Permitir el acceso del personal de ETECSA, debidamente acreditado, a los locales donde se brinden los servicios, así como facilitarle diligentemente la documentación y colaboración que le sea requerida para el control de la ejecución de su gestión como AGENTE. 
2.2.19	Responder ante ETECSA de las obligaciones de sus representantes. 

3. LUGAR Y CONDICIONES DE ENTREGA.

3.1 ETECSA realizará la entrega de los productos de telecomunicaciones en sus Unidades Comerciales, en los horarios que serán señalados en el modelo que se adjunta como Anexo No. 4. En caso de existir por parte de ETECSA la necesidad de modificar el lugar de entrega y/o sus horarios, se le informará al AGENTE, con no menos de veinticuatro (24) horas de antelación a hacer efectivo el cambio.
3.2 Cuando el AGENTE reciba la entrega física de las tarjetas prepagadas, ETECSA tendrá tres (3) días hábiles para culminar el proceso de activación de las mismas.
3.3 El AGENTE podrá efectuar, a su libre elección, la revisión de la totalidad de los productos adquiridos o un muestreo o revisión aleatoria al por ciento que el mismo decida, en el instante de la entrega, en los puntos de comercialización de ETECSA. 

4. MEDIOS Y GASTOS DE TRANSPORTACION.

4.1 Los gastos de transportación serán a cuenta y costo del AGENTE. 
4.2 El AGENTE se responsabiliza con las operaciones de carga y estiba en el momento de la compra y con la descarga de los productos en su destino.

5. PRECIO Y FORMA DE PAGO.

5.1 ETECSA paga al AGENTE un por ciento (%) de retribución por la venta de sus servicios y productos, la que se deduce de los importes a pagar por el AGENTE en el momento de adquisición de los mismos, detallándose esta operación en la(s) factura(s) que se emita(n) por estos conceptos y según lo pactado en el Anexo No. 1, de este Contrato.
5.2 La moneda de pago a utilizar será el peso cubano convertible (CUC) y el peso cubano (CUP), dependiendo de la moneda aprobada para cada producto o servicio en cuestión, lo cual se consignará en las facturas.
5.3 El AGENTE recibirá su por ciento (%) de retribución por la venta de sus servicios y productos, en el domicilio de ETECSA, en el momento de efectuar el pago correspondiente a los mismos, mediante dinero en efectivo, cheque o transferencia bancaria, ejecutándose el pago por el AGENTE en alguno de los momentos siguientes: 
'), 0, 'J');
        /***Aqui tengo que poner el momento de pago***/
        
        $pdf->MultiCell(0, 7, utf8_decode('5.4 Los pagos por cuantías mayores de $100 000.00 pesos cubanos o de $10 000.00 pesos cubanos convertibles o su equivalente en moneda libremente convertible, serán ejecutados obligatoriamente mediante cheques certificados por el Banco. 
5.5 Al momento de entrar en vigor en el país la unificación monetaria, los valores del presente contrato, con independencia de la moneda en que estén expresados, se ajustarán conforme a como quede regulado por los organismos competentes. A esos efectos, se suscribirá, entre las Partes, el Acta de Conciliación correspondiente. Las Partes suscribirán Suplemento, firmado por los respectivos representantes legales, reconociendo la incorporación al Contrato de esta Acta de Conciliación.  

6. PENALIDADES.

6.1 Ambas Partes podrán exigirse la aplicación de una sanción pecuniaria ante el incumplimiento injustificado de las obligaciones contractuales pactadas, ascendente a un total que no exceda del cuatro por ciento (4%) de interés anual en pesos cubanos (CUP), lo que equivale a un 0.011 % diario, ni del seis por ciento (6%) de interés anual en pesos cubanos convertibles (CUC), lo que equivale a un 0.016 % diario sobre lo siguiente:
a)	Cuando se trate del pago del monto de algún otro beneficio económico y de los gastos en que incurriera la parte afectada por esta causa, sobre el valor facturado en el mes correspondiente.
b)	Cuando se trate de obligaciones pactadas en el Contrato, será sobre el valor del daño o perjuicio causado, debidamente documentado por la parte cumplidora.
6.2 Ante el supuesto de unificación monetaria, o cambios en la moneda de pago, será aplicable en la sanción pecuniaria el porciento mayor de los pactados en la cláusula anterior

7. CALIDAD.

7.1 Los productos y servicios de telecomunicaciones serán comercializados por el AGENTE según lo establecido en los Anexos que se adjuntan a este Contrato para cada modalidad de servicio contratado, o en su defecto será de una calidad razonable y nunca inferior a la media generalmente aceptada de acuerdo con el uso o aplicación del producto o utilización del servicio.  
7.2 La calidad de los productos comercializados por el AGENTE será acorde a las normas establecidas por su fabricante, teniendo en cuenta además las políticas vigentes en ETECSA para la comercialización.

8. GARANTIAS.

8.1 Las condiciones relacionadas con la Garantía, Asistencia Técnica y Postventa de las Tarjetas Prepagadas, Cupones de Recarga, Cuentas, Saldos y Pines, se ejecutarán según lo establecido en el Anexo No. 3 del presente Contrato. 

9. CAUSAS EXIMENTES DE LA RESPONSABILIDAD.

9.1 Las partes no serán responsables del incumplimiento o cumplimiento inadecuado de sus respectivas obligaciones contractuales, cuando las mismas sean imposibles de satisfacer por causas eximentes de responsabilidad. 
9.2 Se considerarán causas eximentes de responsabilidad el caso fortuito y la fuerza mayor, entendidas éstas como todo evento o hecho extraordinario proveniente de la naturaleza o del actuar humano, imprevisible o imposible de evitar, que paralice de modo total o parcial el cumplimiento de las obligaciones pactadas en el Contrato. 
9.3 La parte afectada por un evento de esta naturaleza notificará y probará a la otra su comienzo, naturaleza, eventual duración; así como oportunamente su terminación, certificada por autoridad competente para tales efectos, mediante documentos que la justifiquen que se entregarán en el término de quince (15) días naturales, contados a partir de la fecha de terminación del propio evento.
9.4 Si estas causas perduraran por más de sesenta (60) días, cada parte podrá solicitar de la otra, un nuevo plazo para el cumplimiento de las obligaciones. Si las obligaciones contractuales no se cumplen en el nuevo plazo acordado, cualquier parte podrá resolver el Contrato, por medio de comunicación escrita, sin necesidad de demandar su resolución ante ningún tribunal.

10. RECLAMACIONES.

10.1 Las partes podrán reclamarse mutuamente por escrito, ante el incumplimiento o cumplimiento inadecuado de sus obligaciones contractuales, firmado por la autoridad que suscribió el Contrato, con duplicado como acuse de recibo a la parte reclamada y deberá notificarse directamente a las direcciones que se establecen en las generales de cada una de las Partes o por medio de correo certificado dentro del término de treinta (30) días naturales, contados a partir del día siguiente de la fecha en que se tuvo conocimiento del incumplimiento.
10.2 La parte reclamada deberá examinar la reclamación y dar respuesta sobre su contenido dentro del término de treinta (30) días naturales siguientes a su recibo.
10.3 En caso de que la parte reclamada no dé respuesta dentro del plazo anteriormente concedido se entenderá rechazada la reclamación y quedará expedita la vía judicial.


11. SOLUCIÓN DE CONFLICTOS.

11.1 Las partes se comprometen a dar cumplimiento al presente Contrato de buena fe. Cualquier discrepancia que surja en cuanto a la interpretación y ejecución de las cláusulas del presente Contrato, la resolverán a través de negociaciones amigables y en caso de no llegar a acuerdo la someterán a la decisión de la Sala de lo Económico del Tribunal Provincial Popular competente, cuyo fallo será de obligatorio cumplimiento por las partes.

12. AVISO.

12.1 Las Partes acuerdan que ante la eventual posibilidad de un incumplimiento en la ejecución del presente Contrato, se enviarán los avisos y notificaciones correspondientes debidamente fundamentadas, por escrito, con setenta y dos (72) horas de antelación a la fecha eventual del posible incumplimiento, a través de correo electrónico o personalmente a las direcciones que se establecen en las generales de cada una de las Partes; quedando exoneradas las mismas de las penalidades establecidas en el presente Contrato.

13. MODIFICACIÓN, TERMINACIÓN Y RESOLUCIÓN DEL CONTRATO.

13.1Toda proposición de modificación o terminación del Contrato deberá ser comunicada por escrito a la otra parte, dentro del término de treinta (30) días hábiles anteriores a la fecha en que desee que dicha modificación o terminación surta efecto.
13.2 La parte que reciba la propuesta de modificación o de terminación, deberá dar respuesta a la otra dentro de los diez (10) días hábiles siguientes al de su recibo, y en caso de aceptación suscribir el Suplemento correspondiente dentro de los quince (15) días hábiles siguientes a la aceptación expresa de la propuesta. Transcurrido el término de diez (10) días hábiles sin contestar, se entenderá rechazada la misma.
13.3 El Contrato puede terminar por acuerdo de las partes, declaración judicial o por cualquier otra de las causas de extinción de las obligaciones, reconocidas en las normas jurídicas.
13.4 Las partes pueden resolver unilateralmente el Contrato por incumplimiento de las obligaciones esenciales, debiendo comunicarlo por escrito a la otra, dentro del término de treinta (30) días hábiles anteriores  a la fecha en que pretende resolver el mismo.

14. CONFIDENCIALIDAD.

14.1- Las partes se brindarán y recibirán recíprocamente la información y documentación para la realización de las prestaciones establecidas en el presente contrato, la que reviste un carácter absolutamente confidencial. En consecuencia, AMBAS PARTES asumen la obligación de mantener el principio de absoluta confidencialidad de dicha información, así como de utilizar ésta exclusivamente para el cumplimiento de este contrato, reservándose el derecho de establecer la acción por indemnización de daños y perjuicios que sea procedente en caso de incumplimiento.

15. VIGENCIA:

15.1-El presente Contrato entra en vigor a partir de la fecha de su firma por el término de UN (1) AÑO, prorrogable sucesivamente, por iguales períodos de tiempo, siempre que las partes no manifiesten su voluntad de terminarlo, previa comunicación con treinta (30) días hábiles de antelación a la fecha en que se desea que surta efecto dicha terminación.

16. LEY APLICABLE:

16.1- La legislación aplicable para la interpretación y ejecución del presente Contrato será la Ley Cubana, en especial el Decreto Ley No. 304, de fecha 1 de Noviembre del 2012 “De la Contratación Económica”, el Decreto No. 310, de fecha 17 de Diciembre del 2012 “De los tipos de Contratos”, la Resolución No. 101, de fecha 18 de Noviembre del 2011, del Banco Central de Cuba, el Código Civil y demás disposiciones jurídicas vigentes en la República de Cuba que sean de aplicación supletoria a la presente relación jurídica.

17. OTRAS CONDICIONES:

17.1- Los Anexos, que en número de siete (7), se adjuntan al presente Contrato, se consideran a todos los efectos legales como parte integrante del mismo.
17.2- Las Partes no podrán ceder, transferir o enajenar, a terceros, las obligaciones y derechos adquiridos en virtud del presente Contrato y sus Anexos, sin que medie un Suplemento suscrito por ambas partes.
17.3-Las Partes conservarán archivado el presente Contrato por el término de cinco (5) años, después de su vencimiento.
17.4- Los Anexos No. 2, 4, 5, y 6 serán suscritos por las entidades territoriales de ambas partes y se adjuntarán al presente Contrato, sin que sea necesario que medie Anexo o Suplemento alguno, siendo responsables de su actualización, los máximos directivos de dichas entidades territoriales.
'), 0, 'J');
        
        ///Aqui tengo que poner la fecha de firma del contrato
    //$x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetY($y + 20);
    $pdf->MultiCell(0, 7, '  _____________________                               _____________________   ', 0, 'C');
    $pdf->MultiCell(0, 7, '  Por ETECSA                                                  Por el AGENTE   ', 0, 'C');
    $pdf->MultiCell(0, 7, '  Nombre y Apellidos                                     Nombre y Apellidos   ', 0, 'C');
    $pdf->MultiCell(0, 7, '  Cargo                                                               Cargo   ', 0, 'C');    
    }

    public function imprimirAction(){
        $contrato_agencia_persona_juridica = $this->admin->getSubject();
        $pdf = new \FPDF('P','mm','Letter');
        $this->EncabezamientoHeader($pdf, $contrato_agencia_persona_juridica);
        
        return new Response($pdf->Output(),200,array('Content-Type'=>'application/pdf'));
    }//put your code here
}
