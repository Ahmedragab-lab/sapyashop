
        // notification price
    //=*=*=*=*=*=*=*=*=*****************************************============
    var notificationsWrapper   = $('.dropdown-notifications');
    var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
    var notificationsCountElem = notificationsToggle.find('span[data-count]');
    var notificationsCount     = parseInt(notificationsCountElem.data('count'));
    var notifications          = notificationsWrapper.find('ul.scrollable-container');
    if (notificationsCount <= 0) {
    notificationsWrapper.hide();
    }
    // Pusher.logToConsole = true;
    // var pusher = new Pusher('bb82e65c18afc6a8c12f', {
    //     cluster: 'mt1',
    //     encrypted: true
    // });

    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('new_price');
    channel.bind('App\\Events\\PriceNotification', function(data) {
    var existingNotifications = notifications.html();
    var newNotificationHtml =
    `
        <li>
            <a href="#">
                <strong>`+data.price+`</strong> `+data.time+`
            </a>
        </li>
    `;
    notifications.html(newNotificationHtml + existingNotifications);
    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    notificationsWrapper.find('.notif-count').text(notificationsCount);
    notificationsWrapper.show();
    });

