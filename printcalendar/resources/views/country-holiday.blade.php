<style>
	table th{
		padding: .75rem !important;
		background-color: #dc3545;
	}
</style>
<x-header />
      <!-- Page Content -->
   
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

                     
                     
                  </div>
               </div>
               <div class="text-left mb-4 d-print-none">
                  <h1 style="font-size:30px;"> Print The Calendar </h1>
               </div>
               <div class="d-print-none">
                  <!-- <img src="http://via.placeholder.com/1000x50" class="img-fluid"> -->
               </div>
               <div id="divId">
               	<div class="row justify-content-between col-md-12">
               		<a href="{{url('/')}}/{{$prevLink1}}">
               			<button class="btn btn-danger">{{$last}}</button>
               		</a>
               			
               			<p>==============={{$date}}===============</p>
               		<a href="{{url('/')}}/{{$nextLink1}}">
               			<button class="btn btn-danger">{{$next}}</button>
               		</a>	
               			
               	</div>
                 
		<table class="table table-striped my-1">
		<thead class="bg-danger text-light">
		  <tr>
		    <th>Date</th>
		    <th>Day</th>
		    <th>Holiday</th>
		    <th>Type</th>
		    <th>Year</th>
		  </tr>
		</thead>
		<tbody>
		          <tr>
		    <td>1st January</td>
		    <td>Wednesday</td>
		    <td>New Year Day</td>
		    <td>Federal Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th January</td>
		    <td>Wednesday</td>
		    <td>Kansas Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th January</td>
		    <td>Monday</td>
		    <td>International Day of Commemoration in Memory of the Victims of the Holocaust</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th January</td>
		    <td>Sunday</td>
		    <td>World Leprosy Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th January</td>
		    <td>Sunday</td>
		    <td>International Customs Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th January</td>
		    <td>Saturday</td>
		    <td>Chinese New Year</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th January</td>
		    <td>Monday</td>
		    <td>Civil Rights Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th January</td>
		    <td>Monday</td>
		    <td>Idaho Human Rights Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th January</td>
		    <td>Monday</td>
		    <td>Robert E. Lee Birthday</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th January</td>
		    <td>Monday</td>
		    <td>Martin Luther King Jr. Day</td>
		    <td>Federal Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th January</td>
		    <td>Sunday</td>
		    <td>Robert E. Lee Birthday</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>4th January</td>
		    <td>Saturday</td>
		    <td>World Braille Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>6th January</td>
		    <td>Monday</td>
		    <td>Epiphany</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>7th January</td>
		    <td>Tuesday</td>
		    <td>Orthodox Christmas Day</td>
		    <td>Orthodox</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>13th January</td>
		    <td>Monday</td>
		    <td>Stephen Foster Memorial Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>14th January</td>
		    <td>Tuesday</td>
		    <td>Orthodox New Year</td>
		    <td>Orthodox</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th January</td>
		    <td>Friday</td>
		    <td>Lee-Jackson Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th January</td>
		    <td>Sunday</td>
		    <td>World Religion Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th February</td>
		    <td>Saturday</td>
		    <td>Susan B. Anthony Birthday</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>16th February</td>
		    <td>Sunday</td>
		    <td>Elizabeth Peratrovich Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th February</td>
		    <td>Monday</td>
		    <td>Daisy Gatson Bates Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th February</td>
		    <td>Thursday</td>
		    <td>World Day of Social Justice</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st February</td>
		    <td>Friday</td>
		    <td>Maha Shivaratri</td>
		    <td>Hindu Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st February</td>
		    <td>Friday</td>
		    <td>International Mother Language Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th February</td>
		    <td>Tuesday</td>
		    <td>Shrove Tuesday/Mardi Gras</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th February</td>
		    <td>Tuesday</td>
		    <td>Shrove Tuesday/Mardi Gras</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th February</td>
		    <td>Tuesday</td>
		    <td>Shrove Tuesday/Mardi Gras</td>
		    <td>Observance, Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th February</td>
		    <td>Wednesday</td>
		    <td>Ash Wednesday</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>28th February</td>
		    <td>Friday</td>
		    <td>Linus Pauling Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th February</td>
		    <td>Saturday</td>
		    <td>Leap Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>14th February</td>
		    <td>Friday</td>
		    <td>Statehood Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>14th February</td>
		    <td>Friday</td>
		    <td>Valentine Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>13th February</td>
		    <td>Thursday</td>
		    <td>World Radio Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st February</td>
		    <td>Saturday</td>
		    <td>National Freedom Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd February</td>
		    <td>Sunday</td>
		    <td>World Wetlands Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd February</td>
		    <td>Sunday</td>
		    <td>Groundhog Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd February</td>
		    <td>Sunday</td>
		    <td>Super Bowl</td>
		    <td>Sporting event</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>4th February</td>
		    <td>Tuesday</td>
		    <td>World Cancer Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>4th February</td>
		    <td>Tuesday</td>
		    <td>Rosa Parks Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>6th February</td>
		    <td>Thursday</td>
		    <td>International Day of Zero Tolerance for Female Genital Mutilation</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>7th February</td>
		    <td>Friday</td>
		    <td>National Wear Red Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th February</td>
		    <td>Tuesday</td>
		    <td>International Day of Women and Girls in Science</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th February</td>
		    <td>Tuesday</td>
		    <td>World Day of the Sick</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th February</td>
		    <td>Wednesday</td>
		    <td>Lincoln Birthday</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th February</td>
		    <td>Wednesday</td>
		    <td>Lincoln Birthday</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>23rd March</td>
		    <td>Monday</td>
		    <td>World Meteorological Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>22nd March</td>
		    <td>Sunday</td>
		    <td>World Water Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st March</td>
		    <td>Saturday</td>
		    <td>International Day of Forests</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st March</td>
		    <td>Saturday</td>
		    <td>World Down Syndrome Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st March</td>
		    <td>Saturday</td>
		    <td>International Day of Nowruz</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st March</td>
		    <td>Saturday</td>
		    <td>World Poetry Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st March</td>
		    <td>Saturday</td>
		    <td>International Day for the Elimination of Racial Discrimination</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>24th March</td>
		    <td>Tuesday</td>
		    <td>World Tuberculosis Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>24th March</td>
		    <td>Tuesday</td>
		    <td>International Day for the Right to the Truth concerning Gross Human Rights Violations and for the Di</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th March</td>
		    <td>Wednesday</td>
		    <td>International Day of Remembrance of Slavery Victims and the Transatlantic Slave Trade</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th March</td>
		    <td>Wednesday</td>
		    <td>International Day of Solidarity with Detained and Missing Staff Members</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th March</td>
		    <td>Wednesday</td>
		    <td>Maryland Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th March</td>
		    <td>Thursday</td>
		    <td>Prince Jonah Kuhio Kalanianaole Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>28th March</td>
		    <td>Saturday</td>
		    <td>Earth Hour</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th March</td>
		    <td>Sunday</td>
		    <td>National Vietnam War Veterans Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>30th March</td>
		    <td>Monday</td>
		    <td>Seward Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>31st March</td>
		    <td>Tuesday</td>
		    <td>CÃ©sar ChÃ¡vez Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th March</td>
		    <td>Friday</td>
		    <td>International Day of Happiness</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th March</td>
		    <td>Thursday</td>
		    <td>March Equinox</td>
		    <td>Season</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st March</td>
		    <td>Sunday</td>
		    <td>Zero Discrimination Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st March</td>
		    <td>Sunday</td>
		    <td>Self-Injury Awareness Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st March</td>
		    <td>Sunday</td>
		    <td>St. David Day</td>
		    <td>Observance, Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd March</td>
		    <td>Monday</td>
		    <td>Texas Independence Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd March</td>
		    <td>Monday</td>
		    <td>Casimir Pulaski Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd March</td>
		    <td>Monday</td>
		    <td>Read Across America Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>3rd March</td>
		    <td>Tuesday</td>
		    <td>World Wildlife Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>3rd March</td>
		    <td>Tuesday</td>
		    <td>Town Meeting Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>6th March</td>
		    <td>Friday</td>
		    <td>Employee Appreciation Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>8th March</td>
		    <td>Sunday</td>
		    <td>Daylight Saving Time starts</td>
		    <td>Clock change/Daylight Saving Time</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th March</td>
		    <td>Tuesday</td>
		    <td>Evacuation Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th March</td>
		    <td>Tuesday</td>
		    <td>St. Patrick Day</td>
		    <td>Observance, Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>13th March</td>
		    <td>Friday</td>
		    <td>Friday the 13th</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th March</td>
		    <td>Thursday</td>
		    <td>World Kidney Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th March</td>
		    <td>Tuesday</td>
		    <td>Purim</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>9th March</td>
		    <td>Monday</td>
		    <td>Holi</td>
		    <td>Hindu Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>8th March</td>
		    <td>Sunday</td>
		    <td>International Women Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>23rd April</td>
		    <td>Thursday</td>
		    <td>World Book and Copyright Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>22nd April</td>
		    <td>Wednesday</td>
		    <td>Administrative Professionals Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>22nd April</td>
		    <td>Wednesday</td>
		    <td>Oklahoma Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>22nd April</td>
		    <td>Wednesday</td>
		    <td>Earth Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st April</td>
		    <td>Tuesday</td>
		    <td>San Jacinto Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st April</td>
		    <td>Tuesday</td>
		    <td>Yom HaShoah</td>
		    <td>Jewish commemoration</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th April</td>
		    <td>Monday</td>
		    <td>Boston Marathon</td>
		    <td>Sporting event</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th April</td>
		    <td>Monday</td>
		    <td>Patriot Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th April</td>
		    <td>Monday</td>
		    <td>Chinese Language Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th April</td>
		    <td>Monday</td>
		    <td>Orthodox Easter Monday</td>
		    <td>Orthodox</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>23rd April</td>
		    <td>Thursday</td>
		    <td>English Language Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>23rd April</td>
		    <td>Thursday</td>
		    <td>Take our Daughters and Sons to Work Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>24th April</td>
		    <td>Friday</td>
		    <td>Ramadan Starts</td>
		    <td>Muslim</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th April</td>
		    <td>Wednesday</td>
		    <td>Day of Remembrance for all Victims of Chemical Warfare</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>28th April</td>
		    <td>Tuesday</td>
		    <td>World Day for Safety and Health at Work</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th April</td>
		    <td>Monday</td>
		    <td>State Holiday</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th April</td>
		    <td>Monday</td>
		    <td>Confederate Memorial Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th April</td>
		    <td>Monday</td>
		    <td>Confederate Memorial Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th April</td>
		    <td>Sunday</td>
		    <td>International Chernobyl Disaster Remembrance Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th April</td>
		    <td>Sunday</td>
		    <td>World Intellectual Property Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th April</td>
		    <td>Saturday</td>
		    <td>World Malaria Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>24th April</td>
		    <td>Friday</td>
		    <td>Arbor Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>30th April</td>
		    <td>Thursday</td>
		    <td>International Jazz Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th April</td>
		    <td>Sunday</td>
		    <td>Orthodox Easter</td>
		    <td>Orthodox</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th April</td>
		    <td>Friday</td>
		    <td>Good Friday</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>9th April</td>
		    <td>Thursday</td>
		    <td>Passover (first day)</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>9th April</td>
		    <td>Thursday</td>
		    <td>Maundy Thursday</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>7th April</td>
		    <td>Tuesday</td>
		    <td>Day of Remembrance of the Victims of the Rwanda Genocide</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>6th April</td>
		    <td>Monday</td>
		    <td>National Tartan Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>6th April</td>
		    <td>Monday</td>
		    <td>International Day of Sport for Development and Peace</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>5th April</td>
		    <td>Sunday</td>
		    <td>Palm Sunday</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd April</td>
		    <td>Thursday</td>
		    <td>Pascua Florida Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd April</td>
		    <td>Thursday</td>
		    <td>World Autism Awareness Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st April</td>
		    <td>Wednesday</td>
		    <td>April Fool Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th April</td>
		    <td>Saturday</td>
		    <td>Holy Saturday</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th April</td>
		    <td>Sunday</td>
		    <td>International Day of Human Space Flight</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>18th April</td>
		    <td>Saturday</td>
		    <td>International Day for Monuments and Sites</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>18th April</td>
		    <td>Saturday</td>
		    <td>Orthodox Holy Saturday</td>
		    <td>Orthodox</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th April</td>
		    <td>Friday</td>
		    <td>Orthodox Good Friday</td>
		    <td>Orthodox</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>16th April</td>
		    <td>Thursday</td>
		    <td>Emancipation Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>16th April</td>
		    <td>Thursday</td>
		    <td>Last Day of Passover</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th April</td>
		    <td>Wednesday</td>
		    <td>Father Damien Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th April</td>
		    <td>Wednesday</td>
		    <td>Tax Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>13th April</td>
		    <td>Monday</td>
		    <td>Thomas Jefferson Birthday</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>13th April</td>
		    <td>Monday</td>
		    <td>Easter Monday</td>
		    <td>Observance, Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th April</td>
		    <td>Sunday</td>
		    <td>Easter Sunday</td>
		    <td>Observance, Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th May</td>
		    <td>Tuesday</td>
		    <td>Lailat al-Qadr</td>
		    <td>Muslim</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th May</td>
		    <td>Wednesday</td>
		    <td>World Autoimmune / Autoinflammatory Arthritis Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th May</td>
		    <td>Wednesday</td>
		    <td>Emergency Medical Services for Children Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st May</td>
		    <td>Thursday</td>
		    <td>Ascension Day</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th May</td>
		    <td>Sunday</td>
		    <td>World Information Society Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>16th May</td>
		    <td>Saturday</td>
		    <td>Preakness Stakes</td>
		    <td>Sporting event</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>16th May</td>
		    <td>Saturday</td>
		    <td>Armed Forces Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th May</td>
		    <td>Friday</td>
		    <td>National Defense Transportation Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th May</td>
		    <td>Friday</td>
		    <td>Peace Officers Memorial Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th May</td>
		    <td>Friday</td>
		    <td>International Day of Families</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th May</td>
		    <td>Tuesday</td>
		    <td>Primary Election Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st May</td>
		    <td>Thursday</td>
		    <td>World Day for Cultural Diversity for Dialogue and Development</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>22nd May</td>
		    <td>Friday</td>
		    <td>International Day for Biological Diversity</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>31st May</td>
		    <td>Sunday</td>
		    <td>Pentecost</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th May</td>
		    <td>Friday</td>
		    <td>International Day of United Nations Peacekeepers</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th May</td>
		    <td>Friday</td>
		    <td>Shavuot</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th May</td>
		    <td>Monday</td>
		    <td>National Missing Children Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th May</td>
		    <td>Monday</td>
		    <td>Memorial Day</td>
		    <td>Federal Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th May</td>
		    <td>Monday</td>
		    <td>African Liberation Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>24th May</td>
		    <td>Sunday</td>
		    <td>Eid al-Fitr</td>
		    <td>Muslim</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>23rd May</td>
		    <td>Saturday</td>
		    <td>International Day to End Obstetric Fistula</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>22nd May</td>
		    <td>Friday</td>
		    <td>Harvey Milk Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>22nd May</td>
		    <td>Friday</td>
		    <td>National Maritime Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>31st May</td>
		    <td>Sunday</td>
		    <td>World No Tobacco Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st May</td>
		    <td>Friday</td>
		    <td>Kentucky Oaks</td>
		    <td>Sporting event</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>5th May</td>
		    <td>Tuesday</td>
		    <td>Cinco de Mayo</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>4th May</td>
		    <td>Monday</td>
		    <td>Rhode Island Independence Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>4th May</td>
		    <td>Monday</td>
		    <td>Kent State Shootings Remembrance</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>3rd May</td>
		    <td>Sunday</td>
		    <td>World Press Freedom Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd May</td>
		    <td>Saturday</td>
		    <td>National Explosive Ordnance Disposal (EOD) Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd May</td>
		    <td>Saturday</td>
		    <td>Kentucky Derby</td>
		    <td>Sporting event</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd May</td>
		    <td>Saturday</td>
		    <td>World Tuna Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st May</td>
		    <td>Friday</td>
		    <td>Lei Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st May</td>
		    <td>Friday</td>
		    <td>Loyalty Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st May</td>
		    <td>Friday</td>
		    <td>Law Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>6th May</td>
		    <td>Wednesday</td>
		    <td>National Nurses Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>7th May</td>
		    <td>Thursday</td>
		    <td>National Day of Prayer</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th May</td>
		    <td>Tuesday</td>
		    <td>International Nurses Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th May</td>
		    <td>Tuesday</td>
		    <td>Lag BaOmer</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th May</td>
		    <td>Monday</td>
		    <td>Confederate Memorial Day observed</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th May</td>
		    <td>Sunday</td>
		    <td>Confederate Memorial Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th May</td>
		    <td>Sunday</td>
		    <td>Confederate Memorial Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th May</td>
		    <td>Sunday</td>
		    <td>Mother Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>9th May</td>
		    <td>Saturday</td>
		    <td>World Migratory Bird Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>8th May</td>
		    <td>Friday</td>
		    <td>Military Spouse Appreciation Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>8th May</td>
		    <td>Friday</td>
		    <td>Truman Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>8th May</td>
		    <td>Friday</td>
		    <td>World Ovarian Cancer Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>8th May</td>
		    <td>Friday</td>
		    <td>Time of Remembrance and Reconciliation for Those Who Lost Their Lives during the Second World War</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th June</td>
		    <td>Saturday</td>
		    <td>World Refugee Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th June</td>
		    <td>Saturday</td>
		    <td>June Solstice</td>
		    <td>Season</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th June</td>
		    <td>Friday</td>
		    <td>Juneteenth</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th June</td>
		    <td>Friday</td>
		    <td>Emancipation Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th June</td>
		    <td>Friday</td>
		    <td>International Day for the Elimination of Sexual Violence in Conflict</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th June</td>
		    <td>Wednesday</td>
		    <td>World Day to Combat Desertification and Drought</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>16th June</td>
		    <td>Tuesday</td>
		    <td>International Day of Family Remittances</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th June</td>
		    <td>Saturday</td>
		    <td>West Virginia Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th June</td>
		    <td>Saturday</td>
		    <td>American Eagle Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st June</td>
		    <td>Sunday</td>
		    <td>International Day of Yoga</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st June</td>
		    <td>Sunday</td>
		    <td>Father Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>23rd June</td>
		    <td>Tuesday</td>
		    <td>Public Service Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th June</td>
		    <td>Thursday</td>
		    <td>Day of the Seafarer</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th June</td>
		    <td>Friday</td>
		    <td>International Day Against Drug Abuse and Illicit Trafficking</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th June</td>
		    <td>Friday</td>
		    <td>International Day in Support of Victims of Torture</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>30th June</td>
		    <td>Tuesday</td>
		    <td>International Asteroid Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th June</td>
		    <td>Monday</td>
		    <td>World Elder Abuse Awareness Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>14th June</td>
		    <td>Sunday</td>
		    <td>Bunker Hill Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st June</td>
		    <td>Monday</td>
		    <td>Whit Monday</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st June</td>
		    <td>Monday</td>
		    <td>Global Day of Parents</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st June</td>
		    <td>Monday</td>
		    <td>Statehood Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>4th June</td>
		    <td>Thursday</td>
		    <td>International Day of Innocent Children Victims of Aggression</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>5th June</td>
		    <td>Friday</td>
		    <td>World Environment Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>6th June</td>
		    <td>Saturday</td>
		    <td>D-Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>6th June</td>
		    <td>Saturday</td>
		    <td>Belmont Stakes</td>
		    <td>Sporting event</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>7th June</td>
		    <td>Sunday</td>
		    <td>Trinity Sunday</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>8th June</td>
		    <td>Monday</td>
		    <td>World Oceans Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>14th June</td>
		    <td>Sunday</td>
		    <td>Flag Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>14th June</td>
		    <td>Sunday</td>
		    <td>Army Birthday</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>14th June</td>
		    <td>Sunday</td>
		    <td>World Blood Donor Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>13th June</td>
		    <td>Saturday</td>
		    <td>International Albinism Awareness Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th June</td>
		    <td>Friday</td>
		    <td>World Day Against Child Labour</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th June</td>
		    <td>Thursday</td>
		    <td>Kamehameha Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th June</td>
		    <td>Thursday</td>
		    <td>Corpus Christi</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>24th July</td>
		    <td>Friday</td>
		    <td>Pioneer Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th July</td>
		    <td>Monday</td>
		    <td>National Korean War Veterans Armistice Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>28th July</td>
		    <td>Tuesday</td>
		    <td>World Hepatitis Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>30th July</td>
		    <td>Thursday</td>
		    <td>International Day of Friendship</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>30th July</td>
		    <td>Thursday</td>
		    <td>World Day against Trafficking in Persons</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>31st July</td>
		    <td>Friday</td>
		    <td>Eid al-Adha</td>
		    <td>Muslim</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>18th July</td>
		    <td>Saturday</td>
		    <td>Nelson Mandela Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th July</td>
		    <td>Wednesday</td>
		    <td>World Youth Skills Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>3rd July</td>
		    <td>Friday</td>
		    <td>Independence Day observed</td>
		    <td>Federal Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>4th July</td>
		    <td>Saturday</td>
		    <td>International Day of Cooperatives</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>4th July</td>
		    <td>Saturday</td>
		    <td>Independence Day</td>
		    <td>Federal Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th July</td>
		    <td>Saturday</td>
		    <td>World Population Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>13th July</td>
		    <td>Monday</td>
		    <td>Nathan Bedford Forrest Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>14th July</td>
		    <td>Tuesday</td>
		    <td>Bastille Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th August</td>
		    <td>Thursday</td>
		    <td>Muharram</td>
		    <td>Muslim</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st August</td>
		    <td>Friday</td>
		    <td>Ganesh Chaturthi</td>
		    <td>Hindu Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st August</td>
		    <td>Friday</td>
		    <td>Hawaii Statehood Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st August</td>
		    <td>Friday</td>
		    <td>Senior Citizens Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>23rd August</td>
		    <td>Sunday</td>
		    <td>International Day for the Remembrance of the Slave Trade and its Abolition</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th August</td>
		    <td>Wednesday</td>
		    <td>Women Equality Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th August</td>
		    <td>Thursday</td>
		    <td>Lyndon Baines Johnson Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th August</td>
		    <td>Saturday</td>
		    <td>International Day against Nuclear Tests</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>30th August</td>
		    <td>Sunday</td>
		    <td>International Day of the Victims of Enforced Disappearances</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>31st August</td>
		    <td>Monday</td>
		    <td>International Overdose Awareness Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th August</td>
		    <td>Wednesday</td>
		    <td>National Aviation Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th August</td>
		    <td>Wednesday</td>
		    <td>World Humanitarian Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th August</td>
		    <td>Monday</td>
		    <td>Bennington Battle Day observed</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st August</td>
		    <td>Saturday</td>
		    <td>Colorado Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>3rd August</td>
		    <td>Monday</td>
		    <td>Raksha Bandhan</td>
		    <td>Hindu Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>4th August</td>
		    <td>Tuesday</td>
		    <td>Coast Guard Birthday</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>7th August</td>
		    <td>Friday</td>
		    <td>Purple Heart Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>9th August</td>
		    <td>Sunday</td>
		    <td>International Day of the World Indigenous People</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th August</td>
		    <td>Monday</td>
		    <td>Janmashtami</td>
		    <td>Hindu Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th August</td>
		    <td>Monday</td>
		    <td>Victory Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th August</td>
		    <td>Wednesday</td>
		    <td>International Youth Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th August</td>
		    <td>Saturday</td>
		    <td>Assumption of Mary</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>16th August</td>
		    <td>Sunday</td>
		    <td>Bennington Battle Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>24th September</td>
		    <td>Thursday</td>
		    <td>World Maritime Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>23rd September</td>
		    <td>Wednesday</td>
		    <td>International Celebrate Bisexuality Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>22nd September</td>
		    <td>Tuesday</td>
		    <td>Emancipation Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>22nd September</td>
		    <td>Tuesday</td>
		    <td>September Equinox</td>
		    <td>Season</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st September</td>
		    <td>Monday</td>
		    <td>International Day of Peace</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th September</td>
		    <td>Saturday</td>
		    <td>National CleanUp Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th September</td>
		    <td>Friday</td>
		    <td>Native American Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th September</td>
		    <td>Saturday</td>
		    <td>International Day for the Total Elimination of Nuclear Weapons</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th September</td>
		    <td>Sunday</td>
		    <td>World Tourism Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th September</td>
		    <td>Sunday</td>
		    <td>Gold Star Mother Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>28th September</td>
		    <td>Monday</td>
		    <td>World Rabies Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>28th September</td>
		    <td>Monday</td>
		    <td>Yom Kippur</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>28th September</td>
		    <td>Monday</td>
		    <td>Yom Kippur</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th September</td>
		    <td>Tuesday</td>
		    <td>World Heart Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th September</td>
		    <td>Saturday</td>
		    <td>Rosh Hashana</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th September</td>
		    <td>Saturday</td>
		    <td>Rosh Hashana</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>18th September</td>
		    <td>Friday</td>
		    <td>National POW/MIA Recognition Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>4th September</td>
		    <td>Friday</td>
		    <td>World Sexual Health Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>5th September</td>
		    <td>Saturday</td>
		    <td>International Day of Charity</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>7th September</td>
		    <td>Monday</td>
		    <td>Labor Day</td>
		    <td>Federal Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>8th September</td>
		    <td>Tuesday</td>
		    <td>International Literacy Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>9th September</td>
		    <td>Wednesday</td>
		    <td>California Admission Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th September</td>
		    <td>Thursday</td>
		    <td>World Suicide Prevention Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th September</td>
		    <td>Friday</td>
		    <td>Patriot Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th September</td>
		    <td>Saturday</td>
		    <td>International Day for South-South Cooperation</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>18th September</td>
		    <td>Friday</td>
		    <td>Air Force Birthday</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th September</td>
		    <td>Thursday</td>
		    <td>Constitution Day and Citizenship Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>16th September</td>
		    <td>Wednesday</td>
		    <td>International Day for the Preservation of the Ozone Layer</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th September</td>
		    <td>Tuesday</td>
		    <td>International Day of Democracy</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>13th September</td>
		    <td>Sunday</td>
		    <td>National Grandparents Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th September</td>
		    <td>Saturday</td>
		    <td>Carl Garner Federal Lands Cleanup Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>18th October</td>
		    <td>Sunday</td>
		    <td>Alaska Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th October</td>
		    <td>Saturday</td>
		    <td>Sweetest Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th October</td>
		    <td>Saturday</td>
		    <td>International Day for the Eradication of Poverty</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th October</td>
		    <td>Saturday</td>
		    <td>Navratri</td>
		    <td>Hindu Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>16th October</td>
		    <td>Friday</td>
		    <td>Boss Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>16th October</td>
		    <td>Friday</td>
		    <td>World Food Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th October</td>
		    <td>Thursday</td>
		    <td>White Cane Safety Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th October</td>
		    <td>Thursday</td>
		    <td>International Day of Rural Women</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th October</td>
		    <td>Monday</td>
		    <td>Alaska Day observed</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th October</td>
		    <td>Tuesday</td>
		    <td>World Statistics Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>24th October</td>
		    <td>Saturday</td>
		    <td>United Nations Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>31st October</td>
		    <td>Saturday</td>
		    <td>Halloween</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>31st October</td>
		    <td>Saturday</td>
		    <td>World Cities Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>30th October</td>
		    <td>Friday</td>
		    <td>Nevada Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th October</td>
		    <td>Thursday</td>
		    <td>World Stroke Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th October</td>
		    <td>Thursday</td>
		    <td>The Prophet Birthday</td>
		    <td>Muslim</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th October</td>
		    <td>Tuesday</td>
		    <td>World Day for Audiovisual Heritage</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th October</td>
		    <td>Sunday</td>
		    <td>Dussehra</td>
		    <td>Hindu Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>24th October</td>
		    <td>Saturday</td>
		    <td>World Development Information Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>14th October</td>
		    <td>Wednesday</td>
		    <td>International Day for Natural Disaster Reduction</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>13th October</td>
		    <td>Tuesday</td>
		    <td>Navy Birthday</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>6th October</td>
		    <td>Tuesday</td>
		    <td>World Cerebral Palsy Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>5th October</td>
		    <td>Monday</td>
		    <td>Child Health Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>5th October</td>
		    <td>Monday</td>
		    <td>World Habitat Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>4th October</td>
		    <td>Sunday</td>
		    <td>Feast of St Francis of Assisi</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>3rd October</td>
		    <td>Saturday</td>
		    <td>First Day of Sukkot</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd October</td>
		    <td>Friday</td>
		    <td>International Day of Non-Violence</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st October</td>
		    <td>Thursday</td>
		    <td>World Vegetarian Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st October</td>
		    <td>Thursday</td>
		    <td>International Day of Older Persons</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>8th October</td>
		    <td>Thursday</td>
		    <td>World Sight Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>9th October</td>
		    <td>Friday</td>
		    <td>Last Day of Sukkot</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>9th October</td>
		    <td>Friday</td>
		    <td>World Post Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th October</td>
		    <td>Monday</td>
		    <td>Indigenous People Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th October</td>
		    <td>Monday</td>
		    <td>Columbus Day</td>
		    <td>Federal Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th October</td>
		    <td>Monday</td>
		    <td>Columbus Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th October</td>
		    <td>Sunday</td>
		    <td>International Day of the Girl Child</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th October</td>
		    <td>Sunday</td>
		    <td>Simchat Torah</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th October</td>
		    <td>Saturday</td>
		    <td>World Mental Health Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th October</td>
		    <td>Saturday</td>
		    <td>Shmini Atzeret</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>9th October</td>
		    <td>Friday</td>
		    <td>Leif Erikson Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th November</td>
		    <td>Thursday</td>
		    <td>Thanksgiving Day</td>
		    <td>Federal Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th November</td>
		    <td>Wednesday</td>
		    <td>International Day for the Elimination of Violence against Women</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st November</td>
		    <td>Saturday</td>
		    <td>World Television Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th November</td>
		    <td>Friday</td>
		    <td>Africa Industrialization Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th November</td>
		    <td>Friday</td>
		    <td>Universal Children Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th November</td>
		    <td>Thursday</td>
		    <td>International Men Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th November</td>
		    <td>Thursday</td>
		    <td>World Toilet Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th November</td>
		    <td>Friday</td>
		    <td>State Holiday</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th November</td>
		    <td>Friday</td>
		    <td>Lincoln Birthday/Lincoln Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th November</td>
		    <td>Friday</td>
		    <td>Day After Thanksgiving</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th November</td>
		    <td>Friday</td>
		    <td>Family Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th November</td>
		    <td>Friday</td>
		    <td>Acadian Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th November</td>
		    <td>Friday</td>
		    <td>Black Friday</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>27th November</td>
		    <td>Friday</td>
		    <td>American Indian Heritage Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th November</td>
		    <td>Sunday</td>
		    <td>First Sunday of Advent</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>29th November</td>
		    <td>Sunday</td>
		    <td>International Day of Solidarity with the Palestinian People</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>30th November</td>
		    <td>Monday</td>
		    <td>Cyber Monday</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>19th November</td>
		    <td>Thursday</td>
		    <td>World Philosophy Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th November</td>
		    <td>Tuesday</td>
		    <td>World Prematurity Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st November</td>
		    <td>Sunday</td>
		    <td>Daylight Saving Time ends</td>
		    <td>Clock change/Daylight Saving Time</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st November</td>
		    <td>Sunday</td>
		    <td>World Vegan Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st November</td>
		    <td>Sunday</td>
		    <td>New York City Marathon</td>
		    <td>Sporting event</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd November</td>
		    <td>Monday</td>
		    <td>International Day to End Impunity for Crimes against Journalists</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>3rd November</td>
		    <td>Tuesday</td>
		    <td>Election Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>3rd November</td>
		    <td>Tuesday</td>
		    <td>Election Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>5th November</td>
		    <td>Thursday</td>
		    <td>Return Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>6th November</td>
		    <td>Friday</td>
		    <td>International Day for Preventing the Exploitation of the Environment in War and Armed Conflict</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th November</td>
		    <td>Tuesday</td>
		    <td>World Science Day for Peace and Development</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th November</td>
		    <td>Tuesday</td>
		    <td>Marine Corps Birthday</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>16th November</td>
		    <td>Monday</td>
		    <td>International Day for Tolerance</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th November</td>
		    <td>Sunday</td>
		    <td>World Day of Remembrance for Road Traffic Victims</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>14th November</td>
		    <td>Saturday</td>
		    <td>Diwali/Deepavali</td>
		    <td>Observance, Hinduism</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>14th November</td>
		    <td>Saturday</td>
		    <td>World Diabetes Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>13th November</td>
		    <td>Friday</td>
		    <td>Friday the 13th</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th November</td>
		    <td>Thursday</td>
		    <td>World Pneumonia Day</td>
		    <td>Worldwide observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th November</td>
		    <td>Wednesday</td>
		    <td>Veterans Day</td>
		    <td>Federal Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>18th December</td>
		    <td>Friday</td>
		    <td>Arabic Language Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>18th December</td>
		    <td>Friday</td>
		    <td>International Migrants Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>18th December</td>
		    <td>Friday</td>
		    <td>Last Day of Chanukah</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th December</td>
		    <td>Thursday</td>
		    <td>Wright Brothers Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>17th December</td>
		    <td>Thursday</td>
		    <td>Pan American Aviation Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>15th December</td>
		    <td>Tuesday</td>
		    <td>Bill of Rights Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>20th December</td>
		    <td>Sunday</td>
		    <td>International Human Solidarity Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>21st December</td>
		    <td>Monday</td>
		    <td>December Solstice</td>
		    <td>Season</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>24th December</td>
		    <td>Thursday</td>
		    <td>Christmas Eve</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>24th December</td>
		    <td>Thursday</td>
		    <td>Christmas Eve</td>
		    <td>Observance, Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>25th December</td>
		    <td>Friday</td>
		    <td>Christmas Day</td>
		    <td>Federal Holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th December</td>
		    <td>Saturday</td>
		    <td>Kwanzaa (first day)</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>26th December</td>
		    <td>Saturday</td>
		    <td>Day After Christmas Day</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>31st December</td>
		    <td>Thursday</td>
		    <td>New Year Eve</td>
		    <td>State holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>31st December</td>
		    <td>Thursday</td>
		    <td>New Year Eve</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>13th December</td>
		    <td>Sunday</td>
		    <td>National Guard Birthday</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>12th December</td>
		    <td>Saturday</td>
		    <td>Feast of Our Lady of Guadalupe</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st December</td>
		    <td>Tuesday</td>
		    <td>Rosa Parks Day</td>
		    <td>Local observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>2nd December</td>
		    <td>Wednesday</td>
		    <td>International Day for the Abolition of Slavery</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>3rd December</td>
		    <td>Thursday</td>
		    <td>International Day of Persons with Disabilities</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>5th December</td>
		    <td>Saturday</td>
		    <td>International Volunteer Day for Economic and Social Development</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>5th December</td>
		    <td>Saturday</td>
		    <td>World Soil Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>6th December</td>
		    <td>Sunday</td>
		    <td>St Nicholas Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>7th December</td>
		    <td>Monday</td>
		    <td>International Civil Aviation Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>7th December</td>
		    <td>Monday</td>
		    <td>Pearl Harbor Remembrance Day</td>
		    <td>Observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>8th December</td>
		    <td>Tuesday</td>
		    <td>Feast of the Immaculate Conception</td>
		    <td>Christian</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>9th December</td>
		    <td>Wednesday</td>
		    <td>International Anti-Corruption Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>9th December</td>
		    <td>Wednesday</td>
		    <td>World Genocide Commemoration Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>10th December</td>
		    <td>Thursday</td>
		    <td>Human Rights Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th December</td>
		    <td>Friday</td>
		    <td>Chanukah/Hanukkah (first day)</td>
		    <td>Jewish holiday</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>11th December</td>
		    <td>Friday</td>
		    <td>International Mountain Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
		  </tr>
		        <tr>
		    <td>1st December</td>
		    <td>Tuesday</td>
		    <td>World AIDS Day</td>
		    <td>United Nations observance</td>
		    <td>{{$date}}</td>
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
     