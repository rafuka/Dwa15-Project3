<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory;

class UserController extends Controller {

  public function postUser(Request $req) {

    $this->validate($req, [
      'numu' => 'required|integer|min:1|max:30'
    ]);

    //dd($req);

    $faker = Factory::create();

    $num_users = $req->input('numu');

    $users = [];
    $address = $req->input('address');
    $phone = $req->input('phone');
    $company = $req->input('company');
    $email = $req->input('email');

    // Create an array of user objects
    for ($i = 0; $i < $num_users; $i++) {
      $users[] = new \stdClass();
    }

    foreach ($users as $user) {
      $user->name = $faker->name;
      $user->imageURL = $faker->imageUrl(120, 120, 'people');

      if (isset($address)) {
        $user->address = $faker->address;
      }

      if (isset($phone)) {
        $user->phone = $faker->phoneNumber;
      }

      if (isset($company)) {
        $user->company = $faker->company;
      }

      if (isset($email)) {
        $user->email = $faker->email;
      }
    }

    return view('showuser')->with('users', $users)
                           ->with('address', $address)
                           ->with('phone', $phone)
                           ->with('company', $company)
                           ->with('email', $email);
  }
}
 ?>
