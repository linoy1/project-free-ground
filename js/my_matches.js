function deleteMatch(id) {
    if (confirm('האם את/ה בטוח/ה?')) {
        $.ajax({
            type: 'POST',
            url: 'delete.php',
            data: { delete_id: id },
            success: function(data) {
                $('#match' + id).hide();
            }
        });
    }
}