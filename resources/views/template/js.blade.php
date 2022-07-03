    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('public/template/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('public/template/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('public/template/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('public/template/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('public/template/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('public/template/assets/js/main.js')}}"></script>
    <script src="{{asset('public/template/assets/js/dashboards-analytics.js')}}"></script>

    <script>
        function alertToast(tools){
            tools.judul ? tools.judul : tools.judul = "Alert"
            tools.type ? tools.type : tools.type = "bg-success"
            tools.subjudul ? tools.subjudul : tools.subjudul = ""
            tools.icon ? tools.icon : tools.icon = ""
            tools.deskripsi? tools.deskripsi: tools.deskripsi= ""

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

        toastPlacement = new bootstrap.Toast($('.'+kelas));

        setTimeout(function() {
            $('.'+kelas).remove()
            }, 2000);
      return toastPlacement.show();
        }

        function validateForm(el){
          let form = el
          $(el).find(".is-invalid").removeClass("is-invalid")
            if($(form)[0].checkValidity()){
                $(form).submit()
            }else{
                $(form+" :invalid").each(function(i, obj) {
                    $(obj).addClass("is-invalid")
                });
                $(form+" :invalid").first().focus()
            }
        }
    </script>