<template data-tempalte-name="modal-confirm">
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered d-flex justify-content-center" role="document">
            <div class="modal-content lrv-popup-confirm lrv-rounded-3 lrv-b">
                <div class="modal-header w-100 text-center">
                    <div class="modal-title lrv-fs-5 lrv-fw-bold lrv-text-light w-100 pt-2" id="exampleModalLongTitle ">
                        Are You Sure ?</div>

                </div>
                <div class="modal-body lrv-text-light lrv-popup-body lrv-fs-8 text-center pt-0 pb-0">
                    Do you really want to delete these records? <br>
                    This process cannot be undone.
                </div>
                <div class="modal-footer d-flex justify-content-center gap-4 pt-0 pb-4">
                    <div class="d-flec justify-content-center align-items-center">
                        <button data-modal-action type="submit"
                            class="btn btn-primary lrv-fs-8 lrv-popup-button lrv-rounded-2">Ok</button>
                    </div>
                    <div class="d-flec justify-content-center align-items-center">
                        <button type="cancel"
                            class="btn lrv-bg-light lrv-fs-8 lrv-text-dark lrv-popup-button lrv-rounded-2"
                            data-dismiss="confirmModal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
