<script>
    $(document).ready(function(){
        $('.soloNum').keypress(function(event){
           if(event.which < 46 || event.which > 57){
               event.preventDefault();
           }else{
           }
        });
    });
    </script>
