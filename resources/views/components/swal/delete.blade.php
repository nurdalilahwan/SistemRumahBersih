@push('js')
    <script>
        Livewire.on('triggerDelete', (itemId,itemName) => {
            Swal.fire({
                title: 'Are You Sure?',
                text: itemName + ' record will be deleted!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Delete!',
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