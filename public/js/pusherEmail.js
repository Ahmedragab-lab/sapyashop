// pusher email ****************************************************************
var notificationsWrapper   = $('.dropdown-notifications');
var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
var notificationsCountElem = notificationsToggle.find('span[data-count]');
var notificationsCount     = parseInt(notificationsCountElem.data('count'));
var notifications          = notificationsWrapper.find('.scrollable-container');

if (notificationsCount <= 0) {
  notificationsWrapper.hide();
}

// Enable pusher logging - don't include this in production
// Pusher.logToConsole = true;

// var pusher = new Pusher('bb82e65c18afc6a8c12f', {
//     cluster: 'mt1',
//   encrypted: true
// });

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('new_email');

// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\EmailNotification', function(data) {
    
  var existingNotifications = notifications.html();
  var newNotificationHtml =
    `<a href="" class="dropdown-item notify-item active">
        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
        <p class="notify-details">
            <b>`+data.username+`</b>
            <span class="text-muted">`+data.sms+`</span>
        </p>
    </a>`;
  notifications.html(newNotificationHtml + existingNotifications);
  notificationsCount += 1;
  notificationsCountElem.attr('data-count', notificationsCount);
  notificationsWrapper.find('.notif-count').text(notificationsCount);
  notificationsWrapper.show();

});




