$( document ).ready(function(){
    let age = document.getElementById('name');

    age.addEventListener('keypress', e => {
        if (e.key === "Enter") {    // if user press Enter
            let val = $('#name').val(); // get input text

            if (val === "clear") {  // if command is 'clear'
                $('#result_form').empty();  // emptying output
            } else {
                $.ajax({    // execute command
                    url: 'core/route.php',
                    type: "POST",
                    data: $("#mainForm").serialize(),
                    success: function(response) {
                        let answ = $.parseJSON(response)
                        $('#result_form').append(answ.result);  // add result to the output
                    }
                });
            }

            document.getElementById("mainForm").reset();    // clearing input in form
        }
    });
});