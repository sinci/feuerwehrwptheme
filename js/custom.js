

document.addEventListener("DOMContentLoaded", function() {
    let parentItems = document.querySelectorAll('.menu-item.menu-item-has-children');

    parentItems.forEach(function(parentItem) {
        let dropParentIcon = document.createElement('span');
        dropParentIcon.setAttribute("uk-icon", "icon: chevron-down");
        parentItem.querySelector('a').appendChild(dropParentIcon);
    });
});
