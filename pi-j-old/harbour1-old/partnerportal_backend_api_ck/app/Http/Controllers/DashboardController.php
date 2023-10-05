<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Stage;
use App\Models\SBUnit;
use App\Models\Partner;
use App\Models\Pipeline;
use App\Models\CustomerType;
use Illuminate\Http\Request;
use App\Models\PipelineRating;
use Illuminate\Support\Carbon;
use App\Models\BusinessIndustry;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use App\Http\Helpers\HelperFunctions;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $unitConverter = 10000000; //1 Cr;

    public function getDashboardData(Request $request) {

        $validator = Validator::make($request->all(), [
            'startdate' => 'required|date',
            'enddate' => 'required|date',
        ]);

        if ( $validator->fails() ) {
            return response()->json([
                'status' => 'error',
                'code' => '',
                'msg' => 'Invalid date range given'
            ]);
        } 

        $validated = $validator->validate();

        $currPeriod['startdate'] = Carbon::createFromFormat('Y-m-d', $validated['startdate'])->format('Y-m-d');
        $currPeriod['enddate'] = Carbon::createFromFormat('Y-m-d', $validated['enddate'])->format('Y-m-d');
        $prevPeriod = $this->getPreviousPeriod($currPeriod['startdate'], $currPeriod['enddate']);

        $partner = HelperFunctions::getAuthPartner();

        $dashboardData = [];

        
        $diffInMRC = $this->getFieldDiffForPeriod('mrc', $currPeriod, $prevPeriod, $partner) ;
        $dashboardData['mrc']['total'] = $this->getFieldTotalForPeriod('mrc', $currPeriod['startdate'], $currPeriod['enddate'], $partner);
        $dashboardData['mrc']['difference'] = ( abs($diffInMRC['difference']) > 0 ) ? "+".abs($diffInMRC['difference']) : "-".abs($diffInMRC['difference']);
        $dashboardData['mrc']['differenceInPerc'] = $diffInMRC['differenceInPerc'];
        

        $diffInARC = $this->getFieldDiffForPeriod('arc', $currPeriod, $prevPeriod, $partner) ;
        $dashboardData['arc']['total'] = $this->getFieldTotalForPeriod('arc', $currPeriod['startdate'], $currPeriod['enddate'], $partner);
        $dashboardData['arc']['difference'] = ( abs($diffInARC['difference']) > 0 ) ? "+".abs($diffInARC['difference']) : "-".abs($diffInARC['difference']);
        $dashboardData['arc']['differenceInPerc'] = $diffInARC['differenceInPerc'];


        $diffInOTC = $this->getFieldDiffForPeriod('otc', $currPeriod, $prevPeriod, $partner) ;
        $dashboardData['otc']['total'] = $this->getFieldTotalForPeriod('otc', $currPeriod['startdate'], $currPeriod['enddate'], $partner);
        $dashboardData['otc']['difference'] = ( abs($diffInARC['difference']) > 0 ) ? "+".abs($diffInARC['difference']) : "-".abs($diffInARC['difference']);
        $dashboardData['otc']['differenceInPerc'] = $diffInARC['differenceInPerc'];

        $diffInACV = $this->getFieldDiffForPeriod('acv', $currPeriod, $prevPeriod, $partner) ;
        $dashboardData['acv']['total'] = $this->getFieldTotalForPeriod('acv', $currPeriod['startdate'], $currPeriod['enddate'], $partner);
        $dashboardData['acv']['difference'] = ( abs($diffInARC['difference']) > 0 ) ? "+".abs($diffInARC['difference']) : "-".abs($diffInARC['difference']);
        $dashboardData['acv']['differenceInPerc'] = $diffInARC['differenceInPerc'];

        $diffInTCV = $this->getFieldDiffForPeriod('tcv', $currPeriod, $prevPeriod, $partner) ;
        $dashboardData['tcv']['total'] = $this->getFieldTotalForPeriod('tcv', $currPeriod['startdate'], $currPeriod['enddate'], $partner);
        $dashboardData['tcv']['difference'] = ( abs($diffInARC['difference']) > 0 ) ? "+".abs($diffInARC['difference']) : "-".abs($diffInARC['difference']);
        $dashboardData['tcv']['differenceInPerc'] = $diffInARC['differenceInPerc'];


        $dashboardData['pipelinebystage'] = $this->getPipelinesByStage($currPeriod['startdate'], $currPeriod['enddate'], $partner);
        $dashboardData['pipelinebyrating'] = $this->getPipelinesByRating($currPeriod['startdate'], $currPeriod['enddate'], $partner);
        $dashboardData['pipelinebycust'] = $this->getPipelinesByCustType($currPeriod['startdate'], $currPeriod['enddate'], $partner);
        $dashboardData['pipelinebyindustry'] = $this->getPipelinesByIndustry($currPeriod['startdate'], $currPeriod['enddate'], $partner);
        $dashboardData['pipelinebysbu'] = $this->getPipelinesBySBU($currPeriod['startdate'], $currPeriod['enddate'], $partner);

        $dashboardData['revenueprojection'] = $this->getRevenueProjection($partner);

        return response()->json([
            'status' => 'success', 'dashboard' => $dashboardData, 'prevMRCTot' => $diffInMRC['prevmrctot'], 
        ]);

    }

    private function getPreviousPeriod(string $startDate, string $endDate) {
        
        $from = Carbon::createFromFormat('Y-m-d', $startDate);
        $to = Carbon::createFromFormat('Y-m-d', $endDate);

        $diff_in_days = $to->diffInDays($from);
       
        $prevStartDateTime = $from->subDays($diff_in_days+1);
        $prevEndDateTime = $prevStartDateTime->addDays($diff_in_days);

        $prevPeriod['startdate'] = $prevStartDateTime->format('Y-m-d');
        $prevPeriod['enddate'] = $prevEndDateTime->format('Y-m-d');

        return $prevPeriod;
    }

