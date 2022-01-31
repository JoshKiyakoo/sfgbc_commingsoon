<?php
// ======================================================================
//             Designed by:    Eyasu Girma [Kiya]
//                 Mobile:     +251-913-078-029
//                 Email:      sendtokiya@gmail.com
//                 Facebook:   https://facebook.com/JoshKiyakoo
//                 LinkedIn:   https://linkedin.com/in/JoshKiyakoo
//                 Twitter:    https://twitter.com/JoshKiyakoo
//                 Telegram:   https://t.me/JoshKiyakoo
// ======================================================================
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscribersDataModel;

class SubscribersDataController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSubscriber () {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSubscriber (Request $requestSubscriber) {
        try {
            if (($requestSubscriber->txtSubscriberEmail != NULL) || (filter_var($requestSubscriber->txtSubscriberEmail, FILTER_VALIDATE_EMAIL) || preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $requestSubscriber->txtSubscriberEmail))) {
                
                $subscriberData = SubscribersDataModel::where('subscriberEmail', '=', $requestSubscriber->input('txtSubscriberEmail'))->first();

                if ($subscriberData != null) {
                    // Email does not exist
                    return redirect('/')->with('JoshKiyakoo_Message_Error', 'Your Email Subscription with <span style="font-weight: bold; color: BLUE;">'.$requestSubscriber->txtSubscriberEmail.'</span> was <span style="font-weight: bolder; color: RED;"> FAILED </span>. <br>***** The ERROR may be you are trying to enter a <span style="font-weight: bolder; color: GREEN;"> DUPLICATED ACCOUNT </span> which is already registered on the system. So please check your email address again. Thank You...');
                }
                else {
                    // Email exits
                    $subscriberDataObj = new  SubscribersDataModel ();

                    $subscriberDataObj->subscriberEmail = $requestSubscriber->txtSubscriberEmail;
                    $subscriberDataObj->subscriberStatus = 'Active';
                    $subscriberDataObj->subscribeDate = date ('Y-m-d');

                    $subscriberDataObj->save();

                    return redirect('/')->with('JoshKiyakoo_Message_Success', 'Your Email Subscription with <span style="font-weight: bold; color: BLUE;"><u>'.$requestSubscriber->txtSubscriberEmail.'</u></span> was <span style="font-weight: bolder; color: RED;">ACCEPTED</span> and <span style="font-weight: bolder; color: RED;">REGISTERED</span> Successfully. <br>***** Thank You...for subscribing our website...');
                }
            }
            else {
                return redirect('/')->with('JoshKiyakoo_Message_Err', 'Your Email Subscription was <span style="font-weight: bolder; color: RED;"> FAILED </span>. <br>***If you are seeing the problem continuosly you may be trying to provide an <span style="font-weight: bolder; color: GREEN;"> INVALID EMAIL </span> Address or <span style="font-weight: bolder; color: GREEN;"> EMPTY DATA </span> submitted. So please check your email address again. Thank You...');
            }
        } 
        catch (Exception $throwSubscriberData) {
            return redirect('/')->with('JoshKiyakoo_Message_Err', 'Your Email Subscription was <span style="font-weight: bolder; color: RED;"> FAILED </span>. <br>ERROR ON: ' .$throwSubscriberData.getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSubscriber ($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSubscriber ($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSubscriber (Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroySubscriber ($id) {
        //
    }
}
