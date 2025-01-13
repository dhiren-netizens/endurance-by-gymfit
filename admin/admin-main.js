jQuery(".endurance_pricing_plan_select").select2({
    placeholder: "Please select the pricing plans..."
});
jQuery(document).ready(function() {
    // Initialize Select2
    jQuery('.endurance_pricing_plan_select').select2();

    // Function to update accordion items based on selected options
    function updateAccordion() {
        // Clear existing accordion items
        jQuery(".accordion").empty();

        // Add new accordion items for selected options
        jQuery(".endurance_pricing_plan_select option:selected").each(function() {
            var data = jQuery(this).text();
            
            // Check if the option is already added
            var isAlreadyAdded = jQuery(".accordion-item-header").filter(function() {
                return jQuery(this).text() === data;
            }).length > 0;

            // If an option is selected and not already added, append a new accordion item
            if (data != '' && !isAlreadyAdded) {
                jQuery(".accordion").append(`
                    <div class="accordion-item">
                        <div class="accordion-item-header">${data}</div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                Content for ${data}<br><br>
                                <div class="endurance_pricing_plan_price">
                                    <label>Price: </label>
                                    <input type="number" name="endurance_pricing_plan_price[${data}][price]" id="endurance_pricing_plan_price[${data}][price]" class="endurance_pricing_plan_price[${data}][price]" value="" min="0" required> / ${data} <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                `);
                
                // Add dynamic checkbox
                jQuery(".accordion-item-body-content").last().append(`
                    <div class="dynamic-checkbox">
                        <div class="features_list">
                            <label>Features: </label>
                            <div class="endurance_feature_Workouts">
                                <label><input type="checkbox" name="endurance_pricing_plan[${data}][workouts]" checked="checked">Workouts</label>
                                <button type="button" class="remove-checkbox" data-dynamic-value="Workouts">Remove</button>
                            </div>
                            <div class="endurance_feature_Progress_Tracking">
                                <label><input type="checkbox" name="endurance_pricing_plan[${data}][progress_tracking]" checked="checked">Progress Tracking</label>
                                <button type="button" class="remove-checkbox" data-dynamic-value="Progress_Tracking">Remove</button>
                            </div>
                            <div class="endurance_feature_Nutritional_Guidance">
                                <label><input type="checkbox" name="endurance_pricing_plan[${data}][nutritional_guidance]" checked="checked">Nutritional Guidance</label>
                                <button type="button" class="remove-checkbox" data-dynamic-value="Nutritional_Guidance">Remove</button>
                            </div>
                            <div class="endurance_feature_One_on_One_Coaching">
                                <label><input type="checkbox" name="endurance_pricing_plan[${data}][one_on_one_coaching]" checked="checked">One-on-One Coaching</label>
                                <button type="button" class="remove-checkbox" data-dynamic-value="One_on_One_Coaching">Remove</button>
                            </div>
                            <div class="endurance_feature_Priority_Event_Registration">
                                <label><input type="checkbox" name="endurance_pricing_plan[${data}][priority_event_registration]" checked="checked">Priority Event Registration</label>
                                <button type="button" class="remove-checkbox" data-dynamic-value="Priority_Event_Registration">Remove</button>
                            </div>
                            <div class="endurance_feature_Bonus_Workshops_Seminars">
                                <label><input type="checkbox" name="endurance_pricing_plan[${data}][bonus_workshops_seminars]" checked="checked">Bonus Workshops/Seminars</label>
                                <button type="button" class="remove-checkbox" data-dynamic-value="Bonus_Workshops_Seminars">Remove</button>
                            </div>
                            <div class="endurance_feature_Personalized_Support">
                                <label><input type ="checkbox" name="endurance_pricing_plan[${data}][personalized_support]" checked="checked">Personalized Support</label>
                                <button type="button" class="remove-checkbox" data-dynamic-value="Personalized_Support">Remove</button>
                            </div>
                        </div>
                        <br><br>
                        <label>Add New Features</label>
                        <input type="text" name="endurance_pricing_plan[${data}][add_new_feature]"> <br>
                        <button type="button" class="add-checkbox">Add</button>
                        <input type="hidden" name="endurance_pricing_plan_add_new_feature" value="">
                    </div>
                `);
                jQuery('input[name="endurance_pricing_plan[' + data +'][add_new_feature]').keyup(function() {
                    var current_value = jQuery(this).val();
                    jQuery('input[name="endurance_pricing_plan_add_new_feature"]').val(current_value);
                });

                // Add event listeners for add and remove buttons
                jQuery(".accordion-item-body-content").last().on("click", ".add-checkbox", function() {
                    var dynamic_data = jQuery("input[name='endurance_pricing_plan_add_new_feature']").val();
                    jQuery('.features_list').last().append('<div class="endurance_feature_'+ dynamic_data.replace(/ /g,"_") +'"><label><input type="checkbox" name="endurance_pricing_plan['+ data +']['+ dynamic_data.replace(/ /g,"_").toLowerCase() +']" checked="checked"> '+ dynamic_data +'</label> <button type="button" class="remove-checkbox" data-dynamic-value="'+ dynamic_data.replace(/ /g,"_") +'">Remove</button></div>');
                    jQuery('input[name="endurance_pricing_plan[' + data +'][add_new_feature]').val('');
                });

                jQuery(".accordion-item-body-content").last().on("click", ".remove-checkbox", function() {
                    var dynamic_data = jQuery(this).attr('data-dynamic-value');
                    jQuery('.endurance_feature_'+ dynamic_data).remove();
                });
            }
        });

        // Remove accordion items for unselected options
        jQuery(".accordion-item-header").each(function() {
            var header = jQuery(this);
            var headerText = header.text();
            var isSelected = jQuery(".endurance_pricing_plan_select option:selected").filter(function() {
                return jQuery(this).text() === headerText;
            }).length > 0;

            if (!isSelected) {
                header.closest('.accordion-item').remove();
            }
        });

        // Remove previous event listeners to prevent duplication
        jQuery(".accordion-item-header").off("click").on("click", function() {
            const accordionItemHeader = jQuery(this);
            const currentlyActiveAccordionItemHeader = jQuery(".accordion-item-header.active");

            if (currentlyActiveAccordionItemHeader.length && currentlyActiveAccordionItemHeader[0] !== accordionItemHeader[0]) {
                currentlyActiveAccordionItemHeader.removeClass("active");
                currentlyActiveAccordionItemHeader.next().css("max-height", 0);
            }

            accordionItemHeader.toggleClass("active");
            const accordionItemBody = accordionItemHeader.next();
            if (accordionItemHeader.hasClass("active")) {
                accordionItemBody.css("max-height", accordionItemBody.prop('scrollHeight') + "px");
            } else {
                accordionItemBody.css("max-height", 0);
            }
        });
    }

    // Listen for Select2 events
    jQuery('.endurance_pricing_plan_select').on('select2:select select2:unselect', function() {
        updateAccordion();
    });

    // Initial call to display accordion items based on pre-selected options
    updateAccordion();
});