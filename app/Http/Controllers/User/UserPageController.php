<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\PaymentDetails;
use App\Models\InvestmentPlans;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Models\UserPlan;
use Carbon\Carbon;

class UserPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home (Request $request) {
        $title = env('APP_NAME');

        if($request->user()->hasRole('admin')){
            return redirect()->route('adminDashboard');

        }else{

            $user = $request->user();

            $running_plan_capital = number_format(UserPlan::where('user_id', $user->id)->where('pay_day','>',now())->sum('amount'),0,'.',',');
            $plansCount = $user->investmentPlans()->count();

            $walletBalance = number_format($user->getWalletBalance(), 0,'.',',');

            $referralBonus = number_format($user->getBonusBalance(), 0, ".",",");
            $profit = number_format($user->getDeductableProfit(), 0, ".",",");
            $balance = number_format($user->getBalance(), 0, '.',','); 
            $withdrawalCount = number_format(count($user->withdrawals), 0, '.',',');

            return view('user.index', compact(['running_plan_capital','walletBalance','profit','user', 'balance', 'title', 'plansCount', 'referralBonus', 'withdrawalCount']));
        }

    }

    public function investplans (Request $request) {
        $title = env('APP_NAME');
        $user = $request->user();
        $plans = InvestmentPlans::all();
        $balance = number_format($user->getBalance(), 0,'.',',');

        return view('user.investplans', compact(['plans', 'title', 'user', 'balance']));
    }

    public function acctinfo (Request $request) {
        $title = env('APP_NAME');
        $user = $request->user();

        return view('user.accountdetails', compact(['user','title']));
    }

    public function support () {
        $title = env('APP_NAME');
        return view('user.support', compact('title'));
    }

    public function deposits (Request $request) {
        $title = env('APP_NAME');
        $user = $request->user();

        $deposits = $user->deposits()->paginate(2);
        
        //GET USER BALANCE
        $balance = number_format($user->getBalance(), 0,'.',',');

        return view('user.deposits', compact(['balance', 'deposits', 'title']));
    }

    public function withdrawals (Request $request) {
        $title = env('APP_NAME');
        $user = $request->user();
        $siteSettings = Settings::find(1);

        $transactions = $user->withdrawals()->orderBy('id', 'desc')->paginate(10);

        //GET USER BALANCE

        $balance = number_format($user->getDeductableProfit(), 0,'.',',');
        $bonus = number_format($user->getBonusBalance(), 0, ".",",");

        return view('user.withdrawals', compact(['bonus','siteSettings','transactions', 'balance', 'title']));
    }

    public function myplans (Request $request) {

        $title = env('APP_NAME');
        $user = $request->user();
        
        $basic_plans = UserPlan::where('user_id', $user->id)->where('plan_name', 'Starter Plan')->where('pay_day','>',now())->paginate(
            $perPage = 5, $columns = ['*'], $pageName = 'starter-plans'
        );

        $bas_plan_count = count($basic_plans);

        $total_bas_profit = number_format($basic_plans->sum('plan_profit'),0,'.',',');

        
        $silver_plans = UserPlan::where('user_id', $user->id)->where('plan_name', 'Gold Plan')->where('pay_day','>',now())->paginate(
            $perPage = 5, $columns = ['*'], $pageName = 'gold-plans'
        );

        $sil_plan_count = count($silver_plans);

        $total_sil_profit = number_format($silver_plans->sum('plan_profit'),0,'.',',');
        


        $gold_plans = UserPlan::where('user_id', $user->id)->where('plan_name', 'Advanced Plan')->where('pay_day','>',now())->paginate(
            $perPage = 5, $columns = ['*'], $pageName = 'advance-plans'
        );

        $gold_plan_count = count($gold_plans);

        $total_gold_profit = number_format($gold_plans->sum('plan_profit'),0,'.',',');

        
        $premium_plans = UserPlan::where('user_id', $user->id)->where('plan_name', 'Premium Plan')->where('pay_day','>',now())->paginate(
            $perPage = 5, $columns = ['*'], $pageName = 'premium-plans'
        );

        $pre_plan_count = count($premium_plans);

        $total_pre_profit = number_format($premium_plans->sum('plan_profit'),0,'.',',');


        $exclusive_plans = UserPlan::where('user_id', $user->id)->where('plan_name', 'Exclusive Plan')->where('pay_day','>',now())->paginate(
            $perPage = 5, $columns = ['*'], $pageName = 'exclusive-plans'
        );

        $exclusiv_plan_count = count($exclusive_plans);

        $total_exc_profit = number_format($exclusive_plans->sum('plan_profit'),0,'.',',');


        $vip_plans = UserPlan::where('user_id', $user->id)->where('plan_name', 'VIP Plan')->where('pay_day','>',now())->paginate(
            $perPage = 5, $columns = ['*'], $pageName = 'vip-plans'
        );

        $vip_plan_count = count($vip_plans);

        $total_vip_profit = number_format($vip_plans->sum('plan_profit'),0,'.',',');


        $shares_plans = UserPlan::where('user_id', $user->id)->where('plan_name', 'Shares plan')->where('pay_day','>',now())->paginate(
            $perPage = 5, $columns = ['*'], $pageName = 'shares-plans'
        );

        $shar_plan_count = count($shares_plans);

        $total_shar_profit = number_format($shares_plans->sum('plan_profit'),0,'.',',');

        return view('user.my-plans', compact(['basic_plans','total_bas_profit','bas_plan_count','silver_plans','total_sil_profit','sil_plan_count','gold_plans','total_gold_profit','gold_plan_count','premium_plans','pre_plan_count','total_pre_profit','exclusive_plans','exclusiv_plan_count','total_exc_profit','vip_plans','vip_plan_count','total_vip_profit','shares_plans','shar_plan_count','total_shar_profit', 'title']));
    }

    public function accthist (Request $request) {
        $title = env('APP_NAME');

        $transactions = $request->user()->transactions()->where('source', 'Top Up')
                        ->orderBy('id', 'desc')->paginate(
            $perPage = 10, $columns = ['*'], $pageName = 'top-up'
        );

        $bonus = $request->user()->transactions()->where('whereToCredit','Bonus')->orderBy('id', 'desc')->paginate(
            $perPage = 10, $columns = ['*'], $pageName = 'bonus'
        );

        $roi = $request->user()->transactions()->where('whereToCredit', 'Profit')->orderBy('id', 'desc')->where('pay_day','<=',now())->paginate(
            $perPage = 10, $columns = ['*'], $pageName = 'roi'
        );

        $capitalReturns = $request->user()->transactions()->where('source', 'Capital')->where('end_day', '<', now())->orderBy('id', 'desc')->paginate(
            $perPage = 10, $columns = ['*'], $pageName = 'capital-returns'
        );

        $reversals = $request->user()->transactions()->where('source', 'Reversal')->orWhere('source', 'Profit Reversal')->orWhere('source', 'Bonus Reversal')->orderBy('id', 'desc')->paginate(
            $perPage = 10, $columns = ['*'], $pageName = 'reversals'
        );

        return view('user.accounthistory', compact(['capitalReturns','reversals','transactions', 'roi', 'title', 'bonus']));
    }

    public function refer (Request $request) {
        $title = env('APP_NAME');
        $user = $request->user();
        $referrals = User::where('referred_by', $user->referral_key)->get();

        $refereeData = User::where('referral_key', $user->referred_by)->first();

        $referee = '';

        if($refereeData){
            $referee = 'You were referred by "'.$refereeData->username.'".';
        }

        return view('user.referuser', compact(['title', 'user', 'referrals', 'referee']));
    }

    public function makePayment (Request $request) {
        
        $title = env('APP_NAME');
        $amount = $request->amount;
        $paymentDetails = PaymentDetails::where('status', 1)->get();

        if(is_null($amount)){
            return redirect()->route('deposits');
        }

        return view('user.payment', compact('amount', 'title', 'paymentDetails'));
    }

}





