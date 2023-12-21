 
 

    
 // Use an IIFE to avoid conflicts
 (function($) {
    // Function to fetch and update online games using Ajax
    function updateOnlineGames(filter) {
        $.ajax({
            url: 'inc/getGames.inc.php?type=' + filter,
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

        //Variable for the filter
        let filter = "all"; //default mode is all (show all the matches in all the modalities)
        

        updateOnlineGames(filter);

        document.getElementById("bt-filter").addEventListener("click", () => {
            // Get the combo box element
            var comboBox = document.getElementById("myComboBox");

            var h1FilterElement = document.getElementById("h1-filter");

            // Get the selected value
            filter = comboBox.value;

            if(filter == "S")
            {
                h1FilterElement.innerHTML = "Online Matches in Solo" ;
            }
            else if(filter == "D")
            {
                h1FilterElement.innerHTML = "Online Matches in Duo";
            }

            updateOnlineGames(filter);

            
        
            // Change the text using innerHTML
            

            // Display the selected value (you can do something else with it)
            alert("Selected value: " + selectedValue);
        });
    });
})(jQuery); // Pass jQuery as a parameter to the IIFE


