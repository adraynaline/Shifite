
$(document).ready(function() {
    $('#formRecipe').on('submit', function() {
 
        var recette_name = $('#recette_name').val();
        var description = $('#description').val();
        var photo = $('#photo').val();
        var ingredient = $('#ingredient').val();
        var time_prepa = $('#time_prepa').val();
        var time_cuisson = $('#time_cuisson').val();
        var time_repos = $('#time_repos').val();
        var level = $('#level').val();
       var preparation = $('#preparation').val();
       
       
       
        if(recette_name == '' || description == '' || photo == '' || ingredient == '' || time_prepa == '' || time_cuisson == '' || time_repos == '' || preparation == '' || level == '') {
            alert('Les champs doivent êtres remplis');
        } else {
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') {
                        alert('Recette Ajoutée avec Success, Congrats Man !');
                        window.setTimeout("location=('?appli=home&action=myrecipe');",1000);
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
    });
});