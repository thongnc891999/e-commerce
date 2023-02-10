$(document).ready(function () {
    var list = []
    $('.menu_mobile .fa-bars').click(function (e) { 
      e.preventDefault();
      if (document.querySelector('.nav_menu-mobile')!=null){
          if( $('.nav_menu-mobile').css('display')=="none"){
            $('.nav_menu-mobile').show();
          }
          else{
            $('.nav_menu-mobile').hide();
          }
      }
      else{
        obj = document.createElement('ul');
        obj.classList.add("nav_menu-mobile");
        list_item = $('.header__menu .menu__list .menu__item')
        for(var i =1;i<list_item.length;i++){
          obj.appendChild(list_item[i])
        }
        $(".menu_mobile").append(obj)
      }
 
  });

});