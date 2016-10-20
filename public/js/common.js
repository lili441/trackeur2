



/**
 *  Fonctions d'alerte de l'utilisateur.
 */


/**
 * Alerte l'utilisateur d'une information
 * @param message Message à afficher.
 */
function infoBox( message )
{
    _displayMessageBox( 'info', message ) ;
}

/**
 * Alerte l'utilisateur d'un disfonctionnement
 * @param message Message à afficher.
 */
function successBox( message )
{
    _displayMessageBox( 'success', message ) ;
}

/**
 * Alerte l'utilisateur d'un évènement
 * @param message Message à afficher.
 */
function warningBox( message )
{
    _displayMessageBox( 'warning', message ) ;
}

/**
 * Alerte l'utilisateur d'un disfonctionnement
 * @param message Message à afficher.
 */
function alertBox( message )
{
    _displayMessageBox( 'danger', message ) ;
}


/**
 *  Affiche la boite d'alerte.
 *  @param level Niveau d'alerte ( sucess, info, warning, danger )
 *  @param message Message d'alerte ( format html )
 */
function _displayMessageBox( level, message )
{
    $('#alert-box span:last').html(message) ;
    var alertContainer = $('#alert-container') ;
    var alertBox = $('#alert-box').clone() ;
    alertBox.addClass('alert-' + level) ;
    alertBox.removeAttr('id') ;
    alertContainer.append(alertBox) ;
    alertBox.slideDown().delay(3000).slideUp() ;
}


/**
 *  Traitement du retour d'une requête ajax
 */
function onAjaxQueryFail( jqXHR, textStatus, errorThrown )
{
    // Si c'est une erreur de protocole
    if( textStatus != 'error' )
    {
        message = "Impossible de contacter le serveur. Raison : '" + textStatus + "'" ;
    }
    // Si c'est le serveur qui a fait une erreur
    {
        message = "Le serveur a retourné une erreur " ;

        // On récupère le status
        message += jqXHR.status + ' ( ' + jqXHR.statusText + ' )' ;

        // On essaye de récupérer un message dans le corps de la réponse
        var json = jqXHR.responseJSON ;
        if( json && json['message'] )
        {
            message += ' : <br/>' + json['message'] ;
        }
    }

    // On repasse le curseur en état normal
    $('body').css('cursor', '') ;

    // On affiche la boite d'erreur
    alertBox(message) ;
}

