<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //
    function show()
    {
        $year = date('Y');
        $month = date('F');
        $m = date('m');
        $last = date("Y-m-d",strtotime("-1 month"));
        $next = date("Y-m-d",strtotime("+1 month"));
        $date = "{$month} Calendar {$year}";
        $running_day = date('w',mktime(0,0,0,$m,1,$year));
        $prevLinkDate = strtolower(date('F', strtotime('-1 month', strtotime($last))));
        $nextLinkDate = strtolower(date('F', strtotime('+1 month', strtotime($next))));
        $days_in_month = date('t',mktime(0,0,0,$m,1,$year));
        $prevLink = "{$prevLinkDate}-{$year}-calendar";
        $nextLink = "{$nextLinkDate}-{$year}-calendar";
        return view('calendar',['date'=>$date,'last'=>$last,'next'=>$next,'running_day'=>$running_day,'days_in_month'=>$days_in_month,'prevLink'=>$prevLink,'nextLink'=>$nextLink]);
    }
  function withYearSlug($year){      
         return view('printable-calendars',['year'=>$year]); 
  }

    function withSlug($slug){
            $slugs = explode('-',$slug);
            
            
            $w = '';
            $c='';
             
        $slugs0 =$slugs['0'];
        if (isset($slugs['2'])) {
           $w=$slugs['2'];
        }
        if(isset($slugs['1'])) {
            $c=$slugs['1'];
        }
           
        if ($c=='holiday')
        {   
            return $this->holidays($slugs);

        }elseif ($c=='with' && $w=='notes') {
            $currentyear = date('Y');
            if ($slugs0=='calendar') {
                $currentyear=$currentyear;
                return view('withnote',['currentyear'=>$currentyear]);
            }
        }elseif($w=='with' && $c=='calendar'){
            return view('withnote',['currentyear'=>$slugs0]);

        }elseif($c=='holidays'){
            return $this->holidays2($slugs);

        }elseif($slugs0=='holidays'){
           return $this->holidays2($slugs);

        }elseif($c=='calendars'){
           return $this->holidays2($slugs);

        }elseif($c=='calendar'){
           return $this->holidays2($slugs);

        }else
        {
            
            $m = $slugs[0];
            $year = $slugs[1];
            $month = ucfirst($m);
            $d = date_parse($month);
            $m = $d['month'];
            $d1 = "01-$m-$year";
            $last = date("Y-m-d",strtotime("-1 month",strtotime($d1)));
            $next = date("Y-m-d",strtotime("+1 month",strtotime($d1)));
            $date = "{$month} Calendar {$year}";
            $running_day = date('w',mktime(0,0,0,$m,1,$year));
            $prevLinkDate = strtolower(date('F', strtotime('-1 month', strtotime($last))));
            $nextLinkDate = strtolower(date('F', strtotime('+1 month', strtotime($next))));
            $days_in_month = date('t',mktime(0,0,0,$m,1,$year));
            $prevLink = "{$prevLinkDate}-{$year}-calendar";
            $nextLink = "{$nextLinkDate}-{$year}-calendar";
            return view('calendar',['date'=>$date,'last'=>$last,'next'=>$next,'running_day'=>$running_day,'days_in_month'=>$days_in_month,'prevLink'=>$prevLink,'nextLink'=>$nextLink]);
        }
        
        


    }
    function holidays($slugs){
                $us =$slugs['0'];
                $year=$slugs['2'];
                $prevyear =$year-1;
                $nextyear=$year+1;
                $holiday=$slugs['1'];
                $prevyearlink ="{$us}-{$holiday}-{$prevyear}";
                $nextyearlink ="{$us}-{$holiday}-{$nextyear}";
                return view('country-holiday',['date'=>$year,'last'=>$prevyear,'next'=>$nextyear,'prevLink1'=>$prevyearlink,'nextLink1'=>$nextyearlink]);
    }

    function holidays2($res){
               $month=$res['0'];
               $holiday ='';
               $slugs2 ='';
               $currentyear= date('Y');
               if (isset($res['1'])) {
                    $holiday =$res['1'];
               }
               if (isset($res['2'])) {
                   $slugs2= $res['2'];
               }
               if ($holiday=='calendar') {
                      $currentyear=$currentyear;
                      return view('calendars',['currentyear'=>$month]);
                }

              if (is_numeric($month)|| $month=='holidays') { 
                   if ($month=='holidays') {
                     $currentyear =$currentyear;
                   }else{
                    $currentyear=$month;
                   }
                    return view('holidays',['year'=>$currentyear]);
            }else{

                 if ($holiday=='holidays') {  
                     $currentyear=$currentyear;
                  return view('month-holidays',['month'=>$month,'year'=>$currentyear]);
                  }

                  if ($holiday=='calendars') {
                      $currentyear=$currentyear;
                      return view('calendars',['currentyear'=>$slugs2]);
                  }     
            }   
 

    }

}
