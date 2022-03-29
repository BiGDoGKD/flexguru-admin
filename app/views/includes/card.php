<?php
             foreach($data['cards'] as $card) {
                $filters = $card['filters'];
                $cardTitle = $card['title'];
                $icon = $card['icon'];
                ?>
<div class="card">

                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="<?php echo $icon ?> fa-2x"></i>
                    </div>
                    <div class="card-body-content">
                        <h2><?php echo $cardTitle ?> </h2>
                        <span class="text-5xl font-bold text-slate-700" id="count-text-<?php echo $cardTitle ?>">
                            <?php echo $filters[0]['count'] ?>
                        </span>

                        <a href="#" class="text-indigo-500 underline">
                            View All <?php echo $cardTitle ?>
                        </a>
                    </div>
                </div>

                <div class="card-body-content-filter">
                    <?php foreach($filters as $filter) {
                                        $title = $filter['title'];
                                        $count = $filter['count'];
                                        ?>
                        <button 
                            class="card-body-content-filter-button <?php echo $title == 'All' ? 'card-body-content-filter-button-active' : '' ?>"
                            id="filter-button"
                            alt-count="<?php echo $count ?>"
                            alt-card-title="<?php echo $cardTitle ?>"
                        >
                            <?php echo $title; ?>
                        </button>
                                 <?php }; ?>
                </div>
</div>



<?php }; ?>


<script>
    var buttons = document.querySelectorAll('#filter-button');
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            var count = button.getAttribute('alt-count');
            var cardTitle = button.getAttribute('alt-card-title'); 
            var countText = document.querySelector('#count-text-' + cardTitle);
            countText.innerHTML = count;
            
            buttons.forEach(function(button) {
                if(button.getAttribute('alt-card-title') == cardTitle) {
                    button.classList.remove('card-body-content-filter-button-active');
                }
                
            });
            button.classList.add('card-body-content-filter-button-active');
        });
    });    

</script>