/*
    private function getFieldTotalForPeriod(string $field, String $startDate, String $endDate) {

        switch ($field) {
            case 'mrc': 
                $fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->sum('mrc');
                break;
            case 'arc' : 
                $fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->sum('arc');
                break;
            case 'otc':
                $fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->sum('otc');
                break;
            case 'acv' :
                $fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->sum('acv');
                break;
            case 'tcv' :
                $fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->sum('tcv');
                break;
            default:
                $fieldTotal = 0;
                break;
        }

        $fieldTotal = $fieldTotal / $this->unitConverter; //In Crores;
        return round($fieldTotal, 4);

    }
*/

        private function getFieldTotalForPeriod(string $field, String $startDate, String $endDate, $partner) {

        $partnerId = $partner->id;

        switch ($field) {
            case 'mrc': 
                if ($partner->user_type == Config::get('constants.user_types.PIADMIN'))  {
			$fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->sum('mrc');
                } else {
                    $fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->where('partner_id', '=', $partnerId)
                            ->sum('mrc');

                }
                
                break;
            case 'arc' : 
                if ($partner->user_type == Config::get('constants.user_types.PIADMIN'))  {
                    $fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->sum('arc');
                } else {
                    
			$fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->where('partner_id', '=', $partnerId)
                            ->sum('arc');
                }
                
                break;
            case 'otc':
                if ($partner->user_type == Config::get('constants.user_types.PIADMIN'))  {
			$fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->sum('otc');

                } else {
			
                    $fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->where('partner_id', '=', $partnerId)
                            ->sum('otc');

                }
                break;
            case 'acv' :
                if ($partner->user_type == Config::get('constants.user_types.PIADMIN'))  {
			$fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->sum('acv');

                    
                } else {
                    $fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->where('partner_id', '=', $partnerId)
                            ->sum('acv');
                }
                break;
            case 'tcv' :
                if ($partner->user_type == Config::get('constants.user_types.PIADMIN'))  {
                   	$fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->sum('tcv'); 
                } else {
                    
			$fieldTotal = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                            ->whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->where('partner_id', '=', $partnerId)
                            ->sum('tcv');
                }
                break;
            default:
                $fieldTotal = 0;
                break;
        }

        $fieldTotal = $fieldTotal / $this->unitConverter; //In Crores;
        return round($fieldTotal, 4);

    }

    private function getMRCDiffForPeriod(array $currPeriod, array $prevPeriod) {
        
        $prevMRCTotal = $this->getFieldTotalForPeriod('mrc',$prevPeriod['startdate'], $prevPeriod['enddate']);
        $curMRCTotal = $this->getFieldTotalForPeriod('mrc',$currPeriod['startdate'], $currPeriod['enddate']);

        $diffInMRCTot = $curMRCTotal - $prevMRCTotal;

        if ( $prevMRCTotal > 0 ) {
            $diffInMRCPerc = ( $diffInMRCTot / $prevMRCTotal ) * 100;
        } else {
            $diffInMRCPerc = $diffInMRCTot * 100;
        }
        
        $diffInMRCPerc = round($diffInMRCPerc, 4);

        $diffInMRC['difference'] = $diffInMRCTot;
        $diffInMRC['differenceInPerc'] = $diffInMRCPerc . "%";
        $diffInMRC['prevmrctot'] = $prevMRCTotal;
       
        return $diffInMRC; 
    }

    private function getARCDiffForPeriod(array $currPeriod, array $prevPeriod) {

        $prevTotal = $this->getFieldTotalForPeriod('arc',$prevPeriod['startdate'], $prevPeriod['enddate']);
        $curTotal = $this->getFieldTotalForPeriod('arc',$currPeriod['startdate'], $currPeriod['enddate']);

        $diffInTot = $curTotal - $prevTotal;

        if ( $prevTotal > 0 ) {
            $diffInPerc = ( $diffInTot / $prevTotal ) * 100;
        } else {
            $diffInPerc = $diffInTot * 100;
        }
        

        $diffInPerc = round($diffInPerc, 4);

        $diffInARC['difference'] = $diffInTot;
        $diffInARC['differenceInPerc'] = $diffInPerc . "%";
        $diffInARC['prevmrctot'] = $prevTotal;
       
        return $diffInARC; 
    }


    private function getFieldDiffForPeriod(string $field, array $currPeriod, array $prevPeriod, $partner) {

        $prevTotal = $this->getFieldTotalForPeriod($field, $prevPeriod['startdate'], $prevPeriod['enddate'], $partner);
        $curTotal = $this->getFieldTotalForPeriod($field, $currPeriod['startdate'], $currPeriod['enddate'], $partner);

        $diffInTot = $curTotal - $prevTotal;

        if ( $prevTotal > 0 ) {
            $diffInPerc = ( $diffInTot / $prevTotal ) * 100;
        } else {
            $diffInPerc = $diffInTot * 100;
        }
        

        $diffInPerc = round($diffInPerc, 4);

        $diffInField['difference'] = $diffInTot;
        $diffInField['differenceInPerc'] = $diffInPerc . "%";
        $diffInField['prevmrctot'] = $prevTotal;
       
        return $diffInField; 
    }

    private function getPipelinesByStage(String $startDate, String $endDate, $partner) {

        $data = [];
        if ($partner->user_type == Config::get('constants.user_types.PIADMIN')) {

            $pipelines = DB::table('pipelines')
            ->where('status', '=', Config::get('constants.options.APPROVED'))
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->select('stage', DB::raw('count(*) as total'), DB::raw('sum(mrc) as mrc'), DB::raw('sum(otc) as otc'), DB::raw('sum(acv) as acv'))
            ->groupBy('stage')
            ->get();

        } else {

            $pipelines = DB::table('pipelines')
            ->where('status', '=', Config::get('constants.options.APPROVED'))
            ->where('partner_id', $partner->id)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->select('stage', DB::raw('count(*) as total'), DB::raw('sum(mrc) as mrc'), DB::raw('sum(otc) as otc'), DB::raw('sum(acv) as acv'))
            ->groupBy('stage')
            ->get();

        }

        foreach ( $pipelines as $pipeline ) {
            $pipeline->stage = html_entity_decode(Stage::where('id', '=', $pipeline->stage)->first()->display_name);
            //$data[] = array($pipeline->stage => ['total' => $pipeline->total, 'mec' => $pipeline->mrc]);

            //$pipeline->total = $pipeline->total / $this->unitConverter;
            $pipeline->mrc = $pipeline->mrc / $this->unitConverter;
            $pipeline->otc = $pipeline->otc / $this->unitConverter;
            $pipeline->acv = $pipeline->acv / $this->unitConverter;

            $tempArr = array($pipeline->stage => ['total' => round($pipeline->total, 4), 'mrc' => round($pipeline->mrc, 4), 'otc' => round($pipeline->otc, 4), 'acv' => round($pipeline->acv, 4)]);
            $data = array_merge($data, $tempArr);
        }

        return $data;
    }

    private function getPipelinesByRating(string $startDate, string $endDate, $partner) {
        $data = [];
        if ($partner->user_type == Config::get('constants.user_types.PIADMIN')) {
            $pipelines = DB::table('pipelines')
            ->where('status', '=', Config::get('constants.options.APPROVED'))
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->select('rating_id', DB::raw('count(*) as total'), DB::raw('sum(mrc) as mrc'), DB::raw('sum(otc) as otc'), DB::raw('sum(acv) as acv'))
            ->groupBy('rating_id')
            ->get();

        } else {

            $pipelines = DB::table('pipelines')
            ->where('status', '=', Config::get('constants.options.APPROVED'))
            ->where('partner_id', $partner->id)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->select('rating_id', DB::raw('count(*) as total'), DB::raw('sum(mrc) as mrc'), DB::raw('sum(otc) as otc'), DB::raw('sum(acv) as acv'))
            ->groupBy('rating_id')
            ->get();


        }

        foreach ( $pipelines as $pipeline ) {
            $pipeline->rating_id = html_entity_decode(PipelineRating::where('id', '=', $pipeline->rating_id)->first()->rate_name);
            //$data[] = array($pipeline->stage => ['total' => $pipeline->total, 'mec' => $pipeline->mrc]);
            $pipeline->mrc = $pipeline->mrc / $this->unitConverter;
            $pipeline->otc = $pipeline->otc / $this->unitConverter;
            $pipeline->acv = $pipeline->acv / $this->unitConverter;

            $tempArr = array($pipeline->rating_id => ['total' => round($pipeline->total, 4), 'mrc' => round($pipeline->mrc, 4), 'otc' => round($pipeline->otc, 4), 'acv' => round($pipeline->acv, 4)]);
            $data = array_merge($data, $tempArr);
        }

        return $data;
    }

    private function getPipelinesByCustType(string $startDate, string $endDate, $partner) {
        $data = [];
	if ($partner->user_type == Config::get('constants.user_types.PIADMIN')) {

	    $pipelines = DB::table('pipelines')
            ->where('status', '=', Config::get('constants.options.APPROVED'))
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->select('customer_type', DB::raw('count(*) as total'), DB::raw('sum(mrc) as mrc'), DB::raw('sum(otc) as otc'), DB::raw('sum(acv) as acv'))
            ->groupBy('customer_type')
            ->get();

	} else {
	
	   $pipelines = DB::table('pipelines')
            ->where('status', '=', Config::get('constants.options.APPROVED'))
	    ->where('partner_id', $partner->id)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->select('customer_type', DB::raw('count(*) as total'), DB::raw('sum(mrc) as mrc'), DB::raw('sum(otc) as otc'), DB::raw('sum(acv) as acv'))
            ->groupBy('customer_type')
            ->get();
	}

        

        foreach ( $pipelines as $pipeline ) {
            $pipeline->customer_type = html_entity_decode(CustomerType::where('id', '=', $pipeline->customer_type)->first()->customer_type_name);
            //$data[] = array($pipeline->stage => ['total' => $pipeline->total, 'mec' => $pipeline->mrc]);

            $pipeline->mrc = $pipeline->mrc / $this->unitConverter;
            $pipeline->otc = $pipeline->otc / $this->unitConverter;
            $pipeline->acv = $pipeline->acv / $this->unitConverter;

            $tempArr = array($pipeline->customer_type => ['total' => round($pipeline->total, 4), 'mrc' => round($pipeline->mrc, 4), 'otc' => round($pipeline->otc, 4), 'acv' => round($pipeline->acv, 4)]);
            $data = array_merge($data, $tempArr);
        }

        return $data;
    }

    private function getPipelinesByIndustry(string $startDate, string $endDate, $partner) {
        $data = [];

	if ($partner->user_type == Config::get('constants.user_types.PIADMIN')) {
	   $pipelines = DB::table('pipelines')
            ->where('status', '=', Config::get('constants.options.APPROVED'))
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->select('business_industry', DB::raw('count(*) as total'), DB::raw('sum(mrc) as mrc'), DB::raw('sum(otc) as otc'), DB::raw('sum(acv) as acv'))
            ->groupBy('business_industry')
            ->get();
	} else {
	    $pipelines = DB::table('pipelines')
            ->where('status', '=', Config::get('constants.options.APPROVED'))
	    ->where('partner_id', $partner->id)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->select('business_industry', DB::raw('count(*) as total'), DB::raw('sum(mrc) as mrc'), DB::raw('sum(otc) as otc'), DB::raw('sum(acv) as acv'))
            ->groupBy('business_industry')
            ->get();
	}
        

        foreach ( $pipelines as $pipeline ) {
            $pipeline->business_industry = html_entity_decode(BusinessIndustry::where('id', '=', $pipeline->business_industry)->first()->display_name);
            //$data[] = array($pipeline->stage => ['total' => $pipeline->total, 'mec' => $pipeline->mrc]);

            $pipeline->mrc = $pipeline->mrc / $this->unitConverter;
            $pipeline->otc = $pipeline->otc / $this->unitConverter;
            $pipeline->acv = $pipeline->acv / $this->unitConverter;


            $tempArr = array($pipeline->business_industry => ['total' => round($pipeline->total, 4), 'mrc' => round($pipeline->mrc, 4), 'otc' => round($pipeline->otc, 4), 'acv' => round($pipeline->acv, 4)]);
            $data = array_merge($data, $tempArr);
        }

        return $data;
    }

    private function getPipelinesBySBU(string $startDate, string $endDate, $partner) {
        $data = [];
	if ($partner->user_type == Config::get('constants.user_types.PIADMIN')) {
	   $pipelines = DB::table('pipelines')
            ->where('status', '=', Config::get('constants.options.APPROVED'))
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->select('sbunits_id', DB::raw('count(*) as total'), DB::raw('sum(mrc) as mrc'), DB::raw('sum(otc) as otc'), DB::raw('sum(acv) as acv'))
            ->groupBy('sbunits_id')
            ->get();
	} else {
	    $pipelines = DB::table('pipelines')
            ->where('status', '=', Config::get('constants.options.APPROVED'))
	    ->where('partner_id', $partner->id)
            ->whereDate('created_at', '>=', $startDate)
            ->whereDate('created_at', '<=', $endDate)
            ->select('sbunits_id', DB::raw('count(*) as total'), DB::raw('sum(mrc) as mrc'), DB::raw('sum(otc) as otc'), DB::raw('sum(acv) as acv'))
            ->groupBy('sbunits_id')
            ->get();
	}
        

        foreach ( $pipelines as $pipeline ) {
            $pipeline->business_sbunits_id = html_entity_decode(SBUnit::where('id', '=', $pipeline->sbunits_id)->first()->sbu_name);
            //$data[] = array($pipeline->stage => ['total' => $pipeline->total, 'mec' => $pipeline->mrc]);
            $pipeline->mrc = $pipeline->mrc / $this->unitConverter;
            $pipeline->otc = $pipeline->otc / $this->unitConverter;
            $pipeline->acv = $pipeline->acv / $this->unitConverter;

            $tempArr = array($pipeline->business_sbunits_id => ['total' => round($pipeline->total, 4), 'mrc' => round($pipeline->mrc, 4), 'otc' => round($pipeline->otc, 4), 'acv' => round($pipeline->acv, 4)]);
            $data = array_merge($data, $tempArr);
        }

        return $data;
    }

    private function getRevenueProjection($partner) {
        $approvedState = 'approved';
        // $pipelines = DB::table('pipelines')
        //             //->whereIn('status', ['approved'])
        //             ->whereNotIn('stage', [6,7,8,9,10])
        //             ->select(DB::raw('MONTH(closing_date) as month'), DB::raw('count(*) as total'))
        //             ->groupBy(DB::raw('MONTH(closing_date'))
        //             ->get();
	
	if ($partner->user_type == Config::get('constants.user_types.PIADMIN')) {
        	$pipelines = DB::select( DB::raw("select MONTH(closing_date) as month, count(*) as total, 
        	sum(mrc) as total_mrc, sum(arc) as total_arc, sum(otc) as total_otc, sum(acv) as total_acv, sum(tcv) as total_tcv
         	from `pipelines` where status='approved' and `stage` not in (6, 7, 8, 9, 10) group by MONTH(closing_date)"));
	} else {
		$pipelines = DB::select( DB::raw("select MONTH(closing_date) as month, count(*) as total, 
        	sum(mrc) as total_mrc, sum(arc) as total_arc, sum(otc) as total_otc, sum(acv) as total_acv, sum(tcv) as total_tcv
         	from `pipelines` where status='approved' and partner_id=".$partner->id." and `stage` not in (6, 7, 8, 9, 10) group by MONTH(closing_date)"));
	}

        $data = [];
        foreach ( $pipelines as $pipeline ) {
            $monthNum  = $pipeline->month;
            $dateObj   = DateTime::createFromFormat('!m', $monthNum);
            $monthName = $dateObj->format('F'); // March

            $pipeline->total_mrc = $pipeline->total_mrc / $this->unitConverter;
            $pipeline->total_arc = $pipeline->total_arc / $this->unitConverter;
            $pipeline->total_otc = $pipeline->total_otc / $this->unitConverter;
            $pipeline->total_acv = $pipeline->total_acv / $this->unitConverter;

            $tempArr = array($monthName => ['mrc' => round($pipeline->total_mrc, 4), 'arc' => round($pipeline->total_arc, 4), 'otc' => round($pipeline->total_otc, 4), 'acv' => round($pipeline->total_acv, 4), 'tcv' => round($pipeline->total_tcv, 4)]);
            $data = array_merge($data, $tempArr);   
        }

        $fymonths = ["April","May","June","July","August","September","October","November","December","January","February","March"];
        
        for ($idx=0; $idx<12; $idx++) {
            $month = $fymonths[$idx];
            if ( !array_key_exists($month, $data) ) {
                $data = array_merge($data, array($month => ['mrc' => 0, 'arc' => 0, 'otc' => 0, 'acv' => 0, 'tcv' => 0]));
            }
        }

        $fyrev = 0;
        $annualrev = 0;

        for ($idx=0; $idx<12; $idx++) {
            $month = $fymonths[$idx];
            $fyrev += ($data[$month]['mrc'] * (12 - $idx)) + $data[$month]['arc'] + $data[$month]['otc'];
            $annualrev += ($data[$month]['mrc'] * 12) + $data[$month]['arc'] + $data[$month]['otc'];
        }

        //foreach ($fymonths as $month) {
        // for ($idx=0; $idx<12; $idx++) {
        //     $month = $fymonths[$idx];
        //     if ( array_key_exists($month, $data) ) {
        //         $fyrev += ($data[$month]['mrc'] * (12 - $idx)) + $data[$month]['arc'] + $data[$month]['otc'];
        //         $annualrev += ($data[$month]['mrc'] * 12) + $data[$month]['arc'] + $data[$month]['otc'];
        //     }
        // }

        $retArr['data'] = $data;
        $retArr['fyrev'] = number_format($fyrev, 4);
        $retArr['annualrev'] = number_format($annualrev, 4);

        return $retArr;
    }

    public function pipelinesByParams(String $param1, String $param2) {
        $startDate = "2021-05-01";
        $endDate = "2021-08-12";
        $filterId = 0;
        switch ($param1) {
            case "stages":  $stage = Stage::where("display_name", '=', $param2)->first();
                            $filterId = ($stage == null)?0 :$stage->id;
                            $parentField = "stage";
                            break;
        }
        $pipelines = Pipeline::where('status', '=', Config::get('constants.options.APPROVED'))
                                ->whereDate('created_at', '>=', $startDate)
                                ->whereDate('created_at', '<=', $endDate)
                                ->where($parentField, '=', $filterId)
                                ->get();
        return response()->json([
            "status" => "success",
            "pipelines" => $pipelines,
        ]);
    }

}
