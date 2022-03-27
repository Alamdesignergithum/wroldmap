
 <style>
a:hover{text-decoration:none;}
</style>

      <div class="container-fluid p-3 d-print-none" style="background-color:#1c4269; color:#f0f0f0de;line-height:26px; ">
         <div class="row" style="float:right;">
            <a href="https://www.facebook.com/Print-The-Calendar-104913714192222/" target="_blank" rel="nofollow"><img src="{{asset('assets/images/fb.png')}}" class="" style="height:40px; width:40px"></a>
            <a href="https://twitter.com/rekhach64769440" target="_blank" rel="nofollow"><img src="{{asset('assets/images/twitter.png')}}" class="ml-3" style="height:36px; width:36px"></a>
            <a href="https://in.pinterest.com/rekha3953/" target="_blank" rel="nofollow"><img src="{{asset('assets/images/pinterest.png')}}" class="ml-3" style="height:40px; width:40px"></a>
         </div>
         <br>
         <div class=" about col-lg-10 col-md-10 text-right  ">
            <a href="https://printthecalendar.com/about"> <span style="color:#f0f0f0de;">About Us</span></a>&nbsp;&nbsp; | &nbsp;&nbsp;
            <a href="https://printthecalendar.com/contact"><span style="color:#f0f0f0de;">Contact Us</span></a>&nbsp;&nbsp; |&nbsp;&nbsp;
            <a href="https://printthecalendar.com/disclaimer"><span style="color:#f0f0f0de;">Disclaimer</span></a>&nbsp;&nbsp; |&nbsp;&nbsp;
            <a href="https://printthecalendar.com/privacy"><span style="color:#f0f0f0de;">Privacy Policy</span></a>&nbsp;&nbsp; |&nbsp;&nbsp;
            <a href="https://printthecalendar.com/terms"><span style="color:#f0f0f0de;">Terms &amp; Condition</span></a>&nbsp;&nbsp; |&nbsp;&nbsp;
            <a href="https://printcalendar2021.com/" target="_blank"><span style="color:#f0f0f0de;">Calendar 2021</span></a>&nbsp;&nbsp; |&nbsp;&nbsp;
         </div>
      </div>
      <div class="text-center p-2 d-print-none" style="background-color:#1c4269; color:#f0f0f0de; ">
         © printthecalendar.com    <!-- Bootstrap core JavaScript --> 
         <script src="./assets/bootstrap.bundle.min.js"></script>
         <!--<script src='https://printthecalendar.com/vendor/jquery/autosize.js'></script> -->
         <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js'></script> -->
         <script>
            function printme() {
                window.print();
            }
            //autosize(document.querySelectorAll('textarea')); 
            
            
            function demoFromHTML() {
              var pdf = new jsPDF('p', 'pt', 'letter');
              // source can be HTML-formatted string, or a reference
              // to an actual DOM element from which the text will be scraped.
              source = $('#printcal')[0];
            
              // we support special element handlers. Register them with jQuery-style 
              // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
              // There is no support for any other type of selectors 
              // (class, of compound) at this time.
              specialElementHandlers = {
                  // element with id of "bypass" - jQuery style selector
                  '#bypassme': function (element, renderer) {
                      // true = "handled elsewhere, bypass text extraction"
                      return true
                  }
              };
              
             
              margins = {
                  top: 80,
                  bottom: 60,
                  left: 40,
                  width: 522
              };
              // all coords and widths are in jsPDF instance's declared units
              // 'inches' in this case
              pdf.fromHTML(
              source, // HTML string or DOM elem ref.
              margins.left, // x coord
              margins.top, { // y coord
                  'width': margins.width, // max width of content on PDF
                  'elementHandlers': specialElementHandlers
              },
              
             
            
              function (dispose) {
                  // dispose: object with X, Y of the last line add to the PDF 
                  //          this allow the insertion of new lines after html
                  pdf.save('Test.pdf');
              }, margins);
            } // pdf print ends here
         </script>
      </div>
</html>