<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('public/template/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('public/template/assets/vendor/css/core.css')}}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('public/template/assets/vendor/css/theme-default.css')}}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('public/template/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{asset('public/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('public/template/assets/vendor/css/pages/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('public/template/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('public/template/assets/js/config.js')}}"></script>
</head>

<body>
    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="{{url('/')}}" class="app-brand-link gap-2">
                                <img src="{{asset('public/image/icon.png')}}" style="width:30px;">
                                <span class="app-brand-text demo text-body fw-bolder">BWI BUS</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Selamat datang di bwi bus👋</h4>
                        <p class="mb-4">Silahkan Masukan data anda</p>

                        <form class="mb-3" action="{{url('register')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="nama" class="form-control @error('name') is-invalid @enderror" id="nama"
                                    name="name" value="{{old('name')}}" autofocus />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{old('email')}}" placeholder="Enter your email" />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="*****" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                     
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Daftar</button>
                            </div>
                            <p class="text-center">
                                <span>Sudah Punya Akun?</span>
                                <a href="{{url('login')}}">
                                    <span>Login</span>
                                </a>
                            </p>
                        </form>

                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('public/template/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('public/template/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('public/template/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('public/template/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{asset('public/template/assets/js/main.js')}}"></script>

    <!-- Page JS -->

    <script>
    function alertToast(tools) {
        tools.judul ? tools.judul : tools.judul = "Alert"
        tools.type ? tools.type : tools.type = "bg-success"
        tools.subjudul ? tools.subjudul : tools.subjudul = ""
        tools.icon ? tools.icon : tools.icon = ""
        tools.deskripsi ? tools.deskripsi : tools.deskripsi = ""

        let kelas = `toashows${Math.floor(Math.random() * 1000)}`;

        $("body").prepend(`
        <div
                class="bs-toast toast ${kelas} toast-placement-ex m-2 top-0 end-0 ${tools.type}"
                role="alert"
                aria-live="assertive"
                aria-atomic="true"
                data-delay="2000"
              >
                <div class="toast-header">
                  <i class="bx ${tools.icon} me-2"></i>
                  <div class="me-auto fw-semibold">${tools.judul}</div>
                  <small>${tools.subjudul}</small>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">${tools.deskripsi}</div>
              </div>
        `)

        toastPlacement = new bootstrap.Toast($('.' + kelas));

        setTimeout(function() {
            $('.' + kelas).remove()
        }, 2000);
        return toastPlacement.show();
    }

    @if(session()->has("sukses"))
    alertToast({
        judul: "Sukses",
        deskripsi: "{{session()->get('sukses')}}",
    })
    @elseif(session()->has("gagal"))
    alertToast({
        type: "bg-danger",
        judul: "Gagal",
        deskripsi: "{{session()->get('gagal')}}",
    })
    @endif
    </script>

</body>

</html>