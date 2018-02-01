$(function(){
  $('.instru').click(function(e){
    // Déselectionne l'ancien élément sélectionné
    $(this).siblings().removeClass("sel-instru");
    // Sélectionne l'élément cliqué
    $(this).addClass("sel-instru");
    // Masque toutes les sous-familles
    $(this).parents(".row").nextAll().hide();
    // N'affiche que la prochaine sous-famille
    $(this).parents(".row").next().show();
    // Déselectionne l'ancien élément sélectionné de la prochaine sous-famille
    $(this).parents(".row").next().find('.sel-instru').removeClass('sel-instru');
  });
});
