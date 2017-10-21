vkPrize.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'vkprize-panel-home',
            renderTo: 'vkprize-panel-home-div'
        }]
    });
    vkPrize.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(vkPrize.page.Home, MODx.Component);
Ext.reg('vkprize-page-home', vkPrize.page.Home);