var parallaxsolutions = (typeof parallaxsolutions == "undefined" || !parallaxsolutions) ? {} : parallaxsolutions;

parallaxsolutions.brutilsvalidators = (function ($) {
    var pub = {
        isEmpty: function (value) {
            return value === null || value === undefined || value == [] || value === '';
        },
        addMessage: function (messages, message, value) {
            messages.push(message.replace(/\{value\}/g, value));
        },
        ddd: function (value, messages, options) {
            if (options.skipOnEmpty && pub.isEmpty(value)) {
                return;
            }

            var valid = options.VALID_DDD.indexOf(value) > 0;

            if (!valid) {
                pub.addMessage(messages, options.message, value);
            }
        }
    };

    return pub;
})(jQuery);