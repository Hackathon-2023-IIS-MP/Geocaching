 // Use an IIFE to avoid conflicts
 (function($) {
    // Function to fetch and update online games using Ajax
    function updateOnlineGames() {
        $.ajax({
            url: 'inc/getGames.inc.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // Clear existing table rows
                $('#gamesTable tbody').empty();

                // Populate the table with fetched data
                for (let i = 0; i < data.length; i++) {
                    $('#gamesTable tbody').append(`
                        <tr>
                            <td>${data[i].codice}</td>
                            <td>${data[i].name}</td>
                            <td>${data[i].maxGiocatori}</td>
                        </tr>
                    `);
                }
            },
            error: function(error) {
                console.error('Error fetching online games:', error);
            }
        });
    }

    // Call the function when the page loads
    $(document).ready(function() {
        updateOnlineGames();
    });
})(jQuery); // Pass jQuery as a parameter to the IIFE