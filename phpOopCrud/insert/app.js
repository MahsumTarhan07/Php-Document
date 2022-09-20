$(document).ready(function () {
    $('#btnsave').on('click', function(){
        $('#btnsave').attr('disabled','disaabled');
        var name = $('#name').val();
        var lastname = $('#lastname').val();
        var city_name = $('#city_name').val();
        var email = $('#email').val();

        $.ajax({
            url:"process.php",
            data : {
                name:name,
                lastname:lastname,
                city_name:city_name,
                email:email
            },
            cache: false,
            success : function(dataResult){
                var dataResult = JSON.parse(dataResult);

                if(dataResult.statusCode==200){
                    $("#success").html('Data Added Successfully');
                }else if(dataResult.statusCode==201){
                    alert("Eror occured !");
                }
            }
        });
    });
});