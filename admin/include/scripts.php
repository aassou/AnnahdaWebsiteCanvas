<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
<script src="assets/js/progress-bar/src/jquery.velocity.min.js"></script>
<script src="assets/js/progress-bar/number-pb.js"></script>
<script src="assets/js/progress-bar/progress-app.js"></script>
<!-- MAIN EFFECT -->
<script type="text/javascript" src="assets/js/preloader.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/load.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/timepicker/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="assets/js/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/js/datepicker/clockface.js"></script>
<script type="text/javascript" src="assets/js/datepicker/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">
    $('#datetimepicker1').datetimepicker({
        language: 'pt-BR'
    });
    $('#dp1').datepicker()
    $('#dpYears').datepicker();
    $('#timepicker1').timepicker();
    $('#t1').clockface();
    $('#t2').clockface({
        format: 'HH:mm',
        trigger: 'manual'
    });

    $('#toggle-btn').click(function(e) {
        e.stopPropagation();
        $('#t2').clockface('toggle');
    });
    
    $("#ssn").mask("99--AAA--9999", {
        placeholder: "*"
    });
</script>