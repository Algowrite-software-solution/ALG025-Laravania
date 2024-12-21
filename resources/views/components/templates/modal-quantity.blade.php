<template data-tempalte-name="modal-quantity">
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered d-flex justify-content-center" role="document">
            <div class="modal-content lrv-quantity lrv-rounded-3 lrv-b">
                <div class="modal-header w-100 d-flex justify-content-end close" data-dismiss="modal" aria-label="Close">
                    <i class="fa-regular fa-rectangle-xmark lrv-text-light lrv-admin-close fa-lg " aria-hidden="true"></i>
                    {{-- <div class="modal-title lrv-fs-5 lrv-fw-bold lrv-text-light w-100 pt-2" id="exampleModalLongTitle ">Are You Sure ?</div> --}}
                    
                </div>
                <div class="modal-body lrv-text-light lrv-popup-body lrv-fs-8 text-center pt-0 pb-0">
                   <div class="d-flex justify-content-center gap-3">
                    <div class="lrv-fs-6">Available Quantity</div>
                    <div class=""><input class="lrv-quantity-input" type="text"></div>
                   </div>
                   <form action="">

                       <div class="py-3"> <input class="lrv-quantity-selector lrv-rounded-2 border-0 px-2" type="number" id="quantity" name="quantity" min="0" step="1" value="0"></div>
                   </form>
                </div>
                <div class="modal-footer d-flex justify-content-center gap-4 pt-1 pb-4">
                    <div class="d-flec justify-content-center align-items-center pb-4">
                        <button type="submit" class="btn lrv-text-light lrv-fs-7 lrv-quantity-button lrv-rounded-2">Add To Bill</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
