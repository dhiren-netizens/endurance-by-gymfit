jQuery(".endurance_pricing_plan_select").select2({
    placeholder: "Please select the pricing plans..."
});
jQuery(document).ready(function () {
    // Initialize Select2
    jQuery('.endurance_pricing_plan_select').select2();

    // Function to update accordion items
    function updateAccordion() {
        // Get selected options
        const selectedOptions = jQuery(".endurance_pricing_plan_select option:selected");

        // Loop through selected options
        selectedOptions.each(function () {
            const data = jQuery(this).text();

            // Check if the accordion item already exists
            if (jQuery(".accordion-item-header:contains('" + data + "')").length === 0) {
                jQuery(".accordion").append(`
                    <div class="accordion-item">
                        <div class="accordion-item-header">${data}</div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <div class="endurance_pricing_plan_price">
                                    <label>Price: </label>
                                    <input type="number" name="endurance_pricing_plan_price[${data}][price]" class="endurance_pricing_plan_price_input" required>
                                    / ${data} <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                `);
            }
        });

        // Remove items for unselected options
        jQuery(".accordion-item-header").each(function () {
            const headerText = jQuery(this).text();
            if (selectedOptions.filter((_, opt) => jQuery(opt).text() === headerText).length === 0) {
                jQuery(this).closest('.accordion-item').remove();
            }
        });

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

    // Update accordion on select change
    jQuery('.endurance_pricing_plan_select').on('change', function () {
        updateAccordion();
    });


    jQuery(document).on("change", ".endurance_pricing_features_list_div .feature-item input[type='checkbox']", function () {
        const plan = jQuery(this).attr("name").match(/\[([^\]]+)\]/)[1]; // Extract plan name
        const featureKey = jQuery(this).attr("name").match(/\[features\]\[([^\]]+)\]/)[1]; // Extract feature key
    
        if (!jQuery(this).is(':checked')) {
            // Track removed features
            if (confirm("Are you sure you want to remove this feature?")) {
                const removedFeaturesInput = jQuery(`input[name='endurance_pricing_plan_features[${plan}][removed_features]']`);
                if (removedFeaturesInput.length) {
                    let removedFeatures = JSON.parse(removedFeaturesInput.val());
                    removedFeatures.push(featureKey);
                    removedFeaturesInput.val(JSON.stringify(removedFeatures));
                } else {
                    jQuery(this).closest('.endurance_pricing_features_list_div').append(`
                        <input type="hidden" name="endurance_pricing_plan_features[${plan}][removed_features]" value='["${featureKey}"]'>
                    `);
                }
        
                // Remove the feature from the DOM
                jQuery(this).parent().remove();
            }
        }
    });    

    // Delegate add feature button functionality
    jQuery(document).on("click", ".add-feature-btn", function () {
        const plan = jQuery(this).data("plan");
        const newFeature = jQuery(`.add-new-feature-input[data-plan='${plan}']`).val().trim();

        if (newFeature) {
            const featureKey = newFeature.replace(/\s+/g, "_").toLowerCase();
            const featureHtml = `
                <div class="feature-item">
                    <label>
                        <input type="checkbox" name="endurance_pricing_plan_features[${plan}][features][${featureKey}]" checked>
                        ${newFeature}
                    </label>
                </div>`;
            
            // Append the new feature to the correct plan's features list
            jQuery(this).closest('.endurance_pricing_features_list_div').find('.features_list').append(featureHtml);

            // Clear the input field
            jQuery(`.add-new-feature-input[data-plan='${plan}']`).val('');
        }
    });

    // Initial call
    updateAccordion();
});