<!-- Main modal -->
<div id="defaultModal" class="modal-delete-gig hide-modal" aria-hidden="true">
    <div class="modal-container">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h3>
                    Decline the pending Service.
                </h3>
                <button type="button" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>
                    By doing this, the gig will be set to inactive and the tutor will be notified.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" onclick="deleteGig()" class="error">Decline</button>
                <button onclick="closeModal()" type="button" class="cancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    const modal = document.querySelector('.modal-delete-gig');
    let giglink;
    const modalDeleteGig = (gigid) => {
        modal.classList.add('show-modal');
        modal.classList.remove('hide-modal');
        giglink = gigid;
    }

    const deleteGig = () => {
        location.href = 'declinegig/' + giglink;
    }



    const closeModal = () => {
        modal.classList.add('hide-modal');
        modal.classList.remove('show-modal');
    }
</script>