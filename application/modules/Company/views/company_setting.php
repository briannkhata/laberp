
                                <div class="row">
                                    <div class="col-md-12">
<div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="<?php echo base_url();?>Company/save" method="post" enctype="multipart/form-data">
                                                 <?php $all = $this->M_Company->get_company();
                                                 foreach($all as $row){?>
                                                    <div class="form-body">
                                                         <div class="form-group">
                                                            <label class="control-label">Logo</label>
                                                            <input type="file" class="form-control" placeholder="Laby Logo" name="logo" id="logo">
                                                            <span class="help-block">
                                                            </span>


                                                        <img alt="" id="image" src="<?php echo base_url();?>uploads/logos/<?php echo $row['logo'];?>" class="img-responsive img-thumbnail" style="width: 100px; height: 100px; margin-left: 3%; margin-top: 1%;">

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label">Name</label>
                                                            <input type="text" class="form-control" placeholder="Lab Name" name="name" value="<?php echo $row['name'];?>">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Email</label>
                                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" value="<?php echo $row['email'];?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Phone</label>
                                                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo $row['phone'];?>">
                                                               
                                                        </div>
                                                         <div class="form-group">
                                                            <label class="control-label">Telphone</label>
                                                                <input type="tel" class="form-control" name="telphone" id="Telphone" placeholder="telphone" value="<?php echo $row['telphone'];?>">
                                                               
                                                        </div>
                                                         <div class="form-group">
                                                            <label class="control-label">Currency</label>
                                                                <input type="text" class="form-control" name="currency" id="currency" placeholder="Currency" value="<?php echo $row['currency'];?>">
                                                               
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Address</label>
                                                            <div class="input-icon">
                                                                            <textarea class="form-control" name="address" id="address">
                                                                        <?php echo $row['address'];?>
                                                                    </textarea>
                                                                </div>
                                                        </div>

                                                       
                                                       
                                                       
                                                    </div>
                                                    <div class="form-actions">
                                                       
                                                        <div class="btn-set pull-left">
                                                                <input type="hidden" name="labo_id" id="labo_id" value="<?php echo $row['labo_id'];?>">
                                                            <button type="submit" class="btn default">Save Settings</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php }?>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
    
     document.getElementById("logo").onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById("image").src = e.target.result;
    };
    reader.readAsDataURL(this.files[0]);
};
    
    
    </script>