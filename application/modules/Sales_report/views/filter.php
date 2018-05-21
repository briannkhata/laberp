      <div class="row">
        <div class="col-md-12">
            
          <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
          <div class="portlet-body" style="padding-top:20px;">
            <div class="portlet-body form">
              <!-- BEGIN FORM-->
              <form action="<?php echo base_url();?>Sales_report/filter_report" class="form-horizontal form-bordered" method="post">
                <div class="form-body">
                  <div class="form-group">
                    <label class="control-label col-md-3">SELECT DATE RANGE</label>
                      <div class="col-md-8">
                            <div class="input-group input-medium date-picker input-daterange">
                              <input type="text" class="form-control dd" name="from" required="">
                              <span class="input-group-addon">
                              TO</span>
                              <input type="text" class="form-control dd" name="to" required="">
                            </div>
                          </div>
                  </div>
                </div>
                <br>
                <div class="form-actions">
                  <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                      <button type="submit" class="btn purple">FILTER REPORT</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END PORTLET-->
        </div>
      </div>
      </div>

     