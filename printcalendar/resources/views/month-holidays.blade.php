<x-header />

<div class="container-fluid" id="printcal" style="height: auto !important;">
      <div class="row mt-4" style="height: auto !important;">
          <div class="col-lg-2" id="mob-hide">
            <!--  <img src="http://via.placeholder.com/300x600" class="img-fluid"> -->
 
          </div> 
        <div class="col-lg-8 text-center" style="height: auto !important; min-height: 0px !important;">
            
            <div class="advertt">
             <!-- <img src="http://via.placeholder.com/1000x50" class="img-fluid"> -->
          </div> 
          
          
<h1 class="text-left mb-2">Holidays in {{$month}} {{$year}} </h1>
         
 
  <p class="text-left">
<b>{{$month}} Holidays 2021</b>: Have you been looking for the List of 2021 holidays for the month of {{$month}} 2021? Then this is the perfect site for you. Here you can find the list of 2021 holidays for the {{$month}} month, and see the days of {{$month}} Month on which those 2021 holidays are on. 
</p>
<h2 class="text-left mb-2" style="font-size:20px;">{{$month}} Holidays 2021</h2>
<p class="text-left">
Below we are providing you with the {{$month}} 2021 Holidays list, in which you can look at the 2021 dates and days on which the holidays fall on. This 2021 list consists of the most common holidays for the month of {{$month}} 2021, including the federal holidays 2021. 
</p>
 <style> table th {background:#c00;color:#fff;} .c00{color:#c00;font-weight:bold;} table {border: 1px solid #ccc;} table td{table border: 0px solid #fff;}</style>
 
  @if($month=='january')
  	<table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Day</th>
        <th>Holiday</th>
        <th>Days Until</th>
      </tr>
    </thead>
    <tbody>
      
      
       <tr>
        <td class="c00">January 01</td>
        <td>Friday</td>
        <td>New Year's Day</td>
        <td>Passed</td>
      </tr>
      
            <tr>
        <td class="c00">January
         18</td>
        <td>Monday</td>
        <td>Martin Luther King Jr. Day</td>
        <td>Passed</td>
      </tr>
      
             
    </tbody>
  </table>

  @elseif($month=='february')
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Day</th>
        <th>Holiday</th>
        <th>Days Until</th>
      </tr>
    </thead>
    <tbody>
      
      
      <tr>
        <td class="c00">February 15</td>
        <td>Monday</td>
        <td>Presidents' Day</td>
        <td>Passed</td>
      </tr>
             
    </tbody>
  </table>
  
  @elseif($month=='may')

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Day</th>
        <th>Holiday</th>
        <th>Days Until</th>
      </tr>
    </thead>
    <tbody>
      
      
      <tr>
        <td class="c00">May 31</td>
        <td>Monday</td>
        <td>Memorial Day</td>
        <td>Passed</td>
      </tr>
             
    </tbody>
  </table>

  @elseif($month=='july')
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Day</th>
        <th>Holiday</th>
        <th>Days Until</th>
      </tr>
    </thead>
    <tbody>
      
      
      <tr>
        <td class="c00">July 04</td>
        <td>Sunday</td>
        <td>Independence Day</td>
        <td>Passed</td>
      </tr>


      <tr>
        <td class="c00">July 05</td>
        <td>Monday</td>
        <td>Independence Day observed</td>
        <td>Passed</td>
      </tr>
             
    </tbody>
  </table>
   @elseif($month=='september')
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Day</th>
        <th>Holiday</th>
        <th>Days Until</th>
      </tr>
    </thead>
    <tbody>
      
      
      <tr>
        <td class="c00">September 06</td>
        <td>Monday</td>
        <td>Labor Day</td>
        <td>Today</td>
      </tr>  
    </tbody>
  </table>

  @elseif($month=='october')
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Day</th>
        <th>Holiday</th>
        <th>Days Until</th>
      </tr>
    </thead>
    <tbody>
      
      
      <tr>
        <td class="c00">October 11</td>
        <td>Monday</td>
        <td>Columbus Day</td>
        <td>35</td>
      </tr>  
    </tbody>
  </table>

  @elseif($month=='november')
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Day</th>
        <th>Holiday</th>
        <th>Days Until</th>
      </tr>
    </thead>
    <tbody>
      
      
      <tr>
        <td class="c00">November 11</td>
        <td>Thursday</td>
        <td>Veterans Day</td>
        <td>66</td>
      </tr>  

      <tr>
        <td class="c00">November 25</td>
        <td>Thursday</td>
        <td>Thanksgiving Day</td>
        <td>80</td>
      </tr>

    </tbody>
  </table>

  @elseif($month=='december')
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Day</th>
        <th>Holiday</th>
        <th>Days Until</th>
      </tr>
    </thead>
    <tbody>
      
      
      <tr>
        <td class="c00">December 24</td>
        <td>Friday</td>
        <td>Christmas Day observed</td>
        <td>109</td>
      </tr>  

      <tr>
        <td class="c00">December 25</td>
        <td>Saturday</td>
        <td>Christmas Day</td>
        <td>110</td>
      </tr>

      <tr>
        <td class="c00">December 31</td>
        <td>Friday</td>
        <td>New Year's Day observed</td>
        <td>116</td>
      </tr>
      
    </tbody>
  </table>
   
   @else

  @endif

    
  <p> To see all the holidays in 2021 go to <a href="{{url('/')}}/2021-holidays"> 2021 Holidays </a></p>
 
<!--  --> 

  <h3 class="text-left mb-2">Other Month Holidays 2021</h3>
  
  <ul>
             
            <li class="text-left">
               <a href="{{url('/')}}/january-holidays-2021">January Holidays </a>
            </li>

            <li class="text-left">
               <a href="{{url('/')}}/february-holidays-2021">February Holidays </a>
            </li>

            <li class="text-left">
               <a href="{{url('/')}}/march-holidays-2021">March Holidays </a>
            </li>

            <li class="text-left">
               <a href="{{url('/')}}/april-holidays-2021">April Holidays </a>
            </li>

            <li class="text-left">
               <a href="{{url('/')}}/may-holidays-2021">May Holidays </a>
            </li>

            <li class="text-left">
               <a href="{{url('/')}}/june-holidays-2021">June Holidays </a>
            </li>

            <li class="text-left">
               <a href="{{url('/')}}/july-holidays-2021">July Holidays </a>
            </li>

            <li class="text-left">
                <a href="{{url('/')}}/august-holidays-2021">August Holidays </a>
            </li>

            <li class="text-left">
                <a href="{{url('/')}}/september-holidays-2021">September Holidays </a>
            </li>


            <li class="text-left">
                <a href="{{url('/')}}/october-holidays-2021">October Holidays </a>
            </li>

            <li class="text-left">
                <a href="{{url('/')}}/november-holidays-2021">November Holidays </a>
            </li>

            <li class="text-left">
                <a href="{{url('/')}}/december-holidays-2021">December Holidays </a>
            </li>
  </ul>
  
  

<h3 class="text-left mb-2">Check out February Holidays in Other Years</h3>
<ul>
       <li class="text-left">
          <a href="{{url('/')}}/january-holidays-2020">{{$month}} {{$year-1}} holidays </a>
       </li>

       <li class="text-left">
        <a href="{{url('/')}}/january-holidays-2022">{{$month}} {{$year+1}} holidays </a>
       </li>

       <li class="text-left">
        <a href="{{url('/')}}/january-holidays-2023">{{$month}} {{$year+2}} holidays </a>
       </li>

       <li class="text-left">
        <a href="{{url('/')}}/january-holidays-2024">{{$month}} {{$year+3}} holidays </a>
       </li>
</ul>
    <p class="text-left">
Apart from the <b>{{$month}} 2021 Calendar with Holidays</b>, We are also Providing the {{$month}} calendar 2021 in Printable Pdf, Word and Excel Format.
</p>
        </div>
      
      </div>
    </div>
    <x-footer />
