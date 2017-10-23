<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">All Products</h1>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin'); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/collection_list'); ?>">Collection</a></li>
        <li class="breadcrumb-item active">All Products</li>
      </ol>
    </div>
    <div class="page-content container">
        <div class="panel-body">
            <a href="<?php echo base_url('Admin/manage_product'); ?>" class="btn btn-success">Add Product</a>
            <table id="store_list_table" class="table table-hover dataTable table-striped w-full table-bordered table-responsive" ><!-- data-plugin="dataTable" -->
            <thead>
              <tr>
                <th>Style Number/Name</th>
                <th>Collection</th>
                <th>Brand</th>
                <th>Season</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($product_list as $product) { ?>
                    <tr>
                        <td><?php echo $product->product_name; ?></td>
                        <td><?php echo $product->collection_name; ?></td>
                        <td><?php echo $product->brand_name; ?> </td>
                        <td><?php echo $product->season; ?> </td>
                        <td><input type="checkbox" data-id="<?php echo $product->product_id; ?>" data-pk="product_id" data-type="tbl_product" class="switch" <?php if($product->is_active=='true'){echo 'checked';} ?>  /></td>
                        <td><a href="<?php echo base_url('Admin/manage_product/'.$product->product_id);?>" class="btn btn-primary" role="button">Manage</a>
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
        var table=$("#store_list_table").DataTable( {
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
                    if(changeCheckbox.checked)
                    {
                        toastr_type="success";
                        str="Product Activated successfully";
                    }else{
                        toastr_type="warning";
                        str="Product Deactivated successfully";
                    }
                    toastr.options = {
                      "closeButton": true
                    }
                    toastr[toastr_type](str);
            });
        });
    });
</script>