    YUI().use('node-base', 'node-event-delegate', function (Y) {
        // This just makes sure that the href="#" attached to the <a> elements
        // don't scroll you back up the page.
        Y.one('body').delegate('click', function (e) {
            e.preventDefault();
        }, 'a[href="#"]');

        var list = Y.all('.nav-list li > a');
		list.addClass('pure-button');
    });