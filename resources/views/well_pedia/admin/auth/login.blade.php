@extends('well_pedia.admin.layout.basic_layout')
@section('content')
    @include('well_pedia.admin.layout.before_login.navbar')
    <main>
        <section>
            <div class="section_container container_left_helper container_right_helper">
                <div class="section_title section_title_mb title_padding title_border_bottom">
                    <h1 class="text_primary title_mb">
                        For WELL PEDIA
                    </h1>
                    <h5 class="text_48">
                        管理者専用ページ
                    </h5>
                </div>
            </div>
        </section>
        <section>
            <div class="section_container container_left_helper container_right_helper">
                <form action="{{ route('onAdminLogin') }}" method="post" class="">
                    @csrf
                    <h3 class="form_title text-center text_primary">
                        ログイン
                    </h3>
                    <div class="form_container form_mx_container mb_lg">
                        @if(Session::has('error-message'))
                            <div class="alert alert-danger text-center">
                                <b>{{ Session::get('error-message') }}</b>
                            </div>
                        @endif
                        <div class="{{ $errors->has('email') ? 'has-error' : '' }} form-group">
                            <label for="" class="form-label">メールアドレス</label>
                            <input type="email" class="form-control" style="{{ $errors->has('email') ? 'border : 1px solid #D9214E!important;' : '' }}" name="email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="{{ $errors->has('password') ? 'has-error' : '' }} form-group">
                            <label for="" class="form-label">パスワード</label>
                            <input type="password" class="form-control" style="{{ $errors->has('password') ? 'border : 1px solid #D9214E!important;' : '' }}" name="password" value="{{ old('password') }}">
                            @if($errors->has('password'))
                                <span class="error">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form_control_action text-center">
                            <button class="btn_be_action sm_size action_mt" type="submit">
                                ログイン
                            </button>
                        </div>
                        <div class="form_control_helper text-center">
                            <a href="#" class="d-block text_f7">→企業コード、社員番号を忘れた</a>
                            <a href="#" class="d-block text_f7">→企業コード、社員番号を忘れた</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section id="contact_section">
            <div class="section_container container_left_helper container_right_helper">
                <div class="row justify-content-center section_title_content">
                    <div class="col-md-10 text-center">
                        <h3>
                            ココロとカラダの健康を支えるためにはじめてみましょう。
                        </h3>
                        <div class="content text-center">
                            <a href="#" class="btn_light">
                                <img src="/assets/img/mail_icon.png" alt=""> Contact
                            </a>
                            <h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.447" height="29.447"
                                    viewBox="0 0 29.447 29.447">
                                    <path id="Icon_awesome-phone-alt" data-name="Icon awesome-phone-alt"
                                        d="M28.607,20.809l-6.442-2.761a1.38,1.38,0,0,0-1.61.4L17.7,21.93A21.318,21.318,0,0,1,7.511,11.739L11,8.887a1.377,1.377,0,0,0,.4-1.61L8.633.835a1.39,1.39,0,0,0-1.582-.8L1.07,1.416A1.38,1.38,0,0,0,0,2.761,26.684,26.684,0,0,0,26.687,29.447a1.38,1.38,0,0,0,1.346-1.07l1.38-5.981a1.4,1.4,0,0,0-.806-1.587Z"
                                        transform="translate(0 0)" fill="#fff" />
                                </svg>
                                000-000-0000
                            </h2>
                            <p>
                                平日  &nbsp; &nbsp; 10:00〜17:00
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('well_pedia.admin.layout.before_login.footer')
@endsection('content')
