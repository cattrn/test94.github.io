$(document).ready(function() {
$('#calendar').kalendar({

    // Events are objects, placed inside of an array
    events: [
        {
            title: "Title of event",
            start: {
                date: YYYYMMDD or "YYYYMMDD",   // "20131230"
                time: "HH.MM"                   // "12.00"
            },
            end: {
                date: YYYYMMDD or "YYYYMMDD",   // "20131230"
                time: "HH.MM"                   // "20.00"
            },
            location: "Location",               // "London"
            url: "http://*.*",                  // "http://example.com"
            color: "string"                     // "red" string containing reference to the eventcolorsobject
        }
    ],
    // Custom colorsets to set a specific color to an event. If one of the three variables isn’t set the inherit value will be used.
    eventcolors: {
        blue: {
            background: "#FFF",                 // Backgroundcolor, optional
            text: "#2c8884",                       // Text color, optional
            link: "#2c8884"                        // Link color, optional
        }
    }

    // Currently available colors are: red, blue, green, yellow. Red is the default.
    color: "blue",

    // Default is Monday, but any day of the week is applicable.
    firstDayOfWeek: "Monday",

    // Google Calendar reference are objects, place inside of an array to support multiple calendars.
    // If you are unsure how to get an API-key visit: https://developers.google.com/google-apps/calendar/firstapp
    // If you are unsure how to get your calendar visit: https://support.google.com/calendar/answer/63962?hl=en
    googleCal: [{
        calendar: "music@monashclubs.org",
        apikey: "AIzaSyCt087J7YYZWDM8s4m0uK8xYjdAo2eicIM"
    },
    {
        calendar: "music@monashclubs.org",
        apikey: "AIzaSyCt087J7YYZWDM8s4m0uK8xYjdAo2eicIM"
    }],

    // Any name is possible, but note that not all names might fit in the UI

    monthHuman: [["JAN","January"],["FEB","February"], etc... ],

    // Regarding name lengths same applies here

    dayHuman: [["S","Sunday"],["M","Monday"], etc... ],

    // The text which represents links for events

    urlText: "View on Web",

    // Callbackevents will be fired when a certain criteria is met. The following are the currently supported events

    onInitiated: function() {},                 // After the kalendar have been fully initiated. E.g when everything is loaded
    onGoogleParsed: function() {},              // After Google Calendar events, if they exist, have been parsed
    onMonthChanged: function() {},              // After events passed to the plugin have been parsed
    onDayShow: function() {
      
    },                   // When a specific day have started to load. E.g when a day with an event attached to it is clicked
    onGridShow: function() {},                  // When the grid of days have started to load. E.g when a specific dayview have been cancelled
    onDayClick: function(e) {}                  // When a day gets clicked, no matter if it contains any event or not. Passed to this function is whether the day                                                is from this month or if it’s the current day. This can be accessed in the variable e.data.info

    // I decided to track people using this plugin in order to make it even better. 
    // The things I collect are current URL, color or kalendar, whether you decided to show days or not and your selected first day of the week.
    // Pass this variable as false and no tracking whatsoever will be done.
    // ***TRUE IS SET AS DEFAULT*** 
    tracking: true
});
});
