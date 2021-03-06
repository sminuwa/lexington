    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/bootstrap/js/dist/util.js"></script>
    <script src="bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="bower_components/bootstrap/js/dist/button.js"></script>
    <script src="bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="bower_components/bootstrap/js/dist/popover.js"></script>
    
    <script src="js/main.js?version=4.3.0"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-42863888-9', 'auto');
      ga('send', 'pageview');
    </script>
    <script>
        $(document).ready(function(){
            $("#filter_school").change(function(){
                $("#filter_faculty").html("<option value=''> --select faculty-- </option>");
                $("#filter_department").html("<option value=''> --select department-- </option>");
                $("#filter_programme").html("<option value=''> --select programme-- </option>");
                $.ajax({
                    type: "POST",
                    url: "filter_faculty.php",
                    data: {
                        filter_school: $("#filter_school").val()
                    },
                    beforeSend: function(){
                        $("#filter_faculty").html("<option value=''>wait...</option>");
                    },
                    success:function(response){
                        $("#filter_faculty").html(response);
                    }
                })
            })

            //filter departments
            $("#filter_faculty").change(function(){
                $("#filter_department").html("<option value=''> --select department-- </option>");
                $("#filter_programme").html("<option value=''> --select programme-- </option>");
                $.ajax({
                    type: "POST",
                    url: "filter_department.php",
                    data: {
                        filter_faculty: $("#filter_faculty").val()
                    },
                    beforeSend: function(){
                        $("#filter_department").html("<option value=''>wait...</option>");
                    },
                    success:function(response){
                        $("#filter_department").html(response);
                    }
                })
            })
            //filter programmes
            $("#filter_department").change(function(){
                $("#filter_programme").html("<option value=''> --select programme-- </option>");
                $.ajax({
                    type: "POST",
                    url: "filter_programme.php",
                    data: {
                        filter_department: $("#filter_department").val()
                    },
                    beforeSend: function(){
                        $("#filter_programme").html("<option value=''>wait...</option>");
                    },
                    success:function(response){
                        $("#filter_programme").html(response);
                    }
                })
            })
        })
    </script>