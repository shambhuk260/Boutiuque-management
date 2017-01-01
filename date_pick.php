<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>

 <script type="text/javascript">
var dateToday = new Date();
var dates = $("#from, #to").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 3,
    minDate: dateToday,
    onSelect: function(selectedDate) {
        var option = this.id == "from" ? "minDate" : "maxDate",
            instance = $(this).data("datepicker"),
            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
    }
}); 
 </script>


</head>
<body>


<label for="from">From</label> <input type="text" id="from" name="from"/> <label for="to">to</label> <input type="text" id="to" name="to"/>
</body>
</html>