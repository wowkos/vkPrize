vkPrize.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'vkprize-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('vkprize') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('vkprize_items'),
                layout: 'anchor',
                items: [{
                    html: _('vkprize_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'vkprize-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    vkPrize.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(vkPrize.panel.Home, MODx.Panel);
Ext.reg('vkprize-panel-home', vkPrize.panel.Home);
