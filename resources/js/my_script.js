$(document).ready(function() {
    getUtils();
});
function getDatatable() {
    if( $('.datatable').length ) 
    {
        $('.datatable').DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "Pas de données disponible dans la table",
                "info": "Affichage des résultats _START_ à _END_ sur un total de _TOTAL_ résultats",
                "infoEmpty": "Pas de données",
                "infoFiltered": "(filtré à partir de _MAX_ résultats)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Affiche _MENU_ résultats",
                "loadingRecords": "Chargement...",
                "processing": "Traitement...",
                "search": "Recherche : ",
                "zeroRecords": "Aucun résultat trouvé",
                "paginate": {
                    "first": "Première page",
                    "last": "Dernière page",
                    "next": ">",
                    "previous": "<"
                },
                "aria": {
                    "sortAscending": ": activer pour trier les colonnes par ordre croissant",
                    "sortDescending": ": activer pour trier les colonnes par ordre décroissant"
                }
            },
            "lengthMenu": [
                [5, 10, 20],
                [5, 10, 20]
            ]
    
        });
    }
    

}
function getFlatpickrCalendar(){
    if( $('.datepicker').length ) 
    {
        flatpickr(".datepicker", {
            locale: "fr",
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    }
}
function btnSupprimer() {
    if ($(".del").length) {

        $(".del").click(function (e) {
            e.preventDefault();

            var myClasses = this.classList;
            progress(10, 10, $(".progressBar"));
            setTimeout(function () {
                $("button."+myClasses[4]).removeAttr("disabled");
            }, 10000);
        });
    }
}

function progress(timeleft, timetotal, $element) {
    var progressBarWidth = timeleft * $element.width() / timetotal;
    $element.find('div').animate({ width: progressBarWidth }, 500).html(Math.floor(timeleft/60) + ":"+ timeleft%60);
    if(timeleft > 0) {
        setTimeout(function() {
            progress(timeleft - 1, timetotal, $element);
        }, 1000);
    }
};
function getUtils() {
    getFlatpickrCalendar();
    getDatatable();
    btnSupprimer();
}