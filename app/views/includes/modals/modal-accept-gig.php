<!-- Main modal -->
<div id="defaultModal" class="modal-activate-gig hide-modal" aria-hidden="true">
    <div class="modal-container">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h3>
                    Accept the pending Service.
                </h3>
                <button type="button" onclick="closeModalA()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>
                    By doing this action, the gig will be set to active and the tutor will be able to start giving services on this gig.
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
    const modalA = document.querySelector('.modal-activate-gig');
    let giglinkA;
    const modalActivateGig = (gigid) => {
        modalA.classList.add('show-modal');
        modalA.classList.remove('hide-modal');
        giglinkA = gigid;
    }

    const activateGig = () => {
        location.href = 'acceptgig/' + giglinkA;
    }

    const closeModalA = () => {
        modalA.classList.add('hide-modal');
        modalA.classList.remove('show-modal');
    }
</script>