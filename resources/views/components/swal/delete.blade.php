@push('js')
    <script>
        Livewire.on('triggerDelete', (itemId,itemName) => {
            Swal.fire({
                title: 'Hapus?',
                text: itemName + ' akan dipadam',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Padam',
                cancelButtonText: 'Batal',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
            }).then((result) => {
         //if user clicks on delete
                if (result.value) {
             // calling destroy method to delete
                    @this.destroy(itemId);
             // success response
                    // Swal.fire({title: 'Contact deleted successfully!', icon: 'success'});
                } else {
                    // Swal.fire({
                    //     title: 'Operation Cancelled!',
                    //     icon: 'success'
                    // });
                }
            });
        });

    </script>
@endpush
