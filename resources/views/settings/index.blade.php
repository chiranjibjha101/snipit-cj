@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ trans('general.admin') }}
@parent
@stop

@section('header_right')



  <!-- search filter box -->
  <div class="pull-right">


    <form onsubmit="return false;">
      <div class="btn-group">
        <input id="searchinput" name="search" type="search" class="search form-control" placeholder="{{ trans('admin/settings/general.filter_by_keyword') }}">
        <span id="searchclear" class="fas fa-times" aria-hidden="true"></span>
        <button type="submit" disabled style="display: none" aria-hidden="true"></button>
      </div>
      <a href="{{ route('settings.index') }}" class="btn btn-primary pull-right" style="margin-left: 10px;">{{ trans('general.back') }}</a>

    </form>




  </div>
  <!--/ search filter box -->
@stop


{{-- Page content --}}
@section('content')



  <style>
    #searchinput {
      width: 200px;
    }
    #searchclear {
      position: absolute;
      right: 5px;
      top: 0;
      bottom: 0;
      height: 14px;
      margin: auto;
      font-size: 14px;
      cursor: pointer;
      color: #ccc;
    }
  </style>

  <div class="row">
    <!-- search filter list -->
    <div class="list clearfix">

        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
              <a href="{{ route('settings.branding.index') }}" class="settings_button">
                <!-- <i class="fas fa-copyright fa-4x" aria-hidden="true"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-copyright" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                  <path d="M14 9.75a3.016 3.016 0 0 0 -4.163 .173a2.993 2.993 0 0 0 0 4.154a3.016 3.016 0 0 0 4.163 .173" />
                </svg>
                <br><br>
                <span class="name">{{ trans('admin/settings/general.brand') }}</span>
                <span class="keywords" aria-hidden="true" style="display:none">{{ trans('admin/settings/general.brand_keywords') }}</span>
              </a>
              </h5>
              <p class="help-block">{{ trans('admin/settings/general.brand_help') }}</p>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
                <a href="{{ route('settings.general.index') }}" class="settings_button">
                  <!-- <i class="fas fa-wrench fa-4x" aria-hidden="true"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tool" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" />
                  </svg>
                  <br><br>
                  <span class="name"> {{ trans('admin/settings/general.general_settings') }}</span>
                  <span class="keywords" aria-hidden="true" style="display:none">{{ trans('admin/settings/general.general_settings_keywords') }}</span>
                </a>
              </h5>
              <p class="help-block">{{ trans('admin/settings/general.general_settings_help') }}</p>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
                <a href="{{ route('settings.security.index') }}" class="settings_button">
                  <!-- <i class="fas fa-lock fa-4x" aria-hidden="true"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-lock" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />
                    <path d="M12 11m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    <path d="M12 12l0 2.5" />
                  </svg>
                  <br><br>
                  <span class="name">{{ trans('admin/settings/general.security') }}</span>
                  <span class="keywords" aria-hidden="true" style="display:none">{{ trans('admin/settings/general.security_keywords') }}</span>
                </a>
              </h5>
              <p class="help-block">{{ trans('admin/settings/general.security_help') }}</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
                <a href="{{ route('groups.index') }}" class="settings_button">
                  <!-- <i class="fas fa-user-friends fa-4x" aria-hidden="true"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                  </svg>
                  <br><br>
                  <span class="name">{{ trans('general.groups') }}</span>
                  <span class="keywords" aria-hidden="true" style="display:none"> {{ trans('admin/settings/general.groups_keywords') }}</span>
                  </a>
              </h5>
              <p class="help-block">{{ trans('admin/settings/general.groups_help') }}</p>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
                <a href="{{ route('settings.localization.index') }}" class="settings_button">
                  <!-- <i class="fas fa-globe-americas fa-4x" aria-hidden="true"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                    <path d="M3.6 9h16.8" />
                    <path d="M3.6 15h16.8" />
                    <path d="M11.5 3a17 17 0 0 0 0 18" />
                    <path d="M12.5 3a17 17 0 0 1 0 18" />
                  </svg>
                  <br><br>
                  <span class="name">{{ trans('admin/settings/general.localization') }}</span>
                  <span class="keywords" aria-hidden="true" style="display:none"> {{ trans('admin/settings/general.localization_keywords') }}</span>
                </a>
              </h5>
              <p class="help-block">{{ trans('admin/settings/general.localization_help') }}</p>

            </div>
          </div>
        </div>


        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
                <a href="{{ route('settings.alerts.index') }}" class="settings_button">
                  <!-- <i class="fas fa-bell fa-4x" aria-hidden="true"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                  </svg>
                  <br><br>
                  <span class="name">{{ trans('admin/settings/general.notifications') }}</span>

                </a>
              </h5>
              <p class="help-block">{{ trans('admin/settings/general.notifications_help') }}</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
                <a href="{{ route('settings.slack.index') }}" class="settings_button">
                  <!-- <i class="fa-solid fa-hashtag fa-4x" aria-hidden="true"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hash" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 9l14 0" />
                    <path d="M5 15l14 0" />
                    <path d="M11 4l-4 16" />
                    <path d="M17 4l-4 16" />
                  </svg>
                  <br><br>
                  <span class="name">{{ trans('admin/settings/general.integrations') }}</span>
                </a>
              </h5>
              <p class="help-block">{{ trans('admin/settings/general.webhook_help') }}</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
                <a href="{{ route('settings.asset_tags.index') }}" class="settings_button">
                  <!-- <i class="fas fa-list-ol fa-4x" aria-hidden="true"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-numbers" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M11 6h9" />
                    <path d="M11 12h9" />
                    <path d="M12 18h8" />
                    <path d="M4 16a2 2 0 1 1 4 0c0 .591 -.5 1 -1 1.5l-3 2.5h4" />
                    <path d="M6 10v-6l-2 2" />
                  </svg>
                  <br><br>
                  <span class="name">{{ trans('general.asset_tags') }}</span>
                </a>
              </h5>
              <p class="help-block">{{ trans('admin/settings/general.asset_tags_help') }}</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
                <a href="{{ route('settings.barcodes.index') }}" class="settings_button">
                  <!-- <i class="fas fa-barcode fa-4x" aria-hidden="true"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-barcode" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 7v-1a2 2 0 0 1 2 -2h2" />
                    <path d="M4 17v1a2 2 0 0 0 2 2h2" />
                    <path d="M16 4h2a2 2 0 0 1 2 2v1" />
                    <path d="M16 20h2a2 2 0 0 0 2 -2v-1" />
                    <path d="M5 11h1v2h-1z" />
                    <path d="M10 11l0 2" />
                    <path d="M14 11h1v2h-1z" />
                    <path d="M19 11l0 2" />
                  </svg>
                  <br><br>
                  <span class="name">{{ trans('admin/settings/general.barcodes') }}</span>
                </a>
              </h5>
              <p class="help-block">{!! trans('admin/settings/general.barcodes_help_overview') !!}</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
                <a href="{{ route('settings.labels.index') }}" class="settings_button">
                  <!-- <i class="fas fa-tags fa-4x" aria-hidden="true"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tags" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 8v4.172a2 2 0 0 0 .586 1.414l5.71 5.71a2.41 2.41 0 0 0 3.408 0l3.592 -3.592a2.41 2.41 0 0 0 0 -3.408l-5.71 -5.71a2 2 0 0 0 -1.414 -.586h-4.172a2 2 0 0 0 -2 2z" />
                    <path d="M18 19l1.592 -1.592a4.82 4.82 0 0 0 0 -6.816l-4.592 -4.592" />
                    <path d="M7 10h-.01" />
                  </svg>
                  <br><br>
                  <span class="name">{{ trans('admin/settings/general.labels') }}</span>
                </a>
              </h5>
              <p class="help-block">{!! trans('admin/settings/general.labels_help') !!}</p>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
                <a href="{{ route('settings.ldap.index') }}" class="settings_button">
                  <!-- <i class="fas fa-sitemap fa-4x" aria-hidden="true"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sitemap" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                    <path d="M15 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                    <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                    <path d="M6 15v-1a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v1" />
                    <path d="M12 9l0 3" />
                  </svg>
                  <br><br>
                  <span class="name">{{ trans('admin/settings/general.ldap') }}</span>
                </a>
              </h5>
              <p class="help-block">{{ trans('admin/settings/general.ldap_help') }}</p>
            </div>
          </div>
        </div>

      <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
        <div class="box box-default box-blue-gradient">
          <div class="box-body text-center">
            <h5>
              <a href="{{ route('settings.google.index') }}" class="settings_button">
                <!-- <i class="fa-brands fa-google fa-4x" aria-hidden="true"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M20.945 11a9 9 0 1 1 -3.284 -5.997l-2.655 2.392a5.5 5.5 0 1 0 2.119 6.605h-4.125v-3h7.945z" />
                </svg>
                <br><br>
                <span class="name">Google</span>
              </a>
            </h5>
            <p class="help-block">{{ trans('admin/settings/general.google_login') }}</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
        <div class="box box-default box-blue-gradient">
          <div class="box-body text-center">
            <h5>
              <a href="{{ route('settings.saml.index') }}" class="settings_button">
                <!-- <i class="fas fa-sign-in-alt fa-4x" aria-hidden="true"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login-2" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                  <path d="M3 12h13l-3 -3" />
                  <path d="M13 15l3 -3" />
                </svg>
                <br><br>
                <span class="name">{{ trans('admin/settings/general.saml') }}</span>
              </a>
            </h5>
            <p class="help-block">{{ trans('admin/settings/general.saml_help') }}</p>
          </div>
        </div>
      </div>

        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
                <a href="{{ route('settings.backups.index') }}" class="settings_button">
                  <!-- <i class="fas fa-file-archive fa-4x" aria-hidden="true"></i> -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-zip" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6 20.735a2 2 0 0 1 -1 -1.735v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-1" />
                    <path d="M11 17a2 2 0 0 1 2 2v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-2a2 2 0 0 1 2 -2z" />
                    <path d="M11 5l-1 0" />
                    <path d="M13 7l-1 0" />
                    <path d="M11 9l-1 0" />
                    <path d="M13 11l-1 0" />
                    <path d="M11 13l-1 0" />
                    <path d="M13 15l-1 0" />
                  </svg>
                  <br><br>
                  <span class="name">{{ trans('admin/settings/general.backups') }}</span>
                </a>
              </h5>
              <p class="help-block">{!! trans('admin/settings/general.backups_help') !!}</p>
            </div>
          </div>
        </div>


      <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
        <div class="box box-default box-blue-gradient">
          <div class="box-body text-center">
            <h5>
              <a href="{{ route('settings.logins.index') }}" class="settings_button">
                <!-- <i class="fas fa-crosshairs fa-4x" aria-hidden="true"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-crosshair" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                  <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                  <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                  <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                  <path d="M9 12l6 0" />
                  <path d="M12 9l0 6" />
                </svg>
                <br><br>
                <span class="name">{{ trans('admin/settings/general.login') }}</span>
              </a>
            </h5>
            <p class="help-block">{{ trans('admin/settings/general.login_help') }} </p>
          </div>
        </div>
      </div>

        <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
          <div class="box box-default box-blue-gradient">
            <div class="box-body text-center">
              <h5>
              <a href="{{ route('settings.oauth.index') }}" class="settings_button">
                <!-- <i class="fas fa-user-secret fa-4x" aria-hidden="true"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-shield" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M6 21v-2a4 4 0 0 1 4 -4h2" />
                  <path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z" />
                  <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                </svg>
                <br><br>
                <span class="name">{{  trans('admin/settings/general.oauth') }}</span>
              </a>
              </h5>
              <p class="help-block">{{  trans('admin/settings/general.oauth_help') }}</p>
            </div>
          </div>
        </div>

        @if (config('app.debug')=== true)
          <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
            <div class="box box-default">
              <div class="box-body text-center">
                <h5>
                  <a href="{{ route('settings.phpinfo.index') }}" class="settings_button">
                    <i class="fab fa-php fa-4x" aria-hidden="true"></i>
                    <br><br>
                    <span class="name">{{ trans('admin/settings/general.php_overview') }}</span>
                    <span class="keywords" aria-hidden="true" style="display:none">{{ trans('admin/settings/general.php_overview_keywords') }}</span>
                  </a>
                </h5>
                <p class="help-block">{{ trans('admin/settings/general.php_overview_help') }}</p>
              </div>
            </div>
          </div>
        @endif


    <div class="col-md-4 col-lg-3 col-sm-6 col-xl-1">
      <div class="box box-danger box-blue-gradient">
        <div class="box-body text-center">
          <h5>
            <a href="{{ route('settings.purge.index') }}" class="link-danger">
              <!-- <i class="fas fa-trash fa-4x" aria-hidden="true"></i> -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 7l16 0" />
                <path d="M10 11l0 6" />
                <path d="M14 11l0 6" />
                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
              </svg>
              <br><br>
              <span class="name">{{ trans('admin/settings/general.purge') }}</span>
              <span class="keywords" aria-hidden="true" style="display:none">{{ trans('admin/settings/general.purge_keywords') }}</span>
            </a>
          </h5>
          <p class="help-block">{{ trans('admin/settings/general.purge_help') }}</p>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-header">
        <h2 class="box-title">{{ trans('admin/settings/general.system') }}</h2>
      </div>
      <div class="box-body">
        <div class="container row row-striped" style="width:97%">

          <!-- row -->
          <div class="row">
            <div class="col-md-2">
              <strong>{{ trans('admin/settings/general.snipe_version') }}:</strong>
            </div>
            <div class="col-md-4">
            {{ config('version.app_version') }}  build {{ config('version.build_version') }} ({{ config('version.hash_version') }})
            </div>

            <div class="col-md-2">
              <strong>{{ trans('admin/settings/general.license') }}:</strong>
            </div>
          <div class="col-md-4">
              <a href="https://www.gnu.org/licenses/agpl-3.0.en.html" rel="noopener">AGPL3</a>
           </div>
          </div>
          <!-- / row -->

          <!-- row -->
          <div class="row">
            <div class="col-md-2">
              <strong>{{ trans('admin/settings/general.php') }}:</strong>
            </div>
            <div class="col-md-4">
              {{ phpversion() }}
            </div>

            <div class="col-md-2">
              <strong>{{ trans('admin/settings/general.laravel') }}:</strong>
            </div>
            <div class="col-md-4">
              {{ $snipeSettings->lar_ver() }}
            </div>
          </div>

          <!-- row -->
          <div class="row">
              <div class="col-md-2">
                <strong>{{ trans('admin/settings/general.timezone') }}:</strong>
              </div>
              <div class="col-md-4">
                {{ config('app.timezone') }}
              </div>

              <div class="col-md-2">
                <strong>{{ trans('admin/settings/general.database_driver') }}:</strong>
              </div>
              <div class="col-md-4">
                {{ config('database.default') }}
              </div>
          </div>

          <!-- row -->
          <div class="row">
            <div class="col-md-2">
              <strong>{{ trans('admin/settings/general.mail_from') }}:</strong>
            </div>
            <div class="col-md-4">
              {{ config('mail.from.name') }}
              <code>&lt;{{ config('mail.from.address') }}&gt;</code>
            </div>

            <div class="col-md-2">
              <strong>{{ trans('admin/settings/general.mail_reply_to') }}:</strong>
            </div>
            <div class="col-md-4">
              {{ config('mail.reply_to.name') }}
              <code>&lt;{{ config('mail.reply_to.address') }}&gt;</code>
            </div>
          </div>

          <!-- row -->
          <div class="row">
            <div class="col-md-2">
              <strong>{{ trans('admin/settings/general.bs_table_storage') }}:</strong>
            </div>
            <div class="col-md-10">
              {{ config('session.bs_table_storage') }}
            </div>

          </div>

        </div>
          </div>
          <!--/ row -->
        </div>
      </div> <!-- /box-body-->
    </div> <!--/box-default-->
  </div><!--/col-md-8-->
</div><!--/row-->




  @section('moar_scripts')
<script nonce="{{ csrf_token() }}">



  var options = {
    valueNames: [ 'name', 'keywords', 'summary', 'help-block']
  };

  var settingList = new List('setting-list', options);

  $("#searchclear").click(function(){
    $("#searchinput").val('');
    settingList.search();
  });



</script>
  @endsection

@stop


