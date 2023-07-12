<!-- footer -->
<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Pets Care <i class="mdi mdi-heart text-danger"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/admin/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/admin/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/admin/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('assets/admin/js/plugins.js')}}"></script>

    <!-- particles js -->
    <script src="{{asset('assets/admin/libs/particles.js/particles.js')}}"></script>

    <!-- particles app js -->
    <script src="{{asset('assets/admin/js/pages/particles.app.js')}}"></script>
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
 <script src="{{asset('assets/js/plugins.min.js')}}"></script>

 <!--Main JS-->
 <script src="{{asset('assets/js/main.js')}}"></script>
 <script src="{{asset('assets/js/toast.js')}}"></script>

 <script>
     function Success(message) {
         toastNotif({
             text: message,
             color: '#5bc83f',
             timeout: 5000,
             icon: 'valid'
         });
     }

     function Warning(message) {
         toastNotif({
             text: message,
             color: '#ebb73f',
             timeout: 5000,
             icon: 'warring'
         });
     }

     function Error(message) {
         toastNotif({
             text: message,
             color: '#da4848',
             timeout: 5000,
             icon: 'error'
         });
     }
 </script>
</body>

</html>