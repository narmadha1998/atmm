<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?= $this->lang->line('all_solvedcases') ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url("dashboard.php/" . strtolower($this->router->fetch_class()) . "/index") ?>"><i
                        class="fa fa-dashboard"></i><?= $this->lang->line('home') ?></a></li>
             <li><a href="#"><?= $this->lang->line('cases') ?></a></li>
            <li class="active"><?= $this->lang->line('all_solved_cases') ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="showallsolvedCases" class="table table-bordered table-striped dataTable" role="grid"
                               aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                      <th> <?= $this->lang->line('fir_no') ?></th>
                                    <th> <?= $this->lang->line('victim_name') ?></th>
                                    <th> <?= $this->lang->line('mobile_number') ?></th>
<<<<<<< HEAD:application/views/administrator/users/showallusers.php
                                    <th> <?= $this->lang->line('address1') ?></th>
                                    <th> <?= $this->lang->line('city') ?></th>
                                    
=======
                                    <th> <?= $this->lang->line('offender_name') ?></th>
                                    <th> <?= $this->lang->line('offence_date') ?></th>
                                    <th> <?= $this->lang->line('status') ?></th>
                                    <th> <?= $this->lang->line('actions') ?></th>
>>>>>>> 69ca5bc854a70f8c888bc5b7bf290f3ecd1a0a0c:application/views/user/cases/showallsolvedcases.php
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
<!-- /.row -->
</div>

<!-- /.content -->


<script type="text/javascript">
    var table;
    var base_url = '<?php echo base_url(); ?>';
    $(document).ready(function () {
        //datatables
        table = $('#showallsolvedCases').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?= base_url('index.php/' . strtolower($this->router->fetch_class()) . '/users_cases_ajax_list/solvedcases') ?>",
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [-1], //last column
                    "orderable": false, //set not orderable
                },
            ],
        });
    });
</script>
