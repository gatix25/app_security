<!DOCTYPE html>
<html>
<head>
    <title>Aktivity</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Aktivity</h1>
    <ul id="activity-list"></ul>
    
    <script>
        function fetchActivities() {
            $.getJSON('/api/activities', function(data) {
                $('#activity-list').empty();
                data.forEach(function(activity) {
                    $('#activity-list').append('<li>' + activity.type + ' at ' + activity.timestamp + '</li>');
                });
            });
        }
        
        $(document).ready(function() {
            fetchActivities();
            setInterval(fetchActivities, 15000);
        });
    </script>
</body>
</html>
