<!DOCTYPE html>
<html>
<head>
    <title>Friends Contact Details</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Friends Contact Details</h1>
    <div id="friends-container"></div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'friends.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    displayFriendsFromSalem(data);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching friends data:', error);
                }
            });
        });

        function displayFriendsFromSalem(data) {
            var friendsContainer = $('#friends-container');
            friendsContainer.empty();

            $.each(data, function(index, friend) {
                if (friend.place === 'salem') {
                    var friendDetails = $('<div>').addClass('friend-details');
                    friendDetails.append('<h3>' + friend.name + '</h3>');
                    friendDetails.append('<p>Place: ' + friend.place + '</p>');
                    friendDetails.append('<p>Mobile: ' + friend.mobile + '</p>');
                    friendsContainer.append(friendDetails);
                }
            });
        }
    </script>
</body>
</html>