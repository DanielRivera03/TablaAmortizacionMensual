# Calculador Cuotas Mensuales Préstamos



![1](https://user-images.githubusercontent.com/44457989/163483819-e9210de8-855d-40e8-8ab6-c4ddbd5fb441.png)



<h2>Configuración Inicial</h2>

<p><b>1) Configuración variable global de aplicación:</b> Este proyecto ha sido trabajado bajo el prefijo del puerto número 90. (http://localhost:90/) Por lo cual si usted tiene configurado el mismo con otro puerto, o en su defecto mantiene el estándar original, debe realizar ese cambio; caso contrario los estilos y redirecciones de la aplicación no funcionarán y será imposible el óptimo funcionamiento del mismo.</p>


![carbon](https://user-images.githubusercontent.com/44457989/211114848-2ff5b15b-490e-4cbc-bf1f-2d81cbb69a40.png)


<p><b>2) Configuración importación estilos CSS:</b> Lo mencionado en el primer punto, algunos estilos css son importados mediante una regla especial css. Motivo por el cual usted debe cambiar la URL asignada por defecto a la de su servidor (entiéndase por defecto http://localhost:90/) Por favor ubique el archivo en TablaAmortizacionMensual/css/style.css y realice los cambios pertinentes.</p>


![carbon (2)](https://user-images.githubusercontent.com/44457989/211121175-2ac3a2c7-b9db-41d9-986d-b15a812de4d0.png)



<h2>¿Qué Puedo Realizar?</h2>


<p>Usted puede simular el registro de una solicitud crediticia, y calcular la cuota mensual respectiva más el cálculo de la tasa de interés que usted designe. <b>Por favor tome en cuenta que este sistema realiza el cálculo de la tasa de interés mensual y no anual, pero perfectamente se puede adecuar a otras necesidades.</b></p>




<h2>¿Deseas probar la demo en vivo?</h2>


<p>Por favor acceda a la siguiente URL y verifique el funcionamiento de este sistema: http://amortizacionmensual.unaux.com/.<b> No existe el manejo de sesiones. Únicamente debe completar todos los campos solicitados.</b></p>




<h2>Consideraciones</h2>


<p><b>1) Exclusión de fines de semana:</b> Este sistema realiza un reajuste a las fechas de pago, cuando la solicitud crediticia ingresada comprende desde las fechas 01 - 24 de cada mes respectivamente. En base a lo anterior, realiza el tratamiento de sumar a la fecha de pago si corresponde día sábado (2 días) y respectivamente domingos (1 día). Este punto es totalmente modificable.</p>


<p><b>2) Límite Fechas de Pago:</b> En base a lo anteriormente descrito, las fechas que comprenden desde el 25 a 31 de cada mes, no reciben el tratamiento mencionado. De igual manera todas las solicitudes ingresadas en esas fechas, su última fecha de pago será cada 28 de mes. Sin distinción de fines de semana.</p>




<p><b>3) Este proyecto es informativo y simula un entorno dónde se podría poner en práctica lo anterior. Sí desea realizar gestiones más específicas, necesita de la conectividad a una base de datos.</b></p>


<p><b>4) Impuesto Agregado:</b> Además de realizar el cálculo en base a la tasa de interés establecida, incluye el impuesto sobre el IVA vigente en El Salvador. El cuál su porcentaje es el 13%.</p>

<h2>Fórmula Matemática</h2>


![carbon (1)](https://user-images.githubusercontent.com/44457989/211115388-1218fed7-9abf-4b14-bbe4-e22ea342d517.png)


<h2>Algunas Capturas</h2>

<h3>* Ingreso Solicitudes</h3>



![Captura web_6-1-2023_171944_localhost](https://user-images.githubusercontent.com/44457989/211115699-325b6e33-0314-4476-90f9-ce7002086590.jpeg)



<h3>* Muestra Información Final</h3>



![Captura web_6-1-2023_172038_localhost](https://user-images.githubusercontent.com/44457989/211115784-85eb7d68-450e-4f47-a495-9e2cd669bbed.jpeg)




<h3>* Vista Impresión</h3>




![Captura de pantalla 2023-01-06 172151](https://user-images.githubusercontent.com/44457989/211115875-8fcc89f0-72da-4f28-8997-b7916493d3d9.png)



<h3>* Documento PDF - Vista Impresión</h3>


![Captura de pantalla 2023-01-06 172324](https://user-images.githubusercontent.com/44457989/211116044-0ca5c42c-4a84-4cc9-92e9-1e6b2341605f.png)



![Captura de pantalla 2023-01-06 172350](https://user-images.githubusercontent.com/44457989/211116052-34b67f46-2b7d-481d-bcde-8a70542b94fc.png)


<h2>Muchas gracias por obtener este repositorio hecho con algunas tazas de café ☕ ❤️</h2>



![poster_5dfe44fc8738c205dc24cc919a7de3fd](https://user-images.githubusercontent.com/44457989/84722426-6d047d80-af40-11ea-8a6d-31b4466c1c08.png)




<h4>*** Fecha de Subida: 14 abril 2022 ***</h4>


