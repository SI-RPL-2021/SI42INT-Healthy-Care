function set_active([nurse.dashboard, nurse.profile, nurse.notif], $output = ‘active’)
{
 if( is_array([nurse.dashboard, nurse.profile, nurse.notif]) ) {
   foreach ([nurse.dashboard, nurse.profile, nurse.notif] as $u) {
     if (Route::is($u)) {
       return $output;
     }
   }
 } else {
   if (Route::is([nurse.dashboard, nurse.profile, nurse.notif])){
     return $output;
   }
 }
}