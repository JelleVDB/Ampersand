/**
 * Created by jelle on 6/02/2015.
 */
/*$('#events .eventDate').each(function()
{

});*/

$('#events tr').each(function(){
    var tableRow = $(this);
    $(this).find('.eventDate').each(function(){
        var eventDateString = $(this).html().split("/"),  //dd/mm/yyyy
            currentDate = new Date(),
            eventDate = new Date(eventDateString[2], eventDateString[1]-1, eventDateString[0]);

        if(eventDate < currentDate)
        {
            //Event is al voorbij!
            tableRow.addClass('eventPassed');
        }
    });
});
