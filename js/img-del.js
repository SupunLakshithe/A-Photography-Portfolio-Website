document.querySelectorAll('.deleteBtn').forEach(btn => {
    btn.addEventListener('click', function () {
        if (confirm('Are you sure you want to delete this image?')) {
            // Get the image ID from the data-id attribute
            const imageId = this.getAttribute('data-id');

            // Make an AJAX request to delete.php with the image ID
            fetch('fun-img-del.php', {
                method: 'POST',
                body: JSON.stringify({ id: imageId }),
                headers: { 'Content-Type': 'application/json' }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Image deleted successfully, update the page
                        this.parentNode.remove();
                        window.location.href = 'http://localhost/photgrapher-website/permit/gal-del.php';
                    } else {
                        alert('Failed to delete the image.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    });
});