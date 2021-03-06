<?php require_once(ISVIPI_ADMIN_CLS_BASE .'stats.cls.php'); 
	$stats = new site_stats();
	libxml_disable_entity_loader(false);
	
	require_once(ISVIPI_CLASSES_BASE .'global/get_news_cls.php');
	$news = new news();
	$news_count = $news->get_news_count('all');
	$all_news = $news->get_all_news_stats_page('all',3);
?>
<?php require_once(ISVIPI_ADMIN_BASE .'ovr/head.php') ?>
<?php require_once(ISVIPI_ADMIN_BASE .'ovr/header.php') ?>
<?php require_once(ISVIPI_ADMIN_BASE .'ovr/sidebar.php') ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li>
            	<a href="<?php echo ISVIPI_ACT_ADMIN_URL ?>">
                	<i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        	<!-- Info boxes -->
              <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">New Members</span>
                      <span class="info-box-number"><?php echo number_format($stats->user_count('all')) ?></span>
                      <span class="">Last 30 Days</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
                </div><!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-check-square-o"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Validated Accounts</span>
                      <span class="info-box-number"><?php echo number_format($stats->user_count(1)) ?></span>
                      <span class="">Last 30 Days</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
                </div><!-- /.col -->
    
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-orange"><i class="fa fa-times-circle"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Unvalidated Accounts</span>
                      <span class="info-box-number"><?php echo number_format($stats->user_count(0)) ?></span>
                      <span class="">Last 30 Days</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
                </div><!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-thumbs-down"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Suspended Accounts</span>
                      <span class="info-box-number"><?php echo number_format($stats->user_count(2)) ?></span>
                      <span class="">Last 30 Days</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
                </div><!-- /.col -->
              </div><!-- /.row -->
              <!-- end::Info boxes -->
              
              
              <div class="row" style="background:#D2D2D2; padding:10px 0; margin-bottom:5px;">
              	<!-- specific member stats -->
              	<div class="col-md-4">
                	<div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-users"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">All Members</span>
                          <span class="info-box-number"><?php echo number_format($stats->user_count_all('all')) ?></span>
                          <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                          </div>
                          <span class="progress-description">
                            Registered
                          </span>
                        </div><!-- /.info-box-content -->
                      </div><!-- /.info-box -->
                      <div class="info-box bg-blue">
                        <span class="info-box-icon"><i class="fa fa-male"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Male Members</span>
                          <span class="info-box-number"><?php echo number_format($stats->member_types('male')) ?></span>
                          <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                          </div>
                          <span class="progress-description">
                            Registered
                          </span>
                        </div><!-- /.info-box-content -->
                      </div><!-- /.info-box -->
                      <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-female"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Female Members</span>
                          <span class="info-box-number"><?php echo number_format($stats->member_types('female')) ?></span>
                          <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                          </div>
                          <span class="progress-description">
                            Registered
                          </span>
                        </div><!-- /.info-box-content -->
                      </div><!-- /.info-box -->
                </div>
                
                <!-- feed stats -->
                <?php $feed = $stats->feed_stats(); ?>
                <div class="col-md-4">
                	<div class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title">Feed Stats</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                          </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="chart-responsive">
                                <canvas id="pieChart" height="150"></canvas>
                              </div><!-- ./chart-responsive -->
                            </div><!-- /.col -->
                            <div class="col-md-4">
                              <ul class="chart-legend clearfix">
                                <li><i class="fa fa-circle-o text-red"></i> Feeds</li>
                                <li><i class="fa fa-circle-o text-green"></i> Likes</li>
                                <li><i class="fa fa-circle-o text-yellow"></i> Comments</li>
                                <li><i class="fa fa-circle-o text-aqua"></i> Shares</li>
                                <li><i class="fa fa-circle-o text-light-blue"></i> Comment Likes</li>
                              </ul>
                            </div><!-- /.col -->
                          </div><!-- /.row -->
                        </div><!-- /.box-body -->
                        <div class="box-footer no-padding">
                          <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Total Timeline Activity <span class="pull-right text-red"> <?php echo number_format($feed['total']) ?> activities</span> </a></li>
                            <li><a href="#"></a></li>
                          </ul>
                        </div><!-- /.footer -->
                      </div><!-- /.box -->
              	</div>
                <!-- end: feed stats -->
                
                <!-- news and announcements -->
                  <div class="col-md-4">
                   	<div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">News & Announcements</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                          </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                          <ul class="products-list product-list-in-box">
                          <?php if($news_count > 0){?>
							<?php if(is_array($all_news)) foreach ($all_news as $key => $n) {
                                if($n['status'] == '0'){
                                    $status = '<span class="label label-danger"><i class="fa fa-times"></i></span>';
                                } else {
                                    $status = '<span class="label label-success"><i class="fa fa-check"></i></span>';
                                }
                            ?>
                            <li class="item">
                               <?php echo $n['title'] ?> <span class="label pull-right"><?php echo $status ?></span>
                                <span class="product-description">
                                 	<?php echo truncate_($n['news'],10) ?>
                                </span>
                            </li><!-- /.item -->
                            <?php } ?>
                			<?php } else { ?>
                            	<li class="list-group-item">No news/announcement published</li>
                            <?php } ?>
                            
                            
                          </ul>
                        </div>
                        <div class="box-footer text-center">
                          <a href="<?php echo ISVIPI_ACT_ADMIN_URL .'admin_news' ?>" class="uppercase">View All News Items</a>
                        </div><!-- /.box-footer -->
                      </div>
                    </div>
                  <!-- end: news & announcements -->
                    
              </div>
              <!-- end:: row -->
              
              <!-- latest members & rss feed -->
              <div class="row">
              
              	<!-- latest members -->
              	<div class="col-md-6">
                  <!-- USERS LIST -->
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Latest Members</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                      <ul class="users-list clearfix">
                      <?php $members = array_filter($stats->get_latest_members(8));
							if(is_array($members)) foreach ($members as $key => $mi) {
					  ?> 
                        
                        <li>
                          <img src="<?php echo user_pic($mi['profile_pic']) ?>" width="80px" alt="<?php echo $mi['fullname'] ?>">
                          <a class="users-list-name" href="<?php echo ISVIPI_URL .'profile/'.$mi['username'] ?>" target="_blank">
						  	<?php echo $mi['fullname'] ?>
                          </a>
                          <span class="users-list-date"><strong>Joined:</strong> <?php echo $mi['reg_date'] ?></span>
                        </li>
                      <?php } else {?>
                      	<li class="list-group-item">No members found.</li>
                      <?php } ?>

                      </ul><!-- /.users-list -->
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                      <a href="<?php echo ISVIPI_ACT_ADMIN_URL .'members' ?>" class="uppercase">
                      	View All Users
                      </a>
                    </div><!-- /.box-footer -->
                  </div><!--/.box -->
                </div><!-- /.col -->
                <!-- end: latest members -->
                
                <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Donate</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <p>If you think developers at IsVipi OSSN are doing a good job, consider saying thank you by making a donation to the project. Your donations go a long way towards motivating our developers. You can also choose to sponsor a version. To know more about sponsoring future versions, please <a href="http://isvipi.org/support/" target="_blank">drop us a line</a>.</p>
                  <p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" style="margin-bottom:20px">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="ZMWP83F3ACBBC">
                    <input type="hidden" name="on0" value="Donation Amount">
                    <div class="col-md-5">
                    <select name="os0" class="form-control">
                        <option value="10">$10.00 USD</option>
                        <option value="25">$25.00 USD</option>
                        <option value="50">$50.00 USD</option>
                        <option value="100">$100.00 USD</option>
                        <option value="250">$250.00 USD</option>
                        <option value="500">$500.00 USD</option>
                        <option value="1000">$1,000.00 USD</option>
                    </select> 
                    </div>
                    <div class="col-md-7">
                    <input type="submit" class="btn btn-primary" name="submit" alt="PayPal - The safer, easier way to pay online!" value="Make a Donation">
                    </div>
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
              </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php require_once(ISVIPI_ADMIN_BASE .'ovr/footer.php') ?>