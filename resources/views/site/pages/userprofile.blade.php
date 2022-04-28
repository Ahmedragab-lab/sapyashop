@extends('site.layouts.master')
@section('css')

@endsection
@section('content')
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <!-- works section -->
        <section class="section hero has-background-primary-light  works-list is-clearfix">
          <div class="container">
            <br>
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title has-text-centered">
                    <div class="hero-body">

                        <div class="container">
                            <p class="image">
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                     src={{ asset('uploads/user-img/'.Auth::user()->image) }}
                                     style="border-radius: 50%;padding: 5px;background: white;display: inline-block;
                                     margin-bottom: 12px;max-width:100px;">
                            </p>

                            <li>
                                <a href="{{route('userprofile.show',$user->id)}}">
                                    <span class="icon">
                                    <i class="icon-link"></i>
                                    </span>
                                </a>
                            </li>
                            <h3 class="subtitle">{{Auth::user()->fname }} {{Auth::user()->lname }}</h3>
                            <h2 class="subtitle">{{ Auth::user()->email }}</h2>
                            <ul class="header-menu-icons social">
                                <li>
                                    <a href="#" target="_blank">
                      <span class="icon">
                        <i class="fab fa-facebook-f"></i>
                      </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                      <span class="icon">
                        <i class="fab fa-twitter"></i>
                      </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                      <span class="icon">
                        <i class="fab fa-instagram"></i>
                      </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" target="_blank">
                      <span class="icon">
                        <i class="fab fa-google"></i>
                      </span>
                                    </a>
                                </li>
                            </ul>
                            <!-- .header-menu-icons -->
                        </div>
                    </div>
                </section>
            </div>
            <!-- #header-bottom-inner -->
        </div>

        <!-- #header-bottom -->
    </div>

    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <section class="section  is-clearfix">
                    <div class="container">
                        <br>
                        <div class="columns is-variable is-multiline">
                            <div class="column is-three-fifths is-offset-one-fifth">
                                <div class="tabs-list">
                                    <div class="tabs is-boxed is-centered">
                                        <ul>
                                            <li class="is-active">
                                                <a>
                            <span class="icon">
                              <i class="icon-speedometer"></i>
                            </span>
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                            <span class="icon">
                              <i class="icon-bell"></i>
                            </span>
                                                    <span>Notifications</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                            <span class="icon">
                              <i class="icon-lock"></i>
                            </span>
                                                    <span>Password</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .tabs -->
                                    <div class="tabs-content">
                                        <div class="tab-block content">
                                            <br>
                                            <form action="#">
                                                <div class="field">
                                                    <div class="control">
                                                        <input class="input" type="text" placeholder="Text input"> </div>
                                                </div>
                                                <div class="field">
                                                    <div class="control has-icons-left has-icons-right">
                                                        <input class="input is-success" type="text" placeholder="Text input" value="Username">
                                                        <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                              </span>
                                                        <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                              </span>
                                                    </div>
                                                    <p class="help is-success">This username is available</p>
                                                </div>
                                                <div class="field">
                                                    <div class="control has-icons-left has-icons-right">
                                                        <input class="input is-danger" type="email" placeholder="Email input" value="hello@email">
                                                        <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                              </span>
                                                        <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle"></i>
                              </span>
                                                    </div>
                                                    <p class="help is-danger">This email is invalid</p>
                                                </div>

                                                <br>
                                                <div class="field">
                                                    <div class="control">
                                                        <textarea class="textarea" placeholder="Textarea Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <input class="is-checkradio" id="exampleCheckbox" type="checkbox" name="exampleCheckbox" checked="checked">
                                                    <label for="exampleCheckbox"> I agree to the
                                                        <a href="#">terms and conditions</a>
                                                    </label>
                                                </div>
                                                <div class="field">
                                                    <input class="is-checkradio" id="exampleRadioInline1" type="radio" name="exampleRadioInline" checked="checked">
                                                    <label for="exampleRadioInline1">Option 1</label>
                                                    <input class="is-checkradio" id="exampleRadioInline2" type="radio" name="exampleRadioInline">
                                                    <label for="exampleRadioInline2">Option 2</label>
                                                </div>
                                                <div class="field is-grouped">
                                                    <div class="control">
                                                        <button class="button is-small">Save Changes</button>
                                                    </div>
                                                    <div class="control">
                                                        <button class="button is-black is-small">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- .tab-block -->
                                        <div class="tab-block content">
                                            <br>
                                            <form action="#">
                                                <div class="field">
                                                    <input id="switchRoundedDefault" type="checkbox" name="switchRoundedDefault" class="switch is-rounded is-success" checked="checked">
                                                    <label for="switchRoundedDefault">New Messages</label>
                                                </div>
                                                <div class="field">
                                                    <input id="switchRoundedSuccess" type="checkbox" name="switchRoundedSuccess" class="switch is-rounded is-success" checked="checked">
                                                    <label for="switchRoundedSuccess">New Comments</label>
                                                </div>
                                                <div class="field">
                                                    <input id="switchRoundedWarning" type="checkbox" name="switchRoundedWarning" class="switch is-rounded is-success">
                                                    <label for="switchRoundedWarning">My Emails</label>
                                                </div>
                                                <div class="field">
                                                    <input id="switchRoundedWarning2" type="checkbox" name="switchRoundedWarning2" class="switch is-rounded is-success">
                                                    <label for="switchRoundedWarning2">Subscribe Newsletter</label>
                                                </div>
                                                <div class="field">
                                                    <div class="control">
                                                        <button class="button is-small">Save Changes</button>
                                                    </div>
                                                </div>
                                                <!-- .field -->
                                            </form>
                                        </div>
                                        <!-- .tab-block -->
                                        <div class="tab-block content">
                                            <br>
                                            <form action="#">
                                                <div class="field">
                                                    <div class="control is-expanded">
                                                        <input class="input" type="password" id="pass2" name="password1" placeholder="Old Password"> </div>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded">
                                                        <input class="input" type="password"  name="password2" placeholder="New Password"> </div>
                                                </div>
                                                <div class="field">
                                                    <div class="control is-expanded">
                                                        <input class="input" type="password" data-parsley-equalto="#"  name="confirm-password" placeholder="Repeat New Password"> </div>
                                                </div>
                                                <!-- .field -->
                                                <div class="field ">
                                                    <div class="control">
                                                        <button class="button is-small">change password</button>
                                                    </div>
                                                </div>
                                                <!-- .field -->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- .tabs-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
    </div>

@endsection
@section('js')

@endsection
