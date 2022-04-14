

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Installer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/favicon.ico') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
		<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- requirments-section-start -->
        <section class="mt-50 mb-50">
            <div class="requirments-section">
                <div class="content-requirments d-flex justify-content-center">
                    <div class="requirments-main-content">
                        <div class="installer-header text-center">
                            <h2>Configuration</h2>
                            <p>Please enter your database connection details</p>
                        </div>
                        @if (session('status'))
	                        <div class="alert alert-success" role="alert">
	                            {{ session('status') }}
	                        </div>
	                    @endif
                        <form action="{{ url('install/store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="app_name">App Name</label>
                                    <input type="text" class="form-control" id="app_name" name="app_name" required placeholder="App Name without space">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="app_url">App Url</label>
                                    <input type="text" value="{{ url('/') }}" class="form-control" id="app_url" name="app_url" required placeholder="App Url">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="db_host">Database Host</label>
                                    <input type="text" value="localhost" class="form-control" id="db_host" name="db_host" required placeholder="Database Host">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="db_name">Database Name</label>
                                    <input type="text" class="form-control" id="db_name" name="db_name" required placeholder="Database Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="db_user">Database Username</label>
                                    <input type="text" class="form-control" id="db_user" name="db_user" required placeholder="Database Username">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="db_pass">Database Password</label>
                                    <input type="text" class="form-control" id="db_pass" name="db_pass" placeholder="Database Password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="mail_driver">Mail Driver</label>
                                    <input type="text" class="form-control" value="smtp" id="mail_driver" name="mail_driver" required placeholder="Mail Driver">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="mail_host">Mail Host</label>
                                    <input type="text" class="form-control" value="smtp.mailtrap.io" id="mail_host" name="mail_host" required placeholder="Mail Host">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="mail_user">Mail Username</label>
                                    <input value="mailusername" type="text" class="form-control" id="mail_user" name="mail_user" required required placeholder="Mail Username">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="mail_pass">Mail Password</label>
                                    <input value="mailpassword" type="text" class="form-control" id="mail_pass" name="mail_pass" required placeholder="Mail Password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="mail_port">Mail Port</label>
                                    <input type="text" value="2525" class="form-control" id="mail_port" name="mail_port" required required placeholder="Mail Port">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="mail_address">Mail Address</label>
                                    <input type="text" value="mailaddress" class="form-control" id="mail_address" name="mail_address" required placeholder="Mail Address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="mail_enc">Mail Encryption</label>
                                    <select class="form-control" id="mail_enc" name="mail_enc">
                                      <option value="TLS">TLS</option>
                                      <option value="SSL">SSL</option>
                                      <option value="STARTTLS">STARTTLS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="mail_form">Mail Form Name</label>
                                    <input type="text" value="mailformname" class="form-control" id="mail_form" name="mail_form" required placeholder="Mail Form Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="mail_form">Select Install Method</label>
                                    <select class="form-control" name="method">
                                        <option value="install">I want to install full system</option>
                                        <option value="update">I want to update my system v1.5 - v2.o</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary f-right">Save & Install</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- requirments-section-end -->
    </body>
</html>
