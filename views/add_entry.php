<section class="app__view app__view-add-entry app__view-hidden">
    <div class="view__container">
        <div class="form__notification form__notification-success form__notification-hidden">
            <img src="<?= ICON_DIR . "form_success.svg" ?>" alt="Form success">
            <span>Success!</span>
        </div>
        <span class="content__choice-box content__choice-view-start">Back</span>
        <form id="form_add_entry" class="form__add-entry">
            <input type="hidden" name="e_token" value="1"/>
            <label for="e_date">
                <span>Date</span>
                <input type="date" name="e_date" value="<?= date( "Y-m-j" ) ?>"/>
            </label>
            <label for="e_time">
                <span>Hours</span>
                <input type="number" name="e_time"/>
            </label>
            <label for="e_client">
                <span>Client</span>
                <input type="text" name="e_client"/>
            </label>
            <label for="e_description">
                <span>Description</span>
                <textarea name="e_description"></textarea>
            </label>
            <button class="js__submit-add-entry">Add Entry</button>
            <span class="js__fill-form">Fill</span>
            <script>
                /* Fill form with dummy value for quick testing */
                document.addEventListener('click', function(event){
                    if ( !event.target.matches( '.js__fill-form' ) ) return;
				        (document.getElementsByName( 'e_date' )).item(0).setAttribute( 'value', '<?= date( "Y-m-j" ) ?>' );
				        (document.getElementsByName( 'e_time' )).item(0).setAttribute( 'value', '2' );
				        (document.getElementsByName( 'e_client' )).item(0).setAttribute( 'value', 'Testoman' );
				        (document.getElementsByName( 'e_description' )).item(0).innerHTML = 'CSS Responsive';
                } );
            </script>
        </form>
    </div>
</section>