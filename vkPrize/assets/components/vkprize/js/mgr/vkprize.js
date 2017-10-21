var vkPrize = function (config) {
    config = config || {};
    vkPrize.superclass.constructor.call(this, config);
};
Ext.extend(vkPrize, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('vkprize', vkPrize);

vkPrize = new vkPrize();