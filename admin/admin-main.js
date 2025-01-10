jQuery(".endurance_pricing_plan_select").select2({
    placeholder: "Please select the pricing plans..."
});
jQuery('.endurance_pricing_plan_select').on('change', function() {
    var data = jQuery(".endurance_pricing_plan_select option:selected").text();
    
    // If an option is selected, append a new accordion item
    if (data != '') {
        jQuery(".accordion").append('<div class="accordion-item"> <div class="accordion-item-header">' + data + '</div> <div class="accordion-item-body"><div class="accordion-item-body-content"> Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks. </div></div>');
    } else {
        // If no option is selected, remove the last accordion item
        var accordionItems = jQuery(".accordion-item");
        if (accordionItems.length > 0) {
            accordionItems.remove();
        }
    }

    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

    accordionItemHeaders.forEach(accordionItemHeader => {
        accordionItemHeader.addEventListener("click", event => {

            const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
            if (currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader !== accordionItemHeader) {
                currentlyActiveAccordionItemHeader.classList.toggle("active");
                currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
            }

            accordionItemHeader.classList.toggle("active");
            const accordionItemBody = accordionItemHeader.nextElementSibling;
            if (accordionItemHeader.classList.contains("active")) {
                accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
            } else {
                accordionItemBody.style.maxHeight = 0;
            }

        });
    });
});