<x-header />
      <!-- Page Content -->
      <?php  
      $days_in_this_week = 1;
      $day_counter = 0;
      $dates_array = array();
     ?>
      <div class="container-fluid" id="printcal" style="height: auto !important;">
         <div class="row mt-4" style="height: auto !important;">
            <div class="col-lg-2 d-print-none" id="mob-hide">
               <!--<img src="http://via.placeholder.com/300x600" class="img-fluid"> -->
            </div>
            <div class="col-lg-8 text-center" style="height: auto !important; min-height: 0px !important;">
               <div class="container-fluid" style="height: auto !important;">
                  <div class="d-print-none">
                  </div>
                  <div class="row">
                     <div class="col-lg-6 text-center">
                        <a href="{{url('/')}}/{{$prevLink}}"><button class="btn btn-sm btn-primary float-left">&lt; {{date('F',strtotime($last))}}</button></a>
                     </div>
                     <div class="col-lg-6 text-center">
                        <a href="{{url('/')}}/{{$nextLink}}"><button class="btn btn-sm btn-primary float-right">{{date('F',strtotime($next))}}  &gt; </button></a>
                     </div>
                  </div>
               </div>
               <div class="text-left mb-4 d-print-none">
                  <h1 style="font-size:30px;"> Print The Calendar </h1>
               </div>
               <div class="d-print-none">
                  <!-- <img src="http://via.placeholder.com/1000x50" class="img-fluid"> -->
               </div>
               <div id="divId">
                  <table class="table table-bordered" id="tableID" style="table-layout: fixed; width:100%;">
                     <tbody>
                        <tr>
                           <th colspan="7" class="text-center" style="display: table-cell;vertical-align: middle;">
                              <!-- january calendar 2019 -->
                              <!--<img src="https://printthecalendar.com/img/logo.png" width="40" height="30" style="float:left;" />-->
                              <span class="small ml-1" style="float:left;">PrintTheCalendar.com</span>&nbsp;{{$date}} 
                              <button class="btn btn-danger float-right btn-sm" onclick="printme()"> Print </button>
                              <!--<button class="btn btn-danger float-right mr-2 btn-sm" onclick="demoFromHTML()"> PDF </button> -->
                              <a href="javascript:return void(0);" id="display" style="display:none;background-color:#dc3545;border-radius: .2rem;padding:5px;" class="text-light small float-right mr-2 d-print-none"> Holiday </a>
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
               <div class=" d-print-none" style="height: auto !important;">
                   
                  <div class="mb-3 mt-3">
                     <a href="javascript:return void(0);" id="btnExport" style="background-color:#dc3545;border-radius: .2rem;padding:5px" class="text-light">PDF</a>
                     <a href="javascript:return void(0);" onclick="Export2Doc(&#39;divId&#39;, &#39;calendar&#39;);" style="background-color:#dc3545;border-radius: .2rem;padding:5px" class="text-light">Word</a>
                     <a href="javascript:return void(0);" onclick="exportTableToExcel(&#39;tableID&#39;,&#39;calendar&#39;)" style="background-color:#dc3545;border-radius: .2rem;padding:5px" class="text-light">Excel</a>
                  </div>
                  <div class="container-fluid text-center mt-4 mb-2 d-print-none" id="buttonss">
                     <span style="font-weight:bold; font-size:16px">
                        Share it on Social Media: 
                        <span>
                           <a href="https://www.facebook.com/sharer/sharer.php?u=https://printthecalendar.com/" rel="nofollow"><img src="{{asset('assets/images/fb.png')}}" class="" style="height:50px; width:50px"></a>
                           <a href="https://twitter.com/home?status=https://printthecalendar.com/" rel="nofollow"><img src="{{asset('assets/images/twitter.png')}}" class="ml-3" style="height:46px; width:46px"></a>
                           <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://printthecalendar.com/&amp;title=&amp;summary=&amp;source=https://printthecalendar.com/" rel="nofollow"><img src="{{asset('assets/images/linkedin.png')}}" class="ml-3 mr-3" style="height:50px; width:50px"></a>
                           <!--<button class="btn btn-danger float-right"> Download </button>-->
                        </span>
                     </span>
                  </div>
               </div>
               <script type="text/javascript" src="{{asset('assets/js/jquery.min.js(1s')}}"></script>
               <script type="text/javascript" src="{{asset('assets/js/pdfmake.min.js')}}"></script>
               <script type="text/javascript" src="{{asset('assets/js/html2canvas.min.js')}}"></script>
               <script type="text/javascript">
                  $("body").on("click", "#btnExport", function () {
                      html2canvas($('#tableID')[0], {
                          onrendered: function (canvas) {
                              var data = canvas.toDataURL();
                              var docDefinition = {
                                  content: [{
                                      image: data,
                                      width: 550
                                  }]
                              };
                              pdfMake.createPdf(docDefinitions("calendar.pdf");
                          }
                      });
                  });
               </script>
               <script type="text/javascript">
                  function Export2Doc(element, filename = ''){
                  var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
                  var postHtml = "</body></html>";
                  var html = preHtml+document.getElementById(element).innerHTML+postHtml;
                  
                  var blob = new Blob(['\ufeff', html], {
                  type: 'application/msword'
                  });
                  
                  // Specify link url
                  var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
                  
                  // Specify file name
                  filename = filename?filename+'.doc':'document.doc';
                  
                  // Create download link element
                  var downloadLink = document.createElement("a");
                  
                  document.body.appendChild(downloadLink);
                  
                  if(navigator.msSaveOrOpenBlob ){
                  navigator.msSaveOrOpenBlob(blob, filename);
                  }else{
                  // Create a link to the file
                  downloadLink.href = url;
                  
                  // Setting the file name
                  downloadLins = filename;
                  
                  //triggering the function
                  downloadLink.click();
                  }
                  
                  document.body.removeChild(downloadLink);
                  }
               </script>
               <script>
                  function exportTableToExcel(tableID, filename = ''){
                     var downloadLink;
                     var dataType = 'application/vnd.ms-excel';
                     var tableSelect = document.getElementById(tableID);
                     var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
                     
                     // Specify file name
                     filename = filename?filename+'.xls':'excel_data.xls';
                     
                     // Create download link element
                     downloadLink = document.createElement("a");
                     
                     document.body.appendChild(downloadLink);
                     
                     if(navigator.msSaveOrOpenBlob){
                         var blob = new Blob(['\ufeff', tableHTML], {
                             type: dataType
                         });
                         navigator.msSaveOrOpenBlob( blob, filename);
                     }else{
                         // Create a link to the file
                         downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
                     
                         // Setting the file name
                         downloadLins = filename;
                         
                         //triggering the function
                         downloadLink.click();
                     }
                  }
               </script>
               <p class="text-left d-print-none">
                  People usually struggle to create a schedule and maintain their daily reminders. Earlier people
                  used to use a traditional calendar which used to be bulky and was difficult to carry. With the
                  development of technology, anyone can have access to calendars with just a click of a button.
                  There are many formats of calendars made available online, such as Blank, PDF, Word, Excel,
                  etc. which can be downloaded and printed.
                  <br><br>
                  To make it easy for you to find your ideal calendar, we have created this site where you can
                  download and print a yearly calendar with just a click of a button. We have also listed all the
                  holidays month-wise for a particular year, you just need to click on the “Holiday” button.
                  <br><br>
                  There are calendars available in various formats and purposes. So if you need to maintain a
                  calendar for maintaining your office schedule or for any official purpose, then Excel Calendar
                  format would be the most suitable for you. You can download a monthly calendar in <strong>Excel
                  Templates</strong> here from our site. So you can use these excel format calendars to create your
                  monthly planner and plan your office meetings, client meetings, etc. in advance.<br><br>
                  The PDF calendar format is most suitable for situations where you need to keep your data
                  secure and avoid anyone from making any changes to it. So you can customize these <strong>PDF’s</strong> to
                  create your timetable, holiday planner, maintaining your office schedule, etc. The advantage of
                  using the PDF format calendars is that most of the people know about its features, so they find it
                  easy to use. These calendars are ideal in situations where you want to share any important
                  schedule with another person or where you keep the documents secure. Another advantage of
                  using the PDF format is that it is can be easily printable.<br><br>
                  People use the calendars widely and find it the best tool to plan their daily events. So the
                  template calendars available online can be customized and you can make changes to it when
                  you want to. So through our site, we have provided you with the customizable calendar feature
                  so you can use it according to your requirements.<br><br>
                  We have also designed the <strong>yearly calendars</strong> for you in various formats. So you can easily print
                  your calendar by just a click of a button. And you also don’t need to carry bulky calendars with
                  you every time, since you can print these calendars in a single sheet. So you can carry the
                  calendar of the month which you require and always keep yourself organized.
               </p>
            </div>
            <div class="col-lg-2 d-print-none" id="mob-hide">
            </div>
         </div>
      </div>
      <script>
         $( function() {
         $('#display').click( function() {
         $('.as').toggle();
         } );
         } );
         
      </script> 
   <x-footer />  
     