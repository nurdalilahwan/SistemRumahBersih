@once
@push('scripts')
	<script src="{{ asset('AdminLTE/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
@endpush

@push('js')
	<script>
  		$(function () {
			$('.mask-ic').inputmask({"mask": "999999-99-9999"});
			$('.mask-phoneno').inputmask({"mask": "99-99999999{*}"});
			$('.mask-mobileno').inputmask({"mask": "999-9999999{*}"});
			$('.mask-money').inputmask({
				"alias": "decimal", 
				"positionCaretOnClick": "radixFocus",
				"radixPoint": ".",
				"groupSeparator": ',',
				"_radixDance": true,
				"numericInput": true,
				"placeholder": "0",
			});
  		});
	</script>
@endpush
@endonce