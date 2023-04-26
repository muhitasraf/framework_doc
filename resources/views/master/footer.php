            </main>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script> -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo asset('js/select2.min.js')?>"></script>
    <script src="<?php echo asset('js/toastr.min.js')?>"></script>

    <script>
        let table = new DataTable('#myTable');

    </script>
    <script type="text/javascript">
        
        $(document).ready(function() {
            //---------------Add New Row In Table-------------------
            var currentRow = $("table.row_add tbody.append_row tr:last").html();
            $(".add_row_btn").click(function() {
                for (var k = 0; k < 3; k++) {
                    $("table.row_add").append('tbody.append_row <tr>' + currentRow + '</tr>');
                }
                $(".select2").select2();
            });

            //----------------Delete Row From Table-----------------
            $('table.row_add').on('click', '.remove_row', function () {
                $(this).closest('tr').remove();
            });

            //----------------Initialize Select2-----------------
            $(".select2").select2({

            });

            // Set the options that I want
            let $type = "<?php echo session('notification_type'); ?>";
            let $message = "<?php echo session('notification_message'); ?>";
            
            if($type != null){
                toastr.options = {
                    "closeButton": true,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };

                switch($type){
                    case 'info':
                        toastr.info($message);
                        break;
                    case 'warning':
                        toastr.warning($message);
                        break;
                    case 'success':
                        toastr.success($message);
                        break;
                    case 'error':
                        toastr.error($message);
                        break;
                }
            }

            initMenu();
        });
        function initMenu() {
            $('#menu ul').hide();
            $('#menu li a').click(function() {
                $('#menu ul').hide('normal');
                // check if the next element is hidden
                if($(this).next().is(":hidden")) {
                    $(this).next().slideToggle('normal');
                }
            });
        }
    </script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Write Your Content Here...',
            tabsize: 2,
            height: 400
        });
    </script>
    
    <?php
       //unset notification sessions
       session('notification_type','');
       session('notification_message','');
    ?>
</body>

</html>

