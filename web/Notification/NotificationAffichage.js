/**
 * Created by Sedki on 14/05/2016.
 */

    $(document).ready(function () {
        $("#notificationLink").click(function () {
            $("#notificationContainer").fadeToggle(300);
            $("#notification_count").fadeOut("slow");
            return false;
        });

        //Document Click
        $(document).click(function () {
            $("#notificationContainer").hide();
        });
        //Popup Click
        $("#notificationContainer").click(function () {
            return false
        });

    });