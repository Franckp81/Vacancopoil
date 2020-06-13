$(function () {

    //     $(".navbar a, footer a").on("click", function(event){

    //         event.preventDefault();
    //         var hash = this.hash;

    //         $('body,html').animate({scrollTop: $(hash).offset().top} , 900 , function(){window.location.hash = hash;})

    //     });


    $('#contact-form').submit(function (e) {  // Va éxécuter tout le code suivant lorsqu'un fomulaire sera soumit.
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize(); // Permet de créer la data à envoyé au PHP.

        $.ajax({
            type: 'POST',
            url: 'Utils/contactForm.php',
            data: postdata,
            dataType: 'json',
            success: function (json) {

                if (json.isSuccess) // Exécution du code si le résultat de ma variable isSuccess est true pour l'envoie de mon formulaire.
                {
                    $('#contact-form').append("<p align='center'>Votre message a bien été envoyé.</p>"); // Me permet d'afficher mon message de remerciement.
                    $('#contact-form')[0].reset();// Me permet de remettre mes champs de mon formulaire à zéro.
                }
                else {
                    $('#name + .comments').html(json.nameError); // Permet d'afficher le message d'erreur correspondant au champ ciblé.
                    $('#email + .comments').html(json.emailError);
                    $('#phone + .comments').html(json.phoneError);
                    $('#address + .comments').html(json.addressError);
                    $('#service + .comments').html(json.serviceError);
                    $('#startDate + .comments').html(json.startDateError);
                    $('#endDate + .comments').html(json.endDateError);
                    $('#message + .comments').html(json.messageError);
                }
            }
        });
    });

    $('#declaration-form').submit(function (e) {  
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#declaration-form').serialize(); 

        $.ajax({
            type: 'POST',
            url: 'Utils/declarationForm.php',
            data: postdata,
            dataType: 'json',
            success: function (json) {

                if (json.isSuccess)
                {
                    $('#declaration-form').append("<p align='center'>Votre message a bien été envoyé.</p>"); 
                    $('#declaration-form')[0].reset();
                }
                else {
                    $('#lastnamePetsitter + .comments').html(json.lastnamePetsitterError);
                    $('#firstnamePetsitter + .comments').html(json.firstnamePetsitterError);
                    $('#lastnameClient + .comments').html(json.lastnameClientError);
                    $('#firstnameClient + .comments').html(json.firstnameClientError);
                    $('#service + .comments').html(json.serviceError);
                    $('#startDate + .comments').html(json.startDateError);
                    $('#endDate + .comments').html(json.endDateError);
                    $('#message + .comments').html(json.messageError);
                }
            }
        });
    });


})