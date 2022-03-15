<style type="text/css">
.widget-user-header {
      padding-left: 20px !important;
   }
   .tui-full-calendar-popup-detail .tui-full-calendar-section-button{
       /*display:none;*/
   }
</style>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" crossorigin="anonymous" /> -->
<link rel="stylesheet" href="<?= base_url('assets/css/style2.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- this link for multiple selection-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>





<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" crossorigin="anonymous"></script> -->



<div class="content-wrapper" style="margin-left: 280px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Dashboard</h1><small>Control Panel</small>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card" style="border-radius: 15px">
            
              <div class="card-body">
             

<h2 class="d_day"><?= isset($_GET['date']) ? date('d D', strtotime($_GET['date'])) :date('d D') ?>

<span><form action=""><input type="date" name="date" value="<?= isset($_GET['date']) ? date('Y-m-d', strtotime($_GET['date'])) : date('Y-m-d') ?>" /><input type="submit" value="Find" /></form></span>

</h2>

  <div class="row flex-nowrap" style="overflow: scroll;">
  
  <!--?php foreach($therapists as $therapist): ?--> 

      <div class="col-2">

          <div class="card card-block">
  
      <h3><?= $therapists[0]['name']; ?></h3>
      
      <div id="usercalendar_<?= $therapists[0]['id']; ?>" data-therapist="<?= $therapists[0]['id']; ?>" class="usercalendar"  style="height:750px"></div>
     
    </div>
 
     
  <!--?php endforeach; ?--> 
  <!-- <div class="col-2">
      <div class="card card-block" style="position: relative;right: 0px;width: 150px;height: 100%;"><p>&nbsp;</p></div>
  </div> -->
</div> 

    
    


<script>
$(document).ready(function(){
  $("#find").click(function(e) {
   var findDate = $("#find_date").val(); 
   //console.log($("#find_date").val());
   $.ajax({
      url: "<?= base_url("getAppointmentById") ?>",
      type: "get",
      data: {
        findDate : findDate,
      },
      dataType: "json",
      success: function(data) {
        console.log(data);
        $.each(data.list, function(n, currentElem) {
        $('.details').html('<label>Customer Name:</label>'+ currentElem['customer_name'] +'<br><label>Therapist Name:</label>'+ currentElem['name'] +'<label>Therapist Name:</label>'+ currentElem['name'] +'');
        });
      }
    })
 
  });
});

</script>  
<style>

.tui-full-calendar-time-resize-handle.handle-x {
    display: none;
}
.flex-nowrap {

    -ms-flex-wrap: nowrap!important;

    flex-wrap: nowrap!important;

}

.row {

    display: -ms-flexbox;

    display: flex;

    -ms-flex-wrap: wrap;

    flex-wrap: wrap;

    margin-right: -15px;

    margin-left: -15px;

}

.col-3 {

    -ms-flex: 0 0 30%;

    flex: 0 0 30%;

    max-width: 30%;

	position: relative;

    width: 100%;

    padding-right: 0px;

    padding-left: 0px;

}

.card {

    position: relative;

    display: -ms-flexbox;

    display: flex;

    -ms-flex-direction: column;

    flex-direction: column;

    min-width: 0;

    word-wrap: break-word;

    background-color: #fff;

    background-clip: border-box;

    border: 1px solid rgba(0,0,0,.125);

    border-radius: .25rem;

}

.card-block {

    min-height: 300px;

}

.card.card-block h3 {

     text-align: center;
   margin: 2px 0;
   /* border-bottom: 1px solid rgba(0,0,0,.125); */
   padding-bottom: 4px;
}

.tui-full-calendar-vlayout-area > div:first-child {

    display: none;

}

.tui-full-calendar-dayname-container {

    display: none;

}

.tui-full-calendar-timegrid-container{

	overflow-y: hidden;

}

.col-3:not(:first-child) .tui-full-calendar-timegrid-left {

    display: none;

}

.col-3:not(:first-child) .tui-full-calendar-timegrid-right {

	margin-left: 0px !important;

}

.col-3:not(:first-child) .tui-full-calendar-timegrid-todaymarker {

    display: none !important;

}

h2.d_day {

    padding: 15px 15px;

    border-top: 1px solid #ccc;

    position: relative;

    left: -15px;

}

h2.d_day span {

    float: right;

    font-size: 16px;

}

h2.d_day span form input[type=date] {

    margin-right: 15px;

}

a.addcustomer {

    position: absolute;

    right: 6px;

    top: 6px;

}

span.select2-selection__arrow {

    display: none;

}
.tui-full-calendar-timegrid-hour {
       width: 34px !important;
}
h3{
	    /*width: 160px;*/
    text-align: center !important;
}
.cust_bg {

    position: fixed;

    width: 100%;

    height: 100%;

    top: 0;

    background: #0000008c;

    left: 0;

    z-index: 9;

}
.content-wrapper {
    padding-top: 40px !important;
}
h2.d_day {
    margin-top: 5px;
}
.content-header > .breadcrumb{
	top:-4px !important;
}
.tui-full-calendar-time-schedule {
    border-bottom-left-radius: 2px;
    border-bottom-right-radius: 2px;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
    color: #000;
    /*background-color: #f36873 !important;*/
    /*background-color: #b7d6aa !important;*/
    border-color: #000;
    padding-left: 20px;
    padding-top: 2px;
    border-radius: 5px !important;
text-align: center;
    padding-left: 0 !important;
}

.paid1{
    background-color: #b7d6aa !important;
}
.content-header > h1 {
    margin: 0;
    font-size: 20px;
}
h2.d_day {
    margin-top: 5px;
    font-size: 20px;
}
.card.card-block h3 {
    font-size: 22px;
}
/*
.handle-x{
	display:none;
}
*/
.tui-full-calendar-time-schedule-content.tui-full-calendar-time-schedule-content-time {
    border: none;
}
.tui-full-calendar-timegrid-timezone {
    width: 45% !important;
}
.tui-full-calendar-timegrid-right {
    margin-left: 31px !important;
}

</style>
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Appointment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Enter Customer Name">
            </div>
            <div class="col-md-12 mt-3">
                <input type="text" class="form-control" placeholder="Enter Number">
            </div>
            <div class="col-md-12 mt-3">
                
                    <select data-placeholder="Begin typing a name to filter..." multiple class="chosen-select form-control" name="test" style="width: 100%;">
                      <option value=""></option>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                      <option>Option 6</option>
                      <option>Option 7</option>
                      <option>Option 8</option>
                    </select>
                    
                  
            </div>
            <div class="col-md-12 mt-3 mb-3">
                <input type="text" class="form-control" placeholder="Enter Amount">
            </div>
            <div class="col-md-6">
                <label for="">Start Date</label>
                <input type="date" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="">End Date</label>
                <input type="date" class="form-control">
            </div>
            <div class="col-md-12 mt-3">
                <textarea name="" id="" cols="30" rows="10" class="form-control" style="width: 100%; height: 100px;"></textarea>
            </div>
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save</button>
        </div>
        
      </div>
    </div>
  </div>
  <script>
      $(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
  </script>
