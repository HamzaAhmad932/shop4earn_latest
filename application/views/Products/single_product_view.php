<!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
<div class="page-content-wrapper">
  
  <div class="container">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">
     

 <?php foreach($products as $r):?>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Code</label>
                                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $r->product_code; ?>" name="product_code"  id="example-text-input" readonly="">
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Name</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="<?php echo $r->product_name; ?>" name="product_name" id="example-text-input" readonly="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Basic Volume</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="<?php echo $r->basic_vol; ?>" name="basic_volume" id="example-text-input" readonly="">
                                                </div>
                                            </div>
 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Booster Volume</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="<?php echo $r->booster_vol; ?>" name="booster_volume" id="example-text-input" readonly="">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Purchase Cost</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="<?php echo $r->purchase_cost; ?>" name="purchase_cost" id="example-text-input" readonly="">
                                                </div>
                                            </div>

 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Description</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="<?php echo $r->product_des; ?>" name="product_des" id="example-text-input" readonly="">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Category</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="<?php echo $r->product_cat; ?>" name="product_cat" id="example-text-input" readonly="">
                                                </div>
                                            </div>
 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Related Product</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="<?php echo $r->related_product; ?>" name="related_products" id="example-text-input" readonly="">
                                                </div>
                                            </div>
       <div class="form-group row">
            <div class="form_box">
            <h1>Image</h1>
            
                 <img class="" width="60px" height="60px" src="<?php echo base_url().$r->img_path; ?>" alt=""/>             
            
        </div>
                                              
                                            </div>
 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Rate</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="<?php echo $r->product_price; ?>" name="rate" id="example-text-input" readonly="">
                                                </div>
                                            </div>

 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Quantity</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="<?php echo $r->qty; ?>" name="qty" id="example-text-input" readonly="">
                                                </div>
                                            </div>
 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Discount</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="<?php echo $r->discount; ?>" name="discount" id="example-text-input" readonly="">
                                                </div>
                                            </div>

 <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Net Amount(after discount)</label>
                                                <div class="col-sm-10">
    <input class="form-control" type="text" value="<?php echo $r->net_amount; ?>" name="net_amount" id="example-text-input" readonly="">
                                                </div>
                                            </div>



                                          
                                                    
                                     

                                    <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div>
                

</div><!-- container -->