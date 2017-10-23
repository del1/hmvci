<!-- Page -->
<style type="text/css">
    @media (min-width: 768px) and (max-width: 991px){
        
    }
</style>
<div class="page">
    <div class="page-header">
        <h1 class="page-title"><?php echo $page; ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin'); ?>">Home</a></li>
            <li class="breadcrumb-item active">Manage All Assets</li>
        </ol>
    </div>
    <div class="page-content container-fluid">
        <div class="panel-body">
            <h3>Collection List</h3> <a href="<?php echo base_url('Admin/all_products/');?>" class="btn btn-primary" role="button">All Product List</a>
            <table id="collection_table" class="table table-hover dataTable table-striped w-full table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Collection Number</th>
                        <th>Name</th>
                        <th>Status</th>
<!--                        <th>Action</th>-->
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($collection_list as $collection) { ?>
                    <tr>
                        <td><?php echo $collection->collection_id; ?></td>
                        <td><?php echo $collection->collection_name; ?></td>
                        <td><input type="checkbox" data-id="<?php echo $collection->collection_id; ?>" data-pk="collection_id" data-type="ref_coll" class="switch" <?php if($collection->is_active=='true'){echo 'checked';} ?> /></td>
<!--                        <td><a href="javascrit:void(0)" href1="<?php //echo base_url('Admin/manage_collection/'.$collection->collection_id);?>" class="btn btn-primary" role="button">Manage</a></td>-->
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Page -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        var table=$("#collection_table").DataTable( {
            "order": [[ 0, "asc" ]],
            "bAutoWidth": true,
            stateSave: true,
            responsive: true,
            "fnDrawCallback": function(e) {
                var elems = Array.prototype.slice.call(document.querySelectorAll('.switch'));
                elems.forEach(function(elem) {
                    if(!elem.hasAttribute("data-switchery")){
                        var switchery = new Switchery(elem,{color: '#3aa99e',secondaryColor: '#FF0000'});    
                    }
                });
                }
        })
    
    
    $(".switch").change(function(event) {
            var csrfName = "<?php echo $this->security->get_csrf_token_name(); ?>",
            csrfHash = "<?php echo $this->security->get_csrf_hash(); ?>";
            var changeCheckbox = $(this)[0];//target
            var data={is_active:changeCheckbox.checked,pk_id:$(changeCheckbox).data('id'),type:$(changeCheckbox).data('type'),[csrfName]:csrfHash};
            $.post("<?php echo base_url('Admin/changeAllStatus') ?>", data, 
                function(data, textStatus, xhr) {
                    console.log(data);
                    if(changeCheckbox.checked)
                    {
                        toastr_type="success";
                        str="Store Activated successfully";
                    }else{
                        toastr_type="warning";
                        str="Store Deactivated successfully";
                    }
                    toastr.options = {
                      "closeButton": true
                    }
                    toastr[toastr_type](str);
            });
        });
    });
</script>