@once
@push('styles')
	<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
@endpush

@push('scripts')
	<script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
	<script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
@endpush

@push('js')
	<script>
  		$(function () {
  			$('.reservation').daterangepicker({
		      autoclose: true,
		      format: 'dd/mm/yyyy',
		      autoUpdateInput: false
		    },
		    function(start_date, end_date){
		    	$(this).val(start_date.format('DD/MM/Y') + ' - ' + end_date.format('DD/MM/Y'))
		    });

		   $('.reservation').each(function(){

		        let input = $(this);
		        input.daterangepicker({
		            autoUpdateInput: false,
		            locale: {
		            	timePicker: false,
            			timePicker24Hour: false,
		                format: 'DD/MM/YYYY',
		                cancelLabel: 'Clear',
		            }
		        }, function (start_date, end_date) {
		            input.val(start_date.format('DD/MM/YYYY') + ' - ' + end_date.format('DD/MM/YYYY'));
		            input.closest('form').submit();
		        });

		        // Clear value on Cancel button
		        input.on('cancel.daterangepicker', function(ev, picker) {
		            $(this).val('');
		            $(this).closest('form').submit();
					$(this).trigger('change');
		        });

		        // Trigger date picker on change
		        input.on('apply.daterangepicker', function(ev, picker) { 
		            $(this).trigger('change');
		        });
		    });
  		});
	</script>
@endpush
@endonce