<?php
  $currency = $this->db->get('labo')->row()->currency;
  $groups = $this->db->get_where('group',array('deleted' =>0))->result_array();
  $tests = $this->db->get_where('tests',array('deleted' =>0))->result_array();
  $clients = $this->db->get_where('clients',array('deleted' =>0))->result_array();
  $clinics = $this->db->get_where('clinics',array('deleted' =>0))->result_array();
  $staff = $this->db->get_where('users',array('deleted' =>0))->result_array();
  $companies = $this->db->get_where('company',array('deleted'=>0))->result_array();
  $categories = $this->db->get_where('category',array('deleted' =>0))->result_array();
  $ctest = $this->db->get_where('ctest',array('deleted'=>0))->result_array();
?>
<div class="row margin-top-10">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="dashboard-stat2">
            <div class="display">
              <div class="number">
                <h3 class="font-green-sharp"><?php echo count($tests);?><small class="font-green-sharp"></small></h3>
                <small>TESTS</small>
              </div>
              <div class="icon">
                <i class="icon-pie-chart"></i>
              </div>
            </div>
            <div class="progress-info">
              <div class="progress">
                <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                <span class="sr-only"></span>
                </span>
              </div>
              <div class="status">
                <div class="status-title">
                </div>
                <div class="status-number">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="dashboard-stat2">
            <div class="display">
              <div class="number">
                <h3 class="font-red-haze"><?php echo count($groups);?></h3>
                <small>TEST GROUPS</small>
              </div>
              <div class="icon">
                <i class="fa fa-archive"></i>
              </div>
            </div>
            <div class="progress-info">
              <div class="progress">
                <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                <span class="sr-only"></span>
                </span>
              </div>
              <div class="status">
                <div class="status-title">
                </div>
                <div class="status-number">
                    <?php //echo number_format($item_worth->row()->selling_price,2);?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="dashboard-stat2">
            <div class="display">
              <div class="number">
                <h3 class="font-blue-sharp"><?php echo count($clients);?></h3>
                <small>TOTAL PATIENTS</small>
              </div>
              <div class="icon">
                <i class="icon-users"></i>
              </div>
            </div>
            <div class="progress-info">
              <div class="progress">
                <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                <span class="sr-only"></span>
                </span>
              </div>
              <div class="status">
                <div class="status-title">
                </div>
                <div class="status-number">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="dashboard-stat2">
            <div class="display">
              <div class="number">
                <h3 class="font-purple-soft"><?php echo count($staff);?></h3>
                <small>STAFF</small>
              </div>
              <div class="icon">
                <i class="icon-user"></i>
              </div>
            </div>
            <div class="progress-info">
              <div class="progress">
                <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                <span class="sr-only"></span>
                </span>
              </div>
              <div class="status">
                <div class="status-title">
                </div>
                <div class="status-number">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row margin-top-10">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="dashboard-stat2">
            <div class="display">
              <div class="number">
                <h3 class="font-green-sharp"><?php echo count($companies);?><small class="font-green-sharp"></small></h3>
                <small>TOTAL COMPANIES</small>
              </div>
              <div class="icon">
                <i class="fa fa-check-circle"></i>
              </div>
            </div>
            <div class="progress-info">
              <div class="progress">
                <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                <span class="sr-only"></span>
                </span>
              </div>
              <div class="status">
                <div class="status-title">
                </div>
                <div class="status-number">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="dashboard-stat2">
            <div class="display">
              <div class="number">
                <h3 class="font-red-haze"><?php echo count($categories);?></h3>
                <small>TEST CATEGORIES</small>
              </div>
              <div class="icon">
                <i class="fa fa-paper-plane"></i>
              </div>
            </div>
            <div class="progress-info">
              <div class="progress">
                <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                <span class="sr-only"></span>
                </span>
              </div>
              <div class="status">
                <div class="status-title">
                </div>
                <div class="status-number">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="dashboard-stat2">
            <div class="display">
              <div class="number">
                <h3 class="font-blue-sharp"><?php echo count($clinics);?></h3>
                <small>CLINICS</small>
              </div>
              <div class="icon">
                <i class="fa fa-bank"></i>
              </div>
            </div>
            <div class="progress-info">
              <div class="progress">
                <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                <span class="sr-only"></span>
                </span>
              </div>
              <div class="status">
                <div class="status-title">
                </div>
                <div class="status-number">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="dashboard-stat2">
            <div class="display">
              <div class="number">
                <h3 class="font-purple-soft"><?php echo count($ctest);?></h3>
                <small>COMPANY TESTS</small>
              </div>
              <div class="icon">
                <i class="fa fa-cube"></i>
              </div>
            </div>
            <div class="progress-info">
              <div class="progress">
                <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                <span class="sr-only"></span>
                </span>
              </div>
              <div class="status">
                <div class="status-title">
                </div>
                <div class="status-number">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   