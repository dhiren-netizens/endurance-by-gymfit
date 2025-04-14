jQuery(".endurance_pricing_plan_period").select2({
    placeholder: "Please select the pricing plans..."
});
jQuery(document).ready(function () {
    // Initialize Select2
    jQuery('.endurance_pricing_plan_period').select2();

    // Function to update accordion items
    function updateAccordion() {
        // Get selected options
        const selectedOptions = jQuery(".endurance_pricing_plan_period option:selected");

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
    jQuery('.endurance_pricing_plan_period').on('change', function () {
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


    jQuery('#endurance_conatct_info_call_details-text-box2').attr('type', 'number');
    jQuery('#endurance_conatct_info_call_details-text-box4').attr('type', 'number');

    jQuery('#endurance_conatct_info_email_details-text-box2').attr('type', 'email');
    jQuery('#endurance_conatct_info_email_details-text-box4').attr('type', 'email');
});




function isValidURL(url) {
    var pattern = new RegExp(
        '^(https?:\\/\\/)?' + // protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])?)\\.)+[a-z]{2,}|' + // domain name
        'localhost|' + // localhost
        '\\d{1,3}(\\.\\d{1,3}){3}|' + // IPv4
        '\\[?[a-fA-F0-9]*:[a-fA-F0-9:]+\\]?)' + // IPv6
        '(\\:\\d+)?' + // port
        '(\\/[-a-z\\d%_.~+]*)*' + // path
        '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
        '(\\#[-a-z\\d_]*)?$', // fragment locator
        'i'
    );
    return pattern.test(url);
}

function checkAllURLsAndToggleButton() {
    var allValid = true;

    jQuery('.redux-social-profiles-url-text').each(function () {
        var url = jQuery(this).val();
        if (url.trim() !== '' && !isValidURL(url)) {
            allValid = false;
            return false; // exit the loop
        }
    });

    jQuery('#redux_bottom_save').prop('disabled', !allValid);
}

function validateSocialURLField(inputElement) {
    var $input = jQuery(inputElement);
    var url = $input.val().trim();
    var $container = $input.closest('.redux-social-item-container');
    var profileName = $container.find('.redux-social-profiles-item-name').text();

    // Remove existing error message
    $container.find('.error-message').remove();

    // Basic URL validation
    if (url !== '' && !isValidURL(url)) {
        var errorMessage = `Please enter a valid URL for ${profileName}.`;
        $input.after(
            `<span class="error-message" style="color:red; font-size:12px; margin-left:10px;">${errorMessage}</span>`
        );
    }

    // Update button state
    checkAllURLsAndToggleButton();

    // console.log("Validated:", profileName, url);
}

jQuery(document).ready(function () {
    // Set input types if not already set
    jQuery('.redux-social-profiles-url-text').attr('type', 'url');

    // Initial validation on page load
    jQuery('.redux-social-profiles-url-text').each(function () {
        validateSocialURLField(this);
    });

    // Validate on input
    jQuery('.redux-social-profiles-url-text').on('input', function () {
        validateSocialURLField(this);
    });

    checkAllURLsAndToggleButton(); // Ensure button state is correct on load
});

