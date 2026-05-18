document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input'); // Search bar
    const toolList = document.getElementById('tool-list'); // List of tools

    // Event listener for typing in the search input
    searchInput.addEventListener('input', function() {
        const searchValue = searchInput.value.toLowerCase(); // Convert to lowercase for case-insensitive search
        const profiles = toolList.getElementsByClassName('single-profile'); // Get all the profiles

        // Loop through each tool profile and check if the name matches
        Array.from(profiles).forEach(function(profile) {
            const profileName = profile.querySelector('.profile-icon-name').textContent.toLowerCase(); // Tool name

            // If the profile name includes the search value, show it; otherwise, hide it
            if (profileName.includes(searchValue)) {
                profile.style.display = ''; // Show
            } else {
                profile.style.display = 'none'; // Hide
            }
        });
    });
});
