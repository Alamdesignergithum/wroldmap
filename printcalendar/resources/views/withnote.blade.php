<x-header />
<div class="container-fluid" style="height: auto !important;">
   <div class="row" id="printcal" style="height: auto !important;">
      <div class="col-lg-2 col-md-2 d-print-none" id="mob-hide">
         <!-- ads area -->
         <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
         <!-- 200*1050 (PrintTheCalendar) -->
      </div>
      <div class="col-lg-8 col-md-8" style="height: auto !important; min-height: 0px !important;">
         <div class="row mt-4 d-print-none" style="height: auto !important;">
            <div class="col-lg-9 text-right" style="height: auto !important; min-height: 0px !important;">
               <h1 style="text-align:center">{{$currentyear}} Monthly Calendars with Note | {{$currentyear}} Blank Calendars with Notes</h1>
               <!-- Responsive (PrintTheCalendar) --> 
            </div>
            <div class="col-lg-3">
               <button class="btn btn-danger btn-sm mb-4 d-print-none text-right" onclick="printme()">Print</button>
            </div>
         </div>
         <p class="mt-5"><b>Printable Monthly Calendar {{$currentyear}} with Notes</b> helps to make proper plan or schedule for each month. Here, on this website you can get variety of {{$currentyear}} Printable calendar with Notes for every month so that users who make schedules can use these Calendar {{$currentyear}} with notes and can work properly.</p>
         <p>This monthly calendar {{$currentyear}} with notes is very helpful for people who are desperate to achieve
            something in their lives. For students they can make their monthly study plans of {{$currentyear}} on this
            Calendar {{$currentyear}} with notes. Those who want to make their career can plan for every day on this
            {{$currentyear}} calendar with notes. For health and Fitness they can make their daily schedule for the
            year {{$currentyear}} on the printable monthly calendar {{$currentyear}}. With the help of notes you can check how
            effectively you are following your schedule and check improvements in yourself.
         </p>
         <p>These {{$currentyear}} Printable Calender With Notes With Help us to remember the things and date in this year {{$currentyear}}. Sometimes because of busy schedule on office or
            some other activities we forget some important things. But if you have Calendar {{$currentyear}} with notes you can check these {{$currentyear}} Calendar and
            there are very less chances that you will forget or miss something important function or task With these {{$currentyear}} Calendar.
         </p>
         <p>So, here we have {{$currentyear}} monthly calendar in printable form for all months. So that you can make
            notes for every month and follow it. This monthly {{$currentyear}} calendar will make your life structure
            and helps to achieve your goals.
         </p>
         <p>On {{$currentyear}} calendar with notes you can add holidays, functions, office/school activities, festivals,
            anniversaries and make plans for these important days and enjoy fully on these days.
         </p>
         <p>You just need to give print command i.e. “CTRL + P” to take print outs of these {{$currentyear}} monthly
            calendars or you can download these {{$currentyear}} monthly calendars also. For this, click on the
            Download button.
         </p>
         <?php  
	        
         ?>
         <div size="A4" layout="landscape" id="page" class="page">
            <div class="container">
               <div class="row mt-4">
               	<?php
               	$year = $currentyear;
		        $month = date('F');
		        
			    for($y=1;$y<=12;$y++){
			    $m = $y;
		        $last = date("Y-m-d",strtotime("-1 month"));
		        $next = date("Y-m-d",strtotime("+1 month"));
		        $running_day = date('w',mktime(0,0,0,$m,1,$year));
		        $days_in_month = date('t',mktime(0,0,0,$m,1,$year));
		        $days_in_this_week = 1;
			    $day_counter = 0;
			    $dates_array = array();
			    ?>
                  <div class="col-lg-9 col-md-9 text-center">
                     <table class="table table-bordered" style="table-layout: fixed;width:100%;">
                        <tbody>
                           <tr>
                              <th colspan="7" class="text-center">
                                 <span class="small ml-1" style="float:left;">PrintTheCalendar</span>&nbsp;{{ date('F', mktime(0, 0, 0, $y, 10)); }} {{$year}} Calendar 
                              </th>
                           </tr>
                           <tr>
                              <td class="text-center">Sun</td>
                              <td class="text-center">Mon</td>
                              <td class="text-center">Tue</td>
                              <td class="text-center">Wed</td>
                              <td class="text-center">Thu</td>
                              <td class="text-center">Fri</td>
                              <td class="text-center">Sat</td>
                           </tr>
                           <tr>
                           <?php  
                              for($i=1;$i<=$running_day;$i++){
                              ?>
                              <td></td>
                              <?php
                              }
                              for($list_day = 1; $list_day <= $days_in_month; $list_day++){
                           ?>
                           <td style="font-size:11px;font-weight:normal;">
                              {{$list_day}}          
                              <div contenteditable="true" class=""><span class="as"></span></div>
                           </td>
                           <?php if($running_day == 6) { ?>
                           </tr>
                           <?php  
                           if(($day_counter+1) != $days_in_month){ ?>
                            <tr class="calendar-row">
                              <?php }  
                           
                           $running_day = -1;
                           $days_in_this_week = 0;
                        }
                             $days_in_this_week++; $running_day++; $day_counter++; } 
                          if($days_in_this_week < 8){
                        for($x = 1; $x <= (8 - $days_in_this_week); $x++){?>
                           <td > </td>
                        <?php }} ?>
                        
                     

                     
                     </tr>
                           
                        </tbody>
                     </table>
                  </div>
                  <div class="col-lg-3 col-md-3">
                     Notes 
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                  </div>
              <?php } ?>
               </div>
            </div>
         </div>
         <div size="A4" layout="landscape" id="page" class="page">
            <div class="container">
               <div class="row mt-4">
                  <div class="col-lg-3 col-md-3">
                     Notes 
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                     <hr>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
	 function printme() {
      window.print();
  }
</script>
<x-footer />