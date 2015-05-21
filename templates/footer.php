<div class="clearfix"><div class="col-xs-12">
<h5>A partnership between <a href="http://tedcenter.syr.edu">TEDCenter</a>&nbsp;and&nbsp;<a href="http://www.pmi-syracuse.org/" target="_blank"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/pmi-logo.png" alt="PMI Syracuse" /></a></h5></div>
</div>
</div>
<!-- end #content-wrap -->
<footer class="content-info container" role="contentinfo">

  <div id="inner-footer">
  <div class="row">
  	<div class="col-sm-2 col-sm-push-10" id="su-seal"><div class="pull-right hidden-xs"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/su-seal.png" alt="Syracuse University" /><span class="hide">Syracuse University</span></div></div>
    <div class="col-sm-10 col-sm-pull-2 orange-bar">
      <div class="row pad-one-t">
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/ted-center.png" alt="TEDCenter at Syracuse University" /><span class="hide">TEDCenter at Syracuse University</span></div>
            <div class="col-xs-8">
              <h5>Talent & Education Development Center</h5>
              <p>at <a href="http://uc.syr.edu" target="_blank">University College</a><br />
                Syracuse University<br />
                700 University Ave<br />
                Syracuse NY 13244-2530<br />
                </p>
                <ul class="list-unstyled">
                	<li><strong>Phone: </strong>315-443-5241</li>
					<li><strong>Email: </strong><a href="mailto:tedctr@syr.edu" title="Email the TEDCenter">tedctr@syr.edu</a></li>
                	<li><strong>Web: </strong><a href="http://tedcenter.syr.edu">http://tedcenter.syr.edu</a></li>
                </ul>
            </div>
          </div>
        </div>
        <div class="col-xs-4">
          <h5>Follow the TEDCenter</h5>
          <ul class="list-inline">
            <!--<li><a class="fc-webicon facebook" href="https://www.facebook.com/syracusetedcenter" target="_blank"></a></li>-->
            <li><a class="fc-webicon facebook" href="https://www.facebook.com/UniversityCollegeSU" target="_blank"></a></li>
            <li><a class="fc-webicon twitter" href="https://twitter.com/tedctr" target="_blank"></a></li>
            <li><a class="fc-webicon linkedin" href="http://www.linkedin.com/e/-pvio40-hfoaln1s-5r/vgh/4966620/eml-grp-sub/?hs=false&tok=3rWIJtJJeiu5I1" target="_blank"></a></li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
  </div>
</footer>
</div>
<!-- end #wrapper -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">Sign Up for TEDCenter Updates</h3>
      </div>
      <div class="modal-body">
        <?php get_template_part('templates/content', 'form'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-small" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php wp_footer(); ?>
