<!-- FastClick -->
<script src="{{asset('admin_assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('admin_assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_assets/dist/js/adminlte.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('admin_assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin_assets/dist/js/demo.js')}}"></script>

<script>
  $(document).ready(function(){
    $(".delete").click(function(){
      if (!confirm("This is a irreversible action ? Do you really want to delete!")){
        return false;
      }
    });
  });
    
  $('#per_page').change(function(){
    $('form').submit();
  });

  //Date picker
  $('#datepicker').datepicker({
    autoclose: true
  });
</script>