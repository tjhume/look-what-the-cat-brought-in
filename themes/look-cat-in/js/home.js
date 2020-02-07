jQuery(document).ready(function(){
    //Tabs
    jQuery("#about-tabs a").click(function(event){
        event.preventDefault();
        if(!jQuery(this).hasClass("active")){
            var href = jQuery(this).attr("href");
            SetActiveTab(href.substr(1, href.length));
        }
    });
});

//Functions

function SetActiveTab(tabName){
    var currentLink = jQuery("#about-tabs a.active");
    var currentActive = jQuery(currentLink).attr("href");
    var newLink = "#about-tabs a[href='#" + tabName + "']";
    var newTab = jQuery("#" + tabName);

    jQuery(currentLink).removeClass("active");
    jQuery(newLink).addClass("active");
    jQuery(currentActive).removeClass("active");
    jQuery(newTab).addClass("active");
}
