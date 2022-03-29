<!-- Main modal -->
<div id="defaultModal" class="modal-delete-tutor hide-modal" aria-hidden="true">
    <div class="modal-container">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h3>
                    Decline the Tutor Verification Request.
                </h3>
                <button type="button" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>
                    By doing this action, the tutor will be set to pending again and the tutor won't be able to start giving services.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" onclick="deleteTutor()" class="error">Decline</button>
                <button onclick="closeModal()" type="button" class="cancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    const modalTutorDecline = document.querySelector('.modal-delete-tutor');
    let tutlinkModelTutorDecline;
    const modalDeclineTutor = (tutorid) => {
        modalTutorDecline.classList.add('show-modal');
        modalTutorDecline.classList.remove('hide-modal');
        tutlinkModelTutorDecline = tutorid;
    }

    const deleteTutor = () => {
        location.href = 'declinetutor/' + tutlinkModelTutorDecline;
    }



    const closeModal = () => {
        modalTutorDecline.classList.add('hide-modal');
        modalTutorDecline.classList.remove('show-modal');
    }
</script>