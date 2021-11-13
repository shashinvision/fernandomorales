jQuery(function () {
  jQuery(".leerMas").bind("click", function () {
    jQuery(this).text(jQuery(this).text() == "Leer más/Lire plus/Read more/Lees meer"? "Ocultar/Hide/Masquer/Verbergen" : "Leer más/Lire plus/Read more/Lees meer");
    jQuery(this).prev().slideToggle();
  });
});
