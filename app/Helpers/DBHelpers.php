<?php
/**
 * Created by PhpStorm.
 * User: HTCINDIA\poovarasanv
 * Date: 7/3/16
 * Time: 12:14 PM
 */

namespace App\Helpers;


use App\User;
use Auth;
use Carbon\Carbon;
use GeoIP;
use Request;
use Setting;

class DBHelpers
{

    public static function isUserAvailable($abyasiId)
    {
        return User::where('abhyasiid', $abyasiId)->count();
    }

    public static function success()
    {
        return array("result" => true);
    }

    public static function failure()
    {
        return array("result" => false);
    }

    public static function getStoragePath()
    {
        return storage_path() . '' . Auth::user()->settingpath . '' . Auth::user()->abhyasiid . ".json";
    }

    public static function setActivity($name, $desc)
    {
        Setting::setPath(self::getStoragePath());
        $activity = Setting::get('activity', array());

        $newActivity = new Activity();
        $newActivity->name = $name;
        $newActivity->desc = $desc;
        $newActivity->date = date('d-m-Y');
        $newActivity->time = date('H:i:s');
        $newActivity->geo = GeoIP::getLocation();
        $newActivity->ipaddress = Request::ip();

        array_push($activity, (array)$newActivity);
        Setting::set('activity', $activity);
    }

    public static function getActivity()
    {
        Setting::setPath(self::getStoragePath());
        return Setting::get('activity');
    }
}