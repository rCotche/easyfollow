$(document).ready(function() {
    getUtils();
});
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
function getUtils() {
    getFlatpickrCalendar();
}