$(document).ready(function () {
   //Initialize tooltips
   $('.nav-tabs > li a[title]').tooltip();

   //Wizard
   $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

      var $target = $(e.target);

      if ($target.parent().hasClass('disabled')) {
         return false;
      }
   });

   $(".next-step").click(function (e) {
      if($("#form_contato").valid()){
         var $active = $('.wizard .nav-tabs li.active');
         $active.next().removeClass('disabled');
         nextTab($active);
      }
   });

   $(".prev-step").click(function (e) {
      var $active = $('.wizard .nav-tabs li.active');
      prevTab($active);
   });
});

function nextTab(elem) {
   $(elem).next().find('a[data-toggle="tab"]').click();
}

function prevTab(elem) {
   $(elem).prev().find('a[data-toggle="tab"]').click();
}

$().ready(function() {
   $("#form_contato").validate({
      rules: {
         exampleInputEmail1_x1: {
            required: true,
            email: true
         }
      },
      messages: {
         exampleInputEmail1_x1: {
            required: "Informe o e-mail",
            email: "Informe um e-mail válido"
         }
      }
   });
});