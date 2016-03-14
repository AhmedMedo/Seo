  $(document).ready(function(){

      CKEDITOR.replace( 'editor');

      var counter=0;
      $('#counter').html(counter);
      $('#excrypt').keyup(function(){
          counter=$('#excrypt').val().length;
          $('#counter').html(counter);
          if(counter>155)
          {
              alert('you have exceed the 155 character limit');
          }
      });




});
   