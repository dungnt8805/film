<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 11/8/14
 * Time: 10:23 AM
 */

class OAuthController extends BaseController
{
    public function getLoginWithFacebook()
    {
        if (Sentry::check()) {
            return Redirect::route('account');
        }
        $code = Input::get('code');
        // get data from input
        $code = Input::get('code');

        // get fb service
        $fb = OAuth::consumer('Facebook');

        // check if code is valid

        // if code is provided get user data and sign in
        if (!empty($code)) {
            // This was a callback request from google, get the token
            $token = $fb->requestAccessToken($code);
            // print_r($token); die();
            // Send a request with it
            $ouser = json_decode($fb->request('/me'), true);

            $user = User::where('email', $ouser['email'])->first();
            $avatar = 'https://graph.facebook.com/' . $ouser['id'] . '/picture?width=200&height=200';
            if (is_null($user)) {

                try {
                    $birthday = array(0, 0, 0);
                    if (isset($ouser['birthday'])) {
                        $birthday = explode('/', $ouser['birthday']);
                    }
                    $user = Sentry::register(array(
                        'username' => $ouser['email'],
                        'email' => $ouser['email'],
                        'password' => $ouser['email'] . '123',
                        'first_name' => $ouser['first_name'],
                        'middle_name' => $ouser['middle_name'],
                        'last_name' => $ouser['last_name'],
                        'avatar' => $avatar,
                        'birth_day' => $birthday[1],
                        'birth_month' => $birthday[0],
                        'birth_year' => $birthday[2],
                        'fb_id' => $ouser['id'],
                        'activated' => 1,
                    ));
                } catch (Cartalyst\Sentry\Users\UserExistsException $e) {

                }
            } else {
                if (!$user->fb_id)
                    $user->fb_id = $ouser['id'];
                if (!$user->username)
                    $user->username = $ouser['email'];
                if (!$user->avatar)
                    $user->avatar = $avatar;
                $user->first_name = $ouser['first_name'];
                $user->middle_name = $ouser['middle_name'];
                $user->last_name = $ouser['last_name'];
                $user->activated = 1;
                $user->save();
            }
            if ($user) {
                try {
                    // Try to log the user in
                    Sentry::loginAndRemember($user);

                    // Get the page we were before
                    $redirect = Session::get('loginRedirect', 'account');

                    // Unset the page we were before from the session
                    Session::forget('loginRedirect');

                    // Redirect to the users page
                    return Redirect::to('/')->with('success', Lang::get('auth/message.signin.success'));
                } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
                    $this->messageBag->add('email', Lang::get('auth/message.account_not_found'));
                } catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
                    $this->messageBag->add('email', Lang::get('auth/message.account_not_activated'));
                } catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
                    $this->messageBag->add('email', Lang::get('auth/message.account_suspended'));
                } catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
                    $this->messageBag->add('email', Lang::get('auth/message.account_banned'));
                }
            }
        } else {
            // get fb authorization
            $url = $fb->getAuthorizationUri();

            // return to facebook login url
            return Redirect::to((string)$url);
        }
    }
} 