<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.users', [
            'users' => User::all(),
        ]);
    }


    public function profile()
    {
        $user = Auth::user();
        return view('profile', [
            'user'       => $user,
            'creditCard' => $user->creditCard
        ]);
    }

    public function updateAvatar(Request $request){

        if ($request->hasFile('avatar')){

            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(154,154)->save(public_path('/uploads/avatars/'. $filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return redirect('/profile');
    }


    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $curPassword =$request->input('curPassword');
        $newPassword = $request->input('newPassword');

        if (Hash::check($curPassword, $user->password)) {
            $user_id = $user->id;
            $obj_user = User::find($user_id)->first();
            $obj_user->password = Hash::make($newPassword);
            $obj_user->save();

            return redirect('/profile');
        }
        else
        {
            return response()->json(["result"=>false]);
        }
    }

    public function editProfile()
    {  
        $user = Auth::user();     

        return view('user.user_edit', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {       

        return view('user.user_edit', [
            'user' => $user
        ]);
    }
 
    

    public function updateProfile(Request $request)
    {
        return $this->update($request, Auth::user());
    }

    public function update(Request $request, User $user)
    {

        // todo: check user can update
        $validator = request()->validate(
            [
                'firstName'              =>     'required|max:30',
                'lastName'               =>     'required',
                'tel'                    =>     'required|numeric',
                'email'                  =>     'required|max:30',
                'passport'               =>     'required|max:30',
                'passport_expMonth'      =>     'required|numeric',
                'passport_expYear'       =>     'required|numeric',
                'cin'                    =>     'required|max:30',
                'departement'            =>     'required|max:30',
                'cin_valideMonth'        =>     'required|numeric',
                'cin_valideYear'         =>     'required|numeric',
                'code_imputation'        =>     'required|max:30',
                'code_etablissement'     =>     'required|max:30',
                'car_transmission'       =>     'required',
                'car_carburant'          =>     'required|max:30',
                'flight_seat'            =>     'required',
            ]);
                
        $user->firstName = Input::get('firstName');
        $user->lastName = Input::get('lastName');
        $user->tel = Input::get('tel');
        $user->email = Input::get('email');
        $user->passport = Input::get('passport');
        $user->passport_expMonth = Input::get('passport_expMonth');
        $user->passport_expYear = Input::get('passport_expYear');
        $user->cin = Input::get('cin');
        $user->cin_valideMonth = Input::get('cin_valideMonth');
        $user->cin_valideYear = Input::get('cin_valideYear');
        $user->code_imputation = Input::get('code_imputation');
        $user->code_etablissement = Input::get('code_etablissement');
        $user->car_transmission = Input::get('car_transmission');
        $user->car_carburant = Input::get('car_carburant');
        $user->flight_seat = Input::get('flight_seat');
        $user->departement = Input::get('departement');
        
        $user->save();
        
        return redirect('/profile');
    }

    public function show(User $user)
    {
        return view('admin.user', [
            'user' => $user,
            'creditCard' => $user->creditCard
        ]);
    }
}