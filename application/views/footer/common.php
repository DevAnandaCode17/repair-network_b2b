<footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; <?php echo date('Y') ?> <a href=""> Yarab Technologies</a>.</strong> All rights reserved.
            </footer>
            </body>
            <!-- jQuery 3 -->

            <script type="text/javascript">
                var base_url = '<?php echo base_url() ?>';
            </script>

            <script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="<?php echo base_url() ?>vendors/jquery-ui/jquery-ui.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="<?php echo base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- Sparkline -->
            <script src="<?php echo base_url() ?>vendors/jquery-sparkline/jquery.sparkline.min.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="<?php echo base_url() ?>vendors/jquery-knob/jquery.knob.min.js"></script>
            <!-- InputMask -->
            <script src="<?php echo base_url() ?>vendors/moment/moment.js"></script>
            <script src="<?php echo base_url() ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
            <!-- datetime picker -->
            <script src="<?php echo base_url() ?>vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src="<?php echo base_url() ?>vendors/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
            <!-- Sweet Alert -->
            <script src="<?php echo base_url() ?>vendors/js/sweetalert.min.js"></script>
            <!-- AdminLTE App -->
            <script src="<?php echo base_url() ?>vendors/js/adminlte.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="<?php echo base_url() ?>vendors/js/pages/dashboard.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="<?php echo base_url() ?>vendors/js/demo.js?v=0.2"></script>
            <!-- Alert Custom -->
            <script src="<?php echo base_url() ?>vendors/js/alertcustom.js"></script>
            <!-- Select2 js-->
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 
            <!-- Stripe JS -->
            <script src="https://js.stripe.com/v3/"></script>
            <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
            <?php
            $controllername = $this->uri->rsegments[1];
            $jsfilename = $this->session->userdata('jsfilename');
            if (strpos($jsfilename, $controllername . '.js') !== false)
                echo '<script src="' . $jsfilename . '?time='.time().'"></script>';
            ?>

            <!--the script-->
            </html>