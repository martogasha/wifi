<?php

namespace App\Http\Controllers;

use App\Mpesa;
use App\User;
use Illuminate\Http\Request;
use Kopokopo\SDK\K2;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function users(){
        return view('admin.users');
    }
    public function invoice(){
        return view('admin.invoice');
    }
    public function payOne(Request $request){
        // Do not hard code these values
        $options = [
            'clientId' => 'J6IUCHendZ4SbNEAF6WWJZIFcKR2LCmy5hmrlkIVHcU',
            'clientSecret' => 'IDbzppyG-fXTgClVemBnh2irjcfUG_s8E4AD3xELMO4',
            'apiKey' => 'a3ee4134cc102a400aef96c3c9d1a635829f54d2',
            'baseUrl' => 'https://api.kopokopo.com'
        ];
        $K2 = new K2($options);
        $tokens = $K2->TokenService();
        $result = $tokens->getToken();
        $access = $result['data'];
        $accessToken = $access['accessToken'];
        $stk = $K2->StkService();
        $result = $stk->initiateIncomingPayment([
            'paymentChannel' => 'M-PESA STK Push',
            'tillNumber' => 'K967143',
            'firstName' => $request->first_name,
            'lastName' => $request->last_name,
            'currency'=>'KES',
            'phoneNumber' => $request->userPhone,
            'amount' => $request->userAmount,
            'email' => $request->userEmail,
            'callbackUrl' => 'https://wifi.davixdesign.co.ke/api/storeWebhooks',
            'accessToken' => $accessToken,
        ]);
    }
    public function subscribe(){
        $options = [
            'clientId' => 'J6IUCHendZ4SbNEAF6WWJZIFcKR2LCmy5hmrlkIVHcU',
            'clientSecret' => 'IDbzppyG-fXTgClVemBnh2irjcfUG_s8E4AD3xELMO4',
            'apiKey' => 'a3ee4134cc102a400aef96c3c9d1a635829f54d2',
            'baseUrl' => 'https://api.kopokopo.com'
        ];
        $K2 = new K2($options);
        $tokens = $K2->TokenService();
        $result = $tokens->getToken();
        $access = $result['data'];
        $accessToken = $access['accessToken'];
        $webhooks = $K2->Webhooks();
        $response = $webhooks->subscribe([
            'eventType' => 'buygoods_transaction_received',
            'url' => 'https://wifi.davixdesign.co.ke/api/storeWebhooks',
            'scope' => 'till',
            'scopeReference' => '000798',
            'accessToken' => $accessToken,
        ]);
        $location = $response['location'];
        $stk = $K2->StkService();
        $options = [
            'location' => $location,
            'accessToken' => $accessToken,
        ];
        $response = $stk->getStatus($options);
        dd($response);
    }
    public function authenticate(){
        global $K2;
        global $response;
        $webhooks = $K2->Webhooks();

        $json_str = file_get_contents('https://wifi.davixdesign.co.ke/api/storeWebhooks');
        $response = $webhooks->webhookHandler($json_str, $_SERVER['a419432d-284a-4688-9535-bcf7314c3639']);
        dd($response);
    }
    public function confirm(Request $request){
        $user = User::find($request->id);
        return response($user);
    }
    public function storeWebhooks(Request $request){
        $userPhone = User::where('id', \Illuminate\Support\Facades\Auth::id())->first();
        $duplicate = $request->json()->all();
        $dub = array($duplicate);
        $input = array_unique($dub);
        $dateFormat = $input[0]['data']['attributes']['event']['resource']['origination_time'];
        $user = User::where('phone',$input[0]['data']['attributes']['event']['resource']['sender_phone_number'])->first();
        $store = Mpesa::create([
            'senderFirstName' => $input[0]['data']['attributes']['event']['resource']['sender_first_name'],
            'senderMiddleName' => $input[0]['data']['attributes']['event']['resource']['sender_middle_name'],
            'senderLastName' => $input[0]['data']['attributes']['event']['resource']['sender_last_name'],
            'reference'=>$input[0]['data']['attributes']['event']['resource']['reference'],
            'status'=>$input[0]['data']['attributes']['event']['resource']['status'],
            'system'=>$input[0]['data']['attributes']['event']['resource']['system'],
            'amount'=>$input[0]['data']['attributes']['event']['resource']['amount'],
            'date'=>date("d-m-Y", strtotime($dateFormat)),
            'phone'=>$input[0]['data']['attributes']['event']['resource']['sender_phone_number'],
            'user_id'=>$user->id,
        ]);
        $updateUser = User::where('id',$user->id)->update(['status'=>'1']);

    }
    public function mpesaTest(Request $request){
    }
}
