 $(document).ready(function(){
            $('#myDropDown').change(function(){
                //Selected value
                var inputValue = $(this).val();
                alert("value in js "+inputValue);

                //Ajax for calling php function
                $.post('menu.php', { dropdownValue: inputValue }, function(data){
                    alert('ajax completed. Response:  '+data);
                    
                });
            });
        });