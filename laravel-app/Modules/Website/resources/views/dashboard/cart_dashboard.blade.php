 @extends('website::layouts.front_master')

 @section('page-style')
     <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
 @endsection

 @section('content')
     @if (count($awaitingPaymentInvoices) > 0)
         @include('website::partials.cart_dashboard')
     @else
         @include('website::partials.empty_cart_dashboard')
     @endif
 @endsection
 @section('page-script')
     <script src="{{ asset('assets/js/extended-ui-sweetalert2.js') }}"></script>
     <script>
         function deleteItem(id) {
             const swal = Swal.mixin({
                 customClass: {
                     confirmButton: "btn btn-danger",
                     cancelButton: "btn btn-secondary",
                 },
                 buttonsStyling: false,
             });

             swal.fire({
                 title: "آیا مطمعن هستید؟",
                 text: "پس از حذف امکان بازگشت وجود ندارد",
                 icon: "warning",
                 showConfirmButton: true,
                 showCancelButton: true,
                 confirmButtonText: "بله، حذف کن!",
                 cancelButtonText: "خیر",
             }).then((result) => {
                 if (result.isConfirmed) {
                     let route = "{!! route('dashboard.invoice.destroy', ['id' => '-1']) !!}";
                     route = route.replace('-1', id)

                     $.ajax({
                         type: "POST",
                         headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         },
                         url: route,
                         success: function(response) {
                             console.log('success');
                             if (response.status == 'success') {
                                 swal.fire({
                                     title: "حذف شد!",
                                     text: "آیتم مورد نظر شما با موفقیت حذف شد.",
                                     icon: "success",
                                     showConfirmButton: false,
                                     showCancelButton: false,
                                     timer: 2000,
                                 });

                                 location.reload();
                             } else {
                                 swal.fire({
                                     title: "خطا!",
                                     text: "درخواست شما با خطا روبرو شد!",
                                     icon: "error",
                                     showConfirmButton: false,
                                     showCancelButton: false,
                                     timer: 2000,
                                 });

                                 location.reload();
                             }
                         },
                         error: function(response) {
                             hideAjaxLoader()
                             console.log(response);
                         }
                     });
                 }
             });

         }
     </script>
 @endsection
