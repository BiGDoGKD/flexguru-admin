<!-- Main modal -->
<div id="defaultModal" class="modal-activate-tutor hide-modal" aria-hidden="true">
    <div class="modal-container">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h3>
                    Accept Tutor Verification.
                </h3>
                <button type="button" onclick="closeModalA()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>
                    By doing this action, the tutor will be set to active and the tutor will be able to start giving services.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" onclick="activateGig()" class="success">Accept</button>
                <button onclick="closeModalA()" type="button" class="cancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    const modalTutorAccept = document.querySelector('.modal-activate-tutor');
    let giglinkA;
    const modalAcceptTutor = (gigid) => {
        modalTutorAccept.classList.add('show-modal');
        modalTutorAccept.classList.remove('hide-modal');
        giglinkA = gigid;
    }

    const activateGig = () => {
        location.href = 'accepttutor/' + giglinkA;
    }

    const closeModalA = () => {
        modalTutorAccept.classList.add('hide-modal');
        modalTutorAccept.classList.remove('show-modal');
    }
</script>