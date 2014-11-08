<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 10/18/14
 * Time: 10:46 AM
 */

class AuthController extends BaseController
{
    /**
     * Account sign up form.
     *
     * @return View
     */
    public function getRegister()
    {
        // check if user logged in
        if (Sentry::check()) {

        }
        return View::make('shareiz.frontend.auth.signup', $this->data);
    }

    /**
     * account sign up processing
     *
     * @return Redirect
     */
    public function postRegister()
    {
        if(Sentry::check())
            return Redirect::route('account');
        $rules = array(
            'username' => 'required|alpha_dash|unique:users,username|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|between:8,32',
            'confirm_password' => 'required|same:password',
            'agree'=>'required'
        );
        $validator = Validator::make(Input::all(),$rules);
        if($validator->fails())
            return Redirect::back()->withInput()->withErrors($validator);

        try{
            $user = Sentry::register(array(
                'username'=>Input::get('username'),
                'email'=>Input::get('email'),
                'password'=>Input::get('password')
            ));
        }catch (Cartalyst\Sentry\Users\UserExistsException $e){
            $this->messageBag->add('email', Lang::get('auth/message.account_already_exists'));
        }
    }

} 