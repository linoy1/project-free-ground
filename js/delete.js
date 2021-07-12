function deleteMatch(id) {
    if (confirm('האם את/ה בטוח/ה?')) {
        $.ajax({
            type: 'POST',
            url: 'delete.php?type=match',
            data: { delete_id: id },
            success: function(data) {
                $('#match' + id).hide();
            }
        });
    }
}
function deleteGround(id) {
    if (confirm('האם את/ה בטוח/ה?')) {
        $.ajax({
            type: 'POST',
            url: 'delete.php?type=ground',
            data: { delete_id: id },
            success: function(data) {
                $('#ground' + id).hide();
            }
        });
    }
}