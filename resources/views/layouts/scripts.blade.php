{{-- Core JS Files --}}
<script src="{{asset('/assets/template/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/template/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/template/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
{{-- Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ --}}
<script src="{{asset('/assets/template/js/plugins/bootstrap-switch.js')}}"></script>
{{-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ --}}
<script src="{{asset('/assets/template/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
{{-- Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker --}}
<script src="{{asset('/assets/template/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
{{-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc --}}
<script src="{{asset('/assets/template/js/now-ui-kit.js?v=1.2.0')}}" type="text/javascript"></script>
{{-- Font Awesome --}}
<script src="{{asset('/assets/icons/js/all.min.js')}}"></script>
{{-- Jquery Mask --}}
<script src="{{asset('/assets/js/jquery.mask.js')}}"></script>
{{-- Wizard --}}
<script src="{{asset('/assets/wizard/js/jquery.smartWizard.js')}}"></script>

@hasSection('scripts_dashboard')
    {{-- Datatable --}}
    <script src="{{asset('assets/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/datatable/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/datatable/js/buttons.print.min.js')}}"></script>
@endif
