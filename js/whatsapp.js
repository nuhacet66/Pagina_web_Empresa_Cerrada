(function () {
  var options = {
    whatsapp: "623994994", // Reemplaza "tu_numero_de_telefono" con tu número de teléfono de WhatsApp Business
    call_to_action: "¡Contáctanos!", // Texto del enlace o botón
    position: "right", // Posición del widget (right o left)
  };
  var proto = document.location.protocol,
    host = "getbutton.io",
    url = proto + "//static." + host;
  var s = document.createElement("script");
  s.type = "text/javascript";
  s.async = true;
  s.src = url + "/widget-send-button/js/init.js";
  s.onload = function () {
    WhWidgetSendButton.init(host, proto, options);
  };
  var x = document.getElementsByTagName("script")[0];
  x.parentNode.insertBefore(s, x);
})();
