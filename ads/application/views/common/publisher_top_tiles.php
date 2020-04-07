<br><div class="w3-margin-top">

<br>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter"><a href="<?= site_url("publisher_dashboard/spaces") ?>">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-file-text w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?= $count_spaces ?></h3>
        </div>
        <div class="w3-clear"></div>
        <div class="dropdown">
          <button class="dropbtn_red">Create Ads</button>
          <div class="dropdown-content">
            <a href="<?= site_url("publisher_dashboard/add_space") ?>">Create Ad Space</a>
            <a href="<?= site_url("publisher_dashboard/spaces") ?>">List of Ad Space</a>
          </div>
        </div> 
      </div></a>
    </div>
    <div class="w3-quarter"><a href="<?= site_url("publisher_dashboard/sites") ?>">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-user-plus w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>0</h3>
        </div>
        <div class="w3-clear"></div>
        <div class="dropdown">
          <button class="dropbtn_blue">Sites</button>
          <div class="dropdown-content">
            <a href="<?= site_url("publisher_dashboard/sites") ?>">Add New Site</a>
            <a href="<?= site_url("publisher_dashboard/sites_list") ?>">Sites List</a>
          </div>
        </div>
      </div></a>
    </div>
    <div class="w3-quarter"><a href="<?= site_url("publisher_dashboard/payment") ?>">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-money w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>3</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Withdraw</h4>
      </div></a>
    </div>
    <div class="w3-quarter"><a href="<?= site_url('publisher_dashboard/report') ?>">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-book w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>2</h3>
        </div>
        <div class="w3-clear"></div>
        <h5>Report</h5>
      </div></a>
    </div>
  </div>


</div>
