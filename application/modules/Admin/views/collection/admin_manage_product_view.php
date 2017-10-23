<style type="text/css">
    textarea {
    resize: none;
}
</style>
<div class="page">
    <div class="page-content container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="page-header">
                    <h1 class="page-title"><?php if(isset($product_details->product_name)&& strlen(trim($product_details->product_name))) { echo "Manage Product"; }else{ "Add New Product"; } ?></h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin'); ?>">Home</a></li>
                         <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/collection_list'); ?>">Collection</a></li>
                           <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/all_products'); ?>">All Products</a></li>
                        <li class="breadcrumb-item active"><?php if(isset($product_details->product_name)&& strlen(trim($product_details->product_name))) { echo $product_details->product_name; }else{ echo "Add New Product"; } ?></li>
                    </ol>
                </div>
            </div>

            <?php 
            
            foreach ($sub_catlist as $subcat) { 
                $subcat_array[$subcat->cat_id][]=$subcat;
                
            } 

            //for selected subcat in select2 plugin
            $subcat_id_array=array();
            if(isset($product_subcat_list) && !empty($product_subcat_list))
            {
                foreach ($product_subcat_list as $key => $value) {
                    $subcat_id_array[]=$value->sub_cat_id;
                }
            }
            ?>
            <!-- start from here -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12 col md-12 mt-20">
                        <?php $arr=array('class'=>"form-horizontal");
                            echo form_open('Admin/add_update_product',$arr); ?>
                            <div class="form-group row">
                                <label for="Style Number/Name" class ="form-control-label col-sm-3">Style Number/Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="product_name" placeholder="Enter Style Number/Name" value="<?php if(isset($product_details->product_name) && strlen(trim($product_details->product_name))) { echo html_escape($product_details->product_name); } ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Collection " class ="form-control-label col-sm-3">Collection Type</label>
                                <div class="col-sm-8">
                                    <select class="form-control" for="Collection" name="collection_id">
                                        <?php foreach ($collection_list as $collection) { ?>
                                            <option <?php if(isset($product_details->collection_id) && $product_details->collection_id==$collection->collection_id){ echo "selected"; } ?> value="<?php echo $collection->collection_id;  ?>"><?php echo $collection->collection_name;  ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php if(isset($product_details->product_id)){ ?>
                                    <input type="hidden" name="product_id" value="<?php echo $product_details->product_id; ?>">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Brand" class ="form-control-label col-sm-3">Brand</label>
                                <div class="col-sm-8">
                                    <select class="form-control"  for="Brand" name="brand_id">
                                        <?php foreach ($brands_list as $brand) { ?>
                                            <option <?php if(isset($product_details->brand_id) && $product_details->brand_id==$brand->brand_id){ echo "selected"; } ?> value="<?php echo $brand->brand_id;  ?>"><?php echo $brand->brand_name;  ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Season" class ="form-control-label col-sm-3">Season</label>
                                <div class="col-sm-8">
                                    <select class="form-control"  data-plugin="select2" for="Season" name="season_id">
                                        <?php foreach ($season_list as $season) { ?>
                                            <option <?php if(isset($product_details->season_id) && $product_details->season_id==$season->season_id){ echo "selected"; } ?> value="<?php echo $season->season_id;  ?>"><?php echo $season->season;  ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <?php foreach ($catagory_list as $catagory) { ?>
                            <div class="form-group row">
                                <label for="Season" class ="form-control-label col-sm-3"><?php echo $catagory->cat_name; ?></label>
                                <div class="col-sm-8">
                                    <select class="form-control" data-placeholder="Select catagories of <?php echo $catagory->cat_name; ?>" for="sub catagories for <?php echo $catagory->cat_name; ?>" multiple data-plugin="select2" name="sub_cat_id[]">
                                        <?php foreach ($subcat_array[$catagory->cat_id] as $subcat) { ?>
                                            <option <?php if(in_array($subcat->sub_cat_id,$subcat_id_array)) { echo "selected"; } ;?>  value="<?php echo $subcat->sub_cat_id;  ?>"><?php echo $subcat->sub_cat_name;  ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <?php } ?>

                            <div class="form-group row">
                                <label for="Store Address" class ="form-control-label col-sm-3">Product Description</label>
                                <div class="col-sm-8">
                                    <textarea name="product_desc" placeholder="Add product address" class="form-control" style="height: 102px;"><?php if(isset($product_details->product_desc) && strlen(trim($product_details->product_desc))) {  echo html_escape($product_details->product_desc); } ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-9 offset-md-3">
                                <button type="submit" class="btn-primary btn">
                                    <?php if(isset($product_details->product_id)){ ?>Update <?php }else { ?>Add New <?php } ?></button>
                            </div>
                        <?php echo form_close(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page