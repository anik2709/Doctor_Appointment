<?php


use App\Models\SideSetting;

function getsideSettingsData($input = null): array
{
    if (empty($input)) {
        $storePost = \App\Models\SideSetting::get()->pluck('value', 'key')->toArray();
    } elseif (is_array($input)) {
        $storePost = \App\Models\SideSetting::whereIn('key', $input)->get()->pluck('value', 'key')->toArray();
    } else {
        $item = \App\Models\SideSetting::where('key', $input)->first();

        $storePost[$input] =  $item === null ? '' : $item->value;
    }

    return $storePost;
}

//   Instagram
function getInstagramLink()
{
    $item = \App\Models\SideSetting::where('key', 'Instagram')->first();

    return $item === null ? '' : $item->value;
}


//   Twitter
function getTwitterLink()
{
    $item = \App\Models\SideSetting::where('key', 'Twitter')->first();

    return $item === null ? '' : $item->value;
}


//   Facebook
function getFacebookLink()
{
    $item = \App\Models\SideSetting::where('key', 'Facebook')->first();

    return $item === null ? '' : $item->value;
}


//   Linkedin
function getLinkedinLink()
{
    $item = \App\Models\SideSetting::where('key', 'LinkedIn')->first();

    return $item === null ? '' : $item->value;
}


//   About Us Title
function getAboutUsTileLink()
{
    $item = \App\Models\SideSetting::where('key', 'About Us Title')->first();

    return $item === null ? '' : $item->value;
}

//   About Us Description
function getAboutUsDescriptionLink()
{
    $item = \App\Models\SideSetting::where('key', 'About Us Description')->first();

    return $item === null ? '' : $item->value;
}


//   Happy Patients
function getHappyPatientsLink()
{
    $item = \App\Models\SideSetting::where('key', 'Happy Patients')->first();

    return $item === null ? '' : $item->value;
}


//   Hospital Rooms
function getHospitalRoomsLink()
{
    $item = \App\Models\SideSetting::where('key', 'Hospital Rooms')->first();

    return $item === null ? '' : $item->value;
}


//   Award Win
function getAwardWinLink()
{
    $item = \App\Models\SideSetting::where('key', 'Award Win')->first();

    return $item === null ? '' : $item->value;
}


//   Ambulance
function getAmbulanceLink()
{
    $item = \App\Models\SideSetting::where('key', 'Ambulance')->first();

    return $item === null ? '' : $item->value;
}


//   Phone
function getPhoneLink()
{
    $item = \App\Models\SideSetting::where('key', 'Phone')->first();

    return $item === null ? '' : $item->value;
}



//   email
function getEmailLink()
{
    $item = \App\Models\SideSetting::where('key', 'Email')->first();

    return $item === null ? '' : $item->value;
}


//   Address
function getAddressLink()
{
    $item = \App\Models\SideSetting::where('key', 'Address')->first();

    return $item === null ? '' : $item->value;
}


//   Address2
function getAddress2Link()
{
    $item = \App\Models\SideSetting::where('key', 'Address2')->first();

    return $item === null ? '' : $item->value;
}





//function getPropertyByCategoryId($id) {
//    $items = property::doesntHave('payment')->where('category_id', $id)->get();
//
//    return $items;
//}
?>
