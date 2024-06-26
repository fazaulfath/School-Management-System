<?php include "includes/header.php"; ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
		<?php include "includes/left-nav.php"; ?>

        <?php include "includes/top-nav.php"; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Admit Bulk Students</h3>
              </div>
            </div>
            <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Students</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Name </th>
                            <th class="column-title">Class </th>
                            <th class="column-title">Roll </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Password </th>
                            <th class="column-title">Phone </th>
                            <th class="column-title">Address </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        
                          </tr>
                        </tbody>
                      </table>
                    </div>		
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                   <!-- /page content -->

        <?php include "includes/footer-nav.php"; ?>
      </div>
    </div>
  </body>
    <?php include "includes/footer.php"; ?>
