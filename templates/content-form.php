<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/vendor/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {
	$("#signupForm").validate({
		//errorLabelContainer: $("#signupForm div.field_error"),
		// validate signup form on keyup and submit
		rules: {
			"49286[71516]": "required", // First name
			"49287[71517]": "required", // Last name
			"49288": { // Email
				required: true,
				email: true
			},
			
		},
		messages: {
			"49286[71516]": "Please enter your first name",
			"49287[71517]": "Please enter your last name",
			"49288": "Please enter a valid email address",
			
		},
		
		submitHandler: function() {
			//alert("submitted!");
			form.submit();
		}
		
	});
});
</script>

<form action="http://uc_syr.bm23.com/public/webform/process/" method="post" id="signupForm">
  <input type="hidden" name="fid" value="23ddatlect02evw5atmfwczepve64" />
  <input type="hidden" name="sid" value="d4a671f6b0808e341eee3571eae99448" />
  <input type="hidden" name="delid" value="" />
  <input type="hidden" name="subid" value="" />
  <script type="text/javascript">
  var fieldMaps = {};
  </script>
  <div class="row pad-one-b">
    <div class="col-xs-6" field_id="71516">
      <label>Firstn Name <span class="required">*</span></label>
      <div class="field">
        <input type="text" id="field_71516" class="form-control" name="49286[71516]" value="" />
        <div class="field_error"> </div>
      </div>
    </div>
    <div class="col-xs-6" field_id="71517">
      <label>Last Name <span class="required">*</span></label>
      <div class="field">
        <input type="text" id="field_71517" class="form-control" name="49287[71517]" value="" />
        <div class="field_error"> </div>
      </div>
    </div>
  </div>
  <div class="row pad-one-b">
    <div class="col-xs-6">
      <label>Email Address <span class="required">*</span></label>
      <div class="field">
        <input type="text" class="form-control" name="49288" value=""  />
        <div class="field_error"> </div>
      </div>
    </div>
    <div class="col-xs-6" field_id="field_71527">
      <label>Phone Number</label>
      <div class="field">
        <input type="text" id="field_71527" class="form-control" name="58892[71527]" value=""  />
        <div class="field_error"> </div>
      </div>
    </div>
  </div>
  <div class="row pad-one-b">
    <div class="col-xs-9">
      <label>TEDCenter Programs of Interest</label>
      <p>I am interested in the following program</p>
      <div class="field">
        <select id="field_325042" class="select field" name="49942[325042]" >
          <option value="All TEDCenter Programs" selected="selected">All TEDCenter Programs</option>
          <option value="Get Social Workshops" >Get Social Workshops</option>
          <option value="Certified Scrum Master" >Certified Scrum Master</option>
          <option value="Certified Financial Planner" >Certified Financial Planner</option>
          <option value="Intellectual Property" >Intellectual Property, Trademarks & Patents</option>
          <option value="College and Career Readiness Program" >College and Career Readiness Program</option>
        </select>
        <div class="field_error"> </div>
      </div>
    </div>
  </div>
  <div class="row pad-one-b">
    <div class="col-xs-12">
      <button type="submit" name="Submit" class="btn btn-primary">Submit Request <span class="glyphicon glyphicon-chevron-right"></span></button>
      <input type="hidden" id="field_71531" class="hidden field" name="49289[71531]" value="" />
      <input type="hidden" id="field_325042" class="hidden field" name="49291[325042]" value="Scrum Master" />
      <input type="hidden" name="49290[371130]" value="true" />
    </div>
  </div>
</form>
<script>
!function ($) {
	$(function(){
       	// carousel demo
		$('#myCarousel').carousel()
	})
}(window.jQuery)
//
var currentDate = new Date()
var day = currentDate.getDate()
if (day < 10) { day = '0' + day; }
var month = currentDate.getMonth() + 1
if (month < 10) { month = '0' + month; }
var year = currentDate.getFullYear()
var newDay = month + "/" + day + "/" + year
document.getElementById("field_71531").value = newDay;
</script> 
