Ext.onReady(function () {
    vkPrize.config.connector_url = OfficeConfig.actionUrl;

    var grid = new vkPrize.panel.Home();
    grid.render('office-vkprize-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});