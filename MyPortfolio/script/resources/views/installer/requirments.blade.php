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
                            <h2>Requirments</h2>
                            <p>Please make sure the PHP extentions listed below are installed</p>
                        </div>
                        <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">Extentions</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>PHP >= 7.2.0</td>
                                <td>
                                  @if($info['phpversion'] >= 7.2)
                                    <i class="fas fa-check"></i>
                                  @else
                                    <i class="fas fa-times"></i>
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <td>BCMath PHP Extension</td>
                                <td>
                                  @if($info['bcmath'] == 1)
                                    <i class="fas fa-check"></i>
                                  @else
                                    <i class="fas fa-times"></i>
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <td>Ctype PHP Extension</td>
                                <td>
                                  @if($info['ctype'] == 1)
                                    <i class="fas fa-check"></i>
                                  @else
                                    <i class="fas fa-times"></i>
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <td>JSON PHP Extension</td>
                                <td>
                                  @if($info['json'] == 1)
                                    <i class="fas fa-check"></i>
                                  @else
                                    <i class="fas fa-times"></i>
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <td>Mbstring PHP Extension</td>
                                <td>
                                  @if($info['mbstring'] == 1)
                                    <i class="fas fa-check"></i>
                                  @else
                                    <i class="fas fa-times"></i>
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <td>OpenSSL PHP Extension</td>
                                <td>
                                  @if($info['openssl'] == 1)
                                    <i class="fas fa-check"></i>
                                  @else
                                    <i class="fas fa-times"></i>
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <td>PDO PHP Extension</td>
                                <td>
                                  @if($info['pdo'] == 1)
                                    <i class="fas fa-check"></i>
                                  @else
                                    <i class="fas fa-times"></i>
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <td>Tokenizer PHP Extension</td>
                                <td>
                                  @if($info['tokenizer'] == 1)
                                    <i class="fas fa-check"></i>
                                  @else
                                    <i class="fas fa-times"></i>
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <td>XML PHP Extension</td>
                                <td>
                                  @if($info['xml'] == 1)
                                    <i class="fas fa-check"></i>
                                  @else
                                    <i class="fas fa-times"></i>
                                  @endif
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          @if($info['phpversion'] >= 7.2 && $info['mbstring'] == 1 && $info['bcmath'] == 1 && $info['ctype'] == 1 && $info['json'] == 1 && $info['openssl'] == 1 && $info['pdo'] == 1 && $info['tokenizer'] == 1 && $info['xml'] == 1)
                          <a href="{{ url('install/info') }}" class="btn btn-primary f-right">Next</a>
                          @else
                          <a href="#" class="btn btn-primary f-right disabled">next</a>
                          @endif
                    </div>
                </div>
            </div>
        </section>
        
        <!-- requirments-section-end -->
      
    </body>
</html>
