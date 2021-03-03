<!-- delete Modal -->
<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">{{t('Delete Confirmation')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">{{t('Are you sure to delete this?')}}</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{t('Cancel')}}</button>
                <a href="" id="delete-link" class="btn btn-primary mt-2">{{t('Delete')}}</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
